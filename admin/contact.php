<?php
    include("header.php");
?>
<?php
    include("../connection.php");
    $query = "select * from contact";
    $sql = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($sql))
    {
        $rs[] = $row;
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
                        <h3 class="text-themecolor">Contact Us</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </div>
                </div>
                
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contact Us Table </h4>
                                <div class="table-responsive m-t-40">
                                    <table id="config-table" class="table display table-bordered table-hover no-wrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php for($i=0;$i<count($rs);$i++)
                                        {?>
                                        
                                            <tr>
                                                <td><?php echo $rs[$i]['contact_id']?></td>
                                                <td><?php echo $rs[$i]['contact_name']?></td>
                                                <td><?php echo $rs[$i]['contact_mobile']?></td>
                                                <td><?php echo $rs[$i]['contact_email']?></td>
                                                <td><?php echo $rs[$i]['contact_sub']?></td>
                                                <td><?php echo $rs[$i]['contact_msg']?></td>
                                                <td><?php echo $rs[$i]['contact_status']?></td>
                                                <td><i class="fas fa-trash-alt" style="color: red"></i></td>
                                                
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
        $(".sinbros_contact").addClass('active');
    });

</script>
