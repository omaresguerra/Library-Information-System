<!DOCTYPE html>
<html>
<head>
	<title>Library Information System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div align="center">
			<table align="center" cellpadding="5px" cellspacing="2px">
			<form action="insert-transact.php" method="post">
				<tr>
					<td colspan="5"><b><center>Book</center></b></td>
				</tr>
				<tr>
					<td colspan="5"> 
					<?php
		                include('connect.php'); 

		                $query = "SELECT * FROM book
		                GROUP BY BookID asc";

		               echo "<div class=record><table class=record1 cellspacing=0 cellpadding=15>";

		                $result = mysqli_query($dbcon, $query);
		                  echo "<tr>";
		                  echo "<td class=rec><b class=head>BookID</b></td>";
		                  echo "<td class=rec><b class=head>BookName</b></td>";
		                  echo "<td class=rec><b class=head>AuthorID</b></td>";
		                  echo "<td class=rec><b class=head>DatePublish</b></td>";
		                  echo "<td class=rec><b class=head>Edit / Delete</b></td>";
		                  echo "</tr>";

		                while ($row = mysqli_fetch_array($result)) {
		                  echo "<tr>";
		                  echo "<td class=rec>".$row['BookID']."</td>";
		                  echo "<td class=rec>".$row['BookName']."</td>";
		                  echo "<td class=rec>".$row['AuthorID']."</td>";
		                  echo "<td class=rec>".$row['DatePublish']."</td>";
		                  echo "<td class=rec><a href=edit.php?id=".$row['BookID']."&tb=Book><div class='edit'>Edit</div></a>&nbsp;&nbsp;<a href=delete.php?id=".$row['BookID']."&tb=Book><div class='edit'>Delete</div></a></td>";
		                  echo "</tr>";
		                }
		               echo "</table></div>";
		              ?>
		              </td>
				</tr>
				</form>
				<tr>
					<td class="field" colspan="5"><center><a href="insert.php?tb=Book"><input type="submit" class="button" value="Add Book"></a></center></td>
				</tr>
				<tr>
					<td class="field" colspan="5"><center><a href="home.php"><input type="submit" class="button1" value="Back"></a></center></td>
				</tr>
			</table>
		</div>
	</body>
</html>