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
        <form action="update.php" method="POST">
         <table class="table table-striped">
            <thead>
                <tr>
                    <td>
                    Találat   
                    </td> 
                </tr>
            </thead>
            <tbody>
               <?php foreach($data as $row ):  ?>
                <tr>
                    <td>
                       <input type="text" name="Job_ID" value="<?php echo $row["Job_ID"]?>">  
                    </td>
                    <td>
                        <input type="text" name="Vezeteknev" value="<?php echo $row["Vezeteknev"]?>">  
                    </td>
                    <td>
                        <input type="text" name="Keresztnev" value="<?php echo $row["Keresztnev"]?>">
                    </td>
                    <td>
                        <input type="text" name="FOI" value="<?php echo $row["FOI"]?>">    
                    </td>             
                    <td>
                        <input type="submit" class="btn btn-info" value="Mentés">
                    </td>
                </tr> 
                <?php endforeach;?>
            </tbody>
        </table>
        </form>
                <a class="btn btn-warning" href="http://localhost/szargep"><span class="glyphicon glyphicon-arrow-left"></span> Vissza</a>            
    </body>
</html>