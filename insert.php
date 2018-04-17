<!DOCTYPE html>
<html>
<head>
	<title>Library Information System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div align="center">
			<table align="center" cellpadding="5px" cellspacing="2px">
				<tr>
					<td colspan="2"><b><center>Add <?php $tbname = $_GET['tb']; echo"$tbname" ?></center></b></td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<?php 
					include('connect.php');
					$tbname = $_GET['tb'];

					if($tbname == 'Student'){
				 ?>
				 	<?php echo "<form action=insert1.php?tb=Student method=post>"; ?>
					<tr>
						<td class="field">Student Name:</td>
						<td><input type="text" name="txtStudName" class="text2"></td>
					</tr>
					<tr>
						<td class="field">Address:</td>
						<td><input type="text" name="txtAddress" class="text2"></td>
					</tr>
					<tr>
						<td class="field">Department:</td>
						<td>
							<?php
								include('connect.php');

								$query="SELECT * FROM department";

								$result=mysqli_query($dbcon, $query);

								echo "<select name='cboxDept' onmousedown='if(this.options.length>4){this.size=4;}'   onchange='this.size=0;' onblur='this.size=0;'>";

								while ($row=mysqli_fetch_array($result)) {
									echo "<option value=".$row['DeptID'].">".$row['DeptName']."</option>";
								}
								echo "</select>";
							?>
						</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">
						<center><input type="submit" class="button" value="Add Student"></center>
					</td>
				</tr>
				</form>
				<tr>
					<td colspan="2">
						<center><a href="student.php"><input type="submit" class="button1" value="Cancel"></a></center>
					</td>
				</tr>
			<?php 
				}
				elseif ($tbname == 'Department') {
			?>
				<?php echo "<form action=insert1.php?tb=Department method=post>"; ?>
					<tr>
						<td class="field">Dept Name:</td>
						<td><input type="text" name="txtDeptName" class="text2"></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<center><input type="submit" class="button" value="Add Department"></center>
						</td>
					</tr>
					</form>
					<tr>
					<td colspan="2">
						<center><a href="department.php"><input type="submit" class="button1" value="Cancel"></a></center>
					</td>
				</tr>
			<?php
				}
				elseif ($tbname == 'Book') {
			?>
				<?php echo "<form action=insert1.php?tb=Book method=post>"; ?>
					<tr>
						<td class="field">Book Name:</td>
						<td><input type="text" name="txtBookName" class="text2"></td>
					</tr>
					<tr>
						<td class="field">AuthorID:</td>
						<td><?php
								include('connect.php');

								$query="SELECT * FROM author";

								$result=mysqli_query($dbcon, $query);

								echo "<select name='cboxAuthor' onmousedown='if(this.options.length>4){this.size=4;}'   onchange='this.size=0;' onblur='this.size=0;'>";

								while ($row=mysqli_fetch_array($result)) {
									echo "<option value=".$row['AuthorID'].">".$row['AuthorName']."</option>";
								}
								echo "</select>";
							?></td>
					</tr>
					<tr>
						<td class="field">Date Publish:</td>
						<td><input type="Date" name="txtDate" class="text2"></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<center><input type="submit" class="button" value="Add Book"></center>
						</td>
					</tr>
					</form>
					<tr>
					<td colspan="2">
						<center><a href="book.php"><input type="submit" class="button1" value="Cancel"></a></center>
					</td>
				</tr>
			<?php
				}
				elseif ($tbname == 'Author') {
			?>
			<?php echo "<form action=insert1.php?tb=Author method=post>"; ?>
					<tr>
						<td class="field">Author Name:</td>
						<td><input type="text" name="txtAuthor" class="text2"></td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2">
							<center><input type="submit" class="button" value="Add Author"></center>
						</td>
					</tr>
					</form>
					<tr>
					<td colspan="2">
						<center><a href="author.php"><input type="submit" class="button1" value="Cancel"></a></center>
					</td>
				</tr>
	         <?php 
	         	}
	         	if($tbname == 'Transaction'){
				 ?>
				 	<?php echo "<form action=insert1.php?tb=Transaction method=post>"; ?>
					<tr>
						<td class="field">StudID:</td>
						<td><?php
								include('connect.php');

								$query="SELECT * FROM student";

								$result=mysqli_query($dbcon, $query);

								echo "<select name='cboxStud' onmousedown='if(this.options.length>4){this.size=4;}'   onchange='this.size=0;' onblur='this.size=0;'>";

								while ($row=mysqli_fetch_array($result)) {
									echo "<option value=".$row['StudID'].">".$row['StudName']."</option>";
								}
								echo "</select>";
							?></td>
					</tr>
					<tr>
						<td class="field">BookID:</td>
						<td><?php
								include('connect.php');

								$query="SELECT * FROM book";

								$result=mysqli_query($dbcon, $query);

								echo "<select name='cboxBook' onmousedown='if(this.options.length>4){this.size=4;}'   onchange='this.size=0;' onblur='this.size=0;'>";

								while ($row=mysqli_fetch_array($result)) {
									echo "<option value=".$row['BookID'].">".$row['BookName']."</option>";
								}
								echo "</select>";
							?></td>
					</tr>
					<tr>
						<td class="field">StatusID:</td>
						<td>
							<?php
								include('connect.php');

								$query="SELECT * FROM status";

								$result=mysqli_query($dbcon, $query);

								echo "<select name='cboxStatus' onmousedown='if(this.options.length>4){this.size=4;}'   onchange='this.size=0;' onblur='this.size=0;'>";

								while ($row=mysqli_fetch_array($result)) {
									echo "<option value=".$row['StatusID'].">".$row['StatusName']."</option>";
								}
								echo "</select>";
							?>
						</td>
				</tr>
				<tr>
					<td class="field">Check Out Date:</td>
					<td><input type="Date" name="txtCheck" class="text2"></td>
				</tr>
				<tr>
					<td class="field">Return Date:</td>
					<td><input type="Date" name="txtReturn" class="text2"></td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">
						<center><input type="submit" class="button" value="Add Transaction"></center>
					</td>
				</tr>
				</form>
				<tr>
					<td colspan="2">
						<center><a href="transaction.php"><input type="submit" class="button1" value="Cancel"></a></center>
					</td>
				</tr>
			<?php
	          	}
	         ?>

		</table>
	</div>
</body>
</html>