<?php
$host = "localhost";
$dbname = "root";
$dbpass = "";
$db = "animalaider";

$conn = mysqli_connect($host,$dbname,$dbpass,$db);
if(!$conn){
    echo "Oooops, Not Connected to the Database";
}else {
   # echo "I'm in";
}