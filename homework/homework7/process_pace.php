<!doctype html>
<html>
  <head>
    <title>Trainer</title>
    <meta charset="utf-8">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Russo+One|Teko&display=swap" rel="styleshee');
      body {
        background-image: url('https://res.cloudinary.com/bayleigh/image/upload/v1571105780/pacesetter/cement-concrete-sidewalk-stone-660x495_dgrgcz.jpg');
        padding: 5% 15%;
      }
      #container1 {
        background: #383838;
        margin-top: 20% 30%;
        padding: 5%;
        border-style: ridge;
      }
      #form_box {
        background: white;
        margin-top: 20% 20%;
        padding: 3%;
        text-align: center;
        border-style: ridge;
        }
      img {
        border-style: ridge;
        border-color: #b0b0b0;
        border-width: .75em;
      }
      h1 {
       font-family: 'Russo One', sans-serif;
      }
      h2 {
        font-family: 'Teko', serif;
      }
      form {
        text-align:left;
        padding: 2% 20%;
      }
      p {
        font-family: 'Teko', serif;
        font-size: 1.5em;
        font-weight: bold;
      }
      #submit {
        font-family: 'Teko', serif;
        font-size: 1.25em;
        font-weight: bold;
        color: #383838;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        padding: 0 45%;
      }
      footer {
        color: #000;
      }

    </style>
  </head>



<?php


$hours = $_POST['hours']*60;
$mins = $_POST['mins'];

$timegoal = $hours + $mins;

echo '<h2>Total Time Goal: $hours+$mins</h2>';


?>