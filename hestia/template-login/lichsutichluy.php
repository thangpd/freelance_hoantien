<?php /* Template Name: lichsutichluy */ ?>
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
<?php
$ch = curl_init();
$dayfrom=$_GET["dayfrom"]; 
$dayto=$_GET["dayto"]; 
curl_setopt($ch, CURLOPT_URL, 'https://api.accesstrade.vn/v1/orders?since='.$dayfrom.'T00:00:00Z&until='.$dayto.'T23:59:59Z&limit=5000');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Token DhWCF1DsWClYr4ApYrsH5XpdScuxwj7P',
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
 curl_close($ch); 
 
 $json = json_decode($result,true); 


?>
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
					$tv="select * from settinghoahong";
					$kqtv=$wpdb->get_row($tv);
					$phantramhh=$kqtv->phantramhoahong;
		?>
		<div class="blk blk-reg member-info center pad-20 pad-0-b border-lr">
            <span class="bblk f-16 pad-10-t pad-10-b lh-1">Chào bạn</span>
            <span class="member-name bblk f-30 lh-1"><?php echo $disname; ?></span>
             <span class="bblk f-16 pad-10-t pad-10-b lh-1">MÃ NGƯỜI DÙNG</span>
            <span class="member-name bblk f-30 lh-1"><?php echo $id_user; ?></span>
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
                      

		
						
				
						
		
<table cellpadding="30" cellspacing="30" style="">
	<tbody>
		<tr>
			<td style="text-align: justify;"><span style="text-align: justify; font-size: 16px;"><span style="font-family: &quot;times new roman&quot;, times, serif;"><span style="color: rgb(0, 0, 0);">1. Tiền hoàn sẽ tự động chuyển vào tài khoản ngân hàng của bạn vào ngày 22 hàng tháng và khi số dư &gt; 50,000đ.<br />

			&nbsp; &nbsp; &nbsp;Ví dụ: Tất cả các đơn hàng phát sinh trong tháng 03 sẽ được hoàn tiền vào ngày 22 tháng 05.<br />
			
			&nbsp; &nbsp; &nbsp;Nếu bạn chưa cập nhật số tài khoản ngân hàng, vui lòng cập nhật ngay&nbsp;</span><u><a href="https://hoantienmuasam.com/tai-khoan-cua-toi/"><span style="color:#0000CD;">tại đây</span></a></u><span style="color: rgb(0, 0, 0);">.<br />
			
				
				
				
				
				
				
			2. Trong khoản 30 phút - 30 giờ, đơn hàng bạn đã mua sẽ hiển thị bên dưới. </span></span></span></td>
		</tr>
	</tbody>
</table>

&nbsp;
<br />


						
							
						
						
						
						
						
						
						
                    </div>
			
			
			
					</div>
		
		
		
        </div>
			
	</div>
	
	
	
</div>
<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
jQuery(document).ready(function($){
	$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	$( "#datepickers" ).datepicker({ dateFormat: 'yy-mm-dd' });
})
</script>

<style>
.selectdate{
	display:flex;
}
.selectdate form{
	    margin: auto;
    padding: 20px;
}
</style>
<div class="wrap">
<h1 style="text-align:center; font-weight:bold; margin-bottom:20px"></h1>





<br />
<div style="text-align: center;"><span style="font-size:16px;"><span style="font-size:36px;"><span style="color:#008000;"><span style="font-family:times new roman,times,serif;"><strong>DANH SÁCH ĐƠN HÀNG</strong></span></span></span></span></div>

<div style="text-align: center;"><span style="font-size:16px;"><span style="color:#000000;"><span style="font-family:times new roman,times,serif;">(Bạn chỉ có thể xem dữ liệu từng tháng, ví dụ chọn ngày <strong>01/04 - 30/04</strong> hoặc <strong>01/07 - 31/07</strong>)</span></span></span></div>
<br />






<div class="selectdate">
	<form method="GET" action="">
TỪ NGÀY:
<input id="datepicker" name="dayfrom" value=
<?php
 if(isset($_GET['dayfrom']))
 { 
echo $_GET['dayfrom']; 
} ?> >
ĐẾN NGÀY:
<input id="datepickers" name="dayto" value=
<?php
 if(isset($_GET['dayto']))
 { 
echo $_GET['dayto']; 
} ?> >
<input type="submit" name="submit">
</form>
</div>

<table id="bangdonhanguser" class="wp-list-table widefat fixed striped posts">
	<thead>
	<tr>
		<th scope="col" class="manage-column"><span>Mã đơn hàng</span></th>
		<th scope="col" class="manage-column"><span>Thời gian mua</span></th>
		<th scope="col" class="manage-column"><span>Số tiền</span></th>
		
		
		<th scope="col" class="manage-column"><span>Tiền hoàn trả</span></th>
		<th scope="col" class="manage-column"><span>Trạng thái thanh toán</span></th>
		<th scope="col" class="manage-column"><span>Trạng thái đơn hàng</span></th>
		<th scope="col" class="manage-column"><span>Cửa hàng</span></th>
	</tr>
	</thead>
	<tbody id="the-list">
		<?php
		foreach($json['data'] as $product)
		{
		foreach($product['products'] as $pr)
		{
			$idbuy=$pr["_extra"]["parameters"]["utm_buyid"];
			if($idbuy==$id_user)
			{
			?>
			<tr>
			<td class="title column-title has-row-actions  page-title" ><strong><span><?php echo $product['order_id'] ?></span></strong></td>
			
			<td class="title column-title has-row-actions  page-title" ><strong><span><?php echo $product['confirmed_time'] ?></span></strong></td>
			<td class="title column-title has-row-actions  page-title" ><strong><span><?php echo adddotstring($pr['product_price']); ?></span></strong></td>
		
			
			<td class="title column-title has-row-actions  page-title" ><strong><span><?php 
			$tienhoantra=($pr['pub_commission']*$phantramhh)/100;
			$tienhoantra=intval($tienhoantra);
			echo adddotstring($tienhoantra);
			$tongcashback=$tongcashback+$tienhoantra;
			?></span></strong></td>
			<td class="title column-title has-row-actions  page-title" ><strong><span>
			<?php
		
						$cautruyvan="select * from ghichudonhang where mahang='".$product['order_id']."' and iduser=".$id_user;
						$ketquatruyvan=$wpdb->get_row($cautruyvan);
						echo $ketquatruyvan->trangthaithanhtoan;
			
		
	?>
			</span></strong></td>
			<td class="title column-title has-row-actions  page-title" ><strong><span>
			<?php
		
			$pending=$product["order_pending"];
			$reject=$product["order_reject"];
			$success=$product["order_success"];
			$orderstatus=$pr["status"];
			$orderconfirm=$product["is_confirmed"];
			if($pending=="1")
			{
				echo "Đang chờ duyệt";
			}
			if($reject=="1")
			{
				echo "Đã hủy";
			}
			if($success=="1" && $orderstatus=="1" && $orderconfirm=="0")
			{
				echo "Tạm duyệt";
				
				
			}
			if($success=="1" && $orderstatus=="1" && $orderconfirm=="1")
			{
				echo "Đã duyệt";
				
				
			}
		
	?>
			</span></strong></td>
			<?php
				$mahang=$_POST["mahang"];
				$ghichudonhang=$_POST["ghichudonhang"];
				$cautruyvans="select * from ghichudonhang WHERE mahang=".$mahang."AND iduser=".$idnguoidung;
				$ketquatruyvans=$wpdb->get_row($cautruyvans);
					$chuaco=1;
						$ma=$ketquatruyvans->mahang;
						$idm=$ketquatruyvans->id;
						
				?>
					<td class="title column-title has-row-actions  page-title" ><strong><span><?php echo $product['merchant']; ?></span></strong></td>
			</tr>
			<?php
			}
			
		}
	}
	if($mahang==$ma)
						{
	$wpdb->update('ghichudonhang', array('ghichudonhang'=>$ghichudonhang,'iduser'=>$id_user), array('id'=>$idm));
					$chuaco=0;
						}
					if($chuaco==1)
					{
					
	$wpdb->insert('ghichudonhang', array(
				'mahang' => $mahang,
				'ghichudonhang' => $ghichudonhang,
				'iduser'		=> $id_user,
				));
					}
	?>
			
				
				
				
		
	</tbody>
	</table>

</div>
<?php
			$query="select * from sotientichluy where iduser=".$id_user;
					$kqquery=$wpdb->get_row($query);
					$mauser=$kqquery->iduser;
					if($mauser==$id_user)
					{
						$wpdb->update('sotientichluy', array('sotiendukien'=>$tongcashback,'sotienthuclanh'=>$tonghienlanh), array('iduser'=>$id_user));
						
						
					}
					else
					{
						$wpdb->insert('sotientichluy', array(
				'iduser' => $id_user,
				'sotiendukien' => $tongcashback,
				'sotienthuclanh'		=> $tonghienlanh,
				));
					}
					



 ?>

</div>


<?php get_footer(); ?>








