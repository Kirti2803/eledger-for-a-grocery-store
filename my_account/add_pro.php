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
</style>
 <body>
   <div class="header"><acronym title="©: Copyright by E-LEDGER"><img src="images/logo12.png" height="65" width="85"></acronym><span style="color:WHITE";><i><font size="30" face="arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>E-LEDGER</b></font></i></span></div>
  <div class="navbar"><a href="add_costumer.php"><acronym title="Add Customer"><img src="images/add1.png" height="24" width="70"></acronym></a></div>
  <div class="left_content">

  
 <div align="center"style="margin-top:0px;">
   <form method="post" action="add_pro.php" enctype="multipart/form-data">
   <div style="font-size:30px; font-style:bolder;padding-bottom:20px;padding-top:20px;">
<span style="color:#620382";>
  <u><b>Insert Product</b></u></span>
   </div>
  <table>
  <tr>
  <td><span style="color:#620382"><b>Product Name</b></td>
  <td>
  <input type="text" name="pro_name" />
  </td>
  </tr>
  <tr>
  <td><span style="color:#620382"><b>Product Price</b></td>
  <td>
  <input type="text" name="price" />
  </td>
  </tr>
  <tr>
  <td><span style="color:#620382"><b>Description</b></td>
  <td><textarea name="pro_desc" cols="30" rows="5"></textarea></td>
  </tr>
  <tr>
  
  <td colspan="2" align="center"><acronym title="Submit"><input type="submit" name="insert_pro" value="Submit"style="background:#7a0e9e;
	border:none;color:#fff;font-size:20px;border-radius:4px;"/></acronym></td>
  
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
  
  if(isset($_POST['insert_pro'])){
	  
	  //text data variables
	  $pro_name=$_POST['pro_name'];
	  $pro_desc=$_POST['pro_desc'];
	  $price=$_POST['price'];

	  
	   if($pro_name=='' OR $price=='' OR $pro_desc=='')
			  {
		      echo"<script>alert('please fill all the fields !')</script>";
		      exit();
		      }
	  
	        else{
  
	  $insert_costumer="insert into product (pro_name,pro_price,pro_desc)values('$pro_name','$price','$pro_desc')";
	  
	  $run_costumer = mysqli_query($con, $insert_costumer);
	  if($run_costumer){
		  
		  echo"
		  <script>alert('Item Inserted Successfully!')</script>
		  ";
		  
	     }
    	
			}		
	 
	  } 
			    

  
  
  
?>


