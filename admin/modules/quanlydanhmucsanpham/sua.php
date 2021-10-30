<?php
    $sql_sua_danhmuc= "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]'LIMIT 1";
    $query_sua_danhmuc= mysqli_query($mysqli,$sql_sua_danhmuc);
    

    
?>
<h3 style="text-align: center;">Sửa danh mục sản phẩm</h3>
<br>
<form action="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="post" class="them">
<table class="table table-striped table-inverse table-responsive">
    <?php
while($row = mysqli_fetch_array($query_sua_danhmuc)){
    ?>
    <thead class="thead-inverse">
       
        </thead>
        <tbody>
            <tr>
                <td >Tên danh mục</td>
                <td><input type="text" value="<?php echo $row['tendanhmuc']?>" name="tendanhmuc"></td>
                
            </tr>
            <tr>
                <td >Thứ tự</td>
                <td><input type="text" value="<?php echo $row['thutu']?>" name="thutu"></td>
                
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
            </tr>
        </tbody>
</table>
<?php
}
?>
</form>