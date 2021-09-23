<?php
    include("header.php");
?>
<?php
    include("../connection.php");
    $blog_image=$_FILES['blog_image']['name'];
    $blog_url=$_POST['blog_url'];
    $blog_title1=$_POST['blog_title1'];
    $blog_title2=$_POST['blog_title2'];
    $blog_des=$_POST['blog_des'];
    $blog_ex1=$_POST['blog_ex1'];
    $blog_ex2=$_POST['blog_ex2'];
    $blog_python=$_POST['blog_python'];
    $blog_c=$_POST['blog_c'];
    $blog_cpp=$_POST['blog_cpp'];
    $blog_category=$_POST['blog_category'];

    $query = "select category_title1 from category";
    $sql = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($sql))
    {
        $rs[] = $row;
    }


    if($_POST['submit'])
    {
        $target="../image/blog/".basename($blog_image);
        $query = "insert into blog (blog_image,blog_url,blog_title1,blog_title2,blog_des,blog_ex1,blog_ex2,blog_python,blog_c,blog_cpp,blog_category) values ('$blog_image','$blog_url','$blog_title1','$blog_title2','$blog_des','$blog_ex1','$blog_ex2','$blog_python','$blog_c','$blog_cpp','$blog_category')";
        $sql = mysqli_query($connect,$query);
        move_uploaded_file($_FILES['blog_image']['tmp_name'],$target);
        if($sql)
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
                        <h3 class="text-themecolor">Add Blog</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                            <li class="breadcrumb-item active">Add Blog</li>
                        </ol>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Add Blog</h4>
                            <form method="post" enctype="multipart/form-data" class="form-horizontal mt-4">
                                
                                <img Height="250px" id = "pro_img" src="../image/blog/select_image.jpg" Width="250px" />


                                <div style="margin-top: 20px" class="form-group">
                                    <label>Select Image</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input onchange="readURL(this);" name="blog_image" type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>URL </label>
                                    <input name="blog_url" type="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Title </label>
                                    <input name="blog_title1" type="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <input name="blog_title2" type="text" class="form-control" >
                                </div>
                                
                                <div class="form-group">
                                    <label>Blog Description</label>
                                    <textarea name="blog_des" class="form-control" rows="5"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label>Example 1</label>
                                    <textarea name="blog_ex1" class="form-control" rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Example 2</label>
                                    <textarea name="blog_ex2" class="form-control" rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Python Code</label>
                                    <textarea name="blog_python" class="form-control" rows="20"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>C Code</label>
                                    <textarea name="blog_c" class="form-control" rows="20"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>C++ Code</label>
                                    <textarea name="blog_cpp" class="form-control" rows="20"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Blog Category </label>
                                    <select class="input-group-prepend" name="blog_category">
                                        <?php for($i=0;$i<count($rs);$i++)
                                        {?>
                                        <option class="input-group-text" value="<?php echo $rs[$i]['category_title1']?>"><?php echo $rs[$i]['category_title1']?></option>
                                        <?php }?>
                                    </select>
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
