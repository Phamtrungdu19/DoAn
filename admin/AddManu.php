<?php
    ob_start(); 
    include "header.php";
    $manufactures = new Manufacture();
    $getManu = $manufactures -> getManufacture();
    if(isset($_POST['name']))
    {
        
        $name =$_POST['name'];
        $manufactures -> AddManu($name);
        echo '<script language="javascript">';
		echo 'alert("Thêm Thành Công !!!")';
		echo '</script>';
        header("Location: manufactures.php");   
        
    }
?>
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Product info</h5>
                        </div>
                        <div class="widget-content nopadding">

                             <!-- BEGIN USER FORM -->
                            <form action="AddManu.php" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                        <div class="control-group">
                                            <label class="control-label">Name :</label>
                                            <div class="controls">
                                                <input type="text" class="span11" placeholder="Product name" name="name" required /> *
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