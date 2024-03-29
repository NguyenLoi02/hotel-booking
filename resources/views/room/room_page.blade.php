@extends('layout')
@section('content')
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
		<div class="col-lg-9">
				<div class="row" id="row-item">
					@foreach ($room_list as $item)	
						<div class="col-sm col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated" >
							<div class="room" >
								<a href="{{route('room_detail')}}" class="img d-flex justify-content-center align-items-center" style="background-image: url(fontend/images/{{$item->image}});">							
								</a>
								<div class="text p-3 text-center">
									<h3 class="mb-3"><a href="rooms-single.html">{{ $item->name }}</a></h3>
									<p><span class="price mr-2">{{ $item->price }} đ</span> <span class="per">/ Ngày</span></p>
									<ul class="list">
										<li><span>Số người:</span> 3 Persons</li>
										<li><span>Diện tích:</span> {{ $item->area }} m2</li>
										<li><span>View:</span> Sea View</li>
										<li><span>Bed:</span> 1</li>
									</ul>
									<hr>
									<p class="pt-1"><a href="room-single.html" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="col text-center">
					<div class="block-27">
						<div class="p">
							{{ $room_list->links() }} 
						</div>
						
					</div>
				</div>
				  	
			</div>
			<div class="col-lg-3 sidebar">
			  <div class="sidebar-wrap bg-light ftco-animate">
				  <h3 class="heading mb-4">Advanced Search</h3>
				  {{-- <form  id="searchForm" action="{{route('searchRoom')}}" method="POST"> --}}
				  <form  id="searchForm" action="" method="">
					@csrf
					  <div class="fields">
						<div class="form-group">
							<input type="date" name="check_in" id="checkin_date" class="form-control " placeholder="Ngày đến">
						</div>
						<div class="form-group">
							<input type="date" name="check_out" id="checkout_date" class="form-control " placeholder="Ngày đi">
						</div>
						
						<div class="form-group">
							<div class="select-wrap one-third">
							<div class="icon"><span class="ion-ios-arrow-down"></span></div>
							<select name="search" id="searchTerm" class="form-control">
								<option value="">Loại phòng</option>
								@foreach ($room_list as $item)
								
								<option value="{{ $item->name }}">{{ $item->name }}</option>
								@endforeach
							</select>
						</div>
						
						{{-- <div class="form-group">
							<div class="select-wrap one-third">
							<div class="icon"><span class="ion-ios-arrow-down"></span></div>
							<select name="" id="" class="form-control">
								<option value="">0 người lớn</option>
								<option value="">1 Người lớn</option>
							<option value="">2 Người lớn</option>
							<option value="">3 Người lớn</option>
							<option value="">4 Người lớn</option>
							<option value="">5 Người lớn</option>
							<option value="">6 Người lớn</option>
							</select>
						</div>
						
						<div class="form-group">
							<div class="select-wrap one-third">
							<div class="icon"><span class="ion-ios-arrow-down"></span></div>
							<select name="" id="" class="form-control">
								<option value="">0 Trẻ em</option>
								<option value="">1 Trẻ em</option>
							<option value="">2 Trẻ em</option>
							<option value="">3 Trẻ em</option>
							<option value="">4 Trẻ em</option>
							<option value="">5 Trẻ em</option>
							<option value="">6 Trẻ em</option>
							</select>
						</div>
						
						
						<div class="form-group">
							<div class="range-slider">
								<span>
												<input type="number" value="25000" min="0" max="120000"/>	-
												<input type="number" value="50000" min="0" max="120000"/>
											</span>
											<input value="1000" min="0" max="120000" step="500" type="range"/>
											<input value="50000" min="0" max="120000" step="500" type="range"/>
											</svg>
											</div>
						</div> --}}
						<div class="form-group">
							<input type="submit"  value="Tìm kiếm" class="btn btn-primary py-3 px-5">
						</div>
					</div>
					</form>
				</div>
			
			  </div>
			  <div class="sidebar-wrap bg-light ftco-animate">
				  <h3 class="heading mb-4">Đánh giá</h3>
				  <form method="post" class="star-rating">
						  <div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
								</label>
						  </div>
						  <div class="form-check">
						  <input type="checkbox" class="form-check-input" id="exampleCheck1">
						  <label class="form-check-label" for="exampleCheck1">
							   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						  </label>
						  </div>
						  <div class="form-check">
						  <input type="checkbox" class="form-check-input" id="exampleCheck1">
						  <label class="form-check-label" for="exampleCheck1">
							  <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						 </label>
						  </div>
						  <div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
						  <label class="form-check-label" for="exampleCheck1">
							  <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						  </label>
						  </div>
						  <div class="form-check">
						  <input type="checkbox" class="form-check-input" id="exampleCheck1">
						  <label class="form-check-label" for="exampleCheck1">
							  <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							</label>
						  </div>
						</form>
			  </div>
		</div>
		</div>
		
	</div>
	
	<script>
		$(document).ready(function() {
			$('#searchForm').submit(function(e) {
				e.preventDefault();
				var formData = $(this).serialize();
				$.ajax({
					url: '{{ route("search_room") }}',
					type: 'POST',
					// dataType: 'json',
					data: formData,
					success: function(response) {
						$('#row-item').html(response);
					}
				});
			});
		});
	</script>
	
	

</section>
@endsection
	{{-- xu ly khi tra ve chuoi json --}}
	{{-- _html ='';
	var availableRooms = response.available_rooms;
	for (var roomId in availableRooms) {
	if (availableRooms.hasOwnProperty(roomId)) { //kiểm tra xem thuộc tính roomId có tồn tại trong đối tượng availableRooms hay không
	var item = availableRooms[roomId];
	_html += '<div class="col-sm col-md-6 col-lg-4 ftco-animate">';
	_html += '<div class="room">';
	_html += '<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(fontend/images/' + item.image + ');"></a>'; // Thêm kiểm tra dữ liệu item.image
	_html += '<div class="text p-3 text-center">';
	_html += '<h3 class="mb-3"><a href="">' + item.name + '</a></h3>';
	_html += '<p><span class="price mr-2">' + item.price + ' đ</span> <span class="per">/ Ngày</span></p>';
	_html += '<ul class="list">';
	_html += '<li><span>Số người:</span> 3 Persons</li>'; // Có thể bạn muốn thay đổi văn bản này
	_html += '<li><span>Diện tích:</span> ' + item.area + ' m2</li>';
	_html += '<li><span>View:</span> Sea View</li>';
	_html += '<li><span>Bed:</span> 1</li>';
	_html += '</ul><hr>';
	_html += '<p class="pt-1"><a href="" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>';
	_html += '</div></div></div>';
	console.log(_html);
		}
	} --}}