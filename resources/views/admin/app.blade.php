<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="PIXINVENT">
  <title>MSupply - Ecommerce Website</title>
  <link rel="shortcut icon" type="image/x-icon" href="/images/fav_icon.png">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">

  @yield('extra-css')
  <!-- BEGIN VENDOR CSS-->
  
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/vendors.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/meteocons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/toastr.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css')}}">
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css')}}">
  
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  {{--  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">  --}}
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto">
            <a class="navbar-brand" href="#">
              <img class="brand-logo" alt="Msupply" src="../../images/logoadmin.png">
              <h3 class="brand-text"> Supply</h3>
            </a>
          </li>
          <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700">Prasanth</span>
                </span>
                {{--  <span class="avatar avatar-online">
                  <img src="{{ asset('app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span>  --}}
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
               
                <div class="dropdown-divider"></div><a class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout</a>
                
              
              </div>
              
          
            </li>
            
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
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
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Messages</span>
                  </h6>
                  <span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                </li>
                <li class="scrollable-container media-list w-100">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">
                          <img src="{{ asset('app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Margaret Govan</h6>
                        <p class="notification-text font-small-3 text-muted">I like your portfolio, lets start.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-busy rounded-circle">
                          <img src="{{ asset('app-assets/images/portrait/small/avatar-s-2.png')}}" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Bret Lezama</h6>
                        <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">
                          <img src="{{ asset('app-assets/images/portrait/small/avatar-s-3.png')}}" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Carie Berra</h6>
                        <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-away rounded-circle">
                          <img src="{{ asset('app-assets/images/portrait/small/avatar-s-6.png')}}" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Eric Alsobrook</h6>
                        <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time>
                        </small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="#"><i class="la la-support"></i><span class="menu-title">Dashboard</span></a>
            </li>


        <li class="nav-item"><a href="#"><i class="la la-user-plus"></i><span class="menu-title">Customer</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="/admin/customer" data-i18n="nav.dash.ecommerce">Customer List</a>
            </li>
          </ul>
        </li>

     
        <li class="nav-item"><a href="#"><i class="la la-user-plus"></i><span class="menu-title">User</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="/admin/role" data-i18n="nav.dash.ecommerce">Role</a>
            </li>
            <li><a class="menu-item" href="/admin/customuser">User</a>
            </li>
          </ul>
        </li>     


        <li class=" nav-item"><a href="#"><i class="icon-handbag"></i><span class="menu-title">Products</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="/admin/category/0" data-i18n="nav.dash.ecommerce">Category</a>
            </li>
            <li><a class="menu-item" href="/admin/create-product/">Add Product</a></li>
            <li><a class="menu-item" href="/admin/viewProduct/">Product List</a></li>  
            <li><a class="menu-item" href="/admin/product-group/">Product Group</a></li>  
           
            <li><a class="menu-item" href="/admin/attribute/">Attributes</a>
            </li>
          </ul>
        </li>
        
        <li class=" nav-item"><a href="#"><i class="ft-shopping-cart"></i><span class="menu-title">Order</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="/admin/order" data-i18n="nav.dash.ecommerce">Orders</a>
            </li>
          
            
          </ul>
        </li>
        <li><a href="#"><i class="ft-align-left"></i> CMS</a>
          <ul>
            
            <li><a href="#"><i class="la la-file-o"></i> Home Page</a>
              <ul>
                <li><a class="menu-item" href="/admin/show-slider">  Sliders</a></li>
                <li><a class="menu-item" href="/admin/home-layout"> Home Layout</a></li>
                <li><a class="menu-item" href="/admin/home-add">Ads</a></li>
              </ul>
            </li>
            <li><a class="menu-item" href="/admin/terms_condition"><i class="la la-hdd-o"></i> Terms & Conditions</a></li>
            <li><a class="menu-item" href="/admin/shipping_detail"><i class="la la-floppy-o"></i> Shipping Details</a></li>
            <li><a class="menu-item" href="/admin/privacy-policy"><i class="la la-floppy-o"></i> Privacy Policy</a></li>
            <li><a class="menu-item" href="/admin/about"><i class="la la-floppy-o"></i> About Us</a></li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-gear"></i><span class="menu-title">Settings</span></a>
          <ul class="menu-content">
           
            <li>
              <a class="menu-item" href="/admin/contact-details/">User Contact Info</a>
            </li>
           
            <li>
              <a class="menu-item" href="/admin/faq/">FAQ</a>
            </li>
          
            <li>
              <a class="menu-item" href="/admin/social-details/">Social Media Management</a>
            </li>
            <li>
              <a class="menu-item" href="/admin/brand/">Brand</a>
            </li>
            <li>
              <a class="menu-item" href="/admin/attribute/" data-i18n="nav.menu_levels.second_level_child.main">Attributes Management</a>
              <!-- <ul class="menu-content">
                <li>
                  <a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level">Brand Management</a>
                </li>
                <li>
                  <a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level">Size Management</a>
                </li>
                <li>
                  <a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.third_level">Color Management</a>
                </li>
              </ul> -->
                </li>
            
           
          </ul>
        </li>
        
        <li class=" navigation-header">
          <span data-i18n="nav.category.support">Report</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Support"></i>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-support"></i><span class="menu-title" data-i18n="nav.support_raise_support.main">Report</span></a>
        </li>
   
      </ul>
    </div>
  </div>
  <div class="app-content content">
   @yield('section')
  </div>
 
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">
        Copyright &copy; 20<?=date('y')?> <a class="text-bold-800 grey darken-2" href="http://lrbtech.com">LRB TECH </a>, All rights reserved.
     </span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->

  <!-- BEGIN MODERN JS-->
  <script src="{{ asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{ asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
<script>
  $('#add-contact').click(function(e){
    e.preventDefault();
    window.location.href = "/admin/add-contact";
  })
</script>
<script src="{{ asset('app-assets/js/scripts/extensions/toastr.js')}}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js')}}" type="text/javascript"></script>
  @yield('extra-js')
</body>
</html>

