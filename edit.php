<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div align="center">
		
			<table align="center" cellpadding="5px" cellspacing="2px" class="table1">
				<tr>
					<td colspan="2"><b><center>Edit <?php $tbname=$_GET['tb']; echo "$tbname"; ?></center></b></td>
				</tr>
				<?php 
					include('connect.php');
					$tbname = $_GET['tb'];

					if ($tbname == 'Student') {
						$id = $_GET['id'];
						$query="SELECT * FROM student WHERE StudID=".$id;
							$result=mysqli_query($dbcon, $query);
						
							while ($row=mysqli_fetch_array($result)) {
								echo "<form action=update.php?tb=Student method=POST>
									  <tr><td class=field>Student ID:</td>
									  <td>
									  <input type='text' class=text1  name='studid' value='".$row['StudID']."'>
									  </td></tr>";

								echo "<tr>
									  <td class=field>Student Name:</td>
									  <td>
									  <input type='text' class=text1 name='studname' value='".$row['StudName']."'>
									  </td></tr>";

								echo "<tr>
									  <td class=field>Address:</td>
									  <td>
									  <input type='text' class=text1 name='address' value='".$row['Address']."'>
									  </td></tr>";

								echo "<tr>
								      <td class=field>DeptID:</td>
									  <td>
									  <input type='text' class=text1 name='deptid' value='".$row['DeptID']."'>
									  </td>
								  	  </tr>";

								echo "<tr>
					                  <td colspan=2>
						              <center><input type=submit class=button1 value=Update></center>
									  </td></tr></form>"; 	

								echo "<tr>
					                  <td colspan=2>
						              <center><a href=student.php><input type=submit class=button1 value=Cancel></a></center>
									  </td></tr>";
							}	
					}
					elseif($tbname == 'Department') {
						$deptid =$_GET['id'];
						$query="SELECT * FROM department WHERE DeptID='".$deptid."'";
							$result=mysqli_query($dbcon, $query);

							while ($row=mysqli_fetch_array($result)) {
								echo "<form action=update.php?tb=Department method='POST'><tr><td class=field>Student ID:</td>
									  <td>
									  <input type='text' class=text1 name='dept' value='".$row['DeptID']."'>
									  </td></tr>";

								echo "<tr>
									  <td class=field>Department Name:</td>
									  <td>
									  <input type='text' class=text1 name='deptname' value='".$row['DeptName']."'>
									  </td></tr>";

								echo "<tr>
									  <td colspan=2>
									  <center><input type=submit class=button value=Update></center>
									  </td></tr></form>";

								echo "<tr>
					                  <td colspan=2>
						              <center><a href=department.php><input type=submit class=button1 value=Cancel></a></center>
									  </td></tr>";
							}
					}
					elseif ($tbname == 'Book') {
						$id = $_GET['id'];
						$query="SELECT * FROM book WHERE BookID='".$id."'";
							$result=mysqli_query($dbcon, $query);
			
							while ($row=mysqli_fetch_array($result)) {
								echo "<form action=update.php?tb=Book method='POST'><tr><td class=field>Book ID:</td>
										<td><input type='text' class=text1  name='bookid' value='".$row['BookID']."'></td></tr>";
								echo "<tr>
								  <td class=field>BookName:</td>
								  <td><input type='text' class=text1 name='bookname' value='".$row['BookName']."'></td></tr>";
								  
								echo "<tr>
								  <td class=field>AuthorID:</td>
								  <td>
								  <input type='text' class=text1 name='authorid' value='".$row['AuthorID']."'></td></tr>";
								 
								echo "<tr>
								  <td class=field>Date Publish:</td>
								  <td>
								  <input type='Date' class=text1 name='date' value='".$row['DatePublish']."'></td></tr>";

								echo "<tr>
									  <td colspan=2>
									  <center><input type=submit class=button value=Update></center>
									  </td></tr></form>";  

								echo "<tr>
					                  <td colspan=2>
						              <center><a href=book.php><input type=submit class=button1 value=Cancel></a></center>
									  </td></tr>";
							}
					}
					elseif($tbname == 'Author') {
						$id =$_GET['id'];
						$query="SELECT * FROM author WHERE AuthorID='".$id."'";
							$result=mysqli_query($dbcon, $query);

							while ($row=mysqli_fetch_array($result)) {
								echo "<form action=update.php?tb=Author method='POST'><tr><td class=field>Author ID:</td>
									  <td>
									  <input type='text' class=text1 name='authorid' value='".$row['AuthorID']."'>
									  </td></tr>";

								echo "<tr>
									  <td class=field>Author Name:</td>
									  <td>
									  <input type='text' class=text1 name='name' value='".$row['AuthorName']."'>
									  </td></tr>";

								echo "<tr>
									  <td colspan=2>
									  <center><input type=submit class=button value=Update></center>
									  </td></tr></form>";

								echo "<tr>
					                  <td colspan=2>
						              <center><a href=author.php><input type=submit class=button1 value=Cancel></a></center>
									  </td></tr>";
							}
					}
					if ($tbname == 'Transaction') {
						$id = $_GET['id'];
						$query="SELECT * FROM transaction WHERE TransactionID=".$id;
							$result=mysqli_query($dbcon, $query);
						
							while ($row=mysqli_fetch_array($result)) {
								echo "<form action=update.php?tb=Transaction method=POST>
									  <tr><td class=field>Transaction ID:</td>
									  <td>
									  <input type='text' class=text1  name='transactid' value='".$row['TransactionID']."'>
									  </td></tr>";

								// echo "<tr>
								// 	  <td class=field>StudentID:</td>
								// 	  <td>
								// 	  <input type='text' class=text1 name='studid' value='".$row['StudID']."'>
								// 	  </td></tr>";

								// echo "<tr>
								// 	  <td class=field>BookID:</td>
								// 	  <td>
								// 	  <input type='text' class=text1 name='bookid' value='".$row['BookID']."'>
								// 	  </td></tr>";

								echo "<tr>
								      <td class=field>StatusID:</td>
									  <td>";
									  
									  $qry = "SELECT * FROM status";
									  $result=mysqli_query($dbcon, $qry);

								echo "<select name='cboxStatus' onmousedown='if(this.options.length>4){this.size=4;}'   onchange='this.size=0;' onblur='this.size=0;'>";

								while ($row=mysqli_fetch_array($result)) {
									echo "<option value=".$row['StatusID'].">".$row['StatusName']."</option>";
								}
								echo "</select>";

								// echo "<tr>
								//       <td class=field>TimeCheck:</td>
								// 	  <td>
								// 	  <input type='text' class=text1 name='checkout' value='".$row['TimeCheckDate']."'>
								// 	  </td>
								//   	  </tr>";

								// echo "<tr>
								//       <td class=field>ReturnDate:</td>
								// 	  <td>
								// 	  <input type='text' class=text1 name='return' value='".$row['ReturnDate']."'>
								// 	  </td>
								//   	  </tr>";

								echo "<tr>
					                  <td colspan=2>
						              <center><input type=submit class=button1 value=Update></center>
									  </td></tr></form>"; 	

								echo "<tr>
					                  <td colspan=2>
						              <center><a href=transaction.php><input type=submit class=button1 value=Cancel></a></center>
									  </td></tr>";
							}	
					}
					else{
						echo "<Error!...>";
					}
				 ?>
		</table>
	</td>
</body>
</html>