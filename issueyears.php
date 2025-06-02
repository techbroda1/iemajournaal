<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IEMA Journal - Issues by Year</title>
    <meta name="description" content="Browse journal issues by year">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Combined CSS files for better performance -->
    <link rel="stylesheet" href="css/styles.min.css">
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!-- Preloader -->
    <div class="preloader-outer">
        <div class='loader'>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
        </div>
    </div>

    <div id="sj-wrapper" class="sj-wrapper">
        <div class="sj-contentwrapper">
            <!-- Header -->
            <header id="sj-header" class="sj-header sj-haslayout">
                <!-- Header content remains the same -->
                <!-- ... -->
            </header>

            <!-- Inner Banner -->
            <div class="sj-innerbanner">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="sj-innerbannercontent">
                                <h1>Issue Index</h1>
                                <ol class="sj-breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="issues.php">Issues</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
                <div id="sj-twocolumns" class="sj-twocolumns">
                    <div class="container">
                        <div class="row">
                            <!-- Left Sidebar -->
                            <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                                <aside id="sj-sidebarvtwo" class="sj-sidebar">
                                    <!-- Volume and Issue Search -->
                                    <div class="sj-widget sj-widgetvolissue">
                                        <div class="sj-widgetheading">
                                            <h3>By Volume and Issue</h3>
                                        </div>
                                        <div class="sj-widgetcontent">
                                            <form class="sj-formtheme sj-formissuevol" method="get" action="issues.php">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <label for="volissue" class="sr-only">Volume Number</label>
                                                        <input type="text" name="volume" id="volissue" class="form-control" placeholder="Vol no.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="issuenumber" class="sr-only">Issue Number</label>
                                                        <input type="text" name="issue" id="issuenumber" class="form-control" placeholder="Issue no.">
                                                    </div>
                                                    <button type="submit" class="sj-btn">Search</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Date Search -->
                                    <div class="sj-widget sj-widgetsearchdate">
                                        <div class="sj-widgetheading">
                                            <h3>By Date</h3>
                                        </div>
                                        <div class="sj-widgetcontent">
                                            <form class="sj-formtheme sj-formsearchbydate" method="get" action="issues.php">
                                                <fieldset>
                                                    <div class="form-group sj-inputwithicon">
                                                        <label for="search-date" class="sr-only">Publication Date</label>
                                                        <i class="fab fa-calendar"></i>
                                                        <input type="date" name="pubdate" id="search-date" class="form-control">
                                                    </div>
                                                    <div class="sj-filterbtns">
                                                        <button type="submit" class="sj-btn">Apply Filter</button>
                                                        <a class="sj-btn" href="issuesyears.php">Reset All</a>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Recent Issues from Database -->
                                    <div class="sj-widget sj-widgetrecentissues">
                                        <div class="sj-widgetheading">
                                            <h3>Recent Issues</h3>
                                        </div>
                                        <div class="sj-widgetcontent">
                                            <ul>
                                                <?php
                                                // Database connection and query for recent issues
                                                require_once 'config/database.php';
                                                
                                                try {
                                                    $query = "SELECT 
                                                                i.issue_id, 
                                                                i.issue_title, 
                                                                i.publication_date, 
                                                                COUNT(a.article_id) as article_count
                                                              FROM issues i
                                                              LEFT JOIN articles a ON i.issue_id = a.issue_id
                                                              GROUP BY i.issue_id
                                                              ORDER BY i.publication_date DESC
                                                              LIMIT 5";
                                                    
                                                    $stmt = $pdo->prepare($query);
                                                    $stmt->execute();
                                                    
                                                    echo '<li><a href="issues.php"><span>View All</span><em>('.$stmt->rowCount().')</em></a></li>';
                                                    
                                                    while ($issue = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                        $date = date('F j, Y', strtotime($issue['publication_date']));
                                                        echo '<li><a href="issue.php?id='.$issue['issue_id'].'"><span>'.$date.'</span><em>('.$issue['article_count'].')</em></a></li>';
                                                    }
                                                } catch (PDOException $e) {
                                                    echo '<li>Error loading recent issues</li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>

                            <!-- Main Content Area -->
                            <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-6">
                                <div id="sj-content" class="sj-content">
                                    <!-- Article Submission Promo -->
                                    <div class="sj-uploadarticle">
                                        <figure class="sj-uploadarticleimg">
                                            <img src="images/upload-articlebg.jpg" alt="Submit your article to our journal">
                                            <figcaption>
                                                <div class="sj-uploadcontent">
                                                    <span>Do You Want To Upload Your Article?</span>
                                                    <h3>Submit Now &amp; Make Your Online Presence</h3>
                                                    <a class="sj-btn" href="submitarticle.php">Submit Now</a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <!-- Issues by Year Accordion -->
                                    <div class="sj-issuesyears">
                                        <div id="sj-accordion" class="sj-accordion" role="tablist" aria-multiselectable="true">
                                            <?php
                                            // Get distinct decades from database
                                            try {
                                                $decadeQuery = "SELECT 
                                                                FLOOR(YEAR(publication_date)/10)*10 AS decade
                                                              FROM issues
                                                              GROUP BY decade
                                                              ORDER BY decade DESC";
                                                
                                                $decadeStmt = $pdo->prepare($decadeQuery);
                                                $decadeStmt->execute();
                                                
                                                while ($decadeRow = $decadeStmt->fetch(PDO::FETCH_ASSOC)) {
                                                    $decade = $decadeRow['decade'];
                                                    $nextDecade = $decade + 9;
                                                    echo '<div class="sj-panel">
                                                            <h4>'.$decade.'s<i class="fa fa-angle-down"></i></h4>
                                                            <div class="sj-panelcontent">
                                                                <div class="sj-recordholder">';
                                                    
                                                    // Get years in this decade with issues
                                                    $yearQuery = "SELECT 
                                                                    YEAR(publication_date) AS year,
                                                                    COUNT(issue_id) AS issue_count
                                                                  FROM issues
                                                                  WHERE YEAR(publication_date) BETWEEN ? AND ?
                                                                  GROUP BY year
                                                                  ORDER BY year DESC";
                                                    
                                                    $yearStmt = $pdo->prepare($yearQuery);
                                                    $yearStmt->execute([$decade, $nextDecade]);
                                                    
                                                    while ($yearRow = $yearStmt->fetch(PDO::FETCH_ASSOC)) {
                                                        echo '<a class="sj-btnrecord" href="issues.php?year='.$yearRow['year'].'">
                                                                <span>'.$yearRow['year'].'</span>
                                                                <i class="fa fa-angle-right"></i>
                                                              </a>';
                                                    }
                                                    
                                                    echo '</div></div></div>';
                                                }
                                            } catch (PDOException $e) {
                                                echo '<div class="alert alert-danger">Error loading issues by year</div>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Sidebar -->
                            <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                                <aside id="sj-sidebar" class="sj-sidebar sj-sidebarvtwo">
                                    <!-- Impact Factor Widget -->
                                    <div class="sj-widget sj-widgetimpactfector">
                                        <div class="sj-widgetcontent">
                                            <ul>
                                                <li>
                                                    <?php
                                                    // Get journal metrics from database
                                                    try {
                                                        $metricsQuery = "SELECT impact_factor, five_year_impact FROM journal_metrics LIMIT 1";
                                                        $metricsStmt = $pdo->query($metricsQuery);
                                                        $metrics = $metricsStmt->fetch(PDO::FETCH_ASSOC);
                                                        
                                                        echo '<h3>Impact Factor<span>'.$metrics['impact_factor'].'</span></h3>
                                                              <h3>5 Year Impact Factor<span>'.$metrics['five_year_impact'].'</span></h3>';
                                                    } catch (PDOException $e) {
                                                        echo '<h3>Impact Factor<span>N/A</span></h3>';
                                                    }
                                                    ?>
                                                </li>
                                                <li>
                                                    <?php
                                                    // Get editor info
                                                    try {
                                                        $editorQuery = "SELECT name, bio FROM editors WHERE is_chief = 1 LIMIT 1";
                                                        $editorStmt = $pdo->query($editorQuery);
                                                        $editor = $editorStmt->fetch(PDO::FETCH_ASSOC);
                                                        
                                                        echo '<h3>'.$editor['name'].'</h3>
                                                              <div class="sj-description">
                                                                <p>'.substr($editor['bio'], 0, 100).' <a href="editor.php">Read More</a></p>
                                                              </div>';
                                                    } catch (PDOException $e) {
                                                        echo '<h3>Editor</h3><p>Editor information not available</p>';
                                                    }
                                                    ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Notice Board Widget -->
                                    <div class="sj-widget sj-widgetnoticeboard">
                                        <div class="sj-widgetheading">
                                            <h3>Notice Board</h3>
                                        </div>
                                        <div class="sj-widgetcontent">
                                            <ul>
                                                <?php
                                                // Get notices from database
                                                try {
                                                    $noticeQuery = "SELECT notice_id, notice_text FROM notices 
                                                                  WHERE is_active = 1 
                                                                  ORDER BY created_at DESC 
                                                                  LIMIT 3";
                                                    $noticeStmt = $pdo->query($noticeQuery);
                                                    
                                                    while ($notice = $noticeStmt->fetch(PDO::FETCH_ASSOC)) {
                                                        echo '<li><a href="notice.php?id='.$notice['notice_id'].'">'.
                                                             htmlspecialchars($notice['notice_text']).'</a></li>';
                                                    }
                                                } catch (PDOException $e) {
                                                    echo '<li>Notices currently unavailable</li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Advertisement Widgets -->
                                    <div class="sj-widget sj-widgetadd">
                                        <span class="sj-headtitle">Advertisement</span>
                                        <div class="sj-widgetcontent">
                                            <?php
                                            // Get active advertisement
                                            try {
                                                $adQuery = "SELECT image_url, target_url FROM advertisements 
                                                           WHERE position = 'sidebar' AND is_active = 1 
                                                           ORDER BY RAND() LIMIT 1";
                                                $adStmt = $pdo->query($adQuery);
                                                $ad = $adStmt->fetch(PDO::FETCH_ASSOC);
                                                
                                                if ($ad) {
                                                    echo '<figure class="sj-addimage">
                                                            <a href="'.$ad['target_url'].'">
                                                              <img src="'.$ad['image_url'].'" alt="Advertisement">
                                                            </a>
                                                          </figure>';
                                                } else {
                                                    echo '<figure class="sj-addimage">
                                                            <a href="#">
                                                              <img src="images/widget-add.jpg" alt="Advertisement">
                                                            </a>
                                                          </figure>';
                                                }
                                            } catch (PDOException $e) {
                                                echo '<figure class="sj-addimage">
                                                        <a href="#">
                                                          <img src="images/widget-add.jpg" alt="Advertisement">
                                                        </a>
                                                      </figure>';
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <!-- Question of the Week Widget -->
                                    <div class="sj-widget sj-widgetquestions">
                                        <div class="sj-widgetheading">
                                            <h3>Question Of The Week</h3>
                                        </div>
                                        <div class="sj-widgetcontent">
                                            <?php
                                            // Get current question
                                            try {
                                                $questionQuery = "SELECT q.question_id, q.question_text, 
                                                                GROUP_CONCAT(a.answer_id, '|', a.answer_text SEPARATOR '||') as answers
                                                              FROM questions q
                                                              JOIN question_answers a ON q.question_id = a.question_id
                                                              WHERE q.is_current = 1
                                                              GROUP BY q.question_id
                                                              LIMIT 1";
                                                $questionStmt = $pdo->query($questionQuery);
                                                $question = $questionStmt->fetch(PDO::FETCH_ASSOC);
                                                
                                                if ($question) {
                                                    echo '<div class="sj-description">
                                                            <p>'.htmlspecialchars($question['question_text']).'</p>
                                                          </div>
                                                          <div class="sj-questions">
                                                            <form action="submit_answer.php" method="post">
                                                            <input type="hidden" name="question_id" value="'.$question['question_id'].'">
                                                            <div class="sj-selectgroup">';
                                                    
                                                    $answers = explode('||', $question['answers']);
                                                    foreach ($answers as $answer) {
                                                        list($answer_id, $answer_text) = explode('|', $answer);
                                                        echo '<span class="sj-radio">
                                                                <input id="sj-q'.$answer_id.'" type="radio" name="answer" value="'.$answer_id.'">
                                                                <label for="sj-q'.$answer_id.'">'.htmlspecialchars($answer_text).'</label>
                                                              </span>';
                                                    }
                                                    
                                                    echo '</div>
                                                          <button type="submit" class="sj-btn">Submit Now</button>
                                                          </form>
                                                          </div>';
                                                } else {
                                                    echo '<p>No current question available</p>';
                                                }
                                            } catch (PDOException $e) {
                                                echo '<p>Question of the week currently unavailable</p>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer id="sj-footer" class="sj-footer sj-haslayout">
                <!-- Footer content remains the same -->
                <!-- ... -->
            </footer>
        </div>
    </div>

    <!-- Search Area -->
    <div id="sj-searcharea" class="sj-searcharea">
        <button type="button" class="close">×</button>
        <form class="sj-formtheme sj-formsearcmain" method="get" action="search.php">
            <label for="main-search" class="sr-only">Search</label>
            <input type="search" id="main-search" name="q" placeholder="Search Here..." />
            <button type="submit" class="sj-btn sj-btnactive"><span>Search</span></button>
        </form>
    </div>

    <!-- Combined JS files for better performance -->
    <script src="js/scripts.min.js"></script>
    
    <!-- Initialize accordion -->
    <script>
    $(document).ready(function() {
        // Accordion functionality
        $('.sj-accordion h4').click(function() {
            $(this).toggleClass('active').next('.sj-panelcontent').slideToggle();
            $(this).find('i').toggleClass('fa-angle-down fa-angle-up');
        });
        
        // Initialize with first panel open
        $('.sj-accordion h4:first').addClass('active').next('.sj-panelcontent').show();
    });
    </script>
</body>
</html>