<link rel="stylesheet" href="style.css">
<div class="row">
    <div class="row header">
        <h2>Danh sách</h2>
    </div>
    <div class="row formcontent">
        <div class="row mb10">
            <table>
                <tr>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>

                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id_sp=" . $id_sp;
                    $xoasp = "index.php?act=xoasp&id_sp=" . $id_sp;
                    $hinhpath = "../upload/" . $img_sp;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' witdh='' height=''>";
                    } else {
                        $hinh = "No photo";
                    }
                    echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>' . $id_sp . '</td>
                                            <td>' . $name_sp . '</td>
                                            <td>' . $img_sp . '</td>
                                            <td>' . $price . '</td>
                                            <td><a href="' . $suasp . '"><input type="button" name="" value="Sửa"></a></td>
                                            <td><a href="' . $xoasp . '"><input type="button" name="" value="Xóa"></a></td>
                                        </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">

        </div>
        <div class="row mb10">

            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
        </form>
    </div>
</div>