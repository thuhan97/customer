<?php
// Nhận biến Page(Số thứ tự của Trang)
// Liệt kê Danh sách dữ liệu trên mỗi trang
$currentMonth= date('m');
$sql = "SELECT * FROM khachhang  WHERE MONTH(birthday)= $currentMonth";
$query = mysqli_query($dbConnect, $sql);
?>
  <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bảng điều khiển</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>Bình luận mới!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>Khách hàng mới!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>Đơn hàng mới!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-universal-access fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Thống kê truy cập!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Biểu đồ thống kê khách hàng theo số lượng
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                data-toggle="dropdown">
                                            Actions
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-birthday-cake fa-fw"></i> Chúc mừng sinh nhật
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                data-toggle="dropdown">
                                            Tháng
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#">Tháng 1</a>
                                            </li>
                                            <li><a href="#">Tháng 2</a>
                                            </li>
                                            <li><a href="#">Tháng 3</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Xem tất cả</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive" style="height: 400px;">
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Mã</th>
                                                    <th>Họ tên</th>
                                                    <th>Ngày sinh</th>
                                                    <th>Email</th>
                                                    <th>Điện thoại</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while($row = mysqli_fetch_array($query)){?> 
                                                <tr>
                                                    <td><?php echo $row['id']?></td>
                                                    <td><?php echo $row['lastname']?></td>
                                                    <td><?php echo $row['birthday']?></td>
                                                    <td><?php echo $row['email']?></td>
                                                    <td><?php echo $row['phone']?></td>
                                                </tr>
                                                 <?php }?>
                                                
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                    <!-- /.col-lg-4 (nested) -->
                                   
                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                       
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-6">
                       
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Biểu đồ thống kê khách hàng theo phân phúc
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <a href="#" class="btn btn-default btn-block">Xem chi tiết</a>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                         <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i> Lịch hẹn
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="list-group" >
                                    
                                        <div class="table-responsive" style="height: 300px;">
                                   <table class="table table-hover table-bordered table-striped">
                                       <thead>
                                        <tr>
                                               <th>STT</th>
                                               <th>Tiêu đề</th>
                                               <th>Thực hiện</th>
                                               <th>Khách hàng</th>
                                               <th>Nội dung</th>
                                               <th>Địa điểm</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                        <tr>
                                           <td>1</td>
                                           <td>Tư vấn trả góp</td>
                                           <td>Dương Hân Hân</td>
                                           <td>Nguyễn Thế Hải</td>
                                           <td>Gặp khách hàng </td>
                                           <td>Quầy chăm sóc khách hàng</td>
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Tư vấn trả góp</td>
                                           <td>Dương Hân Hân</td>
                                           <td>Nguyễn Thế Hải</td>
                                           <td>Gặp khách hàng </td>
                                           <td>Quầy chăm sóc khách hàng</td>
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Tư vấn trả góp</td>
                                           <td>Dương Hân Hân</td>
                                           <td>Nguyễn Thế Hải</td>
                                           <td>Gặp khách hàng </td>
                                           <td>Quầy chăm sóc khách hàng</td>
                                        </tr>
                                       </tbody>
                                   </table> 
                                  
                                   </div>
                                </div>
                                <!-- /.list-group -->
                                <a href="#" class="btn btn-default btn-block">Xem tất cả</a>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                     
                        <!-- /.panel .chat-panel -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>