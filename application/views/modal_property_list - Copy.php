  <!-- Fullscreen modal -->
            <div class="modal fade modal-fs" id="modalFullscreen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                      <i class="fa fa-user text-success-m2"></i>&nbsp;Property List
                    </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                 <div class="modal-body text-center py-0">
                   

                    <form autocomplete="off" class="form-row mt-45">
                      <div class="container">
					  	<div class="row">
							<div class="col-md-3" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"> <strong>Property Address</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>Available Date</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>Rent (&pound;)</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>No. Of Bed</strong></div>
							<div class="col-md-3" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><input type="checkbox" name="check_all" />&nbsp;Check All</div>
						</div>
						 <?php foreach ($matched_property_list as $value){ ?>
						<div class="row">
							<div class="col-md-3"> <strong>Property Address</strong></div>
							<div class="col-md-2"><strong>Available Date</strong></div>
							<div class="col-md-2"><strong>Rent (&pound;)</strong></div>
							<div class="col-md-2"><strong>No. Of Bed</strong></div>
							<div class="col-md-3"><input type="checkbox" name="check_all" />&nbsp;<font color="#FFFFFF">Check All</font></div>
						</div>
						<?php }?>
					  </div>
                     
                    </form>
                  </div><!-- /.modal-body -->

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                      Close
                    </button>

                    <button type="button" class="btn btn-primary">
                      Go
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  <!--end of modal -->
