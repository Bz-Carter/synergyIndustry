<!-- Section-1 -->
<table class="table_full editable-bg-color bg_color_e6e6e6 editable-bg-image" bgcolor="#e6e6e6" width="100%" align="center"  mc:repeatable="castellab" mc:variant="Header" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td>
			<!-- container -->
			<table class="table1 editable-bg-color bg_color_303f9f" bgcolor="#05233a" width="600" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
				<!-- padding-top -->
				<tr><td height="25"></td></tr>
				<tr>
					<td>
						<!-- Inner container -->
						<table class="table1" width="800" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
							
							<!-- horizontal gap -->
							<tr><td height="40"></td></tr>

							<tr>
								<td mc:edit="text001" align="center" class="text_color_ffffff" style="color: #ffffff; font-size: 25px; font-weight: 700; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text">
										<span class="text_container">
											<multiline>
												{{ $data['firstname'] }}  {{ $data['lastname'] }}
												<br>vient d'effectuer une nouvelle demande de devis
											</multiline>
										</span>
									</div>
								</td>
							</tr>
						</table><!-- END inner container -->
					</td>
				</tr>
				<!-- padding-bottom -->
				<tr><td height="104"></td></tr>
			</table><!-- END container -->
		</td>
	</tr>

	<tr>
		<td>
			<!-- container -->
			<table class="table1 editable-bg-color bg_color_ffffff" bgcolor="#ffffff" width="800"  border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
				<!-- padding-top -->
				<tr><td height="60"></td></tr>

				<tr>
					<td>
						<!-- container_400 -->
						<table class="container_400" width="750" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
							<tr>
								<td mc:edit="text003" align="left" class="text_color_282828" style="color: #282828; font-size: 15px; line-height: 2; font-weight: 500; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text" style="line-height: 2;">
										<span class="text_container">
											<multiline>
												<br><h3>What is your budget?</h3> 
                                                <li><strong>{{ $data['question_1'] }}</strong></li>
                                                <hr><br>
												<h3>What your poject need?</h3>
												@foreach ($data['question_2'] as $value)
													<?php $message .= trim(stripslashes($value)); ?>
													<li><strong>{{ $message }}</strong></li>
                                                @endforeach
                                                
												<h3>Additional info:</h3>
												<li><strong>{{$data['addtional_info']}}</strong></li>
												<hr><br>
												<div align="center"><h3>ANSWERS TO THE FOLLOWING QUESTIONS</h3></div>
												If you already have an hosting plan, please define:</h4>
												<li><strong>{{$data['select_1']}}</strong></li>
												If you need an hosting plan, please define which one:</h4>
												<li><strong>{{$data['select_2']}}</strong></li>
												If you need a newsletter campaign, please define the provider you prefer:</h4>
												<li><strong>{{$data['select_3']}}</strong></li>
												<hr><br>
												<div align="center"><h3>USER PERSONAL DETAILS</h3></div>
												<li>Company name:<strong> {{ $data['company_name'] }}</strong></li>
												<li>Name:<strong> {{ $data['firstname'] }}  {{ $data['lastname'] }}</strong></li>
												<li>Email:<strong> {{ $data['email'] }}</strong></li>
												<li>Telephone:<strong> {{ $data['telephone'] }}</strong></li>
												<li>Country:<strong> {{ $data['country'] }}</strong></li>
												<li>Terms and conditions accepted:<strong> {{ $data['terms'] }}</strong></li>
											</multiline>
										</span>
									</div>
								</td>
							</tr>
						</table><!-- END container_400 -->
					</td>
				</tr>

				<!-- padding-bottom -->
				<tr><td height="60"></td></tr>
			</table><!-- END container -->
		</td>
	</tr>

	<tr>
		<td>
			<!-- container -->
			<table class="table1" width="600" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
				<!-- padding-top -->
				<tr><td height="40"></td></tr>

				<tr>
					<td>
						<!--  column-1 -->
						<table class="table1-2" width="350" align="left" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td mc:edit="text006" align="left" class="center_content text_color_929292" style="color: #929292; font-size: 14px; line-height: 2; font-weight: 400; font-family: lato, Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text" style="line-height: 2;">
										<span class="text_container">
											<multiline>
												site web :<a href="https://synergyindustry.net" style="color: #303f9f;text-decoration: none;"> https://synergyindustry.net</a>
											</multiline>
										</span>
									</div>
								</td>
							</tr>
							<!-- margin-bottom -->
							<tr><td height="30"></td></tr>
						</table><!-- END column-1 -->

						<!-- vertical gap -->
						<table class="tablet_hide" width="130" align="left" border="0" cellspacing="0" cellpadding="0">
							<tr><td height="1"></td></tr>
						</table>

						<!-- column-2  -->
						<table class="table1-2" width="120" align="right" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									<table width="120" align="center" style="margin: 0 auto;">
										<tr>
											<!-- facebook -->
											<td align="center" width="30">
												<a href="https://www.facebook.com/Synergy-Industry-569224253115487/" style="border-style: none !important; display: inline-block;; border: 0 !important;" class="editable-img">
													<img editable="true" mc:edit="image004" src="{{asset('/email/images/icon-fb.png')}}" width="30" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="" />
												</a>
											</td>

											<!-- vertical gap -->
											<td width="15"></td>

											<!-- twitter -->
											<td align="center" width="30">
												<a href="#" style="border-style: none !important; display: inline-block; border: 0 !important;" class="editable-img">
													<img editable="true" mc:edit="image005" src="{{asset('/email/images/icon-twitter.png')}}" width="30" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="" />
												</a>
											</td>

											<!-- vertical gap -->
											<td width="15"></td>

											<!-- google+ -->
											<td align="center" width="30">
												<a href="#" style="border-style: none !important; display: inline-block;; border: 0 !important;" class="editable-img">
													<img editable="true" mc:edit="image006" src="{{asset('/email/images/icon-gp.png')}}" width="30" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="" />
												</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<!-- margin-bottom -->
							<tr><td height="30"></td></tr>
						</table><!-- END column-2 -->
					</td>
				</tr>

				<!-- padding-bottom -->
				<tr><td height="70"></td></tr>
			</table><!-- END container -->
		</td>
	</tr>
</table><!-- END wrapper -->
