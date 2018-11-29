<?php
 include_once('../config/database.php');
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
		$sql = "INSERT INTO khachhang(lastname, firstname, email, phone, address, group_customer, birthday, gender) 
				VALUES('$lastname', '$firstname', '$email', '$phone', '$address', '$group_customer', '$birthday', '$gender')";
		$query = mysqli_query($dbConnect, $sql);
		// Chuyển hướng đến trang Danh sách Sản phẩm để xem Sản phẩm mới thêm vào
		// header('location:quantri.php?page_layout=danhsachkhachhang');	
		echo json_encode("data");
	}
}
?>