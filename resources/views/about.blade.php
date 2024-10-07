@extends('dashboard.layout.main')

@section('main-containers')



        <!-- Header Start -->

        <div class="container-fluid bg-breadcrumb" style="background-image: url(../uploads/{{$banner['banner']}})">

         <div class="container text-md-start text-center py-5">

             <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>

             <ol class="breadcrumb d-flex mb-0 wow fadeInDown" data-wow-delay="0.3s">

                 <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>

                 <li class="breadcrumb-item"><a href="#">Pages</a></li>

                 <li class="breadcrumb-item active text-white">About</li>

             </ol>    

         </div>

     </div>

     <!-- Header End -->





     <!-- About Start -->

     <div class="container-fluid bg-light about pb-5">

         <div class="container pb-5">

             <div class="row g-5">

                 <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">

                     <div class="about-item-content bg-white rounded p-5 h-100">

                         <h4 class="text-primary">About Our Company</h4>

                         <h1 class="display-4 mb-4">Innovating Excellence in Academia and Technology</h1>

                         <p>At Verbalix Technologies, we specialize in academic content writing, proofreading, IT development, and design services. Serving the US, UK, Germany, Hong Kong, Malaysia, and Singapore, we are dedicated to delivering top-tier solutions that drive success in both academic and professional arenas.

                         </p>

                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae praesentium recusandae eligendi modi hic

                         </p>

                         <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>We can save your money.</p>

                         <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>A+ Reated Quality Assurance</p>

                         <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Plag & AI Free Delivery</p>

                         <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a>

                     </div>

                 </div>

                 <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">

                     <div class="bg-white rounded p-5 h-100">

                         <div class="row g-4 justify-content-center">

                             <div class="col-12">

                                 <div class="rounded bg-light">

                                     <img src="https://img.freepik.com/premium-vector/picture-people-working-computer-with-man-working-computer_1135235-237.jpg?w=740" class="img-fluid rounded w-100" alt="">

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





     <!-- Feature Start -->

     <div class="container-fluid feature bg-light py-5">

         <div class="container py-5">

             <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

                 <h4 class="text-primary">Our Features</h4>

                 <h1 class="display-4 mb-4">Professional Content Writing</h1>

                 <p class="mb-0">We specialize in creating well-researched, high-quality academic content, tailored to meet the needs of students and professionals. From essays to dissertations, our expert writers deliver content that meets rigorous academic standards.

                 </p>

             </div>

             <div class="row g-4">

                 <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">

                     <div class="feature-item p-4 pt-0">

                         <div class="feature-icon p-4 mb-4">

                             <i class="fas fa-tv fa-3x"></i>

                         </div>

                         <h4 class="mb-4">Proofreading and Editing</h4>

                         <p class="mb-4">Our proofreading and editing services ensure your academic documents are free from errors and adhere to the highest standards of clarity and precision. We refine your work for grammar, structure, and overall quality, helping you achieve excellence.

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

                         <p class="mb-4">We provide tailored IT solutions for educational institutions and professionals, including website development, learning management systems, and custom applications. Our focus is on enhancing accessibility, functionality, and user experience in academic settings.

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

                         <p class="mb-4">Our design services cater to the academic sector, offering bespoke branding, presentation design, and educational material creation. We deliver visually appealing and effective designs that elevate the academic experience and communicate your message clearly.

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

                         <p class="mb-4">We offer cutting-edge virtual software solutions for civil and mechanical engineering projects. Our tools enable precise simulations, modeling, and analysis, helping professionals optimize designs and improve project outcomes efficiently.

                         </p>

                         <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>

                     </div>

                 </div>

             </div>

         </div>

     </div>

     <!-- Feature End -->



     <!-- FAQs Start -->

     <div class="container-fluid faq-section bg-light py-5">

         <div class="container py-5">

             <div class="row g-5 align-items-center">

                 <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">

                     <div class="h-100">

                         <div class="mb-5">

                             <h4 class="text-primary">Some Important FAQ's</h4>

                             <h1 class="display-4 mb-0">Common Frequently Asked Questions</h1>

                         </div>

                         <div class="accordion" id="accordionExample">

                             
@foreach ($faq as $faq)
    

                             <div class="accordion-item">

                                 <h2 class="accordion-header" id="heading{{$faq->id}}">

                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">

                                        {{$faq->question}}

                                     </button>

                                 </h2>

                                 <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$faq->id}}" data-bs-parent="#accordionExample">

                                     <div class="accordion-body">

                                        {{$faq->answer}}

                                     </div>

                                 </div>

                             </div>
                             @endforeach

                         

                         </div>

                     </div>

                 </div>

                 <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">

                     <img src="https://img.freepik.com/free-vector/people-ask-frequently-asked-questions_102902-2339.jpg?t=st=1724654472~exp=1724658072~hmac=e8d1f3d50497c35a112e0ef691231e2791e7e4797c3473d88b7c4cc9ab81765c&w=740" class="img-fluid w-100" alt="">

                 </div>

             </div>

         </div>

     </div>

     <!-- FAQs End -->





@endsection