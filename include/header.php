 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TulusDev</title>
    <!-- This is how you add your image below --> 
    <link rel = "icon" type = "image/png" href = "../assets/doctors.jpg">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
            <a class="navbar-left disabled" href="#">

      </a>
      <a class="navbar-brand" href="../index.php">
        <?php 
            if (file_exists ('assets/doctors.jpg')) {
                echo '<img src="../assets/doctors.jpg" width="100" height="60">'; 
            } 
                else 
            { 
                echo ''; 
            }
        ?>
      </a>
    </div>
  </div>
</nav>