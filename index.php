<title>Brick Hill Item Stealer</title>
<link href="https://css.brkcdn.com/a0aebf55acbcb4d737f7.css" rel="stylesheet" type="text/css">
<link href="https://css.brkcdn.com/4358064e6837331e6fcb.css" rel="stylesheet" type="text/css">
<script src="https://js.brkcdn.com/34c1aba64069a399d9cc.js"></script>
<script src="https://js.brkcdn.com/41575af6ef3518e77ef1.js"></script>
<script src="https://js.brkcdn.com/4f9a079d4f96e0d70137.js"></script>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['iid'])){
$name = $_POST['iid'];
$type = $_POST['type'];
$api_url = "https://api.brick-hill.com/v1/shop/list?sort=oldest&type=$type&search=$name&cursor=&limit=20&page=1";
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$item_data = $response_data->data;
echo"<center><h1>Showing results for <q>".htmlspecialchars($name)."</q></h1>
<h3>Lookup Item</h3>
<form method='post'>
<input style='width:170px;height:35px;' type='text' name='iid' placeholder='Item Name'>
<select style='width:170px;height:35px;' name='type' class='select'>
<option value='all'>All</option>
<option value='hat'>Hats</option>
<option value='face'>Faces</option>
<option value='tool'>Tools</option>
<option value='shirt'>Shirts</option>
<option value='tshirt'>T-Shirts</option>
<option value='pants'>Pants</option>
<option value='head'>Heads</option>
</select>
</form></center>";
foreach ($item_data as $item) {
    echo"<div style='display:inline-block;'>";
    echo"<div class='card' style='padding:10px;margin-left:20px;background-color:#343538;overflow:hidden;max-width:225px;height:370px;'>";
	echo"<img style='width:200px;' src='$item->thumbnail'></img>";
	echo "<br />";
	echo"<p class='ellipsis'>$item->name</p>";
	echo"<br />";
	if($item->id < 255563){
	    if(($type != "shirt") && ($type != "pants") && ($type != "tshirt")){
	echo"<a style='height:40px;font-size:12px;text-align:center;width:100%;' class='button blue mobile-fill' href='https://api.brick-hill.com/v1/games/retrieveAsset?id=$item->id&amp;type=obj' style='font-size: 15px; padding: 10px;'>Download Model</a>";
	}else{
	    
	}
	echo"<a style='height:40px;font-size:12px;text-align:center;width:100%;' class='button green mobile-fill' href='https://api.brick-hill.com/v1/games/retrieveAsset?id=$item->id&amp;type=png' style='font-size: 15px; padding: 10px;'>Download Texture</a>";
	}else{
	    echo"<text style='color:red;'>Item ID is above 255563</text>";
	}
	echo "</div></div>";
}
echo"<center><br /> <br />
	<p>Made by superJP335, view repository <a href='https://github.com/superJP335/bh-item-stealer'>here</a></p><br>";
die();
}
?>
<center>
<h1>Brick Hill Item Stealer</h1>
<h2>Works with items below the id of 255563, anything higher will not work.</h2>
<h3>Lookup Item</h3>
<form method='post'>
<label>Item Name</label>
<input type='text' name='iid' placeholder='Item Name'>
<br />
<label>Category</label>
<select style='width:170px;height:35px;' name="type" class="select">
<option value="all">All</option>
<option value="hat">Hats</option>
<option value="face">Faces</option>
<option value="tool">Tools</option>
<option value="shirt">Shirts</option>
<option value="tshirt">T-Shirts</option>
<option value="pants">Pants</option>
<option value="head">Heads</option>
</select>
</form>
<br><br>
<p>Made by superJP335, view repository <a href='https://github.com/superJP335/bh-item-stealer'>here</a></p>
</center>
