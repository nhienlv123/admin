<!DOCTYPE HTML>
<html>

<head>
    <title>Admin Pages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" value="{{ csrf_token() }}" />

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../../assets/admin/css/style.css" rel='stylesheet' type='text/css' />

    <!-- font-awesome icons CSS -->
    <link href="../../assets/admin/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons CSS-->

    <!-- side nav css file -->
    <link href='../../assets/admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
    <!-- //side nav css file -->

    <!-- js-->
    <script src="../../assets/admin/js/jquery-1.11.1.min.js"></script>
    <script src="../../assets/admin/js/modernizr.custom.js"></script>

    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <!--//webfonts-->

    <!-- Metis Menu -->
    <script src="../../assets/admin/js/metisMenu.min.js"></script>
    <script src="../../assets/admin/js/custom.js"></script>
    <link href="../../assets/admin/css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
    <style>
        #chartdiv {
            width: 100%;
            height: 295px;
        }
    </style>
     

    <!-- requried-jsfiles-for owl -->
    <link href="../../assets/admin/css/owl.carousel.css" rel="stylesheet">
    <script src="../../assets/admin/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
        $("#owl-demo").owlCarousel({
        items: 3,
        lazyLoad: true,
        autoPlay: true,
        pagination: true,
        nav: true,
        });
        });
    </script>
</head>

<body class="cbp-spmenu-push">
    <div id="app">
        
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

    <script src="../../assets/admin/js/Chart.bundle.js"></script>
    <script src="../../assets/admin/js/utils.js"></script>
    
    <!-- Classie -->
    <!-- for toggle left push menu script -->
    <script src="../../assets/admin/js/classie.js"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;
            showLeftPush.onclick = function() {
                classie.toggle(this, 'active');
                classie.toggle(body, 'cbp-spmenu-push-toright');
                classie.toggle(menuLeft, 'cbp-spmenu-open');
                disableOther('showLeftPush');
        };
        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }
    </script>
    <!-- //Classie -->
    <!-- //for toggle left push menu script -->

    <!--scrolling js-->
    <script src="../../assets/admin/js/jquery.nicescroll.js"></script>
    <script src="../../assets/admin/js/scripts.js"></script>
    <!--//scrolling js-->

    <!-- side nav js -->
    <script src='../../assets/admin/js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/admin/js/bootstrap.js"> </script>
    <!-- //Bootstrap Core JavaScript -->

</body>

</html>