    
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>/statics/assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dulich.com</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url() ?>/statics/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url() ?>/statics/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url() ?>/statics/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url() ?>/statics/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url() ?>/statics/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>


        <nav class="navbar navbar-default navbar-fixed" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url()?>home">Dulich.com</a>
                </div>

                <form method="post" action="<?php echo base_url()?>home/search">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                           <!--  <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-dashboard"></i>
    								<p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li> -->
                            <!-- <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-globe"></i>
                                        <b class="caret hidden-lg hidden-md"></b>
    									<p class="hidden-lg hidden-md">
    										5 Notifications
    										<b class="caret"></b>
    									</p>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Notification 1</a></li>
                                    <li><a href="#">Notification 2</a></li>
                                    <li><a href="#">Notification 3</a></li>
                                    <li><a href="#">Notification 4</a></li>
                                    <li><a href="#">Another notification</a></li>
                                  </ul>
                            </li> -->
                            <li>
                                <input type="text" class="navbar-brand" class placeholder="Từ khóa tìm kiếm..." id="txtSearch" name="search">
                            </li>
                            <li>
                                <button type="submit" class="navbar-brand"><i class="fa fa-search"></i></button>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <p>
                                            HOTLINE HỖ TRỢ
                                            <b class="caret"></b>
                                        </p>

                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                            </li>
                            <li>
                               <a href="<?php echo base_url()?>users/signup">
                                   <p>Đăng ký</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>users/login">
                                    <p>Đăng nhập</p>
                                </a>
                            </li>
    						<li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </form>
            </div>
        </nav>
        <nav class="navbar navbar-inverse blue" >
           
                    <a class="navbar-brand" href="<?php echo base_url() ?>home/trong_nuoc">Tour trong nước</a>
                
                    <a class="navbar-brand" href="<?php echo base_url() ?>home/nuoc_ngoai">Tour ngoài nước</a>
               
                    <a class="navbar-brand" href="">Tour bán chạy nhất</a>
               
                    <a class="navbar-brand" href="">Tour giá rẻ</a>
                
                    <a class="navbar-brand" href="">Tour du lịch Tết 2019</a>
            
                    <a class="navbar-brand" href="">Đặt vé máy bay</a>
           
                    <a class="navbar-brand" href="">Đặt khách sạn</a>
             
                    <a class="navbar-brand" href="">Làm Visa</a>
        </nav>
    <!-- 
        CONTENT is added from backend folder
    -->
        <div class="content">

            <?php 
            echo $content; 
            ?>
        </div>
 <!-- 
    FOOTER 
-->
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="<?php echo base_url()?>/home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Dulich.com</a>, website du lịch hàng đầu Việt Nam
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url() ?>/statics/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>/statics/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url() ?>/statics/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url() ?>/statics/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="<?php echo base_url() ?>/statics/text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url() ?>/statics/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url() ?>/statics/assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
    <style type="text/css" media="screen">
     .pink{
        background-color: pink;
     }   
     .blue{
        background-color: 99FFFF;
     }
    </style>
</html>
