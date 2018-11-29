<?php
$id = $_GET['id'];

// Lấy Thông tin của ản phẩm trong CSDL
$sql = "SELECT * FROM khachhang WHERE id = $id";
$query = mysqli_query($dbConnect,$sql);
$row = mysqli_fetch_array($query);


if(isset($_POST['submit'])){
    // Bẫy lỗi để trống trường dữ liệu trong Form
    // Tên Sản phẩm

    if($_POST['lastname'] == ''){
        $error_lastname = '<span style="color:red;">(*)<span>'; 
    }
    else{
        $lastname = $_POST['lastname']; 
    }   
    // Giá Sản phẩm
    if($_POST['firstname'] == ''){
        $error_firstname = '<span style="color:red;">(*)<span>';    
    }
    else{
        $firstname = $_POST['firstname'];   
    }
    // Bảo hành
    if($_POST['email'] == ''){
        $error_email = '<span style="color:red;">(*)<span>';    
    }
    else{
        $email = $_POST['email'];   
    }
    // Phụ kiện
    if($_POST['phone'] == ''){
        $error_phone = '<span style="color:red;">(*)<span>';    
    }
    else{
        $phone = $_POST['phone'];   
    }
    // Tình trạng
    if($_POST['address'] == ''){
        $error_address = '<span style="color:red;">(*)<span>';  
    }
    else{
        $address = $_POST['address'];   
    }
    // Khuyến mãi
    if($_POST['group_customer'] == ''){
        $error_group_customer = '<span style="color:red;">(*)<span>';   
    }
    else{
        $group_customer = $_POST['group_customer']; 
    }
    // Trạng thái
    if($_POST['birthday'] == ''){
        $error_birthday = '<span style="color:red;">(*)<span>'; 
    }
    else{
        $birthday = $_POST['birthday']; 
    }
    // Chi tiết Sản phẩm
    if($_POST['gender'] == ''){
        $error_gender = '<span style="color:red;">(*)<span>';   
    }
    else{
        $gender = $_POST['gender']; 
    }

    // Thực thi lệnh Thêm thông tin sản phẩm mới vào CSDL
    if(isset($lastname) && isset($firstname) && isset($email) && isset($phone) && isset($address) && isset($group_customer) && isset($birthday) && isset($gender)){
        // Upload Ảnh Mô tả
        // Thêm Thông tin Sản phẩm vào CSDL
        $sql = "UPDATE khachhang SET  lastname = '$lastname', firstname = '$firstname', phone = '$phone', email = '$email', address = '$address', group_customer = $group_customer, birthday = '$birthday', gender = $gender WHERE id = $id";
        $query = mysqli_query($dbConnect, $sql);
        // Chuyển hướng đến trang Danh sách Sản phẩm để xem Sản phẩm mới thêm vào
        header('location:index.php?page_layout=danhsachkhachhang');    
    }
}
?>
  <div id="page-wrapper">
            <div class="page-header">
                 <h3>Sửa thông tin khách hàng</h3>
            </div>
           <div style="width: 90%;">
              <form id="add-customer" method="post" >
                <div class="row">
                    <div class="col-lg-6">
                   <div class="form-group">
                       <label>Họ đệm</label>
                       <input type="text" name="lastname" class="form-control" required value="<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];}else{echo $row['lastname'];}?>" />
                   </div>
                   <div class="form-group">
                       <label>Tên</label>
                       <input type="text" name="firstname" class="form-control" required value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];}else{echo $row['firstname'];}?>">
                   </div>
                   <div class="form-group">
                       <label>Điện thoại</label>
                       <input type="text" name="phone" class="form-control" required value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}else{echo $row['phone'];}?>">
                   </div>
                   <div class="form-group">
                       <label>Email</label>
                       <input type="text" name="email" class="form-control" required value="<?php if(isset($_POST['email'])){echo $_POST['email'];}else{echo $row['email'];}?>">
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="form-group">
                       <label>Địa chỉ</label>
                       <input type="text" name="address" class="form-control" required value="<?php if(isset($_POST['address'])){echo $_POST['address'];}else{echo $row['address'];}?>">
                   </div>
                   <div class="form-group">
                       <label>Ngày sinh</label>
                       <input type="date" name="birthday" class="form-control" required value="<?php if(isset($_POST['birthday'])){echo $_POST['birthday'];}else{echo $row['birthday'];}?>">
                   </div>
                    <div class="form-group">
                       <label>Loại khách</label>
                       <select  name="group_customer" class="form-control" required >
                            <option value=""></option>
                            <option value="1"<?php if(isset($_POST['group_customer'])){if ($_POST['group_customer']=='1'){?> selected="selected" <?php }}  else  if($row['group_customer'] == '1') { ?> selected="selected"<?php } ?>>Khách lẻ</option>
                            <option value="2"<?php if(isset($_POST['group_customer'])){if ($_POST['group_customer']=='2'){?> selected="selected" <?php }}  else if($row['group_customer'] == '2') { ?> selected="selected"<?php } ?>>Khách sỉ</option>
                            <option value="3" <?php if(isset($_POST['group_customer'])){if ($_POST['group_customer']=='3'){?> selected="selected" <?php }}  else if($row['group_customer'] == '3') { ?> selected="selected"<?php } ?>>Doanh nghiệp</option>
                        </select>
                   </div>
                   <div class="form-group">
                       <label>Giới tính</label></br>
                       <input type="radio" name="gender" value="0" checked="<?php if(isset($_POST['gender'])){if ($_POST['gender']==0) echo true;}else{if( $row['gender']==0) echo true;}?>"> Nam &nbsp;
                       <input type="radio" name="gender" value="1" checked="<?php if(isset($_POST['gender'])){if ($_POST['gender']==1) echo true;}else{if( $row['gender']==1) echo true;}?>"> Nữ
                   </div>
                  
               </div>
                </div>
                <button type="submit" name="submit" class="btn btn-success pull-right" >Lưu</button>
               </form>
           </div>      
        </div>
        
          