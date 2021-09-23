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
<title>Hire Me - Aman Singh Designer</title>

<?php
    include_once("template/sinbros-css.php");
    include_once("template/header.php");
?>


        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box text-center">
                            <div class="page-title-heading">
                                <h1 class="title"> Contact Us</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; : : &nbsp;</span>
                                <span> Contact Us</span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">

            <!-- services-slide-section -->
            <section class="ttm-row contact-section clearfix">
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-lg-8 offset-lg-2">
                            <!-- section-title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
                                    <h5>Contact Us</h5>
                                    <h2 class="title">Drop us a line</h2>
                                </div>
                            </div><!-- section-title end -->
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row -->
                    <form id="ttm-quote-form" class="row ttm-quote-form clearfix" method="post" action="#">
                        <div class="col-sm-12 col-md-12">
                                        
                                        <div id="success" class="alert alert-success">
                                            Message Sent Successfully...
                                        </div>
                                    </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <input id="name" type="text" class="form-control bg-white border" placeholder="Full Name*" required="required">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <input id="mobile" type="text" placeholder="Phone Number*" required="required" class="form-control bg-white border">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Email Address*" required="required" class="form-control bg-white border">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <input id="sub" type="text" placeholder="Subject*" required="required" class="form-control bg-white border">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea id="msg" rows="5" placeholder="Write A Massage..." required="required" class="form-control bg-white border"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <button type="submit" onclick="contact_insert()" id="submit" class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor mt-20" value="">
                                    Submit Massage
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- row end-->
                </div>
            </section>
            <!-- services-slide-section end -->

            <!-- map-section -->
            <div class="ttm-row contact-box-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box style8 text-center box-shadow">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-bgcolor-white ttm-icon_element-size-md ttm-icon_element-style-round"> 
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div><!-- featured-icon -->
                                <div class="featured-content"><!-- featured-content -->
                                    <div class="featured-title">
                                        <h5>Email</h5><!-- featured-title -->
                                    </div>
                                    <div class="featured-desc"><!-- featured-description -->
                                        <p>
                                            <a href="mailto:amansinghdesigner@gmail.com">amansinghdesigner@gmail.com</a><br>
                                            <a href="mailto:contact@sinbros.com">contact@sinbros.com</a>
                                        </p>
                                    </div>
                                </div><!-- featured-content END-->
                            </div><!-- featured-icon-box -->
                        </div>
                        <div class="col-lg-4">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box style8 text-center box-shadow">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-bgcolor-white ttm-icon_element-size-md ttm-icon_element-style-round"> 
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div><!-- featured-icon -->
                                <div class="featured-content"><!-- featured-content -->
                                    <div class="featured-title">
                                        <h5>Phone</h5><!-- featured-title -->
                                    </div>
                                    <div class="featured-desc"><!-- featured-description -->
                                        <p>
                                            +91 88666 36834<br>
                                            +91 70168 71992
                                        </p>
                                    </div>
                                </div><!-- featured-content END-->
                            </div><!-- featured-icon-box -->
                        </div>
                        <div class="col-lg-4">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box style8 text-center box-shadow">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-bgcolor-white ttm-icon_element-size-md ttm-icon_element-style-round"> 
                                        <i class="ti ti-target"></i>
                                    </div>
                                </div><!-- featured-icon -->
                                <div class="featured-content"><!-- featured-content -->
                                    <div class="featured-title">
                                        <h5>Address</h5><!-- featured-title -->
                                    </div>
                                    <div class="featured-desc"><!-- featured-description -->
                                        <p>
                                            101, First Floor, Shivalik A/C Market<br>
                                            Surat - 394210
                                        </p>
                                    </div>
                                </div><!-- featured-content END-->
                            </div><!-- featured-icon-box -->
                        </div>  
                    </div>
                </div>
            </div>
            <!-- map-section end -->

            <!-- map-section -->
            <div class="ttm-row map-section clearfix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!--map-start-->
                            <div class="map-wrapper">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14882.603331946953!2d72.8414233!3d21.1662895!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbbc6966ba87eaa3f!2sAman%20Singh%20-%20Graphic%20Designer%20%26%20Digital%20Marketer%20in%20Surat!5e0!3m2!1sen!2sin!4v1594468413278!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <!--map-end-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- map-section end -->

        </div><!--site-main end-->

<?php
	include("template/footer.php");
    include("template/sinbros-javascript.php");
?>

<script>
	
	$("#success").hide();
	

	function contact_insert()
	{
		event.preventDefault();
		var name = $('#name').val();
		var mobile = $('#mobile').val();
		var email = $('#email').val();
		var sub = $('#sub').val();
		var msg = $('#msg').val();

		// alert(name,mobile,email,sub,con); 

		$.ajax({
		    type: "GET",
		    url: 'contact_insert.php',
		    data: {name:name,mobile:mobile,email:email,sub:sub,msg:msg},
		    success: function(response)
		    {
		       if(response==1)
		       {
		       		$("#success").show();
		       		$('#name').val('');
		       		$('#mobile').val('');
		       		$('#email').val('');
		       		$('#sub').val('');
		       		$('#msg').val('');
		       }
		    }
		});
	}
</script>

<script type="text/javascript">
	$(document).ready(function(e){
      	$(".contact").addClass('active');
  	});
    // document.title = 'Sinbros - Contact Us';
  	// history.pushState("object or string representing the state of the page", "new title", "blog#blog_01");
</script>