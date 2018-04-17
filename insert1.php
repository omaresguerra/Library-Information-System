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
					<td colspan="2"><b><center>Insert <?php $tbname=$_GET['tb']; echo "$tbname"; ?></center></b></td>
				</tr>
				<tr>
					<td colspan="2">
						<?php
							include('connect.php');

							if($tbname == 'Student'){
								$studname=$_POST['txtStudName'];
								$address=$_POST['txtAddress'];
								$dept=$_POST['cboxDept'];
		
								$query = "INSERT INTO student(StudName, Address, DeptID) VALUES('$studname','$address','$dept')";

								if(mysqli_query($dbcon, $query)){
									echo "Record inserted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr><td>
									<center><a href=student.php><input type=submit class=button value=Back></a></cente></td></tr>";
							}

							if($tbname == 'Department'){
								$dept=$_POST['txtDeptName'];
				
								$query = "INSERT INTO department(DeptName) VALUES('$dept')";

								if(mysqli_query($dbcon, $query)){
									echo "Record inserted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr><td>
									<center><a href=department.php><input type=submit class=button value=Back></a></cente></td></tr>";
							}

							if($tbname == 'Book'){
								$book=$_POST['txtBookName'];
								$author=$_POST['cboxAuthor'];
								$date=$_POST['txtDate'];
				
								$query = "INSERT INTO book(BookName, AuthorID,DatePublish) VALUES('$book','$author',$date )";

								if(mysqli_query($dbcon, $query)){
									echo "Record inserted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr><td>
									<center><a href=book.php><input type=submit class=button value=Back></a></cente></td></tr>";
							}


							if($tbname == 'Author'){

								$author=$_POST['txtAuthor'];
				
								$query = "INSERT INTO author(AuthorName) VALUES('$author')";

								if(mysqli_query($dbcon, $query)){
									echo "Record inserted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr><td>
									<center><a href=author.php><input type=submit class=button value=Back></a></cente></td></tr>";
							}

							if($tbname == 'Transaction'){

								$stud=$_POST['cboxStud'];
								$book=$_POST['cboxBook'];
								$status=$_POST['cboxStatus'];
								$check=$_POST['txtCheck'];
								$return=$_POST['txtReturn'];
				
								$query = "INSERT INTO transaction(StudID,BookID,StatusID,TimeCheckDate,ReturnDate) VALUES('$stud','$book','$status','$check','$return')";

								if(mysqli_query($dbcon, $query)){
									echo "Record inserted Successfully...";
								}else{
									echo "<h3>Error!</h3>".mysqli_error($dbcon);
								}
								echo "<tr><td>
									<center><a href=transaction.php><input type=submit class=button value=Back></a></cente></td></tr>";
							}
						?>
					</td>
				</tr>
				
			</table>
		
		
</body>
</html>