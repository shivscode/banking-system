<?php
session_start();
$con=mysqli_connect("localhost","root","","bankingsystem") or die(mysqli_error($con));
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>

<html>
<html lang="en">
<head>
<link  href="landing.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
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
<div class="rowww">
                    <br><br>
                    <h3>SELECT RECIPIENT</h3>   
                    <form action="transfer2.php" method="POST">
<label for="sender" style="font-size: 13pt"><b>Receiver ID:</b></label>
	<select name="receiver" class="form-control" style="font-size: 12pt">
        <option value="">Select Recipient</option>
        <?php while($row = mysqli_fetch_array($result)) { ?>
		<option name="name" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
		<?php } ?>
    </select>
            <label for="transfer" style="font-size: 13pt;"><b>Amount:</b></label> 
			<input type="number" class="form-control" name="transfer" style="font-size: 12pt;" min="0" required>
<center>
<br><button class="btn btn-primary">TRANSFER</button></center> 
                               
                    </form>

</div>
</div>
<footer class="footer">Shivam Toshkhani - Web Development and Design Internship @ The Spark Foundation</footer>
</body>
</html>