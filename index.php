  <!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home - Iema Journal</title>
	<meta name="description" content="">
	<meta name="theme-color" content="#1976D2">
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
<body class="sj-home">
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
									<li class="sj-facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li class="sj-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li class="sj-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="sj-googleplus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
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
										<a id="sj-languages-button" href="#">
											<img src="images/flags/flag-02.jpg" alt="image description">
											<span>Eng</span>
											<i class="fa fa-angle-down"></i>
										</a>
										<ul>
											<li>
												<a href="#">
													<img src="images/flags/flag-01.jpg" alt="image description">
													<span>Ara</span>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="images/flags/flag-02.jpg" alt="image description">
													<span>Eng</span>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="images/flags/flag-03.jpg" alt="image description">
													<span>Chi</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="sj-navigationarea">
								<strong class="sj-logo"><a href="index.php"><img src="images/logo.png" width="100px" height="100px" alt="company logo here" ></a></strong>
								<div class="sj-rightarea">
									<nav id="sj-nav" class="sj-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse sj-navigation" id="navbarNav">
											<ul>
												<li class="current-menu-item menu-item-has-children page_item_has_children">
													<a href="index.php"><i class="lnr lnr-home"></i></a>
												</li>
												<li>
												<a href="aboutus.php">About us</a>
													<ul class="sub-menu">
													<li><a href="aimnscope.php">Aims & Scope</a></li>
                                                    <li><a href="abstract.php">Abstract & Indexing</a></li>
                                                    <li><a href="submission.php">Submission Guidelines</a></li>
                                                    <li><a href="editorial.php">Editorial Process</a></li>



</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Articles</a>
													<ul class="sub-menu">
														<li><a href="articles.html">Articles</a></li>
														<li><a href="submitarticle.php">Submit Article</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<span class="sj-tagnew">New</span>
													<a href="javascript:void(0);">Issues</a>
													<ul class="sub-menu">
														<li><a href="issuesweeks.html">Issues Weeks</a></li>
														<li><a href="issueyears.php">Issues Years</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Quick Links</a>
													<ul class="sub-menu">
														
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
					Home Banner Start
			*************************************-->
			<div class="sj-haslayout">
					<div class="container">
					<figure class="sj-aboutusimg"><img src="images/aboutus-img.jpg" alt="image description"></figure>
						<div class="row">
							<div class="sj-welcomegreeting">
								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 sj-verticalmiddle">
									<div id="sj-welcomeimgslider" class="sj-welcomeimgslider sj-welcomeslider owl-carousel">
										
										<figure class="sj-welcomeimg item">
											<img src="images/welcome.png" alt="welcome Image">
										</figure>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 sj-verticalmiddle">
									<div class="sj-welcomecontent">
										<div class="sj-welcomehead">
											<span>Greetings &amp; Welcome</span>
											<h2>Explore Latest Researche</h2>
										</div>
										<div class="sj-description">
											<p>Publishing Breakthrough in Academic and Institutional Reference. </p>
										</div>
										<div class="sj-btnarea">
											<a class="sj-btn" href="aboutus.php">Read More</a>
											<a class="sj-btn sj-btnactive" href="contact.html">Contact Us</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!--************************************
					Home Banner End
			*************************************-->
			<!--************************************
					Main Start
			*************************************-->
			<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
				
				<div class="three-column-section">
    <div class="column">
        <h3>Join as Editor-in-Chief</h3>
        <p>International Journal of Environmental Monitoring and Analysis is seeking an Editor-in-Chief to lead a respected journal, offering a chance to shape its future and stay updated on current research trends.</p>
        <a href="joineditor.php" class="button">Apply Now</a>
    </div>
    
    <div class="column">
        <h3>Submission Guidelines</h3>
        <p>We are committed to making your publishing experience as easy and efficient as we can. Our submission guidelines will offer you the essential resources and guidance for a successful process of submitting and publishing your article.</p>
        <a href="submission.php" class="button">View More →</a>
    </div>
    
    <div class="column">
        <h3>Reviewer Guidelines</h3>
        <p>We encourage you to explore our reviewer guidelines, where you'll discover valuable insights and practical tips to enhance your role as a peer reviewer, promoting a constructive and efficient peer review experience.</p>
        <a href="review.html" class="button">View More →</a>
    </div>
</div>


 

<style>
    .three-column-section {
        display: flex;
        justify-content: space-between;
        margin: 40px 0;
        flex-wrap: wrap;
        gap: 20px;
    }
    
    .column {
        flex: 1;
        min-width: 250px;
        padding: 25px;
        background-color: #1976D2; /* Clean professional blue */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    
    /* FORCE WHITE TEXT */
    .column *:not(.button) {
        color: #FFFFFF !important; /* Pure white for all text except buttons */
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2); /* Subtle shadow */
        -webkit-font-smoothing: antialiased; /* Crisp text rendering */
    }
    
    .column h3 {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 1.3rem;
    }
    
    .column p {
        font-weight: 500;
        margin-bottom: 20px;
        line-height: 1.5;
        opacity: 0.95; /* Slight transparency for visual hierarchy */
    }
    
    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #FFFFFF;
        color: #1976D2 !important; /* Blue text */
        font-weight: 600;
        border-radius: 5px;
        text-decoration: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.2s ease;
        border: none;
    }
    
    @media (max-width: 768px) {
        .three-column-section {
            flex-direction: column;
        }
    }
</style>

<section class="editorial-board">
    <div class="container">
        <h2>Editorial Board Members</h2>
        <p class="journal-name"><em>Institute for Enterprise Management and Analytics</em> maintains an Editorial Team of practicing researchers from around the world, to ensure manuscripts are handled by editors who are experts in the field of study.</p>
        
        <div class="board-members-grid">
            <!-- Row 1 -->
            <div class="member">
                <h3>Prof. Ademola Ojo
</h3>
<p>Distinguished professor and researcher with expertise in economics, published author, and mentor to future academic leaders.

</p><br />
            </div>
            
            <div class="member">
                <h3>Prof. Lasanou Kaita</h3>
				<p>Renowned scholar in environmental sciences, advocate for sustainable development, and recipient of multiple international research grants.

</p>
				<br />
            </div>
            
            <!-- Row 2 -->
            <div class="member">
                <h3>Dr. Raymond Smith</h3>
				<p>Medical doctor specializing in cardiology, dedicated to patient care and innovative treatment methods in heart health.
</p>

				
				<br/>
            </div>
            
            <div class="member">
                <h3>Prof. Funmilayo Bamigboye</h3>
				<p>Leading professor of biochemistry, groundbreaking researcher in molecular biology, and advocate for women in STEM.


				<br />
            </div>
            
            <!-- Row 3 -->
            <div class="member">
                <h3>Prof. Emmanuel Bakare</h3>
				<p>Esteemed professor of political science, policy analyst, and consultant on governance and international relations.

</p>
				<br />
            </div>
            
            <div class="member">
                <h3>Prof. Ogundana Deji</h3>
				<p>Expert in agricultural economics, researcher in food security, and advisor on sustainable farming practices.
</p>

				<br />
            </div>
        </div>
        
        <div class="view-all">
            <a href="#" class="view-all-link">View all Editors →</a>
        </div>
    </div>
</section>

<style>
    .editorial-board {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .editorial-board h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #2c3e50;
    }
    
    .journal-name {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 40px;
        color: #555;
        line-height: 1.6;
    }
    
    .board-members-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        margin-bottom: 40px;
    }
    
    .member {
        background-color: white;
        padding: 25px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    .member h3 {
        color: #2c3e50;
        margin-bottom: 10px;
        font-size: 1.1rem;
    }
    
    .member p {
        color: #555;
        line-height: 1.5;
        margin-bottom: 10px;
    }
    
    .orcid {
        color: #a6a6a6;
        font-size: 0.9rem;
    }
    
    .view-all {
        text-align: center;
    }
    
    .view-all-link {
        display: inline-block;
        padding: 10px 20px;
        color: #3498db;
        text-decoration: none;
        font-weight: 500;
        border: 1px solid #3498db;
        border-radius: 4px;
        transition: all 0.3s;
    }
    
    .view-all-link:hover {
        background-color: #3498db;
        color: white;
    }
    
    @media (max-width: 768px) {
        .board-members-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<section class="join-editorial-board">
    <div class="container">
        <div class="join-content">
            <div class="join-left">
                <h2>Join as Editorial Board Member</h2>
                <p>Would you like to make a valuable contribution to the scientific community by joining the editorial team of this journal? Or perhaps you're a current editorial board member who wishes to recommend a colleague for this role? Your interest and suggestions are highly appreciated and warmly welcomed.</p>
                <a href="editorialboard.html" class="join-button">Join Now 💬</a>
            </div>
            
            <div class="join-right">
                <h3>Benefits for Editorial Board Members</h3>
                <p>Joining the Editorial Team is an opportunity to be recognized as an expert in your field and to contribute to the peer review process of cutting-edge research. By acting as editor, you will have the opportunity to shape the future of research in your field and be part of a community of like-minded researchers.</p>
                
                <p class="benefits-title">As an editorial board member, You will Benefit from:</p>
                <ul class="benefits-list">
                    <li>✓ Enhancing your academic influence and enriching your resume.</li>
                    <li>✓ Receiving a certificate acknowledging your contributions to the journal.</li>
                    <li>✓ Having your name listed on the journal website.</li>
                    <li>✓ Gaining access to the latest research in advance and making new contacts in your research field.</li>
                    <li>✓ Networking with other scholars in your field and broadening your academic connectivity.</li>
                </ul>
                
                <a href="editorialboard.html" class="join-button">Join as Editorial Board Member 💬</a>
            </div>
        </div>
    </div>
</section>

<style>
    .join-editorial-board {
        padding: 60px 0;
        background-color: #ffffff;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .join-content {
        display: flex;
        gap: 40px;
    }
    
    .join-left, .join-right {
        flex: 1;
    }
    
    .join-left {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
    }
    
    .join-right {
        background-color: #f0f7ff;
        padding: 30px;
        border-radius: 8px;
    }
    
    h2 {
        color: #2c3e50;
        margin-bottom: 20px;
    }
    
    h3 {
        color: #2c3e50;
        margin-bottom: 15px;
    }
    
    p {
        color: #555;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .benefits-title {
        font-weight: 600;
        margin-top: 25px;
    }
    
    .benefits-list {
        color: #555;
        line-height: 1.6;
        margin-bottom: 25px;
        padding-left: 20px;
    }
    
    .benefits-list li {
        margin-bottom: 10px;
        position: relative;
        list-style-type: none;
    }
    
    .benefits-list li:before {
        content: "✓";
        position: absolute;
        left: -20px;
        color: #3498db;
    }
    
    .join-button {
        display: inline-block;
        padding: 12px 25px;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: 500;
        transition: background-color 0.3s;
    }
    
    .join-button:hover {
        background-color: #2980b9;
    }
    
    @media (max-width: 768px) {
        .join-content {
            flex-direction: column;
        }
        
        .join-left, .join-right {
            padding: 25px;
        }
    }
</style>

				<div id="sj-twocolumns" class="sj-twocolumns">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-8 col-lg-9">
								<div id="sj-content" class="sj-content">
								<!--************************************
										Editor's Pick Start
								*************************************-->
								<section class="sj-haslayout sj-sectioninnerspace">
										<div class="sj-borderheading">
											<h3>Editor’s Pick</h3>
											<a class="sj-btnview" href="javascript:void(0);">View All</a>
										</div>
										<div id="">
											<div class="item">
												<article class="sj-post sj-editorchoice">
													<div class="sj-postcontent">
														<div class="sj-head">
															<span class="sj-username"><a href="#">By Admin</a></span>
															<h3><a href="analytics.html">Analytics and Job Creation in Nigeria: A Threat or Opportunity?
 </a></h3>
														</div>
														<div class="sj-description">
														<p>In the rapidly evolving business landscape, the role of analytics has become increasingly crucial. As Nigeria, the most populous country in Africa, grapples with the challenges of economic growth and job creation, it is paramount to examine the impact of analytics on the labor market. </p>

</div>
														<a class="sj-btn" href="analytics.html">View Full Article</a>
													</div>
												</article>
												<article class="sj-post sj-editorchoice">
													<div class="sj-postcontent">
														<div class="sj-head">
															<span class="sj-username"><a href="#">By Admin</a></span>
															<h3><a href="article2.html">Analytics in Nigeria's Energy Sector: Can It Solve the Power Crisis?
</a></h3>
														</div>
														<div class="sj-description">
														<p>Nigeria has long grappled with a persistent power crisis, which has hindered the country's economic and social development. Despite being a major producer and exporter of energy resources,</p>														</div>
														<a class="sj-btn" href="article2.html">View Full Article</a>
													</div>
												</article>
												<article class="sj-post sj-editorchoice">
													
													<div class="sj-postcontent">
														<div class="sj-head">
															<span class="sj-username"><a href="#">By Admin</a></span>
															<h3><a href="article3.html">The Evolution of Enterprise Management: Trends and Strategies for 2025
</a></h3>
														</div>
														<div class="sj-description">
														<p>In today's dynamic business landscape, enterprises are grappling with rapid technological advancements, evolving workforce dynamics, and shifting customer demands. </p> 
														</div>
														<a class="sj-btn" href="article3.html">View Full Article</a>
													</div>
												</article>
											</div>
											
											<div class="item">
												<article class="sj-post sj-editorchoice">
													
													<div class="sj-postcontent">
														<div class="sj-head">
															<span class="sj-username"><a href="#">By Admin</a></span>
															<h3><a href="article4.html">The Role of Data Analytics in Driving Nigeria's Economic Diversification 
</a></h3>
														</div>
														<div class="sj-description">
														<p>Nigeria's economy has long been dominated by the oil and gas sector, accounting for a significant portion of its export earnings and government revenue</p>														</div>
														<a class="sj-btn" href="article4.html">View Full Article</a>
													</div>
												</article>
												<!------------
												<article class="sj-post sj-editorchoice">
													<figure class="sj-postimg">
														<img src="images/editorchoice/img-02.jpg" alt="image description">
													</figure>
													<div class="sj-postcontent">
														<div class="sj-head">
															<span class="sj-username"><a href="javascript:void(0);">Coleman Hoff</a></span>
															<h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
														</div>
														<div class="sj-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco...</p>
														</div>
														<a class="sj-btn" href="javascript:void(0);">View Full Article</a>
													</div>
												</article>
												<article class="sj-post sj-editorchoice">
													<figure class="sj-postimg">
														<img src="images/editorchoice/img-03.jpg" alt="image description">
													</figure>
													<div class="sj-postcontent">
														<div class="sj-head">
															<span class="sj-username"><a href="javascript:void(0);">Frederica Kinnaird</a></span>
															<h3><a href="javascript:void(0);">A Milestone for CART Cells &amp; Treatment</a></h3>
														</div>
														<div class="sj-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco...</p>
														</div>
														<a class="sj-btn" href="javascript:void(0);">View Full Article</a>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="sj-post sj-editorchoice">
													<figure class="sj-postimg">
														<img src="images/editorchoice/img-01.jpg" alt="image description">
													</figure>
													<div class="sj-postcontent">
														<div class="sj-head">
															<span class="sj-username"><a href="javascript:void(0);">Hillary Farnham</a></span>
															<h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs — An Update form</a></h3>
														</div>
														<div class="sj-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco...</p>
														</div>
														<a class="sj-btn" href="javascript:void(0);">View Full Article</a>
													</div>
												</article>
												<article class="sj-post sj-editorchoice">
													<figure class="sj-postimg">
														<img src="images/editorchoice/img-02.jpg" alt="image description">
													</figure>
													<div class="sj-postcontent">
														<div class="sj-head">
															<span class="sj-username"><a href="javascript:void(0);">Coleman Hoff</a></span>
															<h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
														</div>
														<div class="sj-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco...</p>
														</div>
														<a class="sj-btn" href="javascript:void(0);">View Full Article</a>
													</div>
												</article>
												<article class="sj-post sj-editorchoice">
													<figure class="sj-postimg">
														<img src="images/editorchoice/img-03.jpg" alt="image description">
													</figure>
													<div class="sj-postcontent">
														<div class="sj-head">
															<span class="sj-username"><a href="javascript:void(0);">Frederica Kinnaird</a></span>
															<h3><a href="javascript:void(0);">A Milestone for CART Cells &amp; Treatment</a></h3>
														</div>
														<div class="sj-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco...</p>
														</div>
														<a class="sj-btn" href="javascript:void(0);">View Full Article</a>
													</div>
												</article>----------->
											</div>
										</div>
									</section>
								<!--************************************
										Editor's Pick End
								*************************************-->
								<!--************************************
										Previous Posts Start
								*************************************-->
								<section class="sj-haslayout sj-sectioninnerspace">
										<div class="sj-borderheading">
											<h3>Coming In 2025</h3>
											<a class="sj-btnview" href="javascript:void(0);">View All</a>
										</div>
										<div id="sj-upcomingbooksslider" class="sj-upcomingbooksslider sj-upcomingbooks owl-carousel">
											<div class="item">
												<div class="sj-upcomingbook">
													<figure class="sj-upcomingbookimg">
														<img src="images/analytics1.png" alt="image description">
													</figure>
													<div class="sj-postcontent">
														<h3><a href="javascript:void(0);">Analytics and Job Creation in Nigeria</a></h3>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="sj-upcomingbook">
													<figure class="sj-upcomingbookimg">
														<img src="images/role1.png" alt="image description">
													</figure>
													<div class="sj-postcontent">
														<h3><a href="javascript:void(0);">The Role Of Data Analytics In Driving Nigeria's Economic Diversification
</a></h3>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="sj-upcomingbook">
													<figure class="sj-upcomingbookimg">
														<img src="images/ENT1.png" alt="image description">
													</figure>
													<div class="sj-postcontent">
														<h3><a href="javascript:void(0);">The Evolution Of Enterprise Management: Trends And Strategies For 2025
</a></h3>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="sj-upcomingbook">
													<figure class="sj-upcomingbookimg">
														<img src="images/sec.png" alt="image description">
													</figure>
													<div class="sj-postcontent">
														<h3><a href="javascript:void(0);">Analytics In Nigeria's Energy Sector: Can It Solve The Power Crisis?
</a></h3>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="sj-upcomingbook">
													<figure class="sj-upcomingbookimg">
														<img src="images/comingbooks/img-05.jpg" alt="image description">
													</figure>
													<div class="sj-postcontent">
														<h3><a href="javascript:void(0);">Journal of Burn Care &amp; Research</a></h3>
													</div>
												</div>
											</div>
											
											
											
											
										</div>
									</section>
								<!--************************************
										News Articles End
								*************************************-->
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
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
										<span class="sj-headtitle"></span>
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
											<li><a href="javascript:void(0);">Careers @ Iema Journal</a></li>
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
						<div class="sj-footerbottom">
							<p class="sj-copyrights">© 2025 <span>Iema Journal</span>. All Rights Reserved</p>
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