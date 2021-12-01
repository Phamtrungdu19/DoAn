<?php
   ob_start(); 
    include "header.php";
    $manufactures = new Manufacture();
    $getManu = $manufactures -> getManufacture();
    $protype = new Protype();
    $getProtypefacture = $protype -> getProtypefacture();
    if(isset($_POST['name'], $_POST['manu_id'], $_POST['type_id'], $_FILES['fileUpload'], $_POST['description'], $_POST['price'], $_POST['feature']))
        {
            $name =$_POST['name'];
            $manuid=$_POST['manu_id'];
            $type_id =$_POST['type_id'];
            $pro_image= $_FILES["fileUpload"]["name"];
            $description= $_POST['description'];
            $price=$_POST['price'];
            $feature=$_POST['feature'];
            $product = new Product();
            $product -> AddProducts($name,$manuid,$type_id,$price,$pro_image,$description,$feature);
            $target_file = "../images/".$pro_image;
            move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
            echo '<script language="javascript">';
            echo 'alert("Thêm Thành Công !!!")';
            echo '</script>';
            // header("Location: index.php");   
        }
?>
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Product info</h5>
                        </div>
                        <div class="widget-content nopadding">

                             <!-- BEGIN USER FORM -->
                            <form action="AddProducts.php" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Product name" name="name"required /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a manufacture:</label>
                                    <div class="controls">
                                        <select name="manu_id" id="cate">
                                            
                                        <?php
                                                foreach($getManu as $value)
                                                {
                                            ?>
                                            <option value="<?= $value['maHang'] ?>"><?= $value['tenHang'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a product type:</label>
                                    <div class="controls">
                                        <select name="type_id" id="subcate">

                                        <?php
                                                foreach($getProtypefacture as $value)
                                                {
                                            ?>
                                            <option value="<?= $value['type_id'] ?>"><?= $value['type_name'] ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select> *
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Choose an image :</label>
                                        <div class="controls">
                                            <input type="file" name="fileUpload" id="fileUpload"  accept=".jpg, .png, .jpeg, .bmp|image/*" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Description</label>
                                        <div class="controls">
                                            <textarea class="span11" placeholder="Description"
                                                name="description"required></textarea>
                                        <div class="control-group">
                                            <label class="control-label">Price :</label>
                                            <div class="controls">
                                                <input type="text" class="span11" placeholder="price" name="price" required/> *
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Feature :</label>
                                            <div class="controls">
                                                <input type="number" class="span11" name="feature" min="0" max="1" required/> *
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success">Add</button>
                                        </div>
                                    </div>
                            </form>
                            <!-- END USER FORM -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        
    ?>
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