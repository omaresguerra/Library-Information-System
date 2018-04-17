<!DOCTYPE html>
<html>
<head>
	<title>Library Information System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div align="center">
			<table align="center" cellpadding="5px" cellspacing="2px">
			<form action="insert.php?tb=Transaction" method="post">
				<tr>
					<td colspan="7"><b><center>Transaction</center></b></td>
				</tr>
				<tr>
					<td colspan="7"> 
					<?php
		                include('connect.php'); 

		                $query = "SELECT * FROM transaction
		                GROUP BY TransactionID asc";

		               echo "<div class=record><table class=record1 cellspacing=0 cellpadding=5>";

		                $result = mysqli_query($dbcon, $query);
		                  echo "<tr>";
		                  echo "<td class=rec><b class=head>TransactionID</b></td>";
		                  echo "<td class=rec><b class=head>StudID</b></td>";
		                  echo "<td class=rec><b class=head>BookID</b></td>";
		                  echo "<td class=rec><b class=head>StatusID</b></td>";
		                  echo "<td class=rec><b class=head>TimeCheckDate</b></td>";
		                  echo "<td class=rec><b class=head>ReturnDate</b></td>";
		                  echo "<td class=rec><b class=head>Edit</b></td>";
		                  echo "</tr>";

		                while ($row = mysqli_fetch_array($result)) {
		                  echo "<tr>";
		                  echo "<td class=rec>".$row['TransactionID']."</td>";
		                  echo "<td class=rec>".$row['StudID']."</td>";
		                  echo "<td class=rec>".$row['BookID']."</td>";
		                  echo "<td class=rec>".$row['StatusID']."</td>";
		                  echo "<td class=rec>".$row['TimeCheckDate']."</td>";
		                  echo "<td class=rec>".$row['ReturnDate']."</td>";
		                  echo "<td class=rec><a href=edit.php?id=".$row['TransactionID']."&tb=Transaction><div class='edit'>Edit</div></a>
		                  </td>";
		                  echo "</tr>";
		                }
		               echo "</table></div>";
		              ?>
		              </td>
				</tr>
				<tr>
					<td class="field" colspan="2"><center><a href="insert.php"><input type="submit" class="button2" value="Add Transaction"></a></center></td>
				</form>
					<td class="field" colspan="2"><center><a href="book-status.php"><input type="submit" class="button2" value="View Book Status"></a></center></td>

					<td class="field" colspan="2"><center><a href="book-dept.php"><input type="submit" class="button2" value="View No of Book"></a></center></td>

					<td class="field" colspan="1"><center><a href="home.php"><input type="submit" class="button2" value="Back"></a></center></td>
				</tr>
			</table>
		</div>
	</body>
</html>