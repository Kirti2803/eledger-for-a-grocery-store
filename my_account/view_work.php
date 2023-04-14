<?php

include("includes/db24.php");

?>
<html>
<head>
<title>E ledger</title>
<style>
.header{
	padding-top:10px;
	padding-left:10px;	
	height:70px;
	width:auto;
	background:#350545;
	
}
.navbar{
	padding-top:5px;
	padding-left:50px;
	height:25px;
	width:auto;
	background:#690f87;
}

.left_content{
	float:left;
	padding:10px;
	margin-top:5px;
	height:500px;
	width:83%;
	background:#fff;
	border:1px solid black;
}
table,td {
	padding:0px;
	border:1px solid black;
	border-collapse: collapse;

}
th{
	background:#4caf50;
	padding:3px;
}
.right_content{
	float:right;
	margin-top:5px;
	height:520px;
	width:15%;
	background:#fff;
	border:1px solid black;
}
nav  {

    width: 10%;
    background-color: #f1f1f1;
	text-decoration: none;
	text-align:center;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #7a0e9e;
    color: white;
}
.footer{
	margin-top:5px;
	padding-top:3px;
	float:left;	
	height:30px;
	width:100%;
	background:#4d0b63;
}
.footer_text{
	color:#fff;
}
</style>
 <body>
  <div class="header"><acronym title="©: Copyright by E-LEDGER"><img src="images/logo12.png" height="65" width="85"></acronym><span style="color:WHITE";><i><font size="30" face="arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>E-LEDGER</b></font></i></span></div>
  
  
  </div>
  <div class="navbar"><a href="add_costumer.php"><acronym title="Add Customer"><img src="images/add1.png" height="24" width="70"></acronym></a></div>
  <div class="left_content">
    
   
<?php

		$user = $_GET['en_id'];
		
        $get_user = "select * from entery where entery_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);

      $cos_id=$row['cos_id'];
	   $entery_id=$row['entery_id'];
      $work=$row['work'];
	  $wr_desc=$row['wr_desc'];
	  $date=$row['date'];
	  $price=$row['price'];
		
		
?> 

<div align="center" style="font-size:30px; font-color:#620382;padding-bottom:20px;padding-top:20px;">
 <span style="color:#620382";><b><u>Entry Details</b></u></span>
   </div>
<table align="center"width="400px"height="300px">
  <tr>
  <td align="center"><b>Entry Id </b></td>
  <td align="center">  # 
  <?php echo $entery_id;?>
  </td>
  </tr>
    <tr>
  <td align="center"><b>Item</b></td>
  <td align="center">
 <?php echo $work;?>
  </td>
  </tr>
      <tr>
  <td align="center"><b>Description</b></td>
  <td align="center">
 <?php echo $wr_desc;?>
  </td>
  </tr>
  <tr>
  <td align="center"><b>Entry Date </b></td>
  <td align="center"> 
  <?php echo $date;?>
  </td>
  </tr>
    <tr>
  <td align="center"><b>Amount </b></td>
  <td align="center"> 
  <?php echo $price;?>
  </td>
  </tr>
<tr style="height:35px;">
	<td align="center" colspan="2"><a href="all_costumer.php"style="text-decoration:none; color:#fff;background: #7a0e9e;padding:5px;">Back</a>
  
  </tr>

  </table>
		 
  </div>
  <div class="right_content">
    <ul>
	   <li><a href="main.php">Dashboard</a></li>
       <li><a href="all_costumer.php">All Customer</a></li>
       <li><a href="#news">News</a></li>
       <li><a href="#contact">Contact</a></li>
       <li><a href="#about">About</a></li>
    </ul>
  
  </div>
  <div class="footer"><div align="center" class="footer_text">&copy: copyright by E-LEDGER</div></div>
  
 
 
 
 </body>
</html>

