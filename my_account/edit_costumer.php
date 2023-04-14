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
	width:auto%;
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
table,th,td {
	padding:10px;
	border:1px solid black;
	border-collapse: collapse;

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
button{
	background: linear-gradient(rgba(206,20,20), rgba(1,4,4));
	border-radius:4px;
	border:none;
	color:#fff;
	font-size:15px;
</style>
<head>
<?php

		$user = $_GET['cos_id'];
		
        $get_user = "select * from costumers where cos_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);

      $cos_id=$row['cos_id'];
      $cos_name=$row['cos_name'];
	  $reg_date=$row['date'];
	  $cos_address=$row['cos_address'];
	  $cos_village=$row['village'];
	  $cos_mob=$row['mobile'];
		
		
?>
</head>
 <body>
  <div class="header"><acronym title="©: Copyright by E-LEDGER"><img src="images/logo12.png" height="65" width="85"></acronym><span style="color:WHITE";><i><font size="30" face="arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>E-LEDGER</b></font></i></span></div>
  <div class="navbar"><a href="add_costumer.php"><acronym title="Add Customer"><img src="images/add1.png" height="24" width="70"></acronym></a></div>
  <div class="left_content">
  <div align="center">

     <form method="post" action="" enctype="multipart/form-data">
   <div style="font-size:30px; font-style:bolder;padding-bottom:20px;padding-top:20px;">
  <span style="color:#620382";><b><u>Edit Your Profile</b></u></span>
   </div>
  <table>
  <tr>
  <td><b>Costumer Id </b></td>
  <td>  # 
  <?php echo $cos_id;?>
  </td>
  </tr>
  <tr>
  <td><b>Name</b></td>
  <td>
  <input type="text" name="u_name" value="<?php echo $cos_name;?>" />
  </td>
  </tr>
  <tr>
  <td><b>Contact No.</b></td>
  <td>
  <input type="text" name="mob"value="<?php echo $cos_mob;?>" />
  </td>
  </tr>

   <tr>
  <td><b> Address</b></td>
  <td>
  <input type="text" name="cos_add" value="<?php echo $cos_address;?>" />
  </td>
  </tr>


<tr>
  <td><b>Adhaar</b></td>
  <td>
  <input type="text" name="village" value="<?php echo $cos_village;?>" />
  </td>
  </tr>

	  
 
  <td colspan="2" align="center"><input type="submit" name="update" value="Save"style="	background: linear-gradient(rgba(76,175,80,1), rgba(1,4,4));
	border-radius:4px;
	border:none;
	color:#fff;
	font-size:15px;
"/>
	<button><a href="all_costumer.php"style="text-decoration:none; color:#fff;">Cancel</a></button></div>
  
  </tr>
	
  </table>
  
  </form>
   </div>



  </div>
  
  <div class="right_content">
    <ul>
	   <li><a href="main.php">Dashboard</a></li>
       <li><a href="all_costumer.php">All Customer</a></li>
       <li><a href="add_pro.php">Add Product</a></li>
<li><a href="aa.php">View Product</a></li>
       <li><a href="remarks.html">My Diary</a></li>
       <li><a href="about.php">About</a></li>
    </ul><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      <ul><li><a href="index.html">Logout</a></li>
      </ul>
  
  </div>

  <div class="footer"><div align="center" class="footer_text">&copy: copyright by E-LEDGER</div></div>
  
 
 
 
 </body>
</html>

<?php 
if(isset($_POST['update'])){

$u_name = $_POST['u_name'];
$mob = $_POST['mob'];
$cos_add = $_POST['cos_add'];
$village = $_POST['village'];
$village = $_POST['village'];
$u_desc = $_POST['u_desc'];
$u_amount = $_POST['u_amount'];


$update = "update costumers set cos_name='$u_name', mobile='$mob', cos_address='$cos_add', village='$village' where cos_id='$cos_id'";

$run = mysqli_query($con, $update);
if($run){
	echo"<script>alert('Your profile update is successful!')</script>";
	
    }
	 else{
		 echo"<script>alert('Something went wrong try again later!')</script>";
		}
	echo"<script>window.open('all_costumer.php','_self')</script>";
}

?>




