<?php
    $sql_lietke_sanpham= "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sanpham= mysqli_query($mysqli,$sql_lietke_sanpham);
?>
<p>Danh sách các sản phẩm:</p>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá SP</th>
            <th>Số lượng</th>
            <th>Danh mục</th>
            <th>Mã SP</th>
            <th>Tóm tắt</th>
            <th>Trạng thái</th>
            <th>Quản lý</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($query_lietke_sanpham)){
                $i++;
                ?>
                <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row['tensanpham']?></td>
                <td><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh']?>" alt="Ảnh" width="150px"></td>
                <td><?php echo $row['giasp']?></td>
                <td><?php echo $row['soluong']?></td>
                <td><?php echo $row['tendanhmuc']?></td>
                <td><?php echo $row['masp']?></td>
                <td><?php echo $row['tomtat']?></td>
                <td><?php if($row['tinhtrang']==1){
                        echo 'Kích hoạt';
                }else{
                    echo 'Ẩn';
                }
                
                ?>
                </td>
                <td>
                <a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a>
                <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a>
                </td>
            </tr>
            <?php
            }
            ?>
        
    </tbody>
    
  
</table>