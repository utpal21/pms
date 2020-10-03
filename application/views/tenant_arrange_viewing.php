<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            
			
			<div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-building text-dark-l3 mr-1"></i>
                  Arrange Viewing for Tenant
                </h3>
              </div>
			 <?php
             foreach ($forward_tenant_arrange_viewing as $possible_tenant_info){
			
			 ?>
			<form action="<?php echo base_url();?>index.php/super_admin/save_tenant_arrange_viewing" method="post"  class="mt-lg-3" >
              <div class="card-body px-3 pb-1">
               
			   	<div class="form-group row">
				<div class="col-sm-12 input-floating-label text-blue-d2 brc-blue-m1">
				<?php
				echo "<strong>Tenant Name</strong>: ".$possible_tenant_info->firstname.", <strong>Maximum Rent</strong>: ".$possible_tenant_info->max_rent.", <strong>Bed Require</strong>: ".$possible_tenant_info->no_of_bed.", <strong>Suitable Time</strong>: ".$possible_tenant_info->suitable_contact_time;
				?>
				<input type="hidden" name="tenant_id" value="<?php echo $possible_tenant_info->id;?>" />
				</div>
				</div>
                 <div class="form-group row">
                   	
					 <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
                      <select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="property_id">
										<option value="" selected="selected">Select Property</option>
									    <?php
										foreach ($property_list as $value)
										{
										?>
										<option value='<?php echo $value->id;?>'><?php echo $value->house_name_no.",  ".$value->street_road_no.",  ".$value->post_code.",  ".$value->city_location.",  ".$value->city_location." - <strong>Rent: &pound;".$value->rent_amount."</strong>";?></option>
										<?php
										}
										?>	
									  </select> 
                    </div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					
                      <div class="pos-rel">
                          <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1" name="view_date">
						   <span class="floating-label text-grey-m3">
                        	Interested to view at
                    	   </span>
                      </div>
					</div>
                    <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="view_time">
                      <span class="floating-label text-grey-m3">
                        View Time
                    </span>
                    </div>
					
					
					
					
					
                  </div>
				  <div class="form-group row">
                   	 <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
                    <select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="arranged_by">
										<option value="" selected="selected">Arranged by</option>
									    <?php
										foreach ($employee_list as $value)
										{
										?>
										<option value='<?php echo $value->id;?>'><?php echo $value->emp_name;?></option>
										<?php
										}
										?>	
									  </select> 
                    </div>
					 <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
                       <select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="arranged_for">
										<option value="" selected="selected">Arranged for</option>
									    <?php
										foreach ($employee_list as $value)
										{
										?>
										<option value='<?php echo $value->id;?>'><?php echo $value->emp_name;?></option>
										<?php
										}
										?>	
									  </select> 
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
               <?php } ?>
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