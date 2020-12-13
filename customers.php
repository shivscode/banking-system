<?php
session_start();
$con=mysqli_connect("localhost","root","","bankingsystem") or die(mysqli_error($con));
$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
<head>

<link href="landing.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
      
    <body style="background-color:#a517ba;">
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="navbar-header">
            
            <a class="navbar-brand" href="landingpage.php"><img src="images/bankylogo.png"></a>
                     </div>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
<li> <a href="customers.php" class="header-link">Users</a></li>
<li>  <a href="transactions.php" class="header-link">Transactions</a></li>          
            </ul>
        </div>
        </div>
    </nav>
<div class="container">
<br><h1 style="color:black; text-shadow: 2px 2px purple; text-align: center">CUSTOMER INFORMATION</h1>
<br>
 <table class="table table-condensed table-bordered table-hover">
         
<thead class="thead-dark">
		<th><b style="color:black; font-size:18px;">Account Number</b></th>
                <th><b style="color:black; font-size:18px;">Holder Name</b></th>
		<th><b style="color:black; font-size:18px;">Email Address</b></th>
		<th><b style="color:black; font-size:18px;">Account Balance</b></th>
                <th><b style="color:black; font-size:18px;">Action</b></th>
		
	</thead>
	<tbody>
<tr>
        <?php  
                $row=mysqli_fetch_array($result);
        ?>
<td><b><?php echo  $row["id"]; ?></b></td>
<td><b><?php echo  $row["name"]; ?></b></b></td>
<td><b><?php echo  $row["email"]; ?></b></td>
<td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
<button class="btn btn-primary" type="submit" name="name" value="Garry">View</button>
</form></td>
</tr>

<tr>
        <?php  
                 $row=mysqli_fetch_array($result);
        ?>
<td><b><?php echo  $row["id"]; ?></b></td>
<td><b><?php echo  $row["name"]; ?></b></td>
<td><b><?php echo  $row["email"]; ?></b></td>
<td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
<button class="btn btn-primary" type="submit" name="name" value="Sophia">View</button>
</form></td>
</tr>

<tr>
        <?php  
                $row=mysqli_fetch_array($result);
        ?>
<td><b><?php echo  $row["id"]; ?></b></td>
<td><b><?php echo  $row["name"]; ?></b></td>
<td><b><?php echo  $row["email"]; ?></b></td>
<td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
<button class="btn btn-primary" type="submit" name="name" value="Jacob">View</button>
</form></td>
   </tr>
<tr>
        <?php  
                $row=mysqli_fetch_array($result);
        ?>
<td><b><?php echo  $row["id"]; ?></b></td>
<td><b><?php echo  $row["name"]; ?></b></td>
<td><b><?php echo  $row["email"]; ?></b></td>
<td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
<button class="btn btn-primary" type="submit" name="name" value="William">View</button>
</form></td>
</tr>

<tr>
        <?php  
                $row=mysqli_fetch_array($result);
        ?>
<td><b><?php echo  $row["id"]; ?></b></td>
<td><b><?php echo  $row["name"]; ?></b></td>
<td><b><?php echo  $row["email"]; ?></b></td>
<td><b><?php echo  $row["balance"]; ?></b></td>
<td><b><form action="user.php" method="post"  class="view">
<button class="btn btn-primary" type="submit" name="name" value="Jayden">View</button>
</form></td>
   </tr>
<tr>
        <?php  
                $row=mysqli_fetch_array($result);
        ?>
<td><b><?php echo  $row["id"]; ?></b></td>
<td><b><?php echo  $row["name"]; ?></b></td>
<td><b><?php echo  $row["email"]; ?></b></td>
<td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
<button class="btn btn-primary" type="submit" name="name" value="Olivia">View</button>
</form></td>
</tr>

<tr class="info">
        <?php  
                $row=mysqli_fetch_array($result);
        ?>
<td><b><?php echo  $row["id"]; ?></b></td>
<td><b><?php echo  $row["name"]; ?></b></td>
<td><b><?php echo  $row["email"]; ?></b></td>
<td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
<button class="btn btn-primary" type="submit" name="name" value="Emily">View</button>
</form></td>
</tr>

<tr>
        <?php  
                $row=mysqli_fetch_array($result);
        ?>
<td><b><?php echo  $row["id"]; ?></b></td>
<td><b><?php echo  $row["name"]; ?></b></td>
<td><b><?php echo  $row["email"]; ?></b></td>
<td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
<button class="btn btn-primary" type="submit" name="name" value="Ryan">View</button>
</form></td>
</tr>

<tr>
        <?php   
                $row=mysqli_fetch_array($result);
        ?>
<td><b><?php echo  $row["id"]; ?></b></td>
<td><b><?php echo  $row["name"]; ?></b></td>
<td><b><?php echo  $row["email"]; ?></b></td>
<td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
<button class="btn btn-primary" type="submit" name="name" value="Samuel">View</button>
</form></td>
</tr>

<tr>
        <?php  
                $row=mysqli_fetch_array($result);
        ?>
<td><b><?php echo  $row["id"]; ?></b></td>
<td><b><?php echo  $row["name"]; ?></b></td>
<td><b><?php echo  $row["email"]; ?></b></td>
<td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
<button class="btn btn-primary" type="submit" name="name" value="Isaac">View</button>
</form></td>
</tr>
</tbody>
</table>
</div>

<pre>

</pre>
<footer class="footer"> Shivam Toshkhani - Web Development and Design Internship @ The Spark Foundation</footer>

</body>
</html>