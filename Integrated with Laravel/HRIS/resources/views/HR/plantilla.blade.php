<!DOCTYPE html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Human Resource Information System</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ URL::asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::asset('indexHR') }}">Human Resource</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="{{ URL::asset('indexHR') }}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="{{ URL::asset('employee') }}"><i class="fa fa-desktop fa-3x"></i> Employee </a>
                    </li>
                    <li>
                        <a  href="{{ URL::asset('pendingleave') }}"><i class="fa fa-qrcode fa-3x"></i> Pending leaves </a>
                    </li>
                           <li  >
                        <a  href="{{ URL::asset('report') }}"><i class="fa fa-bar-chart-o fa-3x"></i> Reports </a>
                    </li>   
                      <li  >
                        <a class="active-menu" href="{{ URL::asset('plantilla') }}"><i class="fa fa-table fa-3x"></i> Plantilla </a>
                    </li>
                    <li  >
                        <a href="{{ URL::asset('form') }}"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ URL::asset('assets/js/jquery-1.10.2.js') }}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ URL::asset('assets/js/jquery.metisMenu.js') }}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>
    
   
</body>
</html>
