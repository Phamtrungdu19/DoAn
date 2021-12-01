<?php
    ob_start(); 
    include "header.php";
    $id;
    if(isset($_GET['userName']))
    {
        $user = new User();
        $id =$_GET['userName'];
        $arr = $user -> getExaclyUser($id);
        if(isset($_POST['userName']) && isset($_POST['passWord']) && isset($_POST['Role']))
        {
            $username =$_POST['userName'];
            $pass=md5($_POST['passWord']);
            $role=$_POST['Role'];
            $user -> UpdateUser($username,$pass,$role);
            echo '<script language="javascript">';
            echo 'alert("Sửa Thành Công !!!")';
            echo '</script>';
            header("Location:users.php");
        }
    }
?>
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Product info</h5>
                        </div>
                        <div class="widget-content nopadding">
                             <!-- BEGIN USER FORM -->
                            <form action="editUser.php?userName=<?php echo $arr[0]["name_user"]?>" method="post" disabled >
                                <div class="control-group"> 
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Product name" name="userName" value="<?= $arr[0]["name_user"]?>" required/> *
                                    </div>
                                </div>
                                <div class="control-group">
                                            <label class="control-label">PassWord :</label>
                                            <div class="controls">
                                                <input type="text" class="span11" placeholder="PassWord" name="passWord" value="<?= $arr[0]["pass_user"]?>"required/> *
                                            </div>
                                        </div>
                                <div class="control-group">
                                            <label class="control-label">Role :</label>
                                            <div class="controls">
                                                <input type="number" class="span11" name="Role" min="1" max="3" value="<?= $arr[0]["Role"]?>" required/> *
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