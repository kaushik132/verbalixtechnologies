@extends('dashboard.layout.main')

@section('main-containers')

@php

     use Carbon\Carbon;

@endphp





 <!-- Header Start -->
 {{-- <div class="container-fluid bg-breadcrumb" style="background-image: url(../uploads/{{$banner['banner']}})"> --}}

 <div id="banner" class="container-fluid bg-breadcrumb" data-fallback="https://verbalixtechnologies.com/uploads/images/CRT.jpg" style="background-image: url('../uploads/{{$banner['banner']}}');">


  <div class="container text-md-start text-center py-5">

      <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h4>

      <ol class="breadcrumb d-flex mb-0 wow fadeInDown" data-wow-delay="0.3s">

          <li class="breadcrumb-item"><a href="index.html">Home</a></li>

          <li class="breadcrumb-item"><a href="#">Pages</a></li>

          <li class="breadcrumb-item active text-white">Blog</li>

      </ol>    

  </div>

</div>

<!-- Header End -->





<!-- Blog Start -->

<div class="container-fluid blog py-5">

  <div class="container py-5">

      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

          <h4 class="text-primary">From Blog</h4>

          <h1 class="display-4 mb-4">News And Updates</h1>

          <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.

          </p>

      </div>

      
      <div class="text-end mb-5">

        <div class="dropdown w-100">

            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

             Filter

            </button>

            <ul class="dropdown-menu">
                    @foreach ($allblog as $allblogs)
                    <li><a class="dropdown-item" href="{{url('blogs/'.$allblogs->slug)}}">{{$allblogs->name}}</a></li>
                    
                    @endforeach


             

            </ul>

          </div>

    </div>

      <div class="row g-4 justify-content-center">





        @foreach ($blogList as $blogList)

            

      

          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">

              <div class="blog-item">

                  <div class="blog-img">

                      <img src="{{ url('uploads/' . $blogList->image) }}" class="img-fluid rounded-top w-100" alt="">

                      <div class="blog-categiry py-2 px-4">

                          <span>{{$blogList->blogCategory['name']}}</span>

                      </div>

                  </div>

                  <div class="blog-content p-4">

                      <div class="blog-comment d-flex justify-content-between mb-3">

                          <div class="small"><span class="fa fa-user text-primary"></span> {{$blogList->user_name}}</div>

                          <div class="small"><span class="fa fa-calendar text-primary"></span>  {{ $blogList->created_at->format('d M Y') }}</div>

                          <div class="small"><span class="fa fa-comment-alt text-primary"></span> {{$blogList->commit}} Comments</div>

                      </div>

                      <a href="{{url('blog-details/'.$blogList->slug)}}" class="h4 d-inline-block mb-3">{{$blogList->title}}</a>

                      <p class="mb-3">{{$blogList->short_content}}</p>

                      <a href="{{url('blog-details/'.$blogList->slug)}}" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>

                  </div>

              </div>

          </div>



          @endforeach



      

         



       

    

      </div>

  </div>

</div>


    <script>
  document.addEventListener("DOMContentLoaded", function() {
    var banner = document.getElementById("banner");
    var img = new Image();
    var fallbackUrl = banner.getAttribute("data-fallback");

    img.onload = function() {
      // Image loaded successfully, no need to do anything
    };

    img.onerror = function() {
      // Image failed to load, set fallback URL
      banner.style.backgroundImage = 'url(' + fallbackUrl + ')';
    };

    img.src = banner.style.backgroundImage.replace(/url\(['"]?(.*?)['"]?\)/i, '$1');
  });
</script>



<!-- Blog End -->













@endsection