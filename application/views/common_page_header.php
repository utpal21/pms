<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>DataTables - Ace Admin</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/solid.min.css">



    <!-- include vendor stylesheets used in "DataTables" page. see "application/views/default/pages/partials/table-datatables/@vendor-stylesheets.hbs" -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/datatables.net-buttons-bs4@1.6.3/css/buttons.bootstrap4.min.css">


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">



    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="../dist/css/ace.min.css">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="../assets/favicon.png">

    <!-- "DataTables" page styles, specific to this page for demo only -->
    <style>
      .body-container {
        /* so that sticky thead works */
        overflow: visible;
      }

      thead.is-stuck>tr>th {
        border-bottom: 1px solid #e8e8e8 !important;
      }
    </style>
  </head>

  <body>
    <div class="body-container">

      <div class="main-container">

        <div id="sidebar" class="sidebar sidebar-dark sidebar-color sidebar-fixed sidebar-backdrop expandable" data-swipe="true" data-dismiss="true">
          <div class="sidebar-inner">

            <div class="ace-scroll flex-grow-1 mt-1px" data-ace-scroll="{}">

              <div class="sidebar-section-item m-0 fadeable-left fadeable-top">
                <div class="fadeinable">
                  <div class="py-2 mx-1 border-b-1 brc-white-tp10" id="sidebar-header-brand1">
                    <a class="navbar-brand text-140">
                      <i class="fa fa-leaf text-success-l2"></i>
                    </a>
                  </div>
                </div>

                <div class="fadeable w-100 ">
                  <div class="py-1 py-xl-2 text-center mx-3 border-b-1 brc-white-tp10" id="sidebar-header-brand2">
                    <a class="navbar-brand ml-n2 text-140 text-white" href="#">
                      <i class="fa fa-leaf mr-1 text-success-l1"></i>
                      ACE <span>App</span>
                    </a>
                  </div>
                </div>
              </div><!-- /.sidebar-section-item  -->
              <!-- optional `nav` tag -->
              <nav aria-label="Main">
                <ul class="nav flex-column mt-2 mt-x-l4 has-active-border active-on-top">


                  <li class="nav-item-caption">
                    <span class="fadeable pl-3">MAIN</span>
                    <span class="fadeinable mt-n2 text-125">&hellip;</span>
                    <!--
                  			OR something like the following (with `.hideable` text)
                  		-->
                    <!--
                  			<div class="hideable">
                  				<span class="pl-3">MAIN</span>
                  			</div>
                  			<span class="fadeinable mt-n2 text-125">&hellip;</span>
                  		-->
                  </li>


                  <li class="nav-item">

                    <a href="dashboard.html" class="nav-link">
                      <i class="nav-icon fa fa-tachometer-alt"></i>
                      <span class="nav-text fadeable">
                  	  <span>Dashboard</span>
                      </span>


                    </a>

                    <b class="sub-arrow"></b>

                  </li>


                  <li class="nav-item">

                    <a href="#" class="nav-link dropdown-toggle collapsed">
                      <i class="nav-icon fa fa-cube"></i>
                      <span class="nav-text fadeable">
                  	  <span>Layouts</span>
                      </span>

                      <b class="caret fa fa-angle-left rt-n90"></b>

                      <!-- or you can use custom icons. first add `d-style` to 'A' -->
                      <!--
                  	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                  	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                  	 -->
                    </a>

                    <div class="hideable submenu collapse">
                      <ul class="submenu-inner">

                        <li class="nav-item">

                          <a href="dashboard-2.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Dashboard 2</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="dashboard-3.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Dashboard 3</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="dashboard-4.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Dashboard 4</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="horizontal.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Horizontal Menu</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="two-menus-1.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Two Menus</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="landing-page-1.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Landing Page 1</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="landing-page-2.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Landing Page 2</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="coming-soon.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Coming Soon</span>
                            </span>


                          </a>


                        </li>

                      </ul>
                    </div>

                    <b class="sub-arrow"></b>

                  </li>


                  <li class="nav-item">

                    <a href="#" class="nav-link dropdown-toggle collapsed">
                      <i class="nav-icon fa fa-desktop"></i>
                      <span class="nav-text fadeable">
                  	  <span>UI Elements</span>
                      </span>

                      <b class="caret fa fa-angle-left rt-n90"></b>

                      <!-- or you can use custom icons. first add `d-style` to 'A' -->
                      <!--
                  	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                  	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                  	 -->
                    </a>

                    <div class="hideable submenu collapse">
                      <ul class="submenu-inner">

                        <li class="nav-item">

                          <a href="buttons.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Buttons</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="button-groups.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Button Groups</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="alerts.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Alerts</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="modals.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Modals</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="asides.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Asides</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="tabs.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Tabs</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="accordions.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Accordions</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="tooltips.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Tooltips &amp; Popovers</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="badges.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Badges</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="pagination.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Pagination</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="dropdowns.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Dropdowns</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="icons.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Icons</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="typography.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Typography</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="charts.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Charts</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="treeview.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Treeview</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="#" class="nav-link dropdown-toggle collapsed">

                            <span class="nav-text">
                  				  <span>Nested Links</span>
                            </span>

                            <b class="caret fa fa-angle-left rt-n90"></b>

                            <!-- or you can use custom icons. first add `d-style` to 'A' -->
                            <!--
                  				 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                  				 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                  				 -->
                          </a>

                          <div class=" submenu collapse">
                            <ul class="submenu-inner">

                              <li class="nav-item">

                                <a href="#" class="nav-link dropdown-toggle collapsed">
                                  <i class="nav-icon fa fa-caret-right text-blue-l2 mr-2"></i>
                                  <span class="nav-text">
                  							  <span>Third Level Menu</span>
                                  </span>

                                  <b class="caret fa fa-angle-left rt-n90"></b>

                                  <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                  <!--
                  							 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                  							 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                  							 -->
                                </a>

                                <div class=" submenu collapse">
                                  <ul class="submenu-inner">

                                    <li class="nav-item">

                                      <a href="#" class="nav-link dropdown-toggle collapsed">
                                        <i class="nav-icon fa fa-leaf text-success-l2 text-90 mr-2"></i>
                                        <span class="nav-text">
                  										  <span>Fourth Level</span>
                                        </span>

                                        <b class="caret fa fa-angle-left rt-n90"></b>

                                        <!-- or you can use custom icons. first add `d-style` to 'A' -->
                                        <!--
                  										 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                  										 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                  										 -->
                                      </a>

                                      <div class=" submenu collapse">
                                        <ul class="submenu-inner">

                                          <li class="nav-item">

                                            <a href="#" class="nav-link">
                                              <i class="nav-icon fa fa-stop text-warning-l1 text-80 mx-2"></i>
                                              <span class="nav-text">
                  													  <span>5th Level</span>
                                              </span>


                                            </a>


                                          </li>


                                          <li class="nav-item">

                                            <a href="#" class="nav-link">
                                              <i class="nav-icon fa fa-stop text-warning-l1 text-80 mx-2"></i>
                                              <span class="nav-text">
                  													  <span>5th Level</span>
                                              </span>


                                            </a>


                                          </li>

                                        </ul>
                                      </div>

                                      <b class="sub-arrow"></b>

                                    </li>

                                  </ul>
                                </div>

                                <b class="sub-arrow"></b>

                              </li>

                            </ul>
                          </div>

                          <b class="sub-arrow"></b>

                        </li>

                      </ul>
                    </div>

                    <b class="sub-arrow"></b>

                  </li>


                  <li class="nav-item active open">

                    <a href="#" class="nav-link dropdown-toggle">
                      <i class="nav-icon fa fa-table"></i>
                      <span class="nav-text fadeable">
                  	  <span>Tables</span>
                      </span>

                      <b class="caret fa fa-angle-left rt-n90"></b>

                      <!-- or you can use custom icons. first add `d-style` to 'A' -->
                      <!--
                  	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                  	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                  	 -->
                    </a>

                    <div class="hideable submenu collapse show">
                      <ul class="submenu-inner">

                        <li class="nav-item">

                          <a href="tables-basic.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Basic Tables</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item active">

                          <a href="table-datatables.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>DataTables</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="table-bootstrap.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Bootstrap Table</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="table-jqgrid.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>jqGrid</span>
                            </span>


                          </a>


                        </li>

                      </ul>
                    </div>

                    <b class="sub-arrow"></b>

                  </li>


                  <li class="nav-item">

                    <a href="#" class="nav-link dropdown-toggle collapsed">
                      <i class="nav-icon fa fa-edit"></i>
                      <span class="nav-text fadeable">
                  	  <span>Forms</span>
                      </span>

                      <b class="caret fa fa-angle-left rt-n90"></b>

                      <!-- or you can use custom icons. first add `d-style` to 'A' -->
                      <!--
                  	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                  	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                  	 -->
                    </a>

                    <div class="hideable submenu collapse">
                      <ul class="submenu-inner">

                        <li class="nav-item">

                          <a href="form-basic.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Basic Elements</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="form-more.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>More Elements</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="form-wizard.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Wizard &amp; Validation</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="form-upload.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>File Upload</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="form-wysiwyg.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Wysiwyg &amp; Markdown</span>
                            </span>


                          </a>


                        </li>

                      </ul>
                    </div>

                    <b class="sub-arrow"></b>

                  </li>


                  <li class="nav-item">

                    <a href="cards.html" class="nav-link">
                      <i class="nav-icon far fa-window-restore"></i>
                      <span class="nav-text fadeable">
                  	  <span>Cards</span>
                      </span>


                    </a>

                    <b class="sub-arrow"></b>

                  </li>


                  <li class="nav-item">

                    <a href="calendar.html" class="nav-link">
                      <i class="nav-icon far fa-calendar-alt"></i>
                      <span class="nav-text fadeable">
                  	  <span>Calendar</span>
                      <span class="badge px-1 " title="2 Urgent Events"><i class='fas fa-exclamation-triangle text-140 text-yellow-m3'></i></span>
                      </span>


                    </a>

                    <b class="sub-arrow"></b>

                  </li>



                  <li class="nav-item">

                    <a href="gallery.html" class="nav-link">
                      <i class="nav-icon far fa-image"></i>
                      <span class="nav-text fadeable">
                  	  <span>Gallery</span>
                      </span>


                    </a>

                    <b class="sub-arrow"></b>

                  </li>



                  <li class="nav-item-caption">
                    <span class="fadeable pl-3">OTHER</span>
                    <span class="fadeinable mt-n2 text-125">&hellip;</span>
                    <!--
                  			OR something like the following (with `.hideable` text)
                  		-->
                    <!--
                  			<div class="hideable">
                  				<span class="pl-3">OTHER</span>
                  			</div>
                  			<span class="fadeinable mt-n2 text-125">&hellip;</span>
                  		-->
                  </li>


                  <li class="nav-item">

                    <a href="#" class="nav-link dropdown-toggle collapsed">
                      <i class="nav-icon fa fa-tag"></i>
                      <span class="nav-text fadeable">
                  	  <span>More Pages</span>
                      <span class="badge bgc-success-m1 text-dark-d2 radius-round text-90 ml-1 mr-2px badge-sm ">5</span>
                      </span>

                      <b class="caret fa fa-angle-left rt-n90"></b>

                      <!-- or you can use custom icons. first add `d-style` to 'A' -->
                      <!--
                  	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>
                  	 	<b class="caret d-collapsed fa fa-plus text-80"></b>
                  	 -->
                    </a>

                    <div class="hideable submenu collapse">
                      <ul class="submenu-inner">

                        <li class="nav-item">

                          <a href="page-profile.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Profile</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="page-login.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Login</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="page-pricing.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Pricing</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="page-invoice.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Invoice</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="page-error.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Error</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="starter.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Starter</span>
                            </span>


                          </a>


                        </li>

                      </ul>
                    </div>

                    <b class="sub-arrow"></b>

                  </li>

                </ul>
              </nav>

            </div><!-- /.ace-scroll -->


            <div class="sidebar-section">
              <div class="sidebar-section-item fadeable-left fadeable-top">
                <div class="fadeinable">
                  <button type="button" class="btn btn-primary btn-bold">
                    <i class="fa fa-cloud"></i>
                  </button>
                </div>

                <div id="sidebar-footer" class="fadeable text-center border-t-1 brc-white-tp10 w-95">
                  <div class="py-2">
                    <button type="button" class="btn btn-blue px-5 btn-bold">
                      Upgrade
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="main-content">
          <nav class="navbar navbar-sm navbar-expand-lg navbar-fixed navbar-white">
            <div class="navbar-inner brc-grey-l2 shadow-md">

              <div class="navbar-intro">
                <button type="button" class="btn btn-burger align-self-center ml-25 mr-2 d-none d-xl-flex btn-h-lighter-blue border-1" data-toggle="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="true" aria-label="Toggle sidebar">
                  <span class="bars text-default"></span>
                </button>

                <button type="button" class="btn text-grey-m2 btn-burger burger-arrowed static collapsed ml-2 d-flex d-xl-none btn-h-lighter-blue" data-toggle-mobile="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
                  <span class="bars text-default"></span>
                </button>

                <a class="navbar-brand d-xl-none mx-1 text-grey-d3 text-130" href="#">
                  <i class="fa fa-leaf mr-2px text-success-m1"></i>
                  ACE App
                </a>

                <div class="d-none d-xl-inline-flex">
                  <div>
                    <ol class="breadcrumb breadcrumb-nosep align-items-center pl-1 text-nowrap mr-2">
                      <li class="breadcrumb-item text-secondary text-100">Tables</li>
                      <li class="mx-15 text-grey-l4 text-110">/</li>
                      <li class="breadcrumb-item active text-dark-tp4 text-105 text-600">DataTables</li>
                    </ol>
                  </div>
                </div>
              </div>


              <!-- searchbox ... mobile only -->
              <div class="d-lg-none navbar-content flex-grow-0 ml-auto">
                <button class="navbar-toggler h-75" type="button" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navbar search">
                  <i class="fa fa-search text-blue-m1 text-90"></i>
                </button>

                <div class="collapse navbar-collapse navbar-backdrop" id="navbarSearch">
                  <div class="d-flex align-items-center pl-4">
                    <i class="fa fa-search text-blue-m1 mr-n425"></i>
                    <input type="text" class="pl-3 pr-475 w-100 autofocus py-35 border-0" placeholder="Search ..." aria-label="Search">
                    <a href="#" class="btn border-0 ml-n475 radius-100 py-15 btn-text-lightgrey btn-h-light-blue px-25 pos-rel">
                      <i class="fa fa-microphone"></i>
                    </a>
                  </div>
                </div>
              </div><!-- .navbar-content -->


              <!-- .navbar-menu toggler -->
              <button class="navbar-toggler ml-1 mr-2 px-1" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navbar menu">
                <img class="mx-0 radius-round border-2 brc-primary-tp3 p-1px" src="../assets/image/avatar/avatar3.jpg" width="36" alt="Natalie's Photo">
              </button>


              <div class="ml-auto mr-xl-3 navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu">

                <div class="navbar-nav">
                  <ul class="nav has-active-border flex-xl-nowrap">
                    <li class="nav-item mr-3 d-none d-lg-block">
                      <!-- searchbox . desktop only -->
                      <div class="d-flex align-items-center h-100">
                        <input type="text" class="pr-475 pl-3 navbar-input radius-2 h-5" placeholder="Search ...">
                        <i class="fa fa-search ml-n425 text-primary-m2"></i>
                      </div>
                    </li>

                    <li class="nav-item dropdown dropdown-mega">
                      <a class="nav-link dropdown-toggle mr-1px" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list-alt mr-2 d-lg-none"></i>
                        Mega
                        <i class="caret fa fa-angle-down d-none d-lg-block"></i>
                        <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                      </a>
                      <div class="dropdown-menu dropdown-animated bgc-default-l4 border-b-2 brc-primary-m3 ml-1 mr-1px w-auto p-0">
                        <div class="d-flex flex-column">

                          <div class="row mx-0">

                            <div class="col-lg-4 col-12 p-2 p-lg-3 p-xl-4 d-flex flex-column align-items-center">
                              <div class="w-100 mb-3">
                                <h5 class="col-lg-9 mx-auto text-dark-m2 px-0">
                                  <i class="fa fa-clipboard-check mr-1 text-purple-m1"></i>
                                  Current Tasks
                                </h5>
                              </div>

                              <div class="col-lg-9 list-group px-0 border-1 brc-default-l2 radius-1 shadow-md">
                                <a href="#" class="border-0 bgc-h-primary-l4 list-group-item list-group-item-action">
                                  <i class="fab fa-facebook text-blue-m1 text-110 mr-2"></i>
                                  Cras justo odio
                                </a>
                                <a href="#" class="border-0 bgc-h-primary-l4 list-group-item list-group-item-action text-primary">
                                  <i class="fa fa-user text-success-m1 text-110 mr-2"></i>
                                  Dapibus ac facilisis in
                                </a>
                                <a href="#" class="border-0 bgc-h-primary-l4 list-group-item list-group-item-action">
                                  <i class="fa fa-clock text-purple-m1 text-110 mr-2"></i>
                                  Morbi leo risus
                                </a>
                                <a href="#" class="border-0 list-group-item list-group-item-action bgc-success-l2">
                                  <i class="fa fa-check text-orange-d1 text-110 mr-2"></i>
                                  Porta ac consectetur
                                  <span class="ml-2 badge badge-primary badge-pill badge-lg">14</span>
                                </a>
                                <a href="#" class="border-0 list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                              </div>
                            </div><!-- .col:mega tasks -->



                            <div class="bgc-white col-lg-4 col-12 p-4">
                              <h5 class="text-dark-m2">
                                <i class="fas fa-bullhorn mr-1 text-primary-m1"></i>
                                Notifications
                              </h5>

                              <div class="mt-3">
                                <div class="media mt-2 px-3 pt-1 border-l-2 brc-purple-m2">
                                  <div class="bgc-purple radius-1 mr-3 p-3">
                                    <i class="fa fa-user text-white text-150"></i>
                                  </div>
                                  <div class="media-body pb-0 mb-0 text-90 text-grey-m1">
                                    <div class="text-grey-d2 font-bolder">@username1</div>
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus...
                                  </div>
                                </div>

                                <hr>

                                <div class="media mt-2 px-3 pt-1 border-l-2 brc-warning-m2">
                                  <div class="bgc-warning radius-1 mr-3 p-3">
                                    <i class="fa fa-user text-white text-150"></i>
                                  </div>
                                  <div class="media-body pb-0 mb-0 text-90 text-grey-m1">
                                    <div class="text-grey-d2 font-bolder">@username2</div>
                                    Fusce dapibus, tellus ac cursus commodo, tortor mauris...
                                  </div>
                                </div>

                                <hr>

                                <div class="media mt-2 px-3 pt-1 border-l-2 brc-success-m2">
                                  <div class="bgc-success radius-1 mr-3 p-3">
                                    <i class="fa fa-user text-white text-150"></i>
                                  </div>
                                  <div class="media-body pb-0 mb-0 text-90 text-grey-m1">
                                    <div class="text-grey-d2 font-bolder">@username3</div>
                                    Tortor mauris condimentum nibh, fusce dapibus...
                                  </div>
                                </div>
                              </div>

                            </div><!-- .col:mega notifications -->


                            <div class="col-lg-4 col-12 p-4 dropdown-clickable">
                              <h5 class="text-dark-m2">
                                <i class="fa fa-envelope mr-1 text-green-m1"></i>
                                Contact Us
                              </h5>

                              <form class="my-3">
                                <div class="form-group mb-2">
                                  <input placeholder="Name" type="text" class="form-control border-l-2">
                                </div>

                                <div class="form-group mb-2">
                                  <input placeholder="Email" type="text" class="form-control border-l-2">
                                </div>

                                <div class="form-group mb-4">
                                  <textarea class="form-control brc-primary-m2 border-l-2 text-grey-d1" rows="3" placeholder="Your message..."></textarea>
                                </div>

                                <div class="text-center">
                                  <button type="reset" class="btn px-3 btn-secondary btn-bold tex1t-110">
                                    Reset
                                  </button>

                                  <button data-dismiss="dropdown" type="button" class="btn btn-outline-primary btn-bgc-white px-3 btn-bold btn-text-slide-x" style="width: 8rem;">
                                    Submit<i class="btn-text-2  move-right fa fa-arrow-right text-120 align-text-bottom ml-1"></i>
                                  </button>
                                </div>
                              </form>
                            </div><!-- .col:mega contact -->

                          </div><!-- .row: mega -->



                          <!-- Big Action Buttons -->
                          <div class="order-first order-lg-last ">
                            <hr class="d-none d-lg-block brc-default-l1 my-0"><!-- border above buttons in desktop mode -->

                            <div class="row mx-0 bgc-primary-l4">
                              <div class="col-lg-8 offset-lg-2 d-flex justify-content-center py-4 d-flex">

                                <button class="mx-2px btn btn-sm btn-app btn-outline-warning btn-h-outline-warning btn-a-outline-warning radius-1 border-2">
                                  <i class="fa fa-cog text-190 d-block mb-2 h-4"></i>
                                  <span class="text-muted">Settings</span>
                                </button>

                                <button class="mx-2px btn btn-sm btn-app btn-outline-info btn-h-outline-info radius-1 border-2">
                                  <i class="fa fa-edit text-190 d-block mb-2 h-4"></i>
                                  Edit
                                  <span class="position-tr text-danger-m2 text-130 mr-1">*</span>
                                </button>

                                <button class="mx-2px btn btn-sm btn-app btn-dark radius-1">
                                  <i class="fa fa-lock text-150 d-block mb-2 h-4"></i>
                                  Lock
                                </button>

                              </div>
                            </div><!-- .row:megamenu big buttons -->

                            <hr class="d-lg-none brc-default-l1 mt-0"><!-- border below buttons in mobile mode -->
                          </div>


                        </div>
                      </div>
                    </li>


                    <li class="nav-item dropdown dropdown-mega">
                      <a class="nav-link dropdown-toggle pl-lg-3 pr-lg-4" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-bell text-110 icon-animated-bell mr-lg-2"></i>
                        <span class="d-inline-block d-lg-none ml-2">Notifications</span>
                        <span id="id-navbar-badge1" class="badge badge-info radius-round text-75">3</span>

                        <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                      </a>

                      <div class="dropdown-menu dropdown-animated dropdown-sm p-0 bgc-white brc-primary-m3 border-b-2 shadow">
                        <ul class="nav nav-tabs nav-tabs-simple w-100 nav-justified dropdown-clickable border-b-1 brc-secondary-l2" role="tablist">
                          <li class="nav-item">
                            <a class="d-style px-0 mx-0 py-3 nav-link active text-600 brc-blue-m1 text-dark-tp5 bgc-h-blue-l4" data-toggle="tab" href="#navbar-notif-tab-1" role="tab">
                              <span class="d-active text-blue-d1 text-105">Notifications</span>
                              <span class="d-n-active">Notifications</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="d-style px-0 mx-0 py-3 nav-link text-600 brc-purple-m1 text-dark-tp5 bgc-h-purple-l4" data-toggle="tab" href="#navbar-notif-tab-2" role="tab">
                              <span class="d-active text-purple-d1 text-105">Messages</span>
                              <span class="d-n-active">Messages</span>
                            </a>
                          </li>
                        </ul><!-- .nav-tabs -->


                        <div class="tab-content tab-sliding p-0">

                          <div class="tab-pane mh-none show active px-md-1 pt-1" id="navbar-notif-tab-1" role="tabpanel">

                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                              <i class="fab fa-twitter bgc-blue-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                              <span class="text-muted">Followers</span>
                              <span class="float-right badge badge-danger radius-round text-80">- 4</span>
                            </a>
                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                              <i class="fa fa-comment bgc-pink-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                              <span class="text-muted">New Comments</span>
                              <span class="float-right badge badge-info radius-round text-80">+12</span>
                            </a>
                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                              <i class="fa fa-shopping-cart bgc-success-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                              <span class="text-muted">New Orders</span>
                              <span class="float-right badge badge-success radius-round text-80">+8</span>
                            </a>
                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                              <i class="far fa-clock bgc-purple-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                              <span class="text-muted">Finished processing data!</span>
                            </a>

                            <hr class="mt-1 mb-1px brc-secondary-l2">
                            <a href="#" class="mb-0 py-3 border-0 list-group-item text-blue-m1 text-uppercase text-center text-85 font-bolder">
                              See All Notifications
                              <i class="ml-2 fa fa-arrow-right text-muted"></i>
                            </a>

                          </div><!-- .tab-pane : notifications -->


                          <div class="tab-pane mh-none pl-md-2" id="navbar-notif-tab-2" role="tabpanel">
                            <div data-ace-scroll='{"ignore": "mobile", "height": 300, "smooth":true}'>
                              <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                <img alt="Alex's avatar" src="../assets/image/avatar/avatar.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round">
                                <div>
                                  <span class="text-primary-m1 font-bolder">Alex:</span>
                                  <span class="text-grey text-90">Ciao sociis natoque penatibus et auctor ...</span>
                                  <br>
                                  <span class="text-grey-m1 text-85">
                                                       <i class="far fa-clock"></i>
                                                       a moment ago
                                                   </span>
                                </div>
                              </a>
                              <hr class="my-1px brc-grey-l3">
                              <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                <img alt="Susan's avatar" src="../assets/image/avatar/avatar3.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round">
                                <div>
                                  <span class="text-primary-m1 font-bolder">Susan:</span>
                                  <span class="text-grey text-90">Vestibulum id ligula porta felis euismod ...</span>
                                  <br>
                                  <span class="text-grey-m1 text-85">
                                                       <i class="far fa-clock"></i>
                                                       20 minutes ago
                                                   </span>
                                </div>
                              </a>
                              <hr class="my-1px brc-grey-l3">
                              <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                <img alt="Bob's avatar" src="../assets/image/avatar/avatar4.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round">
                                <div>
                                  <span class="text-primary-m1 font-bolder">Bob:</span>
                                  <span class="text-grey text-90">Nullam quis risus eget urna mollis ornare ...</span>
                                  <br>
                                  <span class="text-grey-m1 text-85">
                                                       <i class="far fa-clock"></i>
                                                       3:15 pm
                                                   </span>
                                </div>
                              </a>
                              <hr class="my-1px brc-grey-l3">
                              <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                <img alt="Kate's avatar" src="../assets/image/avatar/avatar2.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round">
                                <div>
                                  <span class="text-primary-m1 font-bolder">Kate:</span>
                                  <span class="text-grey text-90">Ciao sociis natoque eget urna mollis ornare ...</span>
                                  <br>
                                  <span class="text-grey-m1 text-85">
                                                       <i class="far fa-clock"></i>
                                                       1:33 pm
                                                   </span>
                                </div>
                              </a>
                              <hr class="my-1px brc-grey-l3">
                              <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                <img alt="Fred's avatar" src="../assets/image/avatar/avatar5.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round">
                                <div>
                                  <span class="text-primary-m1 font-bolder">Fred:</span>
                                  <span class="text-grey text-90">Vestibulum id penatibus et auctor  ...</span>
                                  <br>
                                  <span class="text-grey-m1 text-85">
                                                       <i class="far fa-clock"></i>
                                                       10:09 am
                                                   </span>
                                </div>
                              </a>

                            </div><!-- ace-scroll -->

                            <hr class="my-1px brc-secondary-l2 border-double">
                            <a href="#" class="mb-0 py-3 border-0 list-group-item text-purple-m1 text-uppercase text-center text-85 font-bolder">
                              See All Messages
                              <i class="ml-2 fa fa-arrow-right text-muted"></i>
                            </a>
                          </div><!-- .tab-pane : messages -->

                        </div>
                      </div>
                    </li>


                    <li class="nav-item dropdown order-first order-lg-last">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img id="id-navbar-user-image" class="d-none d-lg-inline-block radius-round border-2 brc-primary-tp4 p-1px mr-2 w-6" src="../assets/image/avatar/avatar3.jpg" alt="Jason's Photo">
                        <span class="d-inline-block d-lg-none d-xl-inline-block">
                                   <span class="text-90" id="id-user-welcome">Welcome,</span>
                        <span class="nav-user-name">Natalie</span>
                        </span>

                        <i class="caret fa fa-angle-down d-none d-xl-block"></i>
                        <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                      </a>

                      <div class="dropdown-menu dropdown-caret dropdown-menu-right dropdown-animated brc-secondary-l1 py-1">
                        <div class="d-none d-lg-block d-xl-none">
                          <div class="dropdown-header">
                            Welcome, Natalie
                          </div>
                          <div class="dropdown-divider"></div>
                        </div>

                        <div class="dropdown-clickable p-3 text-center border-b-1 brc-secondary-l2">
                          <div class="btn-group btn-group-toggle px-2" data-toggle="buttons">
                            <label class="btn px-3 btn-sm btn-light btn-h-lighter-red btn-a-red btn-a-bold btn-a-bb2">
                              <input type="radio" name="options" id="status-offline">
                              OFFLINE
                            </label>
                            <label class="btn px-3 btn-sm btn-light btn-h-lighter-green btn-a-green btn-a-bold btn-a-bb2 active">
                              <input type="radio" name="options" id="status-online" checked="">
                              ONLINE
                            </label>
                          </div>
                        </div>

                        <a class="mt-1 dropdown-item btn btn-outline-grey btn-h-lighter-primary btn-h-bold btn-a-light-primary" href="page-profile.html">
                          <i class="far fa-user text-primary-m1 text-105 mr-1 w-2"></i>
                          Profile
                        </a>

                        <a class="dropdown-item btn btn-outline-grey btn-h-lighter-success btn-h-bold btn-a-light-success" href="#" data-toggle="modal" data-target="#id-ace-settings-modal">
                          <i class="fa fa-sliders-h text-success-m1 text-105 mr-1 w-2"></i>
                          Settings
                        </a>

                        <div class="dropdown-divider brc-secondary-l2"></div>

                        <a class="dropdown-item btn btn-outline-grey btn-h-lighter-orange btn-h-bold btn-a-light-orange" href="page-login.html">
                          <i class="fa fa-power-off text-orange text-105 mr-1 w-2"></i>
                          Logout
                        </a>
                      </div>
                    </li><!-- /.nav-item:last -->



                  </ul>
                </div><!-- .navbar-nav -->

              </div><!-- #navbarMenu -->


            </div><!-- .navbar-inner -->
          </nav>