<?php 
require_once('./model/model.php');
$model = new Model();
$listdanhmuc = $model->getsDanhMuc();
require_once('view/header.php'); ?>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center h3 mt-4">Trung Nghĩa</h1>
                <div class="row bored">
                    <div class="col-6">
                        <b>Địa chỉ:</b>Phường Linh Đông, Thành phố Thủ Đức<br>
                        <b>Điện thoại:</b> 0934945803
                    </div>
                </div>
                
            </div>
            <div class="col-12" class="text-center">
                <img class="ml-5 mt-2 mb-2" src="assets/diachi.png" alt="">
            </div>
        </div>
    <!-- footer -->
  <footer class="bd-footer text-muted">
  <div class="container-fluid p-3 p-md-5">
    <ul class="bd-footer-links">
      <li><a href="index.php"><i class="fas fa-cube"></i> Trang chủ</a></li>
      <li><a href="gioithieu.php"><i class="fas fa-cube"></i> Đội ngũ</a></li>
      <li><a href="dieukhoan.php"><i class="fas fa-cube"></i> Điều khoản</a></li>
      <li><a href="khieunai.php"><i class="fas fa-cube"></i> Khiếu nại</a></li>
    </ul>
    <p><b>Địa chỉ :</b>Phường Linh Đông, Thành phố Thủ Đức</p>
    <p class="float-left">Trường đại học công nghệ Thành Phố Hồ Chí Minh - HUTECH</b></p>
    <a href="#top" class="float-right" style="font-size: 25px" alt="lên đầu trang" title="lên đầu trang"><i class="fas fa-caret-square-up"></i></a>
  </div>
</footer>
            </div>
<?php require_once('view/footer.php'); ?>