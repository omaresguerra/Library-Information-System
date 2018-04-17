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
					<td colspan="2"><b><center>Delete <?php $tbname=$_GET['tb']; echo "$tbname"; ?></center></b></td>I
				</tr>
				<tr>
					<td colspan="2">
						<?php
							include('connect.php');
							$tbname = $_GET['tb'];

							if ($tbname == 'Student') {
								
								$studid=$_GET['id'];
								$query = "DELETE FROM student WHERE StudID='".$studid."'";

								if(mysqli_query($dbcon, $query)){
									echo "Record deleted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr><td>
								<center><a href=student.php><input type=submit class=button value=Back></a></center>
								</td></tr>";
							}

							if ($tbname == 'Department') {
								
								$deptid=$_GET['id'];
								$query = "DELETE FROM department WHERE DeptID='".$deptid."'";

								if(mysqli_query($dbcon, $query)){
									echo "Record deleted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr><td>
								<center><a href=department.php><input type=submit class=button value=Back></a></center>
								</td></tr>";
							}

							if ($tbname == 'Book') {
								
								$bookid=$_GET['id'];
								$query = "DELETE FROM book WHERE BookID='".$bookid."'";

								if(mysqli_query($dbcon, $query)){
									echo "Record deleted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr><td>
								<center><a href=book.php><input type=submit class=button value=Back></a></center>
								</td></tr>";
							}

							if ($tbname == 'Author') {
								
								$authorid=$_GET['id'];
								$query = "DELETE FROM author WHERE AuthorID='".$authorid."'";

								if(mysqli_query($dbcon, $query)){
									echo "Record deleted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr><td>
								<center><a href=author.php><input type=submit class=button value=Back></a></center>
								</td></tr>";
							}
						
						?>
					</td>
				</tr>
				
			</table>	
</body>
</html>