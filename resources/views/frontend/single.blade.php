@extends('layouts.main')
@section('head')
   @include('partials.subheader')
@endsection
@section('content')
<main>


    <!-- blog details area start -->
    <section class="tp-postbox-details-area pb-120 pt-95">
       <div class="container">
          <div class="row">
             <div class="col-xl-9">
                <div class="tp-postbox-details-top">
                   <div class="tp-postbox-details-category">
                      <span>
                         <a href="#">{{ $blog->category->name }},</a>
                      </span>
                   </div>
                   <h3 class="tp-postbox-details-title">{!! html_entity_decode($blog->title)  !!}</h3>
                   <div class="tp-postbox-details-meta mb-50">
                      <span data-meta="author">
                         <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.4104 8C9.33922 8 10.9028 6.433 10.9028 4.5C10.9028 2.567 9.33922 1 7.4104 1C5.48159 1 3.91797 2.567 3.91797 4.5C3.91797 6.433 5.48159 8 7.4104 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.4102 15.0001C13.4102 12.2911 10.721 10.1001 7.41016 10.1001C4.09933 10.1001 1.41016 12.2911 1.41016 15.0001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                         </svg>
                         By <a href="#">{{  $blog->author }}</a>
                      </span>
                      <span>
                         <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.5972 10.7259L8.42721 9.43093C8.04921 9.20693 7.74121 8.66793 7.74121 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                         </svg>
                         {{   $blog->created_at->diffforHumans() }}
                      </span>
                      <span>
                         <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5287 11.881L12.8017 14.093C12.8717 14.674 12.2487 15.08 11.7517 14.779L8.8187 13.036C8.4967 13.036 8.1817 13.015 7.8737 12.973C8.3917 12.364 8.6997 11.594 8.6997 10.761C8.6997 8.77299 6.9777 7.16302 4.8497 7.16302C4.0377 7.16302 3.2887 7.394 2.6657 7.8C2.6447 7.625 2.6377 7.44999 2.6377 7.26799C2.6377 4.08299 5.4027 1.5 8.8187 1.5C12.2347 1.5 14.9997 4.08299 14.9997 7.26799C14.9997 9.15799 14.0267 10.831 12.5287 11.881Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.7 10.7611C8.7 11.5941 8.39201 12.3641 7.87401 12.9731C7.18101 13.8131 6.082 14.3521 4.85 14.3521L3.023 15.437C2.715 15.626 2.323 15.3671 2.365 15.0101L2.54 13.6311C1.602 12.9801 1 11.9371 1 10.7611C1 9.52905 1.658 8.44407 2.666 7.80007C3.289 7.39407 4.038 7.16309 4.85 7.16309C6.978 7.16309 8.7 8.77305 8.7 10.7611Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                         </svg>
                         <a href="#">Comments (2)</a>
                      </span>
                   </div>
                </div>
             </div>
             <div class="col-xl-12">
                <div class="tp-postbox-details-thumb">
                   <img src="{{  asset('storage/post/'.$blog->image) }}" class="w-100" alt="">
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-xl-9 col-lg-8">
                <div class="tp-postbox-details-main-wrapper">
                   <div class="tp-postbox-details-content">
                      {!!  html_entity_decode($blog->description) !!}
                      <div class="tp-postbox-details-share-wrapper">
                         <div class="row">
                            <div class="col-xl-4 col-lg-6">
                               <div class="tp-postbox-details-share text-md-end">
                                  <span>Share:</span>
                                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                  <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                               </div>
                            </div>
                         </div>
                      </div>


                   </div>
                </div>
             </div>
             <div class="col-xl-3 col-lg-4">
                <div class="tp-sidebar-wrapper tp-sidebar-ml--24">
                   <div class="tp-sidebar-widget mb-35">
                      <div class="tp-sidebar-search">
                         <form action="#">
                            <div class="tp-sidebar-search-input">
                               <input type="text" placeholder="Search...">
                               <button type="submit">
                                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                     <path d="M16.9995 17L13.1328 13.1333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                               </button>
                            </div>
                         </form>
                      </div>
                   </div>



                   <!-- latest post start -->
                   <div class="tp-sidebar-widget mb-35">
                      <h3 class="tp-sidebar-widget-title">Latest Posts</h3>
                      <div class="tp-sidebar-widget-content">
                         <div class="tp-sidebar-blog-item-wrapper">
                            @foreach ($recentblog as $recent)
                                <div class="tp-sidebar-blog-item d-flex align-items-center">
                                <div class="tp-sidebar-blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="{{  asset('storage/post/'.$recent->image ) }}" alt="">
                                    </a>
                                </div>
                                <div class="tp-sidebar-blog-content">
                                    <div class="tp-sidebar-blog-meta">
                                        <span>{{  $recent->created_at->diffforHumans() }}</span>
                                    </div>
                                    <h3 class="tp-sidebar-blog-title">
                                        <a href="blog-details.html">{!! html_entity_decode($recent->title, 20)  !!}</a>
                                    </h3>
                                </div>
                                </div>
                            @endforeach

                         </div>
                      </div>
                   </div>
                   <!-- latest post end -->

                   <!-- tag cloud start -->
                   <div class="tp-sidebar-widget mb-35">
                      <h3 class="tp-sidebar-widget-title">Popular Tags</h3>
                      @foreach ($blogtag as $tag)
                        <div class="tp-sidebar-widget-content tagcloud">
                            <a href="#">{{  $tag->name }}</a>
                        </div>
                      @endforeach
                   </div>
                   <!-- tag cloud end -->

                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- blog details area end -->


 </main>
@endsection
