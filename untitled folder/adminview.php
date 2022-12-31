<!DOCTYPE Html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="adminview.css">

</head>
<body>



<section>
    <nav> 
        <a href="home.html"><img src="image/logo1.png"></a>
        <h1 class="header">River Side Boat Safari</h1> 
        </nav>
        <div class="nav-links">
            <ul >
					<li ><a href="homepage.html">Home</a></li>
					<li ><a href="package.html">Packages</a></li>
					<li ><a href="custombooking.html">Custom Booking</a></li>
					<li ><a href="aboutus.html">About us</a></li>
					<li ><a href="contactus.html">Contact us</a></li>
				</ul>
        
        </div>	
</section><center>
<div class="table">
<h1>Admin View</h1>
<table border="1">
    <tr>
    <th>Order_Id</th>    
    <th>Email</th>
    <th>Package</th>
    <th>Amount</th>
    <th>Card Holder Name</th>
    <th>Card No</th>
    <th>Expire_Date</th>
    <th>Cvvno</th>
    </tr>

    <?php

    require'config.php';
    
    $sql = "SELECT * From payment";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
		{
    
                echo "<tr>";
                echo "<td>".$row["orderno"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["package"]."</td>";
                echo "<td>".$row["amount"]."</td>";
                echo "<td>".$row["cardname"]."</td>";
                echo "<td>".$row["cardno"]."</td>";
                echo "<td>".$row["expire_date"]."</td>";
                echo "<td>".$row["cvvno"]."</td>";
                echo "</tr>";
        } 
     }       
    else
    {
        echo "No Results";
    }
	
    ?>
    
        

</table></center>
</div>	
<br><br><br><br><br><br>	
<div class="footer">	
	<footer>
 <center>
	<img src="image/social.png"  width=50px height=50px>
	<img src="image/Social2.png" width=50px height=50px>
	<img src="image/Social3.png" width=50px height=50px>
	<img src="image/Social4.png" width=50px height=50px>
	<h4>CONTACT US - BOOKING CONDITIONS - PRIVACY POLICY ABOUT US - BLOG<br>
		© 2020 www.riverboatsafari.com - Authentic sri lanka Travels. All rights reserved.<br>

		Content of this site copyright protected by Digital Millennium Copyright Act and Sri Lankan National Intellectual Property Act<br>
		Registration No: WA-12859645</h4>
 </center>
</footer>
</div>

</body>
