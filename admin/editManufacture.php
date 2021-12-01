<?php
    ob_start(); 
    include "header.php";
    $id;
    if(isset($_GET['keymanu']))
    {
        $manufactures = new Manufacture();
        $getManu = $manufactures -> getManufacture();
        $id =$_GET['keymanu'];
        $arr = $manufactures -> getExactlyManu($id);
        if(isset($_POST['name']))
        {
            $name =$_POST['name'];
            $manufactures -> UpdateManu($arr[0]["maHang"],$name);
            echo '<script language="javascript">';
            echo 'alert("Sửa Thành Công !!!")';
            echo '</script>';
            header("Location:manufactures.php");
        }
    }
?>
 
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Product info</h5>
                        </div>
                        <div class="widget-content nopadding">

                             <!-- BEGIN USER FORM -->
                            <form action="editManufacture.php?keymanu=<?php echo $arr[0]["maHang"]?>" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group"> 
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Product name" name="name" value="<?= $arr[0]['tenHang']?>" /> *
                                    </div>
                                </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success">Update</button>
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