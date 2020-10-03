  <!-- Fullscreen modal -->
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
  		   <script> 
            var el_up = document.getElementById("GFG_UP"); 
            var el_down = document.getElementById("GFG_DOWN"); 
            el_up.innerHTML = "Click on button to get ID"; 
          	
            function GFG_click(clicked) { 
                var yesdone = el_down.innerHTML = "ID = "+clicked; 
				<?php
				$ff = "<script>document.writeIn(el_down)</script>";
				?>
					
            }   
			       
        </script>
		<?php
		$ff1='<script type="text/javascript">document.write(Math.floor(Math.random()*11));  
</script>';  
echo $ff1 ; 
		?>
		
		<p id = "GFG_DOWN" style = "color:green; font-size: 20px; font-weight: bold;"> </p>
                 <div class="modal-body text-center py-0">
				 <script>
   var res = "success";
</script>
<?php
   echo "<script>document.writeln(res);</script>";
?>
                   <?php
include APPPATH.'views/db_connection.php';
		echo $ff;							   
					

					
					 $arr = split('_', $ff);        
        			 echo $post_code = $arr[0]."<br>";
        				echo $max_rent = $arr[1]."<br>";
        echo $move_in_date = $arr[2]."<br>";
		echo $no_of_bed = $arr[3]."<br>";
					?>
                    <form autocomplete="off" class="form-row mt-45">
                      <div class="container">
					  	<div class="row">
							<div class="col-md-3" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"> <strong>Property Address</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>Available Date</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>Rent (&pound;)</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>No. Of Bed</strong></div>
							<div class="col-md-3" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><input type="checkbox" name="check_all" />&nbsp;Check All</div>
						</div>
						 <?php //foreach ($matched_property_list as $value){ ?>
						<div class="row">
							<div class="col-md-3"> <strong>Property Address</strong></div>
							<div class="col-md-2"><strong>Available Date</strong></div>
							<div class="col-md-2"><strong>Rent (&pound;)</strong></div>
							<div class="col-md-2"><strong>No. Of Bed</strong></div>
							<div class="col-md-3"><input type="checkbox" name="check_all" />&nbsp;<font color="#FFFFFF">Check All</font></div>
						</div>
						<?php //}?>
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
          
		  <!--end of modal -->
