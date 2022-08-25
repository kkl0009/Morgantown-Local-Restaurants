<!-- this class is used to give the database access to read and write. and implements SQL commands -->
<?php

$servename = "localhost";
//$DBuname = "root";
//$DBPass = "";
$DBuname = "debian-sys-maint";
$DBPass = "iHPXOSo2gtNuLnq7";
$DBname = "group6";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}
