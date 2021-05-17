<div
  data-bg="url('https://aighospitals.com/wp-content/uploads/2018/08/Banner-Doctors.png')"
  class="ftc-breadcrumb rocket-lazyload" style=""
>
  <div class="container">
    <div class="ftc-breadcrumb-title">
      <h1 class="product_title page-title entry-title ">{{$f_title}}</h1>
      <div class="ftc-breadcrumbs-content">
        <a href="{{url('home')}}">Trang chủ</a>
        @isset($f_parent_url)
          <span>/</span>
          <a href="{{url($f_parent_url)}}">{{$f_parent_title}}</a>
        @endisset
        <span>/</span>{{$f_children_title}}
      </div>
    </div>
  </div>
</div>
