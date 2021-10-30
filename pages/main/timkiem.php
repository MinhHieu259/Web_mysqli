<?php
if(isset($_POST['tukhoa'])){
    $tukhoa= $_POST['tukhoa'];
}else {
    $tukhoa='';
}
  $sql_proindex="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham like '%".$tukhoa."%'";
  $query_proindex= mysqli_query($mysqli,$sql_proindex);
?>
<h1 style="text-align: center;">Từ khóa tìm kiếm: <?php echo $_POST['tukhoa']?></h1>
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