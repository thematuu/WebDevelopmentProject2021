<?php
session_start();

if (isset($_POST["tunnus"]) && isset($_post["salasana"])) {
    $tunnus=$_POST["tunnus"];
    $salasana=$POST["salasana"];
}
else {
    header("Location:login.html");
    exit;
}

$yhteys=mysqli_connect("shell.hamk.fi/pma", "trtkp20a3", "trtkp20a3passwd");
$tietokanta=mysqli_select_db ($yhteys, "group15_arvostelut");

$sql="select * from group15_tunnukset where tunnus=? and salasana=md5(?)";
$stmt=mysqli_prepare ($yhteys, $sql);
mysqli_stmt_bind_param($stmt, "ss", $tunnus, $salasana);
mysqli_execute ($stmt);
$tulos=mysqli_stmt_get_result($stmt);

if ($rivi=mysqli_fetch_object($tulos)) {
    $_SESSION["user_ok"]="ok";
    header("Location:".$_SESSION["paluuosoite"]);
    exit;
}
else{
    header("Location:login.html");
    exit;
}
?>