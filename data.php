<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sneakerstore";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $Card_Number = $_POST['Card_Number'];
    $Expiry_Month = $_POST['Expiry_Month'];
    $Expiry_Year = $_POST['Expiry_Year'];
    $CVV = $_POST['CVV'];

    // Insert data into database
    $sql = "INSERT INTO payments (Name, Phone, Address, Card_Number, Expiry_Month, Expiry_Year, CVV)
    VALUES ('$Name', '$Phone', '$Address', '$Card_Number', '$Expiry_Month', '$Expiry_Year', '$CVV')";

    if ($conn->query($sql) === TRUE) {

        echo "<script>alert('Checkout complete');</script>";

        echo "<script>window.setTimeout(function(){ window.location.href = 'index.html'; }, 1000);</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>