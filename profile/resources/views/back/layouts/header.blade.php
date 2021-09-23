<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title','Admin')</title>
  <meta name="description" content="Ela Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
 <link rel="shortcut icon" type="image/png" href="{{asset('front/')}}/images/logo/Header-logo.png"/>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
  <link rel="stylesheet" href="{{asset('css/')}}/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
  <link rel="stylesheet" href="{{asset('back/')}}/assets/css/cs-skin-elastic.css">
  <link rel="stylesheet" href="{{asset('back/')}}/assets/css/style.css">
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  @toastr_css
  @yield('css')
  
  <style>
    #weatherWidget .currentDesc {
      color: #ffffff!important;
    }
    .traffic-chart {
        min-height: 335px;
    }
    #flotPie1  {
        height: 150px;
    }
    #flotPie1 td {
        padding:3px;
    }
    #flotPie1 table {
        top: 20px!important;
        right: -10px!important;
    }
    .chart-container {
        display: table;
        min-width: 270px ;
        text-align: left;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    #flotLine5  {
         height: 105px;
    }
    #flotBarChart {
        height: 150px;
    }
    #cellPaiChart{
        height: 160px;
    }
  </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                  @if($auth->role == 1)
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href=""><i class="menu-icon fa fa-laptop"></i>Приборная панель </a>
                    </li>
                   
                     <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Ykdysadyyet</a>
                        <ul class="sub-menu children dropdown-menu">                          
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>

                        </ul>
                    </li>
                      
                       <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Maliye</a>
                        <ul class="sub-menu children dropdown-menu">                          
                               <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>

                        </ul>
                    </li>

                     <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Menejment</a>
                        <ul class="sub-menu children dropdown-menu">                          
                               <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>

                        </ul>
                    </li>

                     <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Marketing</a>
                        <ul class="sub-menu children dropdown-menu">                          
                               <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>

                        </ul>
                    </li>

                    

                    
                   
                </ul>
                @else
               
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href=""><i class="menu-icon fa fa-laptop"></i>Приборная панель </a>
                    </li>
                    
                   {{--   <li class="menu-item-has-children dropdown" >
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Ykdysadyyet</a>
                        <ul class="sub-menu children dropdown-menu">                          
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>

                        </ul>
                    </li> --}}
                      
                       <li class="menu-item-has-children dropdown" @if($auth->role !=2) style="display: none" @endif>
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Maliye</a>
                        <ul class="sub-menu children dropdown-menu">                          
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>

                        </ul>
                    </li>

                     <li class="menu-item-has-children dropdown" @if($auth->role != 3) style="display: none" @endif>
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Menejment</a>
                        <ul class="sub-menu children dropdown-menu">                          
                               <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>

                        </ul>
                    </li>
{{-- 
                     <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Marketing</a>
                        <ul class="sub-menu children dropdown-menu">                          
                               <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>
                            <li><i class="fa fa-file"></i><a href="">Gatnasyk</a></li>

                        </ul>
                    </li> --}}

                    

                    
                   
                </ul>
                 @endif

            </div><!-- /.navbar-collapse -->
            
        </nav>
       
       
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                   <a href="" class="standard-logo"><img src="{{asset('front/')}}/img/logo/logo_dark.png" style="height: 90px;"  class="p-3"></a>
                    
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
           <div class="top-right">
                <div class="header-menu">
                    

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('front/')}}/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{route('admin.profile')}}"><i class="fa fa- user"></i>My Profile</a>

                            

                            <a class="nav-link" href="{{route('admin.logout')}}"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>