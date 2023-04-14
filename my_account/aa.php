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
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>
  <div class="left_content">

		<div align="center"style="margin-top:0px;">
            <table border="2" style="background:white;align:center;">
            <tr>
                <td><span style="color:#620382"><h3><u>Product Name</u></h3></span></td>
                <td><span style="color:#620382"><h3><u>Product price</u></h3></span></td>
                <td><span style="color:#620382"><h3><u>Product Description</u></h3></span></td>
            </tr>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="my_account";

$conn=new mysqli($servername,$username,$password,$dbname);//mysqli functionname to connect mysql
if ($conn->connect_error){
    die("Connection failed");
}
$sql="select pro_name,pro_price,pro_desc from product";
$result=$conn->query($sql);
if ($result->num_rows > 0){
    
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td><strong>".$row["pro_name"]."</strong></td>";
        echo "<td><strong>".$row["pro_price"]."</strong></td>";
        echo "<td><strong>".$row["pro_desc"]."</strong></td>";
        echo "</tr>";
    }
}
        $conn->close();

?>
    </table>
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