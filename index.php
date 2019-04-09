<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    echo '<h1>Cupcake Fundraiser</h1>
<form action="/" method="post">
<h3>Your name:</h3>
<input type="text" name="name" placeholder="Please enter your name">
<h3>Cupcake flavors:</h3>
<ul style="list-style-type:none"><li>
<input type="checkbox" name="flavors[]" id="grasshopper" value="grasshopper">
<label for="grasshopper">The Grasshopper</label>
</li><li>
<input type="checkbox" name="flavors[]" id="maple" value="maple">
<label for="maple">Whiskey Maple Bacon</label>
</li><li>
<input type="checkbox" name="flavors[]" id="carrot" value="carrot">
<label for="carrot">Carrot Walnut</label>
</li><li>
<input type="checkbox" name="flavors[]" id="caramel" value="caramel">
<label for="caramel">Salted Caramel Cupcake</label>
</li><li>
<input type="checkbox" name="flavors[]" id="velvet" value="velvet">
<label for="velvet">Red Velvet</label>
</li><li>
<input type="checkbox" name="flavors[]" id="lemon" value="lemon">
<label for="lemon">Lemon Drop</label>
</li><li>
<input type="checkbox" name="flavors[]" id="tiramisu" value="tiramisu">
<label for="tiramisu">Tiramisu</label>
</li></ul>
<input type="submit" value="Order">
</form>';
}

else if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //TODO: use name and flavors[] to respond to customer
}