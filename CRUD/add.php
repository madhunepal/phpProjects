<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAdd data</title>
</head>

<body>
    <?php
//lets include database connection(config)
include_once("config.php");

//checking incoming variables 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
}

//checking for null ( empty)
if(empty($name) || empty($age) || empty($email)){
if(empty($name)){
    echo "<font color='red> Name field is empty. </font><br>";
}
if(empty($age)){
    echo "<font color='red> Age field is empty. </font><br>";
}

if(empty($email)){
    echo "<font color='red> Email field is empty. </font><br>";
}
 //link to the previous page
 echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
}else {
    //if all fields are with values then insert
    $result = mysqli_query($mysqli, "Insert into users(name, age, email) values('$name', '$age', '$email')");
}
//display success message
echo "<font color='green'>Data added successfully.";
echo "<br/><a href='index.php'>View Result</a>";
    ?>
</body>

</html>