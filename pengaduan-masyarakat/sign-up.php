<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="bs/css/sign-up.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="sign-up">
        <h1 class="judul">SIGN-UP</h1>
        <form action="backend/proses_register.php" method="post">
            <input type="text" name="nik" class="input-box" placeholder="Enter Your Nik">
            <input type="text" name="nama" class="input-box" placeholder="Enter Your Name">
            <input type="text" name="username" class="input-box" placeholder="Enter Your Username">
            <input type="password" name="password" class="input-box" placeholder="Enter Your Password">
            <input type="text" name="telp" class="input-box" placeholder="Enter Your Phone Number">
            
            <button type="sumbit" class="signup-btn">Sign-up</button>
        </form>
    </div>

</body>
</html>