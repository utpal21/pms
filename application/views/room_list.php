<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                Room
                <small class="page-info text-dark-m3">
                  <i class="fa fa-angle-double-right text-80"></i>
                  showing all room here
                </small>
              </h1>
			   <h3 class="page-title text-primary-d2 text-120">
			   	<a href="<?php echo base_url();?>index.php/super_admin/add_room"><i class="fa fa-plus"></i>
                Add New</a>
               </h3>

              <div class="page-tools mt-3 mt-sm-0 mb-sm-n1">
                <!-- dataTables search box will be inserted here dynamically -->
              </div>
            </div>

            <div class="card bcard h-auto">
             

                <table id="datatable" class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
                  <!-- add `collapsed` by default ... it will be removed by default -->
                  <!-- thead with .sticky-nav -->
                  <thead class="sticky-nav text-secondary-m1 text-uppercase text-85">
                    <tr>
                      <th class="td-toggle-details border-0 bgc-white shadow-sm">
                        <i class="fa fa-angle-double-down ml-2"></i>
                      </th>

                      <th class="border-0 bgc-white pl-3 pl-md-4 shadow-sm">
                        <input type="checkbox">
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Room ID
                      </th>

                     <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                         Address
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        At Glance
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Status - Available Date 
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Rent Amounts
                      </th> 

                      <th class="border-0 bgc-white shadow-sm w-2">
                        <!-- the TD will have edit icon -->
                      </th>
                    </tr>
                  </thead>

                  <tbody class="pos-rel">
				  <?php foreach ($room_list as $value){ 
				  
				/*include APPPATH.'views/db_connection.php';
									   
									  
							$query = "select * from landlord where id='$value->landlord_reg_no'";
                            $res = mysqli_query($con, $query);
                            $row = mysqli_fetch_array($res);*/
							
				  ?>
                    <tr class="d-style bgc-h-default-l4">
                      <td class="td-toggle-details pos-rel">
                        <!-- this empty table cell will show the `+` sign which toggles the hidden cells in responsive (collapsed) mode -->

                        <div class="position-lc h-95 ml-1px border-l-3 brc-purple-m1">
                          <!-- this decorative highlight border will be shown only when table is collapsed (responsive) -->
                        </div>
                      </td>

                      <td class="pl-3 pl-md-4 align-middle pos-rel">
                        <input type="checkbox">
                        <div class="d-n-collapsed position-lc h-95 ml-1px border-l-3 brc-purple-m1">
                          <!-- this decorative highlight border will be shown only when table is in full mode (not collapsed >> .d-n-collapsed) -->
                        </div>
                      </td>

                      <td>
                        <span class="text-105">
                            <?php echo "ID: ".$value->id;?>
                        </span>
                        <div class="text-95 text-secondary-d1">
                          <?php /*?><?php echo "Landlord Name: ".$row['firstname']." ".$row['surname']." Reg. No.".$value->landlord_reg_no;?><?php */?>
                        </div>
                      </td>

                    <td class="text-grey">
                       <!--<span class="text-105">
                          
                        </span> -->
                        <div class="text-95 text-secondary-d1">
                           <?php echo "House No: ".$value->house_name_no.", "."Stree/Road No: ".$value->street_road_no.", "."Post Code: ".$value->post_code.", "."Location: ".$value->city_location;?>
                        </div>
                      </td>

                      <td class="text-grey">
                      <!-- <span class="text-105">
                            
                        </span> -->
                        <div class="text-95 text-secondary-d1">
                          <?php echo "Bed: ".$value->no_of_bed." Baths: ".$value->no_of_baths;?>
                        </div>
                      </td>

                      <td class="text-grey">
                       <span class="text-105">
                            
							<?php 
							if($value->room_status=='1'){
								echo "To Let";
							}
							if($value->room_status=='2'){
								echo "Let Agreed";
							}
							?>
						</span>
                        <div class="text-95 text-secondary-d1">
                          <?php echo date("d/m/Y", strtotime($value->available_date) );?>
						  
                        </div>
                      </td>

                      <td>
                       <span class="text-105">
					   		<?php echo $value->rent_type;?>
                           &pound;  <?php echo $value->rent_amount;?>
                        </span>
                        <div class="text-95 text-secondary-d1">
                          Vat: &pound; <?php echo $value->rent_amount;?>&nbsp; Deposit: &pound; <?php echo $value->deposit;?>
                        </div>
                      </td> 

                      <td class="align-middle">
                       <div class='d-none d-lg-flex'>
					   			<a href="#" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger">
                                  <i class="fa fa-desktop"></i>
                                </a>
								<a href="#" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger">
                                  <i class="fa fa-newspaper"></i>
                                </a>
                                <a href="#" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-success btn-a-lighter-success">
                                  <i class="fa fa-pencil-alt"></i>
                                </a>

                               <a href="<?php echo base_url() . "index.php/super_admin/delete_room/" . $value->id; ?>" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger" id="id-bootbox-confirm">
                                  <i class="fa fa-trash-alt"></i>
                                </a>
								 <a href="#" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger">
                                  <i class="fa fa-eye"></i>
                                </a>
                                
                              </div>

                              <!-- show a dropdown in mobile -->
                              <div class='dropdown d-inline-block d-lg-none dd-backdrop dd-backdrop-none-lg'>
                                <a href='#' class='btn btn-default btn-xs py-15 radius-round dropdown-toggle' data-toggle="dropdown">
                                  <i class="fa fa-cog"></i>
                                </a>

                                <div class="dropdown-menu dd-slide-up dd-slide-none-lg">
                                  <div class="dropdown-inner">
                                    
                                    <a href="#" class="dropdown-item">
                                      <i class="fa fa-pencil-alt text-blue mr-1 p-2 w-4"></i>
                                      Edit
                                    </a>
                                    <a href="<?php echo base_url() . "index.php/super_admin/delete_room/" . $value->id; ?>" class="dropdown-item">
                                      <i class="fa fa-trash-alt text-danger-m1 mr-1 p-2 w-4"></i>
                                      Delete
                                    </a>
                                    <a href="#" class="dropdown-item">
                                      <i class="far fa-eye text-orange-d1 mr-1 p-2 w-4"></i>
                                      View
                                    </a>
                                  </div>
                                </div>
                              </div>
                      </td>
                    </tr>
					<?php } ?>
                  </tbody>
                </table>

             
            </div>
          </div>

        <?php echo $showdata_common_footer; ?>