<?php

$flavors = array(
    'grasshopper' => 'The Grasshopper',
    'maple' => 'Whiskey Maple Bacon',
    'carrot' => 'Carrot Walnut',
    'caramel' => 'Salted Caramel Cupcake',
    'velvet' => 'Red Velvet',
    'lemon' => 'Lemon Drop',
    'tiramisu' => 'Tiramisu');

function echoForm()
{
    // bring a global into scope; i know this is bad code!
    $flavors = $GLOBALS['flavors'];

    echo '<h1>Cupcake Fundraiser</h1>
<form method="post">
<h3>Your name:</h3><input type="text" name="name" placeholder="Please enter your name" required>
<h3>Cupcake flavors:</h3><ul style="list-style-type:none">';

    foreach ($flavors as $flavor => $label)
    {
        echo "<li><input type='checkbox' name='formFlavors[]' id='$flavor' value='$flavor'>
<label for='$flavor'>$label</label></li>";
    }

    echo '</ul><input type="submit" value="Order"></form>';
}

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    echoForm();
}

else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $error = false;
    if (!isset($_POST['name']))
    {
        $error = true;
        echo '<span style="color:red;">Please enter your name.</span>';
    }

    if (empty($_POST['formFlavors']))
    {
        $error = true;
        echo '<span style="color:red;">Please select at least one flavor.</span>';
    }

    if ($error)
    {
        echoForm();
    }

    else
    {
        //TODO echo the results
    }
}