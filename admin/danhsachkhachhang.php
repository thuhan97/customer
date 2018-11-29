
<?php
// Nhận biến Page(Số thứ tự của Trang)
// Liệt kê Danh sách dữ liệu trên mỗi trang
$sql = "SELECT * FROM khachhang  ORDER BY id DESC";
$query = mysqli_query($dbConnect, $sql);
?>
 <div id="page-wrapper">
            <div class="page-header">
                <i class="fa fa-list"></i> Khách hàng
                <div class="pull-right">
               <a href="index.php?page_layout=themkhachhang"><button class="btn btn-success  ><i class="fa fa-plus"></i> Thêm mới</button></a>
                <button class="btn btn-primary "><i class="fa fa-download"> Xuất File</i></button>
                <button class="btn btn-basic "><i class="fa fa-upload"> Nhập File</i></button>
                </div>
            </div>
            <div id="live_data"></div>
            <div class="table-reponsive" >
                <table class="table table-hover table-bordered table-striped" id="table-customer" >
                    <thead>
                        <tr>
                            <th style="width: 8%;">#</th>
                            <th style="width: 12%;">Họ đệm</th>
                            <th style="width: 8%;">Tên </th>
                            <th style="width: 10%;">Điện thoại</th>
                            <th style="width: 12%;">Email </th>
                            <th style="width: 12%;">Địa chỉ</th>
                            <th style="width: 10%;" >Loại khách</th>
                            <th style="width: 10%;">Ngày sinh</th>
                            <th style="width: 6%;">Giới tính</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($query)){?> 
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['lastname']?></td>
                            <td><?php echo $row['firstname']?> </td>
                            <td><?php echo $row['phone']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><?php  if( $row['group_customer']==1) echo"Khách lẻ"; elseif($row['group_customer']==2) echo "Khách sỉ"; else echo "Doanh nghiệp";?></td>
                            <td><?php echo $row['birthday']?></td>
                            <td><?php if( $row['gender']==0) echo " Nam"; else echo "Nữ"?></td>
                            <td>
                                <a href="index.php?page_layout=suakhachhang&id=<?php echo $row['id'];?>" style="color: blue;"><i class="fa fa-edit"></i></a>
                                <a class="delete_customer" id="<?php echo $row['id']?>" href="" style="color: red;"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                       <?php }?>
                    </tbody>
                </table>
            </div>    
        </div>
