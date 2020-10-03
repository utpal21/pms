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
                      <i class="fa fa-user text-success-m2"></i>&nbsp;Property List
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
		
		
		<!--<p id = "GFG_DOWN" style = "color:green; font-size: 20px; font-weight: bold;"> </p> -->
             <form id="form_check" action="#" method="post">
			  <div class="modal-body text-center py-0">
				   <?php
			include APPPATH.'views/db_connection.php';
					 $search_data = "E1 4RT_1000_2020-09-08_2";
			
				
					 $arr = explode("_", $search_data);        
        			  $post_code = $arr[0];
        			  $max_rent = $arr[1];
					  $move_in_date = $arr[2];
					  $no_of_bed = $arr[3];
	
	 $query="SELECT * FROM property WHERE post_code ='$post_code' OR rent_amount='$max_rent' OR available_date='$move_in_date' OR no_of_bed='$no_of_bed' order by id DESC";
    $res = mysqli_query($con,$query);
      
    while($row = mysqli_fetch_array($res))
    {
		  $id=$row['id'];
		  $property_address=$row['house_name_no'].", ".$row['street_road_no'].", ".$row['post_code'].", ".$row['city_location'];
		  $available_date=$row['available_date'];
		  $rent_amount=$row['rent_amount'];
		  $no_of_bed=$row['no_of_bed'];
          
	?>
                    <!--<form autocomplete="off" class="form-row mt-45"> -->
				
                      <div class="container">
					  	<div class="row">
							<div class="col-md-3" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"> <strong>Property Address</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>Available Date</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>Rent (&pound;)</strong></div>
							<div class="col-md-2" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><strong>No. Of Bed</strong></div>
							<div class="col-md-3" style="background-color:#000; color:#FFFFFF; padding:10px; margin-bottom:10px;"><input type="checkbox" id="checkAll"/>&nbsp;Check All</div>
						</div>
							
						<div class="row">
							<div class="col-md-3"> <strong><?php echo $property_address;?></strong></div>
							<div class="col-md-2"><strong><?php echo $available_date;?></strong></div>
							<div class="col-md-2"><strong><?php echo $rent_amount;?></strong></div>
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
					<input type="submit" name="matched_property" value="Selected" class="btn btn-info btn-xs"/>
                  </div>
                </div>
              </div>
            </div>
           </form>
		  <!--end of modal -->
