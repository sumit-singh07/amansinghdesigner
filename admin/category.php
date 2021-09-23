
<?php
    include("../connection.php");
    error_reporting(0);
    $query = "select * from category";
    $sql = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($sql))
    {
        $rs[] = $row;
    }

    $category_delete_id=$_GET['id'];

    if($category_delete_id!="")
    {
        $query = "delete from category where category_id = $category_delete_id";
        mysqli_query($connect,$query);
        header('location:category.php');
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
                        <h3 class="text-themecolor">Category</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
                        <a href="add-category.php" type="button" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create New</a>
                    </div>
                </div>
                
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Category Table </h4>
                                <div class="table-responsive m-t-40">
                                    <table id="config-table" class="table display table-bordered table-hover no-wrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Sub Title</th>
                                                <th>URL</th>
                                                <th>Status</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php for($i=0;$i<count($rs);$i++)
                                        {?>
                                        
                                            <tr>
                                                <td><?php echo $rs[$i]['category_id']?></td>
                                                <td><img src="../image/blog/<?php echo $rs[$i]['category_image']?>" width="100px"></td>
                                                <td><?php echo $rs[$i]['category_title1']?></td>
                                                <td><?php echo $rs[$i]['category_title2']?></td>
                                                <td><?php echo $rs[$i]['category_url']?></td>
                                                <td><?php echo $rs[$i]['category_status']?></td>
                                                <td><a href="update-category.php?id=<?php echo $rs[$i]['category_id'] ?>"><i class="fas fa-edit" style="color: green"></i></a></td>
                                                <td><a href="category.php?id=<?php echo $rs[$i]['category_id'] ?>" onClick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt" style="color: red"></i></a></td>
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
