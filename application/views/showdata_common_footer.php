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



    <!-- include vendor scripts used in "DataTables" page. see "application/views/default/pages/partials/table-datatables/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-colreorder@1.5.2/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-select@1.3.1/js/dataTables.select.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons@1.6.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons-bs4@1.6.3/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons@1.6.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons@1.6.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons@1.6.3/js/buttons.colVis.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/datatables.net-responsive@2.2.5/js/dataTables.responsive.min.js"></script>



    <!-- include ace.js -->
    <script src="<?php echo base_url();?>dist/js/ace.min.js"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="<?php echo base_url();?>assets/js/demo.min.js"></script>



    <!-- "DataTables" page script to enable its demo functionality -->
    <script>
      jQuery(function($) {
        var tableId = '#datatable'

        var tableHead = document.querySelector('.sticky-nav')
        if(tableHead){
        tableHead.addEventListener('sticky-change', function(e) {
          // when  thead becomes sticky, add is-stuck class to it (which adds a border-bottom to it)
          this.classList.toggle('is-stuck', e.detail.isSticky)
        })
        }



        $.extend(true, $.fn.dataTable.defaults, {
          dom: "<'row'<'col-12 col-sm-6'l><'col-12 col-sm-6 text-right table-tools-col'f>>" +
            "<'row'<'col-12'tr>>" +
            "<'row'<'col-12 col-md-5'i><'col-12 col-md-7'p>>",
          renderer: 'bootstrap'
        })

        var $_table = $(tableId).DataTable({
          responsive: true,

          /** optional scrolling **/
          // scrollY: "300px",
          // scrollCollapse: true,

          colReorder: {
            //disable column reordering for first and last columns
            fixedColumnsLeft: 1,
            fixedColumnsRight: 1
          },

          // sDom: 'BRfrtlip',

          classes: {
            sLength: "dataTables_length text-left w-auto",
          },


          buttons: {
            dom: {
              button: {
                className: 'btn' //remove the default 'btn-secondary'
              },
              container: {
                className: 'dt-buttons btn-group bgc-white-tp2 text-right w-auto'
              }
            },

            buttons: [{
                "extend": "colvis",
                "text": "<i class='far fa-eye text-125 text-dark-m2'></i> <span class='d-none'>Show/hide columns</span>",
                "className": "btn-light-default btn-bgc-white btn-h-outline-primary btn-a-outline-primary",
                columns: ':not(:first)'
              },

              {
                "extend": "copy",
                "text": "<i class='far fa-copy text-125 text-purple'></i> <span class='d-none'>Copy to clipboard</span>",
                "className": "btn-light-default btn-bgc-white btn-h-outline-primary btn-a-outline-primary"
              },

              {
                "extend": "csv",
                "text": "<i class='fa fa-database text-125 text-success-m1'></i> <span class='d-none'>Export to CSV</span>",
                "className": "btn-light-default btn-bgc-white btn-h-outline-primary btn-a-outline-primary"
              },

              {
                "extend": "print",
                "text": "<i class='fa fa-print text-125 text-orange-d1'></i> <span class='d-none'>Print</span>",
                "className": "btn-light-default btn-bgc-white  btn-h-outline-primary btn-a-outline-primary",
                autoPrint: false,
                message: 'This print was produced using the Print button for DataTables'
              }
            ]
          },


          // first and last column are not sortable
          columnDefs: [{
              orderable: false,
              className: null,
              targets: 0
            },
            {
              orderable: false,
              className: null,
              targets: 1
            },
            {
              orderable: false,
              className: null,
              targets: -1
            },
            {
              responsivePriority: 1,
              targets: 2
            }
          ],


          // multiple row selection
          select: {
            style: 'multis'
          },

          // no specific initial ordering
          order: [],

          language: {
            search: '<i class="fa fa-search pos-abs mt-2 pt-3px ml-25 text-blue-m2"></i>',
            searchPlaceholder: " Search ..."
          }
        })

		
        // specify position of table buttons
        $('.table-tools-col')
          .append($_table.buttons().container())
          // move searchbox into table header
          .find('.dataTables_filter').appendTo('.page-tools').find('input').addClass('pl-45 radius-round').removeClass('form-control-sm')
          // and add a "+" button
		  // I hide this one line
          //.end().append('<button data-rel="tooltip" type="button" class="btn radius-round btn-outline-primary border-2 btn-sm ml-2" title="Add New"><i class="fa fa-plus"></i></button>')



        // helper methods to add/remove bgc-h-* class when selecting/deselecting rows
        var _highlightSelectedRow = function(row) {
          row.querySelector('input[type=checkbox]').checked = true
          row.classList.add('bgc-success-l3')
          row.classList.remove('bgc-h-default-l4')
        }
        var _unhighlightDeselectedRow = function(row) {
          row.querySelector('input[type=checkbox]').checked = false
          row.classList.remove('bgc-success-l3')
          row.classList.add('bgc-h-default-l4')
        }

        // listen to select/deselect event to highlight rows
        $_table
          .on('select', function(e, dt, type, index) {
            if (type == 'row') {
              var row = $_table.row(index).node()
              _highlightSelectedRow(row)
            }
          })
          .on('deselect', function(e, dt, type, index) {
            if (type == 'row') {
              var row = $_table.row(index).node()
              _unhighlightDeselectedRow(row)
            }
          })

        // when clicking the checkbox in table header, select/deselect all rows
        $(tableId)
          .on('click', 'th input[type=checkbox]', function() {
            if (this.checked) {
              $_table.rows().select().every(function() {
                _highlightSelectedRow(this.node())
              });
            } else {
              $_table.rows().deselect().every(function() {
                _unhighlightDeselectedRow(this.node())
              })
            }
          })

        // don't select row if we click on the "show details" `plus` sign (td)
        $(tableId).on('click', 'td.dtr-control', function(e) {
          e.stopPropagation()
        })


        // add/remove bgc-h-* class to TH when soring columns
        var previousTh = null
        var toggleTH_highlight = function(th) {
          th.classList.toggle('bgc-yellow-l2')
          th.classList.toggle('bgc-h-yellow-l3')
          th.classList.toggle('text-blue-d2')
        }

        $(tableId)
          .on('click', 'th:not(.sorting_disabled)', function() {
            if (previousTh != null) toggleTH_highlight(previousTh) // unhighlight previous TH
            toggleTH_highlight(this)
            previousTh = this
          })

        // don't select row when clicking on the edit icon
        $('a[data-action=edit').on('click', function(e) {
          e.preventDefault()
          e.stopPropagation() // don't select
        })

        // add a dark border
        $('.dataTables_wrapper')
          .addClass('border-b-1 border-x-1 brc-dark-l2')

          // highlight DataTable header
          // also already done in CSS, but you can use custom colors here
          .find('.row:first-of-type')
          .addClass('border-b-1 brc-default-l3 bgc-blue-l4')
          .next().addClass('mt-n1px') // move the next `.row` up by 1px to go below header's border

        // highlight DataTable footer
        $('.dataTables_wrapper')
          .find('.row:last-of-type')
          .addClass('border-t-1 brc-default-l3 mt-n1px bgc-default-l4')


        // if the table has scrollbars, add ace styling to it
        $('.dataTables_scrollBody').aceScroll({
          color: "grey"
        })


        //enable tooltips
        setTimeout(function() {
          $('.dt-buttons button')
            .each(function() {
              var div = $(this).find('span').first()
              if (div.length == 1) $(this).tooltip({
                container: 'body',
                title: div.parent().text()
              })
              else $(this).tooltip({
                container: 'body',
                title: $(this).text()
              })
            })
          $('[data-rel=tooltip').tooltip({
            container: 'body'
          })
        }, 0)

      })
    </script>
	 <!-- include common vendor scripts used in demo pages -->
  


    <!-- include vendor scripts used in "Alerts" page. see "application/views/default/pages/partials/alerts/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/interactjs@1.9.22/dist/interact.min.js"></script>

 <!-- include vendor scripts used in "Modals" page. see "application/views/default/pages/partials/modals/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/bootbox@5.4.0/bootbox.all.min.js"></script>

 <!-- "Modals" page script to enable its demo functionality -->
    <script>
      jQuery(function($) {
        // BootBox
        $('#id-bootbox-alert').on('click', function() {
          bootbox.alert({
            message: "This is alert.",
            onEscape: true,
            callback: function() {}
          })
        })

        $('#id-bootbox-confirm').on('click', function() {
          bootbox.confirm({
            message: "This is confirm.",
            onEscape: true,
            callback: function(result) {}
          })
        })

        $('#id-bootbox-prompt').on('click', function() {
          bootbox.prompt({
            title: "<p class='text-orange-d2 mb-0'>Are you sure?</p><p class='text-80 text-secondary'>Type \"yes\" and then click \"OK\" to conintue</p>",
            onEscape: true,
            callback: function(result) {
              //console.log(result);
            }
          })
        })


        $('#id-bootbox-custom').on('click', function() {
          bootbox.dialog({
            message: '<p>This dialog demonstrates many of the options available when using the Bootbox library</p>',
            onEscape: true,
            buttons: {
              success: {
                label: "<i class='fa fa-check'></i> Success!",
                className: "btn-success",
                callback: function() {
                  //Example.show("great success")
                }
              },
              danger: {
                label: "Danger!",
                className: "btn-danger",
                callback: function() {
                  //Example.show("uh oh, look out!")
                }
              },
              click: {
                label: "Click ME!",
                className: "btn-primary",
                callback: function() {
                  //Example.show("Primary button")
                }
              },
              button: {
                label: "Just a button...",
                className: "btn-secondary"
              }
            }
          })
        })

      })
    </script>

    <!-- "Alerts" page script to enable its demo functionality -->
    <script>
      jQuery(function($) {

        $('#id-toast-removeall').on('click', function() {
          $.aceToaster.removeAll()
          // $.aceToaster.removeAll(null, true) // `true` means remove instantly
        })

        /**
       $(document).on('add.ace.toaster', function(e) {
           // triggered when a new toast is made
           // e.target
       })    
       $(document).on('clear.ace.toaster', function(e, info) {
           // this is triggered when hideAll/removeAll is called
           // you can prevent them with `e.preventDefault()`
   
           // `info` has the following
           // String: info.placement
           // Boolean: info.remove (i.e remove or just hide)       
       })
       */




      

        $('#id-toast-success2').on('click', function() {
          $.aceToaster.add({
            placement: 'rc',
            body: "<p class='p-3 mb-0 text-center text-white'>\
                           <span class='d-inline-block mb-3 border-2 bgc-white radius-round p-25'>\
                               <i class='fa fa-check fa-2x mx-1px text-success'></i>\
                           </span><br />\
                           <span class='text-125'>Lorem ipsum dolor sit amet, consectetur adipiscing elit!</span>\
                       </p>\
                       <button data-dismiss='toast' class='close position-tr mt-1 mr-2 text-white'>&times;</button></div>\
                       ",

            width: 360,
            delay: 4000,

            close: false,

            className: 'bgc-success-d2 shadow ',

            bodyClass: 'border-0 p-0 text-dark-tp2',
            headerClass: 'd-none',

            progress: 'position-bl bgc-white-tp4 py-2px m-1px',
            progressReverse: true
          })
        })


        $('#id-toast-error').on('click', function() {
          $.aceToaster.add({
            placement: 'br',
            body: "<div class='p-3 m-2 d-flex'>\
                        <span class='align-self-center text-center mr-3 py-2 px-1 border-1 bgc-danger radius-round'>\
                           <i class='fa fa-times text-180 w-4 text-white mx-2px'></i>\
                        </span>\
                        <div>\
                           <h4 class='text-dark-tp3'>Something went wrong</h4>\
                           <span class='text-dark-tp3 text-110'>Lorem ipsum dolor sit amet, consectetur adipiscing elit!</span>\
                        </div>\
                       </div>\
                       <button data-dismiss='toast' class='btn text-grey btn-h-light-danger position-tr mr-1 mt-1'><i class='fa fa-times'></i></button></div>",

            width: 480,
            delay: 5000,

            close: false,

            className: 'shadow border-none radius-0 border-l-4 brc-danger',

            bodyClass: 'border-0 p-0',
            headerClass: 'd-none'
          })
        })


        $('#id-toast-dark').on('click', function() {
          $.aceToaster.add({
            placement: 'tl',
            title: 'This is a dark notice with 5s delay!',
            body: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href='#' class='text-warning-m3'>Vivamus eget</a> tincidunt velit.\
               <span class='opacity-5'><span class='opacity-5'><i class='fas fa-exclamation-triangle mr-1 mb-1 position-br opacity-5 fa-6x'></i></span></span>",

            //closeClass: 'btn btn-link btn-xs text-yellow text-150 text-decoration-none p-1',
            closeClass: 'btn btn-dark btn-h-danger btn-xs px-2 py-0 text-150 position-tr mr-n25 mt-n3',


            delay: 5000,

            className: 'bgc-black-tp2 radius-2px border-none border-l-4 brc-orange px-3 shadow',

            headerClass: 'bg-transparent border-0 text-orange-m3 text-115 mt-35',
            bodyClass: 'text-white pt-0 mb-4'
          })
        })


        $('#id-toast-primary').on('click', function() {
          $.aceToaster.add({
            placement: 'center',
            title: 'This is a primary notice!',
            body: '<div class="position-tr w-100 h-100 bgc-black-tp9" style="z-index: -1;"></div>\
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" class="text-yellow-l2 font-bolder">Vivamus eget</a> tincidunt velit.\
               ',

            image: 'assets/image/avatar/avatar.png',
            imageClass: 'radius-round p-2px bgc-white',

            closeClass: 'btn btn-link dh-zoom-2 no-underline text-white text-150 position-tr mt-n25 mr-n2',

            className: 'bgc-primary-tp2 border-0 px-2 shadow',
            headerClass: 'bg-transparent border-0 text-white text-120 pt-2',
            bodyClass: 'text-white pt-0 pb-2'
          })
        })



        $('#id-toast-sticky').on('click', function() {
          var toast = $.aceToaster.add({
            placement: 'tc',
            title: 'This is a draggable sticky notice!',
            body: '\
                       <div class="bgc-success-d2 px-3 py-3 radius-round ml-1 mr-3 mb-3 float-left">\
                         <i class="fa fa-check text-140 text-white mx-1px"></i>\
                       </div>\
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" class="text-blue-d2 font-bolder">Vivamus eget</a> tincidunt velit.\
                       <hr class="my-3" />\
                       <p class="text-center mt-2 mb-0">\
                           <button type="button" data-dismiss="toast" class="btn px-4 btn-light-secondary">Cancel</button>\
                           <button type="button" data-dismiss="toast" class="btn px-4 btn-green">Continue</button>\
                       </p>',

            width: '420px',

            sticky: true,
            belowNav: true,

            closeClass: 'btn btn-bgc-tp border-0 btn-light-danger btn-xs px-2 py-1px m2-px radius-1 text-100 font-normal position-tr mt-2px mr-2px',

            //icon: '<i class="fa fa-user fa-2x text-success-m3 ml-2 mr-1"></i>',

            headerClass: 'bgc-transparent border-0 text-white text-140 mb-3 p-0 pl-3 pr-4',
            titleClass: 'text-dark-tp3 font-normal pt-15',

            className: 'brc-success-m1 border-1 border-t-4 radius-0 pr-0',

            bodyClass: 'pt-0 pl-3 text-105'
          })

          // enable dragging using interact.js
          toast.style.touchAction = 'none'

          var position = {
            x: 0,
            y: 0
          }
          interact(toast)
            .draggable({
              ignoreFrom: '.btn', //for Firefox on Android to react to button events
              listeners: {
                move: function(event) {
                  position.x += event.dx
                  position.y += event.dy

                  Object.assign(event.target.style, {
                    transform: "translateX(" + position.x + "px) translateY(" + position.y + "px)"
                  })
                },
              }
            })
        })



        ////////////////
        $('#id-sweeralert-1').on('click', function() {
          var swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success mx-2',
              cancelButton: 'btn btn-danger mx-2'
            },
            buttonsStyling: false
          })

          swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            scrollbarPadding: false,
            confirmButtonText: 'Yes, do it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
          }).then(function(result) {
            if (result.value) {
              swalWithBootstrapButtons.fire(
                'Deleted!',
                'Operation completed successfully.',
                'success'
              )
            } else if (
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Cancelled',
                'Cancelled successfully.',
                'error'
              )
            }
          })
        })

        $('#id-sweeralert-2').on('click', function() {
          Swal.fire({
            position: 'top-end',
            scrollbarPadding: false,
            type: 'info',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 2000
          })
        })

      })
    </script>
	 <!-- "Tooltips & Popovers" page script to enable its demo functionality -->
    <script>
      jQuery(function($) {
        $('#tooltip').tooltip()

        // tooltips with custom templates
        $('#tooltip-1')
          .tooltip({
            template: '<div class="tooltip" role="tooltip"><div class="brc-secondary-d3 arrow"></div><div class="bgc-secondary-d3 tooltip-inner text-105 text-600"></div></div>'
          })

        $('#tooltip-2')
          .tooltip({
            template: '<div class="tooltip" role="tooltip"><div class="arrow brc-danger-d3"></div><div class="bgc-danger-d3 tooltip-inner text-110 text-600 p-2"></div></div>'
          })

        $('#tooltip-3')
          .tooltip({
            template: '<div class="tooltip" role="tooltip"><div class="arrow brc-success-d3"></div><div class="bgc-success-d3 tooltip-inner text-dark-tp3 text-600 text-110 px-2 pb-15"></div></div>'
          })

        $('#tooltip-4')
          .tooltip({
            template: '<div class="tooltip" role="tooltip"><div class="arrow brc-yellow-d1"></div><div class="bgc-yellow-d1 tooltip-inner text-dark-tp2 text-110 text-600 px-2 pb-15"></div></div>'
          })

        $('#tooltip-5')
          .tooltip({
            template: '<div class="tooltip" role="tooltip"><div class="arrow brc-purple-d2"></div><div class="shadow border-2 radius-2 brc-purple-d2 bgc-purple-l4 tooltip-inner text-dark-tp1 text-110 text-600 px-2 pb-15"></div></div>'
          })


        // popovers
        $('#popover-1')
          .popover({
            container: 'body',
            trigger: 'focus'
          })

        // popovers with custom templates
        $('#popover-2')
          .popover({
            container: 'body',
            trigger: 'focus',
            template: '<div class="popover brc-primary-m2 border-b-2" role="tooltip"><div class="arrow arrow2 brc-primary-l2"></div><div class="arrow brc-primary-m1"></div><h3 class="popover-header bgc-primary-l2 border-0 text-110 text-dark-tp3 text-600"></h3><div class="popover-body text-grey-d3 text-105"></div></div>'
          })

        $('#popover-3')
          .popover({
            container: 'body',
            trigger: 'focus',
            template: '<div class="popover brc-success-m3" role="tooltip"><div class="arrow brc-success"></div><h3 class="popover-header border-0 bgc-success-m2 text-dark-tp4 text-600"></h3><div class="popover-body text-grey-d2 text-110"></div></div>'
          })

        $('#popover-4')
          .popover({
            container: 'body',
            trigger: 'focus',
            template: '<div class="popover bgc-white brc-purple-m3 border-2" role="tooltip"><div class="arrow brc-purple"></div><div class="popover-body text-grey-d2 text-110"></div></div>'
          })

        $('#popover-5')
          .popover({
            container: 'body',
            trigger: 'focus',
            template: '<div class="popover bgc-brown-d3 border-0" role="tooltip"><div class="arrow arrow2 brc-brown-d3"></div><div class="popover-body text-white text-110 text-600"></div></div>'
          })

      })
    </script>
  </body>

<!-- Copied from http://104.237.146.83/templates/ace/demo/html/table-datatables.html by Cyotek WebCopy 1.7.0.600, Thursday, September 10, 2020, 6:05:30 PM -->
</html>