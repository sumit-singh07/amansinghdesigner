<?php
    include("header.php");
?>
<?php
    include("../connection.php");
    $port_image=$_FILES['port_image']['name'];
    $port_title=$_POST['port_title'];
    $port_category=$_POST['port_category'];
    if($_POST['submit'])
    {
        foreach($_FILES["port_image"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["port_image"]["name"][$key];
            $file_tmp=$_FILES["port_image"]["tmp_name"][$key];
            
            $target="../image/portfolio/".basename($file_name);
            $query = "insert into portfolio (port_image,port_title,port_category) values ('$file_name','$port_title','$port_category')";
            $sql = mysqli_query($connect,$query);
            move_uploaded_file($file_tmp,$target);
        }
    }
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Add Portfolio</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="portfolio.php">Portfolio</a></li>
                            <li class="breadcrumb-item active">Add Portfolio</li>
                        </ol>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Add Portfolio</h4>
                            <form method="post" enctype="multipart/form-data" class="form-horizontal mt-4">
                                
                                <img Height="250px" id = "pro_img" src="../image/blog/select_image.jpg" Width="250px" />


                                <div style="margin-top: 20px" class="form-group">
                                    <label>Select Image</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input onchange="readURL(this);" name="port_image[]" type="file" class="custom-file-input" id="inputGroupFile01" multiple>
                                            <label class="custom-file-label" for="inputGroupFile01">Select Photo (one or multiple)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Title </label>
                                    <input name="port_title" type="text" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label>Category </label>
                                    <input name="port_category" type="text" class="form-control" >
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                    <input type="reset" name="reset" value="Reset" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<?php
    include("footer.php");
?>

<script type="text/javascript">
    $(document).ready(function(e){
        $(".sinbros_blog").addClass('active');
    });
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#pro_img')
                    .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
