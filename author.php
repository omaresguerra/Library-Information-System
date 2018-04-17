<!DOCTYPE html>
<html>
<head>
	<title>Library Information System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div align="center">
			<table align="center" cellpadding="5px" cellspacing="2px">
			<form action="insert.php" method="post">
				<tr>
					<td colspan="5"><b><center>Author</center></b></td>
				</tr>
				<tr>
					<td colspan="5"> 
					<?php
		                include('connect.php'); 

		                $query = "SELECT * FROM author
		                GROUP BY AuthorID asc";

		               echo "<div class=record><table class=record1 cellpadding=5 cellspacing=0>";

		                $result = mysqli_query($dbcon, $query);
		                  echo "<tr>";
		                  echo "<td class=rec><b class=head>AuthorID</b></td>";
		                  echo "<td class=rec><b class=head>AuthorName</b></td>";
		                  echo "<td class=rec><b class=head>Edit / Delete</b></td>";
		                  echo "</tr>";

		                while ($row = mysqli_fetch_array($result)) {
		                  echo "<tr>";
		                  echo "<td class=rec>".$row['AuthorID']."</td>";
		                  echo "<td class=rec>".$row['AuthorName']."</td>";
		                  echo "<td class=rec><a href=edit.php?id=".$row['AuthorID']."&tb=Author><div class='edit'>Edit</div></a>&nbsp;&nbsp;<a href=delete.php?id=".$row['AuthorID']."&tb=Author><div class='edit'>Delete</div></a></td>";
		                  echo "</tr>";
		                }
		               echo "</table></div>";
		              ?>
		              </td>
				</tr>
				</form>
				<tr>
					<td class="field" colspan="5"><center><a href="insert.php?tb=Author"><input type="submit" class="button" value="Add Author"></a></center></td>
				</tr>
				<tr>
					<td class="field" colspan="5"><center><a href="home.php"><input type="submit" class="button1" value="Back"></a></center></td>
				</tr>
			</table>
		</div>
	</body>
</html>