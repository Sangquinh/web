<?php
defined('KUNKEYPR') or exit('Restricted Access');
?>



<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">DANH SÁCH VÒNG QUAY KIM CƯƠNG</h4>
                                <div class="text-right"><a style="color: #fff;" href="?modun=vongquay_kimcuong&act=add" type="button" class="btn waves-effect waves-light btn-rounded btn-info">Thêm Vòng Quay</a></div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                           <th scope="col">ID #</th>
										   <th scope="col">Tên Vòng Quay</th>
										   <th scope="col">Trạng Thái</th>
										   <th scope="col">Đã Quay</th>
										   <th scope="col">Giá Tiền</th>
										   <th scope="col">Thời Gian</th>
										   <th scope="col">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>



	<?php
		$sql = mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_kimcuong` ORDER BY `time` DESC");
		while ($row = mysqli_fetch_array($sql)) {
			if($row['status'] == 'false')$check='';else $check='checked';
			?>

		<tr>
		   <th scope="row">#<?php echo $row['id'];?></th>
		   <td><?php echo $row['name'];?></td>
		   <td>
		   		<div class="switch">

					<label class="cl-switch cl-switch-large">
						<input onclick="options(<?php echo $row['id'];?>, 'vq_<?php echo $row['id'];?>')" id="vq_<?php echo $row['id'];?>" type="checkbox" <?php echo $check;?>>
						<span class="switcher"></span>
					</label>


                </div>
           </td>
		   <td><?php echo number_format($row['sudung']);?> <sup>lần</sup></td>
		   <td><?php echo number_format($row['giatien']);?> <sup>vnđ</sup></td>
		   <td><?php echo date('H:i d/m', $row['time']);?></td>
		<td>
		   <a href="?modun=vongquay_kimcuong&act=edit&id=<?php echo $row['id'];?>">
		   <button type="button" class="btn btn-info btn-outline btn-xs m-r-5 tooltip-info"><i class="fa fa-edit"></i></button>
		   </a>
		   <button onclick="del(<?php echo $row['id'];?>, '<?php echo $row['name'];?>')" type="button" class="btn btn-danger btn-outline btn-xs m-r-5 tooltip-danger"><i class="fa fa-trash"></i></button>
		</td>
		</tr> 

		<?php
		}
		?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>






<script type="text/javascript">
function del(id, name) {
	 if (confirm('Bạn có chắc muốn xóa '+name+'?')) {
	 		location.href = '?modun=vongquay_kimcuong&act=delete&id='+id;
		} else {
			alert('Hãy suy nghĩ kĩ trước khi xóa gì đó nhé!');
		}
}

function options(id, element) {

		var checkbox = $('#'+element);

		if(checkbox.prop("checked") == true){
	 			$.ajax({url: '/admin/model/vongquaykimcuong/status_vongquay.php',
	                type: 'POST',
	                dataType: 'text',
	                data: {
	                    id: id,
	                    status: checkbox.prop("checked")
	                }
	            }).done(function(res) {});
            }else if(checkbox.prop("checked") == false){
				$.ajax({url: '/admin/model/vongquaykimcuong/status_vongquay.php',
	                type: 'POST',
	                dataType: 'text',
	                data: {
	                    id: id,
	                    status: checkbox.prop("checked")
	                }
	            }).done(function(res) {});
            }
}

</script>

