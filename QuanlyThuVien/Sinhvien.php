<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <?php
        require './amin/ConnectDB.php';
        getConnection();
        mysql_selectDB("Demo");
        $sql = "Select * From CSDLCN8";
        $query = mysql_query($sql);
        ?>
        <div class="container ">
            <table border="1">
                <thead>

                    <tr>
                        <th>STT</th>
                        <th>Họ Đệm</th>
                        <th>Tên</th>
                        <th>Mã Sinh Viên</th>
                        <th>Số CMT</th>
                        <th>Ngày Sinh</th>
                        <th>Quê Quán</th>
                        <th>Nơi Tạm Trú</th>
                        <th>Số Điện Thoai</th>
                        <th>Email/Facebook/etc...</th>
                    </tr>

                </thead>
                <tbody>
                    <?php while ($row = mysql_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $row[0] ?></td>
                            <td><?php echo $row[1] ?></td>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo $row[3] ?></td>
                            <td><?php echo $row[4] ?></td>
                            <td><?php echo $row[5] ?></td>
                            <td><?php echo $row[6] ?></td>
                            <td><?php echo $row[7] ?></td>
                            <td><?php echo $row[8] ?></td>
                            <td><?php echo $row[9] ?></td>
                            <td>
                                <form method="POST" action="Monhoc.php">
                                    <input type="hidden" name="masv" value="<?php echo $row[3] ?>">
                                    <input type="submit" name="nhap" value="Đăng Kí">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


    </body>
</html>