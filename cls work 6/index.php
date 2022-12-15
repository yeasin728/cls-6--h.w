
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class ="col-5 mx-auto mt-5">
        <form action="controller/post_info.php" method="POST">
            <label class="w-100">
                Enter a number to make multiplication table 
                <input type="number" class="form-control" name="fn" id="" required >
            </label>
            <label class="w-100">
                Enter a number to check even or odd
                <input type="number"class="form-control" name="sn" id=""required>
            </label>
            <label class="w-100">
                Username
                <input type="text" class="form-control" name="un" id="" placeholder="yeasin" required >
            </label>
            <label class="w-100">
                Password
                <input type="text"class="form-control" name="pd" id="" placeholder="done"required>
            </label>
            <button class="btn btn-primary mt-2 w-100 rounded-0">Submit</button>                
        </form>
    </div>
    
</body>
</html>

<?php

echo "example : loop";
for ($i = 1; $i <= 10; $i++){
    echo str_repeat("*", $i) . "<br>";
}

for ($i = 10; $i >= 1; $i--){
    echo str_repeat("*", $i) . "<br>";
}

echo "<br>";

for ($i = 1 ; $i <= 10 ; $i++)
{
    $number = 5;
    $gunfol = $number * $i;

    echo "$number * $i =$gunfol" . "<br>";
}

echo "<br>";
echo "diposite calculator" . "<br>";

$deposit_arr = [200, 4000, 5000];
$sum = 0;

for ($i = 0; $i < count($deposit_arr); $i++){
    $sum = $deposit_arr[$i] + $sum;

    echo "$sum" . "<br>";
}
echo "<br>";

$factorial = 1; 

for ($i = 5; $i >= 1; $i--){
    $factorial *= $i;

}
echo $factorial . "<br>";

echo "example : Nested loop";
for($x = 1 ; $x <= 10 ; $x++){

    for($j = 1; $j <= 10; $j++){
        $r = $x *$j ;
        echo "$x * $j = $r" . "<br>";
    }
    echo "<br>";
}
echo "example : While loop";
$i = 1;
while($i <=10 ){
    $r = 2 * $i;
    echo "2 * $i = $r" . "<br>";
    $i++;
}

echo "example : While loop <br>";
$f = 1;
echo "3 er namata <br>";
do {
    $r = 3 * $f;
    echo "3 * $f = $r" . "<br>";
    $f++;
} while ($f <=10);
echo "<br>";
echo "example : foreach <br> ";

$age = array("karim"=>"35", "Rahman"=>"37", "Abir"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>



