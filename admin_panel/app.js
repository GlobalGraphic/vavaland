// Function which renders schedule items divided into tables depending on date
const getSchedule = schedule => {
	days = {};
	schedule.forEach(item => {
		if (!days[item.date]) days[item.date] = [];
		days[item.date].push(item);
	});

	let html = "";
	Object.keys(days).forEach(key => {
		const header = `
			<table class="table table-striped table-hover">
			<caption>
				${key}
			</caption>

			<thead>
				<tr>
					<th>Čas</th>
					<th>Workout</th>
					<th>Obsadenosť</th>
				</tr>
			</thead>

			<tbody>
		`;

		let items = "";
		days[key].forEach(item => {
			items += `

			<tr id="${item.id}" data-ref="item" data-maximum-number="${item.max}">
				<td>${item.time}</td>
				<td>${item.description}</td>
				<td>
					<div class="badge badge-success">
						<i class="fa fa-unlock"></i>
						<span data-ref="counter">${item.number}/${item.max}</span>
					</div>
					<button>
						Reserve
					</button>
				</td>
			</tr>
		`;
		});

		html += `${header}${items}</table>`;
	});

	return html;
};

// Local database of data got from the server
let data = {};

// Object where all timeouts are stored
const timeouts = {};

// Updates the counter element, sets classes depending of the actual value
const updateCount = item => {
	const element = document.getElementById(item.id);

	// If maximum has been reached
	if (parseInt(item.number) === parseInt(item.max)) {
		const badgeElement = element.querySelector(".badge");
		const lock = badgeElement.querySelector("i");
		badgeElement.classList.add("badge-danger");
		badgeElement.classList.remove("badge-success");
		lock.classList.add("fa-lock");
		lock.classList.remove("fa-unlock");
	}

	// Update the count/max
	const counterElement = element.querySelector('[data-ref="counter"]');
	counterElement.innerHTML = `${item.number}/${item.max}`;
};

window.addEventListener("load", async () => {
	// Get all items
	axios
		.get("rozvrh.php")
		.then(response => {

			// Store it locally
			data = response.data;

			// Render html
			document.getElementById("schedule").innerHTML = getSchedule(response.data);
			console.log(data);

			// Just to update the styles and classes
			data.forEach(item => updateCount(item));

			// After reservation button is clicked
			const buttons = document.querySelectorAll("button");
			buttons.forEach(btn => {
				btn.addEventListener("click", event => {
					const parentElement = event.target.parentElement.parentElement;
					const item = data.find(item => item.id === parentElement.id);

					if (parseInt(item.number) < parseInt(item.max)) {
						item.number++;

						// clear all unfilled other timeouts for ajax request
						if (timeouts[item.id]) clearTimeout(timeouts[item.id]);

						// create new timeout with ajax call
						timeouts[item.id] = setTimeout(() => {
							axios({
								method: "POST",
								url: "update.php",
								data: {
									id: item.id,
									value: item.number
								},
								headers: {
									"Content-Type": "application/json"
								}
							})
								.then(response => {
									// Whatever
									console.log(response.data);
								})
								.catch(e => {
									item.number--;
									updateCount(item);
									console.error(e);
								});
						}, 1500);
					}
					updateCount(item);
				});
			});
		})
		.catch(e => console.error(e));
});
