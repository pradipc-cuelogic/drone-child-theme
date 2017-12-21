<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_child
 * @since 1.0
 * @version 1.0
 */

get_header(); 
?>
    <section class="page-wrapper home-page clearfix ">
        <div class="container">
            <div class="page-row">
                <div class="sm-para table-layout padding-bottom-30">
                	<div class="logo-list row partners-container">
	                	<span class="col-sm-2 trustedText text-primary-color">Trusted by drone<br class="deskTopOnly">industry leaders</span>
	                	<div class="clearfix">
		                	<div class="col-sm-2">
			                    <img class="precisionHawk-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/precisionHawk-logo.svg">
			                </div>
			                <div class="col-sm-2">
			                    <img class="dronedeploy-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dronedeploy-logo.svg">
			                </div>
			                <div class="col-sm-2">
			                    <img class="hangar-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hangar-logo.svg">
			                </div>
			                <div class="col-sm-2">
			                    <img class="av-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/av-logo.svg">
			                </div>
			                <div class="col-sm-2">
			                    <img class="unifly-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/unifly-logo.svg">
			                </div>
		            	</div>
	                </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="margin-none">
	 <section class="page-wrapper clearfix">
	    <div class="container">
	        <div class="page-row">
	            <h3 class="primary-title animateIn">Drone insurance designed sensibly</h3>
	            <p class="animateIn text-size-md text-weight-md">
	                We simplified the drone insurance experience by tailoring it to address the unique risks,<br class="md-br"> pain points and coverage needs of commercial drone operators.
	                <i class="note padding-top-15">* Subject to terms and conditions</i>
	            </p>
	            <div class="container-fluid thumb-wrap padding-top-20">
	            	<div class="col-sm-6 col-md-3">
	            		<img class="unifly-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/select-drone.svg">
	            		<label class="animateIn">Select the drone<br>you'll be flying</label>
	            	</div>
	            	<div class="col-sm-6 col-md-3">
	            		<img class="unifly-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/choose-date.svg">
	            		<label class="animateIn">Choose the dates<br>coverage is needed</label>
	            	</div>
	            	<div class="col-sm-6 col-md-3">
	            		<img class="unifly-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/set-liability.svg">
	            		<label class="animateIn">Set the liability<br>coverage amount</label>
	            	</div>
	            	<div class="col-sm-6 col-md-3">
	            		<img class="unifly-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/confirm-coverage.svg">
	            		<label class="animateIn">Confirm the details, pay,<br>and fly with coverage</label>
	            	</div>
	            </div>
	        </div>
	    </div>
    </section>
    <section class="page-wrapper clearfix">
        <div class="page-row padding-none">
            <div class="well text-center md-well">
                <p class="clearfix liberty-well">
                	<span><img class="liberty-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/liberty-logo.svg"></span>
                    <span class="animateIn">Fly with peace of mind knowing policies are backed by one of the world’s most trusted<br> and respected insurance companies.</span>
                </p>
            </div>
        </div>
    </section>
    <section class="page-wrapper clearfix">
        <div class="container">
            <div class="page-row">
                <h3 class="primary-title animateIn">Coverage Plan Summary</h3>
                <p class="animateIn text-size-md padding-top-30 padding-bottom-none text-primary-color">
                    Only Droneinsurance.com offers flight liability coverage options up to $25 million.
                </p>
                <p class="animateIn padding-top-15 padding-bottom-50">
                    The base policy provides 24/7 ground liability coverage and access to on-demand flight liability coverage. Manage your insurance needs for a single drone or a fleet with scalable high quality flight liability coverage you control.
                    <i class="note padding-top-15">This page is for marketing purposes</i>
                </p>
                <ul class="plan-summary-wrap clearfix">
                	<li>
                		<div>
                		<p class="head animateIn">Base Package</p>
                		<p class="animateIn"><label>Liability on the Ground</label></p>
                		<p class="animateIn"><label>Liability for invasion of privacy <i class="info-icon"></i></label></p>
                		<p class="active animateIn"><span class="drone-controller"></span><label>Access to on-demand flight coverage (Up to $25M liability)</label></p>
                		<p class="animateIn"><label class="disabled-text"> <i class="not-available-icon"></i> Physical damage protection for your drone on the ground and during covered flights</label></p>
                		<p class="animateIn"><label class="disabled-text"> <i class="not-available-icon"></i> Drone Theft</label></p>
                		</div>
                	</li>
                	<li>
                		<div>
                		<p class="head animateIn">Base Package + Hull Coverage</p>
                		<p class="animateIn"><label>Liability on the Ground</label></p>
                		<p class="animateIn"><label>Liability for invasion of privacy <i class="info-icon"></i></label></p>
                		<p class="active animateIn"><span class="drone-controller"></span><label>Access to on-demand flight coverage (Up to $25M liability)</label></p>
                		<p class="animateIn"><label>Physical damage protection for your drone on the ground and during covered flights</label></p>
                		<p class="animateIn"><label>Liability on the Ground</label></p>
                		</div>
                	</li>
                </ul>
                <i class="note padding-top-15">DroneInsurance.com, powered by Acend Insurance Solutions, LLC, offers non-admitted policies in the Surplus Lines market.</i>
                <a class="btn btn-lg btn-primary lg-width margin-top-50 margin-bottom-100 animateIn" href="<?php echo site_url(); ?>/pricing">Learn about pricing</a>
            </div>
        </div>
    </section>
    <section class="page-wrapper videoSection">
	    <div class="page-row">
	        <div class="well blue-well margin-bottom-100">
	            <div class="container">
	                <div class="row text-left flex-container mobileBlockElement ">
	                	<div class="col-sm-6 deskTopOnly padding-bottom-50">
	                        <div class="col-img top video-thumb" id="home-hero-video" data-toggle="modal" data-target="#homeHeroVideo" data-theVideo="https://www.youtube.com/embed/rI3p3RAtGuE">
	                            <img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video-thumb.png">
	                        </div>
	                    </div>
	                    <div class="col-sm-6 animateIn padding-left-50">
	                        <h3 class="primary-title">Reinventing drone insurance</h3>
	                        <h6 class="text-size-md padding-none margin-none padding-top-30">The story of industry experts causing disruption.</h6>
	                        <p>
	                            There’s an insurance-related problem shared by companies using drones.  Traditional blanket policies do not meet the needs of the drone industry, but nobody knew how to change it.  To address the issue, we gathered a team of drone and insurance experts to design a solution. 
	                        </p>
	                    </div>
	                    <div class="col-sm-6 mobileOnly">
	                        <div class="col-img top video-thumb" id="home-hero-video" data-toggle="modal" data-target="#homeHeroVideo" data-theVideo="https://www.youtube.com/embed/rI3p3RAtGuE">
	                            <img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video-thumb.png">
	                        </div>
	                    </div>	                    
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<section class="page-wrapper powerMainSection">
	    <div class="page-row padding-none">
	        <div class="covrage-tab">
	            <div class="container">
	            	<div class="container-fluid ipadDisplay text-center page-row">
	                        <h3 class="primary-title animateIn">Power to control coverage</h3>	                        
	                        <h6 class="text-size-md text-primary-color font-weight-md padding-none margin-none padding-top-20 animateIn">Say goodbye to traditional policies and hello to on-demand.</h6>
	                        <p class="animateIn">DroneInsurance.com lets you schedule flight coverage for when you're flying and keeps you covered from other liabilities when you're not.</p>
                	</div>
	                <div class="row text-left">	                	
	                	<div class="col-sm-6 padding-bottom-none padding-right-50 powerControlSection">
	                        <div class="ipadDisplayNone">
		                        <h3 class="primary-title animateIn">Power to control coverage</h3>	                        
		                        <h6 class="text-size-md text-primary-color font-weight-md padding-none margin-none padding-top-10 animateIn">Say goodbye to traditional policies and hello to on-demand.</h6>
		                        <p class="animateIn padding-top-none padding-top-15">DroneInsurance.com lets you schedule flight coverage for when you're flying and keeps you covered from other liabilities when you're not.</p>
	                        </div>
	                        <div class="mobileOnly">
								<div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
									<div class="carousel-inner" role="listbox">
									<div class="item active">
										<div class="item-content">
											<h4 class="text-primary-color">Select your drone(s)</h4>
											<label>Choose which drone(s) need coverage</label>
										</div>
									<div class="imgWrap"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coverage-tab-img1.svg" alt="img"></div>
									</div>
									<div class="item">
										<div class="item-content">
											<h4 class="text-primary-color">Set the liability amount</h4>
											<label>Scale flight liability coverage up to $25 million</label>
										</div>
									<div class="imgWrap"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coverage-tab-img2.svg" alt="img"></div>
									</div>
									<div class="item">
										<div class="item-content">
											<h4 class="text-primary-color">Pick your date</h4>
											<label>Add flight liability coverage for days you need it</label>
										</div>
									<div class="imgWrap"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coverage-tab-img3.svg" alt="img"></div>
									</div>
									<div class="item">
										<div class="item-content">
											<h4 class="text-primary-color">Confirm and pay</h4>
											<label>Pay for the added flight coverage you’ve scheduled</label>
										</div>
									<div class="imgWrap"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coverage-tab-img4.svg" alt="img"></div>
									</div>									
									</div>
									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
									</a>
	                        	</div>
	                        	<div class="padding-top-30 padding-bottom-30">
							    	<i class="note">* Subject to terms and conditions</i>
							    </div>
	                        </div>

	                        <ul class="tabs nav nav-tabs deskTopOnly" role="tablist">
	                        	<span class="active-box"></span>
	                        	<li role="presentation" class="active animateIn">
	                        		<a href="#drone" aria-controls="drone" role="tab" data-toggle="tab">
	                        			<span>Select your drone(s)</span>
		                        		Choose which drone(s) need coverage
	                        		</a>
	                        	</li>							    
							    <li role="presentation animateIn">
							    	<a href="#amount" aria-controls="amount" role="tab" data-toggle="tab">
							    		<span>Set the liability amount</span>
										Scale flight liability coverage op ons up to 25M
								    </a>
								</li>
							    <li role="presentation animateIn">
							    	<a href="#date" aria-controls="date" role="tab" data-toggle="tab">
							    		<span>Pick your date</span>
										Add flight liability coverage for days you need it
							    	</a>
							    </li>
							    <li role="presentation animateIn">
							    	<a href="#pay" aria-controls="pay" role="tab" data-toggle="tab">
							    		<span>Confirm and pay</span>										
										Pay for the added flight coverage you’ve scheduled
							    	</a>
							    </li>
							    <li class="padding-left-70 padding-top-30">
							    	<i class="note">* Subject to terms and conditions</i>
							    </li>
	                        </ul>
	                        
	                    </div>
	                    <div class="col-sm-6 deskTopOnly">	                        
	                    	<div class="covrage-image">	  
	                    		 <div class="tab-content">
								    <div role="tabpanel" class="tab-pane active animate-img" id="drone">
								    	<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coverage-tab-img1.svg" alt="img">
								    </div>
								    <div role="tabpanel" class="tab-pane" id="amount">
								    	<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coverage-tab-img2.svg" alt="img">
								    </div>
								    <div role="tabpanel" class="tab-pane" id="date">
								    	<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coverage-tab-img3.svg" alt="img">
								    </div>								    
								    <div role="tabpanel" class="tab-pane" id="pay">
								    	<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/coverage-tab-img4.svg" alt="img">
								    </div>
								 </div>	                    		
	                    	</div>
	                    </div>	                    
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="page-row padding-none margin-bottom-100">
            <div class="well text-center applySection">
                <p class="clearfix animateIn">
                    <span class="lg-span font-weight-md text-primary-color">Apply for coverage in minutes</span>
                    <a class="btn btn-lg btn-primary lg-width" href="javascript:void(0);" role="button">Sign up</a>
                    <a class="btn btn-lg btn-primary lg-width inverse margin-left-20" href="<?php echo site_url(); ?>/help-center" role="button">Visit our Help Center for answers</a>
                </p>
            </div>
        </div>
	</section>
	<section class="page-wrapper ClaimsSection">
	    <div class="page-row padding-none">
	        <div class="well blue-well background-none margin-bottom-100">
	            <div class="container">
	                <div class="row text-left flext-section mobileBlockElement ">
	                    <div class="col-sm-6 deskTopOnly">
	                        <div class="col-img ipadImgLayout">
	                            <img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claims-breeze.png">
	                        </div>
	                    </div>
	                    <div class="col-sm-6 animateIn text-col-right">
	                        <h3 class="primary-title text-primary-color padding-bottom-20">Claims are a breeze</h3>
	                        <p class="text-secondary-color">
	                            Submitting a claim takes mere minutes with just a few clicks. Log in to visit your dashboard, answer a few questions and submit your claim. Yes, it’s really that simple.
	                        </p>
	                        <i class="note">** Subject to local regulations</i>
	                    </div>
	                    <div class="mobileOnly">
	                        <div class="col-img">
	                            <img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/claims-breeze-sm.png">
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<hr class="margin-none">
	<section class="page-wrapper videoSection">
	    <div class="page-row padding-top-30">
	        <div class="well blue-well background-none">
	            <div class="container">
	                <div class="row text-left flext-section mobileBlockElement ">	                    
	                    <div class="col-sm-6 animateIn">
	                        <h3 class="primary-title text-primary-color padding-bottom-20">Add an additional insured<br class="ipadDisplayNone deskTopOnly"> in a few clicks</h3>
	                        <p class="text-secondary-color padding-right-none">
	                            Forget paperwork and waiting for approvals, we made adding additional insured near instant. When editing or adding coverage, simply type who you need listed as additional insured on your policy and select get coverage. 
	                        </p>
	                        <i class="note padding-bottom-50">* Subject to terms and conditions</i>
	                        <a class="btn btn-lg btn-primary lg-width margin-bottom-30" href="javascript:void(0);"><i class="fa fa-play-circle"></i> &nbsp;Watch how it works</a>
	                    </div>
	                    <div class="col-sm-6">
	                        <div class="col-img">
	                            <img class="responsive-img margin-left-minus-60" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/additional-insured.png">
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<hr class="margin-none">
	<section class="page-wrapper ClaimsSection">
	    <div class="page-row padding-top-30">
	        <div class="well blue-well background-none">
	            <div class="container">
	                <div class="row text-left flext-section mobileBlockElement ">
	                	<div class="col-sm-6 deskTopOnly">
	                        <div class="col-img">
	                            <img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/optional-coverage.png">
	                        </div>
	                    </div>	                    
	                    <div class="col-sm-6 animateIn">
	                        <h3 class="primary-title text-primary-color padding-bottom-20">Optional coverage for equipment</h3>
	                        <p class="text-secondary-color">
	                            Equipment and sensors can be expensive, that's why DroneInsurance.com offers monthly coverage options for certain repairs and replacements.
	                        </p>
	                        <i class="note">* Subject to terms and conditions</i>
	                    </div>
	                    <div class="col-sm-6 mobileOnly">
	                        <div class="col-img">
	                        	<br /><br />
	                            <img class="responsive-img margin-right-minus-60" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/optional-coverage.png">
	                        </div>
	                    </div>		                    
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<section class="page-wrapper">
	    <div class="page-row padding-top-30">
	        <div class="well blue-well home-well pos-rel flext-section">
	            <div class="container">
					<h3 class="primary-title animateIn">Protection that travels</h3>
					<p class="text-size-md animateIn padding-bottom-30">Fly confidently knowing your policy provides coverage almost <br class="sm-br-hidden">everywhere in the world.</p>
					<a class="btn btn-lg btn-primary lg-width inverse animateIn" href="tel:+1 8005551234">Call us (1-800-555-1234)</a>
					<a class="btn btn-lg btn-primary lg-width animateIn margin-left-20" href="javascript:void(0);">Sign up to get started</a>
					<div class="well-bottom-link animateIn">
						<a class="link" href="<?php echo site_url(); ?>/help-center">Visit our Help Center to see where<br class="sm-br"> coverage will not apply <i></i></a>
					</div>
	            </div>
	        </div>
	    </div>
	</section>
	<section class="page-wrapper home-page">
	    <div class="page-row padding-none">
	        <div class="well md-well">
	            <div class="container">
	            	<div class="gray-map-wrap flext-section flex-content-middle">
	            		<h3 class="primary-title animateIn">Licensed in 50 states</h3>
	            		<p class="text-size-md font-weight-md padding-top-15 animateIn">Agency licensed as Acend Insurance Solutions, LLC.</p>
	            		<p class="padding-top-30 animateIn"><strong>Principal place of business:</strong></p>
	            		<p class="padding-top-10 animateIn">6 Mill & Main Pl, Suite 300 | Maynard, MA</p>
	            		<p class="padding-top-10 animateIn">State of Organization: MA</p>
	            	</div>
	            	<div class="col-sm-6 mobileOnly">
	                        <div class="col-img">
	                        	<br /><br />
	                            <img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/map-gray.svg">
	                        </div>
	                    </div>	
	            	<div class="padding-top-30 animateIn">
						<a class="link" href="javascript:void(0);" data-toggle="modal" data-target="#licenseList">View our licensing information <i></i></a>
					</div>
	            </div>
	        </div>
	    </div>
	</section>
	<section class="page-wrapper footer-thumb-container">
	    <div class="page-row padding-top-50">
	        <div class="well blue-well background-none padding-none">
	            <div class="container">
	                <div class="row text-center">
	                    <div class="col-sm-4">
	                        <h3 class="primary-title text-primary-color padding-bottom-10 animateIn">Brokers<br> program</h3>
	                        <p class="text-size-md text-secondary-color animateIn">A turn-key solution to expand<br class="deskTopOnly ipadDisplayNone"> your portfolio.</p>
	                          <div class="thumbImg animateIn">
	                        	<img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brokers-program-thumb.svg">
	                        </div>
	                         <p class="text-secondary-color descriptionWrap animateIn">
	                            Earn more commissions with a program designed for enterprise drone industry clients.
	                        </p>
	                        <a class="btn btn-lg btn-primary lg-width margin-bottom-50 animateIn" href="<?php echo site_url(); ?>/brokers">Learn more</a>
	                    </div>	
	                    <div class="col-sm-4">
	                        <h3 class="primary-title text-primary-color padding-bottom-10 animateIn">Developer <br>API access</h3>
	                        <p class="text-size-md text-secondary-color animateIn">
	                            Authentication solutions<br class="deskTopOnly ipadDisplayNone"> delivered as APIs.
	                        </p>
	                        <div class="thumbImg animateIn">
	                        	<img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/developer-api-access-thumb.svg">
	                        </div>
	                        <p class="text-secondary-color descriptionWrap animateIn">Put our efforts to work for you by building powerful solutions for your end users.</p>
	                        <a class="btn btn-lg btn-primary lg-width margin-bottom-50 animateIn" href="<?php echo site_url(); ?>/partners-developers;">Learn more</a>
	                    </div>	
	                    <div class="col-sm-4">
	                        <h3 class="primary-title text-primary-color padding-bottom-10 animateIn">Careers <br>with us</h3>
	                        <p class="text-size-md text-secondary-color animateIn">
	                            Work with elite industry<br class="deskTopOnly ipadDisplayNone"> professionals.
	                        </p>
	                        <div class="thumbImg animateIn">
	                        	<img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers-with-us-thumb.svg">
	                        </div>
	                       	<p class="text-secondary-color descriptionWrap animateIn">Are you intelligent, dedicated, and humble? Find out how you can join a team with a history of success.</p>
	                       	<a class="btn btn-lg btn-primary lg-width margin-bottom-50 animateIn" href="<?php echo site_url(); ?>/careers;">Learn more</a>
	                    </div>	
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
<!--     <section class="page-wrapper clearfix padding-bottom-100">
        <div class="container">
            <div class="page-row animateIn">
                <h3 class="primary-title animateIn">Have questions? </h3>
                <p class="animateIn text-center">
                    <a class="btn btn-lg btn-primary lg-width" href="javascript:void(0);">Visit our Help Center for answers</a>
                    <span class="padding-left-50 padding-right-50">Or</span>
                    <a class="btn btn-lg inverse btn-primary lg-width" href="tel:+1 8005551234"> Call us (1-800-555-1234)</a>
                </p>
            </div>
        </div>
    </section> -->
    <hr class="margin-none">
	<!-- Modal -->
	<div class="modal fade" id="licenseList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h3 class="primary-title pull-left">Insurance License Information</h3>
	        <button type="button" class="close showFullList closeIcon" data-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        	<?php get_template_part( 'pages/license', 'list' ); ?>
	      </div>	      
	    </div>
	  </div>
	</div>
<div class="modal fade full-content-modal" id="homeHeroVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="modal-header" data-dismiss="modal" aria-label="Close">
        	<button type="button" class="close showFullList closeIcon" ></button>
      </div>
      <div class="modal-body">
		    <iframe width="100%" src="https://www.youtube.com/embed/rI3p3RAtGuE" frameborder="0" allowfullscreen></iframe>     	
      </div>	      
    </div>
  </div>
</div>
<script type="text/javascript">
    function tabActiveboxAnimation() {
    setTimeout(function() {
        abc = jQuery('.covrage-tab .tabs').offset().top;
        activeTabTop = jQuery('.covrage-tab .tabs li.active').offset().top;
        tabXPos = activeTabTop - abc;
        currentTabHeight = jQuery('.covrage-tab .tabs li.active').height();
        jQuery('.covrage-tab .tabs .active-box').css({ "height": currentTabHeight, "top": tabXPos });
    }, 100);

    }
	tabActiveboxAnimation();

    jQuery('.covrage-tab .tabs li a').on('show.bs.tab', function(e) {
        tabActiveboxAnimation();
    });
    
    jQuery(window).resize(function() {
       tabActiveboxAnimation();
    });
</script>
<?php get_footer(); ?>
    