<style>
.bg__new1 {
	background-image: url("public/demo/tin-tuc1.jpg");
	height: 272px;
}

.bg__new2 {
	background-image: url("public/demo/new2.jpg");
	height: 272px;
}
.bg__new3 {
	background-image: url("public/demo/new3.jpg");
	height: 272px;
}

.bg__new4 {
	background-image: url("public/demo/new4.jpg");
	height: 150px;
}
.bg__new5 {
	background-image: url("public/demo/new5.jpg");
	height: 150px;
}
.bg__new6 {
	background-image: url("public/demo/new6.jpg");
	height: 150px ;
}
.bg__new7 {
	background-image: url("public/demo/new7.jpg");
	height: 150px;
}
.bg__new-right1 {
	background-image: url("public/demo/new-right1.jpg");
	height: 300px;
}
.bg__new-right2 {
	background-image: url("public/demo/new-right2.jpg");
	height: 300px;
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


}
</style>


<div class="row px-6 py-4 bg__new">
	<div class="col-12 bg-white px-6">
		<div class="py-3 border-secondary border-bottom mb-4">
			<a href="index.php" class="text__gray fs-18">Trang chủ <i class="bi bi-chevron-right"></i></a>
			<span class="text-dark fs-18">Tin tức</span>
		</div>

		<div class="d-flex align-items-center mb-4">
			<h2 class="text-uppercase text__primary fs-2 me-2">Bài viết mới nhất</h2>
			<div class="bg__primary flex-1" style="height: 2px;"></div>
		</div>

		<div class="d-flex mb-5 flex__column-mobile">
			<!-- left -->
			<div class="w-60 w-full">
				<a href="detail.php" class="d-inline-block w-100">
					<div class="w-100 bg__cover bg__new1"></div>
				</a>
			</div>
			<!-- right -->
			<div class="ps-3 pe-4 flex-1">
				<div class="d-flex align-items-center h-100">
					<a href="#" class="d-inline-block">
						<span class="fs-14 text__gray text-uppercase">Tin tức</span>
						<h5 class="fs-18 text__gray text-uppercase py-2">
							NGUYỄN TRỌNG NHÂN: “TẬP LUYỆN THỂ HÌNH NHƯ TÁCH TRÀ NGON, CÀNG TẬP CÀNG NGHIỆN!”
						</h5>
						<span class="fs-14 text__gray">20 tháng Năm, 2019</span>
						<p class="text-dark lh-base">
							Gặp anh Nguyễn Trọng Nhân vào một buổi trưa Sài Gòn nắng gắt tại California Fitness & Yoga Centers (CFYC) lúc anh đang...
						</p>
					</a>
				</div>
			</div>
		</div>

		<!-- 2 -->
		<div class="d-flex mb-5 flex__column-mobile">
			<!-- left -->
			<div class="w-60 w-full">
				<a href="#" class="d-inline-block w-100 py-3 border-top border-dark">
					<div class="w-100 bg__cover bg__new2"></div>

					<div>
						<span class="fs-14 text__gray text-uppercase">Tin tức</span>
						<h5 class="fs-18 text__gray text-uppercase py-2">
							MÔN VÕ CẬN CHIẾN KRAV MAGA LÀ GÌ MÀ TẠO RA TRÀO LƯU MỚI TRONG LÀNG VÕ HỌC
						</h5>
						<span class="fs-14 text__gray">20 tháng Năm, 2019</span>
						<p class="text-dark lh-base py-3">
							Krav Maga là gì? Đây có thể là một khái niệm khá xa lạ với...
						</p>
						<p class="text-uppercase fs-18 text__gray mt-1">xem thêm</p>
					</div>
				</a>

				<a href="#" class="d-inline-block w-100 py-3 border-top border-dark my-5">
					<div class="w-100 bg__cover bg__new3"></div>

					<div>
						<span class="fs-14 text__gray text-uppercase">Tin tức</span>
						<h5 class="fs-18 text__gray text-uppercase py-2">
							HÀNH TRÌNH 8 THÁNG GIẢM CÂN NHANH NGOẠN MỤC 48KG CỦA CÔ NÀNG ASHLEY
						</h5>
						<span class="fs-14 text__gray">20 tháng Năm, 2019</span>
						<p class="text-dark lh-base py-3">
							Sau khi chia tay người yêu, có rất nhiều người tìm tới phòng tập như...
						</p>
						<p class="text-uppercase fs-18 text__gray mt-1">xem thêm</p>
					</div>
				</a>

			</div>
			<!-- right -->
			<div class="ps-md-3 pe-md-4 flex-1 mt-3 mt-md-0">
				<div class="d-flex align-items-center">
					<h2 class="fs-3 text-uppercase text__primary">CÁC ƯU ĐÃI ĐẶC BIỆT</h2>
					<div class="bg__primary flex-1" style="height: 2px;"></div>
				</div>

				<div class="d-flex flex-column mt-4">
					<div class="bg__cover bg__new-right1 mb-4"></div>
					<div class="bg__cover bg__new-right2"></div>
				</div>
			</div>
		</div>
		<!-- end 2 -->

		<div class="my-5">
			<a href="#" class="py-md-4 py-5 border-top border-dark d-flex flex__column-mobile">
				<div class="bg__cover bg__new4 w-30 w-full"></div>

				<!-- content -->
				<div class="ps-md-4 pe-md-4 flex-1 mt-3 mt-md-0">
					<div class="d-flex align-items-center h-100">
						<div>
							<span class="fs-14 text__gray text-uppercase">Tin tức</span>
							<h5 class="fs-18 text__gray text-uppercase pb-2">
								KHỞI ĐỘNG NGÀY MỚI VỚI CHUỖI BÀI TẬP CARDIO ĐỐT CHÁY NĂNG LƯỢNG HIỆU QUẢ
							</h5>
							<span class="fs-14 text__gray">20 tháng Năm, 2019</span>
							<p class="text-dark lh-base">
								Chuỗi bài tập Cardio khởi động cho ngày mới hứng khởi sẽ giúp các gymer trút bỏ được cảm giác mệt mỏi và giúp cơ thể tràn đầy sinh lực. Phương pháp tập luyện...
							</p>
						</div>
					</div>
				</div>
			</a>

			<a href="#" class="py-md-4 py-5 border-top border-dark d-flex flex__column-mobile">
				<div class="bg__cover bg__new5 w-30 w-full"></div>

				<!-- content -->
				<div class="ps-md-4 pe-md-4 flex-1 mt-3 mt-md-0">
					<div class="d-flex align-items-center h-100">
						<div>
							<span class="fs-14 text__gray text-uppercase">Tin tức</span>
							<h5 class="fs-18 text__gray text-uppercase pb-2">
								CHẾ ĐỘ LUYỆN TẬP VÀ DINH DƯỠNG DÀNH CHO NHỮNG NGƯỜI BỊ CAO HUYẾT ÁP
							</h5>
							<span class="fs-14 text__gray">20 tháng Năm, 2019</span>
							<p class="text-dark lh-base">
								Thực hiện những thay đổi có ích cho sức khỏe trong cách ăn uống cũng như thói quen tập thể dục là những bước đi quan trọng đầu tiên để có...					
							</p>
						</div>
					</div>
				</div>
			</a>

			<a href="#" class="py-md-4 py-5 border-top border-dark d-flex flex__column-mobile">
				<div class="bg__cover bg__new6 w-30 w-full"></div>

				<!-- content -->
				<div class="ps-md-4 pe-md-4 flex-1 mt-3 mt-md-0">
					<div class="d-flex align-items-center h-100">
						<div>
							<span class="fs-14 text__gray text-uppercase">Tin tức</span>
							<h5 class="fs-18 text__gray text-uppercase pb-2">
								BÍ ẨN ĐẰNG SAU THÂN HÌNH 8 MÚI VẠM VỠ CỦA “BÁ CHỦ ĐẠI DƯƠNG” JASON MOMOA TRONG PHIM BOM TẤN AQUAMAN
							</h5>
							<span class="fs-14 text__gray">20 tháng Năm, 2019</span>
							<p class="text-dark lh-base">
								“Thất Hải Long Vương” Jason Momoa đang gây sốt toàn cầu bởi nhân vật anh hùng trong series Liên Minh Công Lý mà anh đang thể hiện qua vai diễn...					
							</p>
						</div>
					</div>
				</div>
			</a>

			<a href="#" class="py-md-4 py-5 border-top border-dark d-flex flex__column-mobile">
				<div class="bg__cover bg__new7 w-30 w-full"></div>

				<!-- content -->
				<div class="ps-md-4 pe-md-4 flex-1 mt-3 mt-md-0">
					<div class="d-flex align-items-center h-100">
						<div>
							<span class="fs-14 text__gray text-uppercase">Tin tức</span>
							<h5 class="fs-18 text__gray text-uppercase pb-2">
								TÌM HIỂU BÍ QUYẾT TẬP LUYỆN THỂ THAO ĐỂ SỞ HỮU THÂN HÌNH SIÊU CHUẨN CỦA GIGI HADID
							</h5>
							<span class="fs-14 text__gray">20 tháng Năm, 2019</span>
							<p class="text-dark lh-base">
								Gigi Hadid chắc chắn đang là người mẫu sở hữu thân hình đẹp và chuẩn nhất hiện nay. Ngoài việc do gen di truyền, Gigi cũng tập luyện thể thao chăm...
							</p>
						</div>
					</div>
				</div>
			</a>

		</div>
	</div>
</div>