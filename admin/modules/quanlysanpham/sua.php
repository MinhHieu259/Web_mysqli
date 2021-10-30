<?php
    $sql_sua_sanpham= "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]'LIMIT 1";
    $query_sua_sanpham= mysqli_query($mysqli,$sql_sua_sanpham);
    

    
?>
<h3 style="text-align: center;">Sửa sản phẩm</h3>
<br>
<?php
while($row= mysqli_fetch_array($query_sua_sanpham)){


?>
<form action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" method="post" class="sua" enctype="multipart/form-data">
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
       
        </thead>
        <tbody>
            <tr>
                <td >Tên sản phẩm</td>
                <td><input type="text" value="<?php echo $row['tensanpham']?>" name="tensanpham"></td>
                
            </tr>

            <tr>
                <td >Mã sản phẩm</td>
                <td><input type="text" value="<?php echo $row['masp']?>" name="masanpham"></td>
                
            </tr>

            <tr>
                <td >Giá</td>
                <td><input type="text" value="<?php echo $row['giasp']?>" name="gia"></td>
                
            </tr>

            <tr>
                <td >Số lượng</td>
                <td><input type="text" value="<?php echo $row['soluong']?>" name="soluong"></td>
                
            </tr>

            
            <tr>
                <td >Hình ảnh</td>
                <td><input type="file" name="hinhanh">
                <img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh']?>" alt="Ảnh" width="150px">
            </td>
                
            </tr>

            <tr>
                <td >Tóm tắt</td>
                <td><textarea rows="5" name="tomtat"><?php echo $row['tomtat']?></textarea></td>
                
            </tr>

            <tr>
                <td >Nội dung</td>
                <td><textarea rows="5" name="noidung"><?php echo $row['noidung']?></textarea></td>
                
            </tr>

            <tr>
                <td >Danh mục sản phẩm</td>
                <td>
                    <select name="danhmuc">
                        <?php
                        $sql_danhmuc= "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
                        ?>
                        <?php
                        while($row_danhmuc= mysqli_fetch_array($query_danhmuc)){
                            if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
                        ?>
                        <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                        <?php
                            }else{
                                
                        ?>
                        <option  value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                        <?php
                        }
                        }
                        ?>
                    </select>
                </td>
                
            </tr>  

            <tr>
                <td >Tình trạng</td>
                <td>
                    <select name="tinhtrang">
                        <?php
                            if($row['tinhtrang']==1){
                        ?>
                        <option value="1" selected>Kích hoạt</option>
                        <option value="0">Ẩn</option>
                        <?php
                            }else{
                        ?> 
                            <option value="1">Kích hoạt</option>
                        <option value="0" selected>Ẩn</option>
                        <?php
                            }
                            ?>
                        
                    </select>
                </td>
                
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
            </tr>
        </tbody>
</table>
</form>
<?php
}
?>
