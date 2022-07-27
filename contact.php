<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<?php

echo "<a href='train1.html'><img src='logo.png'></a>";

echo "<div class='container'>";
echo "<table class='table table-bordered table-hover'>";
echo "<tr> <td>Name</td><td>".$_POST["name"]."</td></tr>";
echo "<tr><td>Email</td><td>".$_POST["email"]."</td></tr>";
echo "<tr><td>Type</td><td>".$_POST["type"]."</td></tr>";
echo "<tr><td>Cars</td><td>".$_POST["cars"]."</td></tr>";
echo "<tr><td>Price</td><td>".$_POST["rate"]."</td></tr>";
echo "<tr><td>Mydetails</td><td>".$_POST["mydetails"]."</td></tr>";
echo "<tr><td>Address</td><td>".$_POST["comment"]."</td></tr>";
echo "<tr>";
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['mem'])){
	echo "<td>Capacity </td>";
// Loop to store and display values of individual checked checkbox.
foreach($_POST['mem'] as $selected){
echo "<td>".$selected."</td><br>";
}
}
}
echo "</tr>";
echo "</table>";
echo "</div>";
?>

</body>
</html>