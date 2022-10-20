<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us Form</title>
    <link href="kacans.css?v4" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body>
    <div class="logo">
            <a href="kacans.php"><h3>Kacansg</h3></a>
            </div>

    <i class="bi bi-brightness-high-fill" id="toggleDark"></i>

    <nav class="navi">
        <a href="joinUs.php">Join Us</a>
        <a href="contact_kacans.php">Contact</a>
        <a href="about_kacans.php">About Me</a>
        <a href="category.php">Category</a>
        <a href="kacans.php">Home</a>
    </nav>
    
    <div class="teks4">Join as a Member to Get More Benefits</div>
    <div class="foto3"><img src="https://i.pinimg.com/564x/e2/e0/7c/e2e07ca4aae92e4832b04459d266a10b.jpg" alt="" width="370px"></div>
    <div><h1 class="teks3">Join Us Form</h1></div>
    <div class="kotak5">
        <form action="show.php" method="POST">
            <label for="">First Name: </label> 
            <input type="text" name="first"> <br>

            <label for="">Last Name: </label> 
            <input type="text" name="last"> <br>

            <label for="">Birth Date: </label>
            <input type="date" name="birth"> <br>

            <label for="">Number Phone: </label>
            <input type="number" min="0" max="1000000000000" name="nohp"><br>

            <label for="">Category: </label>
            <select name="category" id="">
                <option value="">--Choose--</option>
                <option value="Regular">Regular</option>
                <option value="Bronze">Bronze</option>
                <option value="Silver">Silver</option>
                <option value="Gold">Gold</option>
                <option value="Platinum">Platinum</option>
            </select> <br>

            <button type="submit" name="send" id="button1" class="btn btn-primary deep-purple btn-block ">Join</button>
            
        </form>
    </div>

    <script src="kacans.js"></script>
</body>
</html>
