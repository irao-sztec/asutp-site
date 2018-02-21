<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>CoreUI - Open Source Bootstrap Admin Template</title>

  <!-- Icons -->
  <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
  <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Styles required by this views -->

</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-list"></i></a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-secondary">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
          <div class="divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
          <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-primary">NEW</span></a>
          </li>

          <li class="nav-title">
            Theme
          </li>
          <li class="nav-item">
            <a href="colors.html" class="nav-link"><i class="icon-drop"></i> Colors</a>
          </li>
          <li class="nav-item">
            <a href="typography.html" class="nav-link"><i class="icon-pencil"></i> Typograhy</a>
          </li>
          <li class="nav-title">
            Components
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Base</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="base-breadcrumb.html"><i class="icon-puzzle"></i> Breadcrumb</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-cards.html"><i class="icon-puzzle"></i> Cards</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-carousel.html"><i class="icon-puzzle"></i> Carousel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-collapse.html"><i class="icon-puzzle"></i> Collapse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-forms.html"><i class="icon-puzzle"></i> Forms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-jumbotron.html"><i class="icon-puzzle"></i> Jumbotron</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-list-group.html"><i class="icon-puzzle"></i> List group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-navs.html"><i class="icon-puzzle"></i> Navs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-pagination.html"><i class="icon-puzzle"></i> Pagination</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-popovers.html"><i class="icon-puzzle"></i> Popovers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-progress.html"><i class="icon-puzzle"></i> Progress</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-switches.html"><i class="icon-puzzle"></i> Switches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-tables.html"><i class="icon-puzzle"></i> Tables</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-tabs.html"><i class="icon-puzzle"></i> Tabs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base-tooltips.html"><i class="icon-puzzle"></i> Tooltips</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-cursor"></i> Buttons</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="buttons-buttons.html"><i class="icon-cursor"></i> Buttons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-button-group.html"><i class="icon-cursor"></i> Buttons Group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-dropdowns.html"><i class="icon-cursor"></i> Dropdowns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-social-buttons.html"><i class="icon-cursor"></i> Social Buttons</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="icons-flags.html"><i class="icon-star"></i> Flags <span class="badge badge-success">NEW</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome <span class="badge badge-secondary">4.7</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bell"></i> Notifications</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="notifications-alerts.html"><i class="icon-bell"></i> Alerts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications-badge.html"><i class="icon-bell"></i> Badge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications-modals.html"><i class="icon-bell"></i> Modals</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="badge badge-primary">NEW</span></a>
          </li>
          <li class="divider"></li>
          <li class="nav-title">
            Extras
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
              </li>
            </ul>
          </li>
          <li class="nav-item mt-auto">
            <a class="nav-link nav-link-success" href="http://coreui.io/" target="_top"><i class="icon-cloud-download"></i> Download CoreUI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-danger" href="http://coreui.io/pro/" target="_top"><i class="icon-layers"></i> Try CoreUI <strong>PRO</strong></a>
          </li>

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
        </li>
      </ol>

      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="card">
            <div class="card-header">
              <i class="fa fa-font-awesome"></i> Flags
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 mb-5">
                  For using the flags inline with text add the classes
                  <code>.flag-icon</code> and
                  <code>.flag-icon-xx</code> (where xx is the ISO 3166-1-alpha-2 code of a country) to an empty span. If you want to have a squared version flag then add the class flag-icon-squared as well.
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ad h1" title="ad" id="ad"></i>
                  <div>flag-icon-ad</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ae h1" title="ae" id="ae"></i>
                  <div>flag-icon-ae</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-af h1" title="af" id="af"></i>
                  <div>flag-icon-af</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ag h1" title="ag" id="ag"></i>
                  <div>flag-icon-ag</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ai h1" title="ai" id="ai"></i>
                  <div>flag-icon-ai</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-al h1" title="al" id="al"></i>
                  <div>flag-icon-al</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-am h1" title="am" id="am"></i>
                  <div>flag-icon-am</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ao h1" title="ao" id="ao"></i>
                  <div>flag-icon-ao</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-aq h1" title="aq" id="aq"></i>
                  <div>flag-icon-aq</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ar h1" title="ar" id="ar"></i>
                  <div>flag-icon-ar</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-as h1" title="as" id="as"></i>
                  <div>flag-icon-as</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-at h1" title="at" id="at"></i>
                  <div>flag-icon-at</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-au h1" title="au" id="au"></i>
                  <div>flag-icon-au</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-aw h1" title="aw" id="aw"></i>
                  <div>flag-icon-aw</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ax h1" title="ax" id="ax"></i>
                  <div>flag-icon-ax</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-az h1" title="az" id="az"></i>
                  <div>flag-icon-az</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ba h1" title="ba" id="ba"></i>
                  <div>flag-icon-ba</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bb h1" title="bb" id="bb"></i>
                  <div>flag-icon-bb</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bd h1" title="bd" id="bd"></i>
                  <div>flag-icon-bd</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-be h1" title="be" id="be"></i>
                  <div>flag-icon-be</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bf h1" title="bf" id="bf"></i>
                  <div>flag-icon-bf</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bg h1" title="bg" id="bg"></i>
                  <div>flag-icon-bg</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bh h1" title="bh" id="bh"></i>
                  <div>flag-icon-bh</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bi h1" title="bi" id="bi"></i>
                  <div>flag-icon-bi</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bj h1" title="bj" id="bj"></i>
                  <div>flag-icon-bj</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bl h1" title="bl" id="bl"></i>
                  <div>flag-icon-bl</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bm h1" title="bm" id="bm"></i>
                  <div>flag-icon-bm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bn h1" title="bn" id="bn"></i>
                  <div>flag-icon-bn</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bo h1" title="bo" id="bo"></i>
                  <div>flag-icon-bo</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bq h1" title="bq" id="bq"></i>
                  <div>flag-icon-bq</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-br h1" title="br" id="br"></i>
                  <div>flag-icon-br</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bs h1" title="bs" id="bs"></i>
                  <div>flag-icon-bs</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bt h1" title="bt" id="bt"></i>
                  <div>flag-icon-bt</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bv h1" title="bv" id="bv"></i>
                  <div>flag-icon-bv</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bw h1" title="bw" id="bw"></i>
                  <div>flag-icon-bw</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-by h1" title="by" id="by"></i>
                  <div>flag-icon-by</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-bz h1" title="bz" id="bz"></i>
                  <div>flag-icon-bz</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ca h1" title="ca" id="ca"></i>
                  <div>flag-icon-ca</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cc h1" title="cc" id="cc"></i>
                  <div>flag-icon-cc</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cd h1" title="cd" id="cd"></i>
                  <div>flag-icon-cd</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cf h1" title="cf" id="cf"></i>
                  <div>flag-icon-cf</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cg h1" title="cg" id="cg"></i>
                  <div>flag-icon-cg</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ch h1" title="ch" id="ch"></i>
                  <div>flag-icon-ch</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ci h1" title="ci" id="ci"></i>
                  <div>flag-icon-ci</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ck h1" title="ck" id="ck"></i>
                  <div>flag-icon-ck</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cl h1" title="cl" id="cl"></i>
                  <div>flag-icon-cl</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cm h1" title="cm" id="cm"></i>
                  <div>flag-icon-cm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cn h1" title="cn" id="cn"></i>
                  <div>flag-icon-cn</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-co h1" title="co" id="co"></i>
                  <div>flag-icon-co</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cr h1" title="cr" id="cr"></i>
                  <div>flag-icon-cr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cu h1" title="cu" id="cu"></i>
                  <div>flag-icon-cu</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cv h1" title="cv" id="cv"></i>
                  <div>flag-icon-cv</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cw h1" title="cw" id="cw"></i>
                  <div>flag-icon-cw</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cx h1" title="cx" id="cx"></i>
                  <div>flag-icon-cx</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cy h1" title="cy" id="cy"></i>
                  <div>flag-icon-cy</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-cz h1" title="cz" id="cz"></i>
                  <div>flag-icon-cz</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-de h1" title="de" id="de"></i>
                  <div>flag-icon-de</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-dj h1" title="dj" id="dj"></i>
                  <div>flag-icon-dj</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-dk h1" title="dk" id="dk"></i>
                  <div>flag-icon-dk</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-dm h1" title="dm" id="dm"></i>
                  <div>flag-icon-dm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-do h1" title="do" id="do"></i>
                  <div>flag-icon-do</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-dz h1" title="dz" id="dz"></i>
                  <div>flag-icon-dz</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ec h1" title="ec" id="ec"></i>
                  <div>flag-icon-ec</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ee h1" title="ee" id="ee"></i>
                  <div>flag-icon-ee</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-eg h1" title="eg" id="eg"></i>
                  <div>flag-icon-eg</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-eh h1" title="eh" id="eh"></i>
                  <div>flag-icon-eh</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-er h1" title="er" id="er"></i>
                  <div>flag-icon-er</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-es h1" title="es" id="es"></i>
                  <div>flag-icon-es</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-et h1" title="et" id="et"></i>
                  <div>flag-icon-et</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-fi h1" title="fi" id="fi"></i>
                  <div>flag-icon-fi</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-fj h1" title="fj" id="fj"></i>
                  <div>flag-icon-fj</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-fk h1" title="fk" id="fk"></i>
                  <div>flag-icon-fk</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-fm h1" title="fm" id="fm"></i>
                  <div>flag-icon-fm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-fo h1" title="fo" id="fo"></i>
                  <div>flag-icon-fo</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-fr h1" title="fr" id="fr"></i>
                  <div>flag-icon-fr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ga h1" title="ga" id="ga"></i>
                  <div>flag-icon-ga</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gb h1" title="gb" id="gb"></i>
                  <div>flag-icon-gb</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gd h1" title="gd" id="gd"></i>
                  <div>flag-icon-gd</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ge h1" title="ge" id="ge"></i>
                  <div>flag-icon-ge</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gf h1" title="gf" id="gf"></i>
                  <div>flag-icon-gf</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gg h1" title="gg" id="gg"></i>
                  <div>flag-icon-gg</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gh h1" title="gh" id="gh"></i>
                  <div>flag-icon-gh</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gi h1" title="gi" id="gi"></i>
                  <div>flag-icon-gi</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gl h1" title="gl" id="gl"></i>
                  <div>flag-icon-gl</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gm h1" title="gm" id="gm"></i>
                  <div>flag-icon-gm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gn h1" title="gn" id="gn"></i>
                  <div>flag-icon-gn</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gp h1" title="gp" id="gp"></i>
                  <div>flag-icon-gp</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gq h1" title="gq" id="gq"></i>
                  <div>flag-icon-gq</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gr h1" title="gr" id="gr"></i>
                  <div>flag-icon-gr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gs h1" title="gs" id="gs"></i>
                  <div>flag-icon-gs</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gt h1" title="gt" id="gt"></i>
                  <div>flag-icon-gt</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gu h1" title="gu" id="gu"></i>
                  <div>flag-icon-gu</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gw h1" title="gw" id="gw"></i>
                  <div>flag-icon-gw</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-gy h1" title="gy" id="gy"></i>
                  <div>flag-icon-gy</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-hk h1" title="hk" id="hk"></i>
                  <div>flag-icon-hk</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-hm h1" title="hm" id="hm"></i>
                  <div>flag-icon-hm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-hn h1" title="hn" id="hn"></i>
                  <div>flag-icon-hn</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-hr h1" title="hr" id="hr"></i>
                  <div>flag-icon-hr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ht h1" title="ht" id="ht"></i>
                  <div>flag-icon-ht</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-hu h1" title="hu" id="hu"></i>
                  <div>flag-icon-hu</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-id h1" title="id" id="id"></i>
                  <div>flag-icon-id</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ie h1" title="ie" id="ie"></i>
                  <div>flag-icon-ie</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-il h1" title="il" id="il"></i>
                  <div>flag-icon-il</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-im h1" title="im" id="im"></i>
                  <div>flag-icon-im</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-in h1" title="in" id="in"></i>
                  <div>flag-icon-in</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-io h1" title="io" id="io"></i>
                  <div>flag-icon-io</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-iq h1" title="iq" id="iq"></i>
                  <div>flag-icon-iq</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ir h1" title="ir" id="ir"></i>
                  <div>flag-icon-ir</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-is h1" title="is" id="is"></i>
                  <div>flag-icon-is</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-it h1" title="it" id="it"></i>
                  <div>flag-icon-it</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-je h1" title="je" id="je"></i>
                  <div>flag-icon-je</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-jm h1" title="jm" id="jm"></i>
                  <div>flag-icon-jm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-jo h1" title="jo" id="jo"></i>
                  <div>flag-icon-jo</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-jp h1" title="jp" id="jp"></i>
                  <div>flag-icon-jp</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ke h1" title="ke" id="ke"></i>
                  <div>flag-icon-ke</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-kg h1" title="kg" id="kg"></i>
                  <div>flag-icon-kg</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-kh h1" title="kh" id="kh"></i>
                  <div>flag-icon-kh</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ki h1" title="ki" id="ki"></i>
                  <div>flag-icon-ki</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-km h1" title="km" id="km"></i>
                  <div>flag-icon-km</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-kn h1" title="kn" id="kn"></i>
                  <div>flag-icon-kn</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-kp h1" title="kp" id="kp"></i>
                  <div>flag-icon-kp</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-kr h1" title="kr" id="kr"></i>
                  <div>flag-icon-kr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-kw h1" title="kw" id="kw"></i>
                  <div>flag-icon-kw</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ky h1" title="ky" id="ky"></i>
                  <div>flag-icon-ky</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-kz h1" title="kz" id="kz"></i>
                  <div>flag-icon-kz</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-la h1" title="la" id="la"></i>
                  <div>flag-icon-la</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-lb h1" title="lb" id="lb"></i>
                  <div>flag-icon-lb</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-lc h1" title="lc" id="lc"></i>
                  <div>flag-icon-lc</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-li h1" title="li" id="li"></i>
                  <div>flag-icon-li</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-lk h1" title="lk" id="lk"></i>
                  <div>flag-icon-lk</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-lr h1" title="lr" id="lr"></i>
                  <div>flag-icon-lr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ls h1" title="ls" id="ls"></i>
                  <div>flag-icon-ls</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-lt h1" title="lt" id="lt"></i>
                  <div>flag-icon-lt</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-lu h1" title="lu" id="lu"></i>
                  <div>flag-icon-lu</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-lv h1" title="lv" id="lv"></i>
                  <div>flag-icon-lv</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ly h1" title="ly" id="ly"></i>
                  <div>flag-icon-ly</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ma h1" title="ma" id="ma"></i>
                  <div>flag-icon-ma</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mc h1" title="mc" id="mc"></i>
                  <div>flag-icon-mc</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-md h1" title="md" id="md"></i>
                  <div>flag-icon-md</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-me h1" title="me" id="me"></i>
                  <div>flag-icon-me</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mf h1" title="mf" id="mf"></i>
                  <div>flag-icon-mf</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mg h1" title="mg" id="mg"></i>
                  <div>flag-icon-mg</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mh h1" title="mh" id="mh"></i>
                  <div>flag-icon-mh</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mk h1" title="mk" id="mk"></i>
                  <div>flag-icon-mk</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ml h1" title="ml" id="ml"></i>
                  <div>flag-icon-ml</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mm h1" title="mm" id="mm"></i>
                  <div>flag-icon-mm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mn h1" title="mn" id="mn"></i>
                  <div>flag-icon-mn</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mo h1" title="mo" id="mo"></i>
                  <div>flag-icon-mo</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mp h1" title="mp" id="mp"></i>
                  <div>flag-icon-mp</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mq h1" title="mq" id="mq"></i>
                  <div>flag-icon-mq</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mr h1" title="mr" id="mr"></i>
                  <div>flag-icon-mr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ms h1" title="ms" id="ms"></i>
                  <div>flag-icon-ms</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mt h1" title="mt" id="mt"></i>
                  <div>flag-icon-mt</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mu h1" title="mu" id="mu"></i>
                  <div>flag-icon-mu</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mv h1" title="mv" id="mv"></i>
                  <div>flag-icon-mv</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mw h1" title="mw" id="mw"></i>
                  <div>flag-icon-mw</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mx h1" title="mx" id="mx"></i>
                  <div>flag-icon-mx</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-my h1" title="my" id="my"></i>
                  <div>flag-icon-my</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-mz h1" title="mz" id="mz"></i>
                  <div>flag-icon-mz</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-na h1" title="na" id="na"></i>
                  <div>flag-icon-na</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-nc h1" title="nc" id="nc"></i>
                  <div>flag-icon-nc</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ne h1" title="ne" id="ne"></i>
                  <div>flag-icon-ne</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-nf h1" title="nf" id="nf"></i>
                  <div>flag-icon-nf</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ng h1" title="ng" id="ng"></i>
                  <div>flag-icon-ng</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ni h1" title="ni" id="ni"></i>
                  <div>flag-icon-ni</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-nl h1" title="nl" id="nl"></i>
                  <div>flag-icon-nl</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-no h1" title="no" id="no"></i>
                  <div>flag-icon-no</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-np h1" title="np" id="np"></i>
                  <div>flag-icon-np</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-nr h1" title="nr" id="nr"></i>
                  <div>flag-icon-nr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-nu h1" title="nu" id="nu"></i>
                  <div>flag-icon-nu</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-nz h1" title="nz" id="nz"></i>
                  <div>flag-icon-nz</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-om h1" title="om" id="om"></i>
                  <div>flag-icon-om</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pa h1" title="pa" id="pa"></i>
                  <div>flag-icon-pa</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pe h1" title="pe" id="pe"></i>
                  <div>flag-icon-pe</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pf h1" title="pf" id="pf"></i>
                  <div>flag-icon-pf</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pg h1" title="pg" id="pg"></i>
                  <div>flag-icon-pg</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ph h1" title="ph" id="ph"></i>
                  <div>flag-icon-ph</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pk h1" title="pk" id="pk"></i>
                  <div>flag-icon-pk</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pl h1" title="pl" id="pl"></i>
                  <div>flag-icon-pl</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pm h1" title="pm" id="pm"></i>
                  <div>flag-icon-pm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pn h1" title="pn" id="pn"></i>
                  <div>flag-icon-pn</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pr h1" title="pr" id="pr"></i>
                  <div>flag-icon-pr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ps h1" title="ps" id="ps"></i>
                  <div>flag-icon-ps</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pt h1" title="pt" id="pt"></i>
                  <div>flag-icon-pt</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-pw h1" title="pw" id="pw"></i>
                  <div>flag-icon-pw</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-py h1" title="py" id="py"></i>
                  <div>flag-icon-py</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-qa h1" title="qa" id="qa"></i>
                  <div>flag-icon-qa</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-re h1" title="re" id="re"></i>
                  <div>flag-icon-re</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ro h1" title="ro" id="ro"></i>
                  <div>flag-icon-ro</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-rs h1" title="rs" id="rs"></i>
                  <div>flag-icon-rs</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ru h1" title="ru" id="ru"></i>
                  <div>flag-icon-ru</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-rw h1" title="rw" id="rw"></i>
                  <div>flag-icon-rw</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sa h1" title="sa" id="sa"></i>
                  <div>flag-icon-sa</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sb h1" title="sb" id="sb"></i>
                  <div>flag-icon-sb</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sc h1" title="sc" id="sc"></i>
                  <div>flag-icon-sc</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sd h1" title="sd" id="sd"></i>
                  <div>flag-icon-sd</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-se h1" title="se" id="se"></i>
                  <div>flag-icon-se</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sg h1" title="sg" id="sg"></i>
                  <div>flag-icon-sg</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sh h1" title="sh" id="sh"></i>
                  <div>flag-icon-sh</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-si h1" title="si" id="si"></i>
                  <div>flag-icon-si</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sj h1" title="sj" id="sj"></i>
                  <div>flag-icon-sj</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sk h1" title="sk" id="sk"></i>
                  <div>flag-icon-sk</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sl h1" title="sl" id="sl"></i>
                  <div>flag-icon-sl</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sm h1" title="sm" id="sm"></i>
                  <div>flag-icon-sm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sn h1" title="sn" id="sn"></i>
                  <div>flag-icon-sn</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-so h1" title="so" id="so"></i>
                  <div>flag-icon-so</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sr h1" title="sr" id="sr"></i>
                  <div>flag-icon-sr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ss h1" title="ss" id="ss"></i>
                  <div>flag-icon-ss</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-st h1" title="st" id="st"></i>
                  <div>flag-icon-st</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sv h1" title="sv" id="sv"></i>
                  <div>flag-icon-sv</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sx h1" title="sx" id="sx"></i>
                  <div>flag-icon-sx</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sy h1" title="sy" id="sy"></i>
                  <div>flag-icon-sy</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-sz h1" title="sz" id="sz"></i>
                  <div>flag-icon-sz</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tc h1" title="tc" id="tc"></i>
                  <div>flag-icon-tc</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-td h1" title="td" id="td"></i>
                  <div>flag-icon-td</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tf h1" title="tf" id="tf"></i>
                  <div>flag-icon-tf</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tg h1" title="tg" id="tg"></i>
                  <div>flag-icon-tg</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-th h1" title="th" id="th"></i>
                  <div>flag-icon-th</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tj h1" title="tj" id="tj"></i>
                  <div>flag-icon-tj</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tk h1" title="tk" id="tk"></i>
                  <div>flag-icon-tk</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tl h1" title="tl" id="tl"></i>
                  <div>flag-icon-tl</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tm h1" title="tm" id="tm"></i>
                  <div>flag-icon-tm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tn h1" title="tn" id="tn"></i>
                  <div>flag-icon-tn</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-to h1" title="to" id="to"></i>
                  <div>flag-icon-to</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tr h1" title="tr" id="tr"></i>
                  <div>flag-icon-tr</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tt h1" title="tt" id="tt"></i>
                  <div>flag-icon-tt</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tv h1" title="tv" id="tv"></i>
                  <div>flag-icon-tv</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tw h1" title="tw" id="tw"></i>
                  <div>flag-icon-tw</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-tz h1" title="tz" id="tz"></i>
                  <div>flag-icon-tz</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ua h1" title="ua" id="ua"></i>
                  <div>flag-icon-ua</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ug h1" title="ug" id="ug"></i>
                  <div>flag-icon-ug</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-um h1" title="um" id="um"></i>
                  <div>flag-icon-um</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-us h1" title="us" id="us"></i>
                  <div>flag-icon-us</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-uy h1" title="uy" id="uy"></i>
                  <div>flag-icon-uy</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-uz h1" title="uz" id="uz"></i>
                  <div>flag-icon-uz</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-va h1" title="va" id="va"></i>
                  <div>flag-icon-va</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-vc h1" title="vc" id="vc"></i>
                  <div>flag-icon-vc</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ve h1" title="ve" id="ve"></i>
                  <div>flag-icon-ve</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-vg h1" title="vg" id="vg"></i>
                  <div>flag-icon-vg</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-vi h1" title="vi" id="vi"></i>
                  <div>flag-icon-vi</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-vn h1" title="vn" id="vn"></i>
                  <div>flag-icon-vn</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-vu h1" title="vu" id="vu"></i>
                  <div>flag-icon-vu</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-wf h1" title="wf" id="wf"></i>
                  <div>flag-icon-wf</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ws h1" title="ws" id="ws"></i>
                  <div>flag-icon-ws</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-ye h1" title="ye" id="ye"></i>
                  <div>flag-icon-ye</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-yt h1" title="yt" id="yt"></i>
                  <div>flag-icon-yt</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-za h1" title="za" id="za"></i>
                  <div>flag-icon-za</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-zm h1" title="zm" id="zm"></i>
                  <div>flag-icon-zm</div>
                </div>
                <div class="col-sm-2 col-xs-3 text-center mb-5">
                  <i class="flag-icon flag-icon-zw h1" title="zw" id="zw"></i>
                  <div>flag-icon-zw</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>

    <aside class="aside-menu">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
          <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
            <small><b>Today</b></small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout callout-warning m-0 py-3">
            <div class="avatar float-right">
              <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
            </div>
            <div>Meeting with
              <strong>Lucas</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
            <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-info m-0 py-3">
            <div class="avatar float-right">
              <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
            </div>
            <div>Skype with
              <strong>Megan</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
            <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line </small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
            <small><b>Tomorrow</b></small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout callout-danger m-0 py-3">
            <div>New UI Project -
              <strong>deadline</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
            <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
            <div class="avatars-stack mt-2">
              <div class="avatar avatar-xs">
                <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
            </div>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-success m-0 py-3">
            <div>
              <strong>#10 Startups.Garden</strong> Meetup</div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
            <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-primary m-0 py-3">
            <div>
              <strong>Team meeting</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
            <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
            <div class="avatars-stack mt-2">
              <div class="avatar avatar-xs">
                <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/8.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
            </div>
          </div>
          <hr class="mx-3 my-0">
        </div>
        <div class="tab-pane p-3" id="messages" role="tabpanel">
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
          <h6>Settings</h6>

          <div class="aside-options">
            <div class="clearfix mt-4">
              <small><b>Option 1</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 2</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 3</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 4</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input" checked="">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
          </div>

          <hr>
          <h6>System Utilization</h6>

          <div class="text-uppercase mb-1 mt-4">
            <small><b>CPU Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">348 Processes. 1/4 Cores.</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>Memory Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">11444GB/16384MB</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>SSD 1 Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">243GB/256GB</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>SSD 2 Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">25GB/256GB</small>
        </div>
      </div>
    </aside>

  </div>

  <footer class="app-footer">
    <span><a href="http://coreui.io">CoreUI</a> © 2018 creativeLabs.</span>
    <span class="ml-auto">Powered by <a href="http://coreui.io">CoreUI</a></span>
  </footer>

  <!-- Bootstrap and necessary plugins -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/pace-progress/pace.min.js"></script>

  <!-- Plugins and scripts required by all views -->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>

  <!-- CoreUI main scripts -->

  <script src="js/app.js"></script>

</body>
</html>