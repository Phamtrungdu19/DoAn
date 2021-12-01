<?php
$id ;
$product;
if(isset($_GET['product']))
{
    $idproduct=$_GET['product'];
}
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}

?>
<?php include 'header.php'?>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center"><?php $getProtype['type_name']?></h2>
                        <?php
                         if(isset($_GET['id'])){
                        foreach($getProductWithManu as $value)
                        {
                            if($value['maHang']== $id)
                            {?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="images/<?php echo $value["pro_image"]?>" alt="" />
                                        <h2><?php echo number_format($value['price']).'VND' ?></h2>
                                        <p><?=substr($value['name'],0,35)."..."?></p>
                                        <p></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2><?php echo number_format($value['price']).'VND'?></h2>
                                            <p><?=substr($value['name'],0,35)."..."?></p>
                                            <p><a
                                                    href="detail.php?id=<?php echo $value['id']?>"><?php echo $value['name']?></a>
                                            </p>
                                            <a href="cart.php?id=<?php echo $value["id"]?>" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <?php }} } 
                         if(isset($_GET['product'])){
                            foreach($getProductWithManu as $value)
                            {
                                if($value['type_id']== $idproduct){
                        
                        ?>
                            <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="images/<?php echo $value["pro_image"]?>" alt="" />
                                        <h2><?php echo number_format($value['price']).'VND' ?></h2>
                                        <p><?=substr($value['name'],0,35)."..."?></p>
                                        <p></p>
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
                        <?php } }   }?>
                        <ul class="pagination col-sm-12">