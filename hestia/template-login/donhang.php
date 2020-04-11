<?php /* Template Name: donhang */ ?>
<?php get_header(); ?>
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
}
.col-right{
	float:right;
	width: 68%;
	margin-top:-18px;
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
    padding-top: 20px;
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
    padding-left: 60px;
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
.main-page{
	margin-top:50px;
}
.dashboard-cb-one{
	flex-direction: column;
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
<!-- donhang -->
ul.order-note{
	    margin-top: 5px;
    margin-bottom: 10px;
}
ul {
    list-style-type: none;
}
.pad-20-lr {
    padding-right: 20px;
    padding-left: 20px;
}
ul.order-note li {
    font-size: 13px;
    line-height: 19px;
    list-style-type: disc;
    margin-left: 30px;
}
.dashboard-trips table tr {
    height: 30px;
    line-height: 30px;
}
.f-left {
    text-align: left;
}
.rel {
    position: relative;
}

#list-my-order.tt-table tr {
    vertical-align: top;
}
table>thead>tr>th, .table>thead>tr>th {
    border-bottom-width: 1px;
    padding: 0;
    vertical-align: middle;
}
.bg-gry th{
	    font-size: 15px;
    padding-left: 10px;
    padding-right: 10px;
    font-weight: 500;
}
.form-group{
	padding-bottom:0;
}
@media only screen and (max-width:576px){

.bg-gry th{
	font-size:9px !important;
	padding-right:0;
}
}
@media only screen and (max-width:768px){

.bg-gry th{
	font-size:11px;
	padding-right:0;
}

}
</style>
<div class="container">
<div class="main-page">
	<div class="left-sidebar">
		<div class="blk blk-reg member-info center pad-20 pad-0-b border-lr">
            <span class="bblk f-16 pad-10-t pad-10-b lh-1">Chào bạn</span>
            <span class="member-name bblk f-30 lh-1">can thai</span>
            <span class="f-gry-dk2 f-14 iblk mar-15-b">Ngày đăng ký: 26-07-2019</span>
            <span class="member-edit bblk mar-10-b">
                <a class="nohover" href="/chinh-sua-thong-tin">
                    <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2019/07/writing.png">Chỉnh sửa thông tin tài khoản
                </a>
            </span>
        </div>
		<div class="blk pad-15 bg-gry center border-lr">
			<span class="f-14 bblk pad-4-b">Số tiền tích lũy đang có</span>
			<span class="f-20 bblk">
			<a href="/lich-su-tich-luy">
			0đ                    
			</a>                
			</span>
			<span class="f-14 bblk pad-25-t pad-4-b">(*)Tiền thưởng thành viên mới đang chờ</span>
			<span class="f-20 bblk">
			<a href="javascript:void(0)">
			10.000đ
			</a>                                        
			</span>
			<span class="f-13 bblk">
			<a href="/ho-tro/chuong-trinh-thuong-thanh-vien-moi">
			Khi nào thì nhận thưởng?
			</a>
			</span>
			<a id="optionA" href="/gioi-thieu-ban-be" class="prox-r bg-grn pad-15-tb iblk nohover mar-15-t" style=" border-radius: 3px;">
			<span class="center lh-1"><span style="color:white;"><img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2019/07/plus-1.png" class="icon_circle">Nhận thưởng thêm 20.000đ</span></span>
			</a>
</div>
	</div>
	<div class="col-right">
		<div class="dashboard-trips blk mar-10-b">
                    <div class="blk blk-reg border border-b-0 border-t-0 pad-10 pad-20-lr f-left">
                        <h2 class="f-24 f-norm flt shopping-trip-head">Đơn hàng của bạn </h2>
                    </div>
                    <div class="blk blk1 blk-reg border border-t-0 rel">
                        <div class="pad-0-t pad-10-b pad-20-lr no-fav-txt">
                            <span class="f-13 lh-22">
                                Nếu bạn đã mua hàng mà sau 60 phút vẫn chưa thấy đơn hàng của mình xuất hiện bên dưới, hãy làm 1 trong 2 cách sau:
                            </span>
                            <ul class="order-note">
                                <li>Hủy đơn hàng và tiến hành đặt hàng lại bằng link của Tích Lũy.</li>
                                <li><a href="/ho-tro/bao-mat-don-hang">Báo mất đơn hàng tại đây</a></li>
                            </ul>
                            <span class="f-13 lh-22">
                                Giá trị đơn hàng dùng để tính tiền hoàn lại có thể chênh lệch so với giá trị thanh toán thực tế vì lí do thuế VAT, phí vận chuyển,mã giảm giá và các loại phụ phí khác. Điều này phụ thuộc vào chính sách giá và các điều khoản tại cửa hàng đối tác của Tích Lũy.
                            </span>
                            
                            <br>
                            
                        </div>

                    </div>

<form action="/don-hang" class="form-vertical" data-ajax="true" data-ajax-mode="replace" data-ajax-update="#shopping-trips-data" id="form-search" method="post" style="margin-bottom: 0"><input id="PageIndex" name="PageIndex" type="hidden" value="1"><input id="PageSize" name="PageSize" type="hidden" value="10"></form>
                    <div id="shopping-trips-data"><div class="blk rel blk-reg border border-t-0" id="expand-cont">
    <table id="list-my-order" width="100%" border="0" cellspacing="0" class="tt-table f-13">
        <thead>
            <tr class="bg-gry">
                <th class="td-time pad-20-l rel f-left bld">
                    Thời gian
                </th>
                <th class="td-store f-left bld">
                    Cửa hàng
                </th>
                <th class="f-left pad-20-l bld" >Trạng thái</th>
                <th class="f-right  pad-20-r bld">Giá tiền</th>
                <th class="f-right pad-20-r bld">Số tiền hoàn lại</th>
                <th class="f-left bld">Ngày hoàn tiền</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="pad-20-t">
        </tbody>
    </table>
</div>
<div class="blk mar-20-t">
    <div id="pager" class="pager"></div>
</div>
<!--
<script type="text/javascript">     
$().ready(function() { $('#pager').pager({ pagenumber: 1,
    pagecount: 0, buttonClickCallback: function(pageIndex)
    { $('#PageIndex').val(pageIndex);
        $('#form-search').submit();
    } }); });
    
</script>

<script type="text/javascript">
    $('.show-order-detail').click(function () {
        $(this).closest('tr').next().toggle();
    });

</script>
-->

</div>
        <div class="blk blk-reg border pad-10 pad-20-lr f-cent" style="border: 1px dashed red; padding-top:10px;">
            <p>Bạn không tìm thấy đơn hàng đã mua? Hãy <a href="/ho-tro/bao-mat-don-hang?from=myorders">báo mất đơn hàng tại đây</a> để Tích Lũy kiểm tra ngay nhé.</p>
         </div>
        </div>
	</div>
</div>
</div>
<?php get_footer(); ?>