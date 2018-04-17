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
					<td colspan="2"><b><center>Book/s Status</center></b></td>
				</tr>
				<tr>
					<td colspan="5"> 
						<?php
							include('connect.php');

							$sql="SELECT BookName, StudName, StatusName From book join transaction ON book.BookID = transaction.BookID
							join student ON student.StudID = transaction.StudID join
							status ON status.StatusID = transaction.StatusID";

							echo "<div class=record><table cellpadding=4 cellspacing=0 class=record1>

								<tr>
								<td class=rec><b class=head>BookName</b></td>
								<td class=rec><b class=head>StudName</b></td>
								<td class=rec><b class=head>StatusName</b></td>
								</tr>";


							$result=mysqli_query($dbcon, $sql);

							while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['BookName']."</td>";
								echo "<td>".$row['StudName']."</td>";
								echo "<td>".$row['StatusName']."</td>";
								echo "</tr>";
							}
							echo "</table></div><br><br>";
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