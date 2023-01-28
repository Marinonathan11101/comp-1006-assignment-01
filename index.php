<?php

$title = "How to Make a Pizza!";

$ingredients= [
    "Dough",
    "Cheese (Of your choice)",
    "Pepperoni",
    "Tomato sauce"
];

$steps = [
    "Spread the sauce all over the dough",
    "Put the cheese on top of the sauce",
    "Spread the pieces of pepperoni all across the top of the cheese",
    "Put the pizza in the oven",
    "Take it out of the oven and wait for it to cool off",
    "Serve"
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=>
    <style>
    <?php include 'styles/styles.css'; ?>
    </style>
    <title> <?= $title?> </title>
  
</head>
<body>
    <header>
    <h1> <?= $title?> </h1> 
    </header>

    <div class = "Image">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Eq_it-na_pizza-margherita_sep2005_sml.jpg/800px-Eq_it-na_pizza-margherita_sep2005_sml.jpg" width="500" height="500"  alt="A delicious image of a pizza!" >

    </div>
           

    <section class = "ingredients">
        <h2>Ingredients</h2>
        <ul>
        <?php foreach ($ingredients as $ingredient): ?>
            <li> <?= $ingredient ?> </li>
        <?php endforeach ?>
        <ul>

    </section>


        
   <section class = "steps">
    <h2>Steps</h2>
        <ol>
        <?php foreach ($steps as $step): ?>
            <li> <?= $step ?> </li>
        <?php endforeach ?>
        </ol>
    </section>

   
   
</body>
</html>