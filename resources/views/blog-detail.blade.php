@extends('layouts.app')
@section('content')
  <div id="content" class="site-content">
    {{-- BANNER --}}
    @include('fragment.banner', [
    'f_image_code' => 'banner_blog_detail',
    'f_title'=> $article ? $article->title : '',
    'f_parent_url' => '/blog',
    'f_parent_title' => 'Tin tức',
    'f_children_title'=> $article ? $article->title : ''
    ])
    {{-- BANNER END --}}
    {{-- CONTENT --}}
    <div class="container">
      <div id="primary" class="content-area">
        <div class="row">
          {{-- MAIN CONTENT --}}
          <main id="main" class="site-main col-sm-9 col-xs-12">
            <article
              class="post-item hentry  post-312 post type-post status-publish format-standard has-post-thumbnail category-mens-clothing category-uncategorized tag-sticky"
            >
              @if (!is_null($article))
                <header class="post-img">
                  <div class="blog-image  ">
                    <img
                      loading="lazy" width="870" height="870"
                      src="{{URL::asset('/images/extra_large/'.$article->avatar)}}" alt="{{$article->title}}"
                      class="thumbnail-blog wp-post-image lazyloaded"
                      {{--data-lazy-srcset="https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3.jpg 870w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-150x150.jpg 150w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-270x270.jpg 270w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-768x768.jpg 768w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-300x300.jpg 300w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-30x30.jpg 30w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-100x100.jpg 100w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-548x548.jpg 548w"--}}
                      data-lazy-sizes="(max-width: 870px) 100vw, 870px"
                      data-lazy-src="{{URL::asset('/images/extra_large/'.$article->avatar)}}"
                      sizes="(max-width: 870px) 100vw, 870px"
                      {{--srcset="https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3.jpg 870w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-150x150.jpg 150w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-270x270.jpg 270w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-768x768.jpg 768w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-300x300.jpg 300w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-30x30.jpg 30w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-100x100.jpg 100w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-548x548.jpg 548w"--}}
                      data-was-processed="true"
                    >
                    <noscript>
                      <img
                        width="870" height="870"
                        class="thumbnail-blog wp-post-image wp-post-image"
                        src="{{URL::asset('/images/extra_large/'.$article->avatar)}}" alt="{{$article->title}}"
                        {{--srcset="https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3.jpg 870w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-150x150.jpg 150w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-270x270.jpg 270w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-768x768.jpg 768w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-300x300.jpg 300w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-30x30.jpg 30w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-100x100.jpg 100w, https://gosport.vn/wp-content/uploads/2017/11/FILEminimizer-3-548x548.jpg 548w"--}}
                        sizes="(max-width: 870px) 100vw, 870px"
                      />
                    </noscript>
                  </div>
                </header>
                <div class="post-info">
                  <div class="entry-info">
                    <div class="info-category">
                      <h3 class="product_title entry-title">{{$article->title}}</h3>
                      <div class="right-info">
                        <div class="date-time date-time-meta">
                          <i class="fa fa-calendar"></i> {{$article->created_at}}
                        </div>
                      </div>
                    </div>
                    <div class="entry-summary">
                      <div class="full-content">{!! $article->content !!}</div>
                    </div>
                  </div>
                </div>
              @else
                <h3>Nội dung yêu cầu không được tìm thấy !</h3>
              @endif
            </article>
            <nav class="navigation post-navigation" role="navigation">
              <h2 class="screen-reader-text">Post navigation</h2>
              <div class="nav-links">
                @isset($previous_article)
                  <div class="nav-previous">
                    <a href="{{url('/blog/detail',$previous_article->slug)}}" rel="prev">
                      <span class="screen-reader-text">Previous Post</span>
                      <span aria-hidden="true" class="nav-subtitle">Previous</span>
                      <span class="nav-title"><span class="nav-title-icon-wrapper">
                        <svg class="icon icon-arrow-left" aria-hidden="true" role="img">
                          <use href="#icon-arrow-left" xlink:href="#icon-arrow-left"></use>
                        </svg>
                      </span>
                      {{$previous_article->title}}
                    </span>
                    </a>
                  </div>
                @endisset
                @isset($next_article)
                  <div class="nav-next">
                    <a href="{{url('/blog/detail',$next_article->slug)}}" rel="next">
                      <span class="screen-reader-text">Next Post</span>
                      <span aria-hidden="true" class="nav-subtitle">Next</span>
                      <span class="nav-title">
                      {{$next_article->title}}
                      <span class="nav-title-icon-wrapper">
                        <svg class="icon icon-arrow-right" aria-hidden="true" role="img">
                          <use href="#icon-arrow-right" xlink:href="#icon-arrow-right"></use>
                        </svg>
                      </span>
                    </span>
                    </a>
                  </div>
                @endisset
              </div>
            </nav>
          </main>
          {{-- MAIN CONTENT END --}}
          {{-- ASIDE CONTENT --}}
          <aside id="right-sidebar" class="ftc-sidebar col-sm-3 col-xs-12">
            <section id="ftc_blogs-65" class="widget-container ftc-blogs-widget">
              <div class="widget-title-wrapper">
                <a class="block-control" href="javascript:void(0)" style="display: none;"></a>
                <h3 class="widget-title product_title">Bài viết gần đây</h3>
              </div>
              <div class="ftc_blog_widget">
                <ul class="post_list_widget">
                  @foreach($recent_articles as $item)
                    <li>
                      <a class="blog-image" href="{{url('/blog/detail',$item->slug)}}">
                        <img
                          loading="lazy" width="1170" height="791"
                          src="{{URL::asset('/images/medium/'.$item->avatar)}}"
                          class="attachment-ftc_blog_shortcode_thumb size-ftc_blog_shortcode_thumb wp-post-image lazyloaded"
                          alt="{{$item->title}}"
                          {{--data-lazy-srcset="https://gosport.vn/wp-content/uploads/2019/09/4.jpg 1170w, https://gosport.vn/wp-content/uploads/2019/09/4-270x183.jpg 270w, https://gosport.vn/wp-content/uploads/2019/09/4-768x519.jpg 768w, https://gosport.vn/wp-content/uploads/2019/09/4-1024x692.jpg 1024w, https://gosport.vn/wp-content/uploads/2019/09/4-548x370.jpg 548w, https://gosport.vn/wp-content/uploads/2019/09/4-300x203.jpg 300w"--}}
                          data-lazy-sizes="(max-width: 1170px) 100vw, 1170px"
                          data-lazy-src="{{URL::asset('/images/medium/'.$item->avatar)}}"
                          sizes="(max-width: 1170px) 100vw, 1170px"
                          {{--srcset="https://gosport.vn/wp-content/uploads/2019/09/4.jpg 1170w, https://gosport.vn/wp-content/uploads/2019/09/4-270x183.jpg 270w, https://gosport.vn/wp-content/uploads/2019/09/4-768x519.jpg 768w, https://gosport.vn/wp-content/uploads/2019/09/4-1024x692.jpg 1024w, https://gosport.vn/wp-content/uploads/2019/09/4-548x370.jpg 548w, https://gosport.vn/wp-content/uploads/2019/09/4-300x203.jpg 300w"--}}
                          data-was-processed="true"
                        >
                        <noscript>
                          <img
                            width="1170" height="791"
                            src="{{URL::asset('/images/medium/'.$item->avatar)}}"
                            class="attachment-ftc_blog_shortcode_thumb size-ftc_blog_shortcode_thumb wp-post-image wp-post-image"
                            alt="{{$item->title}}"
                            {{--srcset="https://gosport.vn/wp-content/uploads/2019/09/4.jpg 1170w, https://gosport.vn/wp-content/uploads/2019/09/4-270x183.jpg 270w, https://gosport.vn/wp-content/uploads/2019/09/4-768x519.jpg 768w, https://gosport.vn/wp-content/uploads/2019/09/4-1024x692.jpg 1024w, https://gosport.vn/wp-content/uploads/2019/09/4-548x370.jpg 548w, https://gosport.vn/wp-content/uploads/2019/09/4-300x203.jpg 300w"--}}
                            sizes="(max-width: 1170px) 100vw, 1170px"
                          />
                        </noscript>
                      </a>
                      <a href="{{url('/blog/detail',$item->slug)}}" class="post-title">{{$item->title}}</a>
                      <div class="ftc-widget-post-content">
                        <div class="date-time"><i class="fa fa-calendar"></i> {{$item->created_at}}</div>
                      </div>
                    </li>
                  @endforeach
                </ul>
              </div>
            </section>
          </aside>
          {{-- ASIDE CONTENT END --}}
        </div>
      </div>
    </div>
    {{-- CONTENT --}}
  </div>
@endsection
