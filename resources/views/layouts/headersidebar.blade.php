<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kosebar</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{asset('js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                <p class="navbar-brand">Profile</p>
            </div>
  <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
 {{-- <a href="{{route('login')}}" class="btn btn-danger square-btn-adjust">Logout</a>  --}}
<form   action="{{route('logout')}}" method="post">
  {{ csrf_field() }}
  <button type="submit" class="btn btn-danger square-btn-adjust">Logout</button>
</form>
</div>
        </nav>
           <!-- /. NAV TOP  -->

                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{asset('storage/'.Auth::user()->photo)}}" class="user-image img-responsive"/>
					</li>
          <tbody>




                    <li>
                        <a class="active-menu" href="{{route('item.index')}}"><i class="fa fa-dashboard fa-3x"></i>Dashboard</a>
                    </li>





                    <li>

                       <a  href="{{route('profile.show',['profile'=>Auth::user()->id])}}"><i class="fa fa-desktop fa-3x"></i>Profile</a>

                   </li>




                    <li>
                        <a  href="{{route('item.index')}}"><i class="fa fa-qrcode fa-3x"></i>Barang</a>
                    </li>
						   <li>
                        <a   href="{{route('transaksi.index')}}"><i class="fa fa-bar-chart-o fa-3x"></i>Transaksi</a>
                    </li>

                </tbody>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        @yield('content')
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('js/jquery.metisMenu.js')}}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{asset('js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('js/morris/morris.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('js/custom.js')}}"></script>


</body>
</html>
