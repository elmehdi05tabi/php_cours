<?php
/*
===================================
== datatypes 
=--------------
= strings and escaping 
============
-nl2br()
*/
echo "hello elmehdi";
echo "<br>";
echo "hello 'elmehdi'";
echo "<br>";
echo 'hello "elmehdi"';
echo "<br>";
echo "hello \"elmehdi\"";
echo "<br>";
echo 'hello \'elmehdi\'';
echo "<br>";
echo 'hello \'elmehdi\\\'';
echo "<br>";
echo "hello 
i am elmehdi 
i live in morocco
";
echo "<br>";
echo nl2br("hello 
i am elmehdi 
i live in morocco
");