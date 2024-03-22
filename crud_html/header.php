<?php
session_start();
if(!isset($_SESSION['name'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Crud</h1>
        </div>
        <div id="menu" style="display: flex; justify-content:space-between;">
            <div>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="add.php">Add</a>
                    </li>
                    <li>
                        <a href="update.php">Update</a>
                    </li>
                    <li>
                        <a href="delete.php">Delete</a>
            </li>
            <li>
                <a href="addimage.php">Add image</a>
            </li>
        </div>
        </ul>
        
        <ul>
            <div>
                <li>
                    <a href="" style="color:yellow"><?php if(isset($_SESSION["name"])){ echo ($_SESSION["name"]); }?></a>
                </li>
                <li>
                    <a href="logout.php">Log out</a>
                </li>
            </div>
        </ul>
        </div>
