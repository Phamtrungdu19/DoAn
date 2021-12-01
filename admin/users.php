<?php
    include "header.php";
$page=1;
$perpage =5;
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
$Protype = new User;
$getAllProtype = $Protype ->getAllUser($page,$perpage);
$totals=  count( $Protype ->getUsers());
?>
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="AddUser.php"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>User</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php foreach($getAllProtype as $item)
                                    {?>
                                    <tr class="">
                                        <td><?= $item['name_user'] ?></td>
                                        <td><?= $item['pass_user'] ?></td>
                                        <td><?= $item['Role'] ?></td>
                                        <td>
                                            <a href="editUser.php?userName=<?=$item['name_user']?>" class="btn btn-success btn-mini">Edit</a>
                                            <a href="delete.php?userName=<?=$item['name_user']?>" class="btn btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    <tr class="">
                                    </tr>

                                </tbody>
                            </table>
                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                <?= $Protype ->phanTrang($page,$perpage,$totals);?>
                                </ul>
                            </div>
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