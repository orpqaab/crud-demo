<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
    <form action="search.php" method="POST">
  <div class="form-group">
    <label for="Job_ID">Job ID-re keresés</label>
    <input type="text" class="form-control" name="Job_ID" placeholder="Job ID">
  </div>
  <div class="form-group">
    <label for="Vezeteknev">Vezetéknévre keresés</label>
    <input type="text" class="form-control" name="Vezeteknev" placeholder="Vezetéknév">
  </div>
  <button type="submit" class="btn btn-default">Keresés</button>
    </form>

            
        <?php

        ?>
    </body>
</html>
