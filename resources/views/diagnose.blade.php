@extends('layouts.app')

@section('content')
  <div id="content" class="site-content">
    {{-- BANNER --}}
    @include('fragment.banner', [ 'f_image_code' => 'banner_contact_us', 'f_title'=>'Liên hệ', 'f_children_title'=>'Liên hệ' ])
    {{-- BANNER END --}}
    {{-- CONTENT --}}
    <div class="container">
      <div id="primary" class="content-area">
        Đây là trang tư vấn
      </div>
    </div>
    {{-- CONTENT END --}}
  </div>
@endsection
