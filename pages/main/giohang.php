<h2 style="text-align: center;">Giỏ hàng</h2>
<p><?php
    if(isset($_SESSION['dangky'])){
        echo 'Xin chào: '.'<span style="color:red;">'.$_SESSION['dangky'].'</span>';
        
    }
?></p>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá sản phẩm</th>
            <th>Thành tiền</th>
            <th>Quản lý</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                if(isset($_SESSION['cart'])){
                    $i=0;
                    $tongtien=0;
                    foreach ($_SESSION['cart'] as $cart_item) {
                        $thanhtien= $cart_item['soluong'] * $cart_item['giasp'];
                        $tongtien+= $thanhtien;
                        $i++;
            ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $cart_item['masp']?></td>
                <td><?php echo $cart_item['tensanpham']?></td>
                <td><img src="admin/modules/quanlysanpham/uploads/<?php echo $cart_item['hinhanh']?>" alt="Ảnh" width="150px"></td>
                <td class="sluong">
                <a class="tru" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id']?>"><button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus" aria-hidden="true"></i></button></a>
                <?php echo $cart_item['soluong']?>
                <a class="cong" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id']?>"><button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus" aria-hidden="true"></i></button></a>
            </td>
                <td><?php echo number_format($cart_item['giasp'],0,',','.').' VNĐ'?></td>
                <td><?php echo number_format($thanhtien,0,',','.').' VNĐ'?></td>
                <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
            </tr>
            <?php }?>
            <tr>
                <td colspan="8">
                    <p style="margin-left: 40%;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' VNĐ'?></p>
                <p><a href="pages/main/themgiohang.php?xoatatca=1" style="float: right;">Xóa tất cả</a></p>
                <?php
                    if(isset($_SESSION['dangky'])){
                ?>
                    <p style="text-align: center;"><a href="pages/main/thanhtoan.php">Đặt hàng</a></p>
                <?php
                    }else {
                ?>
                    <p>Chưa có tài khoản ??? <a href="index.php?quanly=dangky">Đăng ký để đặt hàng</a></p>
                    <p>Đã có tài khoản ??? <a href="index.php?quanly=dangnhap">Đăng nhập để đặt hàng</a></p>
                <?php
                    }
                ?>
                
                
            </td>  
                
            </tr>
            <?php
                    
                }else{
            ?>
            <tr>
                <td colspan="8">Giỏ hàng đang trống !!!</td>  
            </tr>
            <?php
                }
            ?> 
        </tbody>
</table>