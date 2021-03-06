﻿<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            <div class="row mt-4">
              <div class="col-12">
                <div class="card bcard">
                  <div class="card-header">
                    <div class="card-toolbar mr-auto no-border">
                      <label class="mb-0">
                        <span class="align-middle d-block d-sm-inline text-600">
                        Add Property
                    </span>
                       <input type="checkbox" id="id-validate" class="input-lg text-secondary-l1 bgc-purple-d1 ml-2 ace-switch ace-switch-onoff align-middle" style="display:none;">
                      </label>
                    </div>

                    <div class="card-toolbar pl-3">
                      <!-- buttons used to control/navigate the wizard -->
                      <button id="wizard-1-prev" type="button" class="mx-2px btn btn-outline-default btn-h-outline-primary btn-bgc-white btn-a-primary border-2 radius-1" disabled="">
                        <i class="fa fa-chevron-left"></i>
                      </button>

                      <button id="wizard-1-next" type="button" class="mx-2px btn btn-outline-default btn-h-outline-primary btn-bgc-white btn-a-primary border-2 radius-1">
                        <i class="fa fa-chevron-right"></i>
                      </button>

                      <button id="wizard-1-finish" type="button" class="d-none mx-2px px-3 btn btn-outline-success btn-h-outline-success btn-bgc-white border-2 radius-1">
                        <i class="fa fa-arrow-right"></i>
                      </button>
                    </div>
                  </div>


                  <div class="card-body">

                    <div id="smartwizard-1" class="d-none mx-n3 mx-sm-auto">
                      <ul class="mx-auto">
                       

                        <li>
                          <a href="#step-1">
                            <span class="step-title">
                                1
                            </span>

                            <span class="step-title-done">
                                <i class="fa fa-check text-success"></i>
                            </span>
                          </a>

                          <span class="step-description">
                            Basic Information
                        </span>
                        </li>


                        <li>
                          <a href="#step-2">
                            <span class="step-title">
                                2
                            </span>

                            <span class="step-title-done">
                                <i class="fa fa-check text-success"></i>
                            </span>
                          </a>

                          <span class="step-description">
                            Property Features
                        </span>
                        </li>


                        <li>
                          <a href="#step-3">
                            <span class="step-title">
                                3
                            </span>

                            <span class="step-title-done">
                                <i class="fa fa-check text-success"></i>
                            </span>
                          </a>

                          <span class="step-description">
                            Upload Picture
                        </span>
                        </li>


                        <li>
                          <a href="#step-4">
                            <span class="step-title">
                                4
                            </span>

                            <span class="step-title-done">
                                <i class="fa fa-check text-success"></i>
                            </span>
                          </a>

                          <span class="step-description">
                            Finish
                        </span>
                        </li>
                      </ul>


                      <div class="px-2 py-2 mb-4">
                        <div id="step-1">
							<form action="<?php echo base_url();?>index.php/super_admin/save_property" id="first" method="post"  class="mt-lg-3"  enctype="multipart/form-data">
                          <!--<form novalidate="" action="#" method="post"> -->
                            	
								<div class="form-group form-row mt-4">
									<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="property_id">
									  <span class="floating-label text-grey-m3">
										Property ID
									</span>
									
									</div>
									<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="house_name_no">
									  <span class="floating-label text-grey-m3">
										House Name/Number
									</span>
									
									</div>
									 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="street_road_no">
									  <span class="floating-label text-grey-m3">
										Street/Road Number
									</span>
									</div>
									 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="post_code">
									  <span class="floating-label text-grey-m3">
										Post Code
									</span>
									</div>
									<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
									 <select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="no_of_bed">
									<option value="" selected="selected"> No. of Bed</option>
								   <option value="Studio Flat">Studio Flat</option>
									  <option value="1">1</option>
			
									  <option value="2">2</option>
			
									  <option value="3">3</option>
			
									  <option value="4">4</option>
			
									  <option value="5">5</option>
									  <option value="6">6</option>
			
									  <option value="7">7</option>
			
									  <option value="8">8</option>
			
									  <option value="9">9</option>
			
									  <option value="10">10</option>
			
								</select>
									</div>
									
									
								</div>
								
								
								
								<div class="form-group form-row mt-4">
									
									 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="city_location">
									  <span class="floating-label text-grey-m3">
										City/Location  <small>e.g London</small>
									</span>
									</div>
									
									
									<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
									   <select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="property_status">
										<option value="" selected="selected"> Property Status</option>
									    <option value="1">To Let</option>
									    <option value="2">Let Agreed</option>
									  </select> 
									
									</div>
									
									 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
									  <select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="rent_type">
										<option value="" selected="selected">Rent Type</option>
									    <option value="Per Week">Per Week</option>
									    <option value="Per Month">Per Month</option>
									  </select> 
									</div>
									 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="rent_amount">
									  <span class="floating-label text-grey-m3">
										Rent (£)
									</span>
									</div>
									<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
										<div class="pos-rel">
											  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1" name="available_date">
											   <span class="floating-label text-grey-m3">
												Available Date
											   </span>
										  </div>
									</div>
									
								</div>
								<div class="form-group form-row mt-4">
									
									
									 
									<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
									  <div class="pos-rel">
											  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1_1" name="next_viewing_date">
											   <span class="floating-label text-grey-m3">
												Next Viewing Date
											   </span>
										  </div>
									</div>
									<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="viewing_time">
									  <span class="floating-label text-grey-m3">
										Viewing Time 
									</span>
									
									</div>
									<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
									 <select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="landlord_reg_no">
										<option value="" selected="selected">Select Landlord</option>
									    <?php
										foreach ($landlord_list as $value)
										{
										?>
										<option value='<?php echo $value->id;?>'><?php echo $value->firstname." ".$value->surname;?></option>
										<?php
										}
										?>	
									  </select> 
									
									</div>
									 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
									 <select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="service">
										<option value="" selected="selected">Service</option>
									    <option value="Guaranteed Rent">Guaranteed Rent</option>
                                        <option value="Let Only">Let Only</option>
                                        <option value="Let and Rent Collection">Let and Rent Collection</option>
                                        <option value="Management">Management</option>
									 </select> 
									</div>
									<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
									 <script type="text/javascript">
										function ShowHideDiv() {
											var ddlPassport = document.getElementById("ddlPassport");
											
											var openCheque = document.getElementById("openCheque");
											
											openCheque.style.display = ddlPassport.value == "1" ? "block" : "none";
											
										}
									</script>
									 <select class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="ddlPassport" onChange="ShowHideDiv()" name="is_fee">
										<option value="" selected="selected">Is Fees Applied?</option>
										<option value='1'>Yes</option>
										<option value='0'>No</option>
									</select>
									  
									
									</div>
									
								</div>
								<div class="form-group form-row mt-4">
									<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1"></div>
									<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1"></div>
									<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1"></div>
									<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1"></div>
									<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
										<div id="openCheque" style="display: none">
										Fees (&pound;)
												<hr />
											  <input type="text"  class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" name="fee_amount">
											  Total Fees
											  <hr />
											  <input type="text"  class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" name="total_fee">
										</div>
									</div>
								</div>
                          </form>

                          <!-- if "Input Validation" is selected, we should validate this form before going to next step -->
                          <form id="validation-form" class="d-none mt-4 text-dark-m1">
                            <h4 class="text-primary mb-4 ml-md-4">
                              Enter the following information
                            </h4>

                            <div class="form-group row mt-2">
                              <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                Email Address:
                              </div>

                              <div class="col-sm-9 pr-0 pr-sm-3">
                                <input required="" type="email" name="email" class="form-control col-11 col-sm-8 col-md-6" placeholder="">
                              </div>
                            </div>


                            <div class="form-group row">
                              <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                Password:
                              </div>

                              <div class="col-sm-9 pr-0 pr-sm-3">
                                <input required="" type="password" id="password" name="password" class="form-control col-11 col-sm-6 col-md-4" placeholder="">
                              </div>
                            </div>


                            <div class="form-group row">
                              <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                Confirm Password:
                              </div>

                              <div class="col-sm-9 pr-0 pr-sm-3">
                                <input required="" type="password" name="password2" class="form-control col-11 col-sm-6 col-md-4" placeholder="">
                              </div>
                            </div>


                            <hr>


                            <div class="form-group row">
                              <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                Company Name:
                              </div>

                              <div class="col-sm-9 pr-0 pr-sm-3">
                                <input type="text" name="company" class="form-control col-11 col-sm-8 col-md-5" placeholder="Optional ...">
                              </div>
                            </div>


                            <div class="form-group row">
                              <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                Phone Number:
                              </div>

                              <div class="col-sm-9 pr-0 pr-sm-3">
                                <input required="" type="text" name="phone" class="form-control col-11 col-sm-8 col-md-3" id="phone" placeholder="">
                              </div>
                            </div>


                            <div class="form-group row">
                              <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                Company URL:
                              </div>

                              <div class="col-sm-9 pr-0 pr-sm-3">
                                <input required="" type="url" name="url" class="form-control col-11 col-sm-8 col-md-8" id="url" placeholder="">
                              </div>
                            </div>


                            <hr>


                            <div class="form-group row">
                              <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                Subscribe to:
                              </div>

                              <div class="col-sm-9 pr-0 pr-sm-3 pt-1">
                                <div>
                                  <label>
                                    <input type="checkbox" id="id-check-1" name="subscription" value="1" class="mr-1 align-sub">
                                    Latest news and announcements
                                  </label>
                                </div>

                                <div>
                                  <label>
                                    <input type="checkbox" id="id-check-2" name="subscription" value="2" class="mr-1 align-sub">
                                    Product offers and discounts
                                  </label>
                                </div>
                              </div>
                            </div>


                            <div class="form-group row">
                              <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                Gender:
                              </div>

                              <div class="col-sm-9 pr-0 pr-sm-3 pt-1">
                                <div>
                                  <label>
                                    <input type="radio" id="id-radio-2" name="gender" value="1" class="mr-1 align-sub">
                                    Male
                                  </label>
                                </div>

                                <div>
                                  <label>
                                    <input type="radio" id="id-radio-3" name="gender" value="2" class="mr-1 align-sub">
                                    Female
                                  </label>
                                </div>
                              </div>
                            </div>


                            <hr>


                            <div class="form-group row">
                              <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                Platform:
                              </div>

                              <div class="col-sm-9 pr-0 pr-sm-3">
                                <select class="form-control col-11 col-sm-4" id="platform" name="platform" data-placeholder="Click to Choose...">
                                  <option value="">&nbsp;</option>
                                  <option value="linux">Linux</option>
                                  <option value="windows">Windows</option>
                                  <option value="mac">Mac OS</option>
                                  <option value="ios">iOS</option>
                                  <option value="android">Android</option>
                                </select>
                              </div>
                            </div>


                            <div class="form-group row">
                              <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                Comment:
                              </div>

                              <div class="col-sm-9 pr-0 pr-sm-3">
                                <textarea class="form-control col-11 col-sm-12 col-md-6" name="comment" id="comment"></textarea>
                              </div>
                            </div>


                            <div class="form-group row mt-4">
                              <div class="col-sm-9 pr-0 pr-sm-3 pt-1 offset-sm-3">
                                <label>
                                  <input required="" type="checkbox" class="border-2 brc-success-m1 brc-on-checked input-lg text-dark-tp3 mr-1" id="id-check-terms" name="agree">
                                  I agree to the terms of use
                                </label>
                              </div>
                            </div>
                          </form>
                        </div>


                        <div id="step-2">
                           <form novalidate="">
                            	
								<div class="form-group form-row mt-4">
									<div class="col-sm-12 input-floating-label text-blue-d2 brc-blue-m1">
									<span>Property Title</span>
									<hr />
										<textarea id="summernote" name="property_title"></textarea>
										<hr />
									</div>
									<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
									 <select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="property_type">
										<option value="" selected="selected">Property Type</option>
									  <option value="Flat">Flat</option><option value="Detached">Detached</option><option value="Semi-Detached">Semi-Detached</option><option value="Terraced">Terraced</option><option value="End Terrace">End Terrace</option><option value="Student House">Student House</option><option value="House">House</option><option value="Bungalow">Bungalow</option><option value="Maisonette">Maisonette</option><option value="Mooring">Mooring</option><option value="Testing">Testing</option>                                                                        
                                                                        <option value="Other">Other</option>
																		</select>
									</div>
									
									<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="no_of_baths">
									  <span class="floating-label text-grey-m3">No. of Baths</span>
									</div>
								
									
									
									
									
								</div>
								
								
								
								<div class="form-group form-row mt-4">
									
									 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
									  <span>Floor Plan 1</span><hr>
									  <input type="file" id = "id-input-file-2" name="userfile[0]" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none"  onchange="ValidateSize(this)"/>
									</div>
									 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
									   <span>Floor Plan 2</span><hr>
									  <input type="file" id = "id-input-file-2" name="userfile[1]" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none"  onchange="ValidateSize(this)"/>
									</div>
									
									<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
									  <span>Floor Plan 3</span><hr>
									  <input type="file" id = "id-input-file-2" name="userfile[2]" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none"  onchange="ValidateSize(this)"/>
									</div>
									<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
									  <span>Floor Plan 3</span><hr>
									  <input type="file" id = "id-input-file-2" name="userfile[3]" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none"  onchange="ValidateSize(this)"/>
									</div>
									
								</div>
								<div class="form-group form-row mt-4">
									
									<div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="video_tour1">
									  <span class="floating-label text-grey-m3">
										Video Tour 1
									</span>
									
									</div>
									 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="video_tour2">
									  <span class="floating-label text-grey-m3">
										Video Tour 2
									</span>
									</div>
									 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
									  <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="video_tour3">
									  <span class="floating-label text-grey-m3">
										Video Tour 3
									</span>
									</div>
									
								</div>
								<div class="form-group form-row mt-4">
									<div class="col-sm-12 input-floating-label text-blue-d2 brc-blue-m1">
									<span>Property Details</span><hr />
										<!--<textarea class="form-control" name="content" id="markdown-editor" rows="10"></textarea> -->
										<textarea id="summernote1" name="property_details"></textarea>
									</div>
									
								</div>
								<div class="form-group form-row mt-4">
									<span>Property Features</span><hr />
									<div class="col-sm-12 input-floating-label text-blue-d2 brc-blue-m1">
										<!--<textarea class="form-control" name="content" id="markdown-editor1" rows="10"></textarea> -->
										<textarea id="summernote2" name="property_features"></textarea>
									</div>
								</div>
								<div class="form-group form-row mt-4">
									<span>Property Conclusion</span><hr />
									<div class="col-sm-12 input-floating-label text-blue-d2 brc-blue-m1">
										<textarea id="summernote3" name="property_conclusion"></textarea>
									</div>
								</div>
								
								
                          </form>
                        </div>


                        <div id="step-3" class="text-center">
                          <h3 class="font-light text-primary my-4">
                            Upload Property Pictures
                          </h3>
							 
                        <!--  <form autocomplete="off" class="col-sm-9 col-lg-6 col-xl-5 mx-auto d-block btn-group btn-group-toggle" data-toggle="buttons"> -->
							
									
									 <form id="dropzone" action="/upload" class="dropzone bgc-white border-0 shadow-sm radius-1 mt-3">
									  <div class="fallback d-none">
										<input name="file" type="file" multiple="">
									  </div>
					
									  <div class="dz-default dz-message">
										<span class="text-150  text-grey-d2">
										<span class="text-130 font-bolder"><i class="fa fa-caret-right text-danger-m1"></i> Drop files</span>
										to upload
										<span class="text-90 text-grey-m1">(or click)</span>
										<br>
										<i class="upload-icon fas fa-cloud-upload-alt text-blue-m1 fa-3x mt-4"></i>
										</span>
									  </div>
									</form>
									 <!-- the `html` of this element will be used by dropzone instance for previewing files/images -->
									<div id="preview-template" class="d-none">
									  <div class="dz-preview dz-file-preview">
										<div class="dz-image">
										  <img alt="Dropzone placeholder" data-dz-thumbnail="">
										</div>
					
										<div class="dz-details">
										  <div class="dz-size">
											<span data-dz-size=""></span>
										  </div>
					
										  <div class="dz-filename">
											<span data-dz-name=""></span>
										  </div>
										</div>
					
										<div class="dz-progress progress border-1 brc-yellow-tp2" style="height: 0.75rem;">
										  <div class="progress-bar bgc-success dz-upload " role="progressbar" data-dz-uploadprogress=""></div>
										</div>
					
										<div class="dz-error-message">
										  <span data-dz-errormessage=""></span>
										</div>
					
										<div class="dz-success-mark">
										  <span class="fa-stack fa-lg text-150">
											<i class="fa fa-circle fa-stack-2x text-white"></i>
											<i class="fa fa-check fa-stack-1x fa-inverse text-success-m1"></i>
										</span>
										</div>
					
										<div class="dz-error-mark">
										  <span class="fa-stack fa-lg text-150">
											<i class="fa fa-circle fa-stack-2x text-danger-m3"></i>
											<i class="fas fa-exclamation fa-stack-1x fa-inverse text-white"></i>
										</span>
										</div>
									  </div>
									</div>
								</div>
                       <!--   </form> -->
                      


                        <div id="step-4" class="text-center">
                          <h3 class="text-400 text-success mt-4"> Congrats! </h3>
                          You Successfully saved your property details information.
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                        </div>
                      </div>
                    </div><!-- /#smartwizard-1 -->

                  </div><!-- /.card-body -->
                </div><!-- .card -->

              </div>
            </div>
          </div>

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

          
            </div>
          </div><!-- .modal-dialog -->
        </div><!-- .modal-aside -->
      </div>

    </div>

    <!-- include common vendor scripts used in demo pages -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>



    <!-- include vendor scripts used in "Wizard & Validation" page. see "application/views/default/pages/partials/form-wizard/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@4.4.1/dist/js/jquery.smartWizard.min.js"></script>
	<!--start date -->
	 <script src="https://cdn.jsdelivr.net/npm/tiny-date-picker@3.2.8/dist/date-range-picker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/eonasdan-bootstrap-datetimepicker@4.17.47/src/js/bootstrap-datetimepicker.min.js"></script>
	<!--end date -->

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.5/dist/jquery.inputmask.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	 <script src="https://cdn.jsdelivr.net/npm/jquery.hotkeys@0.1.0/jquery.hotkeys.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-wysiwyg@2.0.1/js/bootstrap-wysiwyg.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/markdown@0.5.0/lib/markdown.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-markdown@2.10.0/js/bootstrap-markdown.min.js"></script>
    <!-- include ace.js -->
    <script src="<?php echo base_url();?>dist/js/ace.min.js"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="<?php echo base_url();?>assets/js/demo.min.js"></script>

	<!-- include vendor scripts used in "File Upload" page. see "application/views/default/pages/partials/form-upload/@vendor-scripts.hbs" -->
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.7.2/dist/dropzone.min.js"></script>
	<!-- "File Upload" page script to enable its demo functionality -->
    <script>
      Dropzone.autoDiscover = false;

      jQuery(function($) {
        try {

          $('#dropzone').addClass('dropzone');
          var myDropzone = new Dropzone('#dropzone', {
            previewTemplate: $('#preview-template').html(),
            // autoProcessQueue: false,
            addRemoveLinks: false,

            thumbnailHeight: 120,
            thumbnailWidth: 120,
            maxFilesize: 0.5,
            filesizeBase: 1000,

            //addRemoveLinks : true,
            //dictRemoveFile: 'Remove',


            thumbnail: function(file, dataUrl) {
              if (file.previewElement) {
                $(file.previewElement).removeClass("dz-file-preview");
                $(file.previewElement).find("[data-dz-thumbnail]").each(function() {
                  var thumbnailElement = this;
                  thumbnailElement.alt = file.name;
                  thumbnailElement.src = dataUrl;
                })

                setTimeout(function() {
                  $(file.previewElement).addClass("dz-image-preview")
                }, 1)
              }
            }
          }) // new Dropzone



          // simulating upload progress
          var minSteps = 6,
            maxSteps = 60,
            timeBetweenSteps = 100,
            bytesPerStep = 100000;

          myDropzone.uploadFiles = function(files) {
            var self = this;

            for (var i = 0; i < files.length; i++) {
              var file = files[i];
              totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

              for (var step = 0; step < totalSteps; step++) {
                var duration = timeBetweenSteps * (step + 1);
                setTimeout(function(file, totalSteps, step) {
                  return function() {
                    file.upload = {
                      progress: 100 * (step + 1) / totalSteps,
                      total: file.size,
                      bytesSent: (step + 1) * file.size / totalSteps
                    };

                    self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
                    if (file.upload.progress == 100) {
                      file.status = Dropzone.SUCCESS;
                      self.emit("success", file, 'success', null);
                      self.emit("complete", file);
                      self.processQueue();
                    }
                  };
                }(file, totalSteps, step), duration);
              } // fpr step
            } //for i

          } // myDropzone.uploadFiles

        } catch (err) {
          // console.log(err)
          // alert('Dropzone.js does not support older browsers!');
          $('#dropzone')
            .find('.fallback').removeClass('d-none')
            .end().find('.dz-default').addClass('d-none')
            .end().find('input[type=file]').aceFileInput({
              style: 'drop',
              droppable: true,

              container: 'border-1 border-dashed brc-grey-l1 brc-h-info-m2 shadow-sm',

              placeholderClass: 'text-125 text-600 text-grey-m3 my-2',
              placeholderText: 'Drop images here or click to choose',
              placeholderIcon: '<i class="fa fa-cloud-upload-alt fa-3x text-info-m2 my-2"></i>',

              //previewSize: 64,
              thumbnail: 'large'
            })
        }

      })
    </script>
    <!-- "Wizard & Validation" page script to enable its demo functionality -->
    <script>
      jQuery(function($) {
        // Smart Wizard v4.4.1 example

        // show/hide form validation
        $('#id-validate')
          .prop('checked', false)
          .on('change', function() {
            if (this.checked) {
              $('form[novalidate]').addClass('d-none')
              $('#validation-form').removeClass('d-none')
            } else {
              $('form[novalidate]').removeClass('d-none')
              $('#validation-form').addClass('d-none')
            }
          })


        var stepCount = $('#smartwizard-1').find('li > a').length
        var left = (100 / (stepCount * 2))
        // for example if we have **4** steps, `left` and `right` of progressbar should be **12.5%**
        // so that before first step and after last step we don't have any lines
        $('#smartwizard-1').find('.wizard-progressbar').css({
          left: left + '%',
          right: left + '%'
        })

        // enable wizard
        var selectedStep = 0
        $('#smartwizard-1').smartWizard({
            theme: 'circles',
            useURLhash: false,
            showStepURLhash: false,
            autoAdjustHeight: true,
            transitionSpeed: 150,

            //errorSteps: [0,1],
            //disabledSteps: [2,3],

            selected: selectedStep,

            toolbarSettings: {
              toolbarPosition: 'bottom', // none, top, bottom, both
              toolbarButtonPosition: 'right', // left, right
              showNextButton: false, // show/hide a Next button
              showPreviousButton: false, // show/hide a Previous button
              toolbarExtraButtons: [
                $('<button class="btn btn-outline-secondary sw-btn-prev radius-l-1 mr-2px"><i class="fa fa-arrow-left mr-15"></i> Previous</button>'),

                $('<button class="btn btn-outline-primary sw-btn-next sw-btn-hide radius-r-1">Next <i class="fa fa-arrow-right mr-15"></i></button>'),

                $('<button class="btn btn-green sw-btn-finish radius-r-1">Finish <i class="fa fa-check mr-15"></i></button>')
                .on('click', function() {
                  //Finish Action
				  $("#first").submit();
                }),
              ]
            }
          })

          .removeClass('d-none') // initially it is hidden, and we show it after it is properly rendered

          .on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
            // move the progress bar by increasing its size (width)
            var progress = parseInt((stepNumber + 1) * 100 / stepCount)
            var halfStepWidth = parseInt(100 / stepCount) / 2
            progress -= halfStepWidth //because for example for the first step, we don't want progressbar to move all the way to next step

            $('#smartwizard-1').find('.wizard-progressbar').css('max-width', progress + '%')

            // hide/show card toolbar buttons
            // if we are not in the first step, previous button should be enabled, otherwise disabled
            if (stepNumber > 0) {
              $('#wizard-1-prev').removeAttr('disabled')
            } else {
              $('#wizard-1-prev').attr('disabled', '')
            }

            // if we are in the last step, next button should be hidden, and finish button shown instead
            if (stepNumber == stepCount - 1) {
              $('#wizard-1-next').addClass('d-none')
              $('#wizard-1-finish').removeClass('d-none')
            } else {
              $('#wizard-1-next').removeClass('d-none')
              $('#wizard-1-finish').addClass('d-none')
            }
          })
          .on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
            if (stepNumber == 0 && stepDirection == 'forward') {

              // use jQuery plugin to validate
              if (document.getElementById('id-validate').checked && !$('#validation-form').valid()) return false;

              // or use HTML & Bootstrap validation
              /**
       var form = document.getElementById('validation-form');
       if (form.checkValidity() === false) {
         event.preventDefault();
         event.stopPropagation();
   
         form.classList.add('was-validated');
         return false;
       }
       */
            }
          })
          .triggerHandler('showStep', [null, selectedStep, null, null]) // move progressbar to step 1 (0 index)


        // handle `click` event of card toolbar buttons
        $('#wizard-1-prev').on('click', function() {
          $('#smartwizard-1').smartWizard('prev')
        })

        $('#wizard-1-next').on('click', function() {
          $('#smartwizard-1').smartWizard('next')
        })

        $('#wizard-1-finish').on('click', function() {
          //
        })




        /////////////////////////////////////
        // add input mask to some inputs
        try { // not working in IE11
          $("#phone").inputmask("(999) 999-9999")
          $("#url").inputmask({
            regex: "https?://.*"
          })
        } catch (e) {
          $("#phone").attr("placeholder", "(999) 999-9999")
        }

		// update icons for summernote example
        $.extend($.summernote.options.icons, {
          'align': 'fa fa-align',
          'alignCenter': 'fa fa-align-center',
          'alignJustify': 'fa fa-align-justify',
          'alignLeft': 'fa fa-align-left',
          'alignRight': 'fa fa-align-right',
          'indent': 'fa fa-indent',
          'outdent': 'fa fa-outdent',
          'arrowsAlt': 'fa fa-arrows-alt',
          'bold': 'fa fa-bold',
          'caret': 'fa fa-caret-down text-grey-m2 ml-1',
          'circle': 'fa fa-circle',
          'close': 'fa fa fa-close',
          'code': 'fa fa-code',
          'eraser': 'fa fa-eraser',
          'font': 'fa fa-font',
          'italic': 'fa fa-italic',
          'link': 'fa fa-link text-success-m1',
          'unlink': 'fas fa-unlink',
          'magic': 'fa fa-magic text-brown-m1',
          'menuCheck': 'fa fa-check',
          'minus': 'fa fa-minus',
          'orderedlist': 'fa fa-list-ol text-blue',
          'pencil': 'fa fa-pencil',
          'picture': 'far fa-image text-purple-d1',
          'question': 'fa fa-question',
          'redo': 'fa fa-repeat',
          'square': 'fa fa-square',
          'strikethrough': 'fa fa-strikethrough',
          'subscript': 'fa fa-subscript',
          'superscript': 'fa fa-superscript',
          'table': 'fa fa-table text-danger-m2',
          'textHeight': 'fa fa-text-height',
          'trash': 'fa fa-trash',
          'underline': 'fa fa-underline',
          'undo': 'fa fa-undo',
          'unorderedlist': 'fa fa-list-ul text-blue',
          'video': 'far fa-file-video text-pink-m1'
        })
		$('#summernote').summernote({
          height: 150,
          minHeight: 150,
          maxHeight: 400
        })
        $('#summernote1').summernote({
          height: 250,
          minHeight: 150,
          maxHeight: 400
        })
		$('#summernote2').summernote({
          height: 250,
          minHeight: 150,
          maxHeight: 400
        })
		$('#summernote3').summernote({
          height: 150,
          minHeight: 150,
          maxHeight: 400
        })
		////////////////////////////////
		
		////////////////////////////////
        //markdown editor
        $('#markdown-editor').markdown({
            iconlibrary: 'fa'
          })
          .each(function() {
            $(this).parent().find('.btn')
              .addClass('btn-xs btn-bgc-white btn-light-secondary btn-a-light-primary')
              .removeClass('btn-default')

            $(this).parent().find('.btn[title~="Heading"] > .fa').attr('class', 'fas fa-heading')
            $(this).parent().find('.btn[title~="Image"] > .fa').attr('class', 'far fa-image')

            $(this).parent().find('.md-control-fullscreen > .fa , .exit-fullscreen > .fa').addClass('text-orange-d1 text-110')

            $(this).parent().find('.btn-group').addClass('mr-1')
          })
        /////////////////////////////////////
		////////////////////////////////
        //markdown editor
        $('#markdown-editor1').markdown({
            iconlibrary: 'fa'
          })
          .each(function() {
            $(this).parent().find('.btn')
              .addClass('btn-xs btn-bgc-white btn-light-secondary btn-a-light-primary')
              .removeClass('btn-default')

            $(this).parent().find('.btn[title~="Heading"] > .fa').attr('class', 'fas fa-heading')
            $(this).parent().find('.btn[title~="Image"] > .fa').attr('class', 'far fa-image')

            $(this).parent().find('.md-control-fullscreen > .fa , .exit-fullscreen > .fa').addClass('text-orange-d1 text-110')

            $(this).parent().find('.btn-group').addClass('mr-1')
          })
        /////////////////////////////////////
		////////////////////////////////
        //markdown editor
        $('#markdown-editor2').markdown({
            iconlibrary: 'fa'
          })
          .each(function() {
            $(this).parent().find('.btn')
              .addClass('btn-xs btn-bgc-white btn-light-secondary btn-a-light-primary')
              .removeClass('btn-default')

            $(this).parent().find('.btn[title~="Heading"] > .fa').attr('class', 'fas fa-heading')
            $(this).parent().find('.btn[title~="Image"] > .fa').attr('class', 'far fa-image')

            $(this).parent().find('.md-control-fullscreen > .fa , .exit-fullscreen > .fa').addClass('text-orange-d1 text-110')

            $(this).parent().find('.btn-group').addClass('mr-1')
          })
        /////////////////////////////////////
        // Form Validation plugin
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
        //when select box value is changed, revalidate
        $('select#platform') // .css('width','200px').select2({allowClear:true}) //can have select2 or chosen
          .on('change', function() {
            $(this).closest('form').validate().element($(this))
          })


        var $invalidClass = 'brc-danger-tp2'
        var $validClass = 'brc-info-tp2'

        // add phone validation method
        jQuery.validator.addMethod("phone", function(value, element) {
          return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value)
        }, "Enter a valid phone number.")


        $('#validation-form').validate({
          errorElement: 'span',
          errorClass: 'form-text form-error text-danger-m2',
          focusInvalid: false,
          ignore: "",
          rules: {
            email: {
              required: true,
              email: true
            },
            password: {
              required: true,
              minlength: 5
            },
            password2: {
              required: true,
              minlength: 5,
              equalTo: "#password"
            },
            name: {
              required: true
            },
            phone: {
              required: true,
              phone: 'required'
            },
            url: {
              required: true,
              url: true
            },
            comment: {
              //required: true
            },
            state: {
              //required: true
            },
            platform: {
              required: true
            },
            subscription: {
              required: true
            },
            gender: {
              required: true,
            },
            agree: {
              required: true,
            }
          },

          messages: {
            email: {
              required: "Please provide a valid email.",
              email: "Please provide a valid email."
            },
            password: {
              required: "Please specify a password.",
              minlength: "Please specify a secure password."
            },
            platform: "Please choose your platform",
            subscription: "Please choose at least one option",
            gender: "Please choose gender",
            agree: "Please agree to our terms of use"
          },


          highlight: function(element) {
            var $element = $(element);

            //remove error messages to be inserted again, so that the `.fa-exclamation-circle` is inserted in `errorPlacement` function
            $element.closest('.form-group').find('.form-text').remove()

            if ($element.is('input[type=checkbox]') || $element.is('input[type=radio]')) return

            else if ($element.is('.select2')) {
              var container = $element.siblings('[class*="select2-container"]')
              container.find('.select2-selection').addClass($invalidClass)
            } else if ($element.is('.chosen')) {
              var container = $element.siblings('[class*="chosen-container"]');
              container.find('.chosen-choices, .chosen-single').addClass($invalidClass)
            } else {
              $element.addClass($invalidClass + ' d-inline-block').removeClass($validClass)
            }
          },

          success: function(error, element) {
            var parent = error.parent()
            var $element = $(element)

            $element.removeClass($invalidClass)
              .closest('.form-group').find('.form-text').remove()

            if ($element.is('input[type=checkbox]') || $element.is('input[type=radio]')) return

            else if ($element.is('.select2')) {
              var container = $element.siblings('[class*="select2-container"]')
              container.find('.select2-selection').removeClass($invalidClass)
            } else if ($element.is('.chosen')) {
              var container = $element.siblings('[class*="chosen-container"]')
              container.find('.chosen-choices, .chosen-single').removeClass($invalidClass)
            } else {
              $element.addClass($validClass + ' d-inline-block')
            }

            // append 'fa-check' icon
            parent.append('<span class="form-text d-inline-block ml-sm-2"><i class=" fa fa-check text-success-m1 text-120"></i></span>')
          },

          errorPlacement: function(error, element) {
            // prepend 'fa-exclamation-circle' icon
            error.prepend('<i class="form-text fa fa-exclamation-circle text-danger-m1 text-100 mr-1 ml-2"></i>')

            if (element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
              element.closest('div[class*="col-"]').append(error)
            } else if (element.is('.select2')) {
              var container = element.siblings('[class*="select2-container"]')
              error.insertAfter(container)
              container.find('.select2-selection').addClass($invalidClass)
            } else if (element.is('.chosen')) {
              var container = element.siblings('[class*="chosen-container"]')
              error.insertAfter(container)
              container.find('.chosen-choices, .chosen-single').addClass($invalidClass)
            } else {
              error.addClass('d-inline-block').insertAfter(element)
            }
          },

          submitHandler: function(form) {},
          invalidHandler: function(form) {}
        })

      })
    </script>
  </body>

<!-- Copied from http://104.237.146.83/templates/ace/demo/html/form-wizard.html by Cyotek WebCopy 1.7.0.600, Thursday, September 10, 2020, 6:05:30 PM -->
</html>