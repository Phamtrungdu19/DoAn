<?php
    include "header.php";
?>
<?php 
$page=1;
$perpage =5;
if(isset($_GET ['page']))
{
    $page = $_GET ['page'];
}
$Manufacture = new Manufacture;
$getAllManufacture = $Manufacture->getAllManufacture($page,$perpage);
$totals= count( $Manufacture->getManufacture());
?>

<div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="AddManu.php"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>Manufacture</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Manu Id</th>
                                        <th>Manu Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($getAllManufacture as $item)
                                    {
                                     ?>
                                    <tr class="">
                                        <td> <?= $item['maHang'] ?></td>
                                        <td><?= $item['tenHang'] ?></td>
                                    
                                        <td>
                                            <a href="editManufacture.php?keymanu=<?=$item['maHang']?>" class="btn btn-success btn-mini">Edit</a>
                                            <form action="" method="">
                                            <a href="delete.php?keymanu=<?=$item['maHang']?>" class="btn btn-danger btn-mini">Delete</a>
                                           
                                            </form>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    
                                </tbody>
                            </table>
                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                    <?=$Manufacture ->phanTrang($page,$perpage,$totals);?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2021 &copy; TDC - Lập trình web 1</div>
    </div>
    <!--end-Footer-part-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ui.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.uniform.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/matrix.js"></script>
    <script src="js/matrix.tables.js"></script>
</body>

</html>