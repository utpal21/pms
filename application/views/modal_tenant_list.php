  <!-- Fullscreen modal -->
  <!-- <script type="text/javascript">
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
					   </script> -->
					 <script type="text/javascript">
                    $(document).ready(function() {
                        $("#checkAll").change(function () {
                            $("input:checkbox").prop('checked', $(this).prop("checked"));
                        });
                        
                        $('#form_check').on('submit', function (e) {
                            if ($("input[type=checkbox]:checked").length === 0) {
                                e.preventDefault();
                                alert('No way you submit it without checking a box');
                                return false;
                            }
                        });
                    });
                </script>  
      
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                      <i class="fa fa-user text-success-m2"></i>&nbsp;Tenant List
                    </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
  		   <script> 
            var el_down = document.getElementById("GFG_DOWN"); 
            function GFG_click(clicked) { 
                var yesdone = el_down.innerHTML = ""+clicked; 
			}   
			       
        </script>
		<?php
				
				?>
		
		
		<!--<p id = "GFG_DOWN" style = "color:green; font-size: 20px; font-weight: bold;"> </p>  -->
             <form id="form_check" action="#" method="post">
			  <div class="modal-body text-center py-0">
				   <?php
			include APPPATH.'views/db_connection.php';
					 $search_data = "E1 4RT_1000_2020-09-08_2";
			
				
					 $arr = explode("_", $search_data);        
        			  $post_code = $arr[0];
        			  $max_rent = $arr[1];
					  $available_date = $arr[2];
					  $no_of_bed = $arr[3];
	
	$query="SELECT * FROM tenant WHERE post_code ='$post_code' OR max_rent='$max_rent' OR move_in_date='$available_date' OR no_of_bed='$no_of_bed' order by id DESC";
    $res = mysqli_query($con,$query);
      
    while($row = mysqli_fetch_array($res))
    {
		  $id=$row['id'];
		  $firstname=$row['firstname'];
		  $surname=$row['surname'];
		  $move_in_date=$row['move_in_date'];
		  $max_rent=$row['max_rent'];
		  $no_of_bed=$row['no_of_bed'];
          
	?>
                    <!--<form autocomplete="off" class="form-row mt-45"> -->
				
                      <div class="container">
					  	<div class="row">
							<div class="col-md-3" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"> <strong>Tenant Name</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>Moving Date</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>Max. Rent (&pound;)</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>No. Of Bed</strong></div>
							<div class="col-md-3" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><input type="checkbox" id="checkAll"/>&nbsp;Check All</div>
						</div>
							
						<div class="row">
							<div class="col-md-3"> <strong><?php echo $firstname." ".$surname;?></strong></div>
							<div class="col-md-2"><strong><?php echo $move_in_date;?></strong></div>
							<div class="col-md-2"><strong><?php echo $max_rent;?></strong></div>
							<div class="col-md-2"><strong><?php echo $no_of_bed;?></strong></div>
							<div class="col-md-3"><input type="checkbox" class="ace" name="id[]" value="<?php echo $id;?>"/>&nbsp;<font color="#FFFFFF">Check All</font></div>
						</div>
						
					  </div>
                     <?php } ?>
                   
                  </div><!-- /.modal-body -->

                  <div class="modal-footer">
                   <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">
                      Close
                    </button> -->

                   <!-- <button type="button" class="btn btn-primary">
                      Go
                    </button> -->
					<input type="hidden" name="tenant_id" value="6" class="btn btn-primary"/>
					<input type="submit" name="matched_tenant" value="Selected" class="btn btn-info btn-xs"/>
                  </div>
                </div>
              </div>
            </div>
           </form>
		  <!--end of modal -->
