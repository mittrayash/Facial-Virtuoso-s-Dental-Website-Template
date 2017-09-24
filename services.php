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
    <link rel="stylesheet" href="css/style.css">


    <style type="text/css">
        .logo_slider{
            width:185px;
            height:100px;
            position: absolute;
            z-index: 1;
            background-color: #f8f8fa;
            padding: 10px;
            border-radius: 3px;
        }
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
            background-color: #288dcd;
            border-bottom: solid 2px color#fff !important;
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
    </style>



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
                       src="#"
            /></noscript>
        <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->

    <!--Strat Slider-->




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






    <div class="banner clearfix" style="background-repeat: no-repeat; background-position: center top; background-image: url('http://sagmarks.com/wp-content/themes/inspiry-medicalpress/images/banner.jpg'); background-size: cover;"></div>    <div class="page-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <nav class="bread-crumb">
                        <ul class="breadcrumb clearfix"><li><a href="index.php">sagmarks</a><span class="divider"></span></li><li class="active">About</li></ul>                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"> <img  src="images/dental1.jpg" alt="banner3">
                    <div class="carousel-caption"> </div>
                </div>
                <div class="item"> <img  src="images/dental2.jpg" alt="banner1">
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

    </div>

    <div class="contact-page clearfix" style="padding-bottom: 0px;">

        <div class="container">
        <div class="row" style="min-height: 200px; padding-top: 30px;" id="3D">
            <h1>3D Printed Models</h1>
        </div>
        <div class="row" style="min-height: 200px; padding-top: 30px;" id="implant">
            <h1>Patient Specific Implants</h1>
        </div>
        <div class="row" style="min-height: 200px; padding-top: 30px;" id="surgical">
            <h1>Surgical Guides</h1>
        </div>
        <div class="row" style="min-height: 200px; padding-top: 30px;" id="guides">
            <h1>Guides for Dental Implant Placement</h1>
        </div>
        </div>

        <a href="#top" id="scroll-top"></a>
        <!--Start of Tawk.to Script-->

</body>
</html>

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
        padding: 12px 15px;
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

</div>
</div><!-- End #wrapper -->
<?php require_once('footer.php'); ?>
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
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 855809875;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "mm_1CJrUr3IQ076KmAM";
    var google_remarketing_only = false;
    /* ]]> */
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