<?php
$connect= mysql_connect("localhost", "root", "");
mysql_select_db("test", $connect);
$result=mysql_query("select dontes_smp.Job_ID , dontes_smp.Keresztnev , dontes.smp.Vezeteknev from dontes.smp where dontes_smp.Job_ID= ". $_POST["Job_ID"], $connect);
$row= mysql_fetch_assoc($result);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <?php include "urlap.php"; 
        $data=[];
        while($row=mysql_fetch_assoc($result)){
            $data[]=$row;
        }
    ;?>
         <table class="table table-striped">
            <thead>
                <tr>
                    <td>
                    Név    
                    </td> 
                </tr>
            </thead>
            <tbody>
               <?php foreach($data as $row ):  ?>
                <tr>
                    <td>
                        <?php echo $row["Keresztnev"] ?>   
                    </td>
                    <td>
                        <?php echo $row["Vezeteknev"] ?>
                    </td>
                    <td>
                        <a class="btn btn-success"  href="edit.php?id=<?php echo $row["id"] ?>"><span class="glyphicon glyphicon-scissors"></span> Szerkesztés</a> 
                    </td>
                    <td>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row["id"] ?>"><span class="glyphicon glyphicon-trash"></span> Törlés</a> 
                    </td>
                </tr> 
                <?php endforeach;?>
                
            </tbody>
        </table>
        <form action="update.php" method="POST">
            <input type="text" name="nev" value="<?php echo $row["nev"]?>">
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
            <input type="text" name="tel" value="<?php echo $row["tel"]?>">
            <input type="submit">
            
        </form>
            
    </body>
</html>


