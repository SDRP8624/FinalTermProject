<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Page</title>
</head>
<body>
<?php echo $First_Name=$_POST['First_Name']; ?> 
<?php echo $Last_Name=$_POST['Last_Name']; ?> 
<?php echo $email=$_POST['email']; ?> 
<?php echo $address=$_POST['address']; ?> 
<?php echo $city=$_POST['city']; ?> 
<?php echo $province=$_POST['province']; ?> 
<?php echo $area_code=$_POST['area_code']; ?> 

<?php 
    $title = 'view records';
    
    require_once 'includes\conn.php';
 ?>

If($_SERVER[“REQUEST_METHOD“ == “POST“){
	//Create variables for user inputs
	//Escape special characters in a string
	//Create an SQL INSERT query
	//Execute the query and check for success
    $First_Name = mysqli_real_escape_string($conn, $First_Name);
    $Last_Name = mysqli_real_escape_string($conn, $Last_Name);
    $email = mysqli_real_escape_string($conn, $email);
    $address = mysqli_real_escape_string($conn, $address);
    $city = mysqli_real_escape_string($conn, $city);
    $province = mysqli_real_escape_string($conn, $province);
    $area_code = mysqli_real_escape_string($conn, $area_code);

}

 $sql="INSERT INTO `customer_info`(`Customer_ID`, `First_Name`, `Last_Name`, `email`, `address`, `city`, `province`, `area_code`) VALUES ('Customer_ID','First_Name','Last_Name','email','address','city','province','area_code')";
 if (mysqli_query($conn, $sql)) {
            echo "Record added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }



</body>
</html>