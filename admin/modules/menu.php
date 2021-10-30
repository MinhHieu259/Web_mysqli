<?php
  if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
    unset($_SESSION['dangnhap']);
    header("Location:login.php");
  }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php">Trang chủ Admin</a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?dangxuat=1">Đăng xuất : <?php if(isset($_SESSION['dangnhap'])){
            echo $_SESSION['dangnhap'];
          }?></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
