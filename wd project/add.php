

<?php

    $name = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['phone'];
    $foodname = $_REQUEST['fdname'];
    $address = $_REQUEST["location"];


if(empty($name)){
    echo "<button><a href='project.html'>Order Now<a/></button>";
    die(" <h1>please enter the Name <h1>");
}

if(empty($email)){
    echo "<button><a href='project.html'>Order Now<a/></button>";
    die("please enter the Email");
}

if(empty($number)){
    echo "<button><a href='project.html'>Order Now<a/></button>";
    die("please enter the Number");
}

if(empty($foodname)){
    echo "<button><a href='project.html'>Order Now<a/></button>";
    die("please enter the Foodname");
}

if(empty($address)){
    echo "<button><a href='project.html'>Order Now<a/></button>";
    die("please enter the Address");
}


$conn = mysqli_connect("localhost","root","","test");

if(!($conn)){
    die("connection failed : " . mysqli_connect_error() . "<br>");
}

echo "<h4>connection successful...</h4>" . "<br>";

$sql = "INSERT INTO list Values('$name',' $email','$number','$foodname','$address')";

if(mysqli_query($conn,$sql)){
    echo "<h3 style='color:darkgreen;'>data stored in database successfully...</h3>";
}
else{
    die('data stored unsuccesful' . mysqli_error($conn));
}

mysqli_close($conn);


?>

<?php
  include 'menu.html';
?>




