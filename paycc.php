<?php
session_start();
include 'environment.php';
include 'header.php';
?>

<html>
    <body>
        <h1>Make Payment</h1><br> 
        <p>
<?php
$_SESSION["payment"] = $_GET["payment"];

$url= "$environment/svcpayment.php?Accnt=".$_SESSION["account"]."&payment=".$_SESSION["payment"];
$response = file_get_contents($url);

echo "<br>Payment to Credit card: ".$_SESSION["payment"]."<br>";
echo $response;

$url= "$environment/svcgetbalance.php?acntnumb=".$_SESSION["account"];
$response = file_get_contents($url);
echo "<p><br><br>Balances: <br>";
echo $response;
?>

    </body>
        <br><br><br>
        <p>
        <button id="options", onclick="window.location.href='BankHome.php';">
            Account Options</button>
        <br><br>
        <button id="logout", onclick="window.location.href='logout.php';">
            Logout</button>
    </body>