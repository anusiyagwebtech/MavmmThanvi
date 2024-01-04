<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from irsfoundation.com/tf/templates/EducationPark/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 08:13:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link href="images/apple-icon.png" rel="icon" type="image/png">
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Efinance Title -->
    <title>Education Park - HTML 5 Template</title>

    <!-- css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="preloader"></div>
    <!--header start-->
    <?php include 'require/header.php'; ?>
    <!-- Inner page hedaing start -->
    <section class="irs-inner-page-heading irs-layer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="irs-inner-heading">
                        <h2>My Account</h2>
                        <i class="icofont icofont-education"></i>
                        <p><a href="index-layout1.html">HOME</a> > <a href="#">Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner page hedaing end -->

    <!-- Account start -->
    <section class="irs-account-field">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="irs-account-col">
                        <h3>login</h3>
                        <form id="contact_form" name="contact_form" action="http://irsfoundation.com/tf/templates/EducationPark/includes/contact.php" method="post" novalidate="novalidate">
                            <input id="form_user_name" name="form_user_name" class="form-control" placeholder="User Name*" required="required" data-error="User Name." type="text">
                            <input id="user_password" name="user_password" type="password" class="form-control" placeholder="Password*" required="required" data-error="User Name." value="">
                            <label>
                                <input id="password_remember" name="rememberme" type="checkbox" value=""> Remember Me</label>
                            <br>
                            <button class="btn btn-default irs-big-btn" type="submit">login</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="irs-account-col">
                        <h3>create a new account</h3>
                        <form id="contact_form_two" name="contact_form" action="http://irsfoundation.com/tf/templates/EducationPark/includes/contact.php" method="post" novalidate="novalidate">
                            <input id="form_first_name" name="form_first_name" class="form-control" placeholder="First Name*" required="required" data-error="First Name." type="text">
                            <input id="form_last_name" name="form_last_name" class="form-control" placeholder="Last Name*" required="required" data-error="Last Name." type="text">
                            <input id="form_user_name2" name="form_user_name2" class="form-control" placeholder="User Name*" required="required" data-error="User Name." type="text">
                            <input id="user_password2" name="user_password2" type="password" class="form-control" placeholder="Password*" required="required" data-error="User Name." value="">
                            <input id="user_password_confirm" name="user_password_confirm" type="password" class="form-control" placeholder="Password Confirm*" required="required" data-error="Password Confirm." value="">
                            <input id="form_email" name="form_email" class="form-control" placeholder="Email*" required="required" data-error="Email Name." type="text">
                            <input id="form_website" name="form_website" class="form-control" placeholder="Website (optional)" required="required" data-error="Website." type="text">
                            <button class="btn btn-default irs-big-btn" type="submit">register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account end -->

    <section class="irs-copyright-field">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="irs-copyright">
                        <p>Copyright© 2017. Design by <a href="https://themeforest.net/user/irs_soft">irs_soft</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--footer start-->
 <?php include 'require/footer.php'; ?>
    <!-- script start from here -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
    <script type="text/javascript" src="js/bootstrap-slider.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="js/script.js"></script>

</body>


<!-- Mirrored from irsfoundation.com/tf/templates/EducationPark/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 08:13:05 GMT -->
</html>