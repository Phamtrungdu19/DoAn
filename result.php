<?php include 'header.php';
$page = 1;
$perPage =10;
$key="";
if(isset($_GET['key']))
{
    $key= $_GET['key'];
}
if(isset($_GET['page']))
{
    $page= $_GET['page'];
}
$FindProductsPage = $product ->FindProductsPage($key,$page,$perPage);
$FindProducts = $product -> FindProducts($key);
$totalProducts = count($FindProducts);
?>
                <div class="col-sm-9">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Search Result</h2>
                        <?php foreach($FindProductsPage as $item )
                        {?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="images/<?php echo $item["pro_image"]?>" alt="" />
                                        <h2><?php echo number_format( $item['price'])?> VND</h2>
                                        <p><?php echo $item['name']?></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2><?php echo number_format($item['price'])?> VND</h2>
                                            <p><?php echo $item['name']?></p>
                                            <p><a href="detail.php?id=<?php echo $item['id']?>"><?php echo $item['name']?></a></p>
                                            <a href="cart.php?id=<?php echo $item["id"]?>" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
                        ?>
                    </div>
                    <?php 
                        echo $product ->createPageLinksFindProducts($totalProducts,$perPage,$key);
                        ?>
                        <ul class="pagination col-sm-12">