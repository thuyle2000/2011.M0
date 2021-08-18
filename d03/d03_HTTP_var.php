<?php 
echo "<h2>Demo HTTP Enviroment Variables</h2>";
echo "<hr>";

echo "server software: " . $_SERVER['SERVER_SOFTWARE'] ."<br>";
echo "server name: " . $_SERVER['SERVER_NAME'] ."<br>";
echo "server protocol: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo "server port: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "browser: " . $_SERVER['HTTP_USER_AGENT'] ."<br>";
echo "accep-line: " . $_SERVER['HTTP_ACCEPT'] ."<br>";


?>