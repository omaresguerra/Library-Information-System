<!DOCTYPE html>
<html>
<head>
	<title>Library Information System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div align="center">
		
			<table align="center" cellpadding="5px" cellspacing="2px" class="table1">
				<tr>
					<td colspan="2"><b><center>Update</center></b></td>
				</tr>
				<tr>
					<td colspan="2">
						<?php
							include('connect.php');

							$tbname = $_GET['tb'];

							if ($tbname == 'Department') {
								$id=$_POST['dept'];
								$name=$_POST['deptname'];

								$query = "UPDATE department SET DeptName='".$name."' WHERE DeptID ='".$id."'";
								if(mysqli_query($dbcon, $query)){
									echo "Record inserted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr>
								<td>
								<center><a href=department.php><input type=submit class=button value=Back></a></center>
								</td>
								</tr>";
							}

							elseif ($tbname == 'Student') {
								$studid=$_POST['studid'];
								$name=$_POST['studname'];
								$add=$_POST['address'];
								$deptid=$_POST['deptid'];

								$query = "UPDATE student SET StudName='".$name."', Address='".$add."', DeptID='".$deptid."' WHERE StudID ='".$studid."'";
								if(mysqli_query($dbcon, $query)){
									echo "Record inserted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr>
								<td>
								<center><a href=student.php><input type=submit class=button value=Back></a></center>
								</td>
								</tr>";
							}

							elseif ($tbname == 'Book') {
								$bookid=$_POST['bookid'];
								$name=$_POST['bookname'];
								$author=$_POST['authorid'];
								$date=$_POST['date'];

								$query = "UPDATE book SET BookName='".$name."', AuthorID='".$author."', DatePublish='".$date."' WHERE BookID ='".$bookid."'";
								if(mysqli_query($dbcon, $query)){
									echo "Record inserted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr>
								<td>
								<center><a href=book.php><input type=submit class=button value=Back></a></center>
								</td>
								</tr>";
							}
						
							elseif ($tbname == 'Author') {
								$authorid=$_POST['authorid'];
								$name=$_POST['name'];

								$query = "UPDATE author SET AuthorName='".$name."' WHERE AuthorID='".$authorid."'";
								if(mysqli_query($dbcon, $query)){
									echo "Record inserted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr>
								<td>
								<center><a href=author.php><input type=submit class=button value=Back></a></center>
								</td>
								</tr>";
							}

							elseif ($tbname == 'Transaction') {
								$id=$_POST['transactid'];
								// $stud=$_POST['studid'];
								// $book=$_POST['bookid'];
								$status=$_POST['cboxStatus'];
								// $checkout=$_POST['checkout'];
								// $return=$_POST['return'];

								$query = "UPDATE transaction SET StatusID='".$status."' WHERE TransactionID ='".$id."'";
								if(mysqli_query($dbcon, $query)){
									echo "Record inserted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr>
								<td>
								<center><a href=transaction.php><input type=submit class=button value=Back></a></center>
								</td>
								</tr>";

							}				

						?>
					</td>
				</tr>
			</table>
		
		
</body>
</html>