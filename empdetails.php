<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<style>
table,td,th,h5
{
	color:#003a78;
	text-align:center;
}

</style>
</head>
<body>
<?php
echo "<a href='train1.html'><img src='logo.png'></a>";
echo"<h5>Employee Details</h5>";
echo "<div class='container'>";
echo "<table class='table table-bordered table-hover'>";
echo "<tr> <th>Emp. Name</th> <th>Qualification</th> <th>Salary</th> <th>Experience</th> <th>Phone No.</th> <th>Age</th> </tr>`";
$empdetail = array(array("Raja","Msc(CS)",25000,"3years",8252623654,27),
array("Raja","Msc(CS)",25000,"3years",8252623654,27),
array("Raja","Msc(CS)",25000,"3years",8252623654,27),
array("Raja","Msc(CS)",25000,"3years",8252623654,27),
array("Raja","Msc(CS)",25000,"3years",8252623654,27));

for($row=0;$row < 5;$row++)
{
	echo "<tr>";
	for($col=0;$col< 6;$col++)
	{
		echo "<td>".$empdetail[$row][$col]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "</div>";
?>
</body>
</html>