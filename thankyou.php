<!DOCTYPE html>
<html lang="en">

<head>


    <?php
    include("assets/header.php");
    ?>

    <style>
        .Not_found_page {
            padding: 1rem 0 3rem 0;
            align-items: center;
            text-align: center;
        }

        .Not_found_page img {
            width: 30%;
            margin: 0 auto;
            display: block;
            margin-bottom: 1.6rem;
        }

        .Not_found_page h2,
        .Not_found_page p {
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include("assets/navbar.php");
    ?>

    <div class="Not_found_page">
    <img src="images/thankyou.webp" alt="">
        <h2 class="text-center">Thank you!</h2>
        <p>Thank you for filling in your details. We will get in touch with you shortly.</p>
        <a class="btn  text-white" href="index" style="background-color: #1e944a;">Got to Home Page</a>
    </div>

</body>


<?php
include("assets/footer.php");
?>

</html>