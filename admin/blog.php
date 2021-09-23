
<?php
    include("../connection.php");
    error_reporting(0);
    $query = "select * from blog";
    $sql = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($sql))
    {
        $rs[] = $row;
    }

    $blog_delete_id=$_GET['id'];

    if($blog_delete_id!="")
    {
        $query = "delete from blog where blog_id = $blog_delete_id";
        mysqli_query($connect,$query);
        header('location:blog.php');
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
                        <h3 class="text-themecolor">Blog</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
                        <a href="add-blog.php" type="button" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create New</a>
                    </div>
                </div>
                
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Blog Table </h4>
                                <div class="table-responsive m-t-40">
                                    <table id="config-table" class="table display table-bordered table-hover no-wrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Sub Title</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php for($i=0;$i<count($rs);$i++)
                                        {?>
                                        
                                            <tr>
                                                <td><?php echo $rs[$i]['blog_id']?></td>
                                                <td><img src="../image/blog/<?php echo $rs[$i]['blog_image']?>" width="100px"></td>
                                                <td><?php echo $rs[$i]['blog_title1']?></td>
                                                <td><?php echo $rs[$i]['blog_title2']?></td>
                                                <td><?php echo $rs[$i]['blog_status']?></td>
                                                <td><div class="btn-group">
                                                      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                      </button>
                                                      <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="update-blog.php?id=<?php echo $rs[$i]['blog_id'] ?>">Edit</a>
                                                        <a class="dropdown-item" href="blog.php?id=<?php echo $rs[$i]['blog_id'] ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                                                      </div>
                                                    </div></td>
                                                <!-- <td><a href="update-blog.php?id=<?php echo $rs[$i]['blog_id'] ?>"><i class="fas fa-edit" style="color: green"></i></a></td>
                                                <td><a href="blog.php?id=<?php echo $rs[$i]['blog_id'] ?>" onClick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt" style="color: red"></i></a></td> -->
                                            </tr>
                                        
                                        <?php }?>
                                        </tbody>
                                    </table>
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
