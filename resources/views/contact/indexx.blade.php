<x-app>
    @include('_header')
    @include('_banner')
    @include('_featured')

    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V17</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets3/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets3/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets3/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets3/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets3/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets3/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets3/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets3/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets3/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets3/css/main.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post" action="/contact">
            @csrf
				<span class="contact100-form-title">
					Send Us A Message
				</span>

            <label class="label-input100" for="first-name">Tell us your name *</label>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                <input id="first-name" class="input100" type="text" name="first_name" placeholder="First name">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                <input class="input100" type="text" name="last_name" placeholder="Last name">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="email">Enter your email *</label>
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="phone">Enter phone number</label>
            <div class="wrap-input100">
                <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="message">Message *</label>
            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    Send Message
                </button>
            </div>
        </form>

        <div class="contact100-more flex-col-c-m" style="background-image: url('storage/images/logo1.png');">
            <div class="flex-w size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-map-marker"></span>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

                           <span class="txt2 ">
						          	Mansoura University
						    </span>
                </div>
            </div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-phone-handset"></span>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>


                    <a href="https://t.me/Roots_of_roots"><span class="txt2">
                         <i class="fa fa-telegram" style="font-size:36px;color:white "> </i> +1 310 693-4613


						</span></a>


                </div>
            </div>

            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <span class="lnr lnr-envelope"></span>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">


						</span>

                    <a href=""> <span class="txt4 ">
							rootscommunity7@gmail.com
                    </span></a>
                </div>

            </div>
            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <i class="fa fa-facebook-f" style="font-size:36px;color: darkblue"></i>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">


						</span>

                    <a href="https://www.facebook.com/rootscommunity1">
                        <span class="txt4 ">
                            facebook.com/rootscommunity1
                        </span></a>


                </div>

            </div>
            <div class="dis-flex size1 p-b-47">
                <div class="txt1 p-r-25">
                    <i class="fa fa-twitter" style="font-size:36px;color: #0b8eff"></i>
                </div>

                <div class="flex-col size2">
						<span class="txt1 p-b-20">


						</span>

                    <a href="https://twitter.com/rootscommunity1">
                        <span class="txt4 ">
                            @rootscommunity1
                        </span></a>


                </div>

            </div>
        </div>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="assets3/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets3/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="assets3/vendor/bootstrap/js/popper.js"></script>
<script src="assets3/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets3/vendor/select2/select2.min.js"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="assets3/vendor/daterangepicker/moment.min.js"></script>
<script src=assets3/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="assets3/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="assets3/js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
</x-app>
