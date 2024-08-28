

<?php
$connection = mysqli_connect('localhost', 'root');
if ($connection) {
    echo "Connection Successful";
} else {
    echo "No connection";
}
mysqli_select_db($connection, 'Customerdata');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];  
$gender = $_POST['gender'];
$bookingtype = $_POST['bookingtype'];

$query = "INSERT INTO customerbookingdata(Name, Email, Mobile, Gender, `Booking Type`) VALUES ('$name', '$email', '$mobile', '$gender', '$bookingtype')";
 

$result = mysqli_query($connection, $query);

if ($result) {
    echo "Input data is successful";
} else {
    echo "Input data failed: " . mysqli_error($connection);
}

mysqli_close($connection);

header('Location: index.php');
exit();
?>
