<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Perpus Login </title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gaze Sign up & login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tags -->
    <!--stylesheets-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="<?= base_url(); ?>vendor/css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <link href="<?= base_url(); ?>vendor///fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
</head>

<body>
    <div class="mid-class">
        <div class="art-right-w3ls">
            <h2>Sign In and Sign Up</h2>
            <?php
            if ($this->session->flashdata('error') != '') {
                echo '<div class="mb-2" style="color: white">';
                echo $this->session->flashdata('error');
                echo '<div/>';
            }
            ?>
            <?php
            if ($this->session->flashdata('success_register') != '') {
                echo '<div class="alert alert-info" role="alert">';
                echo $this->session->flashdata('success_register');
                echo '</div>';
            }
            ?>

            <form action="<?= base_url(); ?>Auth/login" method="post">
                <div class="main">
                    <div class="form-left-to-w3l">
                        <input type="text" name="username" placeholder="Username" required="">
                    </div>
                    <div class="form-left-to-w3l ">
                        <input type="password" name="password" placeholder="Password" required="">
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="clear"></div>
                <div class="btnn">
                    <button type="submit">Sign In</button>
                </div>
            </form>
            <div class="w3layouts_more-buttn">
                <h3>Don't Have an account..?
                    <a href="#content1">Sign Up Here
                    </a>
                </h3>
            </div>
            <!-- popup-->
            <div id="content1" class="popup-effect">
                <div class="popup">
                    <!--login form-->
                    <div class="letter-w3ls">
                        <?php
                        if ($this->session->flashdata('error') != '') {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $this->session->flashdata('error');
                            echo '<div/>';
                        } ?>
                        <form action="<?= base_url(); ?>Auth/register" method="post">
                            <div class="form-left-to-w3l">
                                <input type="text" name="nama" placeholder="Nama" required="">
                            </div>
                            <div class="form-left-to-w3l">
                                <input type="text" name="username" placeholder="Username" required="">
                            </div>
                            <div class="form-left-to-w3l">
                                <input type="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="form-left-to-w3l">
                                <input type="password" name="password" placeholder="Password" required="">
                            </div>
                            <div class="form-left-to-w3l margin-zero">
                                <input type="password" name="password2" placeholder="Confirm Password" required="">
                            </div>
                            <div class="btnn">
                                <button type="submit">Sign Up</button>
                                <br>
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>
                    <!--//login form-->
                    <a class="close" href="#">&times;</a>
                </div>
            </div>
            <!-- //popup -->
        </div>

    </div>
    <footer class="bottem-wthree-footer">
        <p>
            alfin ardian © <?= date('Y'); ?>
        </p>
    </footer>
</body>

</html>