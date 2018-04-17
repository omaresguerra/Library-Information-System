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
					<td colspan="2"><b><center>No of Book/s per Department</center></b></td>
				</tr>
				<tr>
					<td colspan="5"> 
					<?php
						include('connect.php');

						$query = "SELECT * FROM department";
						$result=mysqli_query($dbcon, $query);

						echo "<div class=record><table cellpadding=4 cellspacing=0 class=record1>
							<tr><td class=rec>Department</td>
							<td class=rec>No of Books</td></tr>";

						while ($row = mysqli_fetch_array($result)) {
							$dept = $row['DeptID'];
							
							echo "<tr><td class=rec>".$row['DeptName']."</td>";

							$qry = "SELECT COUNT(BookName) FROM book JOIN transaction ON transaction.BookID = book.BookID JOIN student ON transaction.StudID = student.StudID WHERE DeptID = ".$dept;

							$res = mysqli_query($dbcon, $qry);
							while ($row1 = mysqli_fetch_array($res)) {
								echo "<td class=rec>".$row1[0]."</td>";
							}
							echo "</tr>";
						}
						echo "</table></div>";
					?>
									
		            </td>
				</tr>
				</form>
				<tr>
					<td class="field" colspan="2"><center><a href="transaction.php"><input type="submit" class="button1" value="Back"></a></center></td>
				</tr>
			</table>
		</div>
	</body>
</html>