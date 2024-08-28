

<?php
$connection = mysqli_connect('localhost', 'root');
if ($connection) {
    echo "Connection Successful";
} else {
    echo "No connection";
}

mysqli_select_db($connection, 'Customerdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];  
$comments = $_POST['comments'];

$query = "INSERT INTO userinfodata(user, email, mobile, comments) VALUES ('$user', '$email', '$mobile', '$comments')";  

$result = mysqli_query($connection, $query);  
if ($result) {
    echo "<br> Input data is successful";
} else {
    echo "<br> Input data failed";
}

mysqli_close($connection); 
header('location:index.php'); 
?>
