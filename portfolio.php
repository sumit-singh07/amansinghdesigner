<!-- <?php
	// include("controller.php");
	// error_reporting(0);
	// $ob = new controller;
	// $success_msg = $ob->insert_contact();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Portfolio - Sinbros</title>
<link href="lightbox/css/lightbox.css" rel="stylesheet" />

<script src="lightbox/js/lightbox-plus-jquery.js"></script>

<?php
    include_once("template/sinbros-css.php");
    include_once("template/header.php");
    error_reporting(0);
?>

<?php
    include("connection.php");
    $query = "select * from portfolio where port_category='Logo' order by port_id desc";
    $sql = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($sql))
    {
        $rs_logo[] = $row;
    }

    $query = "select * from portfolio where port_category='Social' order by port_id desc";
    $sql = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($sql))
    {
        $rs_social[] = $row;
    }
?>


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h1 class="title">Portfolio</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                                <span> Portfolio</span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">
            <section class="ttm-row grid-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="ttm-tabs text-center ttm-tab-style-classic style2">
                                <ul class="tabs mb-20"><!-- tabs -->
                                    <li class="tab active"><a href="#">Logo Design</a></li>
                                    <li class="tab"><a href="#">Social Media Design</a></li>
                                </ul><!-- tabs end-->
                                <div class="content-tab width-100"><!--content-tabs -->
                                  

                                    <!-- content-inner -->
                                    <div class="content-inner active">
                                        <!-- row -->
                                        <div class="row multi-columns-row ttm-boxes-spacing-5px">
                                            <?php
                                            for($i=0;$i<count($rs_logo);$i=$i+1)
                                            {?>
                                            <div class="col-lg-4 col-md-6 ttm-box-col-wrapper">
                                                <!-- featured-imagebox-portfolio -->
                                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                    <!-- featured-thumbnail -->
                                                    <a href="image/portfolio/<?php echo $rs_logo[$i]['port_image']?>" data-lightbox="mygallery"><img class="img-fluid" src="image/portfolio/<?php echo $rs_logo[$i]['port_image']?>" alt="image"></a>
                                                </div><!-- featured-thumbnail -->
                                            </div>
                                            <?php }?>
                                        </div><!-- row end -->
                                    </div>
                                    <!-- content-inner -->

                                    <!-- content-inner -->
                                    <div class="content-inner active">
                                        <!-- row -->
                                        <div class="row multi-columns-row ttm-boxes-spacing-5px">
                                            <?php
                                            for($i=0;$i<count($rs_social);$i=$i+1)
                                            {?>
                                            <div class="col-lg-4 col-md-6 ttm-box-col-wrapper">
                                                <!-- featured-imagebox-portfolio -->
                                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                                    <!-- featured-thumbnail -->
                                                    <a href="image/portfolio/<?php echo $rs_social[$i]['port_image']?>" data-lightbox="mygallery"><img class="img-fluid" src="image/portfolio/<?php echo $rs_social[$i]['port_image']?>" alt="image"></a>
                                                </div><!-- featured-thumbnail -->
                                            </div>
                                            <?php }?>
                                        </div><!-- row end -->
                                    </div>
                                    <!-- content-inner -->

                                    

                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                    
                </div>
            </section>
            <!-- process-section end -->
        </div><!--site-main end-->

<?php
    include("template/footer.php");
    include("template/sinbros-javascript.php");
?>

<script type="text/javascript">
	$(document).ready(function(e){
      	$(".portfolio").addClass('active');
  	});

  	// history.pushState("object or string representing the state of the page", "new title", "blog#blog_01");
</script>