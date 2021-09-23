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
<title>YouTube - Aman Singh Designer</title>
<link href="lightbox/css/lightbox.css" rel="stylesheet" />

<script src="lightbox/js/lightbox-plus-jquery.js"></script>
<style>

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 33%; /* IE10 */
  flex: 33%;
  max-width: 33%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>

<?php
    include_once("template/sinbros-css.php");
    include_once("template/header.php");
?>

<?php
     include("connection.php");
    $query = "select * from portfolio order by port_id";
    $sql = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($sql))
    {
        $rs[] = $row;
    }
?>


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h1 class="title">YouTube Videos</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                                <span> YouTube Videos</span>
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
                        <div class="col-sm-6">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/DRSCsWzQ_KY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-sm-6">
                            <iframe width="100%"  height="300" src="https://www.youtube.com/embed/GvJG1FGkqf0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        
                    </div><!-- row end -->
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/ppkuTmGn0L4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-sm-6">
                            <iframe width="100%"  height="300" src="https://www.youtube.com/embed/idU72P8FtJ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        
                    </div><!-- row end -->
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/GRDjD2j2_BU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-sm-6">
                            <iframe width="100%"  height="300" src="https://www.youtube.com/embed/jrJX9qsJyCs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
        $(".learn").addClass('active');
    });
    $(document).ready(function(e){
        $(".youtube").addClass('active');
    });

  	// history.pushState("object or string representing the state of the page", "new title", "blog#blog_01");
</script>