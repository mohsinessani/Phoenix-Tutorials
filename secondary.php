<?php 
 include_once('academy_admin/source/config.php');

// $output[];
try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql = "SELECT * FROM student_feedback WHERE status='Enable'";

            //Prepare sql query
            $stmt = $conn->prepare($sql);
            
            // $stmt->bindParam(':about_id', $_GET['id']);

            $stmt->execute();

            if($stmt->execute())
        {
            $output= $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            $action = "";
        }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Phoenix Tutorials |" />
<meta name="keywords" content="academy, course, education, education cources, Hardware , software, Networking , Security , learning," />
<meta name="author" content="Ajay " />

<!-- Page Title -->
<title>Phoenix Tutorials | Higher Secondary </title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<!-- <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144"> -->

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<style type="text/css">
  .form-control{
    color: #1F386B !important;
  }
  .panel-group .panel-title a.active{
  color: #fff !important;
  }
  .nav-pills li.active > a{
    background: #1f386b !important;
    color: #f6f7f9 !important;
  }
  .morecontent span {
    display: none;
}
.morelink {
    display: block;
    color: #ff0000 !important;
}
.fb_iframe_widget > span{
  max-height:348px !important;
}
iframe{
  max-height: 348px !important;
}
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <?php include_once('header.php'); ?>
  
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Course Details</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-gray-silver">Higher Secondary</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-0 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="images/cource-name/secondary.jpg" alt="secondary">
              <h3 class="text-theme-colored">Science And Commerce</h3>
              <h5><em>Higher Secondary Tution only for  <span class="text-theme-color-2">Science And Commerces Students.</span> <br></em></h5>
              	<p class="more"><span class="text-theme-color-2">Science </span>  XI , XII & MHT-CET(ENGG / MEDICAL ENTRANCE) <br>
              	What is MHT-CET?

			The Government of Maharashtra conducts a single Common Entrance Test MHT-CET for selections to all degree course in Health Sciences and Engineering / Technology courses.
			
			For selection to Health Sciences & Engineering / Technology degree courses, The Director, Medical Education and Research (DMER) & Directorate of Technical Education (DTE) Mumbai are the Competent Authorities.
              <span class="text-theme-color-2">Commerce </span><br>
          It can be illustrated as study of trade and business. The Stream has been increasingly chosen by a large chunk of students after completion of 10th standard, due to its attractiveness in terms of finding early employment and also beginning of entrepreneurship.

              </p>
              <div class="separator">
                <i class="fa fa-graduation-cap"></i>
              </div>
              <script type="text/javascript">
               $(document).ready(function() {
                  // Configure/customize these variables.
                  var showChar = 200;  // How many characters are shown by default
                  var ellipsestext = "...";
                  var moretext = "Read more &#8594;";
                  var lesstext = "Show less &#8592;";
                  

                  $('.more').each(function() {
                      var content = $(this).html();
               
                      if(content.length > showChar) {
               
                          var c = content.substr(0, showChar);
                          var h = content.substr(showChar, content.length - showChar);
               
                          var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
               
                          $(this).html(html);
                      }
               
                  });
               
                  $(".morelink").click(function(){
                      if($(this).hasClass("less")) {
                          $(this).removeClass("less");
                          $(this).html(moretext);
                      } else {
                          $(this).addClass("less");
                          $(this).html(lesstext);
                      }
                      $(this).parent().prev().toggle();
                      $(this).prev().toggle();
                      return false;
                  });
              });
              </script>

              <div class="row">
                <div class="col-md-12">
                  <ul id="myTab2" class="nav nav-pills boot-tabs">
                    <li class="active"><a href="#home2" data-toggle="tab">Objective</a></li>
                    <li><a href="#profile2" data-toggle="tab">Details</a></li>
                    <li><a href="#profile3" data-toggle="tab">Syllabus</a></li>
                    <li><a class=" bs-modal-ajax-load " data-toggle="modal" data-target="#BSParentModal" data-toggle="tab" href="ajax-load/reservation-form.php">Enroll Now</a></li>
                  </ul>
                  <div id="myTabContent2" class="tab-content">
                    <div class="tab-pane fade in active" id="home2">
                      <p>At ‘Phoenix Tutorials’, we believe that every student has the potential to excel & score great results; however level of success in exam is determined by an ideal mix of ‘teaching methodology’, ‘faculty profile’, ‘structured mentoring’ & ‘quality of study material’. Each & every ‘module’ at <strong>PHOENIX TUTORIALS</strong>  is based on this philosophy.</p>
                    </div>
                    <div class="tab-pane fade" id="profile2">
                      <p><strong> Experienced Faculty with Proven Track Record & Industry Experience</strong><br>

						We have Highly Qualified Industry Experts like CA’s, CS, Professors & Senior Teachers as our team who have many years of teaching experience & are known for producing excellent results.<br>

						<strong>Customized Teaching Technique</strong><br>

						The Faculty & Management at Phoenix Tutorials has mastered the art of ‘effective teaching’. We customize method of teaching as per student’s grasping power & speed.</p>
                    </div>
                    <div class="tab-pane fade" id="profile3">
                      <!-- <div class="col-md-7 hidden-xs pl-40"> -->
                        <h3 class="line-bottom mt-20 line-height-1"><span class="text-theme-color-2">Higher Secondary</span>
                        <a href="resources/syllabus11th.docx" title="Download Syllabus 11"> <i style="padding-left: 40%;" class="fa fa-download" aria-hidden="true"></i>11<sup>th</sup></a>
                        <a href="resources/syllabus12th.docx" title="Download Syllabus 12"> <i style="padding-left: 40%;" class="fa fa-download" aria-hidden="true"></i>12<sup>th</sup></a></h3>
                       <div id="accordion1" class="panel-group accordion">
                          <!-- <div class="panel">
                            <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span>English Grammer <small>11<sup>th</sup></small></s</a> </div>
                            <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li>The Tenses Revision of the tenses learned upto Std. X.</li>
                                    Advanced level of the above items.
                                    <li> Types of sentences Simple, Compound, Complex, Relative clauses.</li>
                                    <li> Clauses Proper usage and synthesis.
                                    <li> Verbs of perception Uses of see, hear, smell, feel, taste and know, have, own think, etc.</li>
                                    <li> Voice Statements, questions, indirect objects, object + object complement, negatives. (Advanced level) (Conversion)</li>
                                    <li> Reported Speech Advanced level, continuous short paragraph consisting of three to four connected sentences.</li>
                                   <li> Collocation The co-occurrence of lexical items.</li>
                                    <li> Uses of ,too, and ,enough, Conversion and synthesis</li>
                                    <li> Modal Auxiliaries Will, shall, can, could</li>
                                    <li> Articles Uses and omission of a, an, the.</li>
                                    <li> Prepositions Indicating time, place and direction.</li>
                                    <li> Linking words/discourse markers
                                    Use of linking words in sentences and in larger units.</li>
                                    <li> Word formation Changing word forms-nouns, verbs, adverbs, adjectives</li>
                                    <li>Infinitives, Gerunds Usage and synthesis and Participles</li>
                                    <li>The following weightage is to be given to the various aspects of the syllabus.</li>
                                    <li>1 Reading Skill (Textual and non-textual) 40%</li>
                                    <li>2 Grammar 15%</li>
                                    <li>3 Writing skill 25%</li>
                                    <li>4 Oral test 20%</li>

                                </ul>
                              </div>
                            </div>
                          </div> 
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span>2.Book-keeping and Accountancy<sup>11th</sup></a> </div>
                            <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li> 1 A. Introduction of Book-keeping and Accountancy</li>
                                   <li> A.1 Meaning and definition</li>
                                   <li> A.2 Objectives</li>
                                   <li> A.3 Importance and Utility</li>
                                   <li> A.4 Difference between Book-Keeping and Accountancy</li>
                                   <li> A.5 Basis of Accounting - Cash basis and Accrual basis.</li>
                                   <li> A.6 Qualitative characteristics of accounting information</li>
                                   <li> A.7 Financial Accounting, Cost Accounting, Management Accounting</li>
                                   <li>  B. Basic Accounting Terminologies</li>
                                   <li> B.1 Business Transactions  Cash Transactions and Credit Transactions</li>
                                   <li> B.2 Goods</li>
                                   <li> B.3 Profit, loss-Operating and Non-operating profits, Normal gains and abnormal gains with examples. Difference between profit and Income</li>
                                   <li> B.4 Assets, Liabilities, Net-worth/ Owners Equity Assets: Fixed/ Current/Tangible/ Intangible/ fictitious</li>
                                   <li> B.5 Contingent Liability</li>
                                   <li> B.6 Capital, Drawings</li>
                                   <li> B.7 Debtors, Creditors</li>
                                   <li> B.8 Capital Expenditure, Revenue and Deferred Revenue Expenditure</li>
                                   <li> B.9 Cash discount and Trade discount</li>
                                   <li> B.10 Solvent and Insolvent</li>
                                   <li> B.11 Accounting Year</li>
                                   <li> B.12 Trading Concerns and Not for Profit Concerns</li>
                                   <li> B.13 Goodwill</li>
                                  <li>  C. Accounting Concepts, Conventions and Principles and Indian</li>
                                   <li> Accounting standards concepts and objectives</li>
                                   <li> C.1 Meaning and Importance</li>
                                   <li> C.2 Business Entity</li>
                                   <li> C.3 Money measurement</li>
                                   <li> C.4 Cost</li>
                                   <li> C. 5 Consistency</li>
                                   <li> C. 6 Conservatism</li>
                                   <li> C. 7 Going Concern</li>
                                   <li> C. 8 Realization</li>
                                   <li> C. 9 Accrual</li>
                                   <li> C.10 Dual Aspect</li>
                                   <li> C.11 Disclosure</li>
                                   <li> C.12 Materiality</li>
                                   <li> C.13 Revenue</li>
                                   <li> C.14 Matching</li>
                                   <li> C.15 Accounting Standards</li>
                                   <li> 2. A. Meaning and fundamentals of Double Entry Book-keeping System</li>
                                   <li> A.1 Study of Double Entry Book-keeping system.</li>
                                   <li> A.2 Advantages of Double Entry Bookkeeping system.</li>
                                   <li> A.3 Comparison of Double Entry Bookkeeping system with Conventional Accounting system.</li>
                                   <li> B. Classification of Accounts and Accounting equations Rules</li>
                                   <li> B.1 Types of accounts-personal,</li>
                                    Impersonal accounts- Real accounts, Nominal accounts.</li>
                                   <li> B.2 Rules for different accounts for passing entries.</li>
                                   <li> B.3 Illustrations</li>
                                   <li> B.4 Accounting equations Assets,
                                    Liabilities, Revenue and capital
                                    expenses</li>
                                   <li> B.5 Brief: Explanation about IFRS</li>
                                   <li> 3. Source documents required for Accounting</li>
                                   <li> 3. 1 Meaning, contents and specimen.</li>
                                   <li> 3. 2 Voucher-internal, external voucher</li>
                                   <li> 3. 3 Petty cash and cash voucher</li>
                                   <li> 3. 4 Cash and Credit memo</li>
                                   <li> 3. 5 Receipt</li>
                                   <li> 3. 6 Debit and Credit note</li>
                                   <li> 3. 7 Pay-in-slip</li>
                                   <li> 3. 8 Withdrawal slip</li>
                                   <li> 3. 9 Cheque-Bearer, Order, Crossed, Account payee</li>
                                   <li> 3.10 Bank pass book, Bank Statement and Bank advice</li>
                                   <li> 4. Journal</li>
                                   <li> 4.1 Meaning, Importance and utility of Journal.</li>
                                   <li> 4.2 Specimen of Journal</li>
                                   <li> 4.3 Writing of Journal entries</li>
                                   <li> 5. Subsidiary Books</li>
                                   <li> 5.1 Meaning, need and specimen of different Subsidiary Books.</li>
                                   <li> 5.2 Simple Cash Book with cash column only</li>
                                   <li> 5.3 Cash Book with cash and bank columns</li>
                                   <li> 5.4 Analytical Petty Cash Book imprest system.</li>
                                   <li> 5.5 Purchase Book</li>
                                   <li> 5.6 Sales Book</li>
                                   <li> 5.7 Purchase Return Book</li>
                                   <li> 5.8 Sales Return Book</li>
                                   <li> 5.9 Bank Book</li>
                                   <li> 5.10 Journal Proper, Transactions of Discounts to be taken in Journal Proper</li>
                                   <li> 6. Ledger</li>
                                   <li> 6.1 Meaning, need and contents of ledger be explained</li>
                                   <li> 6.2 Specimen of ledger</li>
                                   <li> 6.3 Posting of entries from Subsidiary books to ledger</li>
                                   <li> 6.4 Balancing of ledger accounts.</li>
                                   <li> 7. Bank Reconciliation Statement</li>
                                   <li> 7.1 Meaning, need and importance</li>
                                   <li> 7.2 Reasons for difference in bank balance as per cash book and balance as per bank pass book</li>
                                   <li> 7.3 Specimen of Bank Reconciliation Statement</li>
                                   <li> 7.4 Preparation of Bank Reconciliation Statement</li>
                                   <li> 8. Trial balance</li>
                                   <li> 8.1 Meaning and Purpose</li>
                                   <li> 8.2 Specimen of Trial Balance</li>
                                   <li> 8.3 Preparation of Trial Balance from given balances of accounts.</li>
                                   <li> 9. Errors and their rectification</li>
                                   <li> 9.1 Meaning and effects of errors.</li>
                                   <li> 9.2 Types of errors - Errors of principles, Errors of Ommission, Errors of commission and Compensating Errors.</li>
                                   <li> 9.3 Steps to locate errors</li>
                                   <li> 9.4 Errors affecting and not affecting Trial Balance</li>
                                   <li> 9.5 Treatment of balance of suspense account</li>
                                   <li> 9.6 Rectification entries</li>
                                   <li> 10. Depreciation, Provisions and Reserves</li>
                                   <li> 10.1 Depreciation : Meaning, Need and Factors affecting depreciation.</li>
                                   <li> 10.2 Methods of computation of Depreciation : Straight Line Method, Written Down Value Method (Excluding Change in
                                    method)</li>
                                   <li> 10.3 Accounting Treatment of Depreciation : By charging to asset account by creating Provision for depreciation / accumulated depreciation account.</li>
                                   <li> 10.4 Provisions and Reserves : Meaning, Objectives and Difference between provisions and Reserves.</li>
                                   <li> 10.5 Types of Reserves : Revenue Reserve, Capital Reserve, General
                                    Reserve, Specific reserves, Secret reserves.</li>
                                   <li> 11. Financial statements of Proprietary concern
                                    Financial Statements- Meaning, objective and Importance</li>
                                   <li> 11.1 Preparation of Trading Account</li>
                                   <li> 11.2 Preparation of Profit and Loss Account</li>
                                   <li> 11.3 Preparation of Balance Sheet</li>
                                   <li> 11.4 Effects of following adjustments only</li>
                                   <li> a. Closing stock</li>
                                   <li> b. Depreciation</li>
                                   <li> c. Bad and Doubtful debts</li>
                                   <li> d. Provision for discount on Debtors
                                    and Creditors</li>
                                   <li> e. Outstanding expenses</li>
                                   <li> f. Prepaid expenses</li>
                                   <li> g. Accrued income</li>
                                   <li> h. Income received in advance</li>
                                   <li> i. Drawings</li>
                                   <li> j. Goods distributed as free sample</li>
                                   <li> 12. Computer in Accounting </li>
                                   <li> 12.1 Introduction to Computer Accounting System :
                                    Components of CAS, Features, Grouping of Accounts, using software of C.A.S. </li>
                                   <li> 12.2 Application of computer accounting Automation of accounting process,
                                    designing accounting reports, data exchange with other information system.</li>
                                    Project Work</li>
                                   <li> 1. A study of non-operating expenses of proprietory concern with examples and
                                    documents.</li>
                                   <li> 2. A study of various policies of company as AS-2, AS-6 and AS-10 from annual report.</li>
                                   <li> 3. A comparative study of conventional and modern system of accounting.</li>
                                   <li> 4. Analytical study of all assets or documents in your family.</li>
                                   <li> 5. Collection of all types of documents used in the banks and office.</li>
                                   <li> 6. A report on organised exhibition on all source documents in your college.</li>
                                   <li> 7. Visit to any proprietory concern and preparation of journal of 8 days with the help of business transactions.</li>
                                   <li> 8. A record of different imaginery transactions for 10 days of a new business
                                    with capital of 1,00,000, like Stationery shop / Newspaper stall / Medical store /
                                    Vegetable stall.</li>
                                   <li> Note :
                                    The above list of projects is given only as guidelines. Students are free to select any topic for project related to the syllabus </li>
                                </ul>
                              </div>
                            </div>
                          </div> -->
                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span>Class 11<sup>th</sup></a> </div>
                            <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li>Accountancy &nbsp;  &nbsp; &nbsp;<a href="resources/class 11/11_accountancy_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Biology &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11_biology_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Business Studies EnglishMedium &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11_BusinessStudies_EnglishMedium_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Chemistry &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11_chemistry_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Computer Science &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11_ComputerScience_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Economics English Medium &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11Economics_EnglishMedium_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Engineering Graphics &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11_EngineeringGraphics_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>English Core &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11_english_core_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Informatic Practice &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11_InformaticPractice_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Math English Medium &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11_math_englishmedium_2017_18_.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Math English Medium &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11_math_englishmedium_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li> &nbsp;  &nbsp; &nbsp; physicaleducation English Medium<a href="resources/class 11/11_physicaleducation_EnglishMedium_2017_18 (1).pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>PHYSICS THEORY &nbsp;  &nbsp; &nbsp; <a href="resources/class 11/11_PHYSICSTHEORY_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>

                                  
                                </ul>
                              </div>
                            </div>
                          </div>

                          <div class="panel">
                            <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion19" class="" aria-expanded="true"> <span class="open-sub"></span>Class 12<sup>th</sup></a> </div>
                            <div id="accordion19" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                              <div class="panel-content">
                                <ul class="list check">
                                  <li>Accountancy &nbsp;  &nbsp; &nbsp;<a href="resources/class 12/12_ACCOUNTANCY_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Biology &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_BIOLOGY_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Business Studies EnglishMedium &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_businessstudies_engmed_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Chemistry &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_CHEMISTRY_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Computer Science &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_ComputerScience_Language Cpp_dt_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Chemistry &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_CHEMISTRY_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Computer Science Python &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_ComputerScience_Python_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Economics English Medium &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_Economics_Englishmed_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Engineering Graphics &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_engeerneringGraphics_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>English Core &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_ENGLISHCORE_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>JAVA  &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_Java_207_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>Math English Medium &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_MATHEMATICS_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  
                                  <li> &nbsp;  &nbsp; &nbsp; physicaleducation English Medium<a href="resources/class 12/12_PhysicalEducation_Englishmed_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                  <li>PHYSICS THEORY &nbsp;  &nbsp; &nbsp; <a href="resources/class 12/12_Physics_2017_18.pdf" target="_new"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
              <div class="widget">
                <h4 class="widget-title line-bottom">Courses List</h4>
                <div class="services-list">
                  <ul class="list list-border angle-double-right">
                    <li ><a href="primary.php">Secondary</a></li>
                    <li class="active"><a href="javascript:void()">Higher Secondary</a></li>
                    <li ><a href="diploma.php">Diploma </a></li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Opening Hours</h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span> Mon - Tues :  </span>
                      <div class="value pull-right"> 8.00 am - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Wednes - Thurs :</span>
                      <div class="value pull-right"> 8.00 am - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Fri : </span>
                      <div class="value pull-right"> 8.00 am - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Sun : </span>
                      <div class="value pull-right"> Closed </div>
                    </li>
                    <li class="clearfix"> <span> Duration : </span>
                      <div class="value pull-right"> 12 Months </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Venue</h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span>   1/4 Shiraj Bhavan, Elphinstone   </span>
                      <div class="value pull-right"> <a href="https://www.google.co.in/maps/place/18%C2%B057'58.1%22N+72%C2%B048'48.6%22E/@18.966134,72.8113003,747m/data=!3m2!1e3!4b1!4m5!3m4!1s0x0:0x0!8m2!3d18.966134!4d72.813489?hl=en" target="_blank"> Google map</a> </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <div class="mt-30 p-30" style="border: 10px solid #f1f1f1;">
                  <h5 class="text-theme-colored title-border mb-20">student's Feedback</h5>
                  
                  <div class="testimonial-carousel-info owl-nav-top">
                  <?php
             foreach ($output as $row) {
              echo'
                    <div class="item">
                      <div class="comment">
                        <p>'.$row['feedback'].'</p>
                      </div>
                      <div class="content mt-20">
                        <div class="thumb pull-right">
                          <img class="img-circle" src="academy_admin/images/stud-feedback/'.$row['student_photo'] .'" alt="' . $row['name'] . '">
                        </div>
                        <div class="patient-details text-right pull-right mr-20 mt-10">
                          <h5 class="author">'.$row['name'].'</h5>
                          <h6 class="title">'.$row['department'].'</h6>
                        </div>
                      </div>
                    </div>';
                  }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <?php include_once('footer.php'); ?>
</div>

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<!-- <script src="js/custom.js"></script> -->

</body>

</html>