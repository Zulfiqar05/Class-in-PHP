<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
   
    function myText ($name) {

        for ($i=0; $i <10 ; $i++) { 
            echo "my name is ".$name."</br>";
        }

    }

    function  add($a,$b){


        $sum = $a+$b;

        return $sum;

    }

    include('myclass.php');
    

    $myclasses=new myclass();
    ?>


<h1><?php myText("zulfi")  ?></h1>
<h1> sum of two number are<?php echo add(9,29)  ?></h1>
<?php
$students = [
    ["name" => "wasim", "age" => 34, "class" => "5th class"],
    ["name" => "shahid", "age" => 23, "class" => "6th class"],
    ["name" => "ali", "age" => 25, "class" => "7th class"],
    ["name" => "ahmad", "age" => 28, "class" => "8th class"],
    ["name" => "fatima", "age" => 22, "class" => "9th class"]
];

for ($i = 0; $i < count($students); $i++) {
    $student = $students[$i];
    echo "<h2>" . $myclasses->studentRegistration($student["name"], $student["age"], $student["class"]) . "</h2>";
}
?>
</body>

</html>