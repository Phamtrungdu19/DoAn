<?php
include 'header.php';
$page = 1;
$totalProducts =count($product ->getAllProducts());
$perPage =5;
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
$getAllProductsPage = $product ->getAllProductsPage($page,$perPage);
?>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        <?php
    foreach($getProduct as $value)
    {
    ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="images/<?php echo $value["pro_image"]?>" alt="" />
                                        <h2><?php echo number_format($value['price']).'VND' ?></h2>
                                        <p><?=substr($value['name'],0,35)."..."?></p>
                                        <a href="cart.php?id=<?php echo $value["id"]?>" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>

                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2><?php echo number_format($value['price']).'VND'?></h2>
                                            <p><a
                                                    href="detail.php?id=<?php echo $value['id']?>"><?php echo $value['name']?></a>
                                            </p>
                                            <a href="cart.php?id=<?php echo $value["id"]?>" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    <p><?=substr($value['name'],0,35)."..."?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
    }
 ?>

                    </div>
                    <div class="features_items text-align:center">
                        <!--New Products Items-->
                        <h2 class="title text-center">All Products</h2>
                        <?php
 foreach($getAllProductsPage as $value)
                    {
?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="images/<?php echo $value["pro_image"]?>" alt="" />
                                        <h2><?php echo number_format($value['price']).'VND' ?></h2>
                                        <p><?php $value['name']?></p>
                                        <a href="cart.php?id=<?php echo $value["id"]?>" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                                <p><?=substr($value['name'],0,35)."..."?></p>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2><?php echo number_format($value['price']).'VND'?></h2>
                                            <p><a
                                                    href="detail.php?id=<?php echo $value['id']?>"><?php echo $value['name']?></a>
                                            </p>
                                            <a href="cart.php?id=<?php echo $value["id"]?>" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                                <p><?=substr($value['name'],0,35)."..."?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }    
?>
                </div>
                <div class = "Link" style=" display: inline-block;">
                    <?php  echo $product ->createPageLinks($totalProducts,$perPage); ?>
                    </div>
            </div>
            
    </section>
    <footer id="footer">
        <!--Footer-->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2021 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
?>