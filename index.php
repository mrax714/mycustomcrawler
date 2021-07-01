<?php
set_time_limit(0);
include(__DIR__."/libs/PHPWebSpider.class.php");
require("/var/www/html/inc/uagent.php");
require("/var/www/html/inc/simple_html_dom.php");
require("/var/www/html/inc/func.php");
require("/var/www/html/vendor/autoload.php");
$servername = "localhost";
$username = "pmauser";
$password = "crack420";
$dbname = "hosts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($result = $conn->query("SELECT url FROM urls WHERE url LIKE '%/%.jp%g%' ORDER BY `id` DESC LIMIT 100")) {
    /* determine number of rows result set */
//  $result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    /* close result set */
  
  	$url=$row['url'];

    	   echo "<img style='height:180px;' src='$url'>\n";

}  	
    $result->close();
  

}
}
