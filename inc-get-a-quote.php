					<!-- Small modal -->
                    

  
                                                
						<button class="button button-small button-black topmargin-sm bottommargin" data-toggle="modal" data-target="#contactFormModal"><i class="icon-line-paper"></i>Get a Quote</button>
  
  
                                        

  
    						<!-- Modal Contact Form
						============================================= -->
                        <div class="col_full center">

						<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true" >
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<div class="srgproductheading text-center" >GET A QUOTE</div>
                                          <!-- delete this   -->
                          <!--p style="color:#F00; font-size:12px; text-align:center">Currently, this form is under maintenance. Please email us at contactus@srgroupindia.com or call us at 1800-547-0059. We apologise for the inconvenience. </p-->

                        <!-- delete this  -->
									</div>
									<div class="modal-body">
										<div id="contact-form-result" data-notify-type="success" data-notify-msg=" <i class=icon-ok-sign></i> Message Sent Successfully!"></div>
										<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/ger-quote-form.php" method="post">

											<div class="form-process"></div>

											<div class="col_full">
												<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
											</div>
											<div class="clear"></div>
											<div class="col_full">
												<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
											</div>

											<div class="col_full">
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control required" placeholder="Mobile" />											</div>

	
    											<div class="col_full">
												<input type="text" id="template-contactform-name" name="template-contactform-location" value="" class="sm-form-control border-form-control required" placeholder="Location" />
											</div>
    
    										<div class="col_full">
											<select id="template-contactform-category" name="template-contactform-category" class="sm-form-control required">
												<option value="">-- Select One --</option>
												<option value="Marketing">Dealer</option>
												<option value="Architect">Architect</option>
												<option value="Contractor">Contractor</option>
                                                <option value="Consumer">Consumer</option>
												<option value="Others">Others</option>
											</select>
										</div>



							<div class="col_full">*All fields are mandatory
											</div>

											<div class="col_full hidden">
												<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
											</div>

											

											<div class="col_full center">
												<button class="button button-border t500 " type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">SUBMIT</button>
											</div>

										</form>


									</div>
									
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- Modal Contact Form End --> 

		  
                     										<script type="text/javascript">
											$("#template-contactform").validate({
												submitHandler: function(form) {
													$('.form-process').fadeIn();
													$(form).ajaxSubmit({
														target: '#contact-form-result',
														success: function() {
															$('.form-process').fadeOut();
															$('#template-contactform').find('.sm-form-control').val('');
															$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
															SEMICOLON.widget.notifications($('#contact-form-result'));
														}
													});
												}
											});
										</script>
   

         <!-- Small modal -->
