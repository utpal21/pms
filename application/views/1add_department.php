﻿<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Basic Elements - Ace Admin</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.14.0/css/solid.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/nouislider@14.6.1/distribute/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/css/ion.rangeSlider.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/combine/npm/tiny-date-picker@3.2.8/tiny-date-picker.min.css,npm/tiny-date-picker@3.2.8/date-range-picker.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/eonasdan-bootstrap-datetimepicker@4.17.47/build/css/bootstrap-datetimepicker.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-colorpicker@3.2.0/dist/css/bootstrap-colorpicker.min.css">


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">



    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>dist/css/ace.min.css">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/favicon.png">

    <!-- "Basic Elements" page styles, specific to this page for demo only -->
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


                  <li class="nav-item">

                    <a href="#" class="nav-link dropdown-toggle collapsed">
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

                    <div class="hideable submenu collapse">
                      <ul class="submenu-inner">

                        <li class="nav-item">

                          <a href="tables-basic.html" class="nav-link">

                            <span class="nav-text">
                  				  <span>Basic Tables</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

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


                  <li class="nav-item active open">

                    <a href="#" class="nav-link dropdown-toggle">
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

                    <div class="hideable submenu collapse show">
                      <ul class="submenu-inner">

                        <li class="nav-item active">

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
                      <li class="breadcrumb-item text-secondary text-100">Forms</li>
                      <li class="mx-15 text-grey-l4 text-110">/</li>
                      <li class="breadcrumb-item active text-dark-tp4 text-105 text-600">Basic Elements</li>
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
                <img class="mx-0 radius-round border-2 brc-primary-tp3 p-1px" src="<?php echo base_url();?>assets/image/avatar/avatar3.jpg" width="36" alt="Natalie's Photo">
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
                                <img alt="Alex's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round">
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
                                <img alt="Susan's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar3.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round">
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
                                <img alt="Bob's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar4.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round">
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
                                <img alt="Kate's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar2.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round">
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
                                <img alt="Fred's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar5.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round">
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
                        <img id="id-navbar-user-image" class="d-none d-lg-inline-block radius-round border-2 brc-primary-tp4 p-1px mr-2 w-6" src="<?php echo base_url();?>assets/image/avatar/avatar3.jpg" alt="Jason's Photo">
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
          <div role="main" class="page-content container container-plus">
            <div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="far fa-edit text-dark-l3 mr-1"></i>
                  Text inputs
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
                <form class="mt-lg-3" autocomplete="off">
                  <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-1" class="mb-0">
                        Default field
                      </label>
                    </div>

                    <div class="col-sm-9">
                      <input type="text" class="form-control col-sm-8 col-md-6" id="id-form-field-1">
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-focus-1" class="mb-0">
                        Custom border on focus
                      </label>
                    </div>

                    <div class="col-sm-9">
                      <input type="text" class="form-control brc-on-focus brc-success-m1 col-sm-8 col-md-6" id="id-form-field-focus-1">
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="mb-1 mb-sm-0 col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-2" class="mb-0">
                        Floating placeholder
                      </label>
                    </div>

                    <div class="col-sm-9 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-6 shadow-none" id="id-form-field-2">
                      <span class="floating-label text-grey-m3">
                        Some placeholder
                    </span>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-3" class="mb-0">
                        Password field
                      </label>
                    </div>

                    <div class="col-sm-9">
                      <input type="password" class="form-control brc-on-focus col-sm-8 col-md-6 d-inline-block" placeholder="Password" id="id-form-field-3">
                      <span class="form-text d-inline-block text-95 text-grey ml-sm-2">
                        Inline help text
                    </span>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-password-toggle" class="mb-0">
                        Password toggle
                      </label>
                    </div>

                    <div class="col-sm-9">
                      <div class="d-inline-flex align-items-center">
                        <input type="password" class="form-control form-control-lg pr-5" placeholder="Password" value="mypassword" spellcheck="false" id="id-form-field-password-toggle">
                        <a href="#" id="toggle-password" class="btn btn-sm border-0 btn-white btn-h-light-orange btn-a-light-orange text-125 ml-n5 no-underline radius-1 d-style">
                          <i class="fa fa-eye-slash text-90 d-n-active w-3"></i>
                          <i class="fa fa-eye text-90 d-active w-3"></i>
                        </a>
                      </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-disable-me" class="mb-0">
                        Readonly field
                      </label>
                    </div>

                    <div class="col-sm-9">
                      <input readonly="" id="id-disable-me" type="text" class="form-control col-sm-8 col-md-6 d-inline-block" value="This text field is readonly!">

                      <label class="mt-1 mt-sm-0 ml-sm-3">
                        <input type="checkbox" class="mr-1" id="id-checkbox-disable-it">
                        Disable it!
                      </label>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      Relative sizing
                    </div>

                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-lg col-md-4 d-inline-block mb-1 mb-md-0" placeholder=".form-control-lg">
                      <input type="text" class="form-control col-md-3 d-inline-block mb-1 mb-md-0" placeholder=".form-control">
                      <input type="text" class="form-control form-control-sm col-md-2 d-inline-block" placeholder=".form-control-sm">
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-5" class="mb-0">
                        Input with icon
                      </label>
                    </div>

                    <div class="col-sm-9">
                      <div class="d-inline-flex align-items-center mb-1">
                        <i class="fa fa-leaf text-blue text-125 ml-25 pos-abs"></i>
                        <input type="text" class="form-control form-control-lg px-475" placeholder="Icons" id="id-form-field-5">
                        <i class="fa fa-leaf text-green text-125 ml-n45"></i>
                      </div>

                      <div class="d-inline-flex align-items-center ml-sm-0 mb-1">
                        <i class="fa fa-search text-grey-m1 pos-abs ml-2"></i>
                        <input type="text" class="form-control pl-425" placeholder="Search">
                      </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="tooltip-1" class="mb-0">
                        Tooltip and help popover
                      </label>
                    </div>

                    <div class="col-sm-9">
                      <input id="tooltip-1" type="text" class="form-control col-9 col-md-5 d-inline-block" placeholder="Tooltip on Hover" title="Tooltip on Hover">
                      <span class="form-text d-inline-block ml-2">
                        <button id="popover-1" title="Title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." type="button" class="btn btn-xs btn-info btn-bold brc-white-tp3 shadow-sm radius-round text-125 px-25">?</button>
                    </span>
                    </div>
                  </div>




                  <div class="mt-5 border-t-1 brc-secondary-l2 py-35 mx-n25">
                    <div class="offset-md-3 col-md-9 text-nowrap">
                      <button class="btn btn-info btn-bold px-4" type="button">
                        <i class="fa fa-check mr-1"></i>
                        Submit
                      </button>

                      <button class="btn btn-outline-lightgrey btn-bold ml-2 px-4" type="reset">
                        <i class="fa fa-undo mr-1"></i>
                        Reset
                      </button>
                    </div>
                  </div>
                </form>
              </div><!-- /.card-body -->
            </div><!-- /.card -->




            <form autocomplete="off" class="mt-475">
              <div class="form-group row">
                <div class="col-lg-4">
                  <div class="card bcard h-100">
                    <div class="card-header">
                      <span class="card-title text-125">
                        Text Area
                    </span>
                    </div>

                    <div class="card-body">
                      <div>
                        <textarea class="form-control" id="id-textarea-limit1" maxlength="50" placeholder="50 character limit"></textarea>
                      </div>

                      <div class="mt-3">
                        <textarea class="form-control" id="id-textarea-limit2" maxlength="100" placeholder="100 character limit"></textarea>
                      </div>

                      <hr>

                      <textarea class="form-control" id="id-textarea-autosize" placeholder="Autosize ...&#10;Automatic textarea height" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal;"></textarea>
                    </div>
                  </div><!-- /.card -->
                </div><!-- /.col -->



                <div class="col-lg-4 mt-3 mt-lg-0">
                  <div class="card bcard h-100">
                    <div class="card-header">
                      <span class="card-title text-125">
                        Masked Input
                    </span>
                    </div>

                    <div class="card-body">
                      <label for="form-field-mask-1">
                        Date
                        <small class="text-success">99/99/9999</small>
                      </label>

                      <div class="input-group">
                        <input type="text" class="form-control form-control-lg" id="form-field-mask-1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button">
                            <i class="far fa-calendar mr-1"></i>
                            Go!
                          </button>
                        </div>
                      </div>

                      <hr>

                      <label for="form-field-mask-2">
                        Phone
                        <small class="text-brown">(999) 999-9999</small>
                      </label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" id="form-field-mask-2">
                      </div>

                      <hr>

                      <label for="form-field-mask-3">
                        Product Key
                        <small class="text-muted">a*-999-a999</small>
                      </label>

                      <div class="input-group">
                        <input type="text" class="form-control form-control-lg" id="form-field-mask-3">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                      </div>

                      <hr>

                      <label for="form-field-mask-4">
                        Eye Script
                        <small class="text-success">~9.99 ~9.99 999</small>
                      </label>

                      <div class="input-group input-group-fade">
                        <input type="text" class="form-control form-control-lg" id="form-field-mask-4">
                        <div class="input-group-append">
                          <button class="btn btn-outline-default btn-bold" type="button">Verify</button>
                        </div>
                      </div>

                    </div>
                  </div><!-- /.card -->
                </div><!-- /.col -->



                <div class="col-lg-4 mt-3 mt-lg-0">
                  <div class="card bcard h-100">
                    <div class="card-header">
                      <span class="card-title text-125">
                        Select Box
                    </span>
                    </div>
                    <div class="card-body">

                      <label for="form-field-select-1">
                        Default
                      </label>

                      <select class="form-control" id="form-field-select-1">
                        <option value="">&nbsp;</option>
                        <option value='AL'>Alabama</option>
                        <option value='AK'>Alaska</option>
                        <option value='AZ'>Arizona</option>
                        <option value='AR'>Arkansas</option>
                        <option value='CA'>California</option>
                        <option value='CO'>Colorado</option>
                        <option value='CT'>Connecticut</option>
                        <option value='DE'>Delaware</option>
                        <option value='FL'>Florida</option>
                        <option value='GA'>Georgia</option>
                        <option value='HI'>Hawaii</option>
                        <option value='ID'>Idaho</option>
                        <option value='IL'>Illinois</option>
                        <option value='IN'>Indiana</option>
                        <option value='IA'>Iowa</option>
                        <option value='KS'>Kansas</option>
                        <option value='KY'>Kentucky</option>
                        <option value='LA'>Louisiana</option>
                        <option value='ME'>Maine</option>
                        <option value='MD'>Maryland</option>
                        <option value='MA'>Massachusetts</option>
                        <option value='MI'>Michigan</option>
                        <option value='MN'>Minnesota</option>
                        <option value='MS'>Mississippi</option>
                        <option value='MO'>Missouri</option>
                        <option value='MT'>Montana</option>
                        <option value='NE'>Nebraska</option>
                        <option value='NV'>Nevada</option>
                        <option value='NH'>New Hampshire</option>
                        <option value='NJ'>New Jersey</option>
                        <option value='NM'>New Mexico</option>
                        <option value='NY'>New York</option>
                        <option value='NC'>North Carolina</option>
                        <option value='ND'>North Dakota</option>
                        <option value='OH'>Ohio</option>
                        <option value='OK'>Oklahoma</option>
                        <option value='OR'>Oregon</option>
                        <option value='PA'>Pennsylvania</option>
                        <option value='RI'>Rhode Island</option>
                        <option value='SC'>South Carolina</option>
                        <option value='SD'>South Dakota</option>
                        <option value='TN'>Tennessee</option>
                        <option value='TX'>Texas</option>
                        <option value='UT'>Utah</option>
                        <option value='VT'>Vermont</option>
                        <option value='VA'>Virginia</option>
                        <option value='WA'>Washington</option>
                        <option value='WV'>West Virginia</option>
                        <option value='WI'>Wisconsin</option>
                        <option value='WY'>Wyoming</option>
                      </select>

                      <hr class="border-dotted my-4">

                      <label for="form-field-select-11">
                        Custom Style
                      </label>

                      <select class="ace-select text-dark-m1 bgc-default-l5 bgc-h-warning-l3 brc-default-m3 brc-h-warning-m1" id="form-field-select-11">
                        <option value="">&nbsp;</option>
                        <option value='AL'>Alabama</option>
                        <option value='AK'>Alaska</option>
                        <option value='AZ'>Arizona</option>
                        <option value='AR'>Arkansas</option>
                        <option value='CA'>California</option>
                        <option value='CO'>Colorado</option>
                        <option value='CT'>Connecticut</option>
                        <option value='DE'>Delaware</option>
                        <option value='FL'>Florida</option>
                        <option value='GA'>Georgia</option>
                        <option value='HI'>Hawaii</option>
                        <option value='ID'>Idaho</option>
                        <option value='IL'>Illinois</option>
                        <option value='IN'>Indiana</option>
                        <option value='IA'>Iowa</option>
                        <option value='KS'>Kansas</option>
                        <option value='KY'>Kentucky</option>
                        <option value='LA'>Louisiana</option>
                        <option value='ME'>Maine</option>
                        <option value='MD'>Maryland</option>
                        <option value='MA'>Massachusetts</option>
                        <option value='MI'>Michigan</option>
                        <option value='MN'>Minnesota</option>
                        <option value='MS'>Mississippi</option>
                        <option value='MO'>Missouri</option>
                        <option value='MT'>Montana</option>
                        <option value='NE'>Nebraska</option>
                        <option value='NV'>Nevada</option>
                        <option value='NH'>New Hampshire</option>
                        <option value='NJ'>New Jersey</option>
                        <option value='NM'>New Mexico</option>
                        <option value='NY'>New York</option>
                        <option value='NC'>North Carolina</option>
                        <option value='ND'>North Dakota</option>
                        <option value='OH'>Ohio</option>
                        <option value='OK'>Oklahoma</option>
                        <option value='OR'>Oregon</option>
                        <option value='PA'>Pennsylvania</option>
                        <option value='RI'>Rhode Island</option>
                        <option value='SC'>South Carolina</option>
                        <option value='SD'>South Dakota</option>
                        <option value='TN'>Tennessee</option>
                        <option value='TX'>Texas</option>
                        <option value='UT'>Utah</option>
                        <option value='VT'>Vermont</option>
                        <option value='VA'>Virginia</option>
                        <option value='WA'>Washington</option>
                        <option value='WV'>West Virginia</option>
                        <option value='WI'>Wisconsin</option>
                        <option value='WY'>Wyoming</option>
                      </select>


                      <select class="mt-4 ace-select no-border text-dark-tp2 bgc-grey-l4 bgc-h-success-l3 brc-grey-m4 brc-h-success-m2 radius-round border-1 angle-down" id="form-field-select-22">
                        <option value="">&nbsp;</option>
                        <option value='AL'>Alabama</option>
                        <option value='AK'>Alaska</option>
                        <option value='AZ'>Arizona</option>
                        <option value='AR'>Arkansas</option>
                        <option value='CA'>California</option>
                        <option value='CO'>Colorado</option>
                        <option value='CT'>Connecticut</option>
                        <option value='DE'>Delaware</option>
                        <option value='FL'>Florida</option>
                        <option value='GA'>Georgia</option>
                        <option value='HI'>Hawaii</option>
                        <option value='ID'>Idaho</option>
                        <option value='IL'>Illinois</option>
                        <option value='IN'>Indiana</option>
                        <option value='IA'>Iowa</option>
                        <option value='KS'>Kansas</option>
                        <option value='KY'>Kentucky</option>
                        <option value='LA'>Louisiana</option>
                        <option value='ME'>Maine</option>
                        <option value='MD'>Maryland</option>
                        <option value='MA'>Massachusetts</option>
                        <option value='MI'>Michigan</option>
                        <option value='MN'>Minnesota</option>
                        <option value='MS'>Mississippi</option>
                        <option value='MO'>Missouri</option>
                        <option value='MT'>Montana</option>
                        <option value='NE'>Nebraska</option>
                        <option value='NV'>Nevada</option>
                        <option value='NH'>New Hampshire</option>
                        <option value='NJ'>New Jersey</option>
                        <option value='NM'>New Mexico</option>
                        <option value='NY'>New York</option>
                        <option value='NC'>North Carolina</option>
                        <option value='ND'>North Dakota</option>
                        <option value='OH'>Ohio</option>
                        <option value='OK'>Oklahoma</option>
                        <option value='OR'>Oregon</option>
                        <option value='PA'>Pennsylvania</option>
                        <option value='RI'>Rhode Island</option>
                        <option value='SC'>South Carolina</option>
                        <option value='SD'>South Dakota</option>
                        <option value='TN'>Tennessee</option>
                        <option value='TX'>Texas</option>
                        <option value='UT'>Utah</option>
                        <option value='VT'>Vermont</option>
                        <option value='VA'>Virginia</option>
                        <option value='WA'>Washington</option>
                        <option value='WV'>West Virginia</option>
                        <option value='WI'>Wisconsin</option>
                        <option value='WY'>Wyoming</option>
                      </select>


                      <select class="mt-4 ace-select no-border caret-double text-dark-tp3 bgc-success-l3 bgc-h-success-l2 radius-2 border-0" id="form-field-select-33">
                        <option value="">&nbsp;</option>
                        <option value='AL'>Alabama</option>
                        <option value='AK'>Alaska</option>
                        <option value='AZ'>Arizona</option>
                        <option value='AR'>Arkansas</option>
                        <option value='CA'>California</option>
                        <option value='CO'>Colorado</option>
                        <option value='CT'>Connecticut</option>
                        <option value='DE'>Delaware</option>
                        <option value='FL'>Florida</option>
                        <option value='GA'>Georgia</option>
                        <option value='HI'>Hawaii</option>
                        <option value='ID'>Idaho</option>
                        <option value='IL'>Illinois</option>
                        <option value='IN'>Indiana</option>
                        <option value='IA'>Iowa</option>
                        <option value='KS'>Kansas</option>
                        <option value='KY'>Kentucky</option>
                        <option value='LA'>Louisiana</option>
                        <option value='ME'>Maine</option>
                        <option value='MD'>Maryland</option>
                        <option value='MA'>Massachusetts</option>
                        <option value='MI'>Michigan</option>
                        <option value='MN'>Minnesota</option>
                        <option value='MS'>Mississippi</option>
                        <option value='MO'>Missouri</option>
                        <option value='MT'>Montana</option>
                        <option value='NE'>Nebraska</option>
                        <option value='NV'>Nevada</option>
                        <option value='NH'>New Hampshire</option>
                        <option value='NJ'>New Jersey</option>
                        <option value='NM'>New Mexico</option>
                        <option value='NY'>New York</option>
                        <option value='NC'>North Carolina</option>
                        <option value='ND'>North Dakota</option>
                        <option value='OH'>Ohio</option>
                        <option value='OK'>Oklahoma</option>
                        <option value='OR'>Oregon</option>
                        <option value='PA'>Pennsylvania</option>
                        <option value='RI'>Rhode Island</option>
                        <option value='SC'>South Carolina</option>
                        <option value='SD'>South Dakota</option>
                        <option value='TN'>Tennessee</option>
                        <option value='TX'>Texas</option>
                        <option value='UT'>Utah</option>
                        <option value='VT'>Vermont</option>
                        <option value='VA'>Virginia</option>
                        <option value='WA'>Washington</option>
                        <option value='WV'>West Virginia</option>
                        <option value='WI'>Wisconsin</option>
                        <option value='WY'>Wyoming</option>
                      </select>


                      <select class="mt-4 ace-select no-border angle-double text-dark-tp3 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 border-2 brc-secondary-l1" id="form-field-select-44">
                        <option value='AL'>Alabama</option>
                        <option value='AK'>Alaska</option>
                        <option value='AZ'>Arizona</option>
                        <option value='AR'>Arkansas</option>
                        <option value='CA'>California</option>
                        <option value='CO'>Colorado</option>
                        <option value='CT'>Connecticut</option>
                        <option value='DE'>Delaware</option>
                        <option value='FL'>Florida</option>
                        <option value='GA'>Georgia</option>
                        <option value='HI'>Hawaii</option>
                        <option value='ID'>Idaho</option>
                        <option value='IL'>Illinois</option>
                        <option value='IN'>Indiana</option>
                        <option value='IA'>Iowa</option>
                        <option value='KS'>Kansas</option>
                        <option value='KY'>Kentucky</option>
                        <option value='LA'>Louisiana</option>
                        <option value='ME'>Maine</option>
                        <option value='MD'>Maryland</option>
                        <option value='MA'>Massachusetts</option>
                        <option value='MI'>Michigan</option>
                        <option value='MN'>Minnesota</option>
                        <option value='MS'>Mississippi</option>
                        <option value='MO'>Missouri</option>
                        <option value='MT'>Montana</option>
                        <option value='NE'>Nebraska</option>
                        <option value='NV'>Nevada</option>
                        <option value='NH'>New Hampshire</option>
                        <option value='NJ'>New Jersey</option>
                        <option value='NM'>New Mexico</option>
                        <option value='NY'>New York</option>
                        <option value='NC'>North Carolina</option>
                        <option value='ND'>North Dakota</option>
                        <option value='OH'>Ohio</option>
                        <option value='OK'>Oklahoma</option>
                        <option value='OR'>Oregon</option>
                        <option value='PA'>Pennsylvania</option>
                        <option value='RI'>Rhode Island</option>
                        <option value='SC'>South Carolina</option>
                        <option value='SD'>South Dakota</option>
                        <option value='TN'>Tennessee</option>
                        <option value='TX'>Texas</option>
                        <option value='UT'>Utah</option>
                        <option value='VT'>Vermont</option>
                        <option value='VA'>Virginia</option>
                        <option value='WA'>Washington</option>
                        <option value='WV'>West Virginia</option>
                        <option value='WI'>Wisconsin</option>
                        <option value='WY'>Wyoming</option>
                      </select>
                    </div>
                  </div><!-- /.card -->
                </div><!-- /.col -->
              </div><!-- /.row -->




              <!-- Checkbox and Radio -->
              <h4 class="text-primary-d1 mt-45 mb-3 text-140">
                Checkbox &amp; Radio
                <small class="text-75 text-grey-d1">
                  Custom styles
                </small>
              </h4>

              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="card bcard h-100">
                    <div class="card-body">
                      <div class="mb-1">
                        <label>
                          <input type="checkbox" class="mr-2">
                          Choice Default
                        </label>
                      </div>


                      <div class="mb-1">
                        <label class="radius-round ml-n2 pl-2 pr-1 pt-1 pb-2 bgc-h-success-l1">
                          <input type="checkbox" class="text-green-m1" id="id-check-success">
                        </label>
                        <label for="id-check-success">Choice Success <small>(with highlight)</small></label>
                      </div>


                      <div class="mb-1">
                        <label class="p-2 ml-n2 bgc-h-orange-l2 radius-1">
                          <input type="checkbox" class="bgc-danger brc-h-danger-m1 mr-2">
                          Choice Danger
                        </label>
                      </div>


                      <div class="mb-1">
                        <label class="text-600 text-uppercase text-95 text-secondary">
                          <input type="checkbox" class="input-lg text-danger-m2 brc-on-checked brc-success-m1 brc-h-success-m1 border-2 mr-15">
                          Choice Bold
                        </label>
                      </div>


                      <div class="mb-1">
                        <label>
                          <input type="checkbox" class="align-middle input-sm text-pink mr-25" checked="">
                          <span class="align-middle">Choice Small</span>
                        </label>
                      </div>


                      <div class="mb-1">
                        <label>
                          <input type="checkbox" class="input-lg bgc-blue" checked="">
                          Choice Large
                        </label>
                      </div>


                      <div class="mb-1">
                        <label>
                          <input type="checkbox" class="input-xlg text-purple" checked="">
                          And Larger
                        </label>
                      </div>


                      <div class="mb-1">
                        <label class="disabled text-grey-m1">
                          <input type="checkbox" class="input-lg text-purple" checked="" disabled="">
                          Disabled
                        </label>
                      </div>


                      <label class="brc-dark-l1 mb-0 d-flex align-items-center">
                        <input type="checkbox" class="radius-round input-lg text-90 text-center text-green brc-on-checked brc-dark-m3 brc-h-orange-m1">
                        <span class="ml-15">
                            Rounded
                        </span>
                      </label>
                    </div><!-- /.card-body -->
                  </div><!-- /.card -->
                </div><!-- /.col -->


                <div class="col-md-6 col-12">
                  <div class="card bcard h-100">
                    <div class="card-body">
                      <div class="mb-1">
                        <label>
                          <input type="radio" name="option" class="mr-1">
                          Option Default
                        </label>
                      </div>


                      <div class="mb-1">
                        <label>
                          <input type="radio" name="option" class="text-green-m1">
                          Option Success
                        </label>
                      </div>


                      <div class="mb-1">
                        <label>
                          <input type="radio" name="option" class="bgc-danger brc-h-danger-m1">
                          Option Danger
                        </label>
                      </div>


                      <div class="mb-1">
                        <label class="text-600 text-uppercase text-95 text-secondary">
                          <input type="radio" name="option" class="input-lg text-danger-m2 brc-on-checked brc-success brc-h-success-m1 border-2">
                          Option Bold
                        </label>
                      </div>


                      <div class="mb-1">
                        <label>
                          <input type="radio" name="option" class="input-sm text-pink mr-2">
                          <span class="align-middle">Option Small</span>
                        </label>
                      </div>


                      <div class="mb-1">
                        <label>
                          <input type="radio" name="option" class="input-lg bgc-blue">
                          Option Large
                        </label>
                      </div>


                      <div class="mb-1">
                        <label>
                          <input type="radio" name="option" class="input-xlg text-purple">
                          Larger
                        </label>
                      </div>


                      <div class="mb-1">
                        <label class="disabled text-grey-m1">
                          <input type="radio" name="option" class="input-lg text-purple" disabled="">
                          Disabled
                        </label>
                      </div>
                    </div><!-- /.card-body -->
                  </div><!-- /.card -->
                </div><!-- /.col -->
              </div><!-- /.row -->


              <!-- toggle buttons - on/off switches -->
              <div class="card bcard my-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-3 text-left text-md-right text-115">
                      On/Off Switches
                      <div class="text-grey-m1 text-85">Not supported on older browsers</div>
                    </div>

                    <div class="col-12 col-md-9">
                      <input type="checkbox" class="ace-switch">

                      <input type="checkbox" class="ace-switch " disabled="" checked="">

                      <input type="checkbox" class="ace-switch input-sm">

                      <input type="checkbox" class="ace-switch input-lg">

                      <input type="checkbox" class="ace-switch input-lg ace-switch-yesno bgc-purple-d1 text-grey-m2" checked="">

                      <input type="checkbox" class="ace-switch input-lg ace-switch-onoff bgc-blue-d2 text-grey-m3 radius-1">

                      <input type="checkbox" class="ace-switch input-lg ace-switch-bars-h ace-switch-check ace-switch-times text-grey-l2 bgc-orange-d2 radius-2px" checked="">

                      <input type="checkbox" class="ace-switch input-lg ace-switch-bars bgc-success-d2">

                      <input type="checkbox" class="ace-switch input-lg text-grey-l1 brc-primary-d1">

                      <div class="h-2"></div>

                      <label>
                        <input type="checkbox" class="ace-switch ace-switch-thin">
                      </label>

                      <label>
                        <input type="checkbox" class="ace-switch ace-switch-thin text-grey-l1 bgc-pink-d1">
                      </label>

                      <label class="text-orange-d3 text-600">
                        <input type="checkbox" class="ace-switch ace-switch-thin text-grey-l1 bgc-warning-d2 mr-1">
                        Label
                      </label>
                    </div>
                  </div><!-- /.row -->
                </div>
              </div><!-- /.card -->



              <div class="row mt-475">
                <!-- Custom file input -->
                <div class="col-12 col-md-4 mt-3 mt-md-0">
                  <div class="card bcard h-100">
                    <div class="card-header">
                      <h5 class="card-title text-orange-d4">
                        Custom File Input
                      </h5>
                    </div>

                    <div class="card-body">
                      <div>
                        <input type="file" class="ace-file-input" id="ace-file-input1">
                      </div>

                      <div class="mt-4">
                        <input type="file" class="ace-file-input" id="ace-file-input2" multiple="">
                      </div>
                    </div>
                  </div>
                </div><!-- /.col -->


                <!-- Range sliders -->
                <div class="col-12 col-md-4 mt-3 mt-md-0">
                  <div class="card bcard h-100">
                    <div class="card-header">
                      <h5 class="card-title text-blue-d2">
                        Range Sliders
                      </h5>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-2">
                          <!-- vertical slider -->
                          <div id="id-slider-1" class="noUi-toggle-tooltip slider-sm slider-tooltip-right slider-tooltip-caret"></div>
                        </div>

                        <div class="col-10">
                          <div id="id-slider-2" class="noUi-toggle-tooltip mb-5 slider-thin"></div>

                          <div id="id-slider-3" class="noUi-toggle-tooltip my-5"></div>

                          <div id="id-slider-4" class="noUi-toggle-tooltip slider-sm my-5"></div>

                          <div id="id-slider-5" class="noUi-toggle-tooltip my-5 slider-thin"></div>

                          <div class="mt-5 mb-2">
                            <!-- ionSlider -->
                            <input type="text" id="id-ionslider-1" name="slider-1" value="">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div><!-- /.col -->


                <!-- Input spinner -->
                <div class="col-12 col-md-4 mt-3 mt-md-0">
                  <div class="card bcard h-100">
                    <div class="card-header">
                      <h5 class="card-title text-purple-d3">
                        Input Spinner
                      </h5>
                    </div>

                    <div class="card-body">
                      <input class="form-control form-control-lg" id="id-spinner-1" type="text" value="55" name="id-spinner-1">

                      <hr>

                      <input class="form-control btn-group-inside-spinner form-control-lg" id="id-spinner-2" type="text" value="" name="id-spinner-2">

                      <hr>

                      <div class="w-50">
                        <input class="form-control text-center" id="id-spinner-3" type="text" value="" name="id-spinner-3">
                      </div>
                    </div>
                  </div>
                </div><!-- /.col -->
              </div><!-- /.row -->





              <div class="row mt-475">
                <!-- Date picker -->
                <div class="col-12 col-md-4 mt-3 mt-md-0">
                  <div class="card bcard h-100">
                    <div class="card-header">
                      <span class="text-primary-d2 text-120">Date/Range Picker</span>
                    </div>

                    <div class="card-body">
                      <!-- Tinydate picker plugin -->
                      <div class="form-field">
                        <div class="pos-rel">
                          <input type="text" class="form-control" id="id-date-1">

                          <input placeholder="modal mode..." type="text" class="form-control mt-25" id="id-date-2">

                          <input type="text" class="form-control mt-25" id="id-date-3" placeholder="Native datepicker on small devices ...">
                        </div>
                      </div>


                      <hr class="border-dotted my-35">


                      <div id="id-daterange-wrapper" class="pos-rel">
                        <!-- daterange -->
                        <div class="form-row">
                          <div class="col">
                            <input id="id-daterange-from" class="form-control ex-inputs-start" placeholder="From date">
                          </div>

                          <div class="text-grey-l2">_</div>

                          <div class="col">
                            <input id="id-daterange-to" class="form-control ex-inputs-end" placeholder="To date">
                          </div>
                        </div>

                        <div id="id-daterange-container" class="dp-daterange-picker dp-daterange-above"></div>
                      </div>


                      <hr class="border-dotted my-35">

                      <!-- Datetime picker plugin -->
                      <div>
                        <div class="form-group">
                          <label for="id_time_el" class="text-secondary-d3">Date/Time picker:</label>
                          <div class="input-group date" id="id-timepicker">
                            <input type="text" name="end_time" value="05:12:00" class="form-control" id="id_time_el">
                            <div class="input-group-addon input-group-append">
                              <div class="input-group-text">
                                <i class="far fa-clock"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!-- Custom time picker -->
                      <div class="mt-3">
                        <div class="form-group">
                          <a href="#" class="btn btn-outline-info border-2" id="id-popover-timepicker">Time picker inside popover</a>

                          <div id="id-popover-timepicker-html" class="d-none">
                            <!-- it's a hidden element, and the html content of it will be shown inside popover -->
                            <div class="d-flex">
                              <select class="mx-1 pl-3 no-border caret-double ace-select border-2 radius-1 brc-default-l1 brc-h-default-m2 bgc-default-l4 text-secondary-d2 text-600 text-110" style="width: 5rem;">
                                <option selected="">H</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                              </select>

                              <span class="text-600 text-150">:</span>

                              <select class="mx-1 pl-3 no-border caret-double ace-select border-2 radius-1 brc-default-l1 brc-h-default-m2 bgc-default-l4 text-secondary-d2 text-600 text-110" style="width: 5rem;">
                                <option selected="">M</option>
                                <option>00</option>
                                <option>05</option>
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                                <option>30</option>
                                <option>35</option>
                                <option>40</option>
                                <option>45</option>
                                <option>50</option>
                                <option>55</option>
                              </select>

                              <div class="mx-1 btn-group btn-group-toggle" data-toggle="buttons">
                                <div role="button" class="btn btn-bold radius-1 px-25 py-2 text-95 btn-light-blue btn-a-light-primary d-style">
                                  <input type="checkbox" value="1">
                                  <span class="d-n-active">AM</span>
                                  <span class="d-active">PM</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- /.form-group -->
                      </div>

                    </div><!-- /.card-body -->
                  </div><!-- /.card -->
                </div><!-- /.col -->


                <!-- Color picker -->
                <div class="col-12 col-md-4 mt-3 mt-md-0">
                  <div class="card bcard h-100">
                    <div class="card-header">
                      <span class="text-primary-d2 text-120">
                        Color Picker
                    </span>
                    </div>

                    <div class="card-body">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text border-0 radius-0" id="id-color-picker-1-update"></span>
                        </div>
                        <input type="text" class="form-control" id="id-color-picker-1">
                      </div>

                      <hr class="my-4">

                      <div>
                        <div id="color-picker-container"></div>
                      </div>
                    </div>
                  </div>
                </div><!-- /.col -->


                <!-- knob -->
                <div class="col-12 col-md-4 mt-3 mt-md-0">
                  <div class="card bcard h-100">
                    <div class="card-header">
                      <span class="text-primary-d2 text-120">Knob Input</span>
                    </div>

                    <div class="card-body">

                      <div class="row">
                        <div class="col-6 text-center pos-rel">
                          <input type="text" class="knob border-0 mw-100 position-center m-auto" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" data-fgcolor="rgb(55, 149, 218)">
                        </div>

                        <div class="col-6 text-center pos-rel">
                          <input type="text" class="knob border-0 mw-100 position-center m-auto" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgcolor="#629A58" data-displayprevious="true" data-anglearc="250" data-angleoffset="-125">
                        </div>
                      </div>

                      <div class="row mt-3">
                        <div class="col-12 text-center pos-rel">
                          <input type="text" class="knob border-0 mw-100 position-center m-auto" value="1" data-min="0" data-max="10" data-width="150" data-height="150" data-thickness=".2" data-fgcolor="#94645C" data-angleoffset="90" data-cursor="true">
                        </div>
                      </div>

                    </div>
                  </div>
                </div><!-- /.col -->
              </div><!-- /.row -->

            </form>
          </div>

          <!-- this footer is shown in device width above `sm` -->
          <footer class="footer d-none d-sm-block">
            <div class="footer-inner">
              <div class="h-100 pt-3 border-t-1 brc-secondary-l2 bgc-white-tp1 shadow">
                <span class="text-primary-m1 font-bolder text-120">Ace</span>
                <span class="text-secondary-d2">Application &copy; 2020</span>

                <span class="mx-3 action-buttons">
                       <a href="#" class="text-blue-m2 text-140"><i class="fab fa-twitter-square"></i></a>
                       <a href="#" class="text-blue-d2 text-140"><i class="fab fa-facebook"></i></a>
                       <a href="#" class="text-orange-d1 text-140"><i class="fa fa-rss-square"></i></a>
                    </span>
              </div>
            </div><!-- .footer-inner -->
          </footer>


          <!-- scroll to top button -->
          <div class="footer-tools mb-5 mb-sm-0">
            <a id="btn-scroll-up" href="#" class="btn-scroll-up btn btn-white brc-black-tp6 px-25 py-2 text-95 border-2 radius-round mb-25 mr-2">
              <i class="fa fa-angle-double-up w-2 h-2"></i>
            </a>
          </div>


          <!-- this footer is shown in mobile devices below `sm` -->
          <footer class="d-sm-none footer footer-sm footer-fixed">
            <div class="footer-inner">
              <div class="btn-group d-flex justify-content-between h-100 px-2 py-2px bgc-white shadow-lg border-t-1 brc-secondary-l2">

                <button class="d-style btn btn-white btn-h-light-primary btn-a-outline-primary btn-a-bold active border-0 radius-1 px-25 mx-1">
                  <span class="pos-rel">
                       <i class="fa fa-home text-120 opacity-1 mr-2px"></i>
                       Home
                       <span class="d-active position-tl mt-n3 w-100 border-t-3 radius-2 brc-primary-m1"></span>
                  </span>
                </button>

                <button class="btn btn-outline-lightgrey btn-h-light-primary btn-a-lighter-primary border-0 radius-1" data-toggle="modal" data-target="#id-ace-settings-modal">
                  <i class="fa fa-cog text-120"></i>
                </button>

                <button data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navbar search" class="btn btn-outline-lightgrey btn-h-light-primary btn-a-lighter-primary border-0 radius-1">
                  <i class="fa fa-search text-120"></i>
                </button>

                <button class="btn btn-outline-lightgrey btn-h-light-primary btn-a-lighter-primary border-0 radius-1">
                  <span class="pos-rel">
                       <i class="fa fa-bell text-120"></i>
                       <span class="badge badge-dot bgc-red position-tr mt-n1 mr-n2px"></span>
                  </span>
                </button>

              </div>
            </div>
          </footer>
        </div>

        <div id="id-ace-settings-modal" class="my-1 my-lg-2 modal modal-nb ace-aside aside-right aside-offset aside-below-nav" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">

          <div class="modal-dialog" role="document">
            <div class="modal-content w-auto flex-grow-1 pb-1px radius-0 radius-l-2 border-y-2 border-l-1 brc-default-m3 bgc-white-tp1 shadow">

              <div class="modal-header p-0 radius-0 mx-3">
                <h4 class="modal-title text-primary-d1 text-140 pt-2 pl-1">Demo Settings</h4>

                <button type="button" class="close m-0 mr-n2" data-dismiss="modal" aria-label="Close">
                  <i class="fa fa-times text-70" aria-hidden="true"></i>
                </button>
              </div>

              <div class="modal-body mx-md-2" data-ace-scroll='{"smooth": true, "lock": true}'>
                <form autocomplete="off">
                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                    <h5 class="text-default-d2">
                      Zoom
                    </h5>

                    <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                        90%
                        <input type="radio" name="zoom-level" value="90">
                      </label>

                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary active">
                        100%
                        <input type="radio" name="zoom-level" value="none" checked="">
                      </label>

                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                        110%
                        <input type="radio" name="zoom-level" value="110">
                      </label>

                      <label class="btn btn-sm btn-lighter-grey btn-h-light-primary btn-a-primary">
                        120%
                        <input type="radio" name="zoom-level" value="120">
                      </label>
                    </div>
                  </div>


                  <hr class="border-double my-md-3">


                  <h5 class="text-purple-d1">
                    Themes
                  </h5>

                  <div id="auto-match-div" class="d-none bgc-secondary-l4 py-1 radius-1 mb-3 border-1 radius-1 border-l-3 brc-secondary-m4">
                    <label class="mt-1 pr-2 d-flex align-items-center" for="id-auto-match">
                      <input type="checkbox" class="input-lg mx-15" id="id-auto-match">

                      <span class="pl-0 text-secondary-d1 text-90 font-bolder">
                        Match sidebar & navbar themes
                      </span>
                    </label>
                  </div>


                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center mt-3">
                    <h6 class="text-95 pl-1 text-grey-d1">Sidebar</h6>

                    <div class="btn-group btn-group-toggle align-self-end flex-wrap px-0  col-10 col-sm-7" data-toggle="buttons">
                      <label class="btn btn-sm btn-light-default btn-text-default btn-bgc-white btn-a-default btn-h-default">
                        Dark
                        <input type="radio" name="sidebar-theme" value="dark">
                      </label>

                      <label class="btn btn-sm btn-light-default btn-text-default btn-bgc-white btn-a-default btn-h-default">
                        Light
                        <input type="radio" name="sidebar-theme" value="light">
                      </label>
                    </div>
                  </div>



                  <div>
                    <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-sidebar-themes-dark">
                      <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">
                        <label class="btn btn-xs sidebar-color border-0 sidebar-dark d-style active m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="dark" checked="">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-dark2 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="dark2">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkblue">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkslategrey d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkslategrey">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-cadetblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="cadetblue">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-plum d-style my-1px m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="plum">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkslateblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkslateblue">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-purple d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="purple">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-steelblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="steelblue">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-blue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="blue">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-teal d-style m-1px d-none">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="teal">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-green d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="green">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkcrimson d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="darkcrimson">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient1 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient1">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient2 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient2">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient3 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient3">
                        </label>

                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient4 d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="sidebar-dark" value="gradient4">
                        </label>

                        <!--
                      <label class="btn btn-xs sidebar-color border-0 sidebar-gradient5 d-style m-1px d-none">
                        <i class="fa fa-check text-white v-active"></i>
                        <input type="radio" name="sidebar-dark" value="gradient5"  />
                      </label>
                      -->

                      </div>
                    </div><!-- #id-sidebar-themes-dark -->


                    <div class="d-none" id="id-sidebar-themes-light">
                      <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                        <div class="d-flex btn-group btn-group-toggle align-self-end flex-wrap justify-content-center mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                          <label class="active btn btn-xs border-0 sidebar-white2 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white" checked="">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-white2 d-style m-1px d-none">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white2">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-white3 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white3">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-white4 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="white4">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-light d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="light">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-lightblue d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="lightblue">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-lightblue2 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="lightblue2">
                          </label>

                          <label class="btn btn-xs border-0 sidebar-lightpurple d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="sidebar-light" value="lightpurple">
                          </label>


                        </div>
                      </div>
                    </div><!-- #id-sidebar-themes-light -->

                  </div>

                  <hr class="border-dotted">

                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                    <h6 class="text-95 pl-1 text-grey-d1">Navbar</h6>

                    <div id="navbar-themes-show" class="d-none btn-group btn-group-toggle align-self-end flex-wrap px-0 col-10 col-sm-7" data-toggle="buttons">
                      <label class="btn btn-sm btn-light-green btn-text-green btn-bgc-white btn-a-green btn-h-green">
                        Light
                        <input type="radio" name="navbar-theme" value="light">
                      </label>

                      <label class="btn btn-sm btn-light-green btn-text-green btn-bgc-white btn-a-green btn-h-green">
                        Dark
                        <input type="radio" name="navbar-theme" value="dark">
                      </label>
                    </div>

                    <div id="navbar-themes-show-msg" class="text-95 px-3 py-15 bgc-secondary-l3 border-1 brc-secondary-m4 border-dotted ml-3 radius-1">
                      Navbar themes can be viewed in<br> <span>Dashboard <a class="btn-h-dark no-underline px-2px" href="dashboard-3.html">3</a> & <a class="btn-h-dark no-underline px-2px" href="dashboard-4.html">4</a></span>
                    </div>

                  </div>

                  <div>
                    <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-navbar-themes-dark">
                      <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                        <label class="btn btn-xs border-0 navbar-blue d-style active m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="blue" checked="">
                        </label>

                        <label class="btn btn-xs border-0 navbar-darkblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="darkblue">
                        </label>

                        <label class="btn btn-xs border-0 navbar-teal d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="teal">
                        </label>

                        <label class="btn btn-xs border-0 navbar-green d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="green">
                        </label>

                        <label class="btn btn-xs border-0 navbar-cadetblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="cadetblue">
                        </label>



                        <label class="btn btn-xs border-0 navbar-plum d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="plum">
                        </label>

                        <label class="btn btn-xs border-0 navbar-purple d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="purple">
                        </label>

                        <label class="btn btn-xs border-0 navbar-orange d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="orange">
                        </label>


                        <label class="btn btn-xs border-0 navbar-brown d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="brown">
                        </label>

                        <label class="btn btn-xs border-0 navbar-darkgreen d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="darkgreen">
                        </label>

                        <label class="btn btn-xs border-0 navbar-skyblue d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="skyblue">
                        </label>

                        <label class="btn btn-xs border-0 navbar-secondary d-style m-1px">
                          <i class="fa fa-check text-white v-active"></i>
                          <input type="radio" name="navbar-dark" value="secondary">
                        </label>

                      </div>
                    </div><!-- #id-navbar-themes-dark -->

                    <div class="d-none" id="id-navbar-themes-light">
                      <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                        <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                          <label class="active btn btn-xs border-0 navbar-white d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="white" checked="">
                          </label>

                          <label class="btn btn-xs border-0 navbar-white2 d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="white2">
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightblue d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightblue">
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightpurple d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightpurple">
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightgreen d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightgreen">
                          </label>

                          <label class="btn btn-xs border-0 navbar-lightgrey d-style m-1px">
                            <i class="fa fa-check text-muted v-active"></i>
                            <input type="radio" name="navbar-light" value="lightgrey">
                          </label>

                          <!--
                        <label class="btn btn-xs border-0 navbar-lightyellow d-style m-1px">
                          <i class="fa fa-check text-muted v-active"></i>
                          <input type="radio" name="navbar-light" value="lightyellow"  />
                        </label>
        
                        <label class="btn btn-xs border-0 navbar-khaki d-style m-1px">
                          <i class="fa fa-check text-muted v-active"></i>
                          <input type="radio" name="navbar-light" value="khaki"  />
                        </label>
                        -->

                        </div>
                      </div>

                    </div><!-- #id-navbar-themes-light -->

                  </div>


                  <hr class="border-dotted">


                  <div class="text-95">
                    <h5 class="text-success">Layout</h5>

                    <div class="mt-3 d-flex justify-content-between align-items-center">
                      <label for="id-navbar-fixed" class="pl-1 text-grey-d1">Fixed Navbar</label>
                      <input type="checkbox" class="ace-switch" id="id-navbar-fixed" checked="">
                    </div>

                    <div class="mt-2 d-flex justify-content-between align-items-center">
                      <label for="id-sidebar-fixed" class="pl-1 text-grey-d1">Fixed Sidebar</label>
                      <input type="checkbox" class="ace-switch" id="id-sidebar-fixed" checked="">
                    </div>

                    <div class="mt-2 d-flex justify-content-between align-items-center">
                      <label for="id-footer-fixed" class="pl-1 text-grey-d1">Fixed Footer</label>
                      <input type="checkbox" class="ace-switch" id="id-footer-fixed">
                    </div>

                    <div class="mt-2 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                      <div class="pl-1 text-grey-d1">Boxed Layout</div>

                      <div class="w-50 btn-group btn-group-toggle flex-row flex-wrap fl1ex-md-nowrap" data-toggle="buttons">
                        <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                          None
                          <input type="radio" name="boxed-layout" value="none">
                        </label>

                        <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                          All
                          <input type="radio" name="boxed-layout" value="all">
                        </label>

                        <label class="d-none btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary">
                          Not Navbar
                          <input type="radio" name="boxed-layout" value="not-navbar">
                        </label>

                        <label class="btn btn-sm btn-light-primary btn-bgc-white btn-text-primary btn-h-primary btn-a-primary active">
                          Only Content
                          <input type="radio" name="boxed-layout" value="only-content" checked="">
                        </label>
                      </div>
                    </div>

                    <div id="id-body-bg" class="collapse">
                      <div class="mt-3 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                        <h6 class="text-95 pl-1 text-grey-d1">Body Background:</h6>

                        <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                          <label class="btn btn-sm btn-outline-purple active  mb-1">
                            None
                            <input type="radio" name="body-theme" value="auto" checked="">
                          </label>

                          <label class="btn btn-sm btn-outline-purple mb-1">
                            Image 1
                            <input type="radio" name="body-theme" value="img1">
                          </label>

                          <label class="btn btn-sm btn-outline-purple mb-1">
                            Image 2
                            <input type="radio" name="body-theme" value="img2">
                          </label>
                        </div>
                      </div>
                    </div>



                    <hr class="border-dotted my-2">

                    <div class="mt-1 d-flex justify-content-between align-items-center">
                      <label for="id-rtl" class="pl-1 text-grey-d1">RTL (right to left)</label>

                      <input type="checkbox" class="ace-switch" id="id-rtl">
                    </div>


                  </div>

                  <hr class="border-double my-md-4">

                  <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                    <h5 class="text-info">Font</h5>

                    <div class="align-self-end w-75">
                      <select id="id-change-font" class="ace-select radius-round w-100 text-grey brc-h-info-m2">
                        <option value="lato">Lato</option>
                        <option value="manrope">Manrope</option>
                        <option value="montserrat">Montserrat</option>
                        <option value="noto-sans">Noto Sans</option>
                        <option value="open-sans" selected="">Open Sans</option>
                        <option value="poppins">Poppins</option>
                        <option value="raleway">Raleway</option>
                        <option value="roboto" class="text-primary-d2 text-600">Roboto (popular)</option>
                        <option value="">----</option>
                        <option value="markazi">Markazi (for RTL languages)</option>
                      </select>
                    </div>
                  </div>


                  <hr class="border-double my-md-4">

                  <div class="text-95">
                    <h5 class="text-orange-d2 ml-n2px">Sidebar</h5>
                    <!--
                  <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                      <label for="id-sidebar-compact" class="pl-1 text-grey-d2">Compact</label>
        
                      <div class="custom-control custom-switch d-inline-block">
                        <input type="checkbox" class="custom-control-input" id="id-sidebar-compact"  />
                        <label class="custom-control-label" for="id-sidebar-compact"></label>
                      </div>
                  </div>
                  -->

                    <div class="mt-2 d-none d-xl-flex justify-content-between align-items-center">
                      <div class="pl-1 text-grey-d1">Collapsed Mode</div>

                      <div class="btn-group btn-group-toggle flex-row" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-red active">
                          Expand
                          <input type="radio" name="sidebar-collapsed" value="expandable" checked="">
                        </label>

                        <label class="btn btn-sm btn-outline-red">
                          Popup
                          <input type="radio" name="sidebar-collapsed" value="hoverable">
                        </label>

                        <label class="btn btn-sm btn-outline-red">
                          Hide
                          <input type="radio" name="sidebar-collapsed" value="hideable">
                        </label>
                      </div>
                    </div>

                    <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                      <label for="id-sidebar-hover" class="pl-1 text-grey-d1">Submenu on Hover</label>

                      <label>
                        <input type="checkbox" class="ace-switch" id="id-sidebar-hover">
                      </label>
                    </div>

                    <div class="mt-2 d-flex d-xl-none justify-content-between align-items-center">
                      <label for="id-push-content" class="pl-1 text-grey-d1">Push Content</label>

                      <label>
                        <input type="checkbox" class="ace-switch" id="id-push-content">
                      </label>
                    </div>

                  </div>

                  <div class="my-1"></div>
                </form>
              </div>

              <div class="modal-footer d-none justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  <i class="fa fa-times mr-1"></i>
                  Close
                </button>
                <button type="button" class="btn btn-info">
                  <i class="fa fa-check mr-1"></i>
                  Keep changes
                </button>
              </div>

            </div><!-- .modal-content -->

            <div class="aside-header align-self-start mt-1 mt-lg-5 text-right d-style">
              <button type="button" class="btn btn-orange btn-lg shadow-sm pl-2 radius-l-2 f-n-hover py-1 py-md-2" data-toggle="modal" data-target="#id-ace-settings-modal">
                <i class="fa fa-cog text-110 ml-1"></i>
              </button>
            </div>
          </div><!-- .modal-dialog -->
        </div><!-- .modal-aside -->
      </div>

    </div>

    <!-- include common vendor scripts used in demo pages -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>



    <!-- include vendor scripts used in "Basic Elements" page. see "application/views/default/pages/partials/form-basic/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/autosize@4.0.2/dist/autosize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-maxlength@1.10.0/dist/bootstrap-maxlength.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.5/dist/jquery.inputmask.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/nouislider@14.6.1/distribute/nouislider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/js/ion.rangeSlider.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap-touchspin@4.3.0/dist/jquery.bootstrap-touchspin.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/tiny-date-picker@3.2.8/dist/date-range-picker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/eonasdan-bootstrap-datetimepicker@4.17.47/src/js/bootstrap-datetimepicker.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap-colorpicker@3.2.0/dist/js/bootstrap-colorpicker.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/es6-object-assign@1.1.0/dist/object-assign-auto.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5.2.0/dist/iro.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery-knob@1.2.11/dist/jquery.knob.min.js"></script>



    <!-- include ace.js -->
    <script src="../dist/js/ace.min.js"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="<?php echo base_url();?>assets/js/demo.min.js"></script>



    <!-- "Basic Elements" page script to enable its demo functionality -->
    <script>
      jQuery(function($) {

        // disable/enable the `readonly` input
        $('#id-checkbox-disable-it')
          .prop('checked', false)
          .on('click', function() {
            var inp = document.getElementById('id-disable-me')
            inp.disabled = this.checked
            if (this.checked) {
              inp.removeAttribute('readonly')
              inp.value = 'This text field is disabled!'
            } else {
              inp.setAttribute('readonly', '')
              inp.value = 'This text field is readonly!'
            }
          })


        $('#toggle-password')
          .on('click', function(e) {
            e.preventDefault()
            $(this).toggleClass('active')

            var inp = document.getElementById('id-form-field-password-toggle')
            inp.type = $(this).hasClass('active') ? 'text' : 'password'
            inp.focus()
          })



        // input with tooltip and popover example
        $('#tooltip-1').tooltip({
          container: 'body',
          template: '<div class="tooltip" role="tooltip"><div class="arrow brc-success-m1"></div><div class="bgc-success-m1 tooltip-inner text-dark text-600 text-110 px-2 pb-2"></div></div>'
        })

        $('#popover-1').popover({
          container: 'body',
          trigger: 'click',
          placement: 'auto',
          template: '<div class="popover brc-primary-m2" role="tooltip"><div class="arrow arrow2 brc-white"></div><div class="arrow brc-primary-m1"></div><h3 class="popover-header bgc-primary-l2 border-0 text-115 text-dark-tp3"></h3><div class="popover-body text-grey-d2 text-105"></div></div>'
        })



        // textarea limiter
        $('#id-textarea-limit1').maxlength({
          alwaysShow: true,
          allowOverMax: false,

          warningClass: "badge badge-dark",
          limitReachedClass: "badge badge-warning",
          placement: 'bottom-right-inside'
        })

        $('#id-textarea-limit2').maxlength({

          alwaysShow: true,
          allowOverMax: false,
          appendToParent: true,

          warningClass: "w-100 popover bs-popover-bottom  brc-primary-m2 border-2",
          limitReachedClass: "w-100 popover bs-popover-bottom brc-danger-m2 border-2",
          placement: 'bottom',

          message: function(currentText, maxLength) {
            return '<div class="arrow ' + (maxLength == currentText.length ? 'brc-danger' : 'brc-primary') + '" style="left:calc(50% - 0.5rem)"></div>\
                 <div class="popover-body">' + (Math.max(0, maxLength - currentText.length)) + ' characters remaining ...\
                 <div class="h-1"></div> max allowed: ' + maxLength + '!</div>'
          }
        })



        //autosize for textarea
        autosize($('#id-textarea-autosize'))


        ///////////////////////////////////////////////
        //masked input
        try { //not working in IE11
          $("#form-field-mask-1").inputmask("99/99/9999")
          $("#form-field-mask-2").inputmask("(999) 999-9999")
          $("#form-field-mask-3").inputmask("a*-999-a999")
          $("#form-field-mask-4").inputmask("~9.99 ~9.99 999")
          //$("").inputmask("9-a{1,3}9{1,3}")
        } catch (e) {}


        ///////////////////////////////////////////////
        // ionRangeSlider (the last red slider)
        $("#id-ionslider-1").ionRangeSlider()

        // noUiSlider
        // the vertical green slider
        var slider1 = $("#id-slider-1").css({
          'height': '260px',
          'z-index': 10
        }).get(0) // z-index for tooltip to appear above purple slider
        noUiSlider.create(slider1, {
          orientation: "vertical",
          tooltips: true,
          start: [20, 80],
          connect: true,
          range: {
            'min': 0,
            'max': 100
          },
          format: {
            from: function(value) {
              return parseInt(value)
            },
            to: function(value) {
              return parseInt(value)
            }
          }
        })

        $(slider1).find('.noUi-handle').addClass('brc-success-d2 slider-bars-h').end()
          .find('.noUi-connect').addClass('bgc-success-d1').end()
          .find('.noUi-tooltip').addClass('opacity-1 bgc-success-d2 brc-success-d2 text-white radius-3 px-3')


        // the first horizontal slider with round handles
        var slider2 = document.querySelector("#id-slider-2")
        noUiSlider.create(slider2, {
          tooltips: true,
          start: [20, 80],
          connect: true,
          range: {
            'min': 0,
            'max': 100
          }
        })

        $(slider2)
          .find('.noUi-handle').addClass('brc-info-d2 border-2 radius-round slider-bars-none').end()
          .find('.noUi-base').addClass('bgc-grey-l1').end()
          .find('.noUi-connect').addClass('bgc-info-d2').end()
          .find('.noUi-tooltip').addClass('bgc-dark-tp1 text-white border-0 text-90 radius-1 px-2')


        // the purple slider
        var slider3 = document.querySelector("#id-slider-3");
        noUiSlider.create(slider3, {
          tooltips: true,
          start: 50,
          connect: [true, false],
          range: {
            'min': 0,
            'max': 100
          }
        });
        $(slider3).find('.noUi-handle').addClass('border-3 brc-purple-tp1 bgc-white-tp1 radius-1').end()
          .find('.noUi-connect').addClass('bgc-purple-tp1').end()
          .find('.noUi-tooltip').addClass('bgc-dark-tp1 text-white border-0 text-90 radius-1 px-2');



        // the third (disabled) slider
        var slider4 = document.querySelector("#id-slider-4");
        noUiSlider.create(slider4, {
          tooltips: true,
          start: [20, 80],
          connect: true,
          range: {
            'min': 0,
            'max': 100
          }
        });

        slider4.setAttribute('disabled', true);
        $(slider4).find('.noUi-handle').addClass('brc-primary').end()
          .find('.noUi-connect').addClass('bgc-primary-tp1').end()
          .find('.noUi-tooltip').addClass('bgc-dark-tp1 text-white border-0 text-90 radius-1 px-2');



        // the orange slider
        var slider5 = document.querySelector("#id-slider-5")
        noUiSlider.create(slider5, {
          tooltips: false,
          start: 10,
          connect: [true, false],
          range: {
            'min': 0,
            'max': 100
          }
        })
        $(slider5).find('.noUi-handle').addClass('brc-white-tp1 bgc-warning-d2 radius-round slider-bars-none shadow').css('border-width', '8px').end()
          .find('.noUi-base').addClass('bgc-grey-l2').end()
          .find('.noUi-connect').addClass('bgc-warning').end()



        //////////////////////////////////////////

        // input spinner
        $("#id-spinner-1").TouchSpin({
          min: 0,
          max: 100,
          step: 0.1,
          decimals: 2,
          boostat: 5,
          maxboostedstep: 10,
          postfix: '%',

          buttondown_class: 'btn btn-danger',
          buttonup_class: 'btn btn-success',

          buttondown_txt: '<i class="fa fa-minus"></i>',
          buttonup_txt: '<i class="fa fa-plus"></i>',
        })


        $("#id-spinner-2").TouchSpin({
          verticalbuttons: true,

          buttondown_class: 'btn btn-xs btn-info',
          buttonup_class: 'btn btn-xs btn-info',

          verticaldownclass: '',
          verticalupclass: '',

          verticaldown: '<i class="fa fa-angle-down"></i>',
          verticalup: '<i class="fa fa-angle-up"></i>',
        })


        $("#id-spinner-3").TouchSpin({
          verticalbuttons: true,

          buttondown_class: 'btn btn-xs btn-primary',
          buttonup_class: 'btn btn-xs btn-primary',

          verticaldownclass: '',
          verticalupclass: '',

          verticaldown: '<i class="fa fa-caret-down"></i>',
          verticalup: '<i class="fa fa-caret-up"></i>',
        })


        /////////////////////////////////////////

        // custom ace file input

        // simple
        $('#ace-file-input1').aceFileInput({
          /**
          btnChooseClass: 'bgc-grey-l2 pt-15 px-2 my-1px mr-1px',
          btnChooseText: 'SELECT FILE',
          placeholderText: 'NO FILE YET',
          placeholderIcon: '<i class="fa fa-file bgc-warning-m1 text-white w-4 py-2 text-center"></i>'
          */
        })

        // multiple with image preview
        $('#ace-file-input2').aceFileInput({
            style: 'drop',
            droppable: true,

            container: 'border-1 border-dashed brc-grey-l1 brc-h-info-m2 shadow-sm',

            placeholderClass: 'text-125 text-600 text-grey-l1 my-2',
            placeholderText: 'Drop images here or click to choose',
            placeholderIcon: '<i class="fa fa-cloud-upload-alt fa-3x text-info-m2 my-2"></i>',

            //previewSize: 64,
            thumbnail: 'large',

            //allowExt: 'gif|jpg|jpeg|png|webp|svg',
            //allowMime: 'image/png|image/jpeg',
            allowMime: 'image/*',

            //maxSize: 100000,
          })
          .on('change', function() {
            // get dropped/selected files

            // console.log( $(this).data('ace_input_files') )
            // console.log( $(this).data('ace_input_method') )

            // or
            // console.log( $(this).aceFileInput('files') )
            // console.log( $(this).aceFileInput('method') )
          })
          .on('invalid.ace.file', function(e, errors) {
            // console.log(errors)
          })
          .on('preview_failed.ace.file', function(e, error) {
            // console.log(error)
            // if(error.code == 2) alert(error.filename + ' is not an image!')
          })
          .on('reset.ace.file', function(e) {
            // e.preventDefault()
          })

        // some available methods

        // $('#ace-file-input2').aceFileInput('disable')
        // $('#ace-file-input2').aceFileInput('startLoading')

        // $('#ace-file-input2').aceFileInput('showFileList', [{name: 'avatar3.jpg', type: 'image', path: 'assets/image/avatar/avatar3.jpg'} , {name: 'avatar2.jpg', type: 'image', path: 'assets/image/avatar/avatar2.jpg'}])
        // $('#ace-file-input1').aceFileInput('showFileList', [{name: '2.txt', type: 'document'}])
        // $('#ace-file-input1').aceFileInput('resetInput');



        //////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////


        // datepicker
        var TinyDatePicker = DateRangePicker.TinyDatePicker;
        TinyDatePicker('#id-date-1', {
            mode: 'dp-below',
          })
          .on('statechange', function(ev) {

          })

        // modal one
        TinyDatePicker('#id-date-2', {
          mode: 'dp-modal',
        }).on('statechange', function(ev) {
          // console.log(ev);
        })


        // third one
        // on mobile devices show native datepicker
        if ('ontouchstart' in window && window.matchMedia('(max-width: 600px)')) {
          document.querySelector('#id-date-3').setAttribute('type', 'date')
        } else {
          TinyDatePicker('#id-date-3', {
            mode: 'dp-modal',
          })
        }

        //////
        // date range picker example
        var daterange_container = document.querySelector('#id-daterange-container')
        // Inject DateRangePicker into our container
        DateRangePicker.DateRangePicker(daterange_container, {
            mode: 'dp-modal'
          })
          .on('statechange', function(_, rp) {
            // Update the inputs when the state changes
            var range = rp.state
            $('#id-daterange-from').val(range.start ? range.start.toDateString() : '')
            $('#id-daterange-to').val(range.end ? range.end.toDateString() : '')
          })

        $('#id-daterange-from, #id-daterange-to').on('focus', function() {
          daterange_container.classList.add('visible')
        })

        var daterange_wrapper = document.querySelector('#id-daterange-wrapper')
        var previousTimeout = null;
        $(daterange_wrapper).on('focusout', function() {
          if (previousTimeout) clearTimeout(previousTimeout)
          previousTimeout = setTimeout(function() {
            if (!daterange_wrapper.contains(document.activeElement)) {
              daterange_container.classList.remove('visible')
            }
          }, 10)
        })



        ////////////////////////
        // Datetimepicker plugin
        $('#id-timepicker').datetimepicker({
          icons: {
            time: 'far fa-clock text-green-d1 text-120',
            date: 'far fa-calendar text-blue-d1 text-120',

            up: 'fa fa-chevron-up text-secondary',
            down: 'fa fa-chevron-down text-secondary',
            previous: 'fa fa-chevron-left text-secondary',
            next: 'fa fa-chevron-right text-secondary',

            today: 'far fa-calendar-check text-purple-d1 text-120',
            clear: 'fa fa-trash-alt text-orange-d2 text-120',
            close: 'fa fa-times text-danger text-120'
          },

          // sideBySide: true,

          toolbarPlacement: "top",

          allowInputToggle: true,
          // showClose: true,
          // showClear: true,
          showTodayButton: true,

          //"format": "HH:mm:ss"
        })

        //***** NOTE *******//
        // the above `date/time` picker plugin was designed for BS3.
        // To make it work with BS4, the following piece of code is required
        $('#id-timepicker')
          .on('dp.show', function() {
            $(this).find('.collapse.in').addClass('show')
            $(this).find('.table-condensed').addClass('table table-borderless')

            $(this).find('[data-action][title]').tooltip() // enable tooltip
          })

        // now listen to the `.collapse` events inside this datetimepicker accordion (one `.collapse` is for timepicker, the other one is for datepicker)
        // then add or remove the old `in` BS3 class so the plugin works correctly
        $(document)
          .on('show.bs.collapse', '.bootstrap-datetimepicker-widget .collapse', function() {
            $(this).addClass('in')
          }).on('hide.bs.collapse', '.bootstrap-datetimepicker-widget .collapse', function() {
            $(this).removeClass('in')
          })



        //////////////////////////////////
        // the small time picker inside popover

        $('#id-popover-timepicker')
          .popover({
            title: 'Choose Time',
            sanitize: false,
            content: function() {
              return $('#id-popover-timepicker-html').html()
            },
            html: true,
            placement: 'auto',
            trigger: 'manual',
            container: 'body',

            template: '<div class="popover popover-timepicker brc-primary-m3 border-1 radius-1 shadow-sm" role="tooltip"><div class="arrow brc-primary"></div><h3 class="popover-header bgc-primary-l3 brc-primary-l1 text-dark-tp4 text-600 text-center pb-25"></h3><div class="popover-body text-grey-d2 p-4"></div></div>'
          })
          .on('click', function() {
            // show popover when button is clicked
            $(this).popover('toggle')
            $(this).toggleClass('active')

            // get a reference to it
            var popover = $(document.body).find('.popover-timepicker').last()

            // hide popover if clicked outside of it
            if (popover.length > 0 && popover.hasClass('show')) {
              var This = this
              $(document).on('click.popover-time', function(ev) {
                if (popover.get(0).contains(ev.target) || ev.target == document.getElementById('id-popover-timepicker')) return
                $(This).popover('hide')
                $(This).removeClass('active')

                $(document).off('.popover-time')
              })
            }
          })



        ////////////////////////////////////
        // color picker

        try {
          $('#id-color-picker-1').colorpicker({
              container: true,
              extensions: [{
                name: 'swatches',
                options: {
                  colors: {
                    'tetrad1': '#f00',
                    'tetrad2': '#00f',
                    'tetrad3': '#eee',
                    'tetrad4': '#ddd'
                  },
                  namesAsValues: false
                }
              }]
            })
            .on('colorpickerChange', function(event) {
              $('#id-color-picker-1-update').css('background-color', event.color.toString())
            })
        } catch (err) {
          $('#id-color-picker-1').attr('placeholder', 'Plugin not loaded...')
        }


        ////////////////////////////////////
        // the other colorpicker
        var colorPicker = new iro.ColorPicker("#color-picker-container", {
          // Set the size of the color picker
          width: 160,
          // Set the initial color to pure red
          color: "#f00"
        })
        colorPicker
          .on('color:change', function(color, changes) {
            //console.log(color.hexString);
          })



        ////////////////////////////////////////
        // Knob input

        $('.knob').knob()

      })
    </script>
  </body>
</html>