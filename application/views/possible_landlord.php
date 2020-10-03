<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            <div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                 <h3 class="card-title text-125">
                  <i class="fa fa-address-card text-dark-l3 mr-1"></i>
                  <small>possible</small> Landlord Contact Information 
                </h3>
				<h3 class="card-title text-125">
                  <i class="fa fa-eye text-dark-l3 mr-1"></i>
				  	<a href="<?php echo base_url();?>index.php/super_admin/possible_landlord_list">
                  	<small>possible</small> Landlord List
					</a>
                </h3>
				
              </div>

              <div class="card-body px-3 pb-1">
                
				<form action="<?php echo base_url();?>index.php/super_admin/save_possible_landlord" method="post"  class="mt-lg-3" >
                  <div class="form-group row">
                   
                    
					<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="firstname">
                      <span class="floating-label text-grey-m3">
                        First Name
                    </span>
					
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="surname">
                      <span class="floating-label text-grey-m3">
                        Surname
                    </span>
                    </div>
					
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="contact">
                      <span class="floating-label text-grey-m3">
                        Contact No.
                    </span>
					
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="email">
                      <span class="floating-label text-grey-m3">
                        Email
                    </span>
                    </div>
					
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <select class="form-control" id="form-field-select-1" style="height:49px;" name="best_contact_time">
                        <option value="" selected="selected"> Best Contact Time</option>
                       <option value="10AM - 01PM">10AM - 01PM</option>
                       <option value="01PM - 04PM">01PM - 04PM</option>
                       <option value="04PM - 06PM">04PM - 06PM</option>
					</select>
                    </div>
					
                  </div>
				 
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			
			<div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-building text-dark-l3 mr-1"></i>
                  Property Information
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                 <div class="form-group row">
                   	
                    <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="house_no">
                      <span class="floating-label text-grey-m3">
                        House No.
                    </span>
					
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="street_road_no">
                      <span class="floating-label text-grey-m3">
                        Street/Road No.
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="location">
                      <span class="floating-label text-grey-m3">
                        Location
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="post_code">
                      <span class="floating-label text-grey-m3">
                        Post Code
                    </span>
                    </div>
					
					
                  </div>
				  <div class="form-group row">
                   	 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
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
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                    <select class="form-control" id="form-field-select-1" style="height:49px;" name="service_required">
                        <option value="" selected="selected"> Service Required</option>
                       <option value="0">Guaranteed Rent</option>
				       <option value="1">Let Only</option>
                       <option value="2">Let and Rent Collection</option>
                       <option value="3">Management</option>
					</select>
                    </div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					
                      <div class="pos-rel">
                          <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1" name="available_date">
						   <span class="floating-label text-grey-m3">
                        	Available Date
                    	   </span>
                      </div>
					</div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					 
                      <div class="pos-rel">
                          <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1_1" name="valuation_date">
						   <span class="floating-label text-grey-m3">
                        	Valuation Date
                    	   </span>
                      </div>
					</div>
					
					
                  </div>
				 <div class="mt-5 border-t-1 brc-secondary-l2 py-35 mx-n25">
                    <div class="offset-md-3 col-md-9 text-nowrap">
                      <button class="btn btn-info btn-bold px-4" type="submit">
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

			
			
			<div class="card bcard mt-2 mt-lg-3">
             

              <div class="row mt-475">
              
                

                <!-- Range sliders -->
                <div class="col-12 col-md-4 mt-3 mt-md-0" style="display:none;">
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

                        
                        </div>
                      </div>

                    </div>
                  </div>
                </div><!-- /.col -->


                <!-- Input spinner -->
               
              </div><!-- /.row -->
           
          </div>

 <?php echo $common_pagefooter; ?>