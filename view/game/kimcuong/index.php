<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 16; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `kimcuong` WHERE `status`='1' AND `nguoimua`='null' ORDER BY RAND() LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM kimcuong WHERE `status`='1' AND `nguoimua`='null'"));
?>





            


    <div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->



  <div class="container content-black">

    
        <div class="row">
            <div class="col-sm-12">
                
                
                
                
                
                <div class="alert alert-info" role="alert">
                    <h1 class="alert-heading" style="color:#000">Rương Thần Huyền Bí</h1>
                    <p><strong>100% Nhận Được Kim Cương<br>
&nbsp;</strong></p>

<p><strong>10% Nhận gói Nạp&nbsp;</strong><strong>15000&nbsp;</strong><strong>Kim Cương</strong><br>
<strong>15% Nhận gói Nạp&nbsp;</strong><strong>9999&nbsp;</strong><strong>Kim Cương</strong><br>
<strong>25% Nhận Gói Nạp&nbsp;</strong><strong>3500&nbsp;</strong><strong>Kim Cương</strong><br>
<strong>10% Nhận Gọi Nạp&nbsp;</strong><strong>2000&nbsp;</strong><strong>Kim Cương</strong><br>
<strong>40% Nhận Gói Nạp Kim Cương Bất Kỳ<br>
&nbsp;</strong></p>

<p><strong>Tỷ lệ nhận được gói kim cương vip siêu cao &lt;</strong></p>
            </div>
        </div>
    </div>
                
                
                
                
                
                
                
                
                
                </div>
            </div>
        </div>

<style type="text/css">
    .form-control {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    box-shadow: none;
    outline: none;
    font-weight: 300;
    background: while;
    border-color: #fcfcfc;
}

</style>


        
                    <div class="row row-flex  item-list">


<?php 
while ($row = mysqli_fetch_array($result)) { ?>



<div class="col-sm-6 col-md-3">
    <div class="classWithPad">
        <div class="image">

            <a href="#" class="load-modal" rel="/buyruby/201059">
                <img src="<?php echo $kun->hinhanh_game('homkimcuong');?>">
                <span class="ms">MS: <?php echo $row['id'];?></span>
            </a>

        </div>
        <div class="description">

        </div>
        <div class="attribute_info">
            <div class="row">

                
                
                        
                
            </div>
        </div>
        <div class="a-more">
            <div class="row">
                <div class="col-xs-6">
                    <div class="price_item">
                        <?php echo number_format($row['giatien']);?>đ

                    </div>
                </div>
                <div class="col-xs-6 ">
                    <div class="view">
                        				                          
                                                <a href="#" class="load-modal" onclick="getdata('<?php echo $row['id'];?>')">Mua ngay</a>

                        
                                            </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php } ?>

<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
	<center>
<?php
if ($tong > $kmess){
echo '<center>' . $kun->phantrang('/body/random/KC1/', $start, $tong, $kmess) . '</center>';
}
?>
	</center>
</div>

</div>


</div>



                </div>



<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>






</div>
            </div>
        </div>
</div>

<script>
    $(function(){
                        $('#noticeModal').modal('show')



    });
</script>


<script type="text/javascript">
	function getdata(id) {
		var curModal = $('#LoadModal');
		curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");


			$.ajax({
                method: "POST",
                url: "/model/game/kimcuong/laythongtin.php",
                data: {
                    id: id
                },
                success : function(response){
					curModal.modal('show').find('.modal-content').html(response);
                }
            });



	}
</script>