<?php
include "connection.php";
include "nav.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="book.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<h2>List of books</h2>
<?php
$res=mysqli_query($db,"SELECT * FROM `books`;");

echo "<table class='table table-boardered table-hover'>";
echo "<tr style='backgroud-color: white;'>";
echo "<th>"; echo "Id"; echo"</th>";
echo "<th>"; echo "Name"; echo"</th>";
echo "<th>"; echo "Auther"; echo"</th>";
echo "<th>"; echo "Edition"; echo"</th>";
echo"</tr>";

while($row = mysqli_fetch_assoc($res)){
	echo"<tr>";
	echo"<td>"; echo $row['Book_id']; echo"</td>";
	echo"<td>"; echo $row['Name']; echo"</td>";
	echo"<td>"; echo $row['Auther']; echo"</td>";
	echo"<td>"; echo $row['Edition']; echo"</td>";
echo "</tr>";
}
echo"</table>";

?>
<?php
	include 'footer.php';
	?>

</body>
</html>