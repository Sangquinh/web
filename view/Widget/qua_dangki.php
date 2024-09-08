</style>	<style type="text/css">
    #bonus{
        position: fixed;
        bottom: 15px;
        left: 15px;
        width: 13%;
        z-index: 1000;
        cursor: pointer;
    }
    #bonus img{
        width: 100%;
    }
	#bonus_login{
		display:block;
        position: fixed;
        bottom: 15px;
        left: 15px;
        width: 13%;
        z-index: 1000;
        cursor: pointer;
    }
    #bonus_login img{
        width: 100%;
    }
    .mobile{
        width: 30%!important;
    }
	@media  only screen and (max-width: 640px) {
		#bonus_login{width: 50%!important;!important;}
		#bonus{width: 50%!important;!important;}
	}
	#bonusModal .modal-body p,#bonusModal .modal-body b{display:inline;color:#000}
</style>


<?php
/*
╔═════════════════════════════════════════════╗
║     Design by Youtuber Duy Code                     ║
║      Facebook: facebook.com/nguyenkhacduy.in4       ║
║      Vui Lòng không Xoá dòng này                    ║
╚═════════════════════════════════════════════╝
*/
if(!$_SESSION['token']) { 
    ?>
<a id="bonus_login" href="/login.html" title="Click để nhận thưởng!" class="">
        <img src="https://shoptoantay.net/storage/images/G7AlIYVu6T_1620761848.gif">
</a>
<?php
 }else { 
    ?>
<a id="bonus_login" title="Click để nhận thưởng!" class="">
        <img src="https://shoptoantay.net/storage/images/G7AlIYVu6T_1620761848.gif">
</a>
<div id="modal_register_gift"></div>
<script type="text/javascript">
        
    $(document).ready(function() {
        $('#bonus_login').click(function() {
            $('#bonus_login').hide();

            $("#modal_register_gift").load("/model/register_gift.php");

        });
    });


</script>


<?php
}
?>


