<?php
$tax_rate = 12; 
$currency = '₱'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syris Cafe</title>
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap');
        
              html, body {
        height: 100%;
      }

      body {
        font-family: "Raleway", sans-serif;
        background-color:rgb(195, 148, 209);
        color:rgb(255, 255, 255);
        margin: 0px;
        background-image: url("coffee.jpg");
        background-size: 245px 380px;
        background-position: right top;
        background-repeat: repeat-y;
      }

      h1 {
        font-family: "Playfair Display", serif;
        padding: 10px 20px 12px 20px;
        margin: 0px;
        color:rgb(0, 0, 0);
      }

      h2 {
        font-weight: 700;
        font-size: 1em;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        padding: 20px;
        margin: 0px;
      }

      p {
        padding: 6px 20px 6px 20px;
        margin: 0px;
      }

      table {
        background-color:rgb(98, 19, 129);
        margin: 10px;
        padding: 5px;
        border: 1px solid #fbccbf;
        border-spacing: 0px;
      }
        
      th {
        text-transform: uppercase;
        text-align: left;
        font-size: 0.75em;
        letter-spacing: 0.2em;
        padding: 5px 10px;
        background-color: #fbccbf;
        color: #850825;
      }
        
      td {
        padding: 5px 10px;
      }

      a {
        color: #fbccbf;
        letter-spacing: 1px;
        font-weight: 600;
        font-style: normal;
        text-decoration: none;
      }

      nav {
        padding: 0.5em;
        background-color: #730720;
      }

      nav a {
        text-transform: uppercase;
        padding: .5em;
      }
      nav a:hover {
        color: #fff;
      }
      
      .button {
        background-color: #fbccbf;
        color: #850825;
        border-color: #fbccbf;
        border-radius: 300px;
        -webkit-transition: .3s background-color linear;
        -moz-transition: .3s background-color linear;
        -o-transition: .3s background-color linear;
        transition: .3s background-color linear;
        display: inline-block;
        padding: 10px 20px;
        margin-top: 10px;
        font-weight: 600;
        font-style: normal;
        letter-spacing: 1px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
      }

      .button:hover {
        background-color: #fcba63;
        border-radius: 300px;
        -webkit-transition: .1s background-color linear;
        -moz-transition: .1s background-color linear;
        -o-transition: .1s background-color linear;
        transition: .1s background-color linear;
        color: #850825;
      }
        
      .offer {
        text-transform: uppercase;  
      }

      footer {
        background-color: #730720;
        padding: 10px;
        width: 100%;
        position: fixed;
        bottom: 0;
      }

    </style>
</head>
<body>

<header>
    <h1>Syris Cafe</h1>
    <nav>
      <a href=homepagecafe.php>Home</a>
      <a href=coffeeproduct.php>Coffees</a>
      <a href="#">About</a>
    </nav>
</header>