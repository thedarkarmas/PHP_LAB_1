<!DOCTYPE html>
<html>
<body>

<?php
echo("นับจำนวนตัวอักษร:");
echo strlen("Hello world!");
echo "<br>";
//************************************************
echo("นับจำนวนคำ:");
echo str_word_count("Hello world!"); // outputs 2
echo "<br>";
//************************************************
echo("กลับคำ:");
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";
//************************************************
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";
//************************************************
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";
//************************************************

?> 
 
</body>
</html>