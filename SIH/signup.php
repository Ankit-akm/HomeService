<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styleS.css">
  <title>Service_Provider</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="#" method="POST">
                    <h2>Signin</h2>
                    <div class="inputbox">
                        <ion-icon name="person-add-outline"></ion-icon>
                        <input type="text" class="input" name ="Name" required>
                        <label for="">Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="number" class="input" name="Phone" required>
                        <label for="">Phone</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" class="input" name="email" required>
                        <label for="">Email(Optional)</label>
                    </div>
                    <div class="inputbox">
                        <input type="number" class="input" name="aadhar" required>
                        <label for="">Addhar    </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="storefront-outline"></ion-icon>
                        <input type="text" name="address" required>
                        <label for="">Address</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" class="input" name="password" required>
                        <label for="">Create-Password</label>
                    </div>
                    
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" class="input" name="conpassword" required>
                        <label for="">Confirm-Password</label>
                    </div>
                    <button name="Signup">Sign in</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php
    include("connect.php");
    if (isset($_POST['Signup'])) {
        $name = $_POST['Name'];
        $phone = $_POST['Phone'];
        $email = $_POST['email'];
        $aadhar = $_POST['aadhar'];
        $address = $_POST['address'];
        $pass = $_POST['password'];
        $conpass = $_POST['conpassword'];

        $query = "INSERT INTO 'sih_form' VALUES('$name','$phone','$email','$aadhar','$address','$pass','$conpass')";
        $data = mysqli_query($conn,$query);

        if ($data) {
            header('location:./home.html');
        }
        else{
            header('location:./signup.html');
        }
    }

?>