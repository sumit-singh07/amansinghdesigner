<?php
    include("header.php");
?>
<?php
    include("../connection.php");
    error_reporting(0);
    $query = "select * from portfolio";
    $sql = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($sql))
    {
        $rs[] = $row;
    }

    $port_delete_id=$_GET['id'];

    if($port_delete_id!="")
    {
        $query = "delete from portfolio where port_id = $port_delete_id";
        mysqli_query($connect,$query);
        header('location:portfolio.php');
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
                        <h3 class="text-themecolor">Portfolio</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center text-right d-none d-md-block">
                        <a href="add-portfolio.php" type="button" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create New</a>
                    </div>
                </div>
                
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Portfolio Table </h4>
                                <div class="table-responsive m-t-40">
                                    <table id="config-table" class="table display table-bordered table-hover no-wrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php for($i=0;$i<count($rs);$i++)
                                        {?>
                                        
                                            <tr>
                                                <td><?php echo $rs[$i]['port_id']?></td>
                                                <td><img src="../image/portfolio/<?php echo $rs[$i]['port_image']?>" width="100px"></td>
                                                <td><?php echo $rs[$i]['port_title']?></td>
                                                <td><?php echo $rs[$i]['port_category']?></td>
                                                <td><?php echo $rs[$i]['port_status']?></td>
                                                <td><a href="update-portfolio.php?id=<?php echo $rs[$i]['port_id'] ?>"><i class="fas fa-edit" style="color: green"></i></a></td>
                                                <td><a href="portfolio.php?id=<?php echo $rs[$i]['port_id'] ?>" onClick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt" style="color: red"></i></a></td>
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
