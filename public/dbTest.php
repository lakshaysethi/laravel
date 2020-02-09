<?php
    /*$mysqli = new mysqli('localhost', 'plantme_dev', 'p1antme123', 'plantme_test');
    if($mysqli->connect_errno) {
        echo '[connection failed]';
    } else {
        echo '[connection done]';
    }
    mysqli_close($mysqli);*/
?>

<?php
$servername = "localhost";
$username = "plantme_dev";
$password = "p1antme123";
$dbname = "plantme_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tblUser (firstname, lastname, suburb, dob, email, password)
VALUES ('binh', 'Sethi', 'Mt.wellington', '1997-02-22', 'lak@greenback.co.nz', '123456')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>