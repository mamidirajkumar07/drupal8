<form action="" method="post">
<input type="text" name="n" value="" placeholder="Enter Number1"><br>
<input type="text" name="n2" value="" placeholder="Enter Number2"><br>
<input type="submit" name="a" value="ADD + ">
<input type="submit" name="m" value="MUL * ">
<input type="submit" name="d" value="DIV / ">
<input type="submit" name="s" value="SUB - ">
</form>

 

<?php
if(isset($_POST['a']))
{
    $n =$_POST['n'];
    $n2 =$_POST['n2'];
    $add = $n+$n2;
    echo "Addition is ".$add;
}

 

if(isset($_POST['m']))
{
    $n =$_POST['n'];
    $n2 =$_POST['n2'];
    $mul = $n*$n2;
    echo "Multiplication is ".$mul;
}

 

if(isset($_POST['d']))
{
    $n =$_POST['n'];
    $n2 =$_POST['n2'];
    $div = $n/$n2;
    echo "Division is ".$div;
}

 

if(isset($_POST['s']))
{
    $n =$_POST['n'];
    $n2 =$_POST['n2'];
    $sub = $n-$n2;
    echo "Subtraction is ".$sub;
}