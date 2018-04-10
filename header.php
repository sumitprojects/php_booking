<!DOCTYPE html>
<?php session_start();
if(isset($_SESSION['reg_id'])) {
    header("Location: user/profile.php");
}?>
<html lang="en">
<head>
    <title>About</title>

    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="booking/css/booking.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/camera.js"></script>


    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="booking/js/booking.js"></script>
    <script>
        $(document).ready(function () {
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false,
                minHeight: '444',
                thumbnails: false,
                height: '48.375%',
                caption: true,
                navigation: true,
                fx: 'mosaic'
            });
            /*carousel*/
            var owl = $("#owl");
            owl.owlCarousel({
                items: 2, //10 items above 1000px browser width
                itemsDesktop: [995, 2], //5 items between 1000px and 901px
                itemsDesktopSmall: [767, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation: true,
                pagination: false
            });
            $().UItoTop({easingType: 'easeOutQuart'});
        });

        function validation() {
            if (document.regform.fname.value == "") {
                alert("last name should not be blank..");
                document.regform.fname.focus();
                return false;
            }
            else if (document.regform.lname.value == "") {
                alert("last name should not be blank..");
                document.regform.lname.focus();
                return false;
            }
            else if (document.regform.address.value == "") {
                alert("It Is Compulsory...");
                document.regform.address.focus();
                return false;
            }
            else if (document.regform.city.value == "") {
                alert("It Is Compulsory...");
                document.regform.city.focus();
                return false;
            }
            else if (document.regform.state.value == "") {
                alert("It Is Compulsory...");
                document.regform.state.focus();
                return false;
            }
            else if (document.regform.country.value == "") {
                alert("It Is Compulsory...");
                document.regform.country.focus();
                return false;
            }
            else if (document.regform.dob.value == "") {
                alert("Enter Your Birthdate...");
                document.regform.dob.focus();
                return false;
            }
            else if (document.regform.gender.value == "") {
                alert("Enter Your Gender Please...");
                document.regform.gender.focus();
                return false;
            }
            else if (document.regform.mobile_no.value == "") {
                alert("Address should not be blank..");
                document.regform.mobile_no.focus();
                return false;
            }
            else if (document.regform.email.value == "") {
                alert("Email_id is must..");
                document.regform.email.focus();
                return false;
            }
            else if (document.regform.password.value == "") {
                alert("enter password..");
                document.regform.password.focus();
                return false;
            }
            else if (document.regform.sec_ques.value == "") {
                alert("Please Select Any One Of The Question...");
                document.regform.sec_ques.focus();
                return false;
            }
            else if (document.regform.answer.value == "") {
                alert("Please Answer The Above Question...");
                document.regform.answer.focus();
                return false;
            }

            else {
                return true;
            }
        }
    </script>
    <style>
        .error {
            color: #FF0000;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>