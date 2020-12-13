<?php
session_start();
$con=mysqli_connect("localhost","root","","bankingsystem") or die(mysqli_error($con));
$q="select * from transactions";
$result=mysqli_query($con,$q);

?>
<!DOCTYPE html>
<html>
<head>
<link  href="landing.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<style>

</style>
</head>
    <body style="background-color: #a517ba">
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="navbar-header">
                    <a class="navbar-brand" href="landingpage.php"><img src="images/bankylogo.png"></a>
        </div>
                     <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav ml-auto">
                    <li> <a href="customers.php" class="header-link">Users</a></li>
                    <li>  <a href="transactions.php" class="header-link">Transactions</a></li>          
            </ul>
        </div>
        </div>
    </nav>

<div class="container">
<br><h1 style="color:black; text-shadow: 2px 2px purple; text-align: center">CUSTOMER TRANSACTIONS</h1>
<br><br>
 <table class="table table-condensed table-bordered table-hover">
 <thead class="thead-dark">
		<th><b style="color:black; font-size:18px;">SENDER</b></th>
        <th><b style="color:black; font-size:18px;">RECEIVER</b></th>
		<th><b style="color:black; font-size:18px;">BALANCE</b></th>
	</thead>
	<tbody>
<tr>
        <?php  
     
while ($row=mysqli_fetch_array($result)) { ?>
<td ><b style="color:black; font-size:16px;"><?php echo  $row["sender"]; ?></b></td>
<td><b style="color:black; font-size:16px;"><?php echo  $row["receiver"]; ?></b></td>
<td><b style="color:black; font-size:16px;"><?php echo  $row["balance"]; ?></b></td>		 

</tr>
<?php } ?>
</tbody>
</table>
</div>
<footer class="footer">Shivam Toshkhani - Web Development and Design Internship @ The Spark Foundation</footer>
</body>
</html>