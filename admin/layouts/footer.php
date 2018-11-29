 <footer class="page-footer">
                <div class="footer-copyright text-center py-3" style="height:40px;line-height:40px; background-color: #1e282d !important; color: #fff;">© 2018 Copyright:
                    <a href="#"> swatch.com</a>
                 </div>
            </footer>
        </div>
        <!-- /#wrapper -->
        <!-- Footer -->
    
  <!-- Footer -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#table-customer').DataTable();
            } );
            
             $('.delete_customer').click(function(event){
                event.preventDefault();
            if (!confirm("Bạn có chắc chắn muốn xóa khách hàng này?")){
             return false;
             }
             id= $(this).attr('id');
             console.log(id);
             $.ajax({
                type:"POST",
                data:{id: id},
                url: 'xoakhachhang.php',
                success: function(data){
                    console.log(data);
                    location.reload();
                }
             });

            });

        </script>

    </body>
</html>
