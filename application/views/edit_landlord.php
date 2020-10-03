<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            <div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-address-card text-dark-l3 mr-1"></i>
                  Landlord Contact Information <small style="color:#000000;">Update</small>
                </h3>
				<h3 class="card-title text-125">
                  <i class="fa fa-eye text-dark-l3 mr-1"></i>
				  	<a href="<?php echo base_url();?>index.php/super_admin/landlord_list">
                  	Landlord List
					</a>
                </h3>
				
              </div>

              <div class="card-body px-3 pb-1">
                <?php
				$con=mysqli_connect("localhost", "root", "", "db_property");//localhost database connection
				function get_landlord_registration_no($con) {
				   $last_id = mysqli_fetch_assoc(mysqli_query($con, "SELECT id FROM landlord ORDER BY id DESC LIMIT 1;"));
				   //echo "<pre>";       print_r($last_id); 
				   $last_id = $last_id['id']+1;
				   $last_id = str_pad($last_id, 4, '0', STR_PAD_LEFT);
				   echo $reg_no = "StkLandlord".$last_id;
				   return $reg_no;
				   
			   }
				?>
				 <?php
                foreach ($edit_landlord as $value){
				?>
				<form action="<?php echo base_url();?>index.php/super_admin/update_landlord" method="post"  class="mt-lg-3"  enctype="multipart/form-data">
                  <div class="form-group row">
       
                     <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text"  class="form-control form-control-lg col-sm-8 col-md-12 shadow-none"  style="font-size:13.5px; font-weight:bold;" id="id-form-field-2" value="check" name="landlord_reg_no" disabled="disabled">
                      <span class="floating-label text-grey-m3">
                       Landlord Reg. No
                    </span>
					</div>
					<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="firstname" value="<?php echo $value->firstname;?>">
                      <span class="floating-label text-grey-m3">
                        First Name
                    </span>
					
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="surname"  value="<?php echo $value->surname;?>">
                      <span class="floating-label text-grey-m3">
                        Surname
                    </span>
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="lhouse_flat_no"  value="<?php echo $value->lhouse_flat_no;?>">
                      <span class="floating-label text-grey-m3">
                        House/Flat No.
                    </span>
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="lhouse_flat_name"  value="<?php echo $value->lhouse_flat_name;?>">
                      <span class="floating-label text-grey-m3">
                        Hou./Flat Name
                    </span>
                    </div>
					
					<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="lstreet"  value="<?php echo $value->lstreet;?>">
                      <span class="floating-label text-grey-m3">
                        Street
                    </span>
					
                    </div>
					
                  </div>
				  
				  <div class="form-group row">
                   
                    
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="lpost_code"  value="<?php echo $value->lpost_code;?>">
                      <span class="floating-label text-grey-m3">
                        Post Code
                    </span>
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="lcity"  value="<?php echo $value->lcity;?>">
                      <span class="floating-label text-grey-m3">
                        City
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="lcountry"  value="<?php echo $value->lcountry;?>">
                      <span class="floating-label text-grey-m3">
                        Country
                    </span>
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="contact"  value="<?php echo $value->contact;?>">
                      <span class="floating-label text-grey-m3">
                        Contact No.
                    </span>
					
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="email"  value="<?php echo $value->email;?>">
                      <span class="floating-label text-grey-m3">
                        Email
                    </span>
                    </div>
					
                  </div>
				  
				  <div class="form-group row">
                   
                   
					 <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="correspondence_address"  value="<?php echo $value->correspondence_address;?>">
                      <span class="floating-label text-grey-m3">
                        Correspondence Address
                    </span>
                    </div>
					 <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
						<div class="mb-1">
                        <label style="vertical-align:middle;">
                         <strong>Corresponding By</strong> <i class="fa fa-angle-double-right text-80"></i>&nbsp;
						 <input type="checkbox" class="mr-2" value="1"  <?php if($value->cors_by_email=='1'){ echo " checked='checked'";}?> name="cors_by_email">Email
                         <input type="checkbox" class="mr-2" value="1"  <?php if($value->cors_by_phone=='1'){ echo " checked='checked'";}?>  name="cors_by_phone">Phone
						 <input type="checkbox" class="mr-2" value="1"  <?php if($value->cors_by_post=='1'){ echo " checked='checked'";}?>  name="cors_by_post">Post
                        </label>
                      </div>
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
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="house_no"  value="<?php echo $value->house_no;?>">
                      <span class="floating-label text-grey-m3">
                        House No.
                    </span>
					
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="street_road_no"  value="<?php echo $value->street_road_no;?>">
                      <span class="floating-label text-grey-m3">
                        Street/Road No.
                    </span>
                    </div>
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="location"  value="<?php echo $value->location;?>">
                      <span class="floating-label text-grey-m3">
                        Location
                    </span>
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="post_code"  value="<?php echo $value->post_code;?>">
                      <span class="floating-label text-grey-m3">
                        Post Code
                    </span>
                    </div>
					
					
                  </div>
				  <div class="form-group row">
                   
                    <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                     <select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="no_of_bed">
                        <option selected="selected" value="<?php echo $value->no_of_bed;?>"><?php echo $value->no_of_bed;?></option>
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
					
                      <div class="pos-rel">
                          <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1" name="available_date"   value="<?php echo date("d/m/Y", strtotime($value->available_date))?>">
						   <span class="floating-label text-grey-m3">
                        	Available Date
                    	   </span>
                      </div>
					</div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					 
                      <div class="pos-rel">
                          <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1_1" name="valuation_date"   value="<?php echo date("d/m/Y", strtotime($value->valuation_date))?>">
						   <span class="floating-label text-grey-m3">
                        	Valuation Date
                    	   </span>
                      </div>
					</div>
					<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                       <select class="form-control" id="form-field-select-1" style="height:49px;" name="best_contact_time">
                       <option selected="selected" value="<?php echo $value->no_of_bed;?>"><?php echo $value->best_contact_time;?></option>
                       <option value="10AM - 01PM">10AM - 01PM</option>
                       <option value="01PM - 04PM">01PM - 04PM</option>
                       <option value="04PM - 06PM">04PM - 06PM</option>
					</select>
                    </div>
					<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" value="<?php echo $value->added_by;?>" id="id-form-field-2" name="added_by"  value="someone" disabled="disabled">
                      <span class="floating-label text-grey-m3">
                        Added By
                    </span>
                    </div>
					
					
                  </div>
				  <div class="form-group row">
                   <script type="text/javascript">
                        function showNew1() {
                            var new1 = document.getElementById("new1");
                            
							var new1Open = document.getElementById("new1Open");
                            new1Open.style.display = new1.value == "0" ? "block" : "none";
							
							var new3Open = document.getElementById("new3Open");
                            new3Open.style.display = new1.value == "0" ? "block" : "none";
							
							document.getElementById('new2Open').style.display ='none';
							document.getElementById('new4Open').style.display ='none';
							
                        }
						function showNew2() {
                           
							var new2 = document.getElementById("new2");
							
                            var new2Open = document.getElementById("new2Open");
                            new2Open.style.display = new2.value == "1" ? "block" : "none";
							
							var new4Open = document.getElementById("new4Open");
                            new4Open.style.display = new2.value == "1" ? "block" : "none";
							
							document.getElementById('new1Open').style.display ='none';
							document.getElementById('new3Open').style.display ='none';
                        }
						function showNew3() {
                           	document.getElementById('new1Open').style.display ='none';
							document.getElementById('new2Open').style.display ='none';
							
							document.getElementById('new3Open').style.display ='none';
							document.getElementById('new4Open').style.display ='none';
							
                        }
                    </script>
                   <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
						<div class="mb-1">
                        <label style="vertical-align:middle;">
                         <strong>Condition</strong>  <i class="fa fa-angle-double-right text-80"></i>&nbsp;
						 <input type="radio" class="mr-2" id="new1" name="furniture_type"   <?php if($value->furniture_type=='0'){ echo " checked='checked'";}?>  value="0" onChange="showNew1()">Furnished&nbsp;
						 <input type="radio" class="mr-2" id="new2" name="furniture_type"   <?php if($value->furniture_type=='1'){ echo " checked='checked'";}?>  value="1" onChange="showNew2()">Part Furnished&nbsp;
						 <input type="radio" class="mr-2" name="furniture_type"   <?php if($value->furniture_type=='2'){ echo " checked='checked'";}?>   value="2" onChange="showNew3()">Un-Furnished
						</label>
                      </div>
                    </div>
					<!--<div id="new1Open" style="display: none"> -->
					
					
						 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1" id="new1Open" <?php if($value->furniture_type=='0'){ ?> style="display: none" <?php }?>>
						  <textarea class="form-control brc-primary-m2 border-l-2 text-grey-d1" rows="3" placeholder=" New Furniture List" name="new_furniture_list"> <?php echo $value->new_furniture_list;?></textarea>
						 </div>
						 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1" id="new3Open" <?php if($value->furniture_type=='0'){ ?> style="display: none" <?php }?>>
						  <textarea class="form-control brc-primary-m2 border-l-2 text-grey-d1" rows="3" placeholder="Used Furniture List" name="used_furniture_lisr"> <?php echo $value->used_furniture_list;?></textarea>
						 </div>
					<!--</div> -->
					<!--<div id="new2Open" style="display: none"> -->
						 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1" id="new2Open" <?php if($value->furniture_type=='1'){ ?> style="display: none" <?php }?>>
						  <textarea class="form-control brc-primary-m2 border-l-2 text-grey-d1" rows="3" placeholder=" New Furniture List" name="new_furniture_list"> <?php echo $value->new_furniture_list;?></textarea>
						 </div>
						 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1" id="new4Open" <?php if($value->furniture_type=='1'){ ?> style="display: none" <?php }?>>
						  <textarea class="form-control brc-primary-m2 border-l-2 text-grey-d1" rows="3" placeholder="Used Furniture List" name="used_furniture_list"> <?php echo $value->used_furniture_list;?></textarea>
						 </div>
					<!--</div> -->
					
                  </div>
				 
				 
               
              </div><!-- /.card-body -->
            </div><!-- /.card -->

			<div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-bell text-dark-l3 mr-1"></i>
                  Legal Requirements
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                 <div class="form-group row">
                   
                    <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
					  <span>Gas</span><hr>
                       
					   <div id="id-daterange-wrapper" class="pos-rel">
                        <!-- daterange -->
                        <div class="form-row">
                          <div class="col">
                             <div class="pos-rel">
								  <input type="text" class="form-control" id="id-date-1_9" name="gas_from"    value="<?php echo date("d/m/Y", strtotime($value->gas_from))?>">
								   <span class="floating-label text-grey-m3">
									Date From
								   </span>
							  </div>
                          </div>

                          <div class="text-grey-l2">_</div>

                          <div class="col">
                        			 <div class="pos-rel">
										  <input type="text" class="form-control" id="id-date-1_10" name="gas_to"    value="<?php echo date("d/m/Y", strtotime($value->gas_to))?>">
										   <span class="floating-label text-grey-m3">
											Date To
										   </span>
									  </div>
					  
                          </div>
                        </div>

                        <div id="id-daterange-container" class="dp-daterange-picker dp-daterange-above"></div>
                      </div>
					  
                    </div>
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                       <span> Electricity</span><hr>
                       
					   <div id="id-daterange-wrapper" class="pos-rel">
                        <!-- daterange -->
                        <div class="form-row">
                          <div class="col">
                             <div class="pos-rel">
								  <input type="text" class="form-control" id="id-date-1_2" name="electricity_from"    value="<?php echo date("d/m/Y", strtotime($value->electricity_from))?>">
								   <span class="floating-label text-grey-m3">
									Date From
								   </span>
							  </div>
                          </div>

                          <div class="text-grey-l2">_</div>

                          <div class="col">
                        			 <div class="pos-rel">
										  <input type="text" class="form-control" id="id-date-1_3" name="electricity_to"    value="<?php echo date("d/m/Y", strtotime($value->electricity_to))?>">
										   <span class="floating-label text-grey-m3">
											Date To
										   </span>
									  </div>
					  
                          </div>
                        </div>

                        <div id="id-daterange-container" class="dp-daterange-picker dp-daterange-above"></div>
                      </div>
					   	
                    </div>
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                       <span>EPC</span><hr>
					   <div id="id-daterange-wrapper" class="pos-rel">
                        <!-- daterange -->
                        <div class="form-row">
                          <div class="col">
                             <div class="pos-rel">
								  <input type="text" class="form-control" id="id-date-1_4" name="epc_from"   value="<?php echo date("d/m/Y", strtotime($value->epc_from))?>">
								   <span class="floating-label text-grey-m3">
									Date From
								   </span>
							  </div>
                          </div>

                          <div class="text-grey-l2">_</div>

                          <div class="col">
                        			 <div class="pos-rel">
										  <input type="text" class="form-control" id="id-date-1_5" name="epc_to"   value="<?php echo date("d/m/Y", strtotime($value->epc_to))?>">
										   <span class="floating-label text-grey-m3">
											Date To
										   </span>
									  </div>
					  
                          </div>
                        </div>

                        <div id="id-daterange-container" class="dp-daterange-picker dp-daterange-above"></div>
                      </div>
					  	
                    </div>
					
                  </div>
				   <div class="form-group row">
                   
                    <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
					  <span>PAT Test</span><hr>
                       
					   <div id="id-daterange-wrapper" class="pos-rel">
                        <!-- daterange -->
                        <div class="form-row">
                           <div class="col">
                             <div class="pos-rel">
								  <input type="text" class="form-control" id="id-date-1_6" name="pat_test_from"    value="<?php echo date("d/m/Y", strtotime($value->pat_test_from))?>">
								   <span class="floating-label text-grey-m3">
									Date From
								   </span>
							  </div>
                          </div>

                          <div class="text-grey-l2">_</div>

                          <div class="col">
                        			 <div class="pos-rel">
										  <input type="text" class="form-control" id="id-date-1_7" name="pat_test_to"   value="<?php echo date("d/m/Y", strtotime($value->pat_test_to))?>">
										   <span class="floating-label text-grey-m3">
											Date To
										   </span>
									  </div>
					  
                          </div>
                        </div>

                        <div id="id-daterange-container" class="dp-daterange-picker dp-daterange-above"></div>
                      </div>
					  
                    </div>
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                       <span> Fire Alarm</span><hr>
                       
					<input type="radio"  value="1" name="fire" class="mr-2"    <?php if($value->fire=='1'){ echo " checked='checked'";}?>  >Yes&nbsp;
                     <input type="radio"  value="0"  name="fire"class="mr-2"    <?php if($value->fire=='0'){ echo " checked='checked'";}?>  >No&nbsp;
					   	
                    </div>
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                       <span> Carbon de Monoxide Alarm</span><hr>
                       
					 <input type="radio"  value="1" name="carbon" class="mr-2"    <?php if($value->carbon=='1'){ echo " checked='checked'";}?>  >Yes&nbsp;
                     <input type="radio"  value="0"  name="carbon"class="mr-2"    <?php if($value->carbon=='0'){ echo " checked='checked'";}?>  >No&nbsp;
					   	
                    </div>
					
                  </div>
				  
				
              
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			
			<div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-handshake text-dark-l3 mr-1"></i>
                  Agreement
                </h3>
				
              </div>

              <div class="card-body px-3 pb-1">
                  <div class="form-group row">
                   
                     <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					 <span>Agreement Date</span><hr>
                      <div class="pos-rel">
					  
                          <input type="text" class="form-control" id="id-date-1_8" name="agreement_date"   value="<?php echo date("d/m/Y", strtotime($value->agreement_date))?>">
						   <span class="floating-label text-grey-m3">
                        	Date
                    	   </span>
                      </div>
					</div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					<span>Agreement Type</span><hr>
					 <select class="form-control" id="form-field-select-1" name="agreement_type">
                        <option value="<?php echo $value->agreement_type;?>" selected="selected"> <?php if($value->agreement_type=='0'){ echo "Guranteed Rent";} if($value->agreement_type=='1'){ echo "Let Only";} if($value->agreement_type=='2'){ echo "Let and Rent Collection";} if($value->agreement_type=='3'){ echo "Management";}?></option>
                       <option value="0">Guaranteed Rent</option>
				       <option value="1">Let Only</option>
                       <option value="2">Let and Rent Collection</option>
                       <option value="3">Management</option>
					</select>
                     
					
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					  <span>Proof of ID</span><hr>
                      <input type="file" id = "id-input-file-2" name="userfile[0]" class="form-control input-mask-date"  onchange="ValidateSize(this)"/>
					  <u><strong>
							<?php echo '<a href="http://localhost/admin/uploads/'.$value->file.'" height="100" target="_blank">Current Document</a>'; ?>
						</strong></u>
						<input type="hidden" name="old_file" value="<?php echo $value->file;?>" />
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                       <span>Proof of Address</span><hr>
                      <input type="file" id = "id-input-file-2" name="userfile[1]" class="form-control input-mask-date"  onchange="ValidateSize(this)"/>
					  <u><strong>
							<?php echo '<a href="http://localhost/admin/uploads/'.$value->file1.'" height="100" target="_blank">Current Document</a>'; ?>
						</strong></u>
						<input type="hidden" name="old_file1" value="<?php echo $value->file1;?>" />
                    </div>
					
                  </div>
				  
				 
				  
				  <div class="card-body px-3 pb-1">
               
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#ddlModels").change(function () {
            if ($(this).val() == 1) {
                $("#txtOther").removeAttr("disabled");
                $("#txtOther").focus();
				$("#txtOther1").removeAttr("disabled");
                $("#txtOther1").focus();
				
				$("#txtOther2").removeAttr("disabled");
                $("#txtOther2").focus();
				
				$("#txtOther3").removeAttr("disabled");
                $("#txtOther3").focus();
				
				$("#txtOther4").removeAttr("disabled");
                $("#txtOther4").focus();
            } else {
                $("#txtOther").attr("disabled", "disabled");
				$("#txtOther1").attr("disabled", "disabled");
				$("#txtOther2").attr("disabled", "disabled");
				$("#txtOther3").attr("disabled", "disabled");
				$("#txtOther4").attr("disabled", "disabled");
            }
        });
    });
</script>
				  
				  <div class="form-group row">
                   
                    
					 <div class="col-sm-12 input-floating-label text-blue-d2 brc-blue-m1">
						<div class="mb-1">
							<label style="vertical-align:middle;">
							 If contract signed by someone onbehalf of Landlord&nbsp;&nbsp;&nbsp;
							 <input type="checkbox" class="mr-2" id="ddlModels" value="1" <?php if($value->onbehalf_name!=''){ echo " checked='checked'";}?>>&nbsp; 
							</label>
						</div>
				   </div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="txtOther4" name="onbehalf_name" disabled="disabled"   value="<?php echo $value->onbehalf_name;?>">
                      <span class="floating-label text-grey-m3">
                        Name
                    </span>
                    </div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="txtOther1" name="onbehalf_email" disabled="disabled"   value="<?php echo $value->onbehalf_email;?>">
                      <span class="floating-label text-grey-m3">
                        Email
                    </span>
                    </div>
					<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="txtOther2" name="onbehalf_contact" disabled="disabled"   value="<?php echo $value->onbehalf_contact;?>">
                      <span class="floating-label text-grey-m3">
                        Contact
                    </span>
                    </div>
					
					 <div class="col-sm-4 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none"  id="txtOther" name="onbehalf_address" disabled="disabled"   value="<?php echo $value->onbehalf_address;?>">
					  <span class="floating-label text-grey-m3">
                        Contact Address
                    </span>
                    </div>
                  </div>
				  <div class="form-group row">
                      <script type="text/javascript">
        function ShowHideDiv() {
            var ddlPassport = document.getElementById("ddlPassport");
            var dvPassport = document.getElementById("dvPassport");
			
			var openCash = document.getElementById("openCash");
			var openCheque = document.getElementById("openCheque");
			
            dvPassport.style.display = ddlPassport.value == "0" ? "block" : "none";
			b1.style.display = ddlPassport.value == "0" ? "block" : "none";
			b2.style.display = ddlPassport.value == "0" ? "block" : "none";
			b3.style.display = ddlPassport.value == "0" ? "block" : "none";
			b4.style.display = ddlPassport.value == "0" ? "block" : "none";
			
			openCheque.style.display = ddlPassport.value == "2" ? "block" : "none";
			openCash.style.display = ddlPassport.value == "1" ? "block" : "none";
        }
    </script>
                   
					 <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
					  <span>Copy of Authority by Landlord</span><hr>
                      <input type="file" id = "id-input-file-2" name="userfile[2]" class="form-control input-mask-date"  onchange="ValidateSize(this)" style="height:48px;"/>
					    <u><strong>
							<?php echo '<a href="http://localhost/admin/uploads/'.$value->file2.'" height="100" target="_blank">Current Document</a>'; ?>
						</strong></u>
						<input type="hidden" name="old_file2" value="<?php echo $value->file2;?>" />
                    </div>
					 <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
                       <span>Payment Method</span><hr>
                       <select class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="ddlPassport" onChange="ShowHideDiv()" name="payment_method">
					     <option value="<?php echo $value->payment_method;?>" selected="selected"> <?php if($value->payment_method=='0'){ echo "Bank Transfer";} if($value->payment_method=='1'){ echo "Cash";} if($value->payment_method=='2'){ echo "Cheque";} ?></option>
                        <option value='0'>Bank Transfer</option>
                        <option value='1'>Cash</option>
                        <option value='2'>Cheque</option>
                      </select>
					  
					
					  <div id="openCheque" <?php if($value->payment_method=='0' || $value->payment_method=='1'){ ?> style="display: none" <?php }?>>
					  <hr />
					  <input type="text"  class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" name="cheque_amount"  value="<?php echo $value->cheque_amount;?>">
					  </div>
					  <div id="openCash" <?php if($value->payment_method=='0' || $value->payment_method=='2'){ ?> style="display: none" <?php }?>>
					  <hr />
					  <input type="text"  class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" name="cash_amount"  value="<?php echo $value->cash_amount;?>">
					 </div>
					 
					 
                    </div>
					
                  </div>
				   <div class="form-group row">
                 
                     <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1"  id="dvPassport" <?php if($value->payment_method=='1' || $value->payment_method=='2'){ ?> style="display: none" <?php }?>>
                      <input type="text"  class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="account_name"   value="<?php echo $value->account_name;?>">
                      <span class="floating-label text-grey-m3">
                      Account Name
                    </span>
					</div>
					<div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1"  id="b1" <?php if($value->payment_method=='1' || $value->payment_method=='2'){ ?> style="display: none" <?php }?>>
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="account_no"  value="<?php echo $value->account_no;?>">
                      <span class="floating-label text-grey-m3">
                        Account No
                    </span>
					
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1"  id="b2" <?php if($value->payment_method=='1' || $value->payment_method=='2'){ ?> style="display: none" <?php }?>>
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="sort_code"  value="<?php echo $value->sort_code;?>">
                      <span class="floating-label text-grey-m3">
                        Sort Code
                    </span>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1"  id="b3" <?php if($value->payment_method=='1' || $value->payment_method=='2'){ ?> style="display: none" <?php }?>>
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="bank_name"  value="<?php echo $value->bank_name;?>">
                      <span class="floating-label text-grey-m3">
                        Bank Name
                    </span>
                    </div>
					 <div class="col-sm-2 input-floating-label text-blue-d2 brc-blue-m1"  id="b4" <?php if($value->payment_method=='1' || $value->payment_method=='2'){ ?> style="display: none" <?php }?>>
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="amount"  value="<?php echo $value->amount;?>">
                      <span class="floating-label text-grey-m3">
                        Amount
                    </span>
                    </div>
					
					
					
                  </div>
				  <div class="mt-5 border-t-1 brc-secondary-l2 py-35 mx-n25">
                    <div class="offset-md-3 col-md-9 text-nowrap">
					  <input type="hidden" id="hide" name="did" value="<?php echo $value->id; ?>">
                      <button class="btn btn-info btn-bold px-4" type="submit">
                        <i class="fa fa-check mr-1"></i>
                        Update
                      </button>

                     
                    </div>
                  </div>
				  </div>
				  
                
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			 <!-- toggle buttons - on/off switches -->
       </form>
		<?php } ?>
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