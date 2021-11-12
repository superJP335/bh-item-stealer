<?php
if(isset($_POST['id'])){
    $id = $_POST['id'];
    header("Location: https://api.brick-hill.com/v1/games/retrieveAsset?id=$id&type=png");
}

if(isset($_POST['model'])){
    $model = $_POST['model'];
    header("Location: https://api.brick-hill.com/v1/games/retrieveAsset?id=$model&type=obj");
}
?>
<title>Brick Hill Item Stealer</title>
<center>
    <h1>Brick Hill Item Stealer</h1>
    <h2>Works with items below the id of 255563, anything higher will not work.</h2>
    <form method='post'>
    <h3>Texture</h3>
    <label>Item ID</label>
    <input type='number' name='id' placeholder='Item ID'>
</form>
<h3>3D Model</h3>
    <form method='post'>
    <label>Item ID</label>
    <input type='number' name='model' placeholder='Item ID'>
</form>
<br><br>
<p>Made by superJP335, view repository <a href='https://github.com/superJP335/bh-item-stealer'>here</a></p>
</center>
