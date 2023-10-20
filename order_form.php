<?php
	
	include_once('connection.php');

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$quantity = $_POST['quantity'];
        $notes = $_POST['notes'];
        $card = $_POST['card'];
        $expiry = $_POST['expiry'];
        $cvv = $_POST['cvv'];
		$sql = "INSERT INTO order ('name','email','quantity','notes','card','expiry','cvv') VALUES ('$name', '$email', '$quantity','$notes','$card','$expiry','$cvv')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'order added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	echo "success";
?>




<!DOCTYPE html>
<html>
<head>
    <title>Food Order Form</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
    <!-- custom css file link -->

    <link rel="stylesheet" href="style.css">
    
</head>
<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>
 
      <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="index.php">Speciality</a>
        <a href="index.php">Popular</a>
        <a href="index.php">Gallery</a>
        <a href="index.php">Contacts</a>
    </nav>
</header>
<body>
    <div class="container">
        <h1>Food Order & Payment Form</h1>
        <form action="" method="post">
            <div style="display: flex;">
            <div class="boxx">
                <img src="pic/5.jpeg" alt="Member 1"> 
            </div>
            <div class="boxxx">
                <h3>tasty burger</h3>
                <span class="price"> $5 - $20</span>
            </div>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>


            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>
            </div>

            <div class="form-group">
                <label for="notes">Special Instructions:</label>
                <textarea id="notes" name="notes" rows="4"></textarea>
            </div>

            <div class="payment-form">
                <h2>Payment Information</h2>
                <div class="form-group">
                    <label for="card">Card Number:</label>
                    <input type="text" id="card" name="card" required>
                </div>

                <div class="form-group">
                    <label for="expiry">Expiry Date:</label>
                    <input type="text" id="expiry" name="expiry" required>
                </div>

                <div class="form-group">
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" required>
                </div>
            </div>

            <input type="submit" class="btn" value="Place Order & Pay">
        </form>
    </div>
        </form>
    </div>
    <section class="footer">

        <div class="share">
            <a href="https://www.facebook.com" class="btni"><img src="pic/face.png"></a>
            <a href="https://www.instagram.com" class="btni"><img src="pic/ins.png"></a>
            <a href="https://www.twitter.com" class="btni"><img src="pic/tw.png"></a>
            <a href="https://www.linkedin.com" class="btni"><img src="pic/in.png"></a>
        </div>
    
        <h1 class="credit"> Created by <span>Mr: MUCYO Patrick</span> | all rights reserved@2023! </h1>
    
    </section>
    
</body>
</html>
