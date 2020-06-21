<form action="" method="post">
<input type="text" name="n" value="" placeholder="Enter Height"><br>
<br>
<input type="text" name="n2" value="" placeholder="Enter Width"><br>
<br>
<input type="submit" name="a" value="SUBMIT">

 

<?php
if(isset($_POST['a']))
{
    $n =$_POST['n'];
    $n2 =$_POST['n2'];
    $mul = $n*$n2;
    echo "Area is ".$mul;
}
?>