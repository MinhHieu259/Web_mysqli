<p>Liệt kê dơn hàng</p>
<?php
    $sql_lietke_dh= "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang= tbl_dangky.id_dangky  ORDER BY tbl_cart.id_cart DESC";
    $query_lietke_dh= mysqli_query($mysqli,$sql_lietke_dh);
?>
<p>Danh sách các đơn hàng:</p>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Mã đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Tình trạng</th>
            <th>Quản lý</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($query_lietke_dh)){
                $i++;
                ?>
                <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row['code_cart']?></td>
                <td><?php echo $row['tenkhach']?></td>
                <td><?php echo $row['diachi']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['dienthoai']?></td>
                <td>
                    <?php 
                        if($row['cart_status']==1){
                            echo '<a href="modules/quanlydonhang/xuly.php?cart_status=0&code='.$row['code_cart'].'">Chưa xử lý</a>';
                        }else {
                            echo '<p>Đã xử lý</p>';
                        }
                    ?>
                </td>
                <td>
                <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
                </td>
            </tr>
            <?php
            }
            ?>
        
    </tbody>
    
  
</table>