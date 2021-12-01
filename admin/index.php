<?php 
   ob_start(); 
include 'header.php' ;
$product = new Product;
$page=1;
$perpage =5;
if(isset($_GET ['page']))
{
    $page = $_GET ['page'];
}
$getAllProducts = $product ->getAllProducts($page,$perpage);
$total =count($product ->getProducts());
?><div class="widget-box">
<div class="widget-title"> <span class="icon"><a href="AddProducts.php"> <i class="icon-plus"></i>
        </a></span>
                            <h5>Products</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Manufactures</th>
                                        <th>Product type</th>
                                        <th>Description</th>
                                        <th>Price (VND)</th>
                                        <th>Feature</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($getAllProducts as $item)
                                    {
                                    ?>
                                    <tr class="">
                                        <td width="250"><img
                                                src="http://localhost/Nhom8/images/<?=$item['pro_image']?>" />
                                        </td>
                                        <td><?= $item['name']?></td>
                                        <td><?= $item['tenHang']?> </td>
                                        <td><?= $item['type_name']?></td>
                                        <td><?= $item['description']?></td>
                                        <td><?= ($item['price']).'VND'?></td>
                                        <td><?= $item['feature']?></td>
                                        <td><?= $item['created_at']?></td>
                                        <td>
                                            <a href="editProduct.php?id=<?=$item['id']?>" class="btn btn-success btn-mini">Edit</a>
                                            <a href="delete.php?key=<?=$item['id']?>" class="btn btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                    <?=
                                        $product->phanTrang($page,$perpage,$total);
                                    ?>
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
<?php 
            ob_end_flush();
    ?>