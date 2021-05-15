<?php
 
	session_start();
	include 'connection.php';

	$q="select * from transactions";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	
?>
<html>
<head>
	<title>Transaction History</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		color:darkblue;
		width: 100%;
		background-color:black;
		opacity:0.7;
		}
		.t {
			font-family: Georgia;
			border: 2px solid white;
		    border-radius: 1px;
		    background-color: white;
			opacity:0.7;
		    text-align: center;
		    padding: 10px;

		}
		.btn1,.btn2 {
			background-color:white;
			opacity:0.7;
			border:0px;
			color:darkblue;
			font-size: 20px;
			font-weight: bold;
			font-family: Arial, Helvetica, sans-serif;
		}

		h1{
		font-family: serif;
		font-size:40px;
		}
		
		td, th {
		border: 2px solid white;
		text-align: center;
		padding: 8px;
		color: white;
		font-weight: bold;
		font-family: Arial, Helvetica, sans-serif;
		}
		
	</style>
</head>
<body style="background-image:url(1.jpg);background-repeat: no-repeat;background-size: cover;background-blend-mode:hard-light; ">
<link rel = "stylesheet" type = "text/css" href = "style.css">

	<div align="center" style="top:0px">		  			
		<table class = "t">
			<tr>
            <td style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn2"> Home </button></a></td>	 	
			<td style = "text-align:center;border:0px"><a href="customer.php" target="frame"><button class = "btn2">View Customers</button></a></td>
			<td style = "text-align:center;border:0px"><a href="Transfermoney.php" target="frame"><button class = "btn2">Transfer Money</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn2">View Transaction History</button></a></td>
			</tr>
		</table>
	</div>

    <h1 style="color:wheat;text-align: center;font-family: cursive;" >Transaction History</h1>
    <table style="font-family: serif;color: white;font-weight: bold;">
	<thead>
		<th>SENDER NAME</th>
		<th>RECEIVER NAME</th>
		<th>AMOUNT</th>	
	</thead>
	<tbody>
		<tr align = center>
        <?php  
			while($row=mysqli_fetch_array($result)){
        ?>
	<td><?php echo  $row["Sender"]; ?></td>
	<td><?php echo  $row["Receiver"]; ?></td>
	<td><?php echo  $row["Amount"]; ?></td>
	<tr align = center>
	<?php }
	?>
	</tr>
	</tbody>
	</table>
	
		
</body>
</html>
