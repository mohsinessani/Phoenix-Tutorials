<?php
  include_once("tutorial.php");
$post = new Post();

 include_once('academy_admin/source/config.php');
   $id = $_GET['id'];
  try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Make a sql query
            $sql = "SELECT * FROM post where id=$id ";

            //Prepare sql query
            $stmt = $conn->prepare($sql);
            
            // $stmt->bindParam(':about_id', $_GET['id']);

            $stmt->execute();

            if($stmt->execute())
        {
            $output = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
<meta name="description" content="Naimah IT academy | Education & Courses Networking Hardware Security" />
<meta name="keywords" content="academy, course, education, education cources, Hardware , software, Networking , Security , learning," />
<meta name="author" content="Naveed " />
<!-- Page Title -->
<title>Naimah IT Academy || Post View</title>

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

<style type="text/css">
  .fb_iframe_widget > span{
  max-height:348px !important;
}
iframe{
  max-height: 348px !important;
}

.row{ margin:20px 20px 20px 20px;}
.ratings{ font-size:25px !important;}
.thumbnail img {
    width: 100%;
}

.ratings {
    padding-right: 10px;
    padding-left: 10px;
    color: #d17581;
}

.thumbnail {
    padding: 0;
}

.thumbnail .caption-full {
    padding: 9px;
    color: #333;
}
.glyphicon-thumbs-up:hover{ color:#008000; cursor:pointer;}
.glyphicon-thumbs-down:hover{ color: #E10000; cursor:pointer;}
.counter{ color:#333333;}

</style>
<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<script type="text/javascript">
  function cwRating(id,type,target){
  $.ajax({
    type:'POST',
    url:'rating.php',
    data:'id='+id+'&type='+type,
    success:function(msg){
      if(msg == 'err'){
        alert('Some problem occured, please try again.');
      }else{
        $('#'+target).html(msg);
      }
    }
  });
}
</script>

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
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <!-- <h2 class="title text-white text-uppercase"><?=$row1['post_title']?></h2> -->
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Events</a></li>
                <li class="active text-white">Blogs</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <?php 
    foreach ($output as $row1 ) {
    echo '
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-sm-12">

            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="academy_admin/images/blogs/'.$row1['post_image'].'" alt="'.$row1['post_title'].'" class="img-responsive img-fullwidth" title="'.$row1['post_title'].'" data-toggle="tooltip" data-placement="right"> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600">'.$row1['post_date'].'</li>
                        <!-- <li class="font-12 text-white text-uppercase">Feb</li> -->
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="#">'.$row1['post_title'].'</a></h3>
                        <span class="glyphicon glyphicon-thumbs-up" onClick="cwRating('.$row1['id'].',1,like_count'.$row1['id'].')"></span>&nbsp;
                    <!-- Like Counter -->
                    <span class="counter" id="like_count'.$row1['id'].'">'.$row1['like_num'].'</span>&nbsp;&nbsp;&nbsp;
                    
                    <!-- Dislike Icon HTML -->
                    <span class="glyphicon glyphicon-thumbs-down" onClick="cwRating('.$row1['id'].',0,dislike_count'.$row1['id'].')"></span>&nbsp;
                    <!-- Dislike Counter -->
                    <span class="counter" id="dislike_count'.$row1['id'].'">'.$row1['dislike_num'].'</span>
                      </div>
                    </div>
                  </div>
                  '.$row1['post_description'].'
                  <blockquote class="theme-colored pt-20 pb-20">
                    <p class="mb-15">'.$row1['post_tag'].'</p>
                    <footer> Prof.<cite title="Source Title"> Naveed sir.</cite></footer>
                  </blockquote>
                  <!-- <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <blockquote class="theme-colored pt-20 pb-20">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. --></p>
                  <div class="mt-30 mb-0">
                    <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                    <ul class="styled-icons icon-circled m-0">
                      <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                    </ul>
                  </div>
                </div>
              </article>';
              }
              ?>
              <!-- <div class="author-details media-post">
                <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="images/blog/author.jpg"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18">John Doe</a></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <ul class="styled-icons square-sm m-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </div> -->
              <div id="comments" class="comments-area pt-50">

                <!-- Facebook Comments plugin -->
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "../../../../../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=409125935834772";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>

                <!-- <h3 id="comments-title"><span><fb:comments-count href="http://pc1/themeforest/thememascot/godown-latest/demo/blog-single-facebook-comments.html"></fb:comments-count></span> Comments</h3> -->
                
               <!--  <div class="fb-comments" data-href="http://pc1/themeforest/thememascot/godown-latest/demo/blog-single-facebook-comments.html" data-numposts="5"></div> -->
                <!-- Facebook Comments end -->

              </div>
            </div>
          </div>
          <!-- <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30"> -->
              <!-- <div class="widget">
                <h5 class="widget-title line-bottom">Search box</h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div> -->
              <!-- <div class="widget">
                <h5 class="widget-title line-bottom">Latest News</h5>
                <div class="latest-posts">
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                      <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                    </div>
                  </article>
                </div>
              </div> -->
              
           <!--  </div>
          </div> -->
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->

  <!-- Footer -->
 <?php include_once('footer.php'); ?>
</body>


</html>