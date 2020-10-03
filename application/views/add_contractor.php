<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            <div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-address-card text-dark-l3 mr-1"></i>
                  Contractor Information
                </h3>
				<h3 class="card-title text-125">
                  <i class="fa fa-eye text-dark-l3 mr-1"></i>
				  	<a href="<?php echo base_url();?>index.php/super_admin/contractor_list">
                  	Contractor List
					</a>
                </h3>
				
              </div>

              <div class="card-body px-3 pb-1">
                
				<form action="<?php echo base_url();?>index.php/super_admin/save_contractor" method="post"  class="mt-lg-3" autocomplete="off" enctype="multipart/form-data">
                 <div class="form-group row">
                   
                   
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="username">
                      <span class="floating-label text-grey-m3">
                        Name
                    </span>
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="password">
                      <span class="floating-label text-grey-m3">
                        Contact Number
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="username">
                      <span class="floating-label text-grey-m3">
                        Email
                    </span>
                    </div>
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="password">
                      <span class="floating-label text-grey-m3">
                        Address
                    </span>
                    </div>
					
                  </div>
				
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			
			<div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-address-card text-dark-l3 mr-1"></i>
                  Contractor Specialist in
                </h3>
				
              </div>

              <div class="card-body px-3 pb-1">
                
				<form action="<?php echo base_url();?>index.php/super_admin/save_contractor" method="post"  class="mt-lg-3" autocomplete="off" enctype="multipart/form-data">
                 <div class="form-group row">
                   
                   
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="username">
                      <span class="floating-label text-grey-m3">
                        Name
                    </span>
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="password">
                      <span class="floating-label text-grey-m3">
                        Contact Number
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="username">
                      <span class="floating-label text-grey-m3">
                        Email
                    </span>
                    </div>
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="password">
                      <span class="floating-label text-grey-m3">
                        Address
                    </span>
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
				 
				  
                
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			
			
			

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