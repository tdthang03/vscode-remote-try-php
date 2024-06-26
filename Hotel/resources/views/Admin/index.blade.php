<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2024 08:52:56 GMT -->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<base href="/">
<link rel="stylesheet" href="{{ asset('asset-fe') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="{{ asset('asset-fe') }}/bower_components/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="{{ asset('asset-fe') }}/bower_components/Ionicons/css/ionicons.min.css">

<link rel="stylesheet" href="{{ asset('asset-fe') }}/dist/css/AdminLTE.min.css">

<link rel="stylesheet" href="{{ asset('asset-fe') }}/dist/css/skins/_all-skins.min.css">


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    <header class="main-header">

        <a href="" class="logo">

            <span class="logo-mini"><b>A</b>LT</span>

            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <nav class="navbar navbar-static-top">

            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                          <ul class="menu">
                            <li>
                              <a href="#">
                                <div class="pull-left">
                                  <img
                                    src="{{ asset('asset-fe') }}/dist/img/user2-160x160.jpg"
                                    class="img-circle"
                                    alt="User Image"
                                  />
                                </div>
                                <h4>
                                  Support Team
                                  <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                      </ul>
                    </li>
      
                    <li class="dropdown notifications-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                          <ul class="menu">
                            <li>
                              <a href="#">
                                <i class="fa fa-users text-aqua"></i> 5 new members
                                joined today
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                      </ul>
                    </li>
      
                    <li class="dropdown tasks-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                          <ul class="menu">
                            <li>
                              <a href="#">
                                <h3>
                                  Design some buttons
                                  <small class="pull-right">20%</small>
                                </h3>
                                <div class="progress xs">
                                  <div
                                    class="progress-bar progress-bar-aqua"
                                    style="width: 20%"
                                    role="progressbar"
                                    aria-valuenow="20"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  >
                                    <span class="sr-only">20% Complete</span>
                                  </div>
                                </div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="footer">
                          <a href="#">View all tasks</a>
                        </li>
                      </ul>
                    </li>
      
                    <li class="dropdown user user-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img
                          src="{{ asset('asset-fe') }}/dist/img/user2-160x160.jpg"
                          class="user-image"
                          alt="User Image"
                        />
                        <span class="hidden-xs">{{Auth::user()->name}}</span>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="user-header">
                          <img
                            src="{{ asset('asset-fe') }}/dist/img/user2-160x160.jpg"
                            class="img-circle"
                            alt="User Image"
                          />
                          <p>
                            {{Auth::user()->name}}
                            <small>Member since Nov. 2012</small>
                          </p>
                        </li>
      
                        <li class="user-body">
                          <div class="row">
                            <div class="col-xs-4 text-center">
                              <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                              <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                              <a href="#">Friends</a>
                            </div>
                          </div>
                        </li>
      
                        <li class="user-footer">
                          <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                          </div>
                          <div class="pull-right">
                            <a href="{{Route('admin.signout')}}" class="btn btn-default btn-flat">Sign out</a>
                          </div>
                        </li>
                      </ul>
                    </li>
      
                    <li>
                      <a href="#" data-toggle="control-sidebar"
                        ><i class="fa fa-gears"></i
                      ></a>
                    </li>
                  </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">

        <section class="sidebar">

            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('asset-fe') }}/dist/img/user2-160x160.jpg" class="img-circle"
                        alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li>
                    <a href="{{Route('admin.index')}}">
                        <i class="fa fa-home"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="">
                        <i class="fa fa-th"></i> <span>Quản lí danh mục</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{Route('category.index')}}"><i class="fa fa-circle-o"></i> List</a></li>
                        <li><a href="{{Route('category.create')}}"><i class="fa fa-circle-o"></i> Add new</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i> <span>Quản lí phòng</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{Route('product.index')}}"><i class="fa fa-circle-o"></i> Danh sách phòng</a></li>
                        <li><a href="{{Route('product.create')}}"><i class="fa fa-circle-o"></i> Thêm mới phòng</a></li>
                    </ul>
                </li>
                
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i> <span>Orrders</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i> List</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i> Statics new</a></li>
                    </ul>
                </li>
               
            
            </ul>
        </section>

    </aside>


    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                @yield('title')

            </h1>

        </section>

        <section class="content">

            <div class="box">
                <div class="box-body">
                    @yield('main')
                </div>
            </div>
        </section>
    </div>

</div>
    <script data-cfasync="false"
        src="{{ asset('asset-fe') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('asset-fe') }}/bower_components/jquery/dist/jquery.min.js"></script>

    <script src="{{ asset('asset-fe') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="{{ asset('asset-fe') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <script src="{{ asset('asset-fe') }}/bower_components/fastclick/lib/fastclick.js"></script>

    <script src="{{ asset('asset-fe') }}/dist/js/adminlte.min.js"></script>

    <script src="{{ asset('asset-fe') }}/dist/js/demo.js"></script>
    <script>
        $(document).ready(function() {
            $('.sidebar-menu').tree()
        })
    </script>
    @yield('custom-js')
</body>
</html>
