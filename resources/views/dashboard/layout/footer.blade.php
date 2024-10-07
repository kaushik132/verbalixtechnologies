 <!-- Footer Start -->

 @php

 use App\Models\HomeModify;



 // Assuming you're fetching some data from the HomeModify model

 $homeData = HomeModify::first(); // This could be any query

@endphp

 <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">

   <div class="container py-5">

       <div class="row g-5">

           <div class="col-xl-9">

               <div class="mb-5">

                   <div class="row g-4">

                       <div class="col-md-6 col-lg-6 col-xl-5">

                           <div class="footer-item">

                               <a href="{{route('index')}}" class="p-0">
 
                                   <img src="{{ url('uploads/images/logo_footer.svg')}}"
                                   class="img-fluid  " alt="" style="width: 202px;">
                                   <!-- <img src="img/logo.png" alt="Logo"> -->

                               </a>

                               <p class="text-white mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>

                               <div class="footer-btn d-flex">

                                   <a class="btn btn-md-square rounded-circle me-3" href="{{ $homeData->facebook ?? '' }}"><i class="fab fa-facebook-f"></i></a>

                                   <a class="btn btn-md-square rounded-circle me-3" href="{{ $homeData->twitter ?? '' }}"><i class="fab fa-twitter"></i></a>

                                   <a class="btn btn-md-square rounded-circle me-3" href="{{ $homeData->instagrame ?? '' }}"><i class="fab fa-instagram"></i></a>

                                   <a class="btn btn-md-square rounded-circle me-0" href="{{ $homeData->linkedin ?? '' }}"><i class="fab fa-linkedin-in"></i></a>

                               </div>

                           </div>

                       </div>

                       <div class="col-md-6 col-lg-6 col-xl-3">

                           <div class="footer-item">

                               <h4 class="text-white mb-4">Useful Links</h4>

                               <a href="{{route('about')}}"><i class="fas fa-angle-right me-2"></i> About Us</a>

                               <a href="{{route('services')}}"><i class="fas fa-angle-right me-2"></i> Services</a>

                               <a href="{{route('blogs')}}"><i class="fas fa-angle-right me-2"></i> Blogs</a>

                               <a href="{{route('contact')}}"><i class="fas fa-angle-right me-2"></i> Contact</a>

                           </div>

                       </div>

                       <!-- <div class="col-md-6 col-lg-6 col-xl-4">

                           <div class="footer-item">

                               <h4 class="mb-4 text-white">Instagram</h4>

                               <div class="row g-3">

                                   <div class="col-4">

                                       <div class="footer-instagram rounded">

                                           <img src="{{url('web/img/instagram-footer-1.jpg')}}" class="img-fluid w-100" alt="">

                                           <div class="footer-search-icon">

                                               <a href="{{url('web/img/instagram-footer-1.jpg')}}" data-lightbox="footerInstagram-1" class="my-auto"><i class="fas fa-link text-white"></i></a>

                                           </div>

                                       </div>

                                  </div>

                                  <div class="col-4">

                                       <div class="footer-instagram rounded">

                                           <img src="{{url('web/img/instagram-footer-2.jpg')}}" class="img-fluid w-100" alt="">

                                           <div class="footer-search-icon">

                                               <a href="{{url('web/img/instagram-footer-2.jpg')}}" data-lightbox="footerInstagram-2" class="my-auto"><i class="fas fa-link text-white"></i></a>

                                           </div>

                                       </div>

                                  </div>

                                   <div class="col-4">

                                       <div class="footer-instagram rounded">

                                           <img src="{{url('web/img/instagram-footer-3.jpg')}}" class="img-fluid w-100" alt="">

                                           <div class="footer-search-icon">

                                               <a href="{{url('web/img/instagram-footer-3.jpg')}}" data-lightbox="footerInstagram-3" class="my-auto"><i class="fas fa-link text-white"></i></a>

                                           </div>

                                       </div>

                                  </div>

                                   <div class="col-4">

                                       <div class="footer-instagram rounded">

                                           <img src="{{url('web/img/instagram-footer-4.jpg')}}" class="img-fluid w-100" alt="">

                                           <div class="footer-search-icon">

                                               <a href="{{url('web/img/instagram-footer-4.jpg')}}" data-lightbox="footerInstagram-4" class="my-auto"><i class="fas fa-link text-white"></i></a>

                                           </div>

                                       </div>

                                  </div>

                                   <div class="col-4">

                                       <div class="footer-instagram rounded">

                                           <img src="{{url('web/img/instagram-footer-5.jpg')}}" class="img-fluid w-100" alt="">

                                           <div class="footer-search-icon">

                                               <a href="{{url('web/img/instagram-footer-5.jpg')}}" data-lightbox="footerInstagram-5" class="my-auto"><i class="fas fa-link text-white"></i></a>

                                           </div>

                                       </div>

                                  </div>

                                  <div class="col-4">

                                       <div class="footer-instagram rounded">

                                           <img src="{{url('web/img/instagram-footer-6.jpg')}}" class="img-fluid w-100" alt="">

                                           <div class="footer-search-icon">

                                               <a href="{{url('web/img/instagram-footer-6.jpg')}}" data-lightbox="footerInstagram-6" class="my-auto"><i class="fas fa-link text-white"></i></a>

                                           </div>

                                       </div>

                                   </div>

                               </div>

                           </div>

                       </div> -->

                   </div>

               </div>

               <div class="pt-md-5 pt-3" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">

                   <div class="row g-0">

                       <div class="col-12">

                           <div class="row g-4">

                               <div class="col-lg-6 col-xl-4">

                                   <div class="d-flex">

                                       <div class="btn-xl-square bg-white text-primary rounded p-4 me-4">

                                           <i class="fas fa-map-marker-alt fa-2x"></i>

                                       </div>

                                       <div>

                                           <h4 class="text-white">Address</h4>

                                           <p class="mb-0">{{ $homeData->address ?? '123 address' }}</p>

                                       </div>

                                   </div>

                               </div>

                               <div class="col-lg-6 col-xl-4">

                                   <div class="d-flex">

                                       <div class="btn-xl-square bg-white text-primary rounded p-4 me-4">

                                           <i class="fas fa-envelope fa-2x"></i>

                                       </div>

                                       <div>

                                           <h4 class="text-white">Mail Us</h4>

                                      <p class="mb-0">{{ $homeData->email ?? 'example@gmail.com' }}</p>

                                       </div>

                                   </div>

                               </div>

                               <div class="col-lg-6 col-xl-4">

                                   <div class="d-flex">

                                       <div class="btn-xl-square bg-white text-primary rounded p-4 me-4">

                                           <i class="fa fa-phone-alt fa-2x"></i>

                                       </div>

                                       <div>

                                           <h4 class="text-white">Telephone</h4>

                                         <p class="mb-0">{{ $homeData->phone_no ?? '' }}</p>

                                       </div>

                                   </div>

                               </div>

                           </div>

                       </div>

                   </div>

               </div>

           </div>

           

           <div class="col-xl-3">

               <div class="footer-item">

                   <h4 class="text-white mb-4">Newsletter</h4>

                   <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                   <div class="position-relative rounded-pill mb-4">

                       <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">

                       <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>

                   </div>

                   <div class="d-flex flex-shrink-0">

                       <div class="footer-btn">

                           <a href="#" class="btn btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">

                               <i class="fa fa-phone-alt fa-2x"></i>

                               <div class="position-absolute" style="top: 2px; right: 12px;">

                                   <span><i class="fa fa-comment-dots"></i></span>

                               </div>

                           </a>

                       </div>

                       <div class="d-flex flex-column ms-3 flex-shrink-0">

                           <span>Call to Our Experts</span>

                           <a href="tel:+ {{ $homeData->phone_no ?? '' }}"><span class="text-white">Free: +{{ $homeData->phone_no ?? '' }} </span></a>

                       </div>

                   </div>

               </div>

           </div>
    <div class="col-xl-12">
       <p class="text-light mb-0"><b>Disclamer: </b> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam natus esse, rerum architecto quae neque facilis laboriosam porro eum ea eligendi fugiat? Ducimus libero tempora harum nesciunt, ea maxime dolores.</p>

    </div>
       </div>

   </div>

</div>

<!-- Footer End -->



<!-- Copyright Start -->

<div class="container-fluid copyright py-4">

   <div class="container">

       <div class="row g-4 align-items-center">

           <div class="col-md-12 text-center mb-md-0">

               <span class="text-body"><i class="fas fa-copyright text-light me-2"></i>Copyright © 2024 Verbalix Technologies All right reserved</span>

           </div>

        

       </div>

   </div>

</div>

<!-- Copyright End -->





<!-- Back to Top -->

<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

<a href="https://api.whatsapp.com/send?phone={{ $homeData->phone_no ?? '' }}" class="btn btn-secondary btn-lg-square rounded-circle whatsapp-icon"><i class="fab fa-whatsapp fs-3"></i></a>   


  <!-- Google tag (gtag.js) -->



<!-- JavaScript Libraries -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{url('web/lib/wow/wow.min.js')}}"></script>

<!-- <script src="{{url('web/lib/easing/easing.min.js')}}"></script> -->

<!-- <script src="{{url('web/lib/waypoints/waypoints.min.js')}}"></script> -->

<script src="{{url('web/lib/counterup/counterup.min.js')}}"></script>

<!-- <script src="{{url('web/lib/lightbox/js/lightbox.min.js')}}"></script> -->

<script src="{{url('web/lib/owlcarousel/owl.carousel.min.js')}}"></script>





<!-- Template Javascript -->

<script src="{{url('web/js/main.js')}}"></script>

</body>



</html>