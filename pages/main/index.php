<?php
if(isset($_GET['trang'])){
  $page= $_GET['trang'];
}else {
  $page=1;
}
if($page=='' || $page==1){
  $begin=0;
}else {
  $begin= ($page*6)-6;
}
  $sql_proindex="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham
   DESC LIMIT $begin,6";
  $query_proindex= mysqli_query($mysqli,$sql_proindex);
?>
<h1 style="text-align: center;">Sản phẩm mới nhất</h1>
        <div class="row padding products">
          <?php
          while($row = mysqli_fetch_array($query_proindex)){
          ?>
           <div class="col-xs-12 col-sm-6 col-md-4 dt">
         
         <div class="thumbnail">
             
         <div class="card shadow">
                <div class="card-body">
                    <img src="admin/modules/quanlysanpham/uploads/<?php echo $row['hinhanh']?>" alt="anh" class="img-fluid card-img-top">
                  <h3 class="card-title"><?php echo $row['tensanpham']?></h3>
                  <h6>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  </h6>
                  <p class="card-text"><?php echo $row['tomtat']?></p>
                  <h5>
                     <span class="price"><?php echo number_format($row['giasp'],0,',','.').' VNĐ'?></span>
                     <p style="color: gray;"><?php echo $row['tendanhmuc']?></p>
                  </h5>
                  
                  <a class="chitiet" style="border-radius: 3px; " href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">Chi tiết</a>
                </div>
              </div>
         </div>
         
     </div>
           <?php
          }
           ?>
    </div>
    <?php
      $sql_trang= "SELECT * FROM tbl_sanpham";
      $query_trang= mysqli_query($mysqli,$sql_trang);
      $row_count= mysqli_num_rows($query_trang);
     $trang= ceil($row_count/6);
    ?>
    <nav aria-label="Page navigation">
      <ul class="pagination">
        <li <?php if($page==1){echo 'class="page-item disabled"';}else {echo 'class="page-item"';}?>>
          <a class="page-link" href="index.php?trang=<?php echo $page-1?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <?php
          for($i=1;$i<=$trang;$i++){
        ?>
        <li <?php if($i==$page){echo 'class="page-item active"';}else {echo 'class="page-item"';}?> ><a class="page-link" href="index.php?trang=<?php echo $i?>"><?php echo $i?></a></li>
       <?php
          }
       ?>
        <li  <?php if($page==$trang){echo 'class="page-item disabled"';}else {echo 'class="page-item"';}?>>
          <a class="page-link" href="index.php?trang=<?php echo $page+1?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
