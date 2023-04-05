<style>

/*Slider*/

.bg-img1 {
	background-image: url("public/demo/banner1.jpg");
	height: 100%;
}
.bg-img2 {
	background-image: url("public/demo/banner2.jpg");
	height: 100%;
}
#slider .owl-carousel,
#design__slider .owl-carousel {
	display: block;
}

#slider .item {
	height: 70vh;
	width: 100%;
}
#slider .owl-theme .owl-nav {
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	width: 100%;
	display: flex;
	justify-content: space-between;
	padding: 0 50px !important;
}

#slider .owl-theme .owl-prev,
#slider .owl-theme .owl-next{
	padding: 0px 16px !important;
	border-radius: 50%;
	color: white;
	background-color: transparent;
	border: 2px solid #ddd;
	font-weight: bold;
}
#slider .owl-theme .owl-prev span,
#slider .owl-theme .owl-next span{
	font-size: 40px;
	line-height: 40px;
	font-weight: bold;
	display: inline-block;
	transform: translateY(-11%);
}
#slider .owl-theme .owl-dots {
	position: absolute;
	bottom: 25px;
	width: 100%;
}
#slider .owl-theme .owl-dot {
	margin: 0 5px !important;
}
#slider .owl-theme .owl-dot span {
	width: 15px;
	height: 15px;
	background-color: rgba(255, 255, 255, 0.6);
}
#slider .owl-theme .owl-dot.active {
	background-color: white;
	border-radius: 50%;
}

/*Hover*/
#slider .owl-theme .owl-prev:hover,
#slider .owl-theme .owl-next:hover {
	background-color: var(--primary-color);
	border: none;
}

/*End Slider*/

/*Start  Result*/
.bg__result {
	background-image: url("public/demo/bg-dich-vu1.jpg");
}

/*End Result*/

.bg__appearance {
	background-image: url("public/demo/bg-appearance.jpg");
}

.bg__weight {
	background-image: url("public/demo/weight.jpg");
	height: 520px;
}

.celebrities__title::after {
	content: "";
	position: absolute;
	display: block;
	left: 50%;
	transform: translateX(-50%);
	width: 100px;
	height: 4px;
	background-color: var(--primary-color);
	bottom: 0;
}
.bg__celebrities {
	background-image: url("public/demo/bg-celebrities.jpg");
}

/*Slider Success Story*/
#slider__success .item {
	height: 525px !important;
	width: 80% !important;
	margin: 0 auto !important;
}

#slider__success .owl-carousel {
	display: block;
}

#slider__success .bg__success1 {
	background-image: url(public/demo/success1.png);
	height: 100%;
}
#slider__success .bg__success2 {
	background-image: url(public/demo/success2.png);
	height: 100%;
}

#slider__success .owl-theme .owl-dots {
	display: none;
}

#slider__success .owl-theme .owl-nav {
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	display: flex;
	justify-content: space-between;
	padding: 0 6vw !important;
	width: 100%;
}

#slider__success .owl-carousel .owl-nav button.owl-next, 
#slider__success .owl-carousel .owl-nav button.owl-prev {
	width: 40px !important;
    height: 40px !important;
    border-radius: 50%;
    line-height: 30px;
    font-size: 40px;
    display: flex;
    justify-content: center;
    color: var(--primary-color) !important;
    transition: all 0.5s linear;
}
#slider__success .owl-carousel .owl-nav button.owl-next:hover, 
#slider__success .owl-carousel .owl-nav button.owl-prev:hover {
	background-color: var(--primary-color) !important;
	color: white !important;
}

/*End Slider Success Story*/

/*Start Famous Member*/
.bg__famous {
	background-image: url("public/demo/bg-member.jpg");
}
.bg__item1 {
	background-image: url("public/demo/member1.png");
	width: 215px;
	height: 215px;
	margin: 0 auto !important;
}
.bg__item2 {
	background-image: url("public/demo/member2.png");
	width: 215px;
	height: 215px;
	margin: 0 auto !important;
}

.bg__item3 {
	background-image: url("public/demo/member3.png");
	width: 215px;
	height: 215px;
	margin: 0 auto !important;
}

.bg__item4 {
	background-image: url("public/demo/member4.png");
	width: 215px;
	height: 215px;
	margin: 0 auto !important;
}

.bg__item5 {
	background-image: url("public/demo/member5.png");
	width: 215px;
	height: 215px;
	margin: 0 auto !important;
}

.bg__item6 {
	background-image: url("public/demo/member6.png");
	width: 215px;
	height: 215px;
	margin: 0 auto !important;
}

.bg__item7 {
	background-image: url("public/demo/member7.png");
	width: 215px;
	height: 215px;
	margin: 0 auto !important;
}

.bg__item8 {
	background-image: url("public/demo/member8.png");
	width: 215px;
	height: 215px;
	margin: 0 auto !important;
}


.border__member {
	border: 4px solid #989898;
    border-radius: 50%;
    transition: all .3s ease-in-out;
}
.border__member:hover {
	border: 4px solid var(--primary-color) !important;
	cursor: pointer;
}
/*End Famous Member*/

/*Start Fitness*/
.bg__fitness1 {
	background-image: url("public/demo/fitness1.png");
	height: 320px;
}
.bg__fitness2 {
	background-image: url("public/demo/fitness2.jpg");
	height: 320px;
}
.bg__fitness3 {
	background-image: url("public/demo/fitness3.png");
	height: 320px;
}
.bg__fitness4 {
	background-image: url("public/demo/fitness4.jpg");
	height: 320px;
}
.div-scroll {
	height: 320px;
	overflow-y: scroll;
	overflow-x: hidden;
}
/*End Fitness*/

/*Start Subcriber*/
.bg__subcriber {
	background-image: url("public/demo/bg-subcriber.jpg");
}
.subcriber__free {
	border-bottom: 4px solid var(--primary-color);
}
.subcriber__vnd {
	top: -10px;
	right: 0;
}
.border__gray:hover {
	border: 5px solid var(--primary-color);
}
/*End Subcriber*/

/*Start Design*/
.design .border__after-center::after {
	background-color: white !important;
}

#design__slider .owl-theme .owl-dots {
	display: none;
}
#design__slider .owl-theme .owl-nav {
	position: absolute;
    top: -54px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
}

#design__slider .owl-carousel .owl-nav button.owl-next, 
#design__slider .owl-carousel .owl-nav button.owl-prev {
	width: 40px !important;
    height: 40px !important;
    background-color: white;
    font-size: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

#design__slider .owl-carousel .owl-nav button.owl-prev {
	margin-right: 20px !important;
}

#design__slider .owl-carousel .owl-nav button.owl-next span, 
#design__slider .owl-carousel .owl-nav button.owl-prev span {
	color: var(--primary-color);
	line-height: 50px;
	position: absolute;
    top: 50%;
    transform: translateY(-60%);
}
    
/*End Design*/


/*Respone sive*/
/*Mobile*/
@media (max-width: 739px) {
    #slider .owl-theme .owl-prev,
	#slider .owl-theme .owl-next {
		display: none;
	}
    #slider .item {
    	height: 25vh;
    }
    .w-75 {
    	width: 100%;
    }
    .w-full {
    	width: 100% !important;
    }
    .flex__column-mobile {
    	flex-direction: column !important;
    }

    .flex__column-reverse {
    	flex-direction: column-reverse;
    }

    #slider__success .owl-theme .owl-nav,
    #design__slider .owl-theme .owl-nav{
    	display: none;
    }
    #slider__success .item {
    	width: 100% !important;
    	height: 300px !important;
    }
    .button__mobile {
    	font-size: 16px !important;
    	padding: 15px 10px !important;
    	width: 90%;
    }
    .bg__item1,
    .bg__item2,
    .bg__item3,
    .bg__item4,
    .bg__item5,
    .bg__item6,
    .bg__item7,
    .bg__item8 {
    	width: 155px;
    	height: 155px;
    }
    .text__left {
    	text-align: left !important;
    }

}
</style>

<!-- Slider -->
<div class="row">
	<div id="slider" class="position-relative">
		<div class="owl-carousel owl-theme h-100">
		    <div class="item bg__cover bg-img1 w-100"></div>
		    <div class="item bg__cover bg-img2 w-100"></div>	    
		</div>
	</div>
</div>
<!-- End Slider -->

<!-- Start Retter Result -->
<div class="row px-6 py-5 bg__result bg__cover">
	<div class="col-md-5">
		<div>
			<iframe class="w-full" width="470" height="285" src="https://www.youtube.com/embed/dojjgGvrEvQ" title="Bikini body work out of Vu Hoang My, Miss Universe Vietnam" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
	</div>
	<div class="col-md-7">
		<h2 class="fw-700 text__gray border__after position-relative pb-3">Huấn luyện viên sẽ Giúp bạn đạt được kết quả tốt hơn</h2>
		<p class="mt-3 fs-18 lh-base">
			<strong>Luyện tập cùng Huấn Luyện Viên thể hình sẽ tốt hơn nhiều so với việc bạn tự tập một mình,</strong> đây là một hệ thống đã được chứng minh để cải thiện cuộc sống của bạn và đảm bảo bạn đạt đến kết quả cao nhất của chương trình tập. 
		</p>
		<p class="mt-3 fs-18 lh-base">
			Huấn Luyện Viên thể hình cá nhân đánh giá các chỉ số cơ thể và xác định những gì bạn cần để phục hồi thể lực và cải thiện chất lượng cuộc sống cũng như sức khỏe của bạn. 
		</p>
		<p class="mt-3 fs-18 lh-base">
			Hệ thống của chúng tôi được thiết kế để phù hợp với cuộc sống bận rộn thường ngày, giúp bạn đạt được kết quả tốt nhất sau mỗi buổi tập.  
		</p>

		<div class="d-flex justify-content-center mt-3 mb-5">
			<button class="px-3 py-2 text-uppercase fw-700 bg__primary text-white ouline__none rounded button__hover">huấn luyện viên thể hình</button>
		</div>

	</div>
</div>
<!-- End Retter Result -->

<!-- Start Desigin -->
<div class="row px-6 py-5 bg__primary design">
	<div class="col-12 px-6 mb-4">
		<h2 class=" text-white fs-4 text-center lh-base pb-3 border__after-center position-relative text__left">
			Nhiều gói Huấn Luyện Viên thể hình được thiết kế dành riêng cho bạn
		</h2>
	</div>
	<div class="col-12 px-md-6">
		<div id="design__slider" class="position-relative py-5">
			<div class="owl-carousel owl-theme h-100">
			    <div class="item">
			    	<div class="d-flex gap-4 justify-content-between flex__column-mobile">
			    		<div class="d-flex w-50 flex__column-mobile w-full">
			    			<div class="w-50 w-full">
			    				<img src="public/demo/hlv-5.jpg" class="img-fluid" alt="">
			    			</div>
			    			<div class="flex-1 d-flex align-items-center bg-dark w-full">
			    				<p class="text-white fs-18 text-center w-full py-3">Chuyên gia về phục hồi chấn thương</p>
			    			</div>
			    		</div>

			    		<div class="d-flex w-50 flex__column-mobile w-full">
			    			<div class="w-50 w-full">
			    				<img src="public/demo/hlv-6.jpg" class="img-fluid" alt="">
			    			</div>
			    			<div class="flex-1 d-flex align-items-center bg-dark w-full">
			    				<p class="text-white fs-18 text-center w-full py-3">Hướng dẫn phòng ngừa chấn thương</p>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="d-flex gap-4 justify-content-between mt-4 flex__column-mobile">
			    		<div class="d-flex w-50 flex__column-mobile w-full">
			    			<div class="w-50 w-full">
			    				<img src="public/demo/hlv-7.jpg" class="img-fluid" alt="">
			    			</div>
			    			<div class="flex-1 d-flex align-items-center bg-dark w-full">
			    				<p class="text-white fs-18 text-center w-full py-3">Yogi và tôi, luyện tập Yoga 1 kèm 1</p>
			    			</div>
			    		</div>

			    		<div class="d-flex w-50 flex__column-mobile w-full">
			    			<div class="w-50 w-full">
			    				<img src="public/demo/hlv-8.jpg" class="img-fluid" alt="">
			    			</div>
			    			<div class="flex-1 d-flex align-items-center bg-dark w-full">
			    				<p class="text-white fs-18 text-center w-full py-3">Hướng dẫn sử dụng các máy tập</p>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			    <div class="item">
			    	<div class="d-flex gap-4 justify-content-between flex__column-mobile">
			    		<div class="d-flex w-50 flex__column-mobile w-full">
			    			<div class="w-50 w-full">
			    				<img src="public/demo/hlv-5.jpg" class="img-fluid" alt="">
			    			</div>
			    			<div class="flex-1 d-flex align-items-center bg-dark w-full">
			    				<p class="text-white fs-18 text-center w-full py-3">Chuyên gia về phục hồi chấn thương</p>
			    			</div>
			    		</div>

			    		<div class="d-flex w-50 flex__column-mobile w-full">
			    			<div class="w-50 w-full">
			    				<img src="public/demo/hlv-6.jpg" class="img-fluid" alt="">
			    			</div>
			    			<div class="flex-1 d-flex align-items-center bg-dark w-full">
			    				<p class="text-white fs-18 text-center w-full py-3">Hướng dẫn phòng ngừa chấn thương</p>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="d-flex gap-4 justify-content-between mt-4 flex__column-mobile">
			    		<div class="d-flex w-50 flex__column-mobile w-full">
			    			<div class="w-50 w-full">
			    				<img src="public/demo/hlv-7.jpg" class="img-fluid" alt="">
			    			</div>
			    			<div class="flex-1 d-flex align-items-center bg-dark w-full">
			    				<p class="text-white fs-18 text-center w-full py-3">Yogi và tôi, luyện tập Yoga 1 kèm 1</p>
			    			</div>
			    		</div>

			    		<div class="d-flex w-50 flex__column-mobile w-full">
			    			<div class="w-50 w-full">
			    				<img src="public/demo/hlv-8.jpg" class="img-fluid" alt="">
			    			</div>
			    			<div class="flex-1 d-flex align-items-center bg-dark w-full">
			    				<p class="text-white fs-18 text-center w-full py-3">Hướng dẫn sử dụng các máy tập</p>
			    			</div>
			    		</div>
			    	</div>
			    </div>	    
			</div>
		</div>
	</div>
</div>
<!-- End Desigin -->

<!-- Start Appearance -->
<div class="row px-6 py-5 bg__cover bg__appearance">
	<div class="col-md-7 d-md-block d-none"></div>
	<div class="col-md-5">
		<div>
			<p class="fs-18 mt-3 text__gray fw-700 mb-4 lh-base">
				Ngoại hình cuốn hút và tự tin hơn?
            </p>
            <p class="fs-18 mt-3 text__gray fw-700 mb-5 lh-base">
				Tham gia ngay gói tập 1 tháng không giới hạn và 
				2 buổi tập cùng Huấn luyện viên thể hình
            </p>
            <button class="px-3 py-2 text-uppercase fs-1-3 mb-5 bg__primary text-white ouline__none rounded button__hover">Đăng ký tập thử</button>
		</div>
	</div>
</div>
<!-- End Appearance -->

<!-- Start Losing Weight -->
<div class="row px-6 py-4 bg-dark">
	<div class="col-md-8 pe-4">
		<h5 class="fs-23 fw-700 text-white">Bạn muốn giảm cân</h5>
		<p class=" text-white fs-18 border__after position-relative py-4">
			cơ bụng 6 múi hay một thân hình hoàn hảo, chúng tôi có thể giúp bạn
		</p>
		<h5 class="fs-23 fw-700 text-white mt-3 mb-2">Chương trình tập luyện 1 kèm 1 </h5>
		<p class="text-white fs-18 fw-700">sẽ giúp bạn đạt được thân hình mơ ước một cách dễ dàng hơn</p>
		<p class="text-white fs-18 lh-base mt-3 mb-4">
			Được cấp chứng nhận theo chương trình NASM Sport & Fitness từ Hoa Kì, các Huấn luyện viên thể hình cá nhân sẽ trang bị đầy đủ cho bạn những lời khuyên về chế độ dinh dưỡng, những bài tập được thiết kế phù hợp dành riêng cho bạn. 
		</p>
		<p class="text-white fs-18 lh-base mb-4">
			Chương trình tập luyện này là sự kết hợp việc luyện tập thể dục vào một lối sống bận rộn để bạn có được kết quả tốt hơn, nhanh hơn.
		</p>
	</div>
	<div class="col-md-4">
		<div class="bg__contain bg__weight"></div>
	</div>
</div>
<!-- End Losing Weight -->

<!-- Start Celebrities Practice -->
<div class="row px-6 py-5 bg__cover bg__celebrities">
	<div class="col-12 mb-4">
		<h3 class="position-relative text__gray fs-23 text-center fw-700 pb-4 celebrities__title">Người nổi tiếng tập luyện</h3>
	</div>

	<div class="col-md-3">
		<div class="m-md-0 mb-4">
			<img src="public/demo/diem-my.jpg" class="img-fluid border__radius-red w-full" alt="">
		</div>
	</div>
	<div class="col-md-9 pe-md-5 my-4">
		<h2 class="fs-23 text__primary">Tham gia chương trình tập luyện <span class="text__gray">của Diễm My</span></h2>
		<p class="mt-3 fs-18 lh-base pe-md-5">
			<strong>Tham gia tập luyện với HLV Al Morgan,</strong> người đã giúp Diễm My sở hữu thân hình quyên rũ. Diễm My tập luyện 6 lần mỗi tuần cùng HLV cá nhân để duy trì số đo hình thể
		</p>
	</div>
	
	<div class="d-flex flex__column-reverse">
		<div class="col-md-9 ps-md-5 my-4">
			<h2 class="fs-23 text__primary">Hoa hậu Hoàn vũ 2015 Phạm Hương <span class="text__gray">của tập luyện</span></h2>
			<p class="mt-3 fs-18 lh-base">
				<strong>Phạm Hương giữ gìn vóc dáng trong cuộc thi Hoa hậu Hoàn vũ 2015</strong> bằng cách tập luyện chăm chỉ cùng HLV nổi tiếng Isidi Shahini. Sự kết hợp hoàn hảo của bài tập kháng lực và cardio giúp cơ thể duy trì các số đo tuyệt vờ
			</p>
		</div>
		<div class="col-md-3 my-md-5">
			<div class="m-md-0 mb-4">
				<img src="public/demo/pham-huong.jpg" class="img-fluid border__radius-red w-full" alt="">
			</div>
		</div>
	</div>
	<div class="col-md-3 my-md-5">
		<div class="m-md-0 mb-md-4">
			<img src="public/demo/ho-vinh-khoa.jpg" class="img-fluid border__radius-red w-full" alt="">
		</div>
	</div>
	<div class="col-md-9 pe-md-5 my-5">
		<h2 class="fs-23 text__primary">Mạnh mẽ và đầy sinh lực <span class="text__gray">như Hồ Vĩnh Khoa</span></h2>
		<p class="mt-3 fs-18 lh-base">
			<strong>Chúng tôi có nhiều năm kinh nghiệm rèn luyện thể hình</strong> và kiến thức khoa học để giúp bạn đạt được hình thể khỏe mạnh, cuốn hút. Cho dù bạn muốn tăng cơ bắp hay cơ bụng 6 múi, các huấn luyện viên của chúng tôi sẽ giúp bạn nhanh chóng đạt được mục tiêu hình thể.
		</p>
	</div>
</div>
<!-- End  Celebrities Practice-->

<!-- Start Success Story -->
<div class="row mt-3">
	<div class="col-12 px-6">
		<h2 class="text__gray fs-3 text-center my-3 fw-700">Câu chuyện thành công</h2>
		<p class="text-center fs-5 pb-3 border__after-center position-relative">
			Khám phá phương pháp đã giúp thay đổi cuộc sống của hàng trăm ngàn người tại Việt Nam, giúp họ thay đổi hoàn toàn cơ thể bằng phương pháp giảm cân nhanh nhất, truyền cảm hứng và đạt được vẻ ngoài như mơ ước
		</p>

	</div>

	<!-- Slider Success Story -->
	<div id="slider__success" class="position-relative">
		<div class="owl-carousel owl-theme h-100">
		    <div class="item bg__contain bg__success1 w-100"></div>
		    <div class="item bg__contain bg__success2 w-100"></div>	    
		</div>
	</div>
	<!-- End Slider Success Story -->
	<div class="col-12 d-flex align-items-center justify-content-center my-4">
		<button class="text-uppercase px-md-3 py-md-1 fs-23 fw-700 text-white bg__primary rounded ouline__none button__hover button__mobile">Xem thêm câu chuyện của hội viên</button>
	</div>
</div>
<!-- End Success Story -->

<!-- Start Famous Member -->
<div class="row">
	<div class="col-12 px-6 mb-4">
		<h2 class="text__gray fs-3 text-center my-3 fw-700">Các hội viên nổi tiếng</h2>
		<p class="text-center fs-5 pb-3 border__after-center position-relative">
			Chúng tôi luôn là lựa chọn hàng đầu cho các chính trị gia, ngôi sao giải trí, người mẫu thời trang và doanh nhân khi họ bắt đầu tập luyện.
		</p>

	</div>

	<div class="famous__contain px-md-6 bg__cover bg__famous py-5 d-flex flex-wrap">
		<div class="col-md-3 col-6 mb-md-5 mb-4">
			<div>
				<div class="bg__contain bg__item1 border__member"></div>
				<div>
					<h5 class="fs-1-25 text__opacity text-uppercase text__white-hover fw-700 text-center mt-3">KỲ DUYÊN</h5>
					<p class="text-center text__white-hover text__opacity fs-0-97 mt-1">Hoa hậu</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-6 mb-md-5 mb-4">
			<div>
				<div class="bg__contain bg__item2 border__member"></div>
				<div>
					<h5 class="fs-1-25 text__opacity text-uppercase text__white-hover fw-700 text-center mt-3">phạm hương</h5>
					<p class="text-center text__white-hover text__opacity fs-0-97 mt-1">Hoa hậu</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-6 mb-md-5 mb-4">
			<div>
				<div class="bg__contain bg__item3 border__member"></div>
				<div>
					<h5 class="fs-1-25 text__opacity text-uppercase text__white-hover fw-700 text-center mt-3">MARCUS GUIDHEM</h5>
					<p class="text-center text__white-hover text__opacity fs-0-97 mt-1">Doanh nhân / Người mẫu</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-6 mb-md-5 mb-4">
			<div>
				<div class="bg__contain bg__item4 border__member"></div>
				<div>
					<h5 class="fs-1-25 text__opacity text-uppercase text__white-hover fw-700 text-center mt-3">PHƯƠNG MAI</h5>
					<p class="text-center text__white-hover text__opacity fs-0-97 mt-1">Người mẫu</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-6 mb-md-5 mb-4">
			<div>
				<div class="bg__contain bg__item5 border__member"></div>
				<div>
					<h5 class="fs-1-25 text__opacity text-uppercase text__white-hover fw-700 text-center mt-3">VŨ CÁT TƯỜNG</h5>
					<p class="text-center text__white-hover text__opacity fs-0-97 mt-1">Ca sĩ</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-6 mb-md-5 mb-4">
			<div>
				<div class="bg__contain bg__item6 border__member"></div>
				<div>
					<h5 class="fs-1-25 text__opacity text-uppercase text__white-hover fw-700 text-center mt-3">DIỄM MY</h5>
					<p class="text-center text__white-hover text__opacity fs-0-97 mt-1">Diễn viên</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-6 mb-md-5 mb-4">
			<div>
				<div class="bg__contain bg__item7 border__member"></div>
				<div>
					<h5 class="fs-1-25 text__opacity text-uppercase text__white-hover fw-700 text-center mt-3">HƯƠNG GIANG</h5>
					<p class="text-center text__white-hover text__opacity fs-0-97 mt-1">Người mẫu</p>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-6 mb-md-5 mb-4">
			<div>
				<div class="bg__contain bg__item8 border__member"></div>
				<div>
					<h5 class="fs-1-25 text__opacity text-uppercase text__white-hover fw-700 text-center mt-3">HỒ VĨNH KHOA</h5>
					<p class="text-center text__white-hover text__opacity fs-0-97 mt-1">Người mẫu / Ca sĩ</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Famous Member  -->

<!-- Start Fitness Expert -->
<div class="row px-6">
	<div class="col-12 px-6">
		<h2 class="text__gray fs-3 text-center my-3 fw-700">Gặp gỡ những chuyên gia thể hình hàng đầu</h2>
		<p class="text-center fs-5 pb-3 position-relative border__after-center">
			Dù bạn yêu thích Yoga, đam mê bộ môn Dance đầy sôi động, hay môn võ MMA cực mạnh mẽ. Bạn sẽ luôn được hướng dẫn bởi những chuyên gia hàng đầu.
		</p>

	</div>

	<div class="col-md-6 px-md-3 py-2">
		<div class="d-flex shadow p-2 bg-body rounded flex__column-mobile">
			<div class="w-46 bg__cover bg__fitness1 w-full"></div>
			<div class="flex-1 py-2 ps-2">
				<div class="div-scroll">
					<div class="border__primary-left ps-4 mb-4">
						<h2 class="fs-23 text__secondary text-uppercase">TIỂU PHƯƠNG</h2>
						<p class="text-uppercase fs-0-97">CHUYÊN GIA THỂ HÌNH</p>
					</div>

					<ul class="list__style-square text__primary ps-4">
						<li class="mb-2">
							<span class="text-dark fs-0-97">Chứng nhận từ Học Viện Y Học Thể Thao Quốc Gia (NASM) Hoa Kỳ</span>
						</li>
						<li class="mb-2">
							<span class="text-dark fs-0-97">Hơn 10 năm kinh nghiệm thay đổi thể hình, từng trực tiếp huấn luyện cho nhiều ngôi sao</span>
							
						</li>
						<li class="mb-2">
							<span class="text-dark fs-0-97">Gặt hái nhiều thành tích về Marathon: hoàn thành đường chạy 42km trong 5 tiếng tại giải giải Danang International Marathon 2015, 42km địa hình trong 10 tiếng giải Vietnam Mountain Marathon 2015 diễn ra ở Sapa (Lào Cai), chặng 42km trong 6 tiếng tại giải Lăng Cô Marathon.
							</span>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 px-md-3 py-2">
		<div class="d-flex shadow p-2 bg-body rounded flex__column-mobile">
			<div class="w-46 bg__cover bg__fitness2 w-full"></div>
			<div class="flex-1 py-2 ps-2">
				<div class="div-scroll">
					<div class="border__primary-left ps-4 mb-4">
						<h2 class="fs-23 text__secondary text-uppercase">MINT</h2>
						<p class="text-uppercase fs-0-97">CHUYÊN GIA THỂ HÌNH</p>
					</div>

					<ul class="list__style-square text__primary ps-4">
						<li class="mb-2">
							<span class="text-dark fs-0-97">Chứng nhận từ Học Viện Y Học Thể Thao Quốc Gia (NASM) Hoa Kỳ</span>
						</li>
						<li class="mb-2">
							<span class="text-dark fs-0-97">Hơn 10 năm kinh nghiệm thay đổi thể hình, từng trực tiếp huấn luyện cho nhiều ngôi sao</span>
							
						</li>
						<li class="mb-2">
							<span class="text-dark fs-0-97">Gặt hái nhiều thành tích về Marathon: hoàn thành đường chạy 42km trong 5 tiếng tại giải giải Danang International Marathon 2015, 42km địa hình trong 10 tiếng giải Vietnam Mountain Marathon 2015 diễn ra ở Sapa (Lào Cai), chặng 42km trong 6 tiếng tại giải Lăng Cô Marathon.
							</span>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 px-md-3 py-2 mt-2">
		<div class="d-flex shadow p-2 bg-body rounded flex__column-mobile">
			<div class="w-46 bg__cover bg__fitness3 w-full"></div>
			<div class="flex-1 py-2 ps-2">
				<div class="div-scroll">
					<div class="border__primary-left ps-4 mb-4">
						<h2 class="fs-23 text__secondary text-uppercase">BRAD TRAN</h2>
						<p class="text-uppercase fs-0-97">CHUYÊN GIA THỂ HÌNH</p>
					</div>

					<ul class="list__style-square text__primary ps-4">
						<li class="mb-2">
							<span class="text-dark fs-0-97">Chứng nhận từ Học Viện Y Học Thể Thao Quốc Gia (NASM) Hoa Kỳ</span>
						</li>
						<li class="mb-2">
							<span class="text-dark fs-0-97">Hơn 10 năm kinh nghiệm thay đổi thể hình, từng trực tiếp huấn luyện cho nhiều ngôi sao</span>
							
						</li>
						<li class="mb-2">
							<span class="text-dark fs-0-97">Gặt hái nhiều thành tích về Marathon: hoàn thành đường chạy 42km trong 5 tiếng tại giải giải Danang International Marathon 2015, 42km địa hình trong 10 tiếng giải Vietnam Mountain Marathon 2015 diễn ra ở Sapa (Lào Cai), chặng 42km trong 6 tiếng tại giải Lăng Cô Marathon.
							</span>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 px-md-3 py-2 mt-2">
		<div class="d-flex shadow p-2 bg-body rounded flex__column-mobile">
			<div class="w-46 bg__cover bg__fitness4 w-full"></div>
			<div class="flex-1 py-2 ps-2">
				<div class="div-scroll">
					<div class="border__primary-left ps-4 mb-4">
						<h2 class="fs-23 text__secondary text-uppercase">ASSIM MANN</h2>
						<p class="text-uppercase fs-0-97">CHUYÊN GIA THỂ HÌNH</p>
					</div>

					<ul class="list__style-square text__primary ps-4">
						<li class="mb-2">
							<span class="text-dark fs-0-97">Chứng nhận từ Học Viện Y Học Thể Thao Quốc Gia (NASM) Hoa Kỳ</span>
						</li>
						<li class="mb-2">
							<span class="text-dark fs-0-97">Hơn 10 năm kinh nghiệm thay đổi thể hình, từng trực tiếp huấn luyện cho nhiều ngôi sao</span>
							
						</li>
						<li class="mb-2">
							<span class="text-dark fs-0-97">Gặt hái nhiều thành tích về Marathon: hoàn thành đường chạy 42km trong 5 tiếng tại giải giải Danang International Marathon 2015, 42km địa hình trong 10 tiếng giải Vietnam Mountain Marathon 2015 diễn ra ở Sapa (Lào Cai), chặng 42km trong 6 tiếng tại giải Lăng Cô Marathon.
							</span>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12 d-flex align-items-center justify-content-center my-4 d-md-flex d-none">
		<button class="text-uppercase px-3 py-1 fs-23 fw-700 text-white bg__primary rounded ouline__none button__hover">Đăng ký ngay <i class="bi bi-chevron-compact-right"></i></button>
	</div>
</div>
<!-- End Fitness Expert -->

<!-- Start Subcriber -->
<div class="row px-6 py-4 bg__cover bg__subcriber">
	<div class="col-md-6">
		<div>
			<img src="public/demo/subcriber-1.png" alt="" class="img-fluid">
		</div>
	</div>
	<div class="col-md-6 ps-md-5 mt-4 mt-md-0">
		<h2 class="text-uppercase fs-4 text-white pb-3 position-relative border__after">ĐĂNG KÝ NGAY</h2>
		<p class="text-white lh-base fs-18 my-4">
			Chúng tôi cung cấp nhiều loại <span class="text-decoration-underline fw-700">Hội Viên</span> cho bạn lựa chọn để sử dụng các dịch vụ. <span class="fst-italic">Hãy đăng ký để nhận tư vấn thể chất chuyên sâu, bao gồm đo chỉ số cơ thể Inbody.</span>
		</p>

		<div class="d-flex justify-content-between flex__column-mobile gap-3">
			<div class="px-3 border__gray py-4 w-50 w-full">
				<span class="d-inline-block fs-3 pb-3 text-uppercase text-white subcriber__free">MIỄN PHÍ</span>
				<p class="mt-3 fs-23 text-white">1 ngày</p>
				<p class="mb-5 text-white fs-23">tập luyện</p>
				<button class="text-uppercase px-3 py-1 fs-23 text-uppercase bg__primary text-white rounded ouline__none button__hover">Đăng ký ngay</button>
			</div>
			<div class="px-3 border__gray py-4 w-50 w-full">
				<p class="fs-3 text-white position-relative pt-3 d-inline-block subcriber__free">
					<span>400</span>
					<span class="fs-4">000</span>
					<span class="position-absolute subcriber__vnd">VND</span>
				</p>
				<p class="mt-3 fs-23 text-white">1 tháng</p>
				<p class="fs-23 text-white">+ 2 buổi tập cùng</p>
				<p class="mb-3 text-white fs-23">HLV cá nhân.</p>
				<button class="text-uppercase px-3 py-1 fs-23 text-uppercase bg__primary text-white rounded ouline__none button__hover">Đăng ký ngay</button>
			</div>
		</div>
	</div>
</div>
<!-- End Subcriber -->

<script>
	$('#slider .owl-carousel').owlCarousel({
	    loop:true,
	    nav:true,
	    items: 1,
	    autoplay: true
	})

	$('#slider__success .owl-carousel').owlCarousel({
	    loop:true,
	    nav:true,
	    items: 1,
	    autoplay: false
	})

	$('#design__slider .owl-carousel').owlCarousel({
	    loop:true,
	    nav:true,
	    items: 1,
	    autoplay: false
	})
</script>