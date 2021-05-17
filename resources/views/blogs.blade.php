@extends('layouts.app')
@section('content')
  <div id="content" class="site-content">
    {{-- BANNER --}}
    @include('fragment.banner', ['f_image_code' => 'banner_blogs', 'f_title'=>'Blogs', 'f_children_title'=>'Blogs'])
    {{-- BANNER END --}}
    {{-- CONTENT --}}
    <div class="container">
      <div id="primary" class="content-area">
        <div class="row">
          <main id="main" class="site-main col-sm-12 col-xs-12">
            <article id="post-884" class="post-884 page type-page status-publish hentry">
              <div class="vc_row wpb_row vc_row-fluid ftc-row-wide">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="wpb_wrapper">
                    <div
                      class="ftc-sb-blogs ftc-masonry blog-page-2 ftc-shortcode"
                      data-atts="{&quot;slider&quot;:0,&quot;masonry&quot;:1,&quot;categories&quot;:&quot;15,20,10,19,1,22&quot;,&quot;limit&quot;:&quot;4&quot;,&quot;orderby&quot;:&quot;none&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;columns&quot;:2,&quot;title&quot;:&quot;1&quot;,&quot;thumbnail&quot;:&quot;1&quot;,&quot;author&quot;:&quot;0&quot;,&quot;date&quot;:&quot;1&quot;,&quot;comment&quot;:&quot;1&quot;,&quot;excerpt&quot;:&quot;1&quot;,&quot;readmore&quot;:&quot;1&quot;,&quot;view&quot;:&quot;1&quot;,&quot;excerpt_words&quot;:&quot;17&quot;,&quot;nav&quot;:&quot;1&quot;,&quot;auto_play&quot;:&quot;0&quot;,&quot;margin&quot;:30,&quot;load_more&quot;:&quot;1&quot;,&quot;desksmall_items&quot;:&quot;2&quot;,&quot;tablet_items&quot;:&quot;2&quot;,&quot;tabletmini_items&quot;:&quot;2&quot;,&quot;mobile_items&quot;:&quot;2&quot;,&quot;mobilesmall_items&quot;:&quot;1&quot;,&quot;nonce&quot;:&quot;d3038713b3&quot;}"
                      data-nonce="d3038713b3"
                    >
                      <div class="meta-slider">
                        <div class="blogs">
                          @foreach($articles as $item)
                            <article class="post-wrapper col-sm-6 first-child">
                              <header class="post-img">
                                <a class="blog-image" href="{{url('/blog/detail',$item->slug)}}">
                                  <img
                                    loading="lazy" width="870" height="870"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20870%20870'%3E%3C/svg%3E"
                                    class="attachment-ftc_blog_shortcode_thumb size-ftc_blog_shortcode_thumb wp-post-image wp-post-image"
                                    alt=""
                                    {{--data-lazy-srcset="https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3.jpg 870w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-150x150.jpg 150w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-270x270.jpg 270w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-768x768.jpg 768w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-300x300.jpg 300w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-30x30.jpg 30w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-100x100.jpg 100w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-548x548.jpg 548w"--}}
                                    data-lazy-sizes="(max-width: 870px) 100vw, 870px"
                                    data-lazy-src="{{URL::asset('/images/medium/'.$item->avatar)}}"
                                  />
                                  <noscript>
                                    <img
                                      width="870" height="870"
                                      src="{{URL::asset('/images/medium/'.$item->avatar)}}" alt="{{$item->title}}"
                                      class="attachment-ftc_blog_shortcode_thumb size-ftc_blog_shortcode_thumb wp-post-image wp-post-image"
                                      {{--srcset="https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3.jpg 870w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-150x150.jpg 150w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-270x270.jpg 270w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-768x768.jpg 768w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-300x300.jpg 300w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-30x30.jpg 30w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-100x100.jpg 100w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-548x548.jpg 548w"--}}
                                      sizes="(max-width: 870px) 100vw, 870px"
                                    />
                                  </noscript>
                                </a>
                              </header>
                              <div class="post-info">
                                <header class="entry-header">
                                  <div class="date-time date-time-meta">
                                    <i class="fa fa-clock-o"></i> {{$item->created_at}}
                                  </div>
                                  <h3 class="product_title blog-title entry-title">
                                    <a href="{{url('/blog/detail',$item->slug)}}">{{$item->title}}</a>
                                  </h3>
                                </header>
                                <div class="clear"></div>
                                <div class="entry-content">
                                  <p>{{$item->content_review}}</p>
                                </div>
                                <a href="{{url('/blog/detail',$item->slug)}}" class="button-readmore">Xem chi tiết</a>
                              </div>
                            </article>
                          @endforeach
                        </div>
                        <div class="load-more-wrapper">
                          <ul class="pagination" style="justify-content: center">
                            {{$articles->links("vendor.pagination.default")}}
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </main>
        </div>
      </div>
    </div>
    {{-- CONTENT END --}}
  </div>
@endsection
