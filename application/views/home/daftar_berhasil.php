<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/daftar.css">

    <!-- datepicker -->
    <!-- <link href="<?= base_url() ?> assets/css/datepicker.css" rel="stylesheet"> -->
    <style>
        body {
            font-size: 14px;
            line-height: 1.8;
            color: #222;
            font-weight: 400;
            font-family: 'Montserrat';
            background-image: url("<?= base_url('assets/img/bg.jpg') ?>");
            background-repeat: no-repeat;
            background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-position: center center;
            padding: 115px 0;
        }
    </style>
</head>

<body>


    <div class="main">

        <section class="signup">
            <div class="container">
                <?= $this->session->flashdata('pesan');
                ?>
                <a  class="btn btn-primary" href="<?= base_url() ?>"> Login </a>
            </div>
        </section>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/maiin.js"></script> -->


    <!-- <script src="<?= base_url() ?>assets/js/my.js"></script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>