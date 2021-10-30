<?php
    $sql_lietke_danhmuc= "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmuc= mysqli_query($mysqli,$sql_lietke_danhmuc);
?>
<p>Danh sách các danh mục sản phẩm:</p>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Quản lý</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($query_lietke_danhmuc)){
                $i++;
                ?>
                <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row['tendanhmuc']?></td>
                
                <td>
                <a href="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a>
                <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa </a>
                
                </td>
            </tr>
            <?php
            }
            ?>
        
    </tbody>
    
  
</table>