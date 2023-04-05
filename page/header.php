<style>
.bg__logo {
	background-image: url("public/demo/logo.png");
}
.modal__input-radio {
	width: 20px;
	height: 20px;

}
.bg__modal {
	background-image: url("public/demo/model-form-1.png");
	background-position: right;
}

/*Respone sive*/
/*Mobile*/
@media (max-width: 739px) {
    .w-full {
    	width: 100% !important;
    }
    .flex__column-mobile {
    	flex-direction: column !important;
    }

    .button__mobile {
    	font-size: 16px !important;
    	padding: 15px 10px !important;
    	width: 90%;
    }
    

}
</style>


<div class="row d-md-flex d-none bg__black text-white h-70 header">
	<div class="col-md-3 h-100">
		<div class="bg__logo h-100 bg__cover"></div>
	</div>

	<div class="col-md-9 ps-4">
		<ul class="d-flex align-items-center h-100">
			<li class="me-3">
				<a href="index.php" class="text-uppercase text-white py-2 px-2 fw-bold fs-6 border__bottom-hover">Trang chủ</a>
			</li>
			<li class="me-3">
				<a href="dich_vu.php" class="text-uppercase text-white py-2 px-2 fw-bold fs-6 border__bottom-hover">Dịch vụ</a>
			</li>
			<li class="me-3">
				<a href="gioi_thieu.php" class="text-uppercase text-white py-2 px-2 fw-bold fs-6 border__bottom-hover">Giới thiệu</a>
			</li>
			<li class="me-3">
				<a href="tin_tuc.php" class="text-uppercase text-white py-2 px-2 fw-bold fs-6 border__bottom-hover">Tin tức</a>
			</li>
			<li class="me-3">
				<a href="lien_he.php" class="text-uppercase text-white py-2 px-2 fw-bold fs-6 border__bottom-hover">Liên hệ</a>
			</li>
			<li>
				<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-uppercase text-white py-2 px-2 fw-bold fs-6 border__bottom-big">Đăng ký tập thử</a>
			</li>
		</ul>
	</div>
</div>

<!-- Header Mobile -->
<div class="row h-70 d-md-none d-flex justify-content-between align-items-center bg__black px-3 header__mobile">
	<div class="col h-100">
		<div class="bg__logo h-100 bg__cover"></div>
	</div>
	<div class="col text-end">
		<a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" href="#" class="fs-3 text-white"><i class="bi bi-list"></i></a>
	</div>
</div>


<!-- Offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="text-end">
    <button type="button" class="btn-close text-reset mt-3 me-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="d-flex h-100 flex-column mt-5">
			<li>
				<a href="index.php" class="hover__link-mobile text-uppercase text-dark d-inline-block w-100 py-3 ps-3 fw-bold fs-6 ">Trang chủ</a>
			</li>
			<li>
				<a href="dich_vu.php" class="hover__link-mobile text-uppercase text-dark d-inline-block w-100 py-3 ps-3 fw-bold fs-6">Dịch vụ</a>
			</li>
			<li>
				<a href="gioi_thieu.php" class="hover__link-mobile text-uppercase text-dark d-inline-block w-100 py-3 ps-3 fw-bold fs-6">Giới thiệu</a>
			</li>
			<li>
				<a href="tin_tuc.php" class="hover__link-mobile text-uppercase text-dark d-inline-block w-100 py-3 ps-3 fw-bold fs-6">Tin tức</a>
			</li>
			<li>
				<a href="lien_he.php" class="hover__link-mobile text-uppercase text-dark d-inline-block w-100 py-3 ps-3 fw-bold fs-6">Liên hệ</a>
			</li>
			
		</ul>
  </div>
</div>


<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg mx-auto">
    <div class="modal-content px-3 py-4 bg__contain bg__modal">
      <div class="modal-header border-0 mb-3">
        <h5 class="modal-title text-uppercase text__primary fw-700" id="exampleModalLabel">ĐĂNG KÝ TẬP THỬ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       	<div class="w-60 w-full">
       		<p class="fs-18 text-dark lh-base">
       			Để được mời đến trung tâm Cali gần nhất và nhận tư vấn thể chất miễn phí tìm hiểu thêm về chương trình.
       		</p>

       		<div>
       			<div class="d-flex align-items-center my-3">
       				<input class="d-inline-block modal__input-radio" type="radio" name="loai-hinh" value="01 ngày tập miễn phí" checked="checked">
       				<span class="d-inline-block ms-2 fs-18 text-danger fw-700">01 ngày tập miễn phí</span>
       			</div>
       			<div class="d-flex align-items-center mb-3">
       				<input class="d-inline-block modal__input-radio" type="radio" name="loai-hinh" value="01 tháng + 02 buổi tập cùng HLV: 400,000 đ">
       				<span class="d-inline-block ms-2 fs-18 text-danger fw-700">
       					01 tháng + 02 buổi tập cùng HLV: 400,000 đ
       				</span>
       			</div>

       			<!-- form -->
       			<form action="#">
								<div class="position-relative mb-3">
									<i class="bi bi-person-fill position-absolute icon__center text__primary"></i>
									<input class="w-100 py-2 ps-5" type="text" placeholder="Họ tên">
								</div>
								<div class="position-relative">
									<i class="bi bi-telephone-fill position-absolute icon__center text__primary"></i>
									<input class="w-100 py-2 ps-5" type="text" placeholder="Số điện thoại">
								</div>
								<!-- select -->
								<div class="position-relative my-3">
									<i class="bi bi-geo-alt position-absolute icon__center text__primary"></i>
									<select name="khu-vuc" class="w-100 py-2 ps-5 pe-3">
										<option value="Chọn khu vực bạn sống">Chọn khu vực bạn sống</option>
										<option value="Hồ Chí Minh">Hồ Chí Minh</option> 
										<option value="Hà Nội">Hà Nội</option> 
										<option value="Cần Thơ">Cần Thơ</option> 
										<option value="Đà Nẵng">Đà Nẵng</option> 
										<option value="Nha Trang">Nha Trang</option>  
									</select>
								</div>
						</form>
       		</div>
       	</div>
      </div>
      <div class="d-flex mb-5 flex__column-mobile">
				<div>
					<button type="button" class="btn bg__primary button__hover px-3 py-3 fs-5 text-white text-uppercase mb-3">Đăng ký ngay</button>
					<p class="fs-18 text-dark">* Chúng tôi sẽ liên hệ với bạn trong vòng 24h</p>
					<p class="fs-18 text-dark mt-2" >* Vui lòng đọc kỹ điều kiện sử dụng</p>
				</div>
				<ul class="ms-2 mt-md-0 mt-4">
					<li class="fs-18 text-dark">
						<img src="public/demo/form-icon-1.png" alt="" class="img-fluid">
						Thông tin của bạn sẽ được bảo mật
					</li>
					<li class="fs-18 text-dark">
						<img src="public/demo/form-icon-2.png" alt="" class="img-fluid">
						Chuẩn NASM Sport & Fitness từ Hoa Kì.
					</li>
					<li class="fs-18 text-dark">
						<img src="public/demo/form-icon-3.png" alt="" class="img-fluid">
						Phòng tập chuẩn 5 sao
					</li>
				</ul>
			</div>
    </div>
  </div>
</div>



<!-- script fixed header -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(window).scroll(function(event){
				if ($(this).scrollTop() > 150){
			   $('.header').addClass('header__scroll');
			   $('.header__mobile').addClass('header__scroll');
			   
		   } else {
			   $('.header').removeClass('header__scroll');
			   $('.header__mobile').removeClass('header__scroll');
			   
		   }
		});
	});
</script>