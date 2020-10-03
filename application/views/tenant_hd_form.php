<?php echo $common_pageheader; ?>
          <div role="main" class="page-content container container-plus">
            <div class="card bcard mt-2 mt-lg-3">
              <div class="card-header">
                 <h3 class="card-title text-125">
                  <i class="fa fa-address-card text-dark-l3 mr-1"></i>
                  RESIDENTIAL TENANCY APPLICATION 
                </h3>
				<h3 class="card-title text-125">
                  <i class="fa fa-eye text-dark-l3 mr-1"></i>
				  	<a href="<?php echo base_url();?>index.php/super_admin/registered_tenant_list">
                  	<small>registered</small> Tenant List
					</a>
                </h3>
				
              </div>

              <div class="card-body px-3 pb-1">
                <?php
                foreach ($tenant_hd_form as $value){
				  
				 include APPPATH.'views/db_connection.php';
									   
									  
							$query = "select * from tenant where id='$value->tenant_id'";
                            $res = mysqli_query($con, $query);
                            $row = mysqli_fetch_array($res);
							
							$property = "select * from property where id='$value->property_id'";
                            $pro_res = mysqli_query($con, $property);
                            $pro_details = mysqli_fetch_array($pro_res);
				?> 
				<form action="<?php echo base_url();?>index.php/super_admin/save_holding_deposit" method="post"  class="mt-lg-3" >
				 <input type="hidden" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="arrange_viewing_id" value="<?php echo $value->id;?>">
				<div class="form-group row">
                   <div class="col-sm-12 input-floating-label">
				   
				   	<p>Acceptance of your holding deposit does not imply a tenancy and the balance of all money that is required to be paid by cash, bank transfer, bank draft or building society cheque to City Lord Ltd. The administration charge would apply if you cancel your application or fail to provide additional information to allow referencing to proceed. In a circumstance if the landlord or agent chooses not to give the property, it will take 10 working days to refund the money, which will be in the form of a cheque. </p>
					<p>The amount paid for holding deposit is usually 1 week Rent + VAT payable before signing the Tenancy Agreement and Handling over of keys to property. </p>
					<p><strong>I/We confirm that all information provided on this form is correct and also I have read and understood everything clearly and I agree with the terms </strong></p>
					<h5>PLEASE NOTE</h5>
					<p>As a fundamental condition in the event the Applicant(s) is unable to enter into the Tenancy contract within this period of time, the Holding Deposit will not be returned and will be used to offset any loss incurred by the Landlord & Agent whilst the property was not marketed. </p>
					<p>This document does not withdraw the landlord’s mandatory right to refuse the Applicant from entering the Tenancy contract for any reason. In the event a refusal is made by the landlord or agent, the Holding Deposit is refundable in full ** ( A full refund is not applicable if denied through the reference procedure** This document does not form any part of the Tenancy Agreement in regards to the subject property. </p>
					<h5>TENANT’S RESPONSIBILITIES</h5>
					<ul>
						<li> 1.1 On the day of the moving in day the contracts are to be signed and the keys are to be handed over on the day. The one month’s rent and agreed full deposit in advance MUST BE PAID IN CLEARED FUNDS (within 2 working days of the move in date), i.e. cash building society cheque or Banker’s Draft. Under NO circumstances will a personal cheque be accepted.</li>
					</ul>
						<h5>REFERENCE PROCEDURE:</h5>
					<ul>
						<li>2. All Tenants must hand in copies/original identifications and references within 48 hours of signing the tenancy application form. You can email us at members@citylord.co.uk or provide these at the City Lord Mile End office (41 Burdett Road, Bow London, E3 4TN)</li>
						<li>2.3. Our nominated reference check company will contact to fill up and submit the application form. Where the right to rent the property will be checked through the references provided. **( A full refund is not applicable if denied through the reference procedure)** </li>
					</ul>
					<h5>COPIES OF IDENTIFICATION AND REFERENCE REQUIRED:</h5>
					<ul>
					
					   <li> Copy of passport / Full UK driving license * Minimum 3 months Bank statements and not older than 3 months</li>
					   <li> Minimum 3 months Pay Slip * Utility bills:-Gas, Electricity, Water or Council Tax bill</li>
					   <li>Details of employer (contact name, address & telephone number), along with employer’s written reference stating your annual salary</li>
					   <li>Details of previous Landlord/Estate Agent (contact name, address & telephone number), along with landlords/Estate Agent’s written reference</li>
					   <li> Details and proof of Scholarship (If you are a student)</li>

					</ul>
					<p><strong>*** As a guarantor is required, please provide all above documentation stated above and if the guarantor is self-employed, also provide their Accountant’s name, address and contact number. Guarantor must be UK home owner and meet the reference requirement. </strong></p>
					<p><strong>In the event if references are declined a cost of £75+Vat will be deducted from the holding deposit for each tenant </strong></p>
					
				   </div>
				</div>
                  <div class="form-group row">
                   
                    
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="agent_name">
                      <span class="floating-label text-grey-m3">
                        Agent Name
                    </span>
					
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                       <div class="pos-rel">
                          <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1" name="date_of_sign">
						   <span class="floating-label text-grey-m3">
                        	Date of Sign
                    	   </span>
                      </div>
                    </div>
					
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <div class="pos-rel">
					  <?php
					
					  ?>
                          <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1_1" name="move_in_date" value="<?php echo date("d/m/Y", strtotime($row['move_in_date']) );?>">
						   <span class="floating-label text-grey-m3">
                        	Moving date
                    	   </span>
                      </div>
					
                    </div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <div class="pos-rel">
                          <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1_2" name="ref_check_last_date">
						   <span class="floating-label text-grey-m3">
                        	
	Ref Check Last Date 
                    	   </span>
                      </div>
					
                    </div>
					
					 
                  </div>
				  <div class="form-group row">
                   
                    
				 <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
				  <input type="hidden" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="property_id" value="<?php echo $value->property_id;?>">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="property_name" value="<?php echo $pro_details['house_name_no'].", ".$pro_details['street_road_no'].", ".$pro_details['post_code'].", ".$pro_details['city_location'];?>" readonly="">
                      <span class="floating-label text-grey-m3">
                       Property Address
                    </span>
                    </div>
					 <div class="col-sm-6 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="previous_property_address">
                      <span class="floating-label text-grey-m3">
                        Previous Property Address
                    </span>
                    </div>
					
                  </div>
				 
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			<div class="card bcard mt-2 mt-lg-3">
			
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-user text-dark-l3 mr-1"></i>
                  ALL TENANTS ARE JOINTLY AND SEVERALLY LIABLE FOR ENTIRE RENTAL COMMITMENT
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                 <div class="form-group row">
                   	  
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                  <strong>No.</strong>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                   <strong>Name</strong>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                    <strong>Telephone</strong>
                    </div>
					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                    <strong>Email</strong>
                    </div>
					
					
                  </div>
				  <div class="form-group row">
				  	 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                   1.
                    </div>
                   	 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					  <input type="hidden" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="tenant_id" value="<?php echo $value->tenant_id;?>">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" value="<?php echo $row['firstname']." ".$row['surname'];?>" id="id-form-field-2" name="tenant_name" readonly="">
                      
                    </div>
					
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					
                       <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" value="<?php echo $row['contact'];?>" readonly="">
                     
					</div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					 
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" value="<?php echo $row['email'];?>" readonly="">
                     
					</div>
					
					
                  </div>
				   <div class="form-group row">
				  	 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                   2.
                    </div>
                   	 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none"  id="id-form-field-2" name="tenant_name2">
                      
                    </div>
					
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					
                       <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2"  name="tenant_telephone2">
                     
					</div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					 
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2"  name="tenant_email2">
                     
					</div>
					
					
                  </div>
				   <div class="form-group row">
				  	 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                   3.
                    </div>
                   	 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none"  id="id-form-field-2" name="tenant_name3">
                      
                    </div>
					
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					
                       <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2"  name="tenant_telephone3">
                     
					</div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
					 
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2"  name="tenant_email3">
                     
					</div>
					
					
                  </div>
				
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			<div class="card bcard mt-2 mt-lg-3">
			
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-credit-card text-dark-l3 mr-1"></i>
                  TOTAL AMOUNT TO BE PAID TO MOVE IN TO THE PROPERTY
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                 <div class="form-group row">
                   	  
					
					 <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-1" class="mb-0">
                        Month rent in advance
                      </label>
                    </div>

                    <div class="col-sm-2">
					<select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="no_month_advance">
                       
                       
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
						  <option value="11">11</option>
						  <option value="12">12</option>

					</select>
                     
                    </div>
 					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="advance_amount">
                      <span class="floating-label text-grey-m3">
                        Amount (&pound;)
                    </span>
                    </div>
				  </div>
				  
				  <div class="form-group row">
				  	 <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-1" class="mb-0">
                         Deposit
                      </label>
                    </div>

                    <div class="col-sm-2">
					<select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="deposit_week_month">
                          <option value="6 Week">6 Week</option>
						  <option value="1 Month">1 Month</option>
						  <option value="2 Month">2 Month</option>
						  <option value="3 Month">3 Month</option>
						  <option value="4 Month">4 Month</option>
					</select>
                     
                    </div>
 					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="deposit_amount">
                      <span class="floating-label text-grey-m3">
                        Amount (&pound;)
                    </span>
                    </div>
					
                  </div>
				   <div class="form-group row">
				  	 <div class="col-sm-5 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-1" class="mb-0">
                         Administration charge
                      </label>
                    </div>

                  
 					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="admin_charge">
                      <span class="floating-label text-grey-m3">
                        Amount (&pound;)
						</span>
						</div>
					</div>
			
			 <div class="form-group row">
				  	 <div class="col-sm-3 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-1" class="mb-0">
                         VAT(20%)
                      </label>
                    </div>

                    <div class="col-sm-2">
					<select class="form-control" id="form-control form-control-lg col-sm-8 col-md-12 shadow-none" style="height:49px;" name="vat">
                          <option value="1">Yes</option>
						  <option value="0">No</option>
					</select>
                     
                    </div>
 					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="vat_amount">
                      <span class="floating-label text-grey-m3">
                        Amount (&pound;)
                    </span>
                    </div>
					
                  </div>
					<div class="form-group row">
				  	 <div class="col-sm-5 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-1" class="mb-0">
                         Total Amount (&pound;)
                      </label>
                    </div>

                  
 					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="total_amount">
                     
						</div>
					</div>
				<div class="form-group row">
				  	 <div class="col-sm-5 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-1" class="mb-0">
                         Holding Deposit: (&pound;)
                      </label>
                    </div>

                  
 					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="holding_deposit">
                     
						</div>
					</div>
					<div class="form-group row">
				  	 <div class="col-sm-5 col-form-label text-sm-right pr-0">
                      <label for="id-form-field-1" class="mb-0">
                         Total outstanding balance (&pound;)
                      </label>
                    </div>

                  
 					 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                     <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="total_outstanding_balance">
                     
						</div>
					</div>
				
              </div><!-- /.card-body -->
            </div><!-- /.card -->
		<div class="card bcard mt-2 mt-lg-3">
			
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-user text-dark-l3 mr-1"></i>
                  PLEASE USE THE ACCOUNT DETAISL BELOW FOR RENT AND DEPOSIT.
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                 <div class="form-group row">
                   	  
					<div class="col-sm-12 input-floating-label">
                		Account Name: STK Homes
                    </div>
					
					
                  </div>
				  <div class="form-group row">
				  	 <div class="col-sm-3 input-floating-label">
                   <strong><u>Rent</u></strong><br />
					Account No: 00000000<br />
					Sort-Code: 00-00-00<br />

<strong style="margin-top:10px; margin-bottom:10px;">Payment Ref -STK</strong>
<input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="payment_ref">
 
                    </div>
                   	 <div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
				      
                    </div>
					
					<div class="col-sm-3 input-floating-label">
					<strong><u>Deposit:</u></strong><br />
Account No: 00000000<br />
Sort-Code: 00-00-00<br />
Deposit Ref: STK 
					</div>
					
					
                  </div>
				  
				   <div class="form-group row">
				  	 <div class="col-sm-12 input-floating-label text-blue-d2 brc-blue-m1" align="center" style="margin-top:20px;">
                  Bank Name: Lloyds Bank – Stratford Broad Way Branch, E15<br />
N.B: If you pay to the bank, please bring your bank receipts as evidence of your payment 
                    </div>
                   	
					
					
                  </div>
				 
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			<div class="card bcard mt-2 mt-lg-3">
			
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-user text-dark-l3 mr-1"></i>
                  DATA PROTECTION
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                 <div class="form-group row">
                   	  
					<div class="col-sm-12 input-floating-label">
                		<p>We are registered with the Information Commissioner’s Office under registration number 000000 and by signing this agreement, you consent to the storage and use of your data and that of your Guarantor by manual or electronic mean. The information which you provide to us is confidential. </p>
						<p>We place great emphasis on maintaining the highest standards of confidentiality. Our Directors and staff are under an obligation not to disclose any confidential information to third parties other than to the Landlord and Credit Reference Agencies without your authority. This said, we may be required to make a disclosure of certain information to comply with professional rules or the general law.  </p>
						<p>Before we undertake to let any properties and enter into an agreement, we will ask for information about you and that of your Guarantor, including your name, address and date of birth and National Insurance number, together with some identification, for example, your passport and proof of residence and we will keep a copy of this ("your Data") and provide a copy to the Landlord. We may use your Data to undertake a search with a credit reference agency. We will keep a copy of any searches made and the results which will be used for internal decision-making purposes. The credit reference agency may also keep a copy of the search and they may share that information with other businesses who undertake similar searches in respect of you.  </p>
						<p>We may use your Data and other information we obtain as a result of the work we do for you to provide you with a letting and management services and to administer your account with us including tracing and collecting any debts. We may also use it to carry out our legal obligations (for example by verifying your identity to comply with the requirements of the Right to Rent checks), to ensure client satisfaction and to improve services and for the safety and security of our offices and staff.  </p>
						<p>We may, from time to time, contact you by letter, phone, email or otherwise about our services which we believe will be of interest to you. Please tick the box at the end of this Agreement if you consent to us contacting you in this way. You can change your mind at any time.  </p>
						<p>Any private and personal information about you will be processed in accordance with the principles of the General Data Protection Regulations. Under the Regulations, an individual has the right to obtain copies of personal data about them held by us without charge and to have it corrected if it is inaccurate. If you have any queries in relation to the above, please do not hesitate to contact us. If we have any doubt as to whether you might object to the disclosure of any information we will seek to obtain your consent before doing so unless disclosure is required as a matter of law.  </p>
						<p>If you require further information about how we process your data and your rights, a copy of our Privacy/Data Collection Notice is available on our website and a hard copy is available on request.  </p>
						
                    </div>
					
					
                  </div>
				 
				
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			
			<div class="card bcard mt-2 mt-lg-3">
			
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-user text-dark-l3 mr-1"></i>
                  DECLARATION
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                 <div class="form-group row">
                   	  
					<div class="col-sm-12 input-floating-label">
                		<p>I, the applicant (s), hereby authorize City Lord ltd to pass all copies of my/our references and ID over to the said Landlord and reference company for approval. I/We agree that City Lord ltd may also keep copies of the references and ID provided in respect of this proposed letting on their files/computer Database for future reference if required. </p>
						<p>At City Lord ltd, we have offers and news about our services that we hope you would like to hear about. By providing your details you agree to be contacted by us. We will treat your data with respect and if later you change your mind and prefer not to hear from us, you can stop receiving updates at any time by getting in touch. Please tick below to tell us all the ways you would prefer to hear from us: (Use Sign X)</p>
						
                    </div>
					 <div class="col-sm-12 input-floating-label">
					 	Yes please, I would like to receive communications by email&nbsp;&nbsp;<input type="checkbox" name="by_email" value="1" />
					 </div>
					<div class="col-sm-12 input-floating-label">
					 	Yes please, I would like to receive communications by telephone&nbsp;&nbsp;<input type="checkbox" name="by_phone" value="1" />
					 </div>
					 <div class="col-sm-12 input-floating-label">
					 	Yes please, I would like to receive communications by text message&nbsp;&nbsp;<input type="checkbox" name="by_message" value="1" />
					 </div>
					 <div class="col-sm-12 input-floating-label">
					 	Yes thank you, I do not wish to receive communications by post&nbsp;&nbsp;<input type="checkbox" name="by_post" value="1" />
					 </div>
					
                  </div>
				 
				  
			
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			<div class="card bcard mt-2 mt-lg-3">
			
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-user text-dark-l3 mr-1"></i>
                  TENANT SIGNATURE
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                
				  <div class="form-group row">
				  	<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="lead_tenant_name">
                      <span class="floating-label text-grey-m3">
                        Lead Tenant’s Name
                    </span>
					</div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="lead_tenant_signature">
                      <span class="floating-label text-grey-m3">
                        Signature
                    </span>
					</div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                       <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1_3" name="lead_tenant_sign_date">
						   <span class="floating-label text-grey-m3">
                        	Date
                    	   </span>
					</div>
					
                  </div>
				 
			
              </div><!-- /.card-body -->
            </div><!-- /.card -->
			
			<div class="card bcard mt-2 mt-lg-3">
			
              <div class="card-header">
                <h3 class="card-title text-125">
                  <i class="fa fa-user text-dark-l3 mr-1"></i>
                  AGENT SIGNATURE
                </h3>
              </div>

              <div class="card-body px-3 pb-1">
               
                
				  <div class="form-group row">
				  	
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                      <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-form-field-2" name="agent_signature">
                      <span class="floating-label text-grey-m3">
                        Signature
                    </span>
					</div>
					<div class="col-sm-3 input-floating-label text-blue-d2 brc-blue-m1">
                       <input type="text" class="form-control form-control-lg col-sm-8 col-md-12 shadow-none" id="id-date-1_4" name="agent_sign_date">
						   <span class="floating-label text-grey-m3">
                        	Date
                    	   </span>
					</div>
					
                  </div>
				 
					
				 <div class="mt-5 border-t-1 brc-secondary-l2 py-35 mx-n25">
                    <div class="offset-md-3 col-md-9 text-nowrap">
                      <button class="btn btn-info btn-bold px-4" type="submit">
                        <i class="fa fa-check mr-1"></i>
                        Submit
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