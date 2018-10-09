<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ asset('assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/rickshaw/rickshaw.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('assets/plugins/mapplic/css/mapplic.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/dashboard.widgets.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('pages/css/pages-icons.css') }}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{ asset('pages/css/themes/light.css') }}" rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header dashboard menu-pin">
    @include('layouts.sidebar')
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
        </a>
        <!-- END MOBILE SIDEBAR TOGGLE -->
        @include('layouts.search')
        @include('layouts.topbar')
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        
          <!-- START JUMBOTRON -->

          <!-- breadcrumbs is suppose to be here -->

          <!-- END JUMBOTRON -->
          

          <!-- CONTENTS CAN COME IN HERE -->
          @yield('content')


        
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid  container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; {{ date('Y') }}</span>
              <span class="font-montserrat">{{ config('global.app') }}</span>.
              <span class="hint-text">All rights reserved. </span>
              <span class="sm-block"><a href="/terms" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="/privacypolicy" class="m-l-10">Privacy Policy</a></span>
            </p>
            <p class="small no-margin pull-right sm-pull-reset">
              Hand-crafted <span class="hint-text">&amp; made with Love</span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    @include('layouts.quickview')
    @include('layouts.overlay')
    <!-- BEGIN VENDOR JS -->
    <script src="{{ asset('assets/plugins/feather-icons/feather.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/tether/js/tether.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/classie/classie.js') }}"></script>
    <script src="{{ asset('assets/plugins/switchery/js/switchery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/lib/d3.v3.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/nv.d3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/utils.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/tooltip.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/interactiveLayer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/models/axis.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/models/line.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/nvd3/src/models/lineWithFocusChart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/mapplic/js/hammer.js') }}"></script>
    <script src="{{ asset('assets/plugins/mapplic/js/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('assets/plugins/mapplic/js/mapplic.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{ asset('assets/js/dashboard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/scripts.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    @include('layouts.notification')
  </body>
</html>