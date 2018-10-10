<!-- BEGIN SIDEBPANEL-->
<nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="brand" data-src="{{ asset('assets/img/logo.png') }}" data-src-retina="{{ asset('assets/img/logo_2x.png') }}" width="78" height="22">
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="index.html" class="detailed">
              <span class="title">Dashboard</span>
              <span class="details">12 New Updates</span>
            </a>
            <span class="icon-thumbnail"><i data-feather="shield"></i></span>
          </li>
          @if(Auth::check())                   
                    @foreach($appmenumodule as $appmenumd)
                    <?php
                        $appmenucounter = $appmenusubmodule
                        ->where('module_id', '=', $appmenumd['id'])
                        ->count();
                    ?>
                        @if($appmenucounter > 0)
                        <li class="">
                        <a href="javascript:;"><span class="title">{{$appmenumd['description']}}</span>
                          <span class="arrow"></span></a>
                          <span class="icon-thumbnail"><i data-feather="menu"></i></span>
                          <ul class="sub-menu">
                                    @foreach($appmenusubmodule as $appmenusmd)
                                        @if($appmenumd->id == $appmenusmd->module_id)
                                            
                                            <li>
                                              <a href="{{url($appmenusmd['routename'])}}">{{$appmenusmd['description']}}</a>
                                              <span class="icon-thumbnail"></span>
                                            </li>
                                        @endif
                                    @endforeach
                          </ul>
                        </li>
                        @endif 
                    @endforeach
                    @endif
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->