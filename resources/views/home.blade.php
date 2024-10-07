@extends('dashboard.layout.main')


@section('main-containers')
<style>
    .our-feature-span{
        font-size:20px !important;
        font-weight:500;
    }

  </style>
<!-- Carousel Start -->

    <div class="header-carousel owl-carousel">

        @foreach ($homebanner as $homebanner)
            <div class="header-carousel-item bg-primary">

                <div class="carousel-caption">

                    <div class="container">

                        <div class="row g-4 align-items-center">

                            <div class="col-lg-7 animated fadeInLeft">

                                <div class="text-sm-center text-md-start">

                                    <span class="text-white text-uppercase fw-bold mb-4">{{ $homebanner->title }}</span>

                                    <h1 class="display-3 text-white mb-4">{{ $homebanner->main_title }}</h1>

                                    <p class="mb-5 fs-5">{{ $homebanner->des }}

                                    </p>

                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">

                                        <a class="btn btn-outline-light rounded-pill py-3 px-4 px-md-5 ms-2"
                                            href="{{ $homebanner->link }}">Learn More</a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-5 animated fadeInRight">

                                <div class="calrousel-img" style="object-fit: cover;">

                                    <img src="{{ url('uploads/' . $homebanner->image) }}" class="img-fluid w-100"
                                        alt="{{ $homebanner->alt }}">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        @endforeach



    </div>

    <!-- Carousel End -->



    <!-- Feature Start -->



    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <span class="text-primary our-feature-span">Our Features</span>
                <h2 class="display-4 mb-4">Professional Content Writing</h2>
                <p class="mb-0">We specialize in creating well-researched, high-quality academic content, tailored to meet
                    the needs of students and professionals. From essays to dissertations, our expert writers deliver
                    content that meets rigorous academic standards.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-tv fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Proofreading and Editing</h4>
                        <p class="mb-4">Our proofreading and editing services ensure your academic documents are free from
                            errors and adhere to the highest standards of clarity and precision. We refine your work for
                            grammar, structure, and overall quality, helping you achieve excellence.
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4 pt-0">



                        <div class="feature-icon p-4 mb-4">



                            <i class="fas fa-database fa-3x"></i>



                        </div>



                        <h4 class="mb-4">Educational IT Development</h4>



                        <p class="mb-4">We provide tailored IT solutions for educational institutions and professionals,
                            including website development, learning management systems, and custom applications. Our focus
                            is on enhancing accessibility, functionality, and user experience in academic settings.



                        </p>



                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>



                    </div>



                </div>



                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">



                    <div class="feature-item p-4 pt-0">



                        <div class="feature-icon p-4 mb-4">



                            <i class="fa fa-robot fa-3x"></i>



                        </div>



                        <h4 class="mb-4">Creative Design and Branding</h4>



                        <p class="mb-4">Our design services cater to the academic sector, offering bespoke branding,
                            presentation design, and educational material creation. We deliver visually appealing and
                            effective designs that elevate the academic experience and communicate your message clearly.



                        </p>



                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>



                    </div>



                </div>



                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">



                    <div class="feature-item p-4 pt-0">



                        <div class="feature-icon p-4 mb-4">



                            <i class="fa fa-network-wired fa-3x"></i>



                        </div>



                        <h4 class="mb-4">Virtual Software Solutions</h4>



                        <p class="mb-4">We offer cutting-edge virtual software solutions for civil and mechanical
                            engineering projects. Our tools enable precise simulations, modeling, and analysis, helping
                            professionals optimize designs and improve project outcomes efficiently.



                        </p>



                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>



                    </div>



                </div>



            </div>



        </div>



    </div>



    <!-- Feature End -->



    <!-- About Start -->



    <div class="container-fluid bg-light about pb-5">



        <div class="container pb-5">



            <div class="row g-5">



                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">



                    <div class="about-item-content bg-white rounded p-md-5 p-3 h-100">



                        <span class="text-primary our-feature-span">About Our Company</span>



                        <h2 class="display-4 mb-4">Innovating Excellence in Academia and Technology</h2>



                        <p>At Verbalix Technologies, we specialize in academic content writing, proofreading, IT
                            development, and design services. Serving the US, UK, Germany, Hong Kong, Malaysia, and
                            Singapore, we are dedicated to delivering top-tier solutions that drive success in both academic
                            and professional arenas.



                        </p>



                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae praesentium recusandae eligendi
                            modi hic



                        </p>



                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>We can save your money.</p>



                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>A+ Reated Quality Assurance</p>



                        <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Plag & AI Free Delivery</p>



                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a>



                    </div>



                </div>



                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">



                    <div class="bg-white rounded p-xl-5 p-3 h-100">



                        <div class="row g-4 justify-content-center">



                            <div class="col-12">



                                <div class="rounded bg-light">



                                  
                                        <img src="{{ url('uploads/images/picture-people-working-computer-with-man-working-computer_1135235-237.avif')}}"
                                        class="img-fluid w-100" alt="">



                                </div>



                            </div>



                            <div class="col-sm-6">



                                <div class="counter-item bg-light rounded p-3 h-100">



                                    <div class="counter-counting">



                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">5</span>



                                        <span class="h1 fw-bold text-primary">+</span>



                                    </div>



                                    <h4 class="mb-0 text-dark">Continents</h4>



                                </div>



                            </div>



                            <div class="col-sm-6">



                                <div class="counter-item bg-light rounded p-3 h-100">



                                    <div class="counter-counting">



                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">200</span>



                                        <span class="h1 fw-bold text-primary">+</span>



                                    </div>



                                    <h4 class="mb-0 text-dark">Technicians</h4>



                                </div>



                            </div>



                            <div class="col-sm-6">



                                <div class="counter-item bg-light rounded p-3 h-100">



                                    <div class="counter-counting">



                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">590</span>



                                        <span class="h1 fw-bold text-primary">+</span>



                                    </div>



                                    <h4 class="mb-0 text-dark">Researchers</h4>



                                </div>



                            </div>



                            <div class="col-sm-6">



                                <div class="counter-item bg-light rounded p-3 h-100">



                                    <div class="counter-counting">



                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">5000</span>



                                        <span class="h1 fw-bold text-primary">+</span>



                                    </div>



                                    <h4 class="mb-0 text-dark">Client Base</h4>



                                </div>



                            </div>



                        </div>



                    </div>



                </div>



            </div>



        </div>



    </div>



    <!-- About End -->



    <!-- Service Start -->

    <div class="container-fluid service py-5">

        <div class="container py-5">

            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

                <span class="text-primary our-feature-span">Our Services</span>

                <h2 class="display-4 mb-4">We Provide Best Services</h2>

                <p class="mb-0">Verbalix Technologies delivers top-tier academic writing, proofreading, IT development,
                    and design services. We cater to global clients, ensuring high-quality, tailored solutions that drive
                    success and exceed expectations.

                </p>

            </div>

            <div class="row g-4 justify-content-center">



                @foreach ($servicelist as $servicelist)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">

                        <div class="service-item">

                            <div class="service-img">

                                <img src="{{ url('uploads/' . $servicelist->image) }}" class="img-fluid rounded-top w-100"
                                    alt="Services">

                                <div class="service-icon p-3">

                                    <i class="fa fa-desktop fa-2x"></i>

                                </div>

                            </div>

                            <div class="service-content p-4">

                                <div class="service-content-inner">

                                    <a href="{{ url('service-details/' . $servicelist->slug) }}"
                                        class="d-inline-block h4 mb-4">{{ $servicelist->title }}</a>

                                    <p class="mb-4">{{ $servicelist->short_content }}</p>

                                    <a class="btn btn-primary rounded-pill py-2 px-4"
                                        href="{{ url('service-details/' . $servicelist->slug) }}">Read More</a>

                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach











                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">

                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('services') }}">More Services</a>

                </div>

            </div>

        </div>

    </div>

    <!-- Service End -->



    <!-- FAQs Start -->

    <div class="container-fluid faq-section bg-light py-5">

        <div class="container py-5">

            <div class="row g-5 align-items-center">

                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">

                    <div class="h-100">

                        <div class="mb-5">

                            <span class="text-primary our-feature-span">Some Important FAQ's</span>

                            <h2 class="display-4 mb-0">Common Frequently Asked Questions</h2>

                        </div>

                        <div class="accordion" id="accordionExample">

                            @foreach ($faq as $faq)
                                <div class="accordion-item">

                                    <h2 class="accordion-header" id="heading{{ $faq->id }}">

                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}"
                                            aria-expanded="false" aria-controls="collapse{{ $faq->id }}">

                                            {{ $faq->question }}

                                        </button>

                                    </h2>

                                    <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">

                                        <div class="accordion-body">

                                            {{ $faq->answer }}

                                        </div>

                                    </div>

                                </div>
                            @endforeach



                        </div>

                    </div>

                </div>

                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
 
      <img src="{{ url('uploads/images/people-ask-frequently-asked-questions_102902-2339.avif')}}"
                        class="img-fluid w-100" alt="">
                </div>

            </div>

        </div>

    </div>

    <!-- FAQs End -->



    <!-- Blog Start -->

    <div class="container-fluid blog py-5">

        <div class="container py-5">

            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

                <span class="text-primary our-feature-span">From Blog</span>

                <h2 class="display-4 mb-4">News And Updates</h2>

                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.

                </p>

            </div>

            <div class="row g-4 justify-content-center">





                @foreach ($bloglist as $bloglist)
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">

                        <div class="blog-item">

                            <div class="blog-img">

                                <img src="{{ url('uploads/' . $bloglist->image) }}" class="img-fluid rounded-top w-100"
                                    alt="Blog">

                                <div class="blog-categiry py-2 px-4">

                                    <span>It Service</span>

                                </div>

                            </div>

                            <div class="blog-content p-4">

                                <div class="blog-comment d-flex justify-content-between mb-3">

                                    <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>

                                    <div class="small"><span class="fa fa-calendar text-primary"></span>
                                        {{ $bloglist->created_at->format('d M Y') }}</div>

                                    <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments
                                    </div>

                                </div>

                                <a href="#" class="h4 d-inline-block mb-3">{{ $bloglist->title }}</a>

                                <p class="mb-3">{!! Str::limit($bloglist->short_content, 30) !!}</p>

                                <a href="{{ url('blog-details/' . $bloglist->slug) }}" class="btn p-0">Read More <i
                                        class="fa fa-arrow-right"></i></a>

                            </div>

                        </div>

                    </div>
                @endforeach



            </div>

        </div>

    </div>

    <!-- Blog End -->



    <!-- Testimonial Start -->

    <div class="container-fluid testimonial pb-5">

        <div class="container pb-5">

            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

                <span class="text-primary our-feature-span">Testimonial</span>

                <h2 class="display-4 mb-4">What Our Customers Are Saying</h2>

                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.

                </p>

            </div>

            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">



                @foreach ($testimonial as $testimonial)
                    <div class="testimonial-item bg-light rounded">

                        <div class="row g-0">

                            <div class="col-12  col-md-4 col-xl-3">

                                <div class="h-100">

                                    <img src="{{ url('uploads/' . $testimonial->image) }}"
                                        class="img-fluid h-100 rounded" style="object-fit: cover;"
                                        alt="{{ $testimonial->alt }}">

                                </div>

                            </div>

                            <div class="col-12 col-md-8 col-xl-9">

                                <div class="d-flex flex-column my-auto text-start p-4">

                                    <h4 class="text-dark mb-0">{{ $testimonial->name }}</h4>

                                    <p class="mb-3 testimonial_p">{{ $testimonial->profaction }}</p>

                                    <div class="d-flex text-primary mb-3">

                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $testimonial->rating)
                                                <i class="fas fa-star"></i>
                                            @else
                                                <i class="fas fa-star text-body"></i>
                                            @endif
                                        @endfor

                                    </div>

                                    <p class="mb-0">{{ $testimonial->description }}

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
@endsection
