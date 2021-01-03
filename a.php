<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
echo"<br>";
$x = 100;  
$y = "100";

var_dump($x === $y);

?>  

</body>
</html>