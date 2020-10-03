<?php echo $common_pageheader; ?>

          <div role="main" class="page-content container container-plus">
            <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                Possible Tenant
                <small class="page-info text-dark-m3">
                  <i class="fa fa-angle-double-right text-80"></i>
                  showing all Possible Tenant here
                </small>
              </h1>
			   <h3 class="page-title text-primary-d2 text-120">
			   	<a href="<?php echo base_url();?>index.php/super_admin/possible_tenant"><i class="fa fa-plus"></i>
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
                        Name - Profession
                      </th>

                     <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Cell - Post Code
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Max. Rent  - Suitable Time
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Number of Bed - Occupy
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Move-in - Move-out
                      </th> 

                      <th class="border-0 bgc-white shadow-sm w-2">
                        <!-- the TD will have edit icon -->
                      </th>
                    </tr>
                  </thead>

                  <tbody class="pos-rel">
				  <?php foreach ($possible_tenant_list as $value){ 
				  
				 /* include APPPATH.'views/db_connection.php';
									   
									  
							$query = "select * from department where id='$value->department'";
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
                            <?php echo $value->firstname." ".$value->surname;?>
                        </span>
                        <div class="text-95 text-secondary-d1">
                          <?php echo $value->profession;?>
                        </div>
                      </td>

                    <td class="text-grey">
                       <span class="text-105">
                            <?php echo $value->contact;?>
                        </span>
                        <div class="text-95 text-secondary-d1">
                          <?php echo $value->post_code;?>
                        </div>
                      </td>

                      <td class="text-600 text-grey-d1">
                       <span class="text-105">&pound; 
                            <?php echo $value->max_rent;?>
                        </span>
                        <div class="text-95 text-secondary-d1">
                          <?php echo $value->suitable_contact_time;?>
                        </div>
                      </td>

                      <td class="text-grey">
                       <span class="text-105">
                            <?php echo $value->no_of_bed." - ".$value->no_of_occupy;?>
                        </span>
                        <!--<div class="text-95 text-secondary-d1">
                          
                        </div> -->
                      </td>

                      <td>
                       <span class="text-105">
                            <?php echo $value->move_in_date;?>
                        </span>
                        <div class="text-95 text-secondary-d1">
                          <?php echo $value->move_out_date;?>
                        </div>
                      </td> 
					  <script type="text/javascript">
						$(document).ready(function(){
						var $modal = $('#modalFullscreen');
						$('.click_to_load_modal_popup').on('click', function(){
						var arrg_view_date = $(this).attr("id");
						$modal.load('modal_property_list.php',{'arrg_view_date': arrg_view_date},
						function(){
						$modal.modal('show');
						});
						
						});
						});
					</script>
		
          
       <!-- <button id="<?php echo $value->post_code.'_'.$value->max_rent.'_'.$value->move_in_date.'_'.$value->no_of_bed;?>" onClick="GFG_click(this.id)" data-toggle="modal" data-target="#modalFullscreen"> 
            Button1 
        </button> 
          
        <button id="2" onClick="GFG_click(this.id)"> 
            Button2 
        </button> 
          
        <button id="3" onClick="GFG_click(this.id)"> 
            Button3 
        </button> 
   -->
        
          
       
					<div class="modal fade modal-fs" id="modalFullscreen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
						<?php echo $modal_property_list; ?>
					</div>
                      <td class="align-middle">
                       <div class='d-none d-lg-flex'>
					   			
								<!--<a href="#" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger" data-toggle="modal" data-target="#modalFullscreen">
                                  <i class="fa fa-link"></i>
                                </a> -->
								
								<button type="button" class="click_to_load_modal_popup mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger"  id="<?php echo $value->post_code.'_'.$value->max_rent.'_'.$value->move_in_date.'_'.$value->no_of_bed;?>" data-toggle="modal" data-target="#modalFullscreen" onClick="GFG_click(this.id)"> Matched Property</button>
									
									<!--<input type="submit"  name="search_item" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger" data-toggle="modal" data-target="#modalFullscreen"/> -->
									
									
					   			<a href="<?php echo base_url() . "index.php/super_admin/tenant_arrange_viewing/" . $value->id; ?>" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger" data-toggle="tooltip" data-placement="top" title="Arrange Viewing" id="tooltip-1">
                                  <i class="fa fa-share-square"></i>
                                </a>
								
								
                                <a href="#" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-success btn-a-lighter-success">
                                  <i class="fa fa-pencil-alt"></i>
                                </a>

                                <a href="#" class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger">
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
                                    <div class="dropdown-header text-100 text-secondary-d1 border-b-1 brc-secondary-l2 text-600 mb-2">
                                      ace.com
                                    </div>
                                    <a href="#" class="dropdown-item">
                                      <i class="fa fa-pencil-alt text-blue mr-1 p-2 w-4"></i>
                                      Edit
                                    </a>
                                    <a href="#" class="dropdown-item">
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