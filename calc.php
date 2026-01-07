<?php
if (isset($_GET["sub"])) 
{
    if (empty($_GET["num1"]) && empty($_GET["num2"])) 
    {
        echo "Enter Number";
    }
    else
    {
        $num1 = intval($_GET["num1"]);
        $num2 = intval($_GET["num2"]);
        echo $num1 - $num2;
    }
} 
if (isset($_GET["add"])) 
{
    $num1=0;
    $num2=0;
    
    if (empty($_GET["num1"]) && empty($_GET["num2"])) 
    {
        echo "Enter Number";
    }
    else
    {
       
	$num1 = intval($_GET["num1"]);
        $num2 = intval($_GET["num2"]);
        $ans = $num1 + $num2;
	echo $ans;
    }
} 
?>
<html>
<body>
    <h2>Enter Numbers</h2>
    <form action=" " method="get">
       
        <label for="cnum1">
        Enter Number 1:
        </label>
        
        <input type="text" name="num1" value="<?php if (isset($_GET["num1"])) {echo $num1;} ?>">
	  <br>
        <label for="cnum2">
        Enter Number 2:
        </label>
	<input type="text" name="num2" value ="<?php if (isset($_GET["num2"])) {echo $num2;} ?>">

       <br>
        <input type="submit" value="ADDITION" name="add">
	<input type="submit" value="SUBTRACTION" name="sub">
	<br>
	   <label for="cnum3">
        Answer  :
        </label>
	<input type="text" name="num3" value="<?php if (isset($_GET["add"])) {echo $ans;} ?>">

    </form>
</body>
</html>

