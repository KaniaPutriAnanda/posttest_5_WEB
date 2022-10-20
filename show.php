<?php
    if(isset($_POST['send'])){
        $first = $_POST['first'];
        $last = $_POST['last'];
        $birth = $_POST['birth'];
        $nohp = $_POST['nohp'];
        $category = $_POST['category'];
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="kacans.css?v3" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" /> -->
    <title>show document</title>
</head>
<body class="show">
     <div class="logos">
     <a href="kacans.php"><h3>Kacansg</h3></a>
     </div>

    <!-- <i class="bi bi-brightness-high-fill" id="toggleDark"></i> -->

    <nav class="navis">
        <a href="joinUs.php">Join Us</a>
        <a href="contact_kacans.php">Contact</a>
        <a href="about_kacans.php">About Me</a>
        <a href="#">Category</a>
        <a href="kacans.php">Home</a>
    </nav>

    <div class="chingu"><h3>WELCOME CHINGU-YA</h3></div>
    <div class="hasil"><?php echo "<br>Name: <br> $first $last";?><hr class="hr" width="20%"></div>
    <div class="hasil"><?php echo "<br>Birth Date: <br> $birth";?><hr class="hr" width="20%"></div>
    <div class="hasil"><?php echo "<br>Number Phone: <br> $nohp";?><hr class="hr" width="20%"></div>
    <div class="hasil"><?php echo "<br>Category: <br> $category";?><hr class="hr" width="20%"></div>

    <script src="kacans.js"></script>
</body>
</html>

