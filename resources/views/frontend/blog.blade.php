@extends('layouts.main')
@section('head')
   @include('partials.subheader')
@endsection
@section('content')

<main>

    <!-- section title area start -->
    <section class="tp-section-title-area pt-95 pb-80">
       <div class="container">
          <div class="row">
             <div class="col-xl-8">
                <div class="tp-section-title-wrapper-7">
                   <span class="tp-section-title-pre-7">Blog Standard</span>
                   <h3 class="tp-section-title-7">Insight and advice <br> From our Expert team.</h3>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- section title area end -->


    <!-- blog grid area start -->
    <section class="tp-blog-grid-area pb-120">
       <div class="container">
          <div class="row">
             <div class="col-xl-9 col-lg-8">
                <div class="tp-blog-grid-wrapper">
                   <div class="tp-blog-grid-top d-flex justify-content-between mb-40">
                      <div class="tp-blog-grid-result">
                         <p>Showing 1–14 of 26 results</p>
                      </div>
                      <div class="tp-blog-grid-tab tp-tab">
                         <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true">
                                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M16.3328 6.01317V2.9865C16.3328 2.0465 15.9061 1.6665 14.8461 1.6665H12.1528C11.0928 1.6665 10.6661 2.0465 10.6661 2.9865V6.0065C10.6661 6.95317 11.0928 7.3265 12.1528 7.3265H14.8461C15.9061 7.33317 16.3328 6.95317 16.3328 6.01317Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                     <path d="M16.3328 15.18V12.4867C16.3328 11.4267 15.9061 11 14.8461 11H12.1528C11.0928 11 10.6661 11.4267 10.6661 12.4867V15.18C10.6661 16.24 11.0928 16.6667 12.1528 16.6667H14.8461C15.9061 16.6667 16.3328 16.24 16.3328 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                     <path d="M7.33281 6.01317V2.9865C7.33281 2.0465 6.90614 1.6665 5.84614 1.6665H3.1528C2.0928 1.6665 1.66614 2.0465 1.66614 2.9865V6.0065C1.66614 6.95317 2.0928 7.3265 3.1528 7.3265H5.84614C6.90614 7.33317 7.33281 6.95317 7.33281 6.01317Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                     <path d="M7.33281 15.18V12.4867C7.33281 11.4267 6.90614 11 5.84614 11H3.1528C2.0928 11 1.66614 11.4267 1.66614 12.4867V15.18C1.66614 16.24 2.0928 16.6667 3.1528 16.6667H5.84614C6.90614 16.6667 7.33281 16.24 7.33281 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                              </button>
                              <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false">
                                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M15 7.11133H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                     <path d="M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                     <path d="M15 13.2222H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                              </button>
                            </div>
                          </nav>
                      </div>
                   </div> <!-- top end -->

                   <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab" tabindex="0">
                         <!-- blog grid item wrapper -->
                         <div class="tp-blog-grid-item-wrapper">
                            <div class="row tp-gx-30">

                                @foreach ($blog as $blogs)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-blog-grid-item p-relative mb-30">
                                        <div class="tp-blog-grid-thumb w-img fix mb-30">
                                            <a href="{{ route('blog-details', $blogs->slug)  }}">
                                                <img src="{{  asset('storage/post/'.$blogs->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="tp-blog-grid-content">
                                            <div class="tp-blog-grid-meta">
                                                <span>
                                                    <span>
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M10.5972 10.7259L8.42715 9.43093C8.04915 9.20693 7.74115 8.66793 7.74115 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    </span>
                                                    {{  $blogs->created_at->diffforHumans() }}
                                                </span>
                                                <span>
                                                    <span>
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.5289 11.881L12.8019 14.093C12.8719 14.674 12.2489 15.08 11.7519 14.779L8.81888 13.036C8.49688 13.036 8.18189 13.015 7.87389 12.973C8.39189 12.364 8.69988 11.594 8.69988 10.761C8.69988 8.77299 6.97788 7.16302 4.84988 7.16302C4.03788 7.16302 3.28888 7.394 2.66588 7.8C2.64488 7.625 2.63788 7.44999 2.63788 7.26799C2.63788 4.08299 5.40288 1.5 8.81888 1.5C12.2349 1.5 14.9999 4.08299 14.9999 7.26799C14.9999 9.15799 14.0269 10.831 12.5289 11.881Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M8.7 10.7611C8.7 11.5941 8.39201 12.3641 7.87401 12.9731C7.18101 13.8131 6.082 14.3521 4.85 14.3521L3.023 15.437C2.715 15.626 2.323 15.3671 2.365 15.0101L2.54 13.6311C1.602 12.9801 1 11.9371 1 10.7611C1 9.52905 1.658 8.44407 2.666 7.80007C3.289 7.39407 4.038 7.16309 4.85 7.16309C6.978 7.16309 8.7 8.77305 8.7 10.7611Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    </span>
                                                    Comments (0)
                                                </span>
                                            </div>
                                            <h3 class="tp-blog-grid-title">
                                                <a href="{{ route('blog-details', $blogs->slug)  }}">{{ \Str::limit($blogs->title,20) }}</a>
                                            </h3>
                                            <p>{!! html_entity_decode($blogs->description) !!}</p>

                                            <div class="tp-blog-grid-btn">
                                                <a href="{{ route('blog-details', $blogs->slug)  }}" class="tp-link-btn-3">
                                                    Read More
                                                    <span>
                                                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                         </div>
                      </div>
                      <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab" tabindex="0">
                         <!-- blog list wrapper -->
                         <div class="tp-blog-list-item-wrapper">
                            @foreach ($blog as $blogs)
                                <div class="tp-blog-list-item d-md-flex d-lg-block d-xl-flex">
                                <div class="tp-blog-list-thumb">
                                    <a href="{{ route('blog-details', $blogs->slug)  }}">
                                        <img src="{{  asset('storage/post/'.$blogs->image) }}" alt="">
                                    </a>
                                </div>
                                <div class="tp-blog-list-content">
                                    <div class="tp-blog-grid-content">
                                        <div class="tp-blog-grid-meta">
                                            <span>
                                            <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.5972 10.7259L8.42715 9.43093C8.04915 9.20693 7.74115 8.66793 7.74115 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            {{  $blogs->created_at->diffforHumans() }}
                                            </span>
                                            <span>
                                            <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.5289 11.881L12.8019 14.093C12.8719 14.674 12.2489 15.08 11.7519 14.779L8.81888 13.036C8.49688 13.036 8.18189 13.015 7.87389 12.973C8.39189 12.364 8.69988 11.594 8.69988 10.761C8.69988 8.77299 6.97788 7.16302 4.84988 7.16302C4.03788 7.16302 3.28888 7.394 2.66588 7.8C2.64488 7.625 2.63788 7.44999 2.63788 7.26799C2.63788 4.08299 5.40288 1.5 8.81888 1.5C12.2349 1.5 14.9999 4.08299 14.9999 7.26799C14.9999 9.15799 14.0269 10.831 12.5289 11.881Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M8.7 10.7611C8.7 11.5941 8.39201 12.3641 7.87401 12.9731C7.18101 13.8131 6.082 14.3521 4.85 14.3521L3.023 15.437C2.715 15.626 2.323 15.3671 2.365 15.0101L2.54 13.6311C1.602 12.9801 1 11.9371 1 10.7611C1 9.52905 1.658 8.44407 2.666 7.80007C3.289 7.39407 4.038 7.16309 4.85 7.16309C6.978 7.16309 8.7 8.77305 8.7 10.7611Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            Comments (0)
                                            </span>

                                        </div>
                                        <h3 class="tp-blog-grid-title">
                                            <a href="{{ route('blog-details', $blogs->slug)  }}">{{ \Str::limit($blogs->title,20) }}</a>
                                        </h3>
                                        <p>{!! html_entity_decode($blogs->description) !!}</p>

                                        <div class="tp-blog-grid-btn">
                                            <a href="{{ route('blog-details', $blogs->slug)  }}" class="tp-link-btn-3">
                                            Read More
                                            <span>
                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            @endforeach

                         </div>
                      </div>
                      <div class="row">
                         <div class="col-xl-12">
                            <div class="tp-blog-pagination mt-30">
                               <div class="tp-pagination">
                                <nav>
                                    <ul>
                                        <li>
                                           @if ($blog->onFirstPage())
                                               <a href="shop.html" class="tp-pagination-prev prev page-numbers">
                                                   <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                       <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                               </a>
                                           @else
                                               <a href="{{ $blog->previousPageUrl() }}" class="tp-pagination-prev prev page-numbers">
                                                   <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                       <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                               </a>
                                           @endif
                                       </li>
                                       <li>
                                           <span class="current">{{ $blog->currentPage() }}</span>
                                       </li>
                                       <li>
                                          <!-- Next Page Link -->
                                           @if ($blog->hasMorePages())
                                               <a href="{{ $blog->nextPageUrl() }}" class="next page-numbers">
                                                   <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                       <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                               </a>
                                           @else
                                               <a href="#" class="next page-numbers disabled">
                                                   <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                       <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                               </a>
                                           @endif
                                       </li>
                                    </ul>
                                  </nav>
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
                         <form action="{{  route('search-blog') }}" method="GET">
                            @csrf
                            <div class="tp-sidebar-search-input">
                               <input type="text" name="query" placeholder="Search...">
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

                   <!-- about -->
                   <div class="tp-sidebar-widget mb-35">
                      <h3 class="tp-sidebar-widget-title">About me</h3>
                      <div class="tp-sidebar-widget-content">
                         <div class="tp-sidebar-about">
                            <div class="tp-sidebar-about-thumb mb-25">
                               <a href="#">
                                  <img src="assets/img/users/user-11.jpg" alt="">
                               </a>
                            </div>
                            <div class="tp-sidebar-about-content">
                               <h3 class="tp-sidebar-about-title">
                                  <a href="#">Ravi O'Leigh</a>
                               </h3>
                               <span class="tp-sidebar-about-designation">Photographer & Blogger</span>
                               <p>Lorem ligula eget dolor. Aenean massa. Cum sociis que penatibus magnis dis parturient</p>
                               <div class="tp-sidebar-about-signature">
                                  <img src="assets/img/blog/signature/signature.png" alt="">
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <!-- about end -->

                   <!-- latest post start -->
                   <div class="tp-sidebar-widget mb-35">
                      <h3 class="tp-sidebar-widget-title">Latest Posts</h3>
                      <div class="tp-sidebar-widget-content">
                         <div class="tp-sidebar-blog-item-wrapper">
                            @foreach ($recentpost as $recent)
                                <div class="tp-sidebar-blog-item d-flex align-items-center">
                                <div class="tp-sidebar-blog-thumb">
                                    <a href="{{ route('blog-details', $recent->slug)  }}">
                                        <img src="{{ asset('storage/post/'.$recent->image) }}" width="50" height="50" alt="{{  $recent->title }}">
                                    </a>
                                </div>
                                <div class="tp-sidebar-blog-content">
                                    <div class="tp-sidebar-blog-meta">
                                        <span>{{  $recent->created_at->diffforHumans() }}</span>
                                    </div>
                                    <h3 class="tp-sidebar-blog-title">
                                        <a href="{{ route('blog-details', $recent->slug)  }}">{{ \Str::limit($recent->title,20) }}</a>
                                    </h3>
                                </div>
                                </div>
                            @endforeach

                         </div>
                      </div>
                   </div>
                   <!-- latest post end -->

                   <!-- categories start -->
                   <div class="tp-sidebar-widget widget_categories mb-35">
                      <h3 class="tp-sidebar-widget-title">Categories</h3>
                      <div class="tp-sidebar-widget-content">
                        @foreach ($category as $categories)
                            <ul>
                                <li><a href="">{{ $categories->name }} <span>({{ $categories->blogs->count() ?? 0  }})</span></a></li>
                            </ul>
                        @endforeach
                      </div>
                   </div>
                   <!-- categories end -->

                   <!-- tag cloud start -->
                   <div class="tp-sidebar-widget mb-35">
                      <h3 class="tp-sidebar-widget-title">Popular Tags</h3>
                      @foreach ($blogtag as $tags)
                        <div class="tp-sidebar-widget-content tagcloud">
                            <a href="#">{{  $tags->name  }}</a>
                        </div>
                      @endforeach
                   </div>
                   <!-- tag cloud end -->

                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- blog grid area end -->

 </main>

@endsection
