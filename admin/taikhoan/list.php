<div class="row">
            <div class="row header">
                <h2>DANH SÁCH TÀI KHOẢN</h2>
            </div>
            <div class="formcontent">
                    <div class="row mb10">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã tài khoản</th>
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Vai trò</th>
                            </tr>
                            <?php
                                foreach ($listtaikhoan as $taikhoan) {
                                    extract($taikhoan);
                                    $suatk="index.php?act=suatk&id_nd=".$id_nd;
                                    $xoatk="index.php?act=xoatk&id_nd=".$id_nd;
                                    echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id_nd.'</td>
                                            <td>'.$user.'</td>
                                            <td>'.$password.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$tel.'</td>
                                            <td>'.$role.'</td>
                                            <td><a href="'.$suatk.'"><input type="button" name="" value="Sửa"></a></td>
                                            <td><a href="'.$xoatk.'"><input type="button" name="" value="Xóa"></a></td>
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