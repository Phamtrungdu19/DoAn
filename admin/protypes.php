<?php include 'header.php'  ?>
<?php 
$page=1;
$perpage =5;
if(isset($_GET ['page']))
{
    $page = $_GET ['page'];
}
$Protype = new Protype;
$getAllProtype = $Protype ->getAllProtype($page,$perpage);
$totals=  count( $Protype ->getProtypefacture   ());
?>
<div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="AddProtypes.php"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>Protypes</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Protype Id</th>
                                        <th>Protype Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  foreach($getAllProtype as $item)
                                    {?>
                                    <tr class="">
                                        <td><?= $item['type_id'] ?></td>
                                        <td><?= $item['type_name'] ?></td>
                                        <td>
                                            <a  href="editProtype.php?keytype=<?=$item['type_id']?>" class="btn btn-success btn-mini">Edit</a>
                                            <form action="" method="">
                                            <a href="delete.php?keytype=<?=$item['type_id']?>" class="btn btn-danger btn-mini">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    
                                </tbody>
                            </table>
                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                <?= $Protype ->phanTrang($page,$perpage,$totals);?>
                                    
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