<?php
    include("../connection.php");
    error_reporting(0);
    $category_update_id=$_GET['id'];

    if($category_update_id!="")
    {
        $query = "select * from category where category_id = $category_update_id";
        $sql = mysqli_query($connect,$query);
        $row = mysqli_fetch_row($sql);
    }



    $category_image=$_FILES['category_image']['name'];
    $category_url=$_POST['category_url'];
    $category_title1=$_POST['category_title1'];
    $category_title2=$_POST['category_title2'];
    $category_rank=$_POST['category_rank'];

    if($_POST['submit'])
    {
        if($category_image=="")
        {
            $query = "update category set category_url='$category_url', category_title1='$category_title1',category_title2='$category_title2', category_rank=$category_rank where category_id=$category_update_id";
        }
        else
        {
            $target="../image/blog/".basename($category_image);
            $query = "update category set category_image='$category_image', category_url='$category_url', category_title1='$category_title1',category_title2='$category_title2', category_rank=$category_rank where category_id=$category_update_id";
            move_uploaded_file($_FILES['category_image']['tmp_name'],$target);
        }
        
        $sql = mysqli_query($connect,$query);
        if($sql)
        {
            echo "<script>alert('Success')</script>";
            header('location:category.php');
        }
        else
        {
            echo "<script>alert('Failed')</script>";
        }
    }
?>
<?php
    include("header.php");
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
                        <h3 class="text-themecolor">Update Blog</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                            <li class="breadcrumb-item active">Update Blog</li>
                        </ol>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Update Blog</h4>
                            <form method="post" enctype="multipart/form-data" class="form-horizontal mt-4">
                                <!-- <div class="form-group">
                                    <label>Blog Category </label>
                                    <select name="category_category">
                                        <option value="volvo">Programming</option>
                                        <option value="saab">Advance Programming</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div> -->
                                <img Height="250px" id = "pro_img" src="../image/blog/<?php echo $row[1] ?>" Width="250px" />

                                <div class="form-group" style="margin-top: 20px">
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
                                    <input value="<?php echo $row[7] ?>" name="category_url" type="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Title </label>
                                    <input value="<?php echo $row[2] ?>" name="category_title1" type="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <input value="<?php echo $row[3] ?>" name="category_title2" type="text" class="form-control" >
                                </div>
                                
                                <div class="form-group">
                                    <label>Rank</label>
                                    <input value="<?php echo $row[4] ?>" name="category_rank" type="number" class="form-control" >
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
