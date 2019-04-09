<?php

$flavors = array(
    'grasshopper' => 'The Grasshopper',
    'maple' => 'Whiskey Maple Bacon',
    'carrot' => 'Carrot Walnut',
    'caramel' => 'Salted Caramel Cupcake',
    'velvet' => 'Red Velvet',
    'lemon' => 'Lemon Drop',
    'tiramisu' => 'Tiramisu');

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    echo '<h1>Cupcake Fundraiser</h1>
<form action="/" method="post">
<h3>Your name:</h3><input type="text" name="name" placeholder="Please enter your name">
<h3>Cupcake flavors:</h3><ul style="list-style-type:none">';

    foreach ($flavors as $flavor => $label)
    {
        echo "<li><input type='checkbox' name='formFlavors[]' id='$flavor' value='$flavor'>
<label for='$flavor'>$label</label></li>";
    }

    echo '</ul><input type="submit" value="Order"></form>';
}

else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //TODO: use name and flavors[] to respond to customer
}