<?php
    $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc= mysqli_query($mysqli,$sql_danhmuc);
    if(isset($_GET['id'])){
      $id= $_GET['id'];
    }else {
      $id='';
    }
?>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sidebar">
        <div class="panel panel-default">
              
              <div class="panel panel-primary">
                    <div class="panel-heading">
                          <h3 class="panel-title">Danh mục sản phẩm</h3>
                    </div>
                    <div class="panel-body">
                         
                         <div class="list-group">
                               <?php
                               while($row = mysqli_fetch_array($query_danhmuc)){
                               ?>
                             <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>" <?php if($id==$row['id_danhmuc']){ echo 'class="list-group-item active"';}else { echo 'class="list-group-item"';}?>><?php echo $row['tendanhmuc']?></a>
                             <?php
                               }
                             ?>
                         </div>                
                    </div>
              </div>   
        </div>
        </div>