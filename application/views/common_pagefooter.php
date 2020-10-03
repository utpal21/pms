  <!-- this footer is shown in device width above `sm` -->
          <footer class="footer d-none d-sm-block">
            <div class="footer-inner">
              <div class="h-100 pt-3 border-t-1 brc-secondary-l2 bgc-white-tp1 shadow">
                <span class="text-primary-m1 font-bolder text-120">Property</span>
                <span class="text-grey">Management System &copy; 2020</span>

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
    <script src="<?php echo base_url();?>dist/js/ace.min.js"></script>



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
		$('#ace-file-input1_1').aceFileInput({
          /**
          btnChooseClass: 'bgc-grey-l2 pt-15 px-2 my-1px mr-1px',
          btnChooseText: 'SELECT FILE',
          placeholderText: 'NO FILE YET',
          placeholderIcon: '<i class="fa fa-file bgc-warning-m1 text-white w-4 py-2 text-center"></i>'
          */
        })
		$('#ace-file-input1_2').aceFileInput({
          /**
          btnChooseClass: 'bgc-grey-l2 pt-15 px-2 my-1px mr-1px',
          btnChooseText: 'SELECT FILE',
          placeholderText: 'NO FILE YET',
          placeholderIcon: '<i class="fa fa-file bgc-warning-m1 text-white w-4 py-2 text-center"></i>'
          */
        })
		$('#ace-file-input1_3').aceFileInput({
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
		  
		  TinyDatePicker('#id-date-1_1', {
            mode: 'dp-below',
          })
          .on('statechange', function(ev) {

          })
		  
		  TinyDatePicker('#id-date-1_2', {
            mode: 'dp-below',
          })
          .on('statechange', function(ev) {

          })
		  
		  TinyDatePicker('#id-date-1_3', {
            mode: 'dp-below',
          })
          .on('statechange', function(ev) {

          })
		  
		  TinyDatePicker('#id-date-1_4', {
            mode: 'dp-below',
          })
          .on('statechange', function(ev) {

          })
		  
		  TinyDatePicker('#id-date-1_5', {
            mode: 'dp-below',
          })
          .on('statechange', function(ev) {

          })
		  
		  TinyDatePicker('#id-date-1_6', {
            mode: 'dp-below',
          })
          .on('statechange', function(ev) {

          })
		  
		   TinyDatePicker('#id-date-1_7', {
            mode: 'dp-below',
          })
          .on('statechange', function(ev) {

          })
		  
		  TinyDatePicker('#id-date-1_8', {
            mode: 'dp-below',
          })
          .on('statechange', function(ev) {

          })
		  
		  TinyDatePicker('#id-date-1_9', {
            mode: 'dp-below',
          })
          .on('statechange', function(ev) {

          })
		  
		  TinyDatePicker('#id-date-1_10', {
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

<!-- Copied from http://104.237.146.83/templates/ace/demo/html/form-basic.html by Cyotek WebCopy 1.7.0.600, Thursday, September 10, 2020, 6:05:30 PM -->
</html>