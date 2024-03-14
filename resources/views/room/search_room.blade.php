@foreach ($availableRooms as $item)	
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