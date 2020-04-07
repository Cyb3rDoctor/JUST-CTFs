<?php
$strJsonFileContents = json_decode(file_get_contents("admin.json"));

$json_string = '{"username":"'.$_GET['user'].'","privilege":"user","pass":"'.$_GET['pass'].'"}';

$json = json_decode($json_string);
if (isset($_GET['user']) && !empty($_GET['pass'])){
    if($strJsonFileContents == $json){
	include "./943f934jfmwcoiije9fd8j30iejew.php";
$flag="JUST{json_injection_success_98f2e}";
$input=$_GET["flag"];
$in=strlen($_GET["flag"]);
if($input == substr($flag,0,$in) && isset($_GET['flag']))
        echo "<button>True</button>";
else
        echo "<button style='background-color: red;'>False</button>";
    }
    else 
	echo "<h1 style=" . "color:red;" . ">You are not the admin<br>no flag for you</h1>";
}

?>

