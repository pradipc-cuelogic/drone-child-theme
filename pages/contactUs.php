<!--
* Template Name: Contact Us
-->
<?php get_header(); ?>
<section class="page-wrapper clearfix padding-bottom-70">
    <div class="container padding-top-50 ">
        <div class="row">
        	<div class="col-md-12 padding-bottom-30">
        		<p class="text-size-md animateIn">We're happy to answer questions or assist you.
                    <br>Let us know how we can help.</p>
        	</div>
            <div class="col-md-7">                
                <div class="clearfix">
                    <form class="animate-placeholder animateIn">
                    	<div class="form-group">
                    		<div class="select-wrapper">
                                <span class="placeholder">Select area of interest</span>                                
	                    		<select class="form-control focused" onfocus="if (this.value == '') {this.selectedIndex=0}">
                                    <option value="">Select one</option>			  
                                    <option>Sales</option>
                                    <option>Public Relations</option>
                                    <option>Partnerships</option>
                                    <option>Investment</option>
                                    <option>Careers</option>
								</select>
							</div>
                    	</div>
                        <div class="form-group">
                            <span class="placeholder">Full Name</span>
                            <input type="text" class="form-control focused">
                        </div>
                        <div class="form-group">
                             <span class="placeholder">Email</span>
                            <input type="email" class="form-control focused" id="inputEmail3">
                        </div>
                        <div class="form-group">
                            <span class="placeholder">Phone Number</span>
                            <input type="text" class="form-control focused" placeholder="">
                        </div>
                        <div class="form-group">
                            <span class="placeholder">Company</span>
                            <input type="text" class="form-control focused" placeholder="">
                        </div>
                        <div class="form-group">
                            <span class="placeholder">Write Your Message</span>
                            <textarea class="form-control textarea focused" rows="3" placeholder=""></textarea>
                        </div>
                        <div class="form-group padding-top-20">
                        	<button type="submit" class="btn btn-lg btn-primary md-width md-font sm-btn-full">Send</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="col-md-5">
            	<div class="contact-info padding-bottom-70">
            		<label class="animateIn">Prefer to speak to a real human?</label>
            		<p class="animateIn">Give us a call at +1 800-844-6208</p>                    
            		<a href="tel:+1 8008446208" class="btn btn-primary inverse md-width animateIn sm-btn-full">Call us</a>
            	</div>
            	<div class="contact-info">
            		<label class="animateIn">Help Yourself</label>
            		<p class="animateIn">For your convenience, we have<br> a help center with answers to <br>commonly asked questions</p>
            		<a href="<?php echo site_url(); ?>/help-center" class="btn btn-lg btn-primary inverse md-width animateIn sm-btn-full">Visit Help Center</a>
            	</div>
            </div>
        </div>
    </div>
</section>
<section class="office-address-wrap flext-section">
	<div class="container">
		<div class="col-md-6 col-sm-6">
			<div class="office-address animateIn">
				<h6>Maynard</h6>
				<label>Acend Insurance Solutions, LLC</label>
				<p>6 Mill &amp; Main Pl, Suite 300<br>Maynard, MA. 01754 </p>
				<a href="https://www.google.co.in/maps/place/Mill+And+Main/@42.4303622,-71.4578139,17z/data=!3m1!4b1!4m5!3m4!1s0x89e391e8223e6a4d:0x6c598e7313050b9a!8m2!3d42.4303583!4d-71.4556252" target="_blank">Veiw map</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="office-address animateIn">
				<h6>Chapel Hill</h6>
				<label>Acend Insurance Solutions, LLC</label>
				<p>137 E Franklin St, Suite 600<br>Chapel Hill NC 27514</p>
				<a href="https://www.google.co.in/maps/place/137+E+Franklin+St+%23600,+Chapel+Hill,+NC+27514,+USA/@35.9139751,-79.0567445,17z/data=!3m1!4b1!4m5!3m4!1s0x89acc2dd5e71c467:0xce1b9283e09beb87!8m2!3d35.9139708!4d-79.0545558" target="_blank">Veiw map</a>
			</div>
		</div>

	</div>
</section>
<?php get_footer(); ?>