<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            <div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-address-card text-dark-l3 mr-1"></i>
                  Employee Basic Information
                </h3>
				<h3 class="card-title text-125">
                  <i class="fa fa-eye text-dark-l3 mr-1"></i>
				  	<a href="<?php echo base_url();?>index.php/super_admin/employee_list">
                  	Employee List
					</a>
                </h3>
				
              </div>

              <div class="card-body px-3 pb-1">
                
				<form action="<?php echo base_url();?>index.php/super_admin/save_employee" method="post"  class="mt-lg-3"  enctype="multipart/form-data">
                 <div class="form-group row">
                   
                    <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="emp_name">
                      <span class="floating-label text-grey-m3">
                        Name
                    </span>
					
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="emp_email">
                      <span class="floating-label text-grey-m3">
                        Email
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="emp_contact">
                      <span class="floating-label text-grey-m3">
                        Contact Number
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <select class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="form-field-select-1" name="department">
                        <option value="" selected="selected">Department</option>
                        <option value='1'>Marketing</option>
                        <option value='2'>Management</option>
                        <option value='3'>Purchasing</option>
						<option value='4'>Accounting & Finance </option>
                        <option value='5'>Research & Development </option>
                        <option value='6'>IT</option>
                      </select>
                    </div>
					
                  </div>
				  
				  <div class="form-group row">
                   
                    <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="emp_address">
                      <span class="floating-label text-grey-m3">
                        Address
                    </span>
					
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="emp_city">
                      <span class="floating-label text-grey-m3">
                        City
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="post_code">
                      <span class="floating-label text-grey-m3">
                        Post Code
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="color_code">
                      <span class="floating-label text-grey-m3">
                        Select Color Code
                    </span>
                    </div>
					
                  </div>
				  
                
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			
			<div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-credit-card text-dark-l3 mr-1"></i>
                  Payment Method
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                 <div class="form-group row">
                   
                    <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="payment_stru">
                      <span class="floating-label text-grey-m3">
                        Payment Structure
                    </span>
					
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="con_hour">
                      <span class="floating-label text-grey-m3">
                        Contracted Hour 
                    </span>
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="con_type">
                      <span class="floating-label text-grey-m3">
                        Contract Type 
                    </span>
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="hour_rate">
                      <span class="floating-label text-grey-m3">
                        H. Rate (£) 
                    </span>
                    </div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="salary">
                      <span class="floating-label text-grey-m3">
                        Salary (£) 
                    </span>
                    </div>
					
                  </div>
				  
				  <div class="form-group row">
                   
                    <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="account_name">
                      <span class="floating-label text-grey-m3">
                        Account Name
                    </span>
					
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="sort_code">
                      <span class="floating-label text-grey-m3">
                        Sort Code 
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="account_number">
                      <span class="floating-label text-grey-m3">
                        Account Number 
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="bank_name">
                      <span class="floating-label text-grey-m3">
                        Bank Name 
                    </span>
                    </div>
					
                  </div>
				 
               
              </div><!-- /.card-body -->
            </div><!-- /.card -->

			<div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-image text-dark-l3 mr-1"></i>
                  Photograph
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                 <div class="form-group row">
                   
                    <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
					  <span>Latest Photo</span><hr>
                     <!-- <input type="file"  name="userfile[0]" class="ace-file-input" id="ace-file-input1"> -->
					  <input type="file" id = "id-input-file-2" name="userfile[0]" class="form-control input-mask-date"  onchange="ValidateSize(this)"/>
                    </div>
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                       <span>Proof of ID</span><hr>
                      <input type="file" id = "id-input-file-2" name="userfile[1]" class="form-control input-mask-date"  onchange="ValidateSize(this)"/>
                    </div>
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                       <span>Proof Of Address</span><hr>
                      <input type="file" id = "id-input-file-2" name="userfile[2]" class="form-control input-mask-date"  onchange="ValidateSize(this)"/>
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
			 <!-- toggle buttons - on/off switches -->
             


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