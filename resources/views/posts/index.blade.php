@php
    $link = $_SERVER['REQUEST_URI'];
    $result = $link === '/blogs/ar';
    $locale = $result ? 'ar' : 'en';
    App::setLocale($locale);
@endphp
@extends('layouts.landingApps')
    @section('content')
 <div class="container">
     <div class="row justify-content-center">
       @if(!$result)
         <div class="col-lg-3">
             <div class="categories mt-5">
                 <div class="category bordered p-3">
                     <h3>Categories</h3>
                 </div>
                 <div class="category bordered p-3 activeCategory">
                     <div class="d-flex">
                       <div class="w-75">  
                          <a href="#" class="text-dark">All Categories</a>
                       </div>
                       <div>
                           <p>(62)</p>
                       </div>
                     </div>
                 </div>
                 <div class="category bordered p-3">
                     <div class="d-flex">
                       <div class="w-75">  
                          <a href="#" class="text-dark">Web design</a>
                       </div>
                       <div>
                           <p>(12)</p>
                       </div>
                     </div>
                 </div>
                 <div class="category bordered p-3">
                     <div class="d-flex">
                       <div class="w-75">  
                          <a href="#" class="text-dark">Web design</a>
                       </div>
                       <div>
                           <p>(12)</p>
                       </div>
                     </div>
                 </div>
                 <div class="category bordered p-3">
                     <div class="d-flex">
                       <div class="w-75">  
                          <a href="#" class="text-dark">Web design</a>
                       </div>
                       <div>
                           <p>(12)</p>
                       </div>
                     </div>
                 </div>
                 <div class="category bordered p-3">
                     <div class="d-flex">
                       <div class="w-75">  
                          <a href="#" class="text-dark">Web design</a>
                       </div>
                       <div>
                           <p>(12)</p>
                       </div>
                     </div>
                 </div>
             </div>
             <div class="categories mt-5">
                <div class="category bordered p-3">
                    <h3>{{__('LATEST POSTS')}}</h3>
                </div>
                <div class="category bordered p-3 activeCategory">
                    <div class="d-flex">
                      <div class="w-75">  
                         <a href="#" class="text-dark"><img src="assets/images/blog-1.jpg" height="80px" width="80px"></a>
                      </div>
                      <div>
                          <a href="#" class="text-dark">15 Feb, 2018</a>
                          <a href="#" class="text-dark">Promote your apps with us</a>
                      </div>
                    </div>
                </div>
                <div class="category bordered p-3">
                    <div class="d-flex">
                      <div class="w-75">  
                         <a href="#" class="text-dark"><img src="assets/images/blog-1.jpg" height="80px" width="80px"></a>
                      </div>
                      <div>
                          <a href="#" class="text-dark">15 Feb, 2018</a>
                          <a href="#" class="text-dark">Promote your apps with us</a>
                      </div>
                    </div>
                </div>
                <div class="category bordered p-3">
                    <div class="d-flex">
                      <div class="w-75">  
                         <a href="#" class="text-dark"><img src="assets/images/blog-1.jpg" height="80px" width="80px"></a>
                      </div>
                      <div>
                          <a href="#" class="text-dark">15 Feb, 2018</a>
                          <a href="#" class="text-dark">Promote your apps with us</a>
                      </div>
                    </div>
                </div>
             </div>
         </div>   
         <div class="col-lg-9">
             <div class="col-lg-6 mt-5">
               <div class="blogCard">
                 <img src="assets/images/blog-1.jpg" >
                <div class="details p-4"> 
                 <div class="d-flex">
                     <div class="author w-75">
                        By <a href="#">Anna Sword</a>
                     </div>
                     <div class="date">
                        <p>Feb 05, 2019</p>
                     </div>
                 </div>
                 <h2>How to grow up your business</h2>
                 <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when 
                    looking at its layout. The point of using
                 </p>
                 <a href="#">Read More</a>
                </div> 
               </div>  
             </div>  
          </div>  
          @else
            <div class="col-lg-9" style="direction:rtl!important;">
             <div class="col-lg-6 mt-5">
               <div class="blogCard">
                 <img src="assets/images/blog-1.jpg" >
                <div class="details p-4"> 
                 <div class="d-flex">
                     <div class="author w-75">
                        By <a href="#">Anna Sword</a>
                     </div>
                     <div class="date">
                        <p>Feb 05, 2019</p>
                     </div>
                 </div>
                 <h2>How to grow up your business</h2>
                 <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when 
                    looking at its layout. The point of using
                 </p>
                 <a href="#">Read More</a>
                </div> 
               </div>  
             </div>  
           </div> 
           <div class="col-lg-3">
             <div class="categories mt-5">
                 <div class="category bordered p-3">
                     <h3>Categories</h3>
                 </div>
                 <div class="category bordered p-3 activeCategory">
                     <div class="d-flex">
                       <div class="w-75">  
                          <a href="#" class="text-dark">All Categories</a>
                       </div>
                       <div>
                           <p>(62)</p>
                       </div>
                     </div>
                 </div>
                 <div class="category bordered p-3">
                     <div class="d-flex">
                       <div class="w-75">  
                          <a href="#" class="text-dark">Web design</a>
                       </div>
                       <div>
                           <p>(12)</p>
                       </div>
                     </div>
                 </div>
                 <div class="category bordered p-3">
                     <div class="d-flex">
                       <div class="w-75">  
                          <a href="#" class="text-dark">Web design</a>
                       </div>
                       <div>
                           <p>(12)</p>
                       </div>
                     </div>
                 </div>
                 <div class="category bordered p-3">
                     <div class="d-flex">
                       <div class="w-75">  
                          <a href="#" class="text-dark">Web design</a>
                       </div>
                       <div>
                           <p>(12)</p>
                       </div>
                     </div>
                 </div>
                 <div class="category bordered p-3">
                     <div class="d-flex">
                       <div class="w-75">  
                          <a href="#" class="text-dark">Web design</a>
                       </div>
                       <div>
                           <p>(12)</p>
                       </div>
                     </div>
                 </div>
             </div>
             <div class="categories mt-5">
                <div class="category bordered p-3">
                    <h3>{{__('LATEST POSTS')}}</h3>
                </div>
                <div class="category bordered p-3 activeCategory">
                    <div class="d-flex">
                      <div class="w-75">  
                         <a href="#" class="text-dark"><img src="assets/images/blog-1.jpg" height="80px" width="80px"></a>
                      </div>
                      <div>
                          <a href="#" class="text-dark">15 Feb, 2018</a>
                          <a href="#" class="text-dark">Promote your apps with us</a>
                      </div>
                    </div>
                </div>
                <div class="category bordered p-3">
                    <div class="d-flex">
                      <div class="w-75">  
                         <a href="#" class="text-dark"><img src="assets/images/blog-1.jpg" height="80px" width="80px"></a>
                      </div>
                      <div>
                          <a href="#" class="text-dark">15 Feb, 2018</a>
                          <a href="#" class="text-dark">Promote your apps with us</a>
                      </div>
                    </div>
                </div>
                <div class="category bordered p-3">
                    <div class="d-flex">
                      <div class="w-75">  
                         <a href="#" class="text-dark"><img src="assets/images/blog-1.jpg" height="80px" width="80px"></a>
                      </div>
                      <div>
                          <a href="#" class="text-dark">15 Feb, 2018</a>
                          <a href="#" class="text-dark">Promote your apps with us</a>
                      </div>
                    </div>
                </div>
             </div>
         </div>  
          @endif
             <div class="col-lg-12 mb-5 mt-5">
                 <div class="d-flex justify-content-center">
                     <div class="bordered border-0 p-2 mr-2 mt-2 cursor-pointer prev">
                         <i class="fa fa-arrow-left"></i>
                     </div>
                     <div class="bordered border-dark p-2 mr-2 cursor-pointer">
                         <p class="p-2">1</p>
                     </div>
                     <div class="bordered border-dark p-2 mr-2 cursor-pointer">
                         <p class="p-2">2</p>
                     </div>
                     <div class="bordered border-dark p-2 mr-2 cursor-pointer">
                         <p class="p-2">3</p>
                     </div>
                     <div class="bordered border-0 p-2 mr-2 cursor-pointer mt-2 next">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                 </div>
             </div>
         </div>
     </div>
 </div>       
    @endsection
