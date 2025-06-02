<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aim & - Iema Journal</title>
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
            <section class="abstracting-indexing">
            <div class="submission-guidelines">
    <h1>Submission Guidelines</h1>
    
    <p>We provide two submission options for publishing your research: submitting an article directly or just submitting an abstract of a potential article in advance.</p>
    
    <div class="submission-options">
        <div class="option">
            <p><strong>Submit an Article:</strong> You can directly submit the complete article for publication.</p>
        </div>
        <div class="option">
            <p><strong>Submit an Abstract:</strong> Alternatively, you can choose to provide an initial abstract of your prospective article first.</p>
        </div>
    </div>
    
    <hr class="divider">
    
    <h2>3-Step Submission Process</h2>
    <p>We offer a comprehensive guide to help you navigate the publishing process, ensuring a seamless experience from it to finish.</p>
    
    <div class="process-step">
        <h3>1. Pre-Submission Considerations</h3>
        <p>Before submitting, ensure you have considered the following aspects:</p>
        
        <ul class="checklist">
            <li class="unchecked">☐ Confirm that you're submitting to the most suitable journal - Check the <strong>Aims and Scope</strong></li>
            <li class="checked">✓ Understand the cost implications and explore funding options - See <strong>APCs and Funding</strong></li>
        </ul>
    </div>
</div>

<style>
    .submission-guidelines {
        max-width: 800px;
        margin: 0 auto;
        padding: 30px 20px;
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
    }
    
    .submission-guidelines h1 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 25px;
    }
    
    .submission-guidelines h2 {
        color: #2c3e50;
        margin-top: 30px;
        margin-bottom: 15px;
    }
    
    .submission-guidelines h3 {
        color: #2c3e50;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    
    .submission-options {
        display: flex;
        gap: 20px;
        margin: 25px 0;
    }
    
    .option {
        flex: 1;
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 5px;
    }
    
    .option strong {
        color: #3498db;
    }
    
    .divider {
        border: 0;
        height: 1px;
        background-color: #eee;
        margin: 30px 0;
    }
    
    .process-step {
        margin-top: 20px;
    }
    
    .checklist {
        list-style: none;
        padding: 0;
        margin: 15px 0 0 0;
    }
    
    .checklist li {
        padding: 8px 0;
        padding-left: 30px;
        position: relative;
    }
    
    .checked {
        color: #27ae60;
    }
    
    .unchecked {
        color: #7f8c8d;
    }
    
    .checklist li:before {
        position: absolute;
        left: 0;
    }
    
    @media (max-width: 600px) {
        .submission-options {
            flex-direction: column;
        }
        
        .submission-guidelines {
            padding: 20px 15px;
        }
    }
</style>
<div class="submission-process">
    <h1>3-Step Submission Process</h1>
    
    <p class="intro">We offer a comprehensive guide to help you navigate the publishing process, ensuring a seamless experience from start to finish.</p>
    
    <div class="process-steps">
        <!-- Step 1 -->
        <div class="step">
            <h2>1. Pre-Submission Considerations</h2>
            <p>Before submitting, ensure you have considered the following aspects:</p>
            
            <ul class="checklist">
                <li class="unchecked">☐ Confirm that you're submitting to the most suitable journal - Check the <strong>Aims and Scope</strong></li>
                <li class="checked">✓ Understand the cost implications and explore funding options - See <strong>APCs and Funding</strong></li>
                <li class="checked">✓ Familiarize yourself with the copyright agreement - Read the <strong>Copyright Agreement</strong></li>
            </ul>
        </div>
        
        <!-- Step 2 -->
        <div class="step">
            <h2>2. Ready for Submission</h2>
            <p>Adhering to our policies and formatting guidelines enhances the chances of your manuscript being published.</p>
            
            <ul class="checklist">
                <li class="unchecked">☐ Abide by general formatting rules applicable to all article types - Follow the <strong>Manuscript Preparation Guidelines</strong></li>
                <li class="checked">✓ Ensure your submission is complete - Review the <strong>Supporting Information Preparation Guidelines</strong></li>
                <li class="checked">✓ Read and agree to our editorial policies - Review the <strong>Editorial Policies</strong></li>
            </ul>
        </div>
        
        <!-- Step 3 -->
        <div class="step">
            <h2>3. Post-Submission and Promotion</h2>
            <p>Upon acceptance, we offer support to ensure your article achieves maximum visibility within the scientific community.</p>
        </div>
    </div>
</div>

<style>
    .submission-process {
        max-width: 800px;
        margin: 0 auto;
        padding: 30px 20px;
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
    }
    
    .submission-process h1 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 15px;
    }
    
    .intro {
        text-align: center;
        margin-bottom: 30px;
        color: #555;
    }
    
    .step {
        margin-bottom: 40px;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .step h2 {
        color: #3498db;
        margin-top: 0;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .checklist {
        list-style: none;
        padding: 0;
        margin: 15px 0 0 0;
    }
    
    .checklist li {
        padding: 10px 0;
        padding-left: 30px;
        position: relative;
    }
    
    .checked {
        color: #27ae60;
    }
    
    .unchecked {
        color: #7f8c8d;
    }
    
    .checklist li:before {
        position: absolute;
        left: 0;
        font-weight: bold;
    }
    
    .checklist strong {
        color: #2c3e50;
    }
    
    @media (max-width: 600px) {
        .submission-process {
            padding: 20px 15px;
        }
        
        .step {
            padding: 15px;
        }
    }
</style>

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