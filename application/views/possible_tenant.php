<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            <div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                 <h3 class="card-title text-125">
                  <i class="fa fa-address-card text-dark-l3 mr-1"></i>
                  <small>possible</small> Tenant Contact Information 
                </h3>
				<h3 class="card-title text-125">
                  <i class="fa fa-eye text-dark-l3 mr-1"></i>
				  	<a href="<?php echo base_url();?>index.php/super_admin/possible_tenant_list">
                  	<small>possible</small> Tenant List
					</a>
                </h3>
				
              </div>

              <div class="card-body px-3 pb-1">
                
				<form action="<?php echo base_url();?>index.php/super_admin/save_possible_tenant" method="post"  class="mt-lg-3" >
                  <div class="form-group row">
                   
                    
					<div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="firstname">
                      <span class="floating-label text-grey-m3">
                        First Name
                    </span>
					
                    </div>
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="surname">
                      <span class="floating-label text-grey-m3">
                        Surname
                    </span>
                    </div>
					
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="contact">
                      <span class="floating-label text-grey-m3">
                        Contact No.
                    </span>
					
                    </div>
					
					 
                  </div>
				  <div class="form-group row">
                   
                    
				
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="email">
                      <span class="floating-label text-grey-m3">
                        Email
                    </span>
                    </div>
					
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="profession">
                      <span class="floating-label text-grey-m3">
                        Profession
                    </span>
                    </div>
					<div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                   
                    <select class="form-control" id="form-field-select-1" style="height:49px;" name="suitable_contact_time">
                        <option value="" selected="selected"> Suitable Contact Time</option>
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
                  Expected Requirements
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                 <div class="form-group row">
                   	
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="post_code">
                      <span class="floating-label text-grey-m3">
                        Post Code
                    </span>
                    </div>
					
                    <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                    <select class="form-control" id="form-field-select-1" style="height:49px;" name="max_rent">
                        <option value="" selected="selected"> Max Rent per month</option>
                       <option value="1000">£ 1000</option>
                                            <option value="2000">£ 2000</option>
                                            <option value="3000">£ 3000</option>
                                            <option value="4000">£ 4000</option>
                                            <option value="5000">£ 5000</option>
                                            <option value="6000">£ 6000</option>
                                            <option value="7000">£ 7000</option>
                                            <option value="8000">£ 8000</option>
                                            <option value="9000">£ 9000</option>
                                            <option value="10000">£ 10000</option>
					</select>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <select class="form-control" id="form-field-select-1" style="height:49px;" name="no_of_bed">
                        <option value="" selected="selected"> No. of bed</option>
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
                     <select class="form-control" id="form-field-select-1" style="height:49px;" name="no_of_occupy">
                        <option value="" selected="selected"> No. of Occupy(Adult)</option>
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
				  <div class="form-group row">
                   	 <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="additional_details">
                      <span class="floating-label text-grey-m3">
                        Additional Details
                    </span>
                    </div>
					
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					
                      <div class="pos-rel">
                          <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1" name="move_in_date">
						   <span class="floating-label text-grey-m3">
                        	Move in Date
                    	   </span>
                      </div>
					</div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					 
                      <div class="pos-rel">
                          <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1_1" name="move_out_date">
						   <span class="floating-label text-grey-m3">
                        	Move out Date
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