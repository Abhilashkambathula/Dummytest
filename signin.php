<?php

$Email = $_POST['Email'];
$Password = $_POST['Password'];


$conn = new mysqli('localhost','root','Tquanta@123','foodapp');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}

$sql = "select * from registration where email = '$Email' and password = '$Password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>location.href='main_page.php'</script>";
} 
else if('email' == '$Email' && 'password' != '$password'){
    echo "Enter Correct Password";
}
// else {
//     echo "Please Enter Correct Email or Password";
// };

$conn->close();

?>