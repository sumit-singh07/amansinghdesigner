<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Amam Singh - Graphic Designer & Digital Marketer in Surat </title>
<?php
    include_once("template/sinbros-css.php");
    include_once("template/header.php");
?>
<?php
    include("connection.php");
    $query = "select * from category order by category_rank";
    $sql = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($sql))
    {
        $rs[] = $row;
    }
?>

        
        <!-- START homeclassicmain REVOLUTION SLIDER 6.0.1 -->
        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">
            <rs-module id="rev_slider_1_1" style="" data-version="6.0.1" class="rev_slider_1_1_height">
                <rs-slides>
                    <!-- rs-slide -->
                    <rs-slide data-key="rs-3" data-title="Slide" data-thumb="images/slides/slider-mainbg-003.jpg" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">
                        <img src="images/slides/slider-mainbg-003.jpg" title="slider-mainbg-003" width="1920" height="790" class="rev-slidebg" data-no-retina>
                        <rs-layer
                            id="slider-2-slide-1-layer-0" 
                            data-type="text"
                            data-color="#2d4a8a"
                            data-rsp_ch="on"
                            data-xy="xo:50px,50px,40px,-164px;yo:326px,196px,94px,61px;"
                            data-text="w:normal;s:18,18,15,10;l:25,25,15,9;fw:500;"
                            data-vbility="t,t,t,f"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Linear.easeNone;st:120;sp:400;sR:120;"
                            data-frame_999="o:0;st:w;sR:8480;"
                            >Delight your Customers 
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-1-layer-1"
                            class="ttm-bgcolor-skincolor" 
                            data-type="shape"
                            data-rsp_ch="on"
                            data-xy="xo:274px,274px,-119px,-73px;yo:339px,209px,136px,83px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:36px,36px,22px,13px;h:2px,2px,1px,1px;"
                            data-vbility="t,t,f,f"
                            data-frame_0="x:50,50,31,19;"
                            data-frame_1="e:Linear.easeNone;st:190;sp:200;sR:190;"
                            data-frame_999="o:0;st:w;sR:8610;"
                            > 
                        </rs-layer>
                        <a
                            id="slider-2-slide-1-layer-2" 
                            class="rs-layer ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-darkgrey"
                            href="#" target="_self" rel="nofollow"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:279px,279px,210px,0;yo:609px,468px,310px,233px;"
                            data-text="w:normal;s:15,15,12,11;l:29,29,25,30;fw:600;a:center;"
                            data-border="bos:solid;boc:#263045;bow:1px,1px,1px,1px;"
                            data-padding="t:11,11,7,4;r:35,35,22,14;b:11,11,7,4;l:35,35,22,14;"
                            data-frame_0="y:50,50,31,19;"
                            data-frame_1="st:760;sp:500;sR:760;"
                            data-frame_999="o:0;st:w;sR:7740;"
                            >Hire Me  
                        </a>
                        <rs-layer
                            id="slider-2-slide-1-layer-3" 
                            data-type="text"
                            data-color="#263045"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:363px,233px,124px,59px;"
                            data-text="w:normal;s:62,52,45,37;l:70,60,50,60;fw:600;"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Linear.easeNone;st:260;sp:800;sR:260;"
                            data-frame_999="o:0;st:w;sR:7940;"
                            >I Help Brands in  
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-1-layer-4" 
                            data-type="text"
                            data-color="#263045"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:436px,294px,173px,104px;"
                            data-text="w:normal;s:62,52,45,37;l:75,65,60,60;fw:600;"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="st:410;sp:800;sR:410;"
                            data-frame_999="o:0;st:w;sR:7790;"
                            ><strong class="ttm-textcolor-skincolor">Growth Strategy</strong> 
                        </rs-layer>
                        <a
                            id="slider-2-slide-1-layer-5" 
                            class="rs-layer ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor"
                            href="#" target="_self" rel="nofollow"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:608px,468px,309px,180px;"
                            data-text="w:normal;s:15,15,12,11;l:27,27,25,30;fw:600;a:center;"
                            data-padding="t:12,12,8,5;r:35,35,22,14;b:15,15,9,6;l:35,35,22,14;"
                            data-frame_0="y:50,50,31,19;"
                            data-frame_1="st:720;sp:500;sR:720;"
                            data-frame_999="o:0;st:w;sR:7780;"
                            >View Portfolio 
                        </a>
                        <rs-layer
                            id="slider-2-slide-1-layer-6" 
                            data-type="image"
                            data-rsp_ch="on"
                            data-xy="x:r;xo:-70px,-70px,-123px,-267px;yo:220px,90px,66px,36px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:578px,478px,362px,223px;h:564px,464px,353px,217px;"
                            data-vbility="t,t,t,f"
                            data-frame_0="sX:0.9;sY:0.9;"
                            data-frame_1="e:Linear.easeNone;st:100;sp:400;sR:100;"
                            data-frame_999="o:0;st:w;sR:8500;"
                            ><img src="images/slides/slides-01.png" alt="singl-image" width="578" height="564" data-no-retina> 
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-1-layer-7"
                            class="grey-bg-shape" 
                            data-type="shape"
                            data-rsp_ch="on"
                            data-xy="x:r;xo:-7px,-7px,-192px,-118px;yo:369px,239px,123px,75px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:30px,30px,18px,11px;h:30px,30px,18px,11px;"
                            data-vbility="t,t,f,f"
                            data-border="bor:50px,50px,50px,50px;"
                            data-frame_0="x:right;"
                            data-frame_1="st:140;sp:1000;sR:140;"
                            data-frame_999="o:1;st:w;sp:1200;sR:7860;"
                            data-frame_999_chars="e:Power4.easeInOut;d:10;x:-105%;o:0;rZ:-90deg;"
                            data-frame_999_mask="u:t;"
                        > 
                        </rs-layer>

                        <rs-layer
                            id="slider-2-slide-1-layer-8"
                            class="ttm-bgcolor-darkgrey" 
                            data-type="shape"
                            data-rsp_ch="on"
                            data-xy="x:r;xo:65px,65px,-165px,-101px;yo:670px,540px,301px,185px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:26px,26px,15px,9px;h:26px,26px,15px,9px;"
                            data-vbility="t,t,f,f"
                            data-border="bor:50px,50px,50px,50px;"
                            data-frame_0="y:bottom;"
                            data-frame_1="st:200;sp:1000;sR:200;"
                            data-frame_999="o:1;st:w;sp:1200;sR:7800;"
                            data-frame_999_chars="e:Power4.easeInOut;d:10;x:-105%;o:0;rZ:-90deg;"
                            data-frame_999_mask="u:t;"
                            > 
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-1-layer-9"
                            class="ttm-bgcolor-skincolor" 
                            data-type="shape"
                            data-rsp_ch="on"
                            data-xy="x:r;xo:374px,374px,-205px,-126px;yo:267px,137px,88px,54px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:40px,40px,25px,15px;h:40px,40px,25px,15px;"
                            data-vbility="t,t,f,f"
                            data-border="bor:50px,50px,50px,50px;"
                            data-frame_0="y:top;"
                            data-frame_1="st:240;sp:1000;sR:240;"
                            data-frame_999="o:1;st:w;sp:1200;sR:7760;"
                            data-frame_999_chars="e:Power4.easeInOut;d:10;x:-105%;o:0;rZ:-90deg;"
                            data-frame_999_mask="u:t;"
                        > 
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-1-layer-10" 
                            data-type="text"
                            data-color="#40444e"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:50px,50px,40px,-409px;yo:519px,380px,237px,132px;"
                            data-text="w:normal;s:16,16,12,7;l:27,27,23,14;fw:400,400,500,500;"
                            data-vbility="t,t,t,f"
                            data-frame_0="y:50,50,31,19;"
                            data-frame_1="e:Linear.easeNone;st:630;sp:500;sR:630;"
                            data-frame_999="o:0;st:w;sR:7870;"
                            >Book 30 Min Strategy Call and <br>Let's Discuss About Your Business Solutions. 
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-1-layer-11"
                            class="ttm-bgcolor-skincolor" 
                            data-type="shape"
                            data-rsp_ch="on"
                            data-xy="x:c;xo:159px,159px,627px,386px;y:m;yo:299px,169px,38px,23px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:150px,150px,93px,57px;h:150px,150px,93px,57px;"
                            data-border="bor:50%,50%,50%,50%;"
                            data-frame_0="sX:0.9;sY:0.9;"
                            data-frame_1="e:Linear.easeNone;st:310;sp:400;sR:310;"
                            data-frame_999="o:0;st:w;sR:8290;"
                            > 
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-1-layer-12" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:c;xo:156px,156px,626px,386px;yo:725px,530px,266px,164px;"
                            data-text="w:normal;s:15,15,9,5;l:20,20,12,7;a:center;"
                            data-vbility="t,t,f,f"
                            data-frame_1="st:380;sR:380;"
                            data-frame_999="o:0;st:w;sR:8320;"
                            >100% Client<br>Satisfaction 
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-1-layer-13" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:c;xo:155px,155px,625px,385px;yo:679px,480px,238px,146px;"
                            data-text="w:normal;s:37,37,22,13;l:37,37,22,13;"
                            data-vbility="t,t,f,f"
                            data-frame_1="st:380;sR:380;"
                            data-frame_999="o:0;st:w;sR:8320;"
                            ><i class="fa fa-paper-plane-o"></i><br />
                        </rs-layer>
                    </rs-slide>
                    <!-- rs-slide -->
                    <!-- rs-slide -->
                    <rs-slide data-key="rs-4" data-title="Slide" data-thumb="images/slides/slider-mainbg-004.jpg" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;">
                        <img src="images/slides/slider-mainbg-004.jpg" title="slider-mainbg-004" width="1920" height="790" class="rev-slidebg" data-no-retina>
                        <rs-layer
                            id="slider-2-slide-2-layer-0" 
                            data-type="text"
                            data-color="#2d4a8a"
                            data-rsp_ch="on"
                            data-xy="xo:50px,50px,40px,-164px;yo:326px,206px,94px,61px;"
                            data-text="w:normal;s:18,18,15,10;l:25,25,15,9;fw:500;"
                            data-vbility="t,t,t,f"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Linear.easeNone;st:120;sp:400;sR:120;"
                            data-frame_999="o:0;st:w;sR:8480;"
                            >Trust and Client Focus 
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-2-layer-1"
                            class="ttm-bgcolor-skincolor" 
                            data-type="shape"
                            data-rsp_ch="on"
                            data-xy="xo:262px,262px,-119px,-73px;yo:339px,219px,136px,83px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:36px,36px,22px,13px;h:2px,2px,1px,1px;"
                            data-vbility="t,t,f,f"
                            data-frame_0="x:50,50,31,19;"
                            data-frame_1="e:Linear.easeNone;st:190;sp:200;sR:190;"
                            data-frame_999="o:0;st:w;sR:8610;"
                            > 
                        </rs-layer>
                        <a
                            id="slider-2-slide-2-layer-2" 
                            class="rs-layer ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-darkgrey"
                            href="#" target="_self" rel="nofollow"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:227px,227px,163px,0;yo:608px,468px,310px,233px;"
                            data-text="w:normal;s:15,15,12,11;l:29,29,25,30;fw:600;a:center;"
                            data-padding="t:11,11,7,4;r:35,35,22,14;b:11,11,7,4;l:35,35,22,14;"
                            data-border="bos:solid;boc:#263045;bow:1px,1px,1px,1px;"
                            data-frame_0="y:50,50,31,19;"
                            data-frame_1="st:760;sp:500;sR:760;"
                            data-frame_999="o:0;st:w;sR:7740;"
                            >Hire Me
                        </a>
                        <rs-layer
                            id="slider-2-slide-2-layer-3" 
                            data-type="text"
                            data-color="#263045"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:359px,239px,124px,59px;"
                            data-text="w:normal;s:62,52,45,37;l:80,60,50,60;fw:600;"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="e:Linear.easeNone;st:260;sp:800;sR:260;"
                            data-frame_999="o:0;st:w;sR:7940;"
                            >Do You Want 
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-2-layer-4" 
                            data-type="text"
                            data-color="#263045"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:436px,294px,173px,104px;"
                            data-text="w:normal;s:62,52,45,37;l:75,60,60,60;fw:600;"
                            data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="st:410;sp:800;sR:410;"
                            data-frame_999="o:0;st:w;sR:7790;"
                            ><strong class="ttm-textcolor-skincolor">Customers?</strong> 
                        </rs-layer>
                        <a
                            id="slider-2-slide-2-layer-5" 
                            class="rs-layer ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor"
                            href="#" target="_self" rel="nofollow"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:608px,468px,309px,180px;"
                            data-text="w:normal;s:15,15,12,11;l:27,27,25,30;fw:600;a:center;"
                            data-padding="t:12,12,8,5;r:35,35,22,14;b:15,15,9,6;l:35,35,22,14;"
                            data-frame_0="y:50,50,31,19;"
                            data-frame_1="st:720;sp:500;sR:720;"
                            data-frame_999="o:0;st:w;sR:7780;"
                            >Read More 
                        </a>
                        <rs-layer
                            id="slider-2-slide-2-layer-6" 
                            data-type="image"
                            data-rsp_ch="on"
                            data-xy="x:r;xo:-60px,-60px,-123px,-267px;yo:213px,87px,66px,36px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:663px,663px,415px,256px;h:637px,637px,399px,246px;"
                            data-vbility="t,t,t,f"
                            data-frame_0="x:50,50,31,19;"
                            data-frame_1="e:Linear.easeNone;st:30;sp:500;"
                            data-frame_999="o:0;st:w;sR:8570;"
                            ><img src="images/slides/slides-02.png" alt="banner" width="663" height="637" data-no-retina> 
                        </rs-layer>
                        <rs-layer
                            id="slider-2-slide-2-layer-7" 
                            data-type="text"
                            data-color="#40444e"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:50px,50px,40px,-409px;yo:521px,379px,237px,132px;"
                            data-text="w:normal;s:16,16,12,7;l:27,27,23,14;fw:400,400,500,500;"
                            data-vbility="t,t,t,f"
                            data-frame_0="y:50,50,31,19;"
                            data-frame_1="e:Linear.easeNone;st:630;sp:500;sR:630;"
                            data-frame_999="o:0;st:w;sR:7870;"
                            >Let me Know Pains and Problems of Your Business.<br>I will Come up with Strategy. 
                        </rs-layer>
                    </rs-slide>
                    <!-- rs-slide -->
                </rs-slides>
            </rs-module><!-- rs-module -->
        </rs-module-wrap>
        <!-- END REVOLUTION SLIDER -->
       

        <!--site-main start-->
        <div class="site-main">

            <!-- aboutus-section -->
            <section class="ttm-row aboutus-section-style2 clearfix">
                <div class="container">
                    <div class="row no-gutters align-items-center"><!-- row -->
                        <div class="col-lg-6">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper">
                                <img class="img-fluid" src="image/aman.jpg" title="single-img-two" alt="single-img-two">
                            </div><!-- ttm_single_image-wrapper end -->
                        </div>

                        <div class="col-lg-6">
                            <div class="spacing-4 ttm-bgcolor-grey res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title with-desc clearfix">
                                    <div class="title-header">
                                        <h5>About Aman</h5>
                                        <h2 class="title">I deal with the aspects of professional <span>IT Services</span></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>He is a Founder of AK Creation - Surat With the 5 Years of experience as  Graphic Designer & Digital Marketing Skills, Now he is Learning in BCA at SDJ International College,  Many No of Company tie-up with AMAN SINGH DESIGNER, He is a 22 year old Digital Entrepreneur.</p>
                                    </div>
                                </div><!-- section title end -->
                                <!-- row -->
                                <div class="row no-gutters mt-20">
                                    <div class="col-md-6 col-lg-6 col-sm-6">
                                        <!--  featured-icon-box --> 
                                        <div class="featured-icon-box style3 left-icon icon-align-top">
                                            <div class="featured-icon"><!--  featured-icon --> 
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="ti ti-medall"></i><!--  ttm-icon --> 
                                                </div>
                                            </div>
                                            <div class="featured-content"><!--  featured-content -->
                                                <div class="featured-title"><!--  featured-title -->
                                                    <h5>15+ Awards</h5>
                                                </div>
                                                <div class="featured-desc"><!--  featured-desc -->
                                                    <p>Winner of More than 15 Graphic Designing Competition.</p>
                                                </div>
                                            </div>
                                        </div><!--  featured-icon-box END -->
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-6">
                                        <!--  featured-icon-box --> 
                                        <div class="featured-icon-box style3 left-icon icon-align-top">
                                            <div class="featured-icon"><!--  featured-icon --> 
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="ti ti-bookmark-alt"></i><!--  ttm-icon --> 
                                                </div>
                                            </div>
                                            <div class="featured-content"><!--  featured-content -->
                                                <div class="featured-title"><!--  featured-title -->
                                                    <h5>Certified Company</h5>
                                                </div>
                                                <div class="featured-desc"><!--  featured-desc -->
                                                    <p>We are Certified with Many Plateform.</p>
                                                </div>
                                            </div>
                                        </div><!--  featured-icon-box END -->
                                    </div>
                                    
                                </div><!-- row END-->
                                <!-- separator -->
                                <div class="separator">
                                    <div class="sep-line mt-30 mb-15"></div>
                                </div>
                                <!-- separator -->
                                <div class="row">
                                    <div class="col-md-3 col-lg-4 col-sm-6">
                                        <div class="text-left pt-15">
                                            <img src="images/about-sign.png" alt="about-sign">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-lg-8 col-sm-6">
                                        <!--  featured-icon-box --> 
                                        <div class="featured-icon-box without-icon text-left pt-15">
                                            <div class="featured-content"><!--  featured-content -->
                                                <div class="featured-title"><!--  featured-title -->
                                                    <h5>Aman Singh</h5>
                                                </div>
                                                <div class="featured-desc"><!--  featured-desc -->
                                                    <p>Branding & Growth Expert</p>
                                                </div>
                                            </div>
                                        </div><!--  featured-icon-box END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row -->
                    <div class="row">
                        
                    </div><!-- row end-->
                </div>
            </section>
            <!-- aboutus-section end -->

            <!-- fid-section -->
            <section class="ttm-row bottomzero-padding-section bg-img6 position-relative z-1 clearfix">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-10">
                            <div class="ttm-bgcolor-skincolor ttm-bg ttm-col-bgcolor-yes ttm-left-span mb_80 res-991-mb-0">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <div class="spacing-5">
                                                <!-- section title -->
                                                <div class="section-title with-desc mb-40 clearfix">
                                                    <div class="title-header">
                                                        <h5>About Sinbros</h5>
                                                        <h2 class="title">Trusted by 200+ <span>Happy Customers</span></h2>
                                                    </div>
                                                    <div class="title-desc">
                                                        <p>We listen. We advise. We design, together. Happy customers and ongoing relationships are what we strive for. Success is measured by results, the most important being how our clients feel about their experience with us. These reviews we’re onto something.</p>
                                                    </div>
                                                </div><!-- section title end -->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!--  featured-icon-box --> 
                                                        <div class="featured-icon-box style4 left-icon">
                                                            <div class="featured-icon"><!--  featured-icon --> 
                                                                <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-md">
                                                                    <i class="flaticon flaticon-24h"></i><!--  ttm-icon --> 
                                                                </div>
                                                            </div>
                                                            <div class="featured-content"><!--  featured-content -->
                                                                <div class="featured-title"><!--  featured-title -->
                                                                    <h5 class="fw-500">100% Satisfaction</h5>
                                                                </div>
                                                            </div>
                                                        </div><!--  featured-icon-box END -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <!--  featured-icon-box --> 
                                                        <div class="featured-icon-box style4 left-icon">
                                                            <div class="featured-icon"><!--  featured-icon --> 
                                                                <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-md">
                                                                    <i class="flaticon flaticon-data"></i><!--  ttm-icon --> 
                                                                </div>
                                                            </div>
                                                            <div class="featured-content"><!--  featured-content -->
                                                                <div class="featured-title"><!--  featured-title -->
                                                                    <h5 class="fw-500">World Class Development</h5>
                                                                </div>
                                                            </div>
                                                        </div><!--  featured-icon-box END -->
                                                    </div>
                                                    <div class="col-md-4">
                                                        <!--  featured-icon-box --> 
                                                        <div class="featured-icon-box style4 left-icon">
                                                            <div class="featured-icon"><!--  featured-icon --> 
                                                                <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-md">
                                                                    <i class="flaticon flaticon-code"></i><!--  ttm-icon --> 
                                                                </div>
                                                            </div>
                                                            <div class="featured-content"><!--  featured-content -->
                                                                <div class="featured-title"><!--  featured-title -->
                                                                    <h5 class="fw-500">World Class Design</h5>
                                                                </div>
                                                            </div>
                                                        </div><!--  featured-icon-box END -->
                                                    </div>
                                                </div>
                                                <div class="row ttm-fid-row-wrapper">
                                                    <div class="col-md-4 col-sm-4">
                                                        <!--ttm-fid-->
                                                        <div class="ttm-fid inside ttm-fid-view-lefticon style1">
                                                            <div class="ttm-fid-left"><!--ttm-fid-left-->
                                                                <div class="ttm-fid-icon-wrapper">
                                                                    <i class="flaticon flaticon-developer"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ttm-fid-contents text-left"><!--ttm-fid-contents-->
                                                                <h4 class="ttm-fid-inner">
                                                                    <span   data-appear-animation = "animateDigits"
                                                                    data-from             = "0"
                                                                    data-to               = "200"
                                                                    data-interval         = "5"
                                                                    data-before           = ""
                                                                    data-before-style     = "sup"
                                                                    data-after            = ""
                                                                    data-after-style      = "sub"
                                                                >200/span>
                                                                </h4>
                                                                <h3 class="ttm-fid-title">Happy Customers</h3><!--ttm-fid-title-->
                                                            </div>
                                                        </div><!-- ttm-fid end-->
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <!--ttm-fid-->
                                                        <div class="ttm-fid inside ttm-fid-view-lefticon style1">
                                                            <div class="ttm-fid-left">
                                                                <div class="ttm-fid-icon-wrapper">
                                                                    <i class="flaticon flaticon-interaction"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ttm-fid-contents text-left">
                                                                <h4 class="ttm-fid-inner">
                                                                    <span   data-appear-animation = "animateDigits"
                                                                    data-from             = "0"
                                                                    data-to               = "450"
                                                                    data-interval         = "5"
                                                                    data-before           = ""
                                                                    data-before-style     = "sup"
                                                                    data-after            = ""
                                                                    data-after-style      = "sub"
                                                                >450</span>
                                                                </h4>
                                                                <h3 class="ttm-fid-title">Projects Completed</h3>
                                                            </div>
                                                        </div><!-- ttm-fid end-->
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <!--ttm-fid-->
                                                        <div class="ttm-fid inside ttm-fid-view-lefticon style1">
                                                            <div class="ttm-fid-left">
                                                                <div class="ttm-fid-icon-wrapper">
                                                                    <i class="flaticon flaticon-global-1"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ttm-fid-contents text-left">
                                                                <h4 class="ttm-fid-inner">
                                                                    <span   data-appear-animation = "animateDigits"
                                                                    data-from             = "0"
                                                                    data-to               = "50"
                                                                    data-interval         = "5"
                                                                    data-before           = ""
                                                                    data-before-style     = "sup"
                                                                    data-after            = ""
                                                                    data-after-style      = "sub"
                                                                >50</span>
                                                                </h4>
                                                                <h3 class="ttm-fid-title">Web Development</h3>
                                                            </div>
                                                        </div><!-- ttm-fid end-->
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
            </section>
            <!-- fid-section -->

            <!-- services-section -->
            <section class="ttm-row services-section ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img7 clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-lg-6 offset-lg-3">
                            <!-- section title -->
                            <div class="section-title with-desc text-center clearfix">
                                <div class="title-header">
                                    <h5>Our Services</h5>
                                    <h2 class="title">We run all kinds of IT services with 5 years of <span>experience</span></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box style5 text-left mb-20">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-lg"> 
                                        <i class="flaticon flaticon-intelligent"></i>
                                    </div>
                                </div><!-- featured-icon -->
                                <div class="featured-content"><!-- featured-content -->
                                    <div class="featured-title">
                                        <h5>Branding & Advertising</h5><!-- featured-title -->
                                    </div>
                                    <div class="featured-desc"><!-- featured-description -->
                                        <p>In Times now, Effective Branding is not Just a Choice but a need for a business to expand. An Effective Branding...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-white btn-inline ttm-icon-btn-right mt-15" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div><!-- featured-content END-->
                            </div><!-- featured-icon-box -->
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box style5 text-left mb-20">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-lg"> 
                                        <i class="flaticon flaticon-analytics"></i>
                                    </div>
                                </div><!-- featured-icon -->
                                <div class="featured-content"><!-- featured-content -->
                                    <div class="featured-title">
                                        <h5>Website Development</h5><!-- featured-title -->
                                    </div>
                                    <div class="featured-desc"><!-- featured-description -->
                                        <p>Website is a 24X7 marketing tool and the first place a customer would want to look for authenticity of any Brand/Business...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-white btn-inline ttm-icon-btn-right mt-15" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div><!-- featured-content END-->
                            </div><!-- featured-icon-box -->
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box style5 text-left mb-20">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-white ttm-icon_element-size-lg"> 
                                        <i class="flaticon flaticon-analysis"></i>
                                    </div>
                                </div><!-- featured-icon -->
                                <div class="featured-content"><!-- featured-content -->
                                    <div class="featured-title">
                                        <h5>Digital Solutions</h5><!-- featured-title -->
                                    </div>
                                    <div class="featured-desc"><!-- featured-description -->
                                        <p>Digital Era has convincingly immersed us in itself. Honestly, There is no escaping it. If you haven’t adopted it for important...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-white btn-inline ttm-icon-btn-right mt-15" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div><!-- featured-content END-->
                            </div><!-- featured-icon-box -->
                        </div>
                    </div><!-- row end-->
                </div>
            </section>
            <!-- services-section end -->

            <!-- topzero-padding-section -->
            <section class="ttm-row zero-padding-section mt_95 res-991-mt-0 clearfix">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-3">
                            <!-- col-bg-img-three -->
                            <div class="col-bg-img-three ttm-bg ttm-col-bgimage-yes res-991-h-auto">
                               <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-bg-layer-inner"></div>
                                </div>
                            </div>
                            <!-- Responsive View image -->
                            <img src="images/bg-image/col-bgimage-3.jpg" class="ttm-equal-height-image" alt="col-bgimage-3">
                        </div>
                        <div class="col-lg-9">
                            <div class="ttm-bgcolor-skincolor ttm-bg ttm-col-bgcolor-yes ttm-right-span">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="spacing-6 ttm-textcolor-white">
                                        <h3 class="mb-5">We Take Care of Your Technology Focus on Your Business</h3>
                                        <p class="mb-0">Since 2015 we have been a visionary and a reliable software engineering partner for world-class brands. We are a boutique digital transformation consultancy and software development.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- topzero-padding-section -->
            <!-- team-section -->
            <section class="ttm-row team-section clearfix" style="padding: 0;margin-top: 30px">
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-lg-9 col-xl-10 col-md-9">
                            <!-- section-title -->
                            <div class="section-title style2 clearfix">
                                <div class="title-header">
                                    <h2 class="title">Meet our <span>Leadership</span></h2>
                                </div>
                            </div><!-- section-title end -->
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row -->
                    <div class="row">
                        <div class="team-slide owl-carousel" data-item="3" data-nav="false" data-dots="false" data-auto="false">
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="image/sumit.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline"><!-- social-icons -->
                                            
                                            <li class="social-instagram"><a href="https://www.sumit.sinbros.com"><i class=" fa fa-link" title="Website" aria-hidden="true"></i></a></li>
                                            <li class="social-instagram"><a href="https://www.instagram.com/i_m_sumitsingh/"><i class="fa fa-instagram" title="Instagram" aria-hidden="true"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                </div> 
                                <div class="featured-content box-shadow">
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="about/sumit-singh.php">Sumit Singh</a></h5>
                                    </div>
                                    <p class="category">Team Leader</p><!-- category -->
                                </div>
                            </div><!-- featured-imagebox-team end-->

                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="image/chandani.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline"><!-- social-icons -->
                                            <li class="social-instagram"><a href="https://www.instagram.com/i_m_chandanisingh/"><i class="fa fa-instagram" title="Instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div> 
                                <div class="featured-content box-shadow">
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="#">Chandani Singh</a></h5>
                                    </div>
                                    <p class="category">Website Devloper</p><!-- category -->
                                </div>
                            </div><!-- featured-imagebox-team end-->
                            <!-- featured-imagebox-team -->
                            <div class="featured-imagebox featured-imagebox-team style1">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid lazyload" data-src="image/aman.jpg" alt="image">
                                    <div class="ttm-social-links-wrapper">
                                        <ul class="social-icons list-inline"><!-- social-icons -->
                                            <li class="social-instagram"><a href="https://www.amansinghdesigner.com"><i class=" fa fa-link" title="Website" aria-hidden="true"></i></a></li>
                                            <li class="social-instagram"><a href="https://www.instagram.com/amansinghdesigner/"><i class="fa fa-instagram" title="Instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div> 
                                <div class="featured-content box-shadow">
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="#">Aman Singh</a></h5>
                                    </div>
                                    <p class="category">Graphic Designer</p><!-- category -->
                                </div>
                            </div><!-- featured-imagebox-team end-->
                        </div>
                    </div><!-- row end-->
                </div>
            </section>
            <!-- team-section end -->
            <!-- tab-section -->
            <section class="ttm-row tab-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- section title -->
                            <div class="section-title text-center with-desc clearfix">
                                <div class="title-header">
                                    <h5>What We Offer For You</h5>
                                    <h2 class="title">Here are some <span>Milestones </span></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ttm-tabs text-center ttm-tab-style-classic style1">
                                <ul class="tabs mb-20"><!-- tabs -->
                                    <li class="tab"><a href="#"> <i class="flaticon flaticon-report"></i> Hi-Tech </a></li>
                                    <li class="tab"><a href="#"> <i class="flaticon flaticon-computer"></i> Media </a></li>
                                    <li class="tab active"><a href="#"> <i class="flaticon flaticon-system"></i> Industrial </a></li>
                                    <li class="tab"><a href="#"> <i class="flaticon flaticon-interaction"></i> Banking </a></li>
                                    <li class="tab"><a href="#"> <i class="flaticon flaticon-analysis"></i> Medical </a></li>
                                </ul><!-- tabs end-->
                                <div class="content-tab width-100 box-shadow"><!--content-tabs -->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="text-left">
                                                    <h3 class="title fs-30">Reason to Reject following Drawbacks</h3>
                                                    <p>High-tech industries play an important role in the modern economy, and often experience significantly higher pay than other industries. And Digital solutions have transformed the world’s.</p>
                                                    <P>Sometimes you get into it for the wrong reasons, &amp; eventually it hits you on the face. These reasons can be drawbak but an eye opener too. These reasons can be drawbak but an eye opener too.</P>
                                                    <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Complete software platform development </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Practice maturity in hardware, firmware and middleware</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Device and field testing for electronics</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Device and field testing for electronics </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Practice maturity in hardware, firmware and middleware</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="grey-border res-991-mt-30 text-left">
                                                    <!-- ttm_single_image-wrapper -->
                                                    <div class="ttm_single_image-wrapper with-border15">
                                                        <img class="img-fluid grey-boder" src="images/single-img-three.jpg" title="single-img-three" alt="single-img-three">
                                                    </div><!-- ttm_single_image-wrapper end -->
                                                </div>
                                            </div>
                                        </div><!-- row end -->
                                    </div><!-- content-inner --><!-- row end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="grey-border text-left">
                                                    <!-- ttm_single_image-wrapper -->
                                                    <div class="ttm_single_image-wrapper with-border15">
                                                        <img class="img-fluid grey-boder" src="images/single-img-three.jpg" title="single-img-three" alt="single-img-three">
                                                    </div><!-- ttm_single_image-wrapper end -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="text-left res-991-mt-30">
                                                    <h3 class="title fs-30">Reason to Reject following Drawbacks</h3>
                                                    <p>High-tech industries play an important role in the modern economy, and often experience significantly higher pay than other industries. And Digital solutions have transformed the world’s.</p>
                                                    <P>Sometimes you get into it for the wrong reasons, &amp; eventually it hits you on the face. These reasons can be drawbak but an eye opener too. These reasons can be drawbak but an eye opener too.</P>
                                                    <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Complete software platform development </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Practice maturity in hardware, firmware and middleware</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Device and field testing for electronics</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Device and field testing for electronics </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Practice maturity in hardware, firmware and middleware</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- row end -->
                                    </div><!-- content-inner --><!-- row end-->
                                    <!-- content-inner -->
                                    <div class="content-inner active">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="text-left">
                                                    <h3 class="title fs-30">Reason to Reject following Drawbacks</h3>
                                                    <p>High-tech industries play an important role in the modern economy, and often experience significantly higher pay than other industries. And Digital solutions have transformed the world’s.</p>
                                                    <P>Sometimes you get into it for the wrong reasons, &amp; eventually it hits you on the face. These reasons can be drawbak but an eye opener too. These reasons can be drawbak but an eye opener too.</P>
                                                    <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Complete software platform development </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Practice maturity in hardware, firmware and middleware</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Device and field testing for electronics</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Device and field testing for electronics </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Practice maturity in hardware, firmware and middleware</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="grey-border res-991-mt-30 text-left">
                                                    <!-- ttm_single_image-wrapper -->
                                                    <div class="ttm_single_image-wrapper with-border15">
                                                        <img class="img-fluid grey-boder" src="images/single-img-three.jpg" title="single-img-three" alt="single-img-three">
                                                    </div><!-- ttm_single_image-wrapper end -->
                                                </div>
                                            </div>
                                        </div><!-- row end -->
                                    </div><!-- content-inner --><!-- row end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="grey-border text-left">
                                                    <!-- ttm_single_image-wrapper -->
                                                    <div class="ttm_single_image-wrapper with-border15">
                                                        <img class="img-fluid grey-boder" src="images/single-img-three.jpg" title="single-img-three" alt="single-img-three">
                                                    </div><!-- ttm_single_image-wrapper end -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="text-left res-991-mt-30">
                                                    <h3 class="title fs-30">Reason to Reject following Drawbacks</h3>
                                                    <p>High-tech industries play an important role in the modern economy, and often experience significantly higher pay than other industries. And Digital solutions have transformed the world’s.</p>
                                                    <P>Sometimes you get into it for the wrong reasons, &amp; eventually it hits you on the face. These reasons can be drawbak but an eye opener too. These reasons can be drawbak but an eye opener too.</P>
                                                    <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Complete software platform development </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Practice maturity in hardware, firmware and middleware</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Device and field testing for electronics</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Device and field testing for electronics </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Practice maturity in hardware, firmware and middleware</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- row end -->
                                    </div><!-- content-inner --><!-- row end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="text-left">
                                                    <h3 class="title fs-30">Reason to Reject following Drawbacks</h3>
                                                    <p>High-tech industries play an important role in the modern economy, and often experience significantly higher pay than other industries. And Digital solutions have transformed the world’s.</p>
                                                    <P>Sometimes you get into it for the wrong reasons, &amp; eventually it hits you on the face. These reasons can be drawbak but an eye opener too. These reasons can be drawbak but an eye opener too.</P>
                                                    <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Complete software platform development </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Practice maturity in hardware, firmware and middleware</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Device and field testing for electronics</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Device and field testing for electronics </span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i>
                                                            <span class="ttm-list-li-content">Practice maturity in hardware, firmware and middleware</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="grey-border res-991-mt-30 text-left">
                                                    <!-- ttm_single_image-wrapper -->
                                                    <div class="ttm_single_image-wrapper with-border15">
                                                        <img class="img-fluid grey-boder" src="images/single-img-three.jpg" title="single-img-three" alt="single-img-three">
                                                    </div><!-- ttm_single_image-wrapper end -->
                                                </div>
                                            </div>
                                        </div><!-- row end -->
                                    </div><!-- content-inner --><!-- row end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tab-section end -->

            <!-- testimonial-section end -->
            <section class="ttm-row bottomzero-padding-section ttm-bgcolor-grey ttm-bg ttm-bgimage-yes bg-img8 clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-lg-6">
                            <div class="position-relative z-1"><!-- spacing-2 -->
                                <!-- section title -->
                                <div class="section-title with-desc clearfix">
                                    <div class="title-header">
                                        <h5>About us</h5>
                                        <h2 class="title">We deal with the aspects of professional <span>IT Services</span></h2>
                                    </div>
                                </div><!-- section title end -->
                                <div class="testimonial-slide box-sahdow ttm-bgcolor-white col-bg-img-four style1 owl-carousel" data-item="1" data-nav="false" data-dots="true" data-auto="false">
                                    <!-- testimonials -->
                                    <div class="testimonials text-center"> 
                                        <div class="testimonial-content"><!-- testimonials-content -->
                                            <div class="testimonial-avatar">
                                                <div class="testimonial-img"><!-- testimonials-img -->
                                                    <img class="img-center" src="images/testimonial/01.jpg" alt="testimonial-img">
                                                </div>
                                            </div>
                                            <blockquote>Our team discussed every single detail to make sure Creatives Planet is the most versatile and unique theme created so far. No coding skills.</blockquote>
                                            <div class="ttm-ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="testimonial-caption"><!-- testimonials-caption -->
                                                <h6>Victor Williamson</h6>
                                                <label>Web Devloper</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- testimonials END -->
                                    <!-- testimonials -->
                                    <div class="testimonials text-center"> 
                                        <div class="testimonial-content"><!-- testimonials-content -->
                                            <div class="testimonial-avatar">
                                                <div class="testimonial-img"><!-- testimonials-img -->
                                                    <img class="img-center" src="images/testimonial/02.jpg" alt="testimonial-img">
                                                </div>
                                            </div>
                                            <blockquote>Our team discussed every single detail to make sure Creatives Planet is the most versatile and unique theme created so far. No coding skills.</blockquote>
                                            <div class="ttm-ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="testimonial-caption"><!-- testimonials-caption -->
                                                <h6>Victor Williamson</h6>
                                                <label>Web Devloper</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- testimonials END -->
                                    <!-- testimonials -->
                                    <div class="testimonials text-center"> 
                                        <div class="testimonial-content"><!-- testimonials-content -->
                                            <div class="testimonial-avatar">
                                                <div class="testimonial-img"><!-- testimonials-img -->
                                                    <img class="img-center" src="images/testimonial/03.jpg" alt="testimonial-img">
                                                </div>
                                            </div>
                                            <blockquote>Our team discussed every single detail to make sure Creatives Planet is the most versatile and unique theme created so far. No coding skills.</blockquote>
                                            <div class="ttm-ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="testimonial-caption"><!-- testimonials-caption -->
                                                <h6>Victor Williamson</h6>
                                                <label>Web Devloper</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- testimonials END -->
                                </div>
                                <!-- separator -->
                                <div class="separator">
                                    <div class="sep-line"></div>
                                </div>
                                <!-- separator END-->
                                <div class="card border-0">
                                    <div class="card-body">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box style2 left-icon icon-align-top">
                                            <div class="featured-icon"><!-- featured-icon -->
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon flaticon-call"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-desc"><!-- featured desc -->
                                                    <p>Need a service &amp; ready to book? Call us</p>
                                                </div>
                                                <div class="featured-title"><!-- featured title -->
                                                    <h5>Toll Free Number: <strong class="ttm-textcolor-skincolor">1800 1245 7890</strong></h5>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box END-->
                                    </div>
                                </div>
                            </div><!-- spacing-2 END -->
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative res-991-mt-30">
                                <!-- ttm_single_image-wrapper -->
                                <div class="ttm_single_image-wrapper text-right">
                                    <img class="img-fluid" src="images/single-img-four.png" title="single-img-four" alt="single-img-four">
                                </div><!-- ttm_single_image-wrapper end -->
                                <div class="ttm-highlight-fid-style-1">
                                    <!--ttm-fid-->
                                    <div class="ttm-fid inside without-icon">
                                        <div class="ttm-fid-contents text-left">
                                            <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                data-from             = "0"
                                                data-to               = "5"
                                                data-interval         = "1"
                                                data-before           = ""
                                                data-before-style     = "sup"
                                                data-after            = ""
                                                data-after-style      = "sub"
                                            >5</span>
                                            </h4>
                                            <h3 class="ttm-fid-title">Years of Experience IT Bussiness </h3>
                                        </div>
                                    </div><!-- ttm-fid end-->
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!-- testimonial-section end -->

            <!-- first-row-title-section -->
            <section class="ttm-row second-row-title-section mt_90 ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img9 clearfix">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row"><!-- row -->
                        <div class="col-lg-8 offset-lg-2">
                            <div class="text-center">
                                <div class="ttm-play-icon-btn mb-35">
                                    <div class="ttm-play-icon-animation">
                                        <a href="https://youtu.be/7e90gBu4pas" target="_self" class="ttm_prettyphoto">
                                            <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-sm ttm-icon_element-style-round">
                                                <i class="fa fa-play"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- section-title -->
                                <div class="section-title row-title clearfix">
                                    <div class="title-header">
                                        <h2 class="title">We Provide Outsourced IT Services For Small & <span>Mid-Sized Business</span></h2>
                                    </div>
                                    <div class="title-desc">Appropriate for your specific business, making it easy for<br> you to have quality IT services. What We Do</div>
                                </div><!-- section-title end -->
                                <div class="mt-40">
                                    <a href="#" class="ttm-btn ttm-btn-size-md ttm-btn-style-border ttm-btn-color-white">More Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- first-row-title-section END-->

            

            <!-- our-partner-section -->
            <div class="ttm-row our-partner-section ttm-bgcolor-skincolor mt_90 res-991-mt-0 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- ttm-client -->
                            <div class="clients-slide owl-carousel owl-theme owl-loaded" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                                <div class="client-box ttm-box-view-boxed-logo">
                                    <div class="client">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                                            <img class="img-fluid" src="images/client/client-01.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="client-box ttm-box-view-boxed-logo">
                                    <div class="client">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                                            <img class="img-fluid" src="images/client/client-02.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="client-box ttm-box-view-boxed-logo">
                                    <div class="client">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                                            <img class="img-fluid" src="images/client/client-03.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="client-box ttm-box-view-boxed-logo">
                                    <div class="client">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-04">
                                            <img class="img-fluid" src="images/client/client-04.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="client-box ttm-box-view-boxed-logo">
                                    <div class="client">
                                        <div class="ttm-client-logo-tooltip" data-tooltip="client-05">
                                            <img class="img-fluid" src="images/client/client-05.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-client end -->      
                        </div>
                    </div>
                </div>
            </div>
             <!-- our-partner-section END-->

            <!-- blog-section end -->
            <section class="ttm-row blog-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- section title -->
                            <div class="section-title text-center with-desc clearfix">
                                <div class="title-header">
                                    <h5>Our Blog</h5>
                                    <h2 class="title">Check out our <span>Latest News</span></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <!-- blog-slide -->
                        <div class="blog-slide owl-carousel owl-theme owl-loaded " data-item="3" data-nav="false" data-dots="false" data-auto="false">
                            <!-- featured-imagebox-blog -->
                            <div class="featured-imagebox featured-imagebox-blog">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid" src="images/blog/05.jpg" alt="">
                                    <div class="ttm-blog-overlay-iconbox">
                                        <a href="single-blog.html"><i class="ti ti-plus"></i></a>
                                    </div>
                                    <div class="ttm-box-view-overlay"></div>
                                </div>
                                <div class="featured-content"><!-- featured-content -->
                                    <div class="ttm-box-post-date"><!-- ttm-box-post-date -->
                                        <span class="ttm-entry-date">
                                            <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">17<span class="entry-month entry-year">Apr</span></time>
                                        </span>
                                    </div>
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="single-blog.html">You Must Try 20 Secret Of Digital Transform</a></h5>
                                    </div>
                                    <div class="post-meta"><!-- post-meta -->
                                        <span class="ttm-meta-line"><i class="fa fa-comments"></i>2,comments</span>
                                        <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                        
                                    </div>
                                    <div class="featured-desc"><!-- featured-description -->
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-blog end -->
                            <!-- featured-imagebox-blog -->
                            <div class="featured-imagebox featured-imagebox-blog">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid" src="images/blog/04.jpg" alt="">
                                    <div class="ttm-blog-overlay-iconbox">
                                        <a href="single-blog.html"><i class="ti ti-plus"></i></a>
                                    </div>
                                    <div class="ttm-box-view-overlay"></div>
                                </div>
                                <div class="featured-content"><!-- featured-content -->
                                    <div class="ttm-box-post-date"><!-- ttm-box-post-date -->
                                        <span class="ttm-entry-date">
                                            <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">12<span class="entry-month entry-year">Dec</span></time>
                                        </span>
                                    </div>
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="single-blog.html">Define World Best IT Solution Technology</a></h5>
                                    </div>
                                    <div class="post-meta"><!-- post-meta -->
                                        <span class="ttm-meta-line"><i class="fa fa-comments"></i>3,comments</span>
                                        <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                        
                                    </div>
                                    <div class="featured-desc"><!-- featured-description -->
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-blog end -->
                            <!-- featured-imagebox-blog -->
                            <div class="featured-imagebox featured-imagebox-blog">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid" src="images/blog/06.jpg" alt="">
                                    <div class="ttm-blog-overlay-iconbox">
                                        <a href="single-blog.html"><i class="ti ti-plus"></i></a>
                                    </div>
                                    <div class="ttm-box-view-overlay"></div>
                                </div>
                                <div class="featured-content"><!-- featured-content -->
                                    <div class="ttm-box-post-date"><!-- ttm-box-post-date -->
                                        <span class="ttm-entry-date">
                                            <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">22<span class="entry-month entry-year">May</span></time>
                                        </span>
                                    </div>
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="single-blog.html">10 PHP Frameworks You Need To Use Anywhere</a></h5>
                                    </div>
                                    <div class="post-meta"><!-- post-meta -->
                                        <span class="ttm-meta-line"><i class="fa fa-comments"></i>1,comments</span>
                                        <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                        
                                    </div>
                                    <div class="featured-desc"><!-- featured-description -->
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-blog end -->
                            <!-- featured-imagebox-blog -->
                            <div class="featured-imagebox featured-imagebox-blog">
                                <div class="featured-thumbnail"><!-- featured-thumbnail -->
                                    <img class="img-fluid" src="images/blog/07.jpg" alt="">
                                    <div class="ttm-blog-overlay-iconbox">
                                        <a href="single-blog.html"><i class="ti ti-plus"></i></a>
                                    </div>
                                    <div class="ttm-box-view-overlay"></div>
                                </div>
                                <div class="featured-content"><!-- featured-content -->
                                    <div class="ttm-box-post-date"><!-- ttm-box-post-date -->
                                        <span class="ttm-entry-date">
                                            <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">04<span class="entry-month entry-year">Aug</span></time>
                                        </span>
                                    </div>
                                    <div class="featured-title"><!-- featured-title -->
                                        <h5><a href="single-blog.html">Digital Conference Of IT Tech Events in 2019</a></h5>
                                    </div>
                                    <div class="post-meta"><!-- post-meta -->
                                        <span class="ttm-meta-line"><i class="fa fa-comments"></i>4,comments</span>
                                        <span class="ttm-meta-line"><i class="fa fa-user"></i>Admin</span>
                                        
                                    </div>
                                    <div class="featured-desc"><!-- featured-description -->
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right mt-20" href="#">Read More <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-blog end -->
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
        $(".home").addClass('active');
    });
</script>