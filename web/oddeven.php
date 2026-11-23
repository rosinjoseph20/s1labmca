<html>
<head>
<title>Odd or Even</title>
</head>
<body>
<h2>ODD OR EVEN CHECKING</h2>
<form method="GET">
enter a number:
<input type="text" name="num">
<input type="submit" name="submit" value="CHECK">
</form>

<?php
if(isset($_GET['submit']))
{
$n=$_GET['num'];
if($n%2==0)
{
echo "$n is an even number";
}
else
{
echo "$n is odd  number";
}
}
?>
</body>
</html>
