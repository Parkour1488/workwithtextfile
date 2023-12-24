<?php 
include("webclass.php");
$sc=new SiteClass;
?> 
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Работа с текстовым файлом</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="jqui/jquery-ui.css" rel="stylesheet">
<script src="js/jquery-3.7.1.js"></script>
<script src="jqui/jquery-ui.js"></script>
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
 
<main class=" w-50 m-auto">
  <form action="webclass.php" method="post">
  Имя студента :
  <input type="text" class="form-control" name= "name" placeholder="Имя студента" required >
	<br>
  <hr>
  Год рождения студента :
  <select name="year" id="year" class="form-select form-select-sm" required >
  <?php $sc->year_select(); ?>	
	</select>
	<br>
  <button type="submit" id="sbmbutton" name="submit" class="btn btn-primary">Добавить</button>
   </form>

   <div class="tab">
    <?php $sc->print_data_table(); ?>
   </div>
</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
 
</script>
    </body>
</html>
