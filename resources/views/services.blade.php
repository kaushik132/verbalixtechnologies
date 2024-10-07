@extends('dashboard.layout.main')

@section('main-containers')





        <!-- Header Start -->

        <div id="banner" class="container-fluid bg-breadcrumb" data-fallback="https://verbalixtechnologies.com/uploads/images/CRT.jpg" style="background-image: url(../uploads/{{$banner['banner']}})">

         <div class="container text-md-start text-center py-5">

             <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>

             <ol class="breadcrumb d-flex mb-0 wow fadeInDown" data-wow-delay="0.3s">

                 <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                 <li class="breadcrumb-item"><a href="#">Pages</a></li>

                 <li class="breadcrumb-item active text-white">Service</li>

             </ol>    

         </div>

     </div>

     <!-- Header End -->





     <!-- Service Start -->

     <div class="container-fluid service py-5">

         <div class="container py-5">

             <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

                 <h4 class="text-primary">Our Services</h4>

                 <h1 class="display-4 mb-4">We Provide Best Services</h1>

                 <p class="mb-0">Verbalix Technologies delivers top-tier academic writing, proofreading, IT development, and design services. We cater to global clients, ensuring high-quality, tailored solutions that drive success and exceed expectations.

                 </p>

             </div>





             <div class="text-end mb-5">

                <div class="dropdown w-100">

                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                     Filter

                    </button>

                    <ul class="dropdown-menu">
                        @foreach ($all as $all)
                            
                        <li><a class="dropdown-item" href="{{url('services/'.$all->slug)}}">{{$all->name}}</a></li>
                        @endforeach


                     

                    </ul>

                  </div>

            </div>

             <div class="row g-4 justify-content-center">





                @foreach ($servicesList as $servicesList)

                    

               

         

                 <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">

                     <div class="service-item">

                         <div class="service-img">

                            <img src="{{ url('uploads/' . $servicesList->image) }}" class="img-fluid rounded-top w-100" alt="">



                             <div class="service-icon p-3">

                                 <i class="fa fa-database fa-2x"></i>

                             </div>

                         </div>

                         <div class="service-content p-4">

                             <div class="service-content-inner">

                                 <a href="{{url('service-details/'.$servicesList->slug)}}" class="d-inline-block h4 mb-4">{{$servicesList->title}}</a>

                                 <p class="mb-4">{{$servicesList->short_content}}</p>

                                 <a class="btn btn-primary rounded-pill py-2 px-4" href="{{url('service-details/'.$servicesList->slug)}}">Read More</a>

                             </div>

                         </div>

                     </div>

                 </div>

                 @endforeach

       

      



           

         

                 

                 <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">

                     <a class="btn btn-primary rounded-pill py-3 px-5" href="{{route('services')}}">More Services</a>

                 </div>

             </div>

         </div>

     </div>

     <!-- Service End -->





     <!-- Testimonial Start -->


     <div class="container-fluid testimonial pb-5">

        <div class="container pb-5">
    
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
    
                <h4 class="text-primary">Testimonial</h4>
    
                <h1 class="display-4 mb-4">What Our Customers Are Saying</h1>
    
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
    
                </p>
    
            </div>
    
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
    
              
    
                @foreach ($testimonial as $testimonial)
    
                    
    
                
    
                <div class="testimonial-item bg-light rounded">
    
                    <div class="row g-0">
    
                        <div class="col-4  col-lg-4 col-xl-3">
    
                            <div class="h-100">
    
                                <img src="{{url('uploads/'.$testimonial->image)}}" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="{{$testimonial->alt}}">
    
                            </div>
    
                        </div>
    
                        <div class="col-8 col-lg-8 col-xl-9">
    
                            <div class="d-flex flex-column my-auto text-start p-4">
    
                                <h4 class="text-dark mb-0">{{$testimonial->name}}</h4>
    
                                <p class="mb-3">{{$testimonial->profaction}}</p>
    
                                <div class="d-flex text-primary mb-3">
    
                                    @for ($i = 1; $i <= 5; $i++)
    
                                        @if ($i <= $testimonial->rating)
    
                                            <i class="fas fa-star"></i>
    
                                        @else
    
                                            <i class="fas fa-star text-body"></i>
    
                                        @endif
    
                                    @endfor
    
                                </div>
    
                                <p class="mb-0">{{$testimonial->description}}
    
                                </p>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
    
                @endforeach
    
        
    
            </div>
    
        </div>
    
    </div>
    
     <!-- Testimonial End -->


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






@endsection