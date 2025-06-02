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
				<div id="sj-twocolumns" class="sj-twocolumns">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-8 col-lg-9">
								<div id="sj-content" class="sj-content">
									<div class="sj-aboutus">
									<div class="indexing-section">
    <h2>Abstracting and Indexing</h2>
    <p class="journal-issn">International Journal of Environmental Monitoring and Analysis (ISSN Online: 2328-7667, ISSN Print: 2328-7659) is included in the following Abstracting and Indexing databases:</p>
    
    <ul class="indexing-list">
        <li class="unchecked">☐ Nondestructive Testing</li>
        <li class="checked">✓ AcademicKeys</li>
        <li class="unchecked">☐ JournalSeek</li>
        <li class="checked">✓ Polish Scholarly Bibliography</li>
        <li class="checked">✓ Access to Research for Development and Innovation</li>
        <li class="checked">✓ Universal Impact Factor</li>
        <li class="checked">✓ Zeitschriftendatenbank</li>
        <li class="checked">✓ ResearchBib</li>
        <li class="checked">✓ Wissenschaftszentrum Berlin</li>
        <li class="checked">✓ WorldCat</li>
        <li class="checked">✓ Eurasian Scientific Journal Index</li>
        <li class="checked">✓ WarFang</li>
        <li class="checked">✓ Directory of Research Journals Indexing</li>
        <li class="checked">✓ Chemical Abstract Services</li>
        <li class="checked">✓ MIAR</li>
        <li class="checked">✓ EZB</li>
        <li class="checked">✓ CrossRef</li>
    </ul>
</div>

<style>
    .indexing-section {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
    }
    
    .indexing-section h2 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 15px;
    }
    
    .journal-issn {
        text-align: center;
        margin-bottom: 25px;
        color: #555;
    }
    
    .indexing-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 10px;
    }
    
    .indexing-list li {
        padding: 8px 12px;
        border-radius: 4px;
    }
    
    .checked {
        background-color: #f0f8ff;
        color: #2c3e50;
    }
    
    .unchecked {
        color: #777;
    }
    
    @media (max-width: 600px) {
        .indexing-list {
            grid-template-columns: 1fr;
        }
    }
</style>
										<div class="sj-ourhistory sj-sectioninnerspace">
											<div class="sj-borderheading">
												<h3>Our Proud History</h3>
											</div>
											<div class="sj-description">
												<p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsame quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo ipsam voluptatem quia voluptasit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
												
												<p>Voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipiscite velit, sed quia non numquam eius modi tempora incidunt.</p>
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
													<h3>Impact Factor<span>2.125</span></h3>
													<h3>5 Year Impact Factor<span>2.853</span></h3>
												</li>
												<li>
													<h3>Dr. Desmond Bratton</h3>
													<div class="sj-description">
														<p>Consectetur adipisicing elit sedo amod tempor incididunt. <a href="javascript:void(0)">Read More</a></p>
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
												<li><a href="javascript:void(0);">Adipisicing elitaium sed dotas eiusm tempor incididunt utae labore etiate dolore magna aliqua enim.</a></li>
												<li><a href="javascript:void(0);">Labore etiat dolore magna aliquaen ad minim veniam.</a></li>
												<li><a href="javascript:void(0);">Duis aute irure dolor in reprehender</a></li>
											</ul>
										</div>
									</div>
									<div class="sj-widget sj-widgetadd">
										<span class="sj-headtitle">Advertisment 270 x270</span>
										<div class="sj-widgetcontent">
											<figure class="sj-addimage"><a href="javascript:void(0);"><img src="images/widget-add.jpg" alt="image description"></a></figure>
										</div>
									</div>
									
									
								</aside>
							</div>
						</div>
					</div>
				</div>
			</main>
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