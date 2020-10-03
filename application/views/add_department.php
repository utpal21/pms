<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            <div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-plus text-dark-l3 mr-1"></i>
                  Add Department
                </h3>
				<h3 class="card-title text-125">
                  <i class="fa fa-eye text-dark-l3 mr-1"></i>
				  	<a href="<?php echo base_url();?>index.php/super_admin/department_list">
                  	Department List
					</a>
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               <form action="<?php echo base_url();?>index.php/super_admin/save_department" method="post"  class="mt-lg-3" autocomplete="off">
				<?php 
				$message=$this->session->userdata('message');
				if(isset($message))
				{
					$this->session->unset_userdata('message');
				}
				?>

                  <div class="form-group row">
                    <div class="mb-1 mb-sm-0 col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-2" class="mb-0">
                       
                      </label>
                    </div>

                    <div class="col-sm-9 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" name="department_name" class="form-control form-control-lg col-sm-8 col-md-6 shadow-none" id="id-form-field-2">
                      <span class="floating-label text-grey-m3">
                        Department Name
                    </span>
                    </div>
                  </div>

				<div class="mt-5 border-t-1 brc-secondary-l2 py-35 mx-n25">
                    <div class="offset-md-3 col-md-9 text-nowrap">
                      <button class="btn btn-info btn-bold px-4" type="submit">
                        <i class="fa fa-check mr-1"></i>
                        Submit
                      </button>
					<!--	<input type="submit"  value="Sign In"class="btn btn-primary btn-block px-4 btn-bold mt-2 mb-4"> -->
                      <button class="btn btn-outline-lightgrey btn-bold ml-2 px-4" type="reset">
                        <i class="fa fa-undo mr-1"></i>
                        Reset
                      </button>
                    </div>
                  </div>
                </form>
              </div><!-- /.card-body -->
            </div><!-- /.card -->
		</div>
<?php echo $common_pagefooter; ?>
        