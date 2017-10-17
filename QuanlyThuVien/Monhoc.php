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
        $sql = "Select * From monhoc";
        $query = mysql_query($sql);
        ?>
        <div class="container ">
            <!--<form method="POST" action="">-->
            <table border="1">


                <thead>

                    <tr>
                        <th>STT</th>
                        <th>Mã Môn Học</th>
                        <th>Tên Môn Học</th>
                        <th>Mã Sinh Viên</th>
                        <th>Số Tín Chỉ</th>
                        <th>Năm</th>
                        <th>Học Kì</th>
                        <th>BB Tự Chọn</th>
                        <th>Tình Trạng</th>
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
                    <form method="POST" action="amin/dangki.php">
                        <input type="hidden" name="masv" value="<?php echo $_POST['masv'] ?>">
                        <td>
    <!--                            <input type="hidden" name="sotc" value="<?php echo $row[3] ?>">-->
                            <input type="checkbox" name="mh_checkbox[]" value="<?php echo $row[1] ?>">

                        </td>

                        </tr>
                    <?php } ?>
                    </tbody>

            </table>
            <input type="submit" name="save" value="Save">
            </form>

            <!--</form>-->

        </div>
        <form method="POST">
            <input type="checkbox" name="check">
        </form>


    </body>
</html>