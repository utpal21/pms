<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                Department
                <small class="page-info text-dark-m3">
                  <i class="fa fa-angle-double-right text-80"></i>
                  showing all department here
                </small>
              </h1>
			   <h3 class="page-title text-primary-d2 text-120">
			   	<a href="<?php echo base_url();?>index.php/super_admin/add_department"><i class="fa fa-plus"></i>
                Add New</a>
               </h3>

              <div class="page-tools mt-3 mt-sm-0 mb-sm-n1">
                <!-- dataTables search box will be inserted here dynamically -->
              </div>
            </div>

            <div class="card bcard h-auto">
              <form autocomplete="off" class="border-t-3 brc-blue-m2">

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
                        Name
                      </th>

                     <!-- <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Office
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Age
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Start date
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Salary
                      </th> -->

                      <th class="border-0 bgc-white shadow-sm w-2">
                        <!-- the TD will have edit icon -->
                      </th>
                    </tr>
                  </thead>

                  <tbody class="pos-rel">
				  <?php foreach ($department_list as $value){ ?>
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
                            <?php echo $value->department_name;?>
                        </span>
                        <!--<div class="text-95 text-secondary-d1">
                          System Architect
                        </div> -->
                      </td>

                    <!--  <td class="text-grey">
                        Edinburgh
                        <div><span class='badge bgc-orange-d1 text-white badge-sm'>On Vacation</span></div>
                      </td>

                      <td class="text-600 text-grey-d1">
                        61
                      </td>

                      <td class="text-grey">
                        2011/04/25
                      </td>

                      <td>
                        <i class="fa fa-arrow-down text-orange-d1"></i>
                        $320,800
                      </td> -->

                      <td class="align-middle">
					 
                        <span class="d-none d-lg-inline">
                            <a data-rel="tooltip" data-action="edit" title="Edit" href="<?php echo base_url() . "index.php/super_admin/edit_department/" . $value->id; ?>" class="v-hover">
                                <i class="fa fa-edit text-blue-m1 text-120"></i>
                            </a>
							  <a data-rel="tooltip" data-action="edit" title="Edit" href="<?php echo base_url() . "index.php/super_admin/delete_department/" . $value->id; ?>" class="v-hover">
                                <i class="fa fa-trash-alt text-blue-m1 text-120"></i>
                            </a>
                        </span>
						

                        <span class="d-lg-none text-nowrap">
                            <a title="Edit" href="#" class="btn btn-outline-info shadow-sm px-4 btn-bgc-white">
                                <i class="fa fa-pencil-alt mx-1"></i>
                                <span class="ml-1 d-md-none">Edit</span>
                        </a>
                        </span>
                      </td>
                    </tr>
					<?php } ?>
                  </tbody>
                </table>

              </form>
            </div>
          </div>

        <?php echo $showdata_common_footer; ?>