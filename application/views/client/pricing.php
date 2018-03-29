<?php include('mainheader.php');
?>
<!-- Page Content -->
<div class="inner-hed-img">
	<img src="<?php echo base_url().'assets/client/'?>images/merchant-navy-bg.jpg">
</div>
<div class="inner-page prc imucet">
	<div class="container">
		<div class="why-book">
			<div class="row">
				<div class="col-md-9 mrg-pd">
					<div class="col-lg-12">
						<h2 class="mt-4">PLANS & PRICING</h2>
						<p>There are various packages available to suit your requirements and budget. For Joining as deck cadet or engine cadet following  packages are suitable.
						</p>
					</div>
					<?php
					$package_list=$this->myclass->select("package_id,package_name,package_amount,package_description,package_status","package","1 ORDER BY package_id");
					
					if(is_array($package_list) && $package_list!='no')
					{
						$i=1;
						foreach($package_list as $list)
						{
						if($list->package_status=="Active")
						{
							$status='<span class="label label-success">Active</span>';	
						}		
						else
						{
							$status='<span class="label label-important">Inactive</span>';
						}	
					?>
					<div class="col-sm-4 col-md-4">
						<div class="pakages-panel">
							<?php
							$packageid=$list->package_id;?>
							<h4><?php echo $list->package_name;?></h4>
							<h3><?php echo $list->package_description;?></h3>
						</div>
						<div class="package-btn">
							<div class="col-sm-8 col-md-8 mrg-pd">
								<h4><!-- <i class="fas fa-rupee-sign"></i> --><span>INR </span> <?php echo $list->package_amount;?>  <!-- <i class="off-tab">(30% Off)</i> --></h4>
							</div>
							<div class="col-sm-4 col-md-4 mrg-pd">
								<a href="<?php echo base_url()?>client/welcome/pay/<?php echo $packageid?>">VIEW MORE</a>
							</div>
						</div>
					</div>
					<?php
							$i++;
						}
					}		
					?>
					<!--<div class="col-sm-4 col-md-4">
						<div class="pakages-panel standerd-bg">
							
							<h4>STANDARD</h4>
							<h3>MOCK TEST <br>+<br>STUDY(PRACTICE)<br>+<br>ONLINE SUPPORT</h3>
						</div>
						<div class="package-btn">
							<div class="col-sm-8 col-md-8 mrg-pd">
								<h4> <i class="fas fa-rupee-sign"></i> <span>INR</span> 7900/-   <i class="off-tab">(30% Off)</i> </h4>
							</div>
							<div class="col-sm-4 col-md-4 mrg-pd">
								<a href="#">VIEW MORE</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="pakages-panel premium-bg">
							
							<h4>PREMIUM</h4>
							<h3>MOCK TEST <br>+<br>STUDY(PRACTICE)<br>+<br>ONLINE SUPPORT<br>+<br>INTERVIEW TIPS</h3>
						</div>
						<div class="package-btn">
							<div class="col-sm-8 col-md-8 mrg-pd">
								<h4> <i class="fas fa-rupee-sign"></i> <span>INR</span> 9999/-   <i class="off-tab">(30% Off)</i> </h4>
							</div>
							<div class="col-sm-4 col-md-4 mrg-pd">
								<a href="#">VIEW MORE</a>
							</div>
						</div>
					</div>
					-->
					<div class="prc_wrapper">
						<div class="row">
							<div class="col-md-7">
								<h5><b>PROMOTIONAL OFFER</b></h5><br>
								<p>
									Avail  25 % off due to promotional offer till 01/05/2018
								</p>
							</div>
							<div class="col-md-5 offer_img">
								<img src="<?php echo base_url().'assets/client/'?>images/offer.png" class="img-responsive" alt="Offer">
							</div>
						</div>
					<!-- <p><b>MOCK TEST-</b> INR 4500/. 20 Mock Test Along with the detailed solution  and analysis. Online support in case of doubts related to solution.</p>
					<p><b>MOCK TEST + STUDY-</b> INR 6500/. In adition to mock test above , systamatic study material covering all the  required concepts of plus 2 level expected in IMU –CET. Online support in case of doubts related to solution.Free interview tips for selcted candiadtes.</p><hr>
					<h5><b>ANNOUNCEMENT</b></h5><br>
					
					<h5><b>SIGN UP FOR NEWS LETTER</b></h5>
					<p>
						Note: This feature is new and should be included, allowing to get email and other necessary details. Idea is to invite the visitors and collect the data.
					</p>
					<h5><b>LEAVE US A MESSAGE</b></h5>
					<p>
						“Leave us a message or contact number. We shall revert as per your convenience for a free consultation”.
					</p> -->
					</div>
					
					<div class="container">
        <div class="row">
            <div class="col-md-12 form_wrapper">
                <div class="row form_head">
                    <div class="col-md-12">
                        <p>Sign Up for a FREE  Consultation. Just fill in the details and we shall revert at the time convenient to you. It starts right here and right now. We ensure privacy maintained and avoid misuse of personal information. Just enter few details and click the Icon  JOIN FREE.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 form_content">
                        <form action="" id="student_details">
                            <table class="table table-responsive table-bordered">
                                <tr>
                                    <td colspan=""><label for="name">Name:</label></td>
                                    <td colspan="4"><input type="text" name="name" placeholder="Enter name here"></td>
                                </tr>
                                <tr>
                                    <td colspan=""><label for="mobile">Mobile no:</label></td>
                                    <td colspan="4"><input type="tel" name="mobile" placeholder="Enter mobile no"></td>
                                </tr>
                                <tr>
                                    <td colspan=""><label for="email">Email:</label></td>
                                    <td colspan="4"><input type="email" name="email" placeholder="Enter email"></td>
                                </tr>
                                <tr>
                                    <td><label for="qualification">Qualification:</label></td>
                                    <td>
                                        <select name="select_qualification">
                                            <option value="ssc">SSC</option>
                                            <option value="hsc">HSC</option>
                                            <option value="diploma">DIPLOMA</option>
                                            <option value="graduation">GRADUATION</option>
                                        </select>
                                    </td>
                                    <td>
                                        <label for="percantage">PCM % IN LAST EXAM:</label>
                                    </td>
                                    <td><input type="percent" name="percantage"></td>
                                </tr>
                                <tr>
                                    <td><label for="district">District/State:</label></td>
                                    <td colspan="4">
                                        <select name="district">
                                            <option value="maharashtra">MAHARASHTRA</option>
                                            <option value="karnataka">KARNATAKA</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                    </div>
                    <div class="col-md-3 form_btn">
                        <a href="#" onclick="document.getElementById('student_details').submit();"><img src="<?php echo base_url()?>assets/client/images/join-free.png" class="img-responsive img-tp" /></a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



					
				</div>
				<div class="col-md-3">
					
					<div class="col-lg-12">
						<h2 class="mt-4">Announcements</h2>
						
					</div>
					<div class="announ-panel">
						
						<div class="holder">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quisquam cum deserunt. Maiores molestiae cum quod, quae officiis harum aperiam consectetur eius quos. Officia aspernatur quos voluptates neque voluptatibus ipsa!
						</div>
						
						
						
						
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
	</div>
	
</div>
<?php include('mainfooter.php');
?>