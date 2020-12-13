<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'bankingsystem');
$name = $_POST['name'];
$q = "select * from users where name='$name'";
$result = mysqli_query($con, $q);
$row_count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$email = $row['email'];
$balance = $row['balance'];
$_SESSION['name'] = $name;
?>

<html>
<html lang="en">
<head>
<link  href="landing.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
       
<style>

table {
  border: 3px;
  border-color: white;
  
}
th{
  padding: 4px;
  text-align: center;
}
</style>
</head>


<body style="background-color: #a517ba;">
        <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="navbar-header">
                    <a class="navbar-brand" href="landingpage.php"><img src="images/bankylogo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav ml-auto">
                    <li><a href="customers.php" class="header-link">Users</a></li>
                    <li><a href="transactions.php" class="header-link">Transactions</a></li>          
            </ul>
        </div>
        </div>
    </nav>
       <div class="rowww">
                   <table border="2px";>
 <tbody>  

<tr> 
  <br><br><th><h1><center><b>Name: <?php echo $name ?></center></b></h1></th>
</tr>
<?php
$row = mysqli_fetch_array($result);
?>

<tr>
        <th><h3><b><center>Email ID: </b><?php echo $email ?> </center></h3></th>
</tr>
<?php
$row = mysqli_fetch_array($result);
?>
<tr>
          <th>  <h3 style="width:300px; height:40px; margin-top:3px; margin-bottom:3px; margin-left:-2px; padding-top:8px;"><b><center>Balance: </b> <?php echo $balance ?></center></h3></th>
</tr>
<?php
$row = mysqli_fetch_array($result);
?>
<tr>
      <th><center><a href="transfer.php"><button class="btn btn-primary" style="width:350px; height:40px; margin-top:3px; margin-bottom:3px; margin-left:1px;">Transfer Now</button></center></th>
</tr>     
</tbody>
</table>
      </div>  
  </div>
 <footer class="footer">Shivam Toshkhani - Web Development and Design Internship @ The Spark Foundation</footer>
        
</body>
</html>
