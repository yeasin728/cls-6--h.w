<?php
$_POST;

if($_POST) {
	$num1 = $_POST["fn"];

	echo "Multiplication Table of $num1: <br>";
		
	for ($i = 1 ; $i <= 10 ; $i++)
{
    $number = $num1;
    $gunfol = $number * $i;

    echo "$number * $i =$gunfol" . "<br>";
}
    echo "<br>";

    $num2 = $_POST["sn"];

    function check($number){
        if($number % 2 == 0){
            echo "your given number is an even number";
        }
        else{
            echo "your given number is an odd number";
        }
    }
    check($num2);

    echo "<br>";

    $username = $_POST["un"];
    $userpass = $_POST["pd"];
    
    if ($username == "yeasin"){
        if ($userpass == "done") {
            echo "login";
        } else {
            echo "your password is invalid ";
        }
    
    } else {
        echo "your user name is invalid ";
    }
    
}




