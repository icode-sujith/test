     


<?php
    $name="";
     $address="";
     $m="";
     $f="";
     $course="";
     $year="";
     
    
?>
 {
   



<?php

if(isset($_POST["submit"]))
{
     $name=$_POST["n1"];
     $address=$_POST["ad"];
     $m=$_POST["M"];
     $f=$_POST["F"];
     $course=$_POST["course"];
     $year=$_POST["year"];
}
?>

<html>
    <head></head>
    <body>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>gender</th>
                <th>course</th>
                <th>Year</th>
            </tr>
            <tr>
                <th><?php echo $name;?></th>
                <th><?php echo $address;?></th>
                <th><?php echo $m;?></th>
                <th><?php echo $f;?></th>
                <th><?php echo $course;?></th>
                <th><?php echo $year;?></th>
            </tr>
        </table>
    </body>
</html>