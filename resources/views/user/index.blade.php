@extends('layouts.user.app')
@section('title', 'Home')
@section('user_content')
      <!--serivce start-->
   <section class="">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2 class="my-5 service">Our Services</h2>
             <div class="row">
                 <div class="col-md-4 col-lg-4 col-sm-12 my-2">
                     <div class="card">
                         <div class="card-body">
                             <div class="service-img">
                                 <img class="button" src="{{asset('user')}}/w.png" alt="">
                                 <p class="lead my-3">Wedding</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-lg-4 col-sm-12 my-2">
                     <div class="card">
                         <div class="card-body">
                             <div class="service-img">
                                 <img class="button" src="{{asset('user')}}/p.png" alt="">
                                 <p class="lead my-3">Party</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-lg-4 col-sm-12 my-2">
                     <div class="card">
                         <div class="card-body">
                             <div class="service-img">
                                 <img class="button" src="{{asset('user')}}/b.png" alt="">
                                 <p class="lead my-3">Birthday</p>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-4 col-lg-4 col-sm-12 my-2">
                     <div class="card">
                         <div class="card-body">
                             <div class="service-img">
                                 <img class="button" src="{{asset('user')}}/w.png" alt="">
                                 <p class="lead my-3">Wedding</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-lg-4 col-sm-12 my-2">
                     <div class="card">
                         <div class="card-body">
                             <div class="service-img">
                                 <img class="button" src="{{asset('user')}}/p.png" alt="">
                                 <p class="lead my-3">Party</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-lg-4 col-sm-12 my-2">
                     <div class="card">
                         <div class="card-body">
                             <div class="service-img">
                                 <img class="button" src="{{asset('user')}}/b.png" alt="">
                                 <p class="lead my-3">Birthday</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</section>
<!--end service-->

<!--photogrpher start-->
<section class=" container my-5">
 <div class="hire">
     <h2 class="text-center title"> Pupolar Photographer</h2>
     <div class="row">
         <div class="col-md-6 col-lg-6 col-12 col-sm-12 my-3">
             <div class="card mb-3" style="max-width: 540px;">
                 <div class="row g-0">
                   <div class="col-md-4 hire-img">
                     <img src="{{asset('user')}}/banner.jpg" class="img-fluid rounded-start" alt="...">
                   </div>
                   <div class="col-md-8">
                     <div class="card-body">
                       <h5 class="card-title">Card title</h5>
                       <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                       <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                     </div>
                   </div>
                 </div>
               </div>
         </div>

         <div class="col-md-6 col-lg-6 col-12 col-sm-12 my-3">
             <div class="card mb-3" style="max-width: 540px;">
                 <div class="row g-0">
                   <div class="col-md-4 hire-img">
                     <img src="{{asset('user')}}/banner.jpg" class="img-fluid rounded-start" alt="...">
                   </div>
                   <div class="col-md-8">
                     <div class="card-body">
                       <h5 class="card-title">Card title</h5>
                       <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                       <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                     </div>
                   </div>
                 </div>
               </div>
         </div>

         <div class="col-md-6 col-lg-6 col-12 col-sm-12 my-3">
             <div class="card mb-3" style="max-width: 540px;">
                 <div class="row g-0">
                   <div class="col-md-4 hire-img">
                     <img src="{{asset('user')}}/banner.jpg" class="img-fluid rounded-start" alt="...">
                   </div>
                   <div class="col-md-8">
                     <div class="card-body">
                       <h5 class="card-title">Card title</h5>
                       <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                       <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                     </div>
                   </div>
                 </div>
               </div>
         </div>

         <div class="col-md-6 col-lg-6 col-12 col-sm-12 my-3">
             <div class="card mb-3" style="max-width: 540px;">
                 <div class="row g-0">
                   <div class="col-md-4 hire-img">
                     <img src="{{asset('user')}}/banner.jpg" class="img-fluid rounded-start" alt="...">
                   </div>
                   <div class="col-md-8">
                     <div class="card-body">
                       <h5 class="card-title">Card title</h5>
                       <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                       <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                     </div>
                   </div>
                 </div>
               </div>
         </div>

        
     </div>
     <div class="text-center">
         <a class="btn btn-outline-dark text-center hire-btn" href="">More Photographer</a>
     </div>
 </div>
</section>
<!--end photograper-->


<!--contact start-->
<section class="my-5 container">
 <section class="row">
     <div class="col-md-6 col-lg-6 col-sm-12 col-12">
         <div class="contact">
             <h1 class="title ">GET IN TOUCH</h1><hr>
             <p>Create a free website with Wix.com. Customize with Wix' free website builder,Showcase your portfolio in creative
                 layouts, like Grid, Slider, Strip, and more.</p>
             <div class="my-2">
                 <p><strong><i class="fas fa-phone-alt"></i></strong> +88018873121</p>
                 <p><strong><i class="fas fa-envelope"></i></strong> Test@gmail.com</p>
                 <p><strong><i class="fas fa-location-arrow"></i></strong> Dhaka Bangladesh</p>
             </div>
         </div>
     </div>
     <div class="col-md-6 col-lg-6 col-sm-12 col-12">
         <form action="" method="post">
             <div class="form-group my-2">
                 <label for="">Name</label>
                 <input type="text" class="form-control" placeholder="Name" name="" id="">
             </div>
             <div class="form-group my-2">
                 <label for="">Email</label>
                 <input type="text" class="form-control" placeholder="Name" name="" id="">
             </div>
             <div class="form-group my-2">
                 <label for="">Message</label>
                 <textarea name="" class="form-control" id="" cols="10" rows="4"></textarea>
             </div>
             <div class="text-center">
                 <input type="submit" class="btn  hire-btn btn-outline-dark">
             </div>
         </form>
     </div>
 </section>
</section>
<!--contact end-->

<!--photo gallery start-->
<section class="my-5 container">
    <div class="gallery">
         <h2 class="text-center title"> Photo Gallery</h2>
    </div>
    <div class="row">
         <div class="col-md-4 my-2">
             <img width="100%" src="{{asset('user')}}/banner.jpg" alt="">
         </div>
         <div class="col-md-4 my-2">
             <img width="100%" src="{{asset('user')}}/banner.jpg" alt="">
         </div>
         <div class="col-md-4 my-2">
             <img width="100%" src="{{asset('user')}}/banner.jpg" alt="">
         </div>
         <div class="col-md-4 my-2">
             <img width="100%" src="{{asset('user')}}/banner.jpg" alt="">
         </div>
         <div class="col-md-4 my-2">
             <img width="100%" src="{{asset('user')}}/banner.jpg" alt="">
         </div>
         <div class="col-md-4 my-2">
             <img width="100%" src="{{asset('user')}}/banner.jpg" alt="">
         </div>
    </div>
</section>
<!--photo gallery end-->
@endsection