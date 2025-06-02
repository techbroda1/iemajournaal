<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About us - Iema Journal</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/chartist.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	
	<style>
    /* GLOBAL BLACK & BOLD STYLES (unchanged) */
    body {
        color: #000000 !important;
        font-weight: 600 !important;
    }
    
    h1, h2, h3, h4, h5, h6 {
        font-weight: 800 !important;
        color: #000000 !important;
    }
    
    p, .sj-description, .sj-postcontent p, .sj-widgetcontent, 
    .sj-widgetcontent li, .sj-footer, .three-column-section p, 
    .editorial-board p, .join-editorial-board p, .member p,
    .sj-head span, .sj-username {
        color: #000000 !important;
        font-weight: 600 !important;
    }
    
    a {
        color: #000000 !important;
        font-weight: 700 !important;
    }

    /* BUTTONS - SHARP WHITE TEXT */
    .sj-btn,
    .button,
    .join-button,
    .sj-btnview,
    .sj-btnactive,
    .view-all-link,
    .sj-btnscrolltotop,
    .sj-btnsearch,
    .sj-btntopsearch,
    .sj-formsearch button,
    .sj-formsearcmain button {
        color: #FFFFFF !important; /* Pure white */
        font-weight: 700 !important; /* Bold */
        text-shadow: none !important; /* Crisp text */
    }

    /* Hover effects (optional) */
    .sj-btn:hover,
    .button:hover,
    .join-button:hover {
        color: #FFFFFF !important;
        opacity: 0.9; /* Slight fade on hover */
    }
</style> 
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
				Preloader Start
	*************************************-->
	<div class="preloader-outer">
		<div class='loader'>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
			<div class='loader--dot'></div>
		</div>
	</div>
	<!--************************************
				Preloader End
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="sj-wrapper" class="sj-wrapper">
		<!--************************************
				Content Wrapper Start
		*************************************-->
		<div class="sj-contentwrapper">
			<!--************************************
					Header Start
			*************************************-->
			<header id="sj-header" class="sj-header sj-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="sj-topbar">
								<ul class="sj-socialicons sj-socialiconssimple">
									<li class="sj-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
									<li class="sj-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
									<li class="sj-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="sj-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
								</ul>
								<div class="sj-languagelogin">
									<div class="sj-loginarea">
										<ul class="sj-loging">
											<li><a href="login.php">Login</a></li>
											<li><a href="register.php">Register</a></li>
										</ul>
									</div>
									<div class="sj-userloginarea">
										<a href="">
											<i class="fa fa-angle-down"></i>
											<img src="images/user-img.jpg" alt="image description">
											<div class="sj-loginusername">
    <h3>Hi, <?php echo htmlspecialchars($_SESSION['first_name'] ?? 'Guest'); ?></h3>
    <span>Author</span>
</div>

										</a>
										<nav class="sj-usernav">
											<ul>
												<li><a href="underreview.html"><i class="lnr lnr-sync"></i><span>Articles Under Review</span></a></li>
												<li><a href="addtemplates.html"><i class="lnr lnr-briefcase"></i><span>Add Templates</span></a></li>
												<li><a href="aticle-list.html"><i class="lnr lnr-sync"></i><span>Aticle List</span></a></li>
												<li><a href="generalsettings.html"><i class="lnr lnr-layers"></i><span>General Settings</span></a></li>
												<li><a href="manageuser.html"><i class="lnr lnr-users"></i><span>Manage Users</span></a></li>
												<li><a href="manageeditions.html"><i class="lnr lnr-tag"></i><span>Manage Editions</span></a></li>
												<li><a href="emailtemplates.html"><i class="lnr lnr-envelope"></i><span>Email Templates</span></a></li>
												<li><a href="accountsettings.html"><i class="lnr lnr-lock"></i><span>Account Settings</span></a></li>
												<li><a href="logout.php"><i class="lnr lnr-exit"></i><span>Logout</span></a></li>
											</ul>
										</nav>
									</div>
									<div class="sj-languages">
										<a id="sj-languages-button" href="javascript:void(0);">
											<img src="images/flags/flag-02.jpg" alt="image description">
											<span>Eng</span>
											<i class="fa fa-angle-down"></i>
										</a>
										<ul>
											<li>
												<a href="javascript:void(0);">
													<img src="images/flags/flag-01.jpg" alt="image description">
													<span>Ara</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<img src="images/flags/flag-02.jpg" alt="image description">
													<span>Eng</span>
												</a>
											</li>
											<li>
												<a href="javascript:void(0);">
													<img src="images/flags/flag-03.jpg" alt="image description">
													<span>Chi</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="sj-navigationarea">
								<strong class="sj-logo"><a href="index.php"><img src="images/logo.jpg" alt="company logo here"></a></strong>
								<div class="sj-rightarea">
									<nav id="sj-nav" class="sj-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse sj-navigation" id="navbarNav">
											<ul>
												<li class="menu-item-has-children page_item_has_children">
													<a href="index.php"><i class="lnr lnr-home"></i></a>
												</li>
												<li class="current-menu-item">
												<a href="aboutus.php">About us</a>
													<ul class="sub-menu">
													<li><a href="aimnscope.php">Aims & Scope</a></li>
                                                    <li><a href="abstract.php">Abstract & Indexing</a></li>
                                                    <li><a href="submission.php">Submission Guidelines</a></li>
                                                    <li><a href="editorial.php">Editorial Process</a></li>



</ul>

												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="articles.html">Articles</a>
													<ul class="sub-menu">
														<li><a href="submitarticle.php">Submit Article</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<span class="sj-tagnew">New</span>
													<a href="javascript:void(0);">Issues</a>
													<ul class="sub-menu">
														<li><a href="issuesweeks.html">Issues Weeks</a></li>
														<li><a href="issuesyears.html">Issues Years</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Quick Links</a>
													<ul class="sub-menu">
														<li class="menu-item-has-children page_item_has_children">
															<a href="javascript:void(0);">News</a>
														
														</li>
														<li class="menu-item-has-children page_item_has_children">
															<a href="javascript:void(0);">Manage User</a>
															<ul class="sub-menu">
																<li><a href="manageuser.html">Manage User</a></li>
																<li><a href="manageeditions.html">Manage Editions</a></li>
															</ul>
														</li>
														
															
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</nav>
									<a class="sj-btntopsearch" href="#sj-searcharea"><i class="lnr lnr-magnifier"></i></a>
									<a class="sj-btn sj-btnactive" href="submitarticle.php">Submit Your Article</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--************************************
					Header End
			*************************************-->
			<!--************************************
					Inner Banner Start
			*************************************-->
			<div class="sj-innerbanner">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<div class="sj-innerbannercontent">
								<h1>A Brief Introduction</h1>
								<ol class="sj-breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li><a href="aboutus.php">About</a></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Inner Banner End
			*************************************-->
			<!--************************************
					Main Start
			*************************************-->
			<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
				<div id="sj-twocolumns" class="sj-twocolumns">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-8 col-lg-9">
								<div id="sj-content" class="sj-content">
									<div class="sj-aboutus">
										<figure class="sj-aboutusimg"><img src="images/aboutus-img.jpg" alt="image description"></figure>
										<div class="sj-introduction sj-sectioninnerspace">
											<h4>												Aims and Scope
											</h4>
											<div class="sj-description">
The Journal of Enterprise Management and Analytics (JEMA) serves as a platform for cutting-edge research and practical insights in the fields of enterprise management, business analytics, and data-driven decision-making. The journal explores advancements in analytical techniques, strategic management principles, and the application of data science to enhance business performance and operational efficiency.
Key topics covered in this journal include, but are not limited to:

	<ul>
        <li>Business intelligence and data analytics</li>
        <li>Big data applications in enterprise management</li>
        <li>Machine learning and AI in business decision-making</li>
        <li>Financial and risk analytics</li>
        <li>Predictive and prescriptive analytics</li>
        <li>Market and consumer analytics</li>
        <li>Performance measurement and management</li>
        <li>Digital transformation and innovation strategies</li>
        <li>Supply chain analytics and optimization</li>
        <li>Human capital and talent analytics</li>
        <li>Enterprise risk management and compliance</li>
        <li>Corporate governance and strategic leadership</li>
        <li>Economic and business forecasting</li>
        <li>Entrepreneurship and startup analytics</li>
        <li>Behavioral analytics in business and finance</li>
        <li>Industry 4.0 and smart enterprise solutions</li>
        <li>Sustainable business practices and ESG analytics</li>
        <li>Data privacy, ethics, and regulatory compliance</li>
        <li>Quantitative methods in business research</li>
    </ul>

For manuscript submission, please refer to our Manuscript Preparation Guidelines. Once your manuscript is ready, visit the Submission Page to complete the process.

											</div>
										</div>
										<div class="sj-ourhistory sj-sectioninnerspace">
											<div class="sj-borderheading">
												<h3>Our Proud History</h3>
											</div>
											<div class="sj-description">
												<p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsame quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo ipsam voluptatem quia voluptasit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
												<table class="sj-tableourhistory table-bordered">
												<thead>
													<tr>
														<th>Year</th>
														<th>Impact Factor</th>
														<th>Leading Rate</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														
														<td>2017</td>
														<td>2.125</td>
														<td>39 out of 157 </td>
													</tr>
													<tr>
														<td>2016</td>
														<td>2.019</td>
														<td>41 out of 153 </td>
													</tr>
													<tr>
														<td>2015</td>
														<td>2.039</td>
														<td>38 out of 145</td>
													</tr>
													<tr>
														<td>2014</td>
														<td>2.296</td>
														<td>25 out of 136</td>
													</tr>
													<tr>
														<td>2013</td>
														<td>1.993</td>
														<td>33 out of 131</td>
													</tr>
													<tr>
														<td>2012</td>
														<td>2.063</td>
														<td>27 out of 136</td>
													</tr>
													<tr>
														<td>2011</td>
														<td>1.878</td>
														<td>29 out of 114</td>
													</tr>
													<tr>
														<td>2010</td>
														<td>1.230</td>
														<td>56 out of 95</td>
													</tr>
												</tbody>
											</table>
												<p>Voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipiscite velit, sed quia non numquam eius modi tempora incidunt.</p>
											</div>
											
										</div>
										<div class="sj-ouraims sj-sectioninnerspace">
											<div class="sj-borderheading">
												<h3>Our Aim</h3>
											</div>
											<div class="sj-ouraim">
												<div class="sj-description">
													<figure class="sj-placeholder sj-alignleft">
														<iframe src="https://www.youtube.com/embed/iC9CpnSj-MU?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
														<img src="images/placeholder-img.jpg" alt="image description">
													</figure>
													<p class="sj-firstletter">A</p><p>dipisicing elit sed do eiusmod tempor incididunt utnalo labore etaium dolore magna aliqua enim ad minim veniam quis nosi trude exercitation ullamco laboris nisi ut aliquip ex eaeumodo consequat aute irure dolor enderit in voluptate velit esse cillum dolore eu fugiat aperspiciatis unde omnis iste natus.</p>
													<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum aperspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
													<p>Totam remas aperiama eaque ipsa quae ab illo inventore veritatis et quasi </p>
													<p>Adipisicing elit sed do eiusmod tempor incididunt ut labore etaium dolore magna aliqua enim ad minim veniam quis nostrude ercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor enderit in voluptate velit esse cepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum aperspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-4 col-lg-3">
								<aside id="sj-sidebar" class="sj-sidebar">
									<div class="sj-widget sj-widgetsearch">
										<div class="sj-widgetcontent">
											<form class="sj-formtheme sj-formsearch">
												<fieldset>
													<input type="search" name="search" class="form-control" placeholder="Search here">
													<button type="submit" class="sj-btnsearch"><i class="lnr lnr-magnifier"></i></button>
												</fieldset>
											</form>
										</div>
									</div>
									<div class="sj-widget sj-widgetimpactfector">
    <div class="sj-widgetcontent">
        <ul>
            <li>
                <h3>Journal Impact Factor<span>3.217</span></h3>
                <h3>5-Year Impact Factor<span>3.845</span></h3>
                <div class="sj-description">
                    <p>Our 2023 Journal Citation Reports metrics reflect sustained growth in academic influence.</p>
                </div>
            </li>
            <li>
                <h3>Editor-in-Chief: Dr. Elizabeth Chen</h3>
                <div class="sj-description">
                    <p>"We're committed to publishing high-impact research that advances engineering and management sciences. Our rigorous peer-review process ensures quality while maintaining rapid publication timelines." <a href="editorial-board.html">Read More</a></p>
                </div>
            </li>
        </ul>
    </div>
</div>
									<div class="sj-widget sj-widgetnoticeboard">
    <div class="sj-widgetheading">
        <h3>Notice Board</h3>
    </div>
    <div class="sj-widgetcontent">
        <ul>
            <li><a href="submission-guidelines-update.html">Updated Submission Guidelines Now in Effect (Revised August 2023)</a></li>
            <li><a href="peer-reviewer-call.html">Call for Peer Reviewers: Join Our Expert Reviewer Panel</a></li>
            <li><a href="issue-release.html">Vol. 12 Issue 3 Now Available Online - Featuring 15 New Research Articles</a></li>
        </ul>
    </div>
</div>
									<div class="sj-widget sj-widgetadd">
										<div class="sj-widgetcontent">
											<figure class="sj-addimage"><a href="javascript:void(0);"><img src="images/iema.png" alt="image description"></a></figure>
										</div>
									</div>
									<div class="sj-widget sj-widgetquestions">
    <div class="sj-widgetheading">
        <h3>Analytics Challenge</h3>
    </div>
    <div class="sj-widgetcontent">
        <div class="sj-description">
            <p>When implementing a new institutional analytics platform, what should be the primary consideration for ensuring cross-departmental data governance?</p>
        </div>
        <div class="sj-questions">
            <div class="sj-selectgroup">
                <span class="sj-radio">
                    <input id="sj-qone" type="radio" name="question" value="qone" checked="">
                    <label for="sj-qone">Establishing a centralized data stewardship team</label>
                </span>
                <span class="sj-radio">
                    <input id="sj-qtwo" type="radio" name="question" value="qtwo">
                    <label for="sj-qtwo">Developing department-specific data access protocols</label>
                </span>
                <span class="sj-radio">
                    <input id="sj-qthree" type="radio" name="question" value="qthree">
                    <label for="sj-qthree">Creating unified data definitions and standards</label>
                </span>
                <span class="sj-radio">
                    <input id="sj-qfour" type="radio" name="question" value="qfour">
                    <label for="sj-qfour">Implementing tiered security clearance levels</label>
                </span>
            </div>
            <div class="sj-voting-results" style="font-size: 13px; margin: 10px 0;">
                Current votes: Leadership (42%), Protocols (23%), Standards (28%), Security (7%)
            </div>
            <a class="sj-btn" href="javascript:void(0);">Cast Your Vote</a>
        </div>
    </div>
</div>
									<div class="sj-widget sj-widgetadd">
										<div class="sj-widgetcontent">
											<figure class="sj-addimage"><a href="javascript:void(0);"><img src="images/iema.png" alt="image description"></a></figure>
										</div>
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>
			</main>
			<!--************************************
					Main End
			*************************************-->
			<!--************************************
					Footer Start
			*************************************-->
			<footer id="sj-footer" class="sj-footer sj-haslayout">
				<div class="container">
					<div class="row">
						<a class="sj-btnscrolltotop" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
						<div class="sj-footercolumns">
							<div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
								<div class="sj-fcol sj-footeraboutus">
									<strong class="sj-logo">
										<a href="index.html"><img src="images/logo.jpg" alt="image description"></a>
									</strong>
									<div class="sj-description">
										</div>
									<ul class="sj-socialicons sj-socialiconssimple">
										<li class="sj-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
										<li class="sj-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
										<li class="sj-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
										<li class="sj-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
										<li class="sj-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
								<div class="sj-fcol sj-widget sj-widgetusefullinks">
									<div class="sj-widgetheading">
										<h3>By Specialty</h3>
									</div>
									<div class="sj-widgetcontent">
										<ul>
											<li><a href="javascript:void(0);">Contact Us</a></li>
											<li><a href="javascript:void(0);">Careers @ Iema journal</a></li>
											<li><a href="javascript:void(0);">Get Help and Support</a></li>
											<li><a href="javascript:void(0);">Rights &amp; Permissions</a></li>
											<li class="sj-more"><a href="javascript:void(0);">more</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
								<div class="sj-fcol sj-widget sj-widgetresources">
									<div class="sj-widgetheading">
										<h3>Resources</h3>
									</div>
									<div class="sj-widgetcontent">
										<ul>
											<li><a href="javascript:void(0);">Authors</a></li>
											<li><a href="javascript:void(0);">Librarians</a></li>
											<li><a href="javascript:void(0);">Sponsors &amp; Advertisers</a></li>
											<li><a href="javascript:void(0);">Press &amp; Media</a></li>
											<li class="sj-more"><a href="javascript:void(0);">more</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
								<div class="sj-fcol sj-widget sj-widgetcontactus">
									<div class="sj-widgetheading">
										<h3>Get In Touch</h3>
									</div>
									<div class="sj-widgetcontent">
										<ul>
											<li><i class="lnr lnr-home"></i><address>27a. Alternative route, Opp. Madam Juliana str., Chevron drive </address></li>
											<li><a href="tel:(+4)123456789101"><i class="lnr lnr-phone"></i><span>(+4) 1234 5678 9101</span></a></li>
											<li><a href="tel:(+4)123456789101"><i class="lnr lnr-screen"></i><span>(+4) 4321 8765 1019</span></a></li>
											<li><a href="mailto:info@yourdomain.com"><i class="lnr lnr-envelope"></i><span>info@iemajournal.org</span></a></li>
										</ul>
									</div>
									</div>
								</div>
							</div>
						</div>
						<div class="sj-footerbottom">
							<p class="sj-copyrights">© 2025 <span>	Iema Journal</span>. All Rights Reserved</p>
						</div>
					</div>
				</div>
			</footer>
			<!--************************************
					Footer End
			*************************************-->
		</div>
		<!--************************************
				Content Wrapper End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Search Start
	*************************************-->
	<div id="sj-searcharea" class="sj-searcharea">
		<button type="button" class="close">×</button>
		<form class="sj-formtheme sj-formsearcmain">
			<input type="search" value="" placeholder="Search Here..." />
			<button type="submit" class="sj-btn sj-btnactive"><span>Search</span></button>
		</form>
	</div>
	<!--************************************
			Search End
	*************************************-->
	<script src="js/vendor/jquery-3.3.1.js"></script>
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.js"></script>
	<script src="js/scrollbar.min.js"></script>
	<script src="js/chartist.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/main.js"></script>
</body>
</html>