 <footer class="footer d-none d-sm-block">
            <div class="footer-inner bgc-white-tp1">
              <div class="pt-3 border-none border-t-3 brc-grey-l2 border-double">
                <span class="text-primary-m1 font-bolder text-120">Property</span>
                <span class="text-grey">Management System &copy; 2020</span>

                <span class="mx-3 action-buttons">
                      <a href="#" class="text-blue-m2 text-150"><i class="fab fa-twitter-square"></i></a>
                      <a href="#" class="text-blue-d2 text-150"><i class="fab fa-facebook"></i></a>
                      <a href="#" class="text-orange-d1 text-150"><i class="fa fa-rss-square"></i></a>
                   </span>
              </div>
            </div><!-- .footer-inner -->

            <!-- `scroll to top` button inside footer (for example when in boxed layout) -->
            <div class="footer-tools">
              <a id="btn-scroll-up" href="#" class="btn-scroll-up btn btn-dark mb-2 mr-2">
                <i class="fa fa-angle-double-up mx-2px text-95"></i>
              </a>
            </div>
          </footer>



          <!-- footer toolbox for mobile view -->
          <footer class="d-sm-none footer footer-sm footer-fixed">
            <div class="footer-inner">
              <div class="btn-group d-flex h-100 mx-2 border-x-1 border-t-2 brc-primary-m3 bgc-white-tp1 radius-t-1 shadow">
                <button class="btn btn-outline-primary btn-h-lighter-primary btn-a-lighter-primary border-0" data-toggle="modal" data-target="#id-ace-settings-modal">
                  <i class="fas fa-sliders-h text-blue-m1 text-120"></i>
                </button>

                <button class="btn btn-outline-primary btn-h-lighter-primary btn-a-lighter-primary border-0">
                  <i class="fa fa-plus-circle text-green-m1 text-120"></i>
                </button>

                <button class="btn btn-outline-primary btn-h-lighter-primary btn-a-lighter-primary border-0" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navbar search">
                  <i class="fa fa-search text-orange text-120"></i>
                </button>

                <button class="btn btn-outline-primary btn-h-lighter-primary btn-a-lighter-primary border-0 mr-0">
                  <span class="pos-rel">
                      <i class="fa fa-bell text-purple-m1 text-120"></i>
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



    <!-- include vendor scripts used in "Dashboard 3" page. see "application/views/default/pages/partials/dashboard-3/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.10.2/Sortable.min.js"></script>



    <!-- include ace.js -->
    <script src="<?php echo base_url();?>dist/js/ace.min.js"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="<?php echo base_url();?>assets/js/demo.min.js"></script>



    <!-- "Dashboard 3" page script to enable its demo functionality -->
    <script>
      jQuery(function($) {
        window.currentLayout = 2; //used in demo.js

        // some changes to settings box, appropriate for dashboard-3 and 4
        $('#id-auto-match').prop('checked', true) // automatch navbar and sidebar
        $('#auto-match-div').removeClass('d-none')
        $('#navbar-themes-show').removeClass('d-none')
        $('#navbar-themes-show-msg').addClass('d-none')
        $('input[value="not-navbar"]').parent().removeClass('d-none')



        //let's collapse the open submenu at first, for a better view of `.sidebar-light` look and feel
        $('.sidebar .nav .nav-item.open').removeClass('open').find('.submenu.show').removeClass('show');
        $('.sidebar').removeClass('has-open')

        // display the message only two times
        var displayed = parseInt(localStorage.getItem('welcome.classic.ace') || '0');
        if (displayed < 2) {
          localStorage.setItem('welcome.classic.ace', displayed + 1)

          if (window.matchMedia('(min-width: 1200px)').matches) {
            $.aceToaster.add({
              placement: 'tc',
              body: " <div class='position-tl w-100 border-t-3 brc-success-tp1'></div>\
                <div class='py-3 pl-2 pr-4 d-flex '>\
                  <span class='d-inline-block text-center py-3 px-1'>\
                    <i class='pos-abs fa fa-question fa-2x w-6 text-dark-m3 mt-2px'></i>\
                    <i class='pos-rel fa fa-question fa-2x w-6 text-success-m3 mr-1'></i>\
                  </span>\
                  <div>\
                    <p class='mb-1'>This is the old & classic Ace layout and dashboard.</p>\
                    <p class='mb-0'>In this layout <span class='text-600'>navbar</span> is on top and <span class='text-600'>sidebar</span> starts from <span class='border-b-2 brc-grey-m2'>below</span> it.</p>\
                  </div>\
                  <button data-dismiss='toast' class='btn btn-sm btn-brc-tp btn-lighter-grey btn-h-lighter-danger btn-a-lighter-danger radius-round position-tr mt-1 mr-2px'>\
                    <i class='fa fa-times px-1px'></i>\
                  </button>\
                </div>",

              width: 500,
              delay: 15,
              //sticky: true,

              close: false,
              //belowNav: true,

              className: 'bgc-white-tp1 shadow overflow-hidden border-0 p-0 radius-t-0 radius-b-1',

              bodyClass: 'border-1 border-t-0 brc-grey-l1 text-dark-tp3 text-120 radius-1 p-2',
              headerClass: 'd-none'
            })
          }
        }

        //show tooltips only when not touchscreen
        if (!('ontouchstart' in window)) $('[data-toggle="tooltip"]').tooltip({
          container: 'body'
        })


        //change color of badges, etc (you should do this in your HTML not JS)
        $('.sidebar .fa-exclamation-triangle').removeClass('text-yellow-m3').addClass('text-danger-m2')
        $('.sidebar .badge.bgc-success-m1').removeClass('bgc-success-m1 text-dark-d2').addClass('badge-primary')


        //////////////////////////////////////////////////
        //Sortable task list
        Sortable.create(document.getElementById('tasks'), {
          draggable: ".task-item",
          animation: 200,

          ghostClass: "bgc-yellow-l1", // Class name for the drop placeholder
          chosenClass: "", // Class name for the chosen item
          dragClass: "", // Class name for the dragging item
        });

        //toggle tasks checkbox on/off
        $('#tasks input[type=checkbox]').on('change', function() {
          $(this).closest('#tasks > div').toggleClass('bgc-secondary-l4', this.checked).find('label').toggleClass('line-through text-grey-d2', this.checked);
        });



        //update max height according to available space
        setTimeout(function() {
          var _scroller = document.querySelector('#conversations div[class*="ace-scroll"]')
          if (_scroller) _scroller.style.maxHeight = _scroller.parentNode.clientHeight + 'px'
        }, 10)



        //////////////////////////////////////////////////
        //draw charts
        var _animate = !AceApp.Util.isReducedMotion(); //make sure no animation is displayed according to user preferences


        // Traffic Sources piechart
        var trafficSourceCanvas = document.getElementById('traffic-source-chart');

        var trafficSourcePieChart = new Chart(trafficSourceCanvas, {
          type: 'doughnut',
          data: {
            datasets: [{
              label: 'Traffic Sources',
              data: [40.7, 27.5, 9.3, 19.6, 4.9],
              backgroundColor: [
                "#4ca5ae",
                "#f18e5d",
                "#ea789d",
                "#22c1e4",
                "#e2e3e4"
              ],
            }],
            labels: [
              'Social Networks',
              'Search Engines',
              'Ad Campaings',
              'Direct Traffic',
              'Other'
            ]
          },

          options: {
            responsive: true,

            cutoutPercentage: 70,
            legend: {
              display: false
            },
            animation: {
              animateRotate: true,
              duration: _animate ? 1000 : false
            },
            tooltips: {
              enabled: true,
              cornerRadius: 0,
              bodyFontColor: '#fff',
              bodyFontSize: 14,
              fontStyle: 'bold',

              backgroundColor: 'rgba(34, 34, 34, 0.73)',
              borderWidth: 0,

              caretSize: 5,

              xPadding: 12,
              yPadding: 12,

              callbacks: {
                label: function(tooltipItem, data) {
                  return ' ' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + '%';
                }
              }
            }
          }
        })
        //place the legends
        $(trafficSourceCanvas)
          .parent().after("<div id='traffic-source-legends' class='piechart-legends text-95 text-secondary-d3'>" + trafficSourcePieChart.generateLegend() + "</div>")



        ////////////////////////////
        //the sales stats chart
        var salesChart = document.getElementById("saleschart")
        if (salesChart.parentNode.offsetWidth < 600) {
          salesChart.height = 180
        }

        var salesChartCtx = salesChart.getContext("2d")

        /*** Gradient ***/
        var gradient1 = salesChartCtx.createLinearGradient(0, 0, 0, 400)
        gradient1.addColorStop(0, 'rgba(114,193,224, 0.2)')
        gradient1.addColorStop(1, 'rgba(114,193,224, 0)')

        var gradient2 = salesChartCtx.createLinearGradient(0, 0, 0, 300)
        gradient2.addColorStop(0, 'rgba(138,200,138, 0.45)')
        gradient2.addColorStop(1, 'rgba(138,200,138, 0)')

        var gradients = [gradient1, gradient2]

        var chartOptions1 = {
          lineTension: 0.3,
          borderWidth: 1.5,
          pointRadius: 0
        }

        new Chart(salesChartCtx, {
          type: 'line',
          data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "In-store",
                data: [3200, 1500, 3500, 2500, 3200, 7000, 2300, 3500, 3500, 6000, 6200, 8100],

                borderColor: '#72c1e0',
                pointBorderColor: '#72c1e0',

                fill: true,
                backgroundColor: gradients[0],
                pointBackgroundColor: '#fff',

                borderWidth: chartOptions1.borderWidth,
                pointRadius: chartOptions1.pointRadius,
                lineTension: chartOptions1.lineTension,
              },
              {
                label: "Online",
                data: [2500, 4200, 3000, 4000, 5500, 4800, 4600, 5900, 5800, 8900, 8200, 9000],

                borderColor: '#8ac88a',
                pointBorderColor: '#8ac88a',

                fill: true,
                backgroundColor: gradients[1],
                pointBackgroundColor: '#fff',

                borderWidth: chartOptions1.borderWidth,
                pointRadius: chartOptions1.pointRadius,
                lineTension: chartOptions1.lineTension,
              }
            ]
          },

          options: {
            responsive: true,
            animation: {
              duration: _animate ? 1000 : false
            },

            datasetStrokeWidth: 3,
            pointDotStrokeWidth: 4,

            tooltips: {
              enabled: true,
              cornerRadius: 0,

              titleFontColor: 'rgba(0, 0, 0, 0.8)',
              titleFontSize: 16,
              titleFontStyle: 'normal',

              bodyFontColor: 'rgba(0, 0, 0, 0.8)',
              bodyFontSize: 14,
              fontFamily: 'Open Sans',

              backgroundColor: 'rgba(255, 255, 255, 0.73)',
              borderWidth: 2,
              borderColor: 'rgba(254, 224, 116, 0.73)',

              caretSize: 5,

              xPadding: 12,
              yPadding: 12,
            },

            scales: {
              yAxes: [{
                ticks: {
                  fontFamily: "Open Sans",
                  fontColor: "#a0a4a9",
                  fontStyle: "600",
                  fontSize: "12",
                  beginAtZero: false,
                  maxTicksLimit: 6,
                  padding: 16,
                  callback: function(value, index, values) {
                    var val = parseInt(value / 1000);
                    return val > 0 ? val + 'k' : val;
                  }
                },
                gridLines: {
                  drawTicks: false,
                  display: false
                }
              }],

              xAxes: [{
                gridLines: {
                  zeroLineColor: "transparent",
                  display: true,
                  borderDash: [2, 3],
                  tickMarkLength: 3
                },
                ticks: {
                  fontFamily: "Open Sans",
                  fontColor: "#808489",
                  fontSize: "13",
                  fontStyle: "400",
                  padding: 12
                }
              }]
            },

            legend: {
              display: true,
              position: 'top'
            }
          }
        })



        ///////////
        //the Page views chart in infoboxes
        $('canvas.info-chart').each(function() {

          var ctx = this.getContext('2d');
          var gradientbg = ctx.createLinearGradient(0, 0, 0, 50);
          gradientbg.addColorStop(0, 'rgba(109, 187, 109, 0.25)');
          gradientbg.addColorStop(1, 'rgba(109, 187, 109, 0.05)');

          new Chart(ctx, {
            data: {
              labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
              datasets: [{
                type: 'line',
                data: $(this).data('values'),
                backgroundColor: gradientbg,
                hoverBackgroundColor: '#70bcd9',
                fill: true,

                borderColor: 'rgba(109, 187, 109, 0.6)',

                borderWidth: 2.5,
                pointRadius: 7,
                lineTension: 0.4,

                pointBackgroundColor: 'transparent',
                pointBorderColor: 'transparent'
              }]
            },

            options: {

              responsive: false,
              animation: {
                duration: _animate ? 1000 : false
              },

              legend: {
                display: false
              },
              layout: {
                padding: {
                  left: 10,
                  right: 10,
                  top: 0,
                  bottom: -10
                }
              },
              scales: {
                yAxes: [{
                  stacked: true,
                  ticks: {
                    display: false,
                    beginAtZero: true,
                  },
                  gridLines: {
                    display: false,
                    drawBorder: false
                  }
                }],

                xAxes: [{
                  stacked: true,
                  gridLines: {
                    display: false,
                    drawBorder: false
                  },
                  ticks: {
                    display: false //this will remove only the label
                  }
                }, ]
              }, //scales

              tooltips: {
                // Disable the on-canvas tooltip, because canvas area is small and tooltips will be cut (clipped)
                enabled: false,

                //use bootstrap tooltip instead
                custom: function(tooltipModel) {
                  var title = '';
                  var canvas = this._chart.canvas;

                  if (tooltipModel.body) {
                    title = tooltipModel.title[0] + ': ' + Number(tooltipModel.body[0].lines[0]).toLocaleString();
                  }
                  canvas.setAttribute('data-original-title', title); //will be used by bootstrap tooltip

                  $(canvas)
                    .tooltip({
                      placement: 'bottom',
                      template: '<div class="tooltip" role="tooltip"><div class="brc-info arrow"></div><div class="bgc-info tooltip-inner font-bolder text-110"></div></div>'
                    })
                    .tooltip('show')
                    .on('hidden.bs.tooltip', function() {
                      canvas.setAttribute('data-original-title', ''); //so that when mouse is back over canvas's blank area, no tooltip is shown
                    });

                }
              } //tooltips

            }
          })
        })


        //infobox's circular progress bar
        $('canvas.info-pie, canvas.task-progress').each(function() {
          var color = $(this).css('color')

          new Chart(this.getContext('2d'), {
            type: 'doughnut',
            data: {
              datasets: [{
                data: [$(this).data('percent'), 100 - $(this).data('percent')],
                backgroundColor: [
                  color,
                  "#e3e5ea"
                ],
                hoverBackgroundColor: [
                  color,
                  "#e3e5ea"
                ],
                borderWidth: 0
              }]
            },

            options: {
              responsive: false,
              cutoutPercentage: 80,
              legend: {
                display: false
              },
              animation: {
                duration: _animate ? 500 : false,
                easing: 'easeInCubic'
              },
              tooltips: {
                enabled: false,
              }
            }
          })
        })


      })
    </script>
  </body>
</html>