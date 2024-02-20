@extends('layout')
@section('content')
<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      @foreach ($news_list as $item)
        <div class="col-md-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('fontend/images/{{$item->image}}');">
            </a>
            <div class="text mt-3 d-block">
              <h3 class="heading mt-3"><a href="#">{{$item->title}}</a></h3>
              <div class="meta mb-3">
                <div><a href="#">{{$item->date_news}}</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <div class="p">
            {{ $news_list->links() }} 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection