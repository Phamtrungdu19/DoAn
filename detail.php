
<?php include 'header.php'?>
<?php
$id;

if(isset( $_GET['id']))
{
    $id = $_GET['id'];
}
foreach($getAllProduct as $value)
{
    if($id == $value['id'])
    {
?>
                <div class="col-sm-9 padding-right">
                    <div class="product-details">
                        <!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">

                                <img src="images/<?php echo $value["pro_image"]?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->
                                <h2><?php echo $value["name"]?></h2>
                                <span>
                                    <span><?php echo number_format($value["price"]) ?> VND</span>
                                    <label>Quantity:99</label>
                                    

                                    <a href="cart.php?id=<?php echo $value["id"]?>" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>

                                </span>
                                <p><?php echo $value["description"]?></p>
                            </div>
                            <!--/product-information-->
                        </div>
                    </div>
                    <!--/product-details-->
                    <!--features_items-->
                </div>
                <?php }}?>
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