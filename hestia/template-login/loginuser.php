<?php /* Template Name: login-user */ ?>
<?php get_header(); ?>
<style>
.form-login{
    margin-top: 100px !important;
    margin: auto;
    padding: 20px;
    margin-bottom: 50px;
	display:flex;
	background: white;
}
.form-login #wppb-login-wrap{
	margin-right:70px;
	width:100%;
}
@media only screen and (max-width:576px){
	.form-login{
		flex-direction: column;
	}
	.form-login #wppb-login-wrap{
	margin-right:0px;
	width:100%;
	border-bottom: 1px solid black;
}
.form-login .form-register{
	padding-top:20px;
}
}

#nf-form-2_1-cont input{
	background: white;

.form-register{
	width:50%;
}

</style>
<style>
.login{
	width:50% !important;
}
.login h1{
	font-size:30px;
	margin-bottom:10px;
}
.form-register h1{
	font-size:30px;
}
#nf-form-2-cont form{
	padding:0;
}
.login a{
	color:black;
}
.lostpassword{
	display:none;
}
</style>
<?php 
if(isset($_GET['loginName']) && isset($_GET['key']))
{
	?>
	<script>
	jQuery(document).ready(function($){
	
		$(".lostpassword").show();
	
});
	</script>
	<?php
}
?>
<script>
jQuery(document).ready(function($){
	$("#losspass").click(function(){
		$(".lostpassword").show();
	});
});
</script>
<div class="container">
<p class="textmuahang">Khi mua hàng tại Tiki, Lazada, FPT Shop và 100+ website bán hàng khác. Ngoài nhận ưu đãi bình thường từ các website bạn mua hàng. Nhận thêm hoàn tiền đến 10%</p>
<div class="form-login">
<div class="login" style="width:50%;">
<h1>ĐĂNG NHẬP</h1>
 <?php echo do_shortcode('[wppb-login]') ?>
 <a id="losspass" href="javascript:void:0">Bạn quên mật khẩu ?</a>
 <div class="lostpassword">
  <?php echo do_shortcode('[wppb-recover-password]') ?>
  </div>
</div>
 <div class="form-register">
 <h1>ĐĂNG KÝ</h1>
	<?php echo do_shortcode('[ninja_form id=2]') ?>
 </div>
</div>
</div>
<?php get_footer(); ?>
