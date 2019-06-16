<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>ERP</title>
  <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/weather-icons/climacons.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/meteocons/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/morris.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/chartist.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/chartist-plugin-tooltip.css') }}">




    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}">
  <!-- END MODERN CSS-->

   <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <!-- END: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/selects/select2.min.css') }}">

  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/timeline.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css') }}">
  <!-- END Page Level CSS-->


  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert.css') }}">



  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

 
  <style type="text/css">

  .navbar-dark.navbar-horizontal {
    background: #42729a;
}

.modal-header {
    border-bottom: 0px solid #98A4B8;
  }
.modal-footer {
   
    border-top: 0px solid #98A4B8;
}
.moduless{

  font-size: 10px;
  
}

.btn-float.btn-float-lg i + span {
    font-size: 0.8rem;
}

body {
    min-height: 100vh;
    width: 100%; // probably you won't need the width.
}


</style>
  <!-- END Custom CSS-->
</head>

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded"
data-open="click" data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->

  @include('sweetalert::alert')
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
         
          <li class="nav-item">
            <a class="navbar-brand" href="index.html">
              <img class="brand-logo" alt="modern admin logo" src="https://i.imgur.com/JlHisc7.png">
              <h3 class="brand-text">MSI ERP</h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container container center-layout">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ft-menu"></i></a></li>
           
           
         
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700"> MEHDI KRAIMI</span>
                </span>
                <span class="avatar avatar-online">
                  <img src="https://www.ahorainformate.com/wp-content/uploads/2017/05/male-shadow-fill-circle-512.png" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                <a
                class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
              </div>
            </li>

           
            <li class="dropdown dropdown-notification nav-item">
           
              
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                  </h6>
                  <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                </li>
                <li class="scrollable-container media-list w-100">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">You have new order!</h6>
                        <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading red darken-1">99% Server load</h6>
                        <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                        <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Complete the task</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Generate monthly report</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                        </small>
                      </div>
                    </div>
                  </a>
                </li>
              
              </ul>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
  role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
       <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"></i><span>Vue d'ensemble</span></a>
          
        </li>
       
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"></i><span>Pièces comptables</span></a>
          
        </li>


        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"></i><span>Écritures comptables</span></a>
        
        </li>

        
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><span> Rapport</span></a>
          <ul class="dropdown-menu">
            
         
             <li class="dropdown " data-menu="dropdown-submenu"><a class="dropdown-item " href="#" data-toggle="dropdown">Bilan</a>
            
            </li>
              <li class="dropdown " data-menu="dropdown-submenu"><a class="dropdown-item " href="#" data-toggle="dropdown">Grand livre</a>
            
            </li>

          </ul>
        </li>
        
       
      
       
        
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"></i><span>Configuration</span></a>
          <ul class="dropdown-menu">
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-bar-chart"></i>google Charts</a>
              <ul class="dropdown-menu">
                <li data-menu=""><a class="dropdown-item" href="google-bar-charts.html" data-toggle="dropdown">Bar charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="google-line-charts.html" data-toggle="dropdown">Line charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="google-pie-charts.html" data-toggle="dropdown">Pie charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="google-scatter-charts.html" data-toggle="dropdown">Scatter charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="google-bubble-charts.html" data-toggle="dropdown">Bubble charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="google-other-charts.html" data-toggle="dropdown">Other charts</a>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"></i>Echarts</a>
              <ul class="dropdown-menu">
                <li data-menu=""><a class="dropdown-item" href="echarts-line-area-charts.html" data-toggle="dropdown">Line &amp; Area charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="echarts-bar-column-charts.html" data-toggle="dropdown">Bar &amp; Column charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="echarts-pie-doughnut-charts.html"
                  data-toggle="dropdown">Pie &amp; Doughnut charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="echarts-scatter-charts.html" data-toggle="dropdown">Scatter charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="echarts-radar-chord-charts.html" data-toggle="dropdown">Radar &amp; Chord charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="echarts-funnel-gauges-charts.html"
                  data-toggle="dropdown">Funnel &amp; Gauges charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="echarts-combination-charts.html" data-toggle="dropdown">Combination charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="echarts-advance-charts.html" data-toggle="dropdown">Advance charts</a>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-area-chart"></i>Chartjs</a>
              <ul class="dropdown-menu">
                <li data-menu=""><a class="dropdown-item" href="chartjs-line-charts.html" data-toggle="dropdown">Line charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="chartjs-bar-charts.html" data-toggle="dropdown">Bar charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="chartjs-pie-doughnut-charts.html"
                  data-toggle="dropdown">Pie &amp; Doughnut charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="chartjs-scatter-charts.html" data-toggle="dropdown">Scatter charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="chartjs-polar-radar-charts.html" data-toggle="dropdown">Polar &amp; Radar charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="chartjs-advance-charts.html" data-toggle="dropdown">Advance charts</a>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-line-chart"></i>D3 Charts</a>
              <ul class="dropdown-menu">
                <li data-menu=""><a class="dropdown-item" href="d3-line-chart.html" data-toggle="dropdown">Line Chart</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="d3-bar-chart.html" data-toggle="dropdown">Bar Chart</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="d3-pie-chart.html" data-toggle="dropdown">Pie Chart</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="d3-circle-diagrams.html" data-toggle="dropdown">Circle Diagrams</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="d3-tree-chart.html" data-toggle="dropdown">Tree Chart</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="d3-other-charts.html" data-toggle="dropdown">Other Charts</a>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-indent"></i>C3 Charts</a>
              <ul class="dropdown-menu">
                <li data-menu=""><a class="dropdown-item" href="c3-line-chart.html" data-toggle="dropdown">Line Chart</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="c3-bar-pie-chart.html" data-toggle="dropdown">Bar &amp; Pie Chart</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="c3-axis-chart.html" data-toggle="dropdown">Axis Chart</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="c3-data-chart.html" data-toggle="dropdown">Data Chart</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="c3-grid-chart.html" data-toggle="dropdown">Grid Chart</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="c3-transform-chart.html" data-toggle="dropdown">Transform Chart</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="c3-other-charts.html" data-toggle="dropdown">Other Charts</a>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-pie-chart"></i>Chartist</a>
              <ul class="dropdown-menu">
                <li data-menu=""><a class="dropdown-item" href="chartist-line-charts.html" data-toggle="dropdown">Line charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="chartist-bar-charts.html" data-toggle="dropdown">Bar charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="chartist-pie-charts.html" data-toggle="dropdown">Pie charts</a>
                </li>
              </ul>
            </li>
            <li data-menu="">
              <a class="dropdown-item" href="morris-charts.html" data-toggle="dropdown"><i class="la la-share-alt"></i>Morris Charts</a>
            </li>
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-bolt"></i>Flot Charts</a>
              <ul class="dropdown-menu">
                <li data-menu=""><a class="dropdown-item" href="flot-line-charts.html" data-toggle="dropdown">Line charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="flot-bar-charts.html" data-toggle="dropdown">Bar charts</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="flot-pie-charts.html" data-toggle="dropdown">Pie charts</a>
                </li>
              </ul>
            </li>
            <li data-menu="">
              <a class="dropdown-item" href="rickshaw-charts.html" data-toggle="dropdown"><i class="la la-bullseye"></i>Rickshaw Charts</a>
            </li>
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="la la-map"></i>Maps</a>
              <ul class="dropdown-menu">
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">google Maps</a>
                  <ul class="dropdown-menu">
                    <li data-menu=""><a class="dropdown-item" href="gmaps-basic-maps.html" data-toggle="dropdown">Maps</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item" href="gmaps-services.html" data-toggle="dropdown">Services</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item" href="gmaps-overlays.html" data-toggle="dropdown">Overlays</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item" href="gmaps-routes.html" data-toggle="dropdown">Routes</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item" href="gmaps-utils.html" data-toggle="dropdown">Utils</a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Vector Maps</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">jQuery Mapael</a>
                      <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="vector-maps-mapael-basic.html"
                          data-toggle="dropdown">Basic Maps</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="vector-maps-mapael-advance.html"
                          data-toggle="dropdown">Advance Maps</a>
                        </li>
                      </ul>
                    </li>
                    <li data-menu=""><a class="dropdown-item" href="vector-maps-jvector.html" data-toggle="dropdown">jVector Map</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item" href="vector-maps-jvq.html" data-toggle="dropdown">JQV Map</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="app-content container center-layout mt-2">
  
  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Les Module</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="o_home_menu_scrollable">
   <div class="icon-cont">
    
<div class="row">
                    <div class="col-12">
                    <div class="form-group text-center">

                        @guest
                           
                        @else
                        


                  @if(Auth::user()->Achat == "1")
                  
                  <!-- Floating button Regular with text -->
                  <a href="#" class="btn btn-float btn-float-lg btn-cyan moduless"><i class="la la-search"></i><span>Achat   </span></a>
                  @endif 

                   @if(Auth::user()->Vente == "1")
                  <a href="#" class="btn btn-float btn-float-lg  btn-pink moduless "><i class="la ft-trending-down"></i><span>Vente</span></a>
                  @endif

                  @if(Auth::user()->Comptable == "1")
                  <a href="#" class="btn btn-float btn-float-lg btn-amber moduless" ><i class="la ft-file-text"></i><span>Comptable</span></a>
                   @endif

                   <a href="#" class="btn btn-float btn-float-lg  btn-yellow moduless"><i class="la la-refresh"></i><span>Stock</span></a>
                    
                     <a href="#" class="btn btn-float btn-float-lg btn-deep-orange moduless"><i class="la la-users"></i><span>CRM</span></a>

                       @endguest
                </div>
                  </div>
  

 


</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
  </div>
   </div>

<main class="">
            @yield('content')
        </main>

         </div>

  
  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <!-- BEGIN VENDOR JS-->

  <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js') }}"
  type="text/javascript"></script>
  <script src="{{ asset('app-assets/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/vendors/js/timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{ asset('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/js/core/app.js') }}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

<script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('app-assets/vendors/js/charts/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>


<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/extensions/sweet-alerts.js') }}"></script>


<script src="{{ asset('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/forms/form-repeater.min.js') }}"></script>





</body>
</html>
