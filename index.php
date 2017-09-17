<?php
require_once ('navbar.html');
?>
<!--Strat Header-->
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Dental Website</title>
    <meta name="description" content="We deal only in Dentistry and We are Expert at it">


    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="css/main.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,800" rel="stylesheet">
    <link rel="stylesheet" href="http://www.facialvirtuoso.com/assets/css/plugins.min.css">
    <link rel="stylesheet" href="http://www.facialvirtuoso.com/assets/css/settings.css">
    <link rel="stylesheet" href="http://www.facialvirtuoso.com/assets/css/layers.css">
    <link rel="stylesheet" href="http://www.facialvirtuoso.com/assets/css/navigation.css">
    <link rel="stylesheet" href="http://www.facialvirtuoso.com/assets/css/style.css">
    <link rel="stylesheet" href="http://www.facialvirtuoso.com/assets/css/mvs.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://www.facialvirtuoso.com/admin_assets/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script
    <style type="text/css">

    </style>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/logo2.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.54/theme-default.min.css">

    <!-- Modernizr -->
    <script src="http://www.facialvirtuoso.com/assets/js/modernizr.js"></script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '183502968807913'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=183502968807913&ev=PageView&noscript=1"
        /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-97375134-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<script>fbq('track', '<EVENT_NAME>');</script>
<body style="font-family: 'Roboto', sans-serif; font-size: 14px;">

<!-- <header class="header header2 gray sticky-header">
    <div class="header-inner">
        <div class="container">
            <a href="#" class="site-logo" title="Dental">
                <img class="logo_slider" src="images/logo.jpg" alt="Simple Logo">
                <span class="sr-only">Dental</span>
            </a>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-container" aria-expanded="false">
                <span class="toggle-text">Menu</span>
                <span class="toggle-wrapper">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="main-nav-container">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us <span 	glyphicon glyphicon-menu-down></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Meet The Team</a></li>
                            <li><a href="#">Happy Clients</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Procedures &nbsp;<span class="	glyphicon glyphicon-menu-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Aesthetic Procedure and Salons</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Blog Write Up</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Chin Job</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Facial Trauma</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Fillers</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Hair Tra</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Introduction</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Microderma Abrasion & Chemical Peels</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Nose Job</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Post Operative</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Salon Questionnare</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#">Cases Studies</a>
                    </li>
                     <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="#" style="background: #010101; border-radius: 5px;color:#fff;">Book an appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header> -->
<style type="text/css">
    .disabled {
        background-color: white;
        border-bottom: solid 2px #fff !important;
    }
    .as{
        color: #fff !important;
    }
    .drop_br {
        border-bottom: solid 1px #fff;
    }
    .navbar-nav .dropdown-menu > li > a {
        color: black !important;
        background-color: white;
    }
    .navbar-nav .dropdown-menu > li > a:hover, .navbar-nav .dropdown-menu > li > a:focus {
        color: black !important;
        background-color: grey;
    }
    .navbar-nav .dropdown-menu > li > a:hover, .navbar-nav .dropdown-menu > li > a:focus {
        color: black !important;
        background-color: grey;
    }
    .ontop{
        bg-lightgray border pb40
        z-index: 99;
    }

    .odd{
        background-color: #2c4c6b;
        color: white;
    }
    .even{
        background-color: #3f6794;
        color: white;
    }
    .glyphicon.glyphicon-send {
        font-size: 50px;
        padding-top: 10px;
    }
    .glyphicon-pushpin{
        font-size: 50px;
        padding-top: 10px; ;
    }
    .glyphicon-scissors{
        font-size: 50px;
        padding-top: 10px; ;
    }
    .glyphicon-bookmark{
        font-size: 50px;
        padding-top: 10px; ;
    }
    .navbar {

        margin-bottom: 0px;
    }
    .nav>li>a:focus, .nav>li>a:hover {
        text-decoration: none;
        background-color: white;
    }
    .nav>li>a:focus
    {
        background: white;
    }
    .navbar-nav > li > a {
        position: relative;
        margin-top: 30px;
        font-weight: 600;
        color: mediumaquamarine;
    }


    /* Ripple Out */
    @-webkit-keyframes hvr-ripple-out {
        100% {
            top: -12px;
            right: -12px;
            bottom: -12px;
            left: -12px;
            opacity: 0;
        }
    }
    @keyframes hvr-ripple-out {
        100% {
            top: -12px;
            right: -12px;
            bottom: -12px;
            left: -12px;
            opacity: 0;
        }
    }
    .hvr-ripple-out {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px transparent;
        position: relative;
    }
    .hvr-ripple-out:before {
        content: '';
        position: absolute;
        border: #e1e1e1 solid 6px;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
    }
    .hvr-ripple-out:hover:before, .hvr-ripple-out:focus:before, .hvr-ripple-out:active:before {
        -webkit-animation-name: hvr-ripple-out;
        animation-name: hvr-ripple-out;
    }
    @-webkit-keyframes hvr-icon-pulse-grow {
        to {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }
    }
    @keyframes hvr-icon-pulse-grow {
        to {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }
    }
    .hvr-icon-pulse-grow {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px transparent;
        position: relative;
        padding-right: 2.2em;
    }
    .hvr-icon-pulse-grow:before {
        content: "\f015";
        position: absolute;
        right: 1em;
        padding: 0 1px;
        font-family: FontAwesome;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
    .hvr-icon-pulse-grow:hover:before, .hvr-icon-pulse-grow:focus:before, .hvr-icon-pulse-grow:active:before {
        -webkit-animation-name: hvr-icon-pulse-grow;
        animation-name: hvr-icon-pulse-grow;
        -webkit-animation-duration: 0.3s;
        animation-duration: 0.3s;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-direction: alternate;
        animation-direction: alternate;
    }
    .member{
        width:95%;
    }


    /* Pulse Grow */
    @-webkit-keyframes hvr-pulse-grow {
        to {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
    }
    @keyframes hvr-pulse-grow {
        to {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
    }
    .hvr-pulse-grow {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px transparent;

    }
    .hvr-pulse-grow:hover, .hvr-pulse-grow:focus, .hvr-pulse-grow:active {
        -webkit-animation-name: hvr-pulse-grow;
        animation-name: hvr-pulse-grow;
        -webkit-animation-duration: 0.3s;
        animation-duration: 0.3s;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-direction: alternate;
        animation-direction: alternate;
    }


    .hvr-float {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px transparent;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
    .hvr-float:hover, .hvr-float:focus, .hvr-float:active {
        -webkit-transform: translateY(-8px);
        transform: translateY(-8px);
    }




</style>



<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '183502968807913'); // Insert your pixel ID here.
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="#"
    /></noscript>
<!-- DO NOT MODIFY -->  
<!-- End Facebook Pixel Code -->

</header><!--End Header-->
<!--Strat Slider-->
<div class="main">

    <!--Strat Slider-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="height: 450px; !important;">
            <div class="item active"> <img  src="images/dental1.jpg" alt="banner3">
                <div class="carousel-caption"> </div>
            </div>
            <div class="item"> <img  src="images/dental2.jpg" alt="banner1" >
                <div class="carousel-caption"> </div>
            </div>
            <!-- <div class="item"> <img  src="assetsimages/myimages/banner3.jpg" alt="banner3">
              <div class="carousel-caption"> </div>
            </div> -->
            <div class="item">
                <img  src="images/dental3.jpg" alt="banner2">
                <div class="carousel-caption"> </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" style="top:300px;" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" style="top:300px;" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    <!--End Slider-->
    <div id="into" class="into-slider" id="myScroll">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 ontop odd hvr-pulse-grow" style="">
                    <div class="item">
                        <center><span class="glyphicon glyphicon-send"></span></center><br>
                        <h4><center>3D Printed Models</center></h4>

                    </div>
                </div>
                <div class="col-md-3 ontop even hvr-pulse-grow">
                    <div class="item"><center><span class="glyphicon glyphicon-scissors"></span></center><br>
                        <h4><center>Surgical Guides</center></h4>

                    </div>
                </div>
                <div class="col-md-3 ontop odd hvr-pulse-grow">
                    <div class="item"><center><span class="glyphicon glyphicon-bookmark"></span></center><br>
                        <h4><center>Dental Implant Guide</center></h4>
                    </div>
                </div>
             <!--   <div class="col-md-2 ontop even hvr-pulse-grow">
                    <div class="item"><center><span class="glyphicon glyphicon-bookmark"></span></center><br>
                        <h4><center>Medical Training Models</center></h4>
                    </div>
                </div>
                <div class="col-md-2 ontop odd hvr-pulse-grow ">
                    <div class="item"><center><span class="glyphicon glyphicon-pushpin"></span></center><br>
                        <h4><center>Patient Specific Implants</center></h4>
                    </div>
                </div>

-->

                <div class="col-md-3 ontop even hvr-pulse-grow">
                    <div class="item"><center><span class="glyphicon glyphicon-pushpin"></span></center><br>
                        <h4><center>Medical Innovations</center></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        // When the browser is ready...
        $(function() {
            $("#Frmgroup").validate({


                // Specify the validation rules
                rules: {
                    patient_name: {
                        required: true
                    },

                    patient_email:{
                        required:true,
                        email:true
                    },

                    patient_contact:{
                        required: true,
                        minlength: 10,
                        maxlength:11,
                        number: true
                    },
                    state:{
                        required:true
                    },
                    city:{
                        required:true
                    },
                    area:{
                        required:true
                    },
                    clinic_name:{
                        required:true
                    },
                    docter:{
                        required:true
                    }

                },

                // Specify the validation error messages
                messages:{
                    patient_name: {
                        required: "Please Enter  Name"
                    },

                    patient_email:{
                        required: "Please Enter e-mail",
                        email: "Please Enter a valid e-mail"
                    },

                    patient_contact: {
                        required: "Please Enter mobile no.",
                        minlength: "Please Enter 10 digit mobile number",
                        maxlength: "Please Enter no more than 10 digit"
                    },
                    state:{
                        required:"Select State"
                    },
                    city:{
                        required:"Select City"
                    },
                    area:{
                        required:"Select Area"
                    },
                    clinic_name:{
                        required:"Select ClinicName"
                    }

                },
                errorPlacement: function(error, element) {
                    element.attr("placeholder",error.text());
                },

                submitHandler: function(form) {

                    form.submit();
                }
            });

        });

    </script>


    <script type="text/javascript">

        $('#state').on('change',function(){
            var state_id=$(this).val();
            //alert(state_id);
            var URL="#";
            $.ajax({
                url:URL,
                type:"POST",
                dataType:"json",
                data:{state_id:state_id},
                success:function(data1){
                    //var data=JSON.parse(data1);
                    // alert(data1);

                    var options = '';
                    var options1 = '';
                    // alert(data); return false;
                    // $('#state').children('option:not(:first)').remove();
                    if(data1!="notfound"){
                        options+='<option value="">Select City</option>';
                        for (var i = 0; i < data1.length; i++) {
                            options += '<option value="' + data1[i].city_id + '">' + data1[i].city_name + '</option>';
                        }
                        $("#city").html(options);
                        options1 = '<option value="">Select City first</option>';
                        $("#district").html(options1);
                    }else{
                        options = '<option value="">Select country first</option>';
                        $("#city").html(options);
                        options1 = '<option value="">Select State first</option>';
                        $("#district").html(options1);
                        // $('#state option[value!="0"]').remove();
                    }

                }

            });

        });




        $('#city').on('change',function(){
            var city_id=$(this).val();
            //alert(city_id);
            var URL="#";
            $.ajax({
                url:URL,
                type:"POST",
                dataType:"json",
                data:{city_id:city_id},
                success:function(data1){
                    var options = '';
                    if(data1!="notfound"){
                        options+='<option value="">Select Area</option>';
                        for (var i = 0; i < data1.length; i++) {
                            options += '<option value="' + data1[i].area_id + '">' + data1[i].district_name + '</option>';
                        }
                        $("#area").html(options);

                    }else{
                        options = '<option value="">Data Not Found</option>';
                        $("#area").html(options);
                    }

                }

            });

        });

        $('#area').on('change',function(){
            var area_id=$(this).val();
            var URL="#";
            $.ajax({
                url:URL,
                type:"POST",
                dataType:"json",
                data:{area_id:area_id},
                success:function(data1){
                    var options = '';
                    if(data1!="notfound"){
                        options+='<option value="">Select Clinic Name</option>';
                        for (var i = 0; i < data1.length; i++) {
                            options += '<option value="' + data1[i].id + '">' + data1[i].clinic_name + '</option>';
                        }
                        $("#clinic_name").html(options);
                    }else{
                        options = '<option value="">Data Not Found</option>';
                        $("#clinic_name").html(options);
                    }

                }

            });

        });



        $('#clinic_name').on('change',function(){
            var clinic_id=$(this).val();
            var URL="#";
            $.ajax({
                url:URL,
                type:"POST",
                dataType:"json",
                data:{clinic_id:clinic_id},
                success:function(data1){
                    var options = '';
                    if(data1!="notfound"){
                        options+='<option value="">Select Docter Name</option>';
                        for (var i = 0; i < data1.length; i++) {
                            options += '<option value="' + data1[i].docter_id + '">' + data1[i].first_name+" "+data1[i].last_name+ '</option>';

                        }
                        $("#docter").html(options);
                    }else{
                        options = '<option value="">Data Not Found</option>';
                        $("#docter").html(options);
                    }

                }

            });

        });

    </script>

    <script type="text/javascript" src="http://www.facialvirtuoso.com/admin_assets/bootstrap/js/jquery.validate.min.js"></script>
    <!-- jQuery 2.1.4 -->

    <!-- Bootstrap 3.3.5 -->
    <script src="http://www.facialvirtuoso.com/admin_assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://www.facialvirtuoso.com/admin_assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://www.facialvirtuoso.com/admin_assets/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="http://www.facialvirtuoso.com/admin_assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="http://www.facialvirtuoso.com/admin_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="http://www.facialvirtuoso.com/admin_assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="http://www.facialvirtuoso.com/admin_assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="http://www.facialvirtuoso.com/admin_assets/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="http://www.facialvirtuoso.com/admin_assets/dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="http://www.facialvirtuoso.com/admin_assets/dist/js/demo.js"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script src="http://www.facialvirtuoso.com/admin_assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://www.facialvirtuoso.com/admin_assets/plugins/datatables/dataTables.bootstrap.min.js">
    </script>

    <script src="http://www.facialvirtuoso.com/admin_assets/js/jquery.plugin.js"></script>
    <script src="http://www.facialvirtuoso.com/admin_assets/js/jquery.datepick.js"></script>
    <script src="http://www.facialvirtuoso.com/admin_assets/js/moment.js"></script>
    <script src="http://www.facialvirtuoso.com/admin_assets/js/bootstrap-datetimepicker.js"></script>


</body>
</html>
<!--  <div class="bg-lightgray border pb40"> -->
<div class="main">
    <div class="bg-lightgray border pb40">
        <div class="container-fluid" style="margin-top: -10px !important;margin-top: -2px;" id="scrollMe">
            <div class="col-md-12 text-center" style="padding-top: 20px;">
                <h1 style=" font-style: italic;" id="animate1">"You think it, You have it!"</h1>
                <h2 style=" font-style: italic;" id="animate2">"Medical Innovations are our passion!"</h2>
            </div>
        </div>
        <!--
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!--<h1>What Do You Want ?</h1>
                       <h1>We deals only in face and we are expert in it</h1>-->
        <!--<div class="grid_row">
            <div class="grid grid_col_2of2">
                <div class="navRadial">
                    <div class="navRadial_contain">
                        <img src="http://www.facialvirtuoso.com/assetsimages/myimages/radial-nav-woman-face1.png" alt="" class="img img_full img_radialBG img-responsive">
                        <ul class="navRadial_list">
                            <li class="navRadial_list_item">
                                <h3 class="heading heading5">
                                    <a aria-hidden="true" href="#" class="heading_navRadial heading_navRadial_cleft-lip-and-palate-surgery heading_navRadial-center">Oh.. My God!! jaws can be moved front or back</a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/2.0.png" alt="Cleft Lip/Palate and Craniofacial Surgery" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left surgery1">
                                    <a class="navRadial_tip-link" href="#">
                                        <div class="navRadial_tip_title">Oh.. My God!! jaws can be moved front or back</div>
                                        <div class="navRadial_tip_bd">
                                            <p>Jaw deformity is the condition wherein your maxilla i.e upper jaw,</p>
                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                            <li class="navRadial_list_item">
                                <h3 class="heading heading5"><a aria-hidden="true" href="" class="heading_navRadial heading_navRadial_obstructive-sleep-apnea heading_navRadial-center">Acne & Pimples...
                                        oh...no...Not again </a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/1.9.png" alt="Obstructive Sleep Apnea" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left apnea1">
                                    <a class="navRadial_tip-link" href="#">
                                        <div class="navRadial_tip_title">Acne & Pimples... oh...no...Not again </div>
                                        <div class="navRadial_tip_bd">
                                            <p>These two are the most popular cosmetic procedures that you can avail of today.</p>

                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                            <li class="navRadial_list_item">
                                <h3 class="heading heading5"><a aria-hidden="true" href="#" class="heading_navRadial heading_navRadial_head-neck-and-oral-cancer heading_navRadial-center">I Hate Wrinkles</a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/1.8.png" alt="Head, Neck and Oral Pathology" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left cancer1">
                                    <a class="navRadial_tip-link" href="#">
                                        <div class="navRadial_tip_title">I Hate Wrinkles</div>
                                        <div class="navRadial_tip_bd">
                                            <p>We will examine you and ask you to animate your face — frown, look up,</p>

                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                            <li class="navRadial_list_item">
                                <h3 class="heading heading5"><a aria-hidden="true" href="#" class="heading_navRadial heading_navRadial_dental-and-soft-tissue-surgery heading_navRadial-center">Grow Your Hair back</a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/tooltip-pointer-dental-and-soft-tissue-surgery.png" alt="Dental and Soft Tissue Surgery" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left surgery2">
                                    <a class="navRadial_tip-link" href="#">
                                        <div class="navRadial_tip_title">Grow Your Hair back</div>
                                        <div class="navRadial_tip_bd">
                                            <p>We will examine you and ask you to animate your face — frown, look up, </p>
                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                            <li class="navRadial_list_item">
                                <h3 class="heading heading5"><a aria-hidden="true" href="#" class="heading_navRadial heading_navRadial_dental-implant-surgery heading_navRadial-center">Please...Shape <br>My Eyebrows.</a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/1.7.png" alt="Dental Implant Surgery" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left surgery3">
                                    <a class="navRadial_tip-link" href="#">
                                        <div class="navRadial_tip_title">Please...Shape My Eyebrows.</div>
                                        <div class="navRadial_tip_bd">
                                            <p>Please...Shape My Eyebrows.</p>

                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                            <li class="navRadial_list_item">
                                <h3 class="heading heading5"><a aria-hidden="true" href="#" class="heading_navRadial heading_navRadial_administration-of-anesthesia heading_navRadial-center">I want a Beautiful Nose..</a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/1.6.png" alt="Administration of Anesthesia" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left anesthesia1">
                                    <a class="navRadial_tip-link" href="#">
                                        <div class="navRadial_tip_title">I want a Beautiful Nose..</div>
                                        <div class="navRadial_tip_bd">
                                            <p>Nose job, is a  procedure for reshaping/resizing or </p>

                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                            <li class="navRadial_list_item">
                                <h3 class="heading heading5"><a aria-hidden="true" href="#" class="heading_navRadial heading_navRadial_wisdom-teeth-management heading_navRadial-center">Age Gracefully</a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/1.5.png" alt="Wisdom Teeth Management" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left management1">
                                    <a class="navRadial_tip-link" href="#">
                                        <div class="navRadial_tip_title">Age Gracefully</div>
                                        <div class="navRadial_tip_bd">
                                            <p>Age Gracefully</p>

                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                            <li class="navRadial_list_item">
                                <h3 class="heading heading5"><a aria-hidden="true" href="#" class="heading_navRadial heading_navRadial_treatment-of-facial-injury heading_navRadial-center">Doctor. I am Having pain in front of the ear.</a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/1.4.png" alt="Treatment of Facial Injury" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left injury1">
                                    <a class="navRadial_tip-link" href="#">
                                        <div class="navRadial_tip_title">Doctor. I am Having pain in front of the ear.</div>
                                        <div class="navRadial_tip_bd">
                                            <p>Doctor. I am Having pain in front of the ear.</p>

                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                            <li class="navRadial_list_item">
                                <h3 class="heading heading5"><a aria-hidden="true" href="#" class="heading_navRadial heading_navRadial_corrective-jaw-surgery heading_navRadial-center">Doc.. Do the best
                                        Dental Implant You Have.</a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/1.3.png" alt="Corrective Jaw Surgery" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left surgery4">
                                    <a class="navRadial_tip-link" href="http://www.facialvirtuoso.com/index.php/Dental/dental_implant">
                                        <div class="navRadial_tip_title">Doc... Do the best
                                            Dental Implant You
                                            Have.</div>
                                        <div class="navRadial_tip_bd">
                                            <p>Do you have any missing teeth in your mouth which is not letting you carry</p>

                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                            <li class="navRadial_list_item">
                                <h3 class="heading heading5"><a aria-hidden="true" href="#" class="heading_navRadial heading_navRadial_facial-cosmetic-surgery heading_navRadial-center">I am perfect... So Should
                                        Be my chin...</a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/1.2.png" alt="Facial Cosmetic Surgery" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left surgery5">
                                    <a class="navRadial_tip-link" href="#">
                                        <div class="navRadial_tip_title">I am perfect... So Should
                                            Be my chin...</div>
                                        <div class="navRadial_tip_bd">
                                            <p>It is a procedures involving the manipulation of the chin.</p>

                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                            <li class="navRadial_list_item">
                                <h3 class="heading heading5"><a aria-hidden="true" href="#" class="heading_navRadial heading_navRadial_tmj heading_navRadial-center">Dimple So Cute</a></h3>
                                <img src="http://www.facialvirtuoso.com/assets/images/myimages/1.1.png" alt="Facial Pain" class="img img_full img_radial_point">
                                <div class="navRadial_tip navRadial_tip_left navRadial_tip_tmj">
                                    <a class="navRadial_tip-link" href="#">
                                        <div class="navRadial_tip_title">Dimple So Cute</div>
                                        <div class="navRadial_tip_bd">
                                            <p>Dimple over the cheeks enhance the facial beauty just like the famous celebrities who </p>

                                        </div>
                                        <span class="navRadial_tip-linkText">Click here to find out more.</span>
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>                <div class="mb40"></div><!-- margin -->
        <div class="" style="background-image:url('images/p1.jpg'); margin-top: 20px;">
            <div style="background-color:rgba(0,0,0,.81);">
                <div class="row">
                    <h2 class="title text-center mb45 sliding-u-t-b" style="z-index: 1; color: white;">Products & Services</h2>
                    <div class="col-md-12">
                        <div class="team-carousel-sm owl-carousel closer-dots no-radius-dots">
                            <div class="member col-sm-10">
                                <div>
                                    <figure>
                                        <img src="images/2.jpg" class="memberImg" alt="Member Name">
                                    </figure>
                                    <!-- <div class="social-icons">
                                        <label>Find me:</label>
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-github"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                    </div> -->
                                </div>
                                <div class="col-sm-12" style="background-color: darkslategray;">
                                    <a href="#"><h3 class="member-title" style="margin-top: 10px;    color: bisque; "><center>SURGICAL GUIDE TO EXECUTE PLAN</center> </h3></a>


                                    <div class="col-sm-12" style="background-color: darkslategray; text-align: center; padding-bottom:5%; font-size: 17px;"><hr> <span class="text-center" style="color: white; text-align: justify">
We can help you execute your plan exactly, accurately and safely with our innovative surgical guides.
                                        </span>
                                    </div>

                                </div>
                            </div>

                            <div class="member col-sm-10">
                                <div>
                                    <figure>
                                        <img src="images/1.jpg" class="memberImg"  alt="Member Name">
                                    </figure>
                                    <!-- <div class="social-icons">
                                        <label>Find me:</label>
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-github"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                    </div> -->
                                </div>
                                <div class="col-sm-12" style="background-color: darkslategray;">
                                    <a href="#"><h3 class="member-title" style="margin-top: 10px;  color: bisque;"><center>3D PRINTED MODEL FOR SURGICAL PLANING</center></h3></a>
                                </div>

                                <div class="col-sm-12" style="background-color: darkslategray; text-align: center; padding-bottom:5%; font-size: 17px;"><hr> <span class="text-center" style="color: white; text-align: justify">
    3D printed models are great tools to explain the disease to the patient and the planned surgery.It also helps to plan the case better.</span>
                                </div>
                            </div>

                            <div class="member col-sm-10">
                                <div>
                                    <figure>
                                        <img src="images/3.jpg" class="memberImg"   alt="Member Name">
                                    </figure>
                                    <!-- <div class="social-icons">
                                        <label>Find me:</label>
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-github"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                    </div> -->
                                </div>
                                <div class="col-sm-12" style="background-color: darkslategray;">
                                    <a href="#"><h3 class="member-title" style="margin-top: 10px;     color: bisque;"><center>PATIENT SPECIFIC IMPLANT </center></h3></a>

                                    <div class="col-sm-12" style="background-color: darkslategray; text-align: center; padding-bottom:5%; font-size: 17px;"><hr> <span class="text-center" style="color: white; text-align: justify">
        Complex deformities of the face requires patient specific implants to restore the normal form and function.
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="member col-sm-10">
                                <div>
                                    <figure>
                                        <img src="images/4.jpg"  class="memberImg"  alt="Member Name">
                                    </figure>
                                    <!-- <div class="social-icons">
                                        <label>Find me:</label>
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-github"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                    </div> -->
                                </div>
                                <div class="col-sm-12" style="background-color: darkslategray;">
                                    <a href="#"><h3 class="member-title" style="margin-top: 10px;     color: bisque;"><center>SURGICAL PLANNING FOR DISEASED MANDIBLE RECONSTRUCTION WITH FREE FIBULA</center></h3></a>

                                    <div class="col-sm-12" style="background-color: darkslategray; text-align: center; padding-bottom:5%; font-size: 17px;"><hr> <span class="text-center" style="color: white; text-align: justify">
        Resection of the diseased part of the jaw and its reconstruction using free fibula flaps can be done more accurately with the help of surgical guides specially for this purpose.
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="member col-sm-10">
                                <div>
                                    <figure>
                                        <img src="images/5.jpg" class="memberImg"  alt="Member Name">
                                    </figure>
                                    <!-- <div class="social-icons">
                                        <label>Find me:</label>
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-github"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                    </div> -->
                                </div>
                                <div class="col-sm-12" style="background-color: darkslategray;">
                                    <a href="#"><h3 class="member-title" style="margin-top: 10px; color: bisque;"><center>‘ALL-ON-FOUR’AND ZYGOMATIC DENTAL IMPLANT DENTAL IMPLANT PLANNING AND SURGICAL GUIDE </center></h3></a>
                                    <div class="col-sm-12" style="background-color: darkslategray; text-align: center; padding-bottom:5%; font-size: 17px;"><hr> <span class="text-center" style="color: white; text-align: justify">
        Restoration of dentition in highly resorbed ridges requires accurate placement of the implants. This can be achieves only with the help of surgical <guides class=""></guides>
                                        </span>
                                    </div>

                                </div>
                            </div>
                         <div class="member col-sm-10">
                                <div>
                                    <figure>
                                        <img src="images/6.jpg" class="memberImg"  alt="Member Name">
                                    </figure>
                                    <!-- <div class="social-icons">
                                        <label>Find me:</label>
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-github"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                                    </div> -->
                                </div>
                                <div class="col-sm-12" style="background-color: darkslategray;">
                                    <a href="#"><h3 class="member-title" style="margin-top: 10px; color: bisque;"><center>ANY CUSTOMIZED SOLUTION FOR ORTHOPAEDIC, NEUROSURGERY, ENT, PLASTIC SURGERY, CARDIOVASCULAR SURGERY</center></h3></a>
                                    <div class="col-sm-12" style="background-color: darkslategray; text-align: center; padding-bottom:5%; font-size: 17px;"><hr> <span class="text-center" style="color: white; text-align: justify">
        Customized solutions for others surgical specialities are available and being developed futured. <guides class=""></guides>
                                        </span>
                                    </div>

                                </div>
                            </div>







                        </div>
                        <div class="row">
                            <div class="col-md-3 col-md-offset-2">&nbsp; &nbsp; &nbsp; &nbsp;</div>


                        </div>
                    </div>
                </div><!-- End .row -->
                <div class=""></div><!-- margin -->
            </div><!-- End .container -->
        </div><!-- End .container -->
        <section class=""><!--header-start-->
            <div class="container">
                <h2 class="text-center">Testimonials</h2>
                <h6 class="text-center">Our Customers Make Us</h6>
                <div class="row">
                    <div class="col-md-6 col-sm-12 monial">
                        <div class="blk-back text-center">
                            <h3 style="color:#fff;">Video</h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="col-md-12">
                            <div class="col-md-6  col-sm-12 text-center monial">
                                <div class="blk-back1" >
                                    <h3 style="color:#fff;">Image</h3>
                                </div>
                            </div>
                            <div class="col-md-6  text-center monial" >
                                <div class="blk-back1" id="abc">
                                    <h3 style="color:#fff;">Image</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-left mg-top">
                            <div class="col-md-12  col-sm-12 text-center monial">
                                <h3 class="pt30"><span style="color:#ed4b63">"</span> Lorem Ipsum Ida Ta Somain Lorem Ipsum Ida Ta Somain Lorem Ipsum Ida Ta Somain <span style="color:#ed4b63">"</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt50">

                    <div class="col-md-6 text-center">
                        <div class="col-md-12  col-sm-12">
                            <div class="col-md-6  col-sm-12 text-center monial">
                                <div class="blk-back1 ">
                                    <h3 style="color:#fff;">Image</h3>
                                </div>
                            </div>
                            <div class="col-md-6  col-sm-12 monial text-center">
                                <div class="blk-back1 ">
                                    <h3 style="color:#fff;">Image</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-left mg-top">
                            <div class="col-md-12  col-sm-12 text-center monial" >
                                <h3 class="pt30"><span style="color:#ed4b63">"</span> Lorem Ipsum Ida Ta Somain Lorem Ipsum Ida Ta Somain Lorem Ipsum Ida Ta Somain <span style="color:#ed4b63">"</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6  col-sm-12 monial">
                        <div class="blk-back text-center " >
                            <h3 style="color:#fff;">Video</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mb40"></div><!-- margin -->
        <div class="video-box-section bg-image overlay-container pt60 pb60" style="background-image:url(images/office.jpg)">
            <div class="overlay custom"></div><!-- overlay -->
            <div class="container">
                <header class="title-block text-white text-center">
                    <h2 class="title mb10 text-white text-center">Introduction Video</h2>
                    <p>See the introduction video and experience the our bussiness.</p>
                </header>
                <div class="row">

                    <div class="col-md-7" style="background: #fff; padding:20px">
                        <h2>Why Dental Company XYZ?</h2>
                        <h3>Always Seeking Better Ways to perform</h3>
                        <p class="lead smaller">Dental Company XYZ is a team of highly qualified doctors of the prestigious All India Institute of Medical Sciences (AIIMS), New Delhi, India. Being expert in versatile and dynamic area such as dentistry,we are dedicated to provide the highest quality of dental procedures and customized treatment.</p>
                        <h3>Many Brains working together on your teeth</h3>
                        <p class="lead smaller">Our approach combines a group of doctors working together to find the best way to approach your teeth as each person is unique. We bring together expert specialists from different speciality, the latest techniques and strong case study to provide the best care for you. It is our strong belief that patients opting for dental procedure should choose an expert team of dental doctors, because it reflects the performance of many medical providers before, during and after the procedure.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="video-box-section-wrapper">
                            <div class="embed-responsive embed-responsive-16by9" style="height:431px">

                                <iframe class="embed-responsive-item"  width="500" height="325" src="https://www.youtube.com/embed/gX0qnZC_CTE" alt="Video here" frameborder="0" allowfullscreen></iframe>
                            </div><!-- End .embed-responsive -->
                        </div><!-- End .video-box-wwrapper -->
                    </div>
                </div>
            </div><!-- End .container -->
        </div><!-- End .video-box-section -->
        <div class="mb60"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <header class="title-block">
                        <h2 class="title-border custom">Latest Blog</h2>
                        <p>Check out our latest posts and keep updated now.</p>
                    </header>
                </div><!-- End .col-md-3 -->

                <div class="col-md-9">
                    <div class="owl-carousel latest-news-carousel-sm no-radius-dots">

                        <!--
                                        <article class="entry entry-grid">
                                            <div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="http://www.facialvirtuoso.com/uploads/featured_image_98.png" style="width: 100%;height: auto;" alt="Post image">
                                                    </a>
                                                    </a>
                                                </figure>
                                                <!-- <div class="entry-meta">
                                                    <span><i class="fa fa-calendar"></i>12-Jun-2017</span>
                                                        <a href="#"><i class="fa fa-user"></i>
                                                             Ankur Srivastava                                                </a>
                                                </div>-->
                        <!--            </div><!-- End .entry-media -->
                        <!--        <h2 class="entry-title" style="margin-top: 15px;">
                                    <i class="fa fa-file-image-o"></i>
                                    <a href="#">
                                        <a href="#">
                                            5 Ways to Prevent Hair Loss                                                  </a>

                                    </a>
                                </h2>
                                <div class="entry-content">
                                    <p>
                                    <p>The hairs on the front region of head are different from the hairs on the side and the back-scalp region. When we start getting older basically, ou...                                                </p>
                                    <a href="#">Read more<i class="fa fa-angle-right"></i></a>
                                </div><!-- End .entry-content -->
                        <!-- </article>-->


                        <article class="entry entry-grid">
                            <div>
                                <figure>
                                    <a href="#">
                                        <img src="http://www.facialvirtuoso.com/uploads/featured_image_63.jpg" style="width: 100%;height: auto;" alt="Post image">
                                    </a>
                                    </a>
                                </figure>
                                <!-- <div class="entry-meta">
                                    <span><i class="fa fa-calendar"></i>25-Apr-2017</span>
                                        <a href="#"><i class="fa fa-user"></i>
                                             Ankur Srivastava                                                </a>
                                </div>-->
                            </div><!-- End .entry-media -->
                            <h2 class="entry-title" style="margin-top: 15px;">
                                <i class="fa fa-file-image-o"></i>
                                <a href="#">
                                    <a href="#">
                                        How Technology is Transforming Dental Surgery Planning                                                  </a>

                                </a>
                            </h2>
                            <div class="entry-content">
                                <p>
                                <p><em>For the first time in India, patients can see dental surgery results instantly, prior to the actual operation.</em></p>

                                <p>The advancements ...                                                </p>
                                <a href="#">Read more<i class="fa fa-angle-right"></i></a>
                            </div><!-- End .entry-content -->
                        </article>
                        <!--
                                        <article class="entry entry-grid">
                                            <div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="http://www.facialvirtuoso.com/uploads/featured_image_49.jpg" style="width: 100%;height: auto;" alt="Post image">
                                                    </a>
                                                    </a>
                                                </figure>
                                                <!-- <div class="entry-meta">
                                                    <span><i class="fa fa-calendar"></i>25-Apr-2017</span>
                                                        <a href="#"><i class="fa fa-user"></i>
                                                             Ankur Srivastava                                                </a>
                                                </div>-->
                        <!--          </div><!-- End .entry-media -->
                        <!--               <h2 class="entry-title" style="margin-top: 15px;">
                                           <i class="fa fa-file-image-o"></i>
                                           <a href="#">
                                               <a href="#">
                                                   Hair transplant Age backwards with your desired hairstyle again                                                  </a>

                                           </a>
                                       </h2>
                                       <div class="entry-content">
                                           <p>
                                           <p>Do you look 40 at the age of 25? Do you miss your old hairstyles? Are you satisfied with your present compromised look?</p>

                                           <p>These questions s...                                                </p>
                                           <a href="#">Read more<i class="fa fa-angle-right"></i></a>
                                       </div><!-- End .entry-content -->
                        <!--        </article>

                                <article class="entry entry-grid">
                                    <div>
                                        <figure>
                                            <a href="#">
                                                <img src="http://www.facialvirtuoso.com/uploads/featured_image_56.jpg" style="width: 100%;height: auto;" alt="Post image">
                                            </a>
                                            </a>
                                        </figure>
                                        <!-- <div class="entry-meta">
                                            <span><i class="fa fa-calendar"></i>25-Apr-2017</span>
                                                <a href="#"><i class="fa fa-user"></i>
                                                     Ankur Srivastava                                                </a>
                                        </div>-->
                        <!--            </div><!-- End .entry-media -->
                        <!--        <h2 class="entry-title" style="margin-top: 15px;">
                                    <i class="fa fa-file-image-o"></i>
                                    <a href="#">
                                        <a href="#">
                                            Dimple creation-For the irresistibly adorable smiles                                                  </a>

                                    </a>
                                </h2>
                                <div class="entry-content">
                                    <p>
                                    <p>Do you wish you had that beautiful heart-melting smile with dimples which you do not naturally possess? Do you crave to add character and charm to ...                                                </p>
                                    <a href="#">Read more<i class="fa fa-angle-right"></i></a>
                                </div><!-- End .entry-content -->
                        <!--     </article>-->

                        <article class="entry entry-grid">
                            <div>
                                <figure>
                                    <a href="#">
                                        <img src="http://www.facialvirtuoso.com/uploads/featured_image_36.jpg" style="width: 100%;height: auto;" alt="Post image">
                                    </a>
                                    </a>
                                </figure>
                                <!-- <div class="entry-meta">
                                    <span><i class="fa fa-calendar"></i>25-Apr-2017</span>
                                        <a href="#"><i class="fa fa-user"></i>
                                             Ankur Srivastava                                                </a>
                                </div>-->
                            </div><!-- End .entry-media -->
                            <h2 class="entry-title" style="margin-top: 15px;">
                                <i class="fa fa-file-image-o"></i>
                                <a href="#">
                                    Dental Implant Missing teeth solutions for natural looking long lastin...
                                </a>
                            </h2>
                            <div class="entry-content">
                                <p>
                                <p>Are you a suffering from tooth loss due to tooth decay or injury? Are you tired of conventional solutions to your lost teeth like bridges and dentu...                                                </p>
                                <a href="#">Read more<i class="fa fa-angle-right"></i></a>
                            </div><!-- End .entry-content -->
                        </article>

                        <article class="entry entry-grid">
                            <div>
                                <figure>
                                    <a href="#">
                                        <img src="http://www.facialvirtuoso.com/uploads/featured_image_86.jpg" style="width: 100%;height: auto;" alt="Post image">
                                    </a>
                                    </a>
                                </figure>
                                <!-- <div class="entry-meta">
                                    <span><i class="fa fa-calendar"></i>25-Apr-2017</span>
                                        <a href="#"><i class="fa fa-user"></i>
                                             Ankur Srivastava                                                </a>
                                </div>-->
                            </div><!-- End .entry-media -->
                            <h2 class="entry-title" style="margin-top: 15px;">
                                <i class="fa fa-file-image-o"></i>
                                <a href="#">
                                    <a href="#">
                                        How to Wisely choose your Dental Doctor                                                  </a>

                                </a>
                            </h2>
                            <div class="entry-content">
                                <p>
                                <p>With many different types of aesthetic doctors in practice today, it is important for you to make an informed decision when considering an elective...                                                </p>
                                <a href="#">Read more<i class="fa fa-angle-right"></i></a>
                            </div><!-- End .entry-content -->
                        </article>



                    </div><!-- latest-news-carousel-sm -->
                </div><!-- End .col-md-9 -->

            </div><!-- End .row -->
        </div><!-- End .container -->



        <!-- <article class="entry entry-grid">
                     <div>
                         <figure>
                             <a href="#">
                                 <img src="http://www.facialvirtuoso.com/uploads/featured_image_22_22.jpg" style="width: 270px;height: 170px;" alt="Post image">
                             </a>
                             </a>
                         </figure>
                         <!-- <div class="entry-meta">
                             <span><i class="fa fa-calendar"></i>27-Apr-2017</span>
                             <a href="#">
                                 <i class="fa fa-user"></i>
                                 Dr. Gaurav Jain                                                    </a>
                         </div> -->
        <!--      </div><!-- End .entry-media -->
        <!--    <h2 class="entry-title" style="margin-top: 15px;"><i class="fa fa-file-image-o"></i>
                <a href="#">
                    <a href="#">
                        Facial Correction                                                            </a>

                </a>
            </h2>
            <div class="entry-content">
                <p>
                <p>After an unfortunate accident during&nbsp;childhood, Suraj noticed that his face was not at all like his&nbsp;friends. He was constantly&nbsp;treat...                                                </p>
                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
            </div><!-- End .entry-content -->
        <!--   </article>-->


        <!--    <article class="entry entry-grid">
                <div>
                    <figure>
                        <a href="#">
                            <img src="http://www.facialvirtuoso.com/uploads/featured_image_21_54.jpg" style="width: 270px;height: 170px;" alt="Post image">
                        </a>
                        </a>
                    </figure>
                    <!-- <div class="entry-meta">
                        <span><i class="fa fa-calendar"></i>27-Apr-2017</span>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            Dr. Gaurav Jain                                                    </a>
                    </div> -->
        <!--   </div><!-- End .entry-media -->
        <!--    <h2 class="entry-title" style="margin-top: 15px;"><i class="fa fa-file-image-o"></i>
                <a href="#">
                    <a href="#">
                        Mouth closure due to betel nut chewing                                                            </a>

                </a>
            </h2>
            <div class="entry-content">
                <p>
                <p>Manu couldn&rsquo;t open his mouth since&nbsp;8 years as he had the habit of gutkha and mava (betel nut) chewing. He had constant burning in his mo...                                                </p>
                <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
            </div><!-- End .entry-content -->
        <!--       </article>


               <article class="entry entry-grid">
                   <div>
                       <figure>
                           <a href="#">
                               <img src="http://www.facialvirtuoso.com/uploads/featured_image_20_96.jpg" style="width: 270px;height: 170px;" alt="Post image">
                           </a>
                           </a>
                       </figure>
                       <!-- <div class="entry-meta">
                           <span><i class="fa fa-calendar"></i>27-Apr-2017</span>
                           <a href="#">
                               <i class="fa fa-user"></i>
                               Dr. Gaurav Jain                                                    </a>
                       </div> -->
        <!--           </div><!-- End .entry-media -->
        <!--     <h2 class="entry-title" style="margin-top: 15px;"><i class="fa fa-file-image-o"></i>
                 <a href="#">
                     <a href="#">
                         Facial Makeover and Microdermabrasion                                                            </a>

                 </a>
             </h2>
             <div class="entry-content">
                 <p>
                 <p>In the society where your facial looks determine&nbsp;the quality of your life partner, Kusum started hating herself because of something which&nbs...                                                </p>
                 <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
             </div><!-- End .entry-content -->
        <!--                    </article>


                      <!--      <article class="entry entry-grid">
                                <div>
                                    <figure>
                                        <a href="#">
                                            <img src="http://www.facialvirtuoso.com/uploads/featured_image_19_40.jpg" style="width: 270px;height: 170px;" alt="Post image">
                                        </a>
                                        </a>
                                    </figure>
                                    <!-- <div class="entry-meta">
                                        <span><i class="fa fa-calendar"></i>27-Apr-2017</span>
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                            Dr. Gaurav Jain                                                    </a>
                                    </div> -->
        <!--   </div><!-- End .entry-media -->
        <!--<h2 class="entry-title" style="margin-top: 15px;"><i class="fa fa-file-image-o"></i>
            <a href="#">
                <a href="#">
                    Facial Makeover                                                            </a>

            </a>
        </h2>
        <div class="entry-content">
            <p>
            <p>Rhea,a teenage girl was constantly undergoing&nbsp;social and mental embarressment because of abnormal facial structures. She went&nbsp;through thi...                                                </p>
            <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
        </div><!-- End .entry-content -->
        <!--         </article>


                 <article class="entry entry-grid">
                     <div>
                         <figure>
                             <a href="#">
                                 <img src="http://www.facialvirtuoso.com/uploads/featured_image_18_22.jpg" style="width: 270px;height: 170px;" alt="Post image">
                             </a>
                             </a>
                         </figure>
                         <!-- <div class="entry-meta">
                             <span><i class="fa fa-calendar"></i>27-Apr-2017</span>
                             <a href="#">
                                 <i class="fa fa-user"></i>
                                 Dr. Gaurav Jain                                                    </a>
                         </div> -->
        <!--              </div><!-- End .entry-media -->
        <!--          <h2 class="entry-title" style="margin-top: 15px;"><i class="fa fa-file-image-o"></i>
                      <a href="#">
                          <a href="#">
                              Hair transplant                                                            </a>

                      </a>
                  </h2>
                  <div class="entry-content">
                      <p>
                      <p>Rajesh was very low in confidence and was feeling dejected with life after facing alot of rejections in search of a life partner. In search of a be...                                                </p>
                      <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                  </div><!-- End .entry-content -->
        <!--  </article>


          <article class="entry entry-grid">
              <div>
                  <figure>
                      <a href="#">
                          <img src="http://www.facialvirtuoso.com/uploads/featured_image_17_91.jpg" style="width: 270px;height: 170px;" alt="Post image">
                      </a>
                      </a>
                  </figure>
                  <!-- <div class="entry-meta">
                      <span><i class="fa fa-calendar"></i>27-Apr-2017</span>
                      <a href="#">
                          <i class="fa fa-user"></i>
                          Dr. Gaurav Jain                                                    </a>
                  </div> -->
        <!--              </div><!-- End .entry-media -->
        <!--          <h2 class="entry-title" style="margin-top: 15px;"><i class="fa fa-file-image-o"></i>
                      <a href="#">
                          <a href="#">
                              Genioplasty/Chin Job                                                            </a>

                      </a>
                  </h2>
                  <div class="entry-content">
                      <p>
                      <p>Iqbal came to us with a sagging chin. He wanted&nbsp;to have a &quot;manly appearance&quot; and strong appealing chin that provides perfect balance...                                                </p>
                      <a href="#" class="readmore">Read more<i class="fa fa-angle-right"></i></a>
                  </div><!-- End .entry-content -->
        <!--     </article>


             <article class="entry entry-grid">
                 <div>
                     <figure>
                         <a href="#">
                             <img src="http://www.facialvirtuoso.com/uploads/featured_image_16_72.jpg" style="width: 270px;height: 170px;" alt="Post image">
                         </a>
                         </a>
                     </figure>
                     <!-- <div class="entry-meta">
                         <span><i class="fa fa-calendar"></i>27-Apr-2017</span>
                         <a href="#">
                             <i class="fa fa-user"></i>

                     <!-- <div class="entry-meta">
                         <span><i class="fa fa-calendar"></i>27-Apr-2017</span>
                         <a href="#">
                             <i class="fa fa-user"></i>
                             Dr. Gaurav Jain                                                    </a>





         </div><!-- latest-news-carousel-sm -->
    </div><!-- End .col-md-9 -->
</div><!-- End .row -->
</div><!-- End .container -->
</div>

</div>
</div>
<!--
<div id="slider" style="right:-342px;">
    <div id="sidebar" onmouseover="open_panel()" style="margin-left: 18px;">
        <img src="http://www.facialvirtuoso.com/assets/images/myimages/book.jpg"/>
    </div>

    <div id="header">
        <form action="#" method="post" name="Frmgroup" id="Frmgroup" >
            <h2>Book an Appointment</h2>
            <input type="text" name="patient_name" id="patient_name" class="form-control" placeholder="Nfame" />
            <input type="number" name="patient_contact" id="patient_contact" class="form-control" placeholder="Phone No" />
            <input type="text" name="patient_email" id="patient_email" class="form-control" placeholder="Email" />
            <input type="number" name="patient_age" id="patient_age" class="form-control" placeholder="Age" />

            <label> <input type="radio" name="gender" value="male" class="form-group">Male &nbsp;&nbsp;&nbsp;&nbsp;</label>
            <label><input type="radio" name="gender" value="female" class="form-group">Female</label>

            <select id="state" name="state" class="form-control select2" data-placeholder="Select State">
                <option value="">Select State</option>
                <option value="11">
                    Haryana              </option>
                <option value="14">
                    Gujarat              </option>
                <option value="15">
                    Maharashtra              </option>
                <option value="36">
                    Uttar Pradesh-West              </option>
                <option value="37">
                    Delhi              </option>

            </select>

            <select id="city" name="city" class="form-control select2" data-placeholder="Select city">
                <option value="">Select City</option>
            </select>
            <select id="area" name="area" class="form-control select2"   data-placeholder="Select Area">
                <option value="">Select Area</option>
            </select>

            <select id="clinic_name" name="clinic_name" class="form-control select2" data-placeholder="Select Clinic name" onChange="get_ajax_days_list(this.value)">
                <option value="">Select Clinic Name</option>
            </select>

            <input type="text" class="form-control" name="appointment_date" id="appointment_date" placeholder="Appointment Date">

            <!-- <select id="docter" name="docter" class="form-control select2" data-placeholder="Select Clinic name">
                  <option value="">Select Doctor Name</option>
            </select> -->

</form>
</div>
</div>
</div>

<!-- <script>

function DisableMonday(date){


   var data=[];
  $("input[type=checkbox]:checked").each(function(){

    data.push($(this).val());
});
    var newItems = $.map(data, function(i) {
      return parseInt(i);
    });

   if ($.inArray(date.getDay(), newItems) > -1)
   {
            return [false, "", "Unavailable"];
    }
    else{
       return [true, ""];
    }
    }

 $(function() {
 $( "#appointment_date" ).datepicker({
   beforeShowDay: DisableMonday,
   minDate: 0


 });
 });
 </script>
 <script type="text/javascript">
            function get_ajax_days_list(clinic_id)
            {
            var formURL="#";

                $.ajax({
                    type: "POST",
                    url: formURL,
                    data:{clinic_id:clinic_id},
                    success: function(data){
                        //alert(data);return false;

                          $('#doctor_drop_id').html(data);

                },
});
            }



</script> -->
<script type="text/javascript">
    function open_panel()
    {
        slideIt();
        var a=document.getElementById("sidebar");
        a.setAttribute("id","sidebar1");
        a.setAttribute("onclick","close_panel()");
    }

    function slideIt()
    {
        var slidingDiv = document.getElementById("slider");
        var stopPosition = 0;

        if (parseInt(slidingDiv.style.right) < stopPosition )
        {
            slidingDiv.style.right = parseInt(slidingDiv.style.right) + 2 + "px";
            setTimeout(slideIt, 1);
        }
    }

    function close_panel(){
        slideIn();
        a=document.getElementById("sidebar1");
        a.setAttribute("id","sidebar");
        a.setAttribute("onclick","open_panel()");
    }

    function slideIn()
    {
        var slidingDiv = document.getElementById("slider");
        var stopPosition = -342;

        if (parseInt(slidingDiv.style.right) > stopPosition )
        {
            slidingDiv.style.right = parseInt(slidingDiv.style.right) - 2 + "px";
            setTimeout(slideIn, 1);
        }
    }
</script>
<style type="text/css">
    .Get{
        position: fixed;
        bottom: 30%;
        right: 0px;
        display: block;
        cursor: pointer;
        z-index: 999;
        /*width: 36px;*/
        /*height: 36px;*/
        line-height: 20px;
        font-size: 18px;
        transition: all 0.4s;
        text-align: center;
        color: #fff;
        padding: 8px;
        background-color: #263a4e;
    }
    h5 {
        color: #fff;
    }
    .abc a{
        font-size: 23px;
    }

    .ui-datepicker-prev{
        background-color: ##858585 !important;
    }
    .ui-datepicker-next{
        background-color: ##858585 !important;
    }


    /*Form Css*/



    #slider{
        width:500px;
        top:100px;
        position:fixed;
        z-index: 1000;
    }

    #header{
        width:294px;
        height:520px;
        position:absolute;
        right:0px;
        border:1px solid #d8d8d8;
        margin-left:40px;
        padding:20px 40px;
        border-radius:3px;
        box-shadow: 0 0 8px gray;
        background-color: #fff;
    }


    .navbar-nav > li > a {
        position: relative;

        font-weight: 600;
        color: mediumaquamarine;
    }
    #sidebar{
        position:absolute;
        top:180px;
        left:113px;
        box-shadow: 0 0 8px gray;
    }

    #sidebar1{
        position:absolute;
        top:180px;
        left:157px;
        box-shadow: 0 0 8px gray;
    }


    h3{
        font-family: 'Roboto Slab', serif;
    }

    input[type=text]{
        width:100%;
    }

    div#title{
        position:absolute;
        top:300px;
        left:650px;
    }

    select{
        padding:6px;
        width:100%;
        font-size:15px;
        border-radius:2px;
        border:3px solid #98d0f1;
    }
    button{
        background:#2bc1f2;
        border: none;
        color: #fff;
        width: 100%;
        font-size: 22px;
        font-weight: bolder;
        padding: 8px 0 8px 0;
        border-radius: 3px;
        cursor: pointer;
        margin-top:25px;
    }
    /*--------------------------------------
            Advertisement div
    ----------------------------------------*/
    .formget{
        width:300px;
        margin-top: 65px;
        margin-left: 57px;
        float: left;
    }
</style>

<!--   <a class="Get" href="#" style="text-decoration:none; color: #fff;"><img src="http://www.facialvirtuoso.com/assets/images/myimages/book.jpg" class="img-responsive"></a> -->
<?php require_once('footer.php');?>
</div>
</div><!-- End #wrapper -->

<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a>

<!-- End -->
<script src="http://www.facialvirtuoso.com/assets/js/plugins.min.js"></script>
<script src="http://www.facialvirtuoso.com/assets/js/main.js"></script>
<script type="text/javascript" src="http://www.facialvirtuoso.com/assets/js/mvs.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        "use strict";

        var revapi;
        if ( $("#rev_slider").revolution == undefined ) {
            revslider_showDoubleJqueryError("#rev_slider");
        } else {
            revapi = $("#rev_slider").show().revolution({
                sliderType: "standard",
                jsFileLocation: "assets/js/",
                sliderLayout: "auto",
                dottedOverlay:"none",
                delay: 15000,
                navigation: {
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on"
                    },
                    arrows: {
                        style: "hebe",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        hide_under: 992,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "hades",
                        hide_onleave: false,
                        hide_under: 768,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 25,
                        space: 8,
                        tmp: '<span class="tp-bullet-image"></span>'
                    }
                },
                responsiveLevels: [1200,992,768,480],
                gridwidth: [1170,970,750,480],
                gridheight: [600,520,460,360],
                lazyType: "smart",
                spinner: "spinner3",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2,3,4,5,6,7,12,16,10,50],
                    disable_onmobile: "on"
                },
                debugMode: false
            });
        }
    });
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>

    function DisableMonday(date){


        var data=[];
        $("input[type=checkbox]:checked").each(function(){

            data.push($(this).val());
        });
        var newItems = $.map(data, function(i) {
            return parseInt(i);
        });

        if ($.inArray(date.getDay(), newItems) > -1)
        {
            return [false, "", "Unavailable"];
        }
        else{
            return [true, ""];
        }
    }

    $(function() {
        $( "#appointment_date" ).datepicker({
            beforeShowDay: DisableMonday,
            minDate: 0


        });
    });
</script>

<script>
    // When the browser is ready...
    $(function() {
        $("#Frmgroup").validate({


            // Specify the validation rules
            rules: {
                patient_name: {
                    required: true
                },

                patient_email:{
                    required:true,
                    email:true
                },

                patient_contact:{
                    required: true,
                    minlength: 10,
                    maxlength:11,
                    number: true
                },
                state:{
                    required:true
                },

                city:{
                    required:true
                },
                area:{
                    required:true
                },
                clinic_name:{
                    required:true
                },
                gender:{
                    required:true
                },

                docter:{
                    required:true
                },
                appointment_date:{
                    required:true
                },
                patient_age:{
                    required:true
                }

            },

            // Specify the validation error messages
            messages:{
                patient_name: {
                    required: "Please Enter  Name"
                },

                patient_email:{
                    required: "Please Enter e-mail",
                    email: "Please Enter a valid e-mail"
                },

                patient_contact: {
                    required: "Please Enter mobile no.",
                    minlength: "Please Enter 10 digit mobile number",
                    maxlength: "Please Enter no more than 10 digit"
                },
                state:{
                    required:"Select State"
                },
                city:{
                    required:"Select City"
                },
                area:{
                    required:"Select Area"
                },
                clinic_name:{
                    required:"Select ClinicName"
                },
                gender:{
                    required:"Select Gender"
                },
                appointment_date:{
                    required:"Select Appointment Date"
                },
                patient_age:{
                    required:"Please Enter Age"
                }

            },
            errorPlacement: function(error, element) {
                element.attr("placeholder",error.text());
            },

            submitHandler: function(form) {

                form.submit();
            }
        });

    });

</script>


<script type="text/javascript">

    $(document).ready(function(){

        $('#state').on('change',function(){
            var state_id=$(this).val();
            //alert(state_id);
            var URL="#";
            $.ajax({
                url:URL,
                type:"POST",
                dataType:"json",
                data:{state_id:state_id},
                success:function(data1){
                    //var data=JSON.parse(data1);
                    //alert(data1);

                    var options = '';
                    var options1 = '';
                    var options2='';
                    // alert(data); return false;
                    // $('#state').children('option:not(:first)').remove();
                    if(data1!="notfound"){
                        options+='<option value="">Select City</option>';
                        for (var i = 0; i < data1.length; i++) {
                            options += '<option value="' + data1[i].city_id + '">' + data1[i].city_name + '</option>';
                        }
                        $("#city").html(options);
                        options1 = '<option value="">Select City first</option>';
                        $("#area").html(options1);
                        options2 = '<option value="">Select Area first</option>';
                        $("#clinic_name").html(options2);
                    }else{
                        options = '<option value="">Select country first</option>';
                        $("#city").html(options);
                        options1 = '<option value="">Select State first</option>';
                        $("#area").html(options1);
                        // $('#state option[value!="0"]').remove();
                    }

                }

            });

        });




        $('#city').on('change',function(){
            var city_id=$(this).val();
            //alert(city_id);
            var URL="#";
            $.ajax({
                url:URL,
                type:"POST",
                dataType:"json",
                data:{city_id:city_id},
                success:function(data1){
                    var options = '';
                    var options1='';
                    if(data1!="notfound"){
                        options+='<option value="">Select Area</option>';
                        for (var i = 0; i < data1.length; i++) {
                            options += '<option value="' + data1[i].area_id + '">' + data1[i].district_name + '</option>';
                        }
                        $("#area").html(options);
                        options1 = '<option value="">Select Area first</option>';
                        $("#clinic_name").html(options1);

                    }else{
                        options = '<option value="">Data Not Found</option>';
                        $("#area").html(options);
                    }

                }

            });

        });

        $('#area').on('change',function(){
            var area_id=$(this).val();
            var URL="#";
            $.ajax({
                url:URL,
                type:"POST",
                dataType:"json",
                data:{area_id:area_id},
                success:function(data1){
                    var options = '';
                    var options1='';
                    if(data1!="notfound"){
                        options+='<option value="">Select Clinic Name</option>';
                        for (var i = 0; i < data1.length; i++) {
                            options += '<option value="' + data1[i].id + '">' + data1[i].clinic_name + '</option>';
                        }
                        $("#clinic_name").html(options);
                        //  options1 = '<option value="">Select Area first</option>';
                        // $("#clinic_name").html(options1);
                    }else{
                        options = '<option value="">Data Not Found</option>';
                        $("#clinic_name").html(options);
                    }

                }

            });

        });



        $('#clinic_name').on('change',function(){
            var clinic_id=$(this).val();
            var URL="#";
            $.ajax({
                url:URL,
                type:"POST",
                dataType:"json",
                data:{clinic_id:clinic_id},
                success:function(data1){
                    var options = '';
                    if(data1!="notfound"){
                        options+='<option value="">Select Doctor Name</option>';
                        for (var i = 0; i < data1.length; i++) {
                            options += '<option value="' + data1[i].docter_id + '">' + data1[i].first_name+" "+data1[i].last_name+ '</option>';

                        }
                        $("#docter").html(options);
                    }else{
                        options = '<option value="">Data Not Found</option>';
                        $("#docter").html(options);
                    }

                }

            });

        });


    });


</script>

<script type="text/javascript">
    function get_ajax_days_list(clinic_id)
    {
        var formURL="#";

        $.ajax({
            type: "POST",
            url: formURL,
            data:{clinic_id:clinic_id},
            success: function(data){
                //alert(data);return false;

                $('#doctor_drop_id').html(data);

            },
        });
    }

</script>

<script type="text/javascript" src="http://www.facialvirtuoso.com/admin_assets/bootstrap/js/jquery.validate.min.js"></script>
<!-- jQuery 2.1.4 -->

<!-- Bootstrap 3.3.5 -->
<script src="http://www.facialvirtuoso.com/admin_assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="http://www.facialvirtuoso.com/admin_assets/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="http://www.facialvirtuoso.com/admin_assets/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="http://www.facialvirtuoso.com/admin_assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="http://www.facialvirtuoso.com/admin_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://www.facialvirtuoso.com/admin_assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="http://www.facialvirtuoso.com/admin_assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="http://www.facialvirtuoso.com/admin_assets/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://www.facialvirtuoso.com/admin_assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://www.facialvirtuoso.com/admin_assets/dist/js/demo.js"></script>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="http://www.facialvirtuoso.com/admin_assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://www.facialvirtuoso.com/admin_assets/plugins/datatables/dataTables.bootstrap.min.js">
</script>

<script src="http://www.facialvirtuoso.com/admin_assets/js/jquery.plugin.js"></script>
<script src="http://www.facialvirtuoso.com/admin_assets/js/jquery.datepick.js"></script>
<script src="http://www.facialvirtuoso.com/admin_assets/js/moment.js"></script>
<script src="http://www.facialvirtuoso.com/admin_assets/js/bootstrap-datetimepicker.js"></script>


</body>
</html>
<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=18484045"></script>
<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97375134-1', 'auto');
  ga('send', 'pageview');

</script> -->

<!-- Google Code for Hair Transplant Conversion Page -->
<script type="text/javascript" src="js/jquery.appear.js">
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 855809875;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "mm_1CJrUr3IQ076KmAM";
    var google_remarketing_only = false;
    /* ]]> */





    // $("#animate1").hide().show("slide", {direction: "left"}, 2000);



</script>
<script type="text/javascript">
    //$(".ontop").hide();
    $(".ontop").hide().show("slide", {direction: "left"}, 1000);
</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/855809875/?label=mm_1CJrUr3IQ076KmAM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>
</body>
</html><!--End Footer