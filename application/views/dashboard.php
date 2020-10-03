﻿<?php echo $pageheader; ?>
  <body>
    <div class="body-container">
	  <?php echo $navheader; ?>
      <div class="main-container bgc-white">
		<?php echo $sidebar; ?>
	    <div class="sidebar-section">
              <div class="sidebar-section-item fadeable-bottom">
                <div class="fadeinable">
                  <!-- shows this when collapsed -->
                  <div class="pos-rel">
                    <img alt="Alexa's Photo" src="<?php echo base_url();?>assets/image/avatar/avatar3.jpg" width="42" class="px-1px radius-round mx-2 border-2 brc-default-m2">
                    <span class="bgc-success radius-round border-2 brc-white p-1 position-tr mr-1 mt-2px"></span>
                  </div>
                </div>

                <div class="fadeable hideable w-100 bg-transparent shadow-none border-0">
                  <!-- shows this when full-width -->
                 
                </div>
              </div>
            </div>

          </div>
        </div>

        <div role="main" class="main-content">
          <!-- unused breadcrumbs example, see  -->
          <div class="d-none content-nav mb-1 bgc-secondary-l3 mx-5">

            <div class="d-flex justify-content-between align-items-center">
              <ol class="breadcrumb pl-2 breadcrumb-nosep">
                <li class="breadcrumb-item active text-grey">
                  <i class="fa fa-home text-dark-m3 mr-1 mt-1"></i>
                  <a class="text-blue" href="#">
                    Home
                  </a>
                </li>
                <li class="mx-15 text-grey-l2">/</li>

                <li class="breadcrumb-item"><a class="text-blue-d2" href="#">Layouts</a></li>
                <li class="mx-15 text-grey-l2">/</li>
                <li class="breadcrumb-item active text-grey-d1">Dashboard</li>
              </ol>

              <div class="nav-search">
                <form class="form-search">
                  <span class="d-inline-flex align-items-center">
                              <input type="text" placeholder="Search ..." class="form-control pr-4 form-control-sm radius-1 brc-blue-m2 text-grey" autocomplete="off">
                              <i class="fa fa-search text-info-m1 ml-n4"></i>
                          </span>
                </form>
              </div><!-- /.nav-search -->
            </div>

          </div><!-- breadcrumbs -->
          <div class="page-content container container-plus">
            <div class="page-header border-0 pb-2">
              <h1 class="page-title text-primary-d2 text-150">
                Dashboard 
                <small class="page-info text-secondary-d2 text-nowrap">
                  <i class="fa fa-angle-double-right text-80"></i>
                  all in one
                </small>
              </h1>

              <div class="page-tools d-inline-flex">
                <button type="button" class="btn btn-light-primary btn-h-primary btn-a-primary border-0 radius-3 py-2 text-600 text-90">
                  <span class="d-none d-sm-inline mr-1">
                Save
            </span>
                  <i class="fa fa-save text-110 w-2 h-2"></i>
                </button>

                <button type="button" class="mx-2px btn btn-light-purple btn-h-purple btn-a-purple border-0 radius-3 py-2 text-90">
                  <i class="fa fa-undo text-110 w-2 h-2"></i>
                </button>

                
              </div>
            </div>



            <div class="row mt-3">
              <div class="col-xl-8">
                <div class="row px-3 px-lg-4">
                  <div class="col-12">
                    <div class="row h-100 mx-n425">
                      <div class="col-12 col-sm-4 p-0 text-center">
                        <div class="acard mx-2 h-100 px-2 py-3">
                          <span class="text-dark-l2">
                                Total Landlord
                            </span>

                          <div class="text-secondary-d3">
                            <span class="text-150 text-secondary-d1"></span><span class="text-180">2350</span>
                            <span class="text-blue-d1">
                                    +5%
                                    <i class="fa fa-caret-up"></i>
                                </span>
                          </div>

                          <button type="button" class="btn btn-outline-blue radius-round btn-bold px-4 py-1 mt-45 opacity-1">View Report</button>
                        </div>
                      </div><!-- /.col -->

                      <div class="col-12 col-sm-4 p-0 pos-rel mt-3 mt-sm-0 pt-0 pt-sm-0 text-center">

                        <div class="acard h-100 d-flex flex-column mx-2 px-2 py-3">
                          <div class="d-flex text-center">
                            <div class="flex-grow-1 mb-3">
                              <div class="text-nowrap text-100 text-dark-l2">Page views</div>


                              <div>
                                <span class="text-170 text-secondary-d3">729,351</span>
                                <span class="text-blue-d1 text-nowrap">
                        					+7.2%
                        					<i class="fa fa-caret-up"></i>
                        				 </span>
                              </div>
                            </div>
                          </div>


                          <div class="align-self-center w-95 text-warning-d2">
                            <canvas class="info-chart ml-n15 mt-n2" style="height: 64px; width: 100%;" data-values="[1000,800,1800,400,1500,1000,1050,1300,2100,1400,1500,1350]"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4 p-0 pos-rel mt-3 mt-sm-0 pt-0 pt-sm-0 text-center">

                        <div class="acard h-100 d-flex flex-column mx-2 px-2 py-3">
                          <div class="d-flex text-center">
                            <div class="flex-grow-1 mb-3">
                              <div class="text-nowrap text-100 text-dark-l2">Task progress</div>


                              <div class="text-nowrap text-125 text-secondary-d3">~ 42% remaining</div>

                            </div>
                          </div>


                          <div class="align-self-center pos-rel text-blue">
                            <canvas class="info-pie" style="width: 150px;" data-percent="58"></canvas>
                            <span class="position-center text-600 text-dark-tp4">58%</span>
                          </div>

                        </div>
                      </div>
                    </div><!-- /.row -->
                  </div>

                  <div class="col-12 mt-35">
                    <div class="row h-100 mx-n425">
                      <div class="col-12 col-md-4 px-0 mb-2 mb-md-0">
                        <div class="acard h-100 pt-2 pb-25 px-25 d-flex mx-2 overflow-hidden">
                          <!-- the colored circles on bottom right -->
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l3 opacity-3" style="width: 5.25rem; height: 5.25rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l2 opacity-5" style="width: 4.75rem; height: 4.75rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-purple-l1 opacity-5" style="width: 4.25rem; height: 4.25rem;"></div>


                          <div class="flex-grow-1 pl-25 pos-rel d-flex flex-column">
                            <div class="text-dark-tp4">
                              <span class="text-200">164</span>



                              <span class="text-md text-danger-m1 align-text-bottom text-nowrap ml-1">
                     					(-2% <i class="ml-2px fa fa-caret-down"></i>)
                     				</span>
                            </div>


                            <div class="mt-auto text-nowrap text-dark-l2 text-105 letter-spacing mt-n1">orders</div>
                          </div>


                          <div class="ml-auto pr-1 align-self-center pos-rel text-125">
                            <i class="fa fa-shopping-cart text-purple opacity-1 fa-2x mr-25"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-4 px-0 mb-2 mb-md-0">
                        <div class="acard h-100 pt-2 pb-25 px-25 d-flex mx-2 overflow-hidden">
                          <!-- the colored circles on bottom right -->
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-blue-l3 opacity-3" style="width: 5.25rem; height: 5.25rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-blue-l2 opacity-5" style="width: 4.75rem; height: 4.75rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-blue-l1 opacity-5" style="width: 4.25rem; height: 4.25rem;"></div>


                          <div class="flex-grow-1 pl-25 pos-rel d-flex flex-column">
                            <div class="text-dark-tp4">
                              <span class="text-200">750</span>

                              <span class="text-md text-success-m1 align-text-bottom text-nowrap ml-1">
                     					(+8% <i class="ml-2px fa fa-caret-up"></i>)
                     				</span>


                            </div>


                            <div class="mt-auto text-nowrap text-dark-l2 text-105 letter-spacing mt-n1">new followers</div>
                          </div>


                          <div class="ml-auto pr-1 align-self-center pos-rel text-125">
                            <i class="fab fa-twitter text-blue opacity-1 fa-2x mr-25"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-4 px-0 mb-2 mb-md-0">
                        <div class="acard h-100 pt-2 pb-25 px-25 d-flex mx-2 overflow-hidden">
                          <!-- the colored circles on bottom right -->
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-orange-l3 opacity-3" style="width: 5.25rem; height: 5.25rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-orange-l2 opacity-5" style="width: 4.75rem; height: 4.75rem;"></div>
                          <div class="position-br	mb-n5 mr-n5 radius-round bgc-orange-l1 opacity-5" style="width: 4.25rem; height: 4.25rem;"></div>


                          <div class="flex-grow-1 pl-25 pos-rel d-flex flex-column">
                            <div class="text-dark-tp4">
                              <span class="text-200">16</span>



                            </div>


                            <div class="mt-auto text-nowrap text-dark-l2 text-105 letter-spacing mt-n1">experiments</div>
                          </div>


                          <div class="ml-auto pr-1 align-self-center pos-rel text-125">
                            <i class="fa fa-bolt text-orange opacity-1 fa-2x mr-25"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- /.row -->
              </div><!-- /.col -->


              <!-- traffic sources piechart -->
              <div class="col-xl-4 mt-4 mt-xl-0">
                <div class="card acard h-100 overflow-hidden">
                  <div class="card-header border-0 bgc-white card-header-sm">
                    <h6 class="card-title text-dark-m2 pl-25 pt-15 text-110">
                      Total Landlords
                      <br>
                      <span class="text-85 text-dark-l3">Last 7 days</span>
                    </h6>

                    <div class="card-toolbar no-border align-self-start mt-15 mr-1">
                      <div class="dropdown dd-backdrop dd-backdrop-none-md">
                        <a class="btn btn-light-secondary border-0 btn-bold btn-xs dropdown-toggle" href="#" role="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                          This Week
                          <i class="fa fa-caret-down ml-2"></i>
                        </a>

                        <div class="dropdown-menu shadow-sm dropdown-menu-right dropdown-caret dropdown-animated dd-slide-up dd-slide-none-md radius-1 brc-secondary-l1">
                          <div class="dropdown-inner">
                            <a class="dropdown-item active btn btn-a-lighter-blue btn-a-bold mx-1" href="#">This Week</a>
                            <a class="dropdown-item btn btn-a-lighter-blue text-secondary mx-1" href="#">Last Week</a>
                            <a class="dropdown-item btn btn-a-lighter-blue text-secondary mx-1" href="#">This Month</a>
                            <a class="dropdown-item btn btn-a-lighter-blue text-secondary mx-1" href="#">Last Month</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-body px-0 bgc-white pb-0 flex-grow-1">
                    <div class="d-flex align-items-start justify-content-center align-items-center flex-wrap h-100">
                      <div class="pos-rel">
                        <div class="position-center text-center text-default-d3 mt-n3">
                          <span>total</span>
                          <span class="mt-n1 d-block text-180 text-secondary-d3 text-600">730k</span>
                        </div>

                        <canvas id="traffic-source-chart" class="pos-rel mb-3" style="height: 170px; width: 170px; max-height: 170px; max-width: 170px;"></canvas>
                      </div>
                    </div>
                  </div>
                </div><!-- /.card -->
              </div><!-- /.col -->

            </div><!-- /.row -->





            <div class="row pt-3 mt-1 mt-lg-3">
              <div class="col-lg-5 order-last order-lg-first mt-lg-3">
                <div class="card border-0">
                  <div class="card-header bg-transparent border-0 pl-1">
                    <h5 class="card-title mb-2 mb-md-0 text-120 text-grey-d3">
                      <i class="fa fa-star mr-1 text-orange text-90"></i>
                      Best Sellers
                    </h5>

                    <div class="card-toolbar align-self-center">
                      <a href="#" data-action="toggle" class="card-toolbar-btn text-grey text-110"><i class="fa fa-chevron-up"></i></a>
                    </div>
                  </div>
                  <div class="card-body p-0 acard overflow-hidden">
                    <table class="table brc-black-tp11">
                      <thead class="border-0">
                        <tr class="border-0 bgc-dark-l5 text-dark-tp5">
                          <th class="border-0 pl-4">name</th>
                          <th class="border-0">price</th>
                          <th class="border-0">status</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr class="bgc-h-secondary-l4">
                          <td class="text-dark-tp3 opacity-1 text-95 text-600 pl-4">Hoverboard</td>
                          <td>
                            <small><s class="text-danger-m1">$229.99</s></small>
                            <span class="text-success-m1 font-bolder text-95">$119.99</span>
                          </td>
                          <td>
                            <span class="badge text-75 bgc-info-d1 text-white">on sale</span>
                          </td>
                        </tr>
                        <tr class="bgc-h-secondary-l4">
                          <td class="text-dark-tp3 opacity-1 text-95 text-600 pl-4">Hiking Shoe</td>
                          <td>
                            <span class="text-info-d2 text-95 font-bolder">$46.45</span>
                          </td>
                          <td>
                            <span class="badge text-75 border-l-3 brc-black-tp8 bgc-success text-white">approved</span>
                          </td>
                        </tr>
                        <tr class="bgc-h-secondary-l4">
                          <td class="text-dark-tp3 opacity-1 text-95 text-600 pl-4">Gaming Console</td>
                          <td>
                            <span class="text-info-d2 text-95 font-bolder">$355.00</span>
                          </td>
                          <td>
                            <span class="badge text-75 border-l-3 brc-black-tp8 bgc-danger text-white">pending</span>
                          </td>
                        </tr>
                        <tr class="bgc-h-secondary-l4">
                          <td class="text-dark-tp3 opacity-1 text-95 text-600 pl-4">Digital Camera</td>
                          <td>
                            <small><s class="text-danger-m1">$324.99</s></small>
                            <span class="text-success-m1 font-bolder text-95">$219.95</span>
                          </td>
                          <td>
                            <span class="badge bgc-secondary-l1 text-dark-tp4 border-1 brc-black-tp10"><s>out of stock</s></span>
                          </td>
                        </tr>
                        <tr class="bgc-h-secondary-l4">
                          <td class="text-dark-tp3 opacity-1 text-95 text-600 pl-4">Laptop</td>
                          <td>
                            <span class="text-info-d2 text-95 font-bolder">$899.00</span>
                          </td>
                          <td>
                            <span class="badge text-75 border-l-3 brc-black-tp8 bgc-orange text-white">SOLD</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <div class="col-lg-7 mb-4 mb-lg-0 mt-3">
                <div class="card border-0 h-100">
                  <div class="card-header border-0 bgc-transparent pl-1">
                    <h5 class="card-title mb-2 mb-md-0 text-120 text-grey-d3">
                      <i class="fas fa-chart-line text-primary-m2 mr-1 text-105"></i>
                      Sale Stats
                    </h5>

                    <div class="card-toolbar no-border dd-backdrop dd-backdrop-none-md">
                      <a href="#" class="btn btn-xs btn-light-secondary border-1 text-600 px-4 radius-round dropdown-toggle" role="button" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        2020
                      </a>

                      <div class="dropdown-menu shadow-sm dropdown-menu-right dropdown-caret dropdown-animated dd-appear-center dd-slide-none-md radius-1 brc-secondary-l1 px-1 mw-auto">
                        <div class="dropdown-inner">
                          <a class="dropdown-item active" href="#">2020</a>
                          <a class="dropdown-item" href="#">2019</a>
                          <a class="dropdown-item" href="#">2018</a>
                        </div>
                      </div>
                    </div>

                    <div class="card-toolbar align-self-center">
                      <a href="#" data-action="reload" class="card-toolbar-btn text-success-m2 text-100">
                        <i class="fas fa-sync-alt"></i>
                      </a>
                    </div>
                  </div>

                  <div class="card-body p-0 acard px-1 mx-n1 mx-md-0 h-100 d-flex align-items-center">
                    <div class="mx-n2 px-0 mx-md-0 my-2 w-100">
                      <canvas id="saleschart" height="105"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>






            <div class="row mt-5 pt-lg-3">
              <div class="col-12 col-lg-3">
                <div class="card acard radius-t-0 h-100">
                  <div class="position-tl w-102 border-t-3 brc-primary-tp3 ml-n1px mt-n1px"></div><!-- the blue line on top -->
                  <div class="card-header pb-3 brc-secondary-l3">
                    <h5 class="card-title mb-2 mb-md-0 text-dark-m3">
                      Transfers
                    </h5>

                    <div class="card-toolbar no-border pl-0 pl-md-2">
                      <a href="#" class="btn btn-sm btn-lighter-grey btn-bgc-white btn-h-light-orange btn-a-light-orange text-600 px-2 py-1 radius-round">
                        <i class="fa fa-arrow-down text-90 mx-1px"></i>
                      </a>
                    </div>
                  </div>

                  <div class="card-body pt-2 pb-1">
                    <a href="#" class="no-underline d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-flex pos-rel d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Alexa's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar3.jpg" class="h-4 w-4">
                    </span>

                      <span class="text-default-d3 text-90 text-600">Alexa</span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        1,250
                        <span class="text-80">USD</span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-up text-green-m1 text-95"></i>
                    </span>
                    </a>
                    <a href="#" class="no-underline d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-flex pos-rel d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Derek's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar2.png" class="h-4 w-4">
                    </span>

                      <span class="text-default-d3 text-90 text-600">Derek</span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        350
                        <span class="text-80">EUR</span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-up text-green-m1 text-95"></i>
                    </span>
                    </a>
                    <a href="#" class="no-underline d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-flex pos-rel d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Antonio's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar1.jpg" class="h-4 w-4">
                    </span>

                      <span class="text-default-d3 text-90 text-600">Antonio</span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        120
                        <span class="text-80">CAD</span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-down text-danger-m1 text-95"></i>
                    </span>
                    </a>
                    <a href="#" class="no-underline d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-flex pos-rel d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Gabriel's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar2.jpg" class="h-4 w-4">
                    </span>

                      <span class="text-default-d3 text-90 text-600">Gabriel</span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        620
                        <span class="text-80">GBP</span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-up text-green-m1 text-95"></i>
                    </span>
                    </a>
                    <a href="#" class="no-underline d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-flex pos-rel d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="David's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar5.png" class="h-4 w-4">
                    </span>

                      <span class="text-default-d3 text-90 text-600">David</span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        330
                        <span class="text-80">AUD</span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-down text-danger-m1 text-95"></i>
                    </span>
                    </a>
                    <a href="#" class="no-underline d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-flex pos-rel d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Jason's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar6.jpg" class="h-4 w-4">
                    </span>

                      <span class="text-default-d3 text-90 text-600">Jason</span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        1,400
                        <span class="text-80">AED</span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-down text-danger-m1 text-95"></i>
                    </span>
                    </a>
                    <a href="#" class="no-underline d-flex flex-wrap align-items-center my-2 bgc-secondary-l4 bgc-h-secondary-l3 radius-1 p-25 d-flex pos-rel d-style">
                      <span class="mr-25 w-4 h-4 overflow-hidden text-center border-1 brc-secondary-m2 radius-round shadow-sm d-zoom-2">
                        <img alt="Rebecca's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar7.jpg" class="h-4 w-4">
                    </span>

                      <span class="text-default-d3 text-90 text-600">Rebecca</span>

                      <span class="ml-auto text-dark-l2 text-nowrap">
                        350
                        <span class="text-80">USD</span>
                      </span>

                      <span class="ml-2">
                            <i class="fa fa-arrow-up text-green-m1 text-95"></i>
                    </span>
                    </a>
                  </div>
                </div>
              </div>



              <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="card acard radius-t-0 h-100">
                  <div class="position-tl w-102 border-t-3 brc-primary-tp3 ml-n1px mt-n1px"></div><!-- the blue line on top -->
                  <div class="card-header brc-secondary-l3 pb-3">
                    <h5 class="card-title mb-2 mb-md-0 text-dark-m3">
                      Todo List <span class="text-sm">(Sortable)</span>
                    </h5>

                    <div class="card-toolbar no-border pl-0 pl-md-2">
                      <a href="#" class="btn btn-sm btn-lighter-grey btn-bgc-white btn-h-light-orange btn-a-light-orange text-600 px-25 radius-round">
                        View all <i class="fa fa-arrow-right ml-2 text-90"></i>
                      </a>
                    </div>
                  </div>

                  <div class="card-body bg-white p-0 pb-15">
                    <form autocomplete="off" id="tasks">

                      <div class="task-item align-items-center  bgc-h-green-l3 brc-secondary-l3 px-2 d-flex pos-rel">
                        <label>
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-0">
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-0">
                          <span class="align-middle">Answering customer questions</span>

                        </label>



                      </div>

                      <div class="task-item align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2 d-flex pos-rel">
                        <label>
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-1">
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-1">
                          <span class="align-middle">Fixing bugs</span>
                          <i class="fa fa-exclamation-circle text-danger-m1 opacity-1 text-110 align-middle ml-1"></i>
                        </label>

                        <span class="badge bgc-danger-l3 border-r-2 radius-r-0 brc-danger-m2 text-danger-d1 ml-1 mr-2">
                        urgent
                    </span>


                      </div>

                      <div class="task-item align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2 d-flex pos-rel">
                        <label>
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-2">
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-2">
                          <span class="align-middle">Adding new features</span>

                        </label>


                        <span class="badge bgc-success-l3 border-r-2 radius-r-0 brc-success-m2 text-dark-tp3 ml-1 mr-2">
                        normal
                    </span>

                      </div>

                      <div class="task-item align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2 d-flex pos-rel">
                        <label>
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-3">
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-3">
                          <span class="align-middle">Upgrading server hardware</span>

                        </label>



                      </div>

                      <div class="task-item align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2 d-flex pos-rel">
                        <label>
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-4">
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-4">
                          <span class="align-middle">Adding new skins</span>

                        </label>



                        <span class="badge bgc-blue-l3 border-r-2 radius-r-0 brc-blue-m2 text-dark-tp3 ml-1 mr-2">
                        low
                    </span>
                      </div>

                      <div class="task-item align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2 d-flex pos-rel">
                        <label>
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-5">
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-5">
                          <span class="align-middle">Updating server software</span>
                          <i class="fa fa-exclamation-circle text-danger-m1 opacity-1 text-110 align-middle ml-1"></i>
                        </label>

                        <span class="badge bgc-danger-l3 border-r-2 radius-r-0 brc-danger-m2 text-danger-d1 ml-1 mr-2">
                        urgent
                    </span>


                      </div>

                      <div class="task-item align-items-center border-t-1 bgc-h-green-l3 brc-secondary-l3 px-2 d-flex pos-rel">
                        <label>
                          <input type="checkbox" class="align-middle input-sm ml-2 mr-25" id="task-item-6">
                        </label>

                        <label class="flex-grow-1 mr-3 py-3" for="task-item-6">
                          <span class="align-middle">Cleaning up</span>

                        </label>


                        <span class="badge bgc-success-l3 border-r-2 radius-r-0 brc-success-m2 text-dark-tp3 ml-1 mr-2">
                        normal
                    </span>

                      </div>

                    </form>
                  </div><!-- /.card-body -->

                </div>
              </div>



              <div class="col-12 col-lg-5 mt-4 mt-lg-0">
                <div id="conversations" class="card border-0 shadow-sm h-100">
                  <div class="card-header bgc-primary-d1">
                    <h6 class="card-title text-white font-normal">
                      <i class="far fa-comment-dots text-130 mr-1"></i>
                      <span class="text-110">
                        Conversation
                    </span>
                      <span class="text-95 d-block d-sm-inline text-center">
                        (6 online)
                    </span>
                    </h6>

                    <div class="card-toolbar align-self-center text-white text-90 no-border p-2px">
                      Jack is typing
                      <div class="typing-dots text-160 text-white mx-md-1">
                        <span class="typing-dot">.</span>
                        <span class="typing-dot">.</span>
                        <span class="typing-dot">.</span>
                      </div>
                    </div>

                    <div class="card-toolbar align-self-center">
                      <a href="#" data-action="reload" class="card-toolbar-btn text-white ">
                        <i class="fas fa-sync-alt"></i>
                      </a>
                    </div>
                  </div>

                  <div class="card-body border-x-1 brc-primary-l1 p-0">
                    <div class="ace-scroll" data-ace-scroll='{"height": 380, "smooth":true}'>
                      <!-- if conversation item is on left -->
                      <div class="px-3 conversation mt-425">
                        <div class="d-flex align-items-start col px-0">
                          <div class="mr-3 mt-2px">
                            <div class="pos-rel">
                              <img alt="Max's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar1.jpg" class="radius-round w-4 h-4">
                              <span class="position-tr bgc-success-d1 brc-white border-2 p-1 mt-n1 radius-round"></span>
                            </div>
                            <div class="text-600 text-90 ml-1">
                              <a href="#" class="font-bolder btn-text-dark btn-h-text-primary">
                                Max
                              </a>
                            </div>
                          </div>

                          <div class="col px-0">
                            <div class="d-flex mb-15 pos-rel">
                              <span class="position-tl ml-n15 mt-15 w-3 h-3 bgc-grey-l3 rotate-n45"></span>

                              <div class="py-2 px-3 radius-1 bgc-grey-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Raw denim you probably haven't heard of actively? So lorem ipsum indeed! <span class='fa-stack w-auto'> <i class='fas fa-circle text-dark fa-stack-1x text-100'></i> <i class='fas fa-smile-beam text-warning-m3 text-125 fa-stack-1x pos-rel'></i> </span>
                                </div>
                              </div>
                              <div class="text-80 text-grey-m2 ml-2 mt-2">10:21</div>
                            </div>
                            <div class="d-flex mb-15 pos-rel">

                              <div class="py-2 px-3 radius-1 bgc-grey-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Tell you what, dolor sit amet forever!
                                </div>
                              </div>
                              <div class="text-80 text-grey-m2 ml-2 mt-2">10:23</div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!-- if conversation item is on left -->
                      <div class="px-3 conversation text-right mt-425">
                        <div class="d-flex flex-row-reverse align-items-start col px-0">
                          <div class="ml-3 mt-2px">
                            <div class="pos-rel">
                              <img alt="Mia's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar7.jpg" class="radius-round w-4 h-4">
                              <span class="position-tr bgc-orange-d1 brc-white border-2 p-1 mt-n1 radius-round"></span>
                            </div>
                            <div class="text-600 text-90 ml-1">
                              <a href="#" class="font-bolder btn-text-dark btn-h-text-primary">
                                Mia
                              </a>
                            </div>
                          </div>

                          <div class="col px-0">
                            <div class="d-flex flex-row-reverse mb-15 pos-rel">
                              <span class="position-tr mr-n15 mt-15 w-3 h-3 bgc-primary-l3 rotate-n45"></span>

                              <div class="py-2 px-3 radius-1 bgc-primary-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Consectetur adipiscing elit, quis nostrud exercitation.
                                </div>
                              </div>
                              <div class="text-80 text-grey-m2 mr-2 mt-2">10:25</div>
                            </div>
                            <div class="d-flex flex-row-reverse mb-15 pos-rel">

                              <div class="py-2 px-3 radius-1 bgc-primary-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  So count me in! <i class='fa fa-thumbs-up text-orange-m1 text-125 ml-1'></i>
                                </div>
                              </div>
                              <div class="text-80 text-grey-m2 mr-2 mt-2">10:25</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- if conversation item is on left -->
                      <div class="px-3 conversation mt-425">
                        <div class="d-flex align-items-start col px-0">
                          <div class="mr-3 mt-2px">
                            <div class="pos-rel">
                              <img alt="Max's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar1.jpg" class="radius-round w-4 h-4">
                              <span class="position-tr bgc-success-d1 brc-white border-2 p-1 mt-n1 radius-round"></span>
                            </div>
                            <div class="text-600 text-90 ml-1">
                              <a href="#" class="font-bolder btn-text-dark btn-h-text-primary">
                                Max
                              </a>
                            </div>
                          </div>

                          <div class="col px-0">
                            <div class="d-flex mb-15 pos-rel">
                              <span class="position-tl ml-n15 mt-15 w-3 h-3 bgc-grey-l3 rotate-n45"></span>

                              <div class="py-2 px-3 radius-1 bgc-grey-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Heard of them jean shorts Austin! Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                </div>
                              </div>
                              <div class="text-80 text-grey-m2 ml-2 mt-2">10:26</div>
                            </div>
                            <div class="d-flex mb-15 pos-rel">

                              <div class="mt-2px">
                                <div class='d-flex'>
                                  <div class='border-1 radius-2 mx-1 brc-primary-l1 shadow-sm d-style overflow-hidden'><img alt='Heedphones' src='<?php echo base_url();?>assets/image/product/wireless-headphone.jpg' width='64' class='d-zoom-2'></div>
                                  <div class='border-1 radius-2 mx-1 brc-primary-l1 shadow-sm d-style overflow-hidden'><img alt='Speakers' src='<?php echo base_url();?>assets/image/product/smart-speaker.jpg' class='d-zoom-2' width='64'></div>
                                  <div class='border-1 radius-2 mx-1 brc-primary-l1 shadow-sm d-style overflow-hidden'><img alt='Shoes' src='<?php echo base_url();?>assets/image/product/running-shoes.jpg' class='d-zoom-2' width='64'></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!-- if conversation item is on left -->
                      <div class="px-3 conversation text-right mt-425">
                        <div class="d-flex flex-row-reverse align-items-start col px-0">
                          <div class="ml-3 mt-2px">
                            <div class="pos-rel">
                              <img alt="Mia's avatar" src="<?php echo base_url();?>assets/image/avatar/avatar7.jpg" class="radius-round w-4 h-4">
                              <span class="position-tr bgc-orange-d1 brc-white border-2 p-1 mt-n1 radius-round"></span>
                            </div>
                            <div class="text-600 text-90 ml-1">
                              <a href="#" class="font-bolder btn-text-dark btn-h-text-primary">
                                Mia
                              </a>
                            </div>
                          </div>

                          <div class="col px-0">
                            <div class="d-flex flex-row-reverse mb-15 pos-rel">
                              <span class="position-tr mr-n15 mt-15 w-3 h-3 bgc-primary-l3 rotate-n45"></span>

                              <div class="py-2 px-3 radius-1 bgc-primary-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Are you sure fusce dapibus tellus ac cursus commodo??? <span class='fa-stack w-auto'> <i class='fas fa-circle text-dark fa-stack-1x text-100'></i> <i class='fas fa-grin-alt text-warning-m3 text-125 fa-stack-1x pos-rel'></i> </span>
                                </div>
                              </div>
                              <div class="text-80 text-grey-m2 mr-2 mt-2">10:49</div>
                            </div>
                            <div class="d-flex flex-row-reverse mb-15 pos-rel">

                              <div class="py-2 px-3 radius-1 bgc-primary-l3 text-dark-m1 pos-rel">
                                <div class="text-90" style="max-width: 480px;">
                                  Considering donec id elit non mi porta gravida at eget metus is undermined
                                </div>
                              </div>
                              <div class="text-80 text-grey-m2 mr-2 mt-2">10:50</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer px-25 pt-1px bgc-white border-1 border-t-0 brc-primary-l1 radius-b-2">
                    <div class="mb-0 p-3 ccard brc-grey-l1">
                      <div class="input-group input-group-fade">
                        <input id="id-reply" type="text" class="form-control pl-2 border-0 radius-0 shadow-none" placeholder="Write your message ...">

                        <!-- smiley dropdown -->
                        <div class="btn-group mx-2 dropup">
                          <button type="button" class="btn btn-xs px-1 border-0 btn-lighter-warning btn-bgc-tp dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fa-stack">
                                    <i class="far fa-smile text-dark-tp5 text-150 fa-stack-1x"></i>
                                </span>
                          </button>

                          <div class="dropdown-menu dropdown-menu-right p-1">
                            <div class="d-flex ">
                              <a class="dropdown-item px-25" href="#">
                                <span class="fa-stack w-auto">
                                            <i class="fas fa-circle text-dark fa-stack-1x text-100"></i>
                                            <i class="fas fa-smile text-warning-m3 text-125 fa-stack-1x pos-rel"></i>
                                        </span>
                              </a>

                              <a class="dropdown-item px-25" href="#">
                                <span class="fa-stack w-auto">
                                            <i class="fas fa-circle text-dark fa-stack-1x text-100"></i>
                                            <i class="fas fa-smile-beam text-warning-m3 text-125 fa-stack-1x pos-rel"></i>
                                        </span>
                              </a>

                              <a class="dropdown-item px-25" href="#">
                                <span class="fa-stack w-auto">
                                            <i class="fas fa-circle text-dark fa-stack-1x text-100"></i>
                                            <i class="fas fa-smile-wink text-warning-m3 text-125 fa-stack-1x pos-rel"></i>
                                        </span>
                              </a>
                            </div>
                          </div>
                        </div>

                        <div class="input-group-append">
                          <button class="btn btn-info radius-3px" type="button">
                            Send
                            <i class="fa fa-angle-right ml-1"></i>
                          </button>
                        </div>

                      </div>
                    </div>
                  </div><!-- /.card-footer -->

                </div><!-- /.card -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div>
		<?php echo $pagefooter; ?>
         