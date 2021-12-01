<?php
   ob_start(); 
    include "header.php";
    $user = new User();
    if(isset($_POST['username'], $_POST['pass'], $_POST['Role']))
        {
            $username =$_POST['username'];
            $pass=md5($_POST['pass']);
            $role=$_POST['Role'];
            $product = new Product();
            echo '<script language="javascript">';
            echo 'alert("Thêm Thành Công !!!")';
            echo '</script>';
            $user -> AddUser($username,$pass,$role);   
        }
?>
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>User</h5>
                        </div>
                        <div class="widget-content nopadding">

                             <!-- BEGIN USER FORM -->
                            <form action="AddUser.php" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">UserName :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="UserName" name="username"required /> *
                                    </div>
                                </div>
                                        <div class="control-group">
                                            <label class="control-label">PassWord :</label>
                                            <div class="controls">
                                                <input type="text" class="span11" placeholder="PassWord" name="pass" required/> *
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Role :</label>
                                            <div class="controls">
                                                <input type="number" class="span11" name="Role" min="1" max="3" required/> *
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