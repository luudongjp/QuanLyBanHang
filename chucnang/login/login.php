<?php 
	if (isset($_SESSION['email'])){
?>
<div id="login" class="col-md-4 col-sm-12 col-xs-12 text-right" style="padding-top: 7px; margin-bottom: -4px;">
    <div id="login-main">
        <p>Xin chào <?php echo $_SESSION['email'];?><span> / </span> <a href="./quantri/chucnang/dangxuat/dangxuat.php">Đăng xuất</a></p>
    </div>
</div>
<?php  
	}else{
?>
<div id="login" class="col-md-4 col-sm-12 col-xs-12 text-right" style="padding-top: 7px; margin-bottom: -4px;">
    <div id="login-main">
        <p><a href="./quantri/index.php">Đăng nhập</a> <span> / </span> <a href="./chucnang/tao_tk/taotk.php">Đăng ký</a></p>
    </div>
</div>
<?php  
	}
?>