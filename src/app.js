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
			<table class="table table-striped table-hover" id="example1">
			<caption style="caption-side: top;font-weight:bold;">
				${key}
			</caption>

			<thead style="border:1px solid black;">
				<tr>
					<th>Čas</th>
					<th>Kurz</th>
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

			// Just to update the styles and classes
			data.forEach(item => updateCount(item));

		})
		.catch(e => console.error(e));
});
