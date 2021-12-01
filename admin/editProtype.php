<?php
    ob_start(); 
    include "header.php";
    $id;
    if(isset($_GET['keytype']))
    {
        $protype = new Protype();
        $id =$_GET['keytype'];
        $arr = $protype -> getExactlyProtype($id);
        if(isset($_POST['name']))
        {
            $name =$_POST['name'];
            $protype -> UpdateProtype($arr[0]["type_id"],$name);
            echo '<script language="javascript">';
            echo 'alert("Sửa Thành Công !!!")';
            echo '</script>';
            header("Location:protypes.php");
        }
    }
?>
 
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Product info</h5>
                        </div>
                        <div class="widget-content nopadding">

                             <!-- BEGIN USER FORM -->
                            <form action="editProtype.php?keytype=<?php echo $arr[0]["type_id"]?>" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group"> 
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Product name" name="name" value="<?= $arr[0]['type_name']?>" /> *
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