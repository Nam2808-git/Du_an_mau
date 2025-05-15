<div class="row">
            <div class="row header">
                <h2>Danh sách</h2>
            </div>
            <div class="formcontent">
                    <div class="row mb10">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    $suadm="index.php?act=suadm&iddm=".$iddm;
                                    $xoadm="index.php?act=xoadm&iddm=".$iddm;
                                    echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$iddm.'</td>
                                            <td>'.$namedm.'</td>
                                            <td><a href="'.$suadm.'"><input type="button" name="" value="Sửa"></a></td>
                                            <td><a href="'.$xoadm.'"><input type="button" name="" value="Xóa"></a></td>
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
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>
                </form>
            </div>
        </div>