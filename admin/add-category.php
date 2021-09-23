<?php
    include("header.php");
?>
<?php
    include("../connection.php");
    $category_image=$_FILES['category_image']['name'];
    $category_url=$_POST['category_url'];
    $category_title1=$_POST['category_title1'];
    $category_title2=$_POST['category_title2'];
    $category_rank=$_POST['category_rank'];

    if($_POST['submit'])
    {
        $target="../image/blog/".basename($category_image);
        $query = "insert into category (category_image,category_url,category_title1,category_title2,category_rank) values ('$category_image','category_url','$category_title1','$category_title2',$category_rank)";
        $sql = mysqli_query($connect,$query);
        
        if(move_uploaded_file($_FILES['category_image']['tmp_name'],$target) && $sql)
        {
            echo "<script>alert('Success')</script>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";
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
                        <h3 class="text-themecolor">Add Category</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="category.php">Category</a></li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Add Category</h4>
                            <form method="post" enctype="multipart/form-data" class="form-horizontal mt-4">
                                
                                <img Height="250px" id = "pro_img" src="../image/blog/select_image.jpg" Width="250px" />


                                <div style="margin-top: 20px" class="form-group">
                                    <label>Select Image</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input onchange="readURL(this);" name="category_image" type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>URL </label>
                                    <input name="category_url" type="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Title </label>
                                    <input name="category_title1" type="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <input name="category_title2" type="text" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label>Rank</label>
                                    <input name="category_rank" type="number" class="form-control" >
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
