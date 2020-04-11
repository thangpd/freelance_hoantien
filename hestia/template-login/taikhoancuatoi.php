<?php /* Template Name: account-page */ ?>
<?php get_header(); ?>
<?php
if(is_user_logged_in())
{
	
}
else
{
	?>
	<script>
	window.location.href = "https://hoantienmuasam.com/dang-nhap";
	</script>
	<?php
}
?>
<?php
function adddotstring($strNum) {
 
        $len = strlen($strNum);
        $counter = 3;
        $result = "";
        while ($len - $counter >= 0)
        {
            $con = substr($strNum, $len - $counter , 3);
            $result = ','.$con.$result;
            $counter+= 3;
        }
        $con = substr($strNum, 0 , 3 - ($counter - $len) );
        $result = $con.$result;
        if(substr($result,0,1)==','){
            $result=substr($result,1,$len+1);   
        }
        return $result;
}
?>
<style>
*{
	    margin: 0;
    padding: 0;
    color: #333;
}
	.container-fixed {
    width: 1170px;
    margin: 0 auto;
    padding: 0;
}
.main-page{
	margin-top:100px;
}
.left-sidebar{
	float:left;
	width:30%;
	    border: 1px solid #cccccc;
}
.col-right{
	float:right;
	width: 68%;
	margin-top:-9px;
}
.border-lr{
	border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
}
.cent, .center, .f-cent{
	text-align:center;
}
.blk-reg, .bg-reg, .bg-w{
	background:white;
}
.pad-0-b{
	padding-bottom:0;
}
.pad-20{
	padding:20px;
}
.lh-1{
	line-height:1;
}
.f-16{
	font-size:16px;
}
.pad-10-t{
	padding-top:10px;
}
.pad-10-b{
	padding-bottom:10px;
}
.block, .bblk, .icn{
	display:block;
}
.member-info .member-name{
	padding-bottom:12px;
}
.f-30{
	font-size:30px;
}
.f-reg, .f-14{
	font-size:14px;

}
.f-gry-dk2, .f-gry-dk-9{
	color:#999;
}
.mar-15-b{
	padding-bottom:15px;
}
.mar-10-b{
	margin-bottom:10px;
	margin-top:10px;
}
.member-edit img{
	width:14px;
	margin-right:10px;
}
a{
	color:#23ae4a;
	font-weight:400;
}
.bg-gry{
	background-color: #ebebeb;
}
.pad-15 {
    padding: 15px;
}
.f-20{
	font-size:20px;
}
.pad-25-t {
    padding-top: 25px;
}
.f-13 {
    font-size: 13px;
}
.bg-grn, .grn-bar {
    background-color: #23ae4a;
}
.mar-15-t {
    margin-top: 15px;
}
.pad-15-tb {
    padding-top: 15px;
    padding-bottom: 15px;
	padding-left:10px;
	padding-right:10px;
}
.iblk, .i-icn {
    display: inline-block;
}
.f-white, .f-white a {
    color: #fff;
}
.border-t-0 {
    border-top: none !important;
}
.border {
    border: 1px solid #ccc;
}
.f-24 {
    font-size: 24px;
}
.f-24 {
    font-size: 24px;
}
.border-b {
    border-bottom: 1px solid #ccc;
}
.dashboard-cb-one{
	display:flex;
}
.dashboard-cb .col-two-third {
    width: 66%;
}
.col-third {
    width: 33.33%;
}
.mar-20-tb {
    margin-top: 20px;
    margin-bottom: 20px;
}
.pad-20-tb {
    padding-bottom: 20px;
}
.f-15 {
    font-size: 15px;
}
.pad-15-b {
    padding-bottom: 15px;
}
.f-40 {
    font-size: 40px;
}
h1, h2, .f-grn {
    color: #23ae4a;
}
.pad-25-b {
    padding-bottom: 25px;
}
.pad-60-l {
    padding-left: 15px;
}
.f-18 {
    font-size: 18px;
}
.f-norm, .f-norm a {
    color: #333 !important;
}
.border-r {
    border-right: 1px solid #ccc;
}
.mar-20-t {
    margin-top: 20px;
}
.pad-20-lr {
    padding-right: 20px;
	margin:4px;
    padding-left: 20px;
	text-align: center;
    padding: 20px;
}

.button.int, .button-lg.int, .button-xlg.int, .button-xxlg.int {
    background-color: #23ae4a;
}
.button {
    font-size: 15px;
    line-height: 15px;
}
.button {
    font-size: 16px;
    line-height: 16px;
    padding: 7px 12px;
}
.button, .button-sm, .button-lg, .button-xlg, .button-xxlg {
    border: none;
    cursor: pointer;
    transition: all 0.1s;
    text-align: center;
    display: inline-block;
    color: #fff;
    border-radius: 3px;
}
.bg-blu2 {
    background-color: #43aed2;
}
.pointer {
    cursor: pointer;
}
.account-page .fa-bell {
    margin: 0 5px 0 0;
    vertical-align: -2px;
}
h3 {
    font-size: 20px;
}
.f-white img{
	width:24px;
}

.icon_circle{
	width:16px;
	margin-right:10px;
}
@media only screen and (max-width:576px){

.left-sidebar,.col-right,.col-third,.dashboard-cb .col-two-third{
	width:100%;
}
.dashboard-cb-one{
	flex-direction: column;
}
.main-page{
	margin-top:50px;
}
.pad-60-l{
	padding-left:20px;
	padding-right:20px;
}
.pad-20-lr{
	text-align:center;
}
.pad-20-tb{
	padding-bottom:0;
	padding-top:0;
}
}
@media only screen and (max-width:768px){
	.pad-60-l{
	padding-left: 15px;
    padding-right: 15px;
}
}
</style>
<div class="container">
<div class="main-page">
	<div class="left-sidebar">
		<?php
		$id_user=get_current_user_id();
		$the_user = get_userdata($id_user);
$disname=$the_user->display_name;
$querys="select * from sotientichluy where iduser=".$id_user;
					$kqquerys=$wpdb->get_row($querys);
					$stdk=$kqquerys->sotiendukien;
					$sttl=$kqquerys->sotienthuclanh;
		?>
		<div class="blk blk-reg member-info center pad-20 pad-0-b border-lr">
            <span class="bblk f-16 pad-10-t pad-10-b lh-1">Chào bạn</span>
            <span class="member-name bblk f-30 lh-1"><?php echo $disname; ?></span>
            <span class="member-edit bblk mar-10-b">
                   <span class="bblk f-16 pad-10-t pad-10-b lh-1">MÃ NGƯỜI DÙNG</span>
            <span class="member-name bblk f-30 lh-1"><?php echo $id_user; ?></span>
            <span class="member-edit bblk mar-10-b">
            </span>
        </div>
		<div class="blk pad-15 bg-gry center border-lr">
			<span class="f-14 bblk pad-4-b">Số tiền được hoàn</span>
			<span class="f-20 bblk">
			<a href="/lich-su-tich-luy">
			<?php 
			if($sttl=="")
			{
				echo "0 đ";
			}
			else
			{
				echo adddotstring($sttl)." đ";
			}
			 ?>                       
			</a>                
			</span>
				<span class="f-14 bblk pad-4-b">Số tiền hoàn dự kiến</span>
			<span class="f-20 bblk">
			<a href="/lich-su-tich-luy">
			<?php 
			if($stdk=="")
			{
				echo "0 đ";
			}
			else
			{
				echo adddotstring($stdk)." đ";
			}
			 ?>                    
			</a>                
			</span>
			<span class="f-13 bblk">
			<?php
				$cautvan="select * from lichsugiaodich";
									$kqtruyv=$wpdb->get_row($cautvan);
				echo $kqtruyv->noidunggiaodich."</br>";
				echo "SỐ TIỀN ĐƯỢC HOA HỒNG: ".$kqtruyv->sotiengiaodich;
			?>
			</span>
			
</div>
	</div>
	<div class="col-right">
		<div class="dashboard-cb blk blk-reg border mar-10-b border-t-0">
					<div class="dashboard-cb-one">
                    <div class=>
                    
                        </ul>
                    </div>
                    <div class=>
                          <br />
						
						

			<table cellpadding="30" cellspacing="30" style=>
	<tbody>
		<tr>
			<td style="text-align: justify;"><span style="font-size:18px;"><span style="color: rgb(0, 0, 0); font-family: &quot;times new roman&quot;, times, serif; text-align: center;">Bạn hãy điền đầy đủ và chính xác thông tin, đặc biệt là phần ngân hàng để chúng tôi chuyển khoản tiền hoàn cho bạn.<br />
			<br />
			Bạn vui lòng đọc đầy đủ hướng dẫn mua hàng nhận hoàn tiền&nbsp;</span><strong style="color: rgb(0, 0, 0); font-family: &quot;times new roman&quot;, times, serif; font-size: 17px; text-align: center;"><a href="https://hoantienmuasam.com/hoan-tien-mua-sam/">tại đây</a></strong><span style="color: rgb(0, 0, 0); font-family: &quot;times new roman&quot;, times, serif; text-align: center;">&nbsp;trước khi bắt đầu mua sắm nhé.</span></span></td>
		</tr>
	</tbody>
</table>

<p style="text-align: center;">&nbsp;</p>
			
						
						
						
						
						

                  
			
			</div>
					</div>
        </div>
	
		<div class="blk mar-10-b" id="welcome-wrapper">
						<h2 style="    text-align: center;
    margin: 0px;
    font-size: 27px;
    margin-bottom: 20px;">CHỈNH SỬA THÔNG TIN CÁ NHÂN</h2>
                       <?php echo do_shortcode('[wppb-edit-profile form_name="chinh-sua-thong-tin"]'); ?>
                     
                    </div>
	
		


	
	

	
	
	
	
	
	
	
	
	
	
	</div>
</div>
</div>
<?php get_footer(); ?>