<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bloodline</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>


<?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">
                    <?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail,PageName from pages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
        <h1 class="mt-4 mb-3"><?php   echo htmlentities($result->PageName); ?> </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active"><?php   echo htmlentities($result->PageName); ?></li>
        </ol>

        <p><b><Br> Donating blood is a simple and safe way to make a difference in someone’s life. Your blood can help save the lives of people who need blood transfusions due to accidents, surgeries, diseases, or natural disasters. You can also help people who have blood disorders or cancers that require regular blood products. One blood donation can save up to three lives ...</Br>

<Br>Donating blood can also benefit your own health in various ways. It can reduce stress, improve your emotional well-being, benefit your physical health, help get rid of negative feelings, and provide a sense of belonging and reduce isolation. Donating blood can also give you a free health checkup, as you will be screened for your pulse, blood pressure, body temperature, hemoglobin levels, and some diseases before you donate.</Br>

<Br>Donating blood only takes about 10 minutes, and you can donate up to 450 ml of blood at a time. You will need to rest for a few minutes after donating blood, and drink plenty of fluids and eat well. You should avoid strenuous activities for a few hours after donating blood. You can donate blood every three months if you are healthy and meet the eligibility criteria.</Br>

<Br>Donating blood is a noble and generous act that can make a positive impact on the world. You can help save lives and improve your own health by donating blood today. Please consider joining us and become a blood donor. Thank you for your time and attention.</Br> </b></p>

    </div>
    <!-- /.container -->
    <?php } } ?>

    <!-- Footer -->
   <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
