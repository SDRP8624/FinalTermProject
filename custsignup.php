<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Sign-up</title>
    <link rel="stylesheet" href="css\style.css" />
    <link rel="stylesheet" href="css\bootstrap.css" />

    <link rel="stylesheet" href="css\form.css" />
</head>
<body>
    <script src="js\script.js"></script>
        <script src="js\bootstrap.bundle.min.js"></script>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-mid-8">
                <form method="POST" action="receive.php" class="row g-3">
                <div class="col-12">
                        <label for="inputFirstName" class="form-label">First Name</label>
                        <input type="firstname" class="form-control" id="inputFirstName" name="First_Name" required>
                    </div>
                
                    <div class="col-md-6">
                        <label for="inputLastName" class="form-label">Last Name</label>
                        <input type="lastname" class="form-control" id="inputLastName" name = "Last_Name" required>
                    </div>    
                <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" required>
                    </div>
                    <br>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="address" class="form-control" id="inputAddress" name="address" required>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="city" class="form-control" id="inputCity" name = "city" required>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Province</label>
                        <select id="province" class="form-select" name ="province" required>
                            <option value="" selected disabled>Choose...</option>
                            <option value="Alberta">Alberta</option>
                            <option value="British Columbia">British Columbia</option>
                            <option value="Manitoba">Manitoba</option>
                            <option value="New Brunswick">New Brunswick</option>
                            <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                            <option value="Northwest Territories">Northwest Territories</option>
                            <option value="Nova Scotia">Nova Scotia</option>
                            <option value="Ontario">Ontario</option>
                            <option value="Prince Edward Island">Prince Edward Island</option>
                            <option value="Quebec">Quebec</option>
                            <option value="Saskatchewan">Saskatchewan</option>
                            <option value="Nunavut">Nunavut</option>
                            <option value="Yukon">Yukon</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Area Code</label>
                        <input type="area_code" class="form-control" id="inputZip" name= "area_code" required>
                    </div>
                    <br>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="container">
        <div class="row justify-content-center mt-5">
            
        </div>
    </div>
    
    
    
                </form>
</body>
</html>