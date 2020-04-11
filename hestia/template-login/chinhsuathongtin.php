<?php /* Template Name: edit-infor */ ?>
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
	margin-top:-21px;
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
<!-- chỉnh sửa thông tin page -->
.f-24 {
    font-size: 24px;
}
.pad-15-tb {
    padding-top: 15px;
    padding-bottom: 15px;
}
.pad-20-b {
    padding-bottom: 20px;
}
.s-label {
    width: 193px;
}
#email-pwd-settings #password, #email-pwd-settings #reenterPassword, #email-pwd-settings #existingPassword {
    width: 209px;
    padding: 5px 0 5px 10px;
    margin-right: 6px;
}
#passwordFORM td {
    vertical-align: top;
}
.flt {
    float: left;
}
.f-left {
    text-align: left;
}
.form-group{
	margin-bottom:0px;
}
.form-control, .form-group .form-control{
	    background-image: none;
    border: 1px solid #ccc;
    width: 262px;
	padding-left:10px;
}
#form-flex{
	display:flex;
}
.form-p{
	width:26%;
}
.pad-30-c{
	margin-left:193px;
}
#pad-30-c{
	display:flex;
}
#pad-30-c .matkhau{
	margin-right:20px;
}
.form-class .submit{
	padding: 6px 20px !important;
    background: #23ae4a !important;
}
.col-right h3{
	padding-left:20px;
}
@media only screen and (max-width:576px){
	#form-flex,#pad-30-c{
		flex-direction:column;
	}
	.form-control, .form-group .form-control{
		width:100%;
	}
	.pad-30-c{
		margin-left:0;
	}
	.date_chose{
		margin-right:0px !important;
		margin-bottom:10px;
	}
	.main-page{
		margin-top:50px;
	}
	.form-p{
		text-align:left;
		width:100%;
	}
	.pad-20-b{
		padding-bottom:0px;
	}
}
@media only screen and (max-width:1024px){
	#form-flex{
		flex-direction:column;
	}
	.form-control, .form-group .form-control{
		width:100%;
	}
	.pad-30-c{
		margin-left:0;
	}
}
<!-- -->
#submit{
	padding: 8px 20px;
    margin-top: 0px;
	background: #23ae4a;
}
.date_chose{
	margin-right:10px;
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
			<a id="optionA" href="/gioi-thieu-ban-be" class="prox-r bg-grn pad-15-tb iblk nohover mar-15-t" style=" border-radius: 3px;padding-left:10px;padding-right:10px;">
			<span class="center lh-1"><span style="color:white;"><img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2019/07/plus-1.png" class="icon_circle">Nhận thưởng thêm 20.000đ</span></span>
			</a>
</div>
	</div>
	<!--  -->
	<div class="col-right">
		<div class="blk blk1 frt col-last" id="right-blk">
    <div class="blk blk-reg border border-t-0">
        <h3 class="f-24 pad-20-lr pad-15-tb border-t-0">Chỉnh sửa thông tin đăng nhập</h3>
    </div>
    <div id="email-pwd-settings" class="blk blk-reg border border-t-0 pad-15 pad-20-lr f-left">
        <div class="blk pad-20-b" id="form-flex">
            <span class="form-p">Email:</span><span class="f-14">vietcanthai1996@gmail.com</span>
        </div>

      <form>
		<div class="form-class">
			<div class="blk pad-20-b" id="form-flex">
				<span class="form-p">Mật khẩu:</span>
				<input type="password" class="" name="mk" placeholder="Mật khẩu hiện tại">	
			</div>
			<div class="pad-30-c" id="pad-30-c">
				<input type="password" class="matkhau" name="matkhau" placeholder="Mật khẩu mới">
				<input type="password" class="nhaplaimatkhau" name="nhaplaimk" placeholder="Nhập lại mật khẩu">
			</div>
			<input type="submit" value="Cập nhập" class="submit">
			<p>Nếu bạn không nhớ mật khẩu hiện tại hãy đăng xuất và sử dụng chức năng quên mật khẩu.</p>
		</div>
	  </form>
    </div>
	<div class="blk blk-reg border border-t-0 mar-20-t">
    <h3 class="f-24 pad-20-lr pad-15-tb border-t-0">Thay đổi mã giới thiệu</h3>
</div>
<div class="blk blk-reg border border-t-0 pad-15 pad-20-lr">
<form action="" id="ChangeReferralCode" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value="UUKfrLgYN4r0Tuu2fvgHhP-vk5xWUWCBwBgl6OyyQTQfwLgks8uEM8506Tm-rebT0Srt-DxywVLfUCvP8trdkqxEahU7AgQS8O8WZKvA7Oo1">        
<div class="blk pad-20-b" id="form-flex">
            <span class="form-p">Mã giới thiệu:</span>
            <div class="ibl flt">
                <input class="iblk border inputText uppercase" data-val="true" data-val-alphanumeric="Chỉ được sử dụng ký tự chữ và số." data-val-required="Vui lòng nhập mã giới thiệu" id="ReferralCode" maxlength="50" name="ReferralCode" type="text" value="thaic9">
                <br>
                <span class="field-validation-valid" data-valmsg-for="ReferralCode" data-valmsg-replace="true"></span>

            </div>
            <div class="blk pad-20-t">
                <input type="submit" value="Cập nhập" class="submit" id="submit">
            </div>
        </div>
</form>
</div>
<div class="blk blk-reg border border-t-0 mar-20-t">
                    <h3 id="cap-nhat-ngan-hang" class="f-24 pad-20-lr pad-15-tb border-t-0">Chỉnh sửa thông tin cá nhân</h3>
</div>
<div class="blk blk-reg border border-t-0 pad-15 pad-20-lr pad-30-b">
	 <form>
		<div class="form-class">
			<div class="blk pad-20-b" id="form-flex">
				<span class="form-p">Họ và tên:</span>
				<input type="text" class="" name="mk" value="can thai">	
			</div>
			<div class="blk pad-20-b" id="form-flex">
				<span class="form-p">Ngày sinh:</span>
				<select class="date_chose" id="BirthDate_Day" name="BirthDate_Day">
					<option value="0">--Ngày--</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				<select class="date_chose" id="BirthDate_Day" name="BirthDate_Day">
					<option value="0">--Tháng--</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				<select class="date_chose" id="BirthDate_Day" name="BirthDate_Day">
					<option value="0">--Năm--</option>
					<option value="1">1990</option>
					<option value="2">1991</option>
					<option value="3">1992</option>
				</select>
			</div>
			<div class="blk pad-10-b">
                            <span class="prox-b f-16 flt s-label iblk">Bạn muốn được gọi là</span>
                            <div class="ibl flt">
                                <label>
                                    <input data-val="true" data-val-required="Vui lòng chọn giới tính" id="Gender" name="Gender" type="radio" value="Female">
                                    Chị
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input data-val="true" data-val-required="Vui lòng chọn giới tính" id="Gender" name="Gender" type="radio" value="Male">
                                    Anh
                                </label>
                                <br>
                                <span class="field-validation-valid" data-valmsg-for="Gender" data-valmsg-replace="true"></span>
                            </div>
                        </div>
			<div style="margin-top: 27px;
    font-weight: bold;margin-bottom:20px;" class="f-18 bld" class="blk pad-20-t pad-30-b">
                        <span >Thông tin tài khoản ngân hàng để nhận tiền tích lũy</span>
                    </div>	
			<div class="blk pad-20-b" id="form-flex" >
                            <span class="form-p">Số tài khoản:</span>
                            <div class="ibl flt">
                                <input class="iblk border inputText" data-val="false" data-val-required="Vui lòng nhập số tài khoản" id="BankAccountNumber" maxlength="50" name="BankAccountNumber" type="text" value="">
                                (không nhập số thẻ ATM)
                                <br>
                                <span class="field-validation-valid" data-valmsg-for="BankAccountNumber" data-valmsg-replace="true"></span>
                            </div>

                        </div>	
<div class=" blk pad-20-b" id="form-flex">
                            <span class="form-p">Tên chủ tài khoản:</span>
                            <div class="ibl flt">
<input class="iblk border inputText" data-val="false" data-val-required="Vui lòng nhập chủ tài khoản" id="BankAccountName" maxlength="50" name="BankAccountName" type="text" value="">                                    <br>
<span class="field-validation-valid" data-valmsg-for="BankAccountName" data-valmsg-replace="true"></span>                            </div>

                        </div>
						<div class="blk pad-20-b" id="form-flex">
				<span class="form-p">Ngân hàng:</span>
				<select  id="NganHang" name="NganHang"><option value="">-- Chọn ngân hàng --</option>
<option value="NHTMCP AN BINH">ABBANK (NH An Bình)</option>
<option value="NHTMCP A CHAU">ACB (NH Á Châu)</option>
<option value="NH NN VA PTNT VN">AGRIBANK (NH Nông Nghiệp và PTNNT VN)</option>
<option value="NH ANZ VN">ANZ VN</option>
<option value="NHTMCP BAC A (BAC A BANK)">Bac A BANK (NH Bắc Á)</option>
<option value="NHTMCP BAO VIET">BAO VIET BANK (NH Bảo Việt)</option>
<option value="NH DT VA PT VN">BIDV (NH Đầu Tư và Phát Triển VN)</option>
<option value="NHTM TNHH MTV XAY DUNG VN">CB BANK (NH Xây Dựng VN)</option>
<option value="NH CITIBANK VN">Citibank VN</option>
<option value="NH HOP TAC">Co-opbank (NH Hợp Tác)</option>
<option value="NHTMCP DONG A">DONG A BANK (NH Đông Á)</option>
<option value="NHTMCP XUAT NHAP KHAU VN">EXIMBANK (NH Xuất Nhập Khẩu VN)</option>
<option value="NHTM TNHH MTV DAU KHI TOAN CAU">GPBANK (NH Dầu khí toàn cầu)</option>
<option value="NHTMCP PHAT TRIEN TPHCM">HDBANK (NH Phát Triển TP Hồ Chí Minh)</option>
<option value="NH TNHH HSBC VN">HSBC VN</option>
<option value="NHTMCP KIEN LONG">KIEN LONG BANK (NH Kiên Long)</option>
<option value="NHTMCP BUU DIEN LIEN VIET">LIEN VIET POST BANK (NH Bưu Điện Liên Việt)</option>
<option value="NHTMCP HANG HAI">MARITIME BANK (NH Hàng Hải)</option>
<option value="NHTMCP QUAN DOI">MB (NH Quân Đội)</option>
<option value="NHTMCP NAM A">Nam A Bank (NH Nam Á)</option>
<option value="NHTMCP QUOC DAN">NCB (NH Quốc Dân)</option>
<option value="INDOVINA BANK">NH TNHH  Indovina (INDOVINA Bank)</option>
<option value="NHTMCP PHUONG DONG">OCB (NH Phương Đông)</option>
<option value="NH TM TNHH MTV DAI DUONG">OCEAN BANK (NH Đại Dương)</option>
<option value="NHTMCP XANG DAU PETROLIMEX">PGBANK (NH Xăng Dầu Petrolimex)</option>
<option value="NHTMCP DAI CHUNG VN">PVCOMBANK (NH Đại Chúng VN)</option>
<option value="NHTMCP SAI GON THUONG TIN">SACOMBANK (NH Sài Gòn Thương Tín)</option>
<option value="NHTMCP SAI GON CONG THUONG">SAIGON BANK (NH Sài Gòn Công Thương)</option>
<option value="NHTMCP SAI GON">SCB (NH Sài Gòn)</option>
<option value="NHTMCP DONG NAM A">SEABANK (NH Đông Nam Á)</option>
<option value="NHTMCP SAI GON HA NOI">SHB (NH Sài Gòn Hà Nội)</option>
<option value="NH STANDARD CHARTERED VN">Standard Chartered VN</option>
<option value="NHTMCP KY THUONG VN">TECHCOMBANK (NH Kỹ Thương VN)</option>
<option value="NHTMCP TIEN PHONG">TIEN PHONG BANK (NH Tiên Phong)</option>
<option value="NH PHAT TRIEN VN">VDB (NH Phát Triển VN)</option>
<option value="NHTMCP QUOC TE">VIB (NH Quốc Tế)</option>
<option value="NHTMCP VIET A">VIET A BANK (NH Việt Á)</option>
<option value="NHTMCP BAN VIET">VIET CAPITAL BANK (NH Bản Việt)</option>
<option value="NHTMCP VIET HOA">VIET HOA BANK (NH Việt Hoa)</option>
<option value="NHTMCP VN THUONG TIN">VIETBANK (NH Việt Nam Thương Tín)</option>
<option value="NHTMCP NGOAI THUONG VN">VIETCOMBANK (NH Ngoại Thương VN)</option>
<option value="NHTMCP CONG THUONG VN">VIETINBANK (NH Công Thương VN)</option>
<option value="NHTMCP VIET NAM THINH VUONG">VPBANK (NH Việt Nam Thịnh Vượng)</option>
<option value="NHTMCP VUNG TAU">VUNGTAU BANK (NH Vũng Tàu)</option>
</select>
			</div>
			<div class="blk pad-20-b" id="form-flex">
				<span class="form-p">Chi nhánh:</span>
				<select class="inputCombo" data-val="false" data-val-required="Vui lòng chọn ngân hàng" id="NganHang" name="NganHang"><option value="">-- Chọn chi nhánh --</option>
		</select>
			</div>
			<div>
				<p class="pad-10-t lh-22 f-blu">
                                    Lưu ý: Phòng giao dịch KHÔNG PHẢI là chi nhánh. Bạn có thể liên hệ ngân hàng của mình để hỏi tên chi nhánh của tài khoản ngân hàng của mình.
                                </p>
								<p class="pad-10-t lh-22 f-blu">
                                    Nếu không cập nhật được thông tin ngân hàng, gửi thông tin qua ô chat để Tích Lũy cập nhật giúp bạn.
                                </p>
				<input type="submit" value="Cập nhập" class="submit">	
			</div>
					
		</div>
	  </form>
</div>	

<!-- -->
<div class="blk blk-reg border border-t-0 mar-20-t">
                    <h3 class="f-24 pad-20-lr pad-15-tb border-t-0">Đăng ký nhận email</h3>
                </div>
<div class="blk blk-reg border border-t-0 pad-15 pad-20-lr pad-30-b">
                    <p class="pad-15-b">Đăng ký nhận thông báo qua email về các cửa hàng chấp nhận hoàn tiền, mã giảm giá mua sắm, các chương trình khuyến mãi hấp dẫn.</p>
                    <div class="subs-cont">
                        <input type="checkbox" lang="hotDeals" checked="" value="true" name="subscribe" class="subscribeMail iblk" id="promotionalMail">
                        <h4 class="prox-b f-16 iblk mar-5-b"><label style="font-weight: bold !important;" for="promotionalMail">Email thông báo mã giảm giá, deal hot và các khuyến mãi mới</label></h4>
                        <p class="pad-20-l mar-5-b">
                            Nhận thông tin về mã giảm giá, khuyến mãi, hot deal từ các cửa hàng bạn yêu thích.<br>
                            Nhớ kiểm tra danh sách <a href="/cua-hang-yeu-thich">các cửa hàng yêu thích</a> xem đã có cửa hàng "ruột" của bạn chưa nhé.
                        </p>
                        <p class="pad-20-l f-gry-dk2">Bỏ chọn để hủy đăng ký nhận email. Vài ngày sau khi hủy đăng ký, có thể bạn vẫn thấy email từ TichLuy.vn gửi đến vì TichLuy.vn cần thời gian cập nhật yêu cầu của bạn trên tất cả hệ thống máy chủ.</p>
                    </div>
                    
                </div>				
</div>
	</div>
</div>
</div>
<?php get_footer(); ?>