<?php 
	session_start();
	include 'connection.php';

	$q="select * from customers";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>

<html>
<head>
	<title>Customer Details</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>

		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		background-color: white;
		opacity:0.7;
		}
		.t {
			font-family: Georgia;
			border: 2px solid white;
		    border-radius: 1px;
		    background-color: white;
			opacity:0.7;
		    text-align: center;
		    padding: 10px;}

		.btn1,.btn2 {
			background-color:white;
			opacity:0.7;
			border:0px;
			
			font-size: 20px;
			font-weight: bold;
			font-family: Arial, Helvetica, sans-serif;
		}
		.btn1,.btn2 {
			color: darkblue;
		}

		h2{
		font-family: monospace; 
		font-size:30px;
		}
		
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		color: darkblue;
		font-weight: bold;
		font-family: Arial, Helvetica, sans-serif;
		}

		
		body{
			background-image: url("transfer.jpg");
			background-size: cover;
		
		}
		

	</style>
</head>
<body>

	<div align="center" style="top:0px">		  			
		<table width="1316" align="center" class = "t">
			<tr>
            <td style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn2"> Home </button></a></td>	 	
			<td style = "text-align:center;border:0px"><a href="customer.php" target="frame"><button class = "btn2">View Customers</button></a></td>
			<td style = "text-align:center;border:0px"><a href="Transfermoney.php" target="frame"><button class = "btn2">Transfer Money</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn2">View Transaction History</button></a></td>
            </tr>
        </table>
	</div>
    <h2 style="color:black;text-align: center;font-family: cursive;" ><u><mark>To transfer money from one user to another , click on the user </mark></u></h2>
    <table class="flat-table flat-table-1" align = center style="font-family: serif;color:darkblue;font-weight: bold;">
	<thead>
		<th>CUSTOMER ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>BALANCE</th>
	</thead>
	<tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["C_ID"]; ?></td>
		<?php echo "<td> <a href = 'transact.php?Name=$row[1]'>$row[1]</a></td>";?>
		<td><?php echo  $row["Email"]; ?></td>
		<td><?php echo  $row["Balance"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>

        
	</tbody>
	</table>
	<br><br>
	
    
</body>
</html>