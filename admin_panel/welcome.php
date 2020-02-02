<script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style type="text/css">
      body {
        font-family: Raleway;
      }
        .page-header{ font: 14px sans-serif; text-align: center; }
        #todoInput { margin-left: 55px; height: 35px; }
        ol#todoList { margin-left: 35px; margin-top: 25px; }
    </style>
</head>
<body>
<form class="form-horizontal" method="post" action="blog/addarticle.php">
<fieldset>

<!-- Form Name -->
<legend class="text-center">Formulár na vytvorenie príspevku do blogu</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="article_title">Nadpis</label>  
  <div class="col-md-8">
  <input id="article_title" name="nadpis" type="text" placeholder="article title" class="form-control input-md">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
<label class="col-md-8 control-label" for="text">Text</label> 
<div class="col-md-8">
  <textarea name="editor" id="editor" rows="10" cols="100"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-8 control-label" for="article_date">Dátum</label>  
  <div class="col-md-8">
  <input id="article_date" name="datum" type="text" placeholder="Dátum publikácie" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-8 control-label" for="article_authors">Autor</label>  
  <div class="col-md-8">
  <input id="article_authors" name="autor" type="text" placeholder="Autor príspevku" class="form-control input-md">
    
  </div>
</div>
            <div class="form-group">
              <div class="col-md-4 text-center">
                <input type="submit" name="btn" class="btn btn-primary" value="Pridaj článok do blogu">
              </div>
            </div>

</fieldset>
</form>

<script>
  CKEDITOR.replace('editor');
</script>