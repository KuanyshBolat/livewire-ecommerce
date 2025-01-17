@extends('layouts.main')
@section('title', __('shop.seo.title'))
@section('description', __('shop.seo.description'))
@section('extraCss')
    <!-- Price nouislider-filter cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.css"
          integrity="sha512-MKxcSu/LDtbIYHBNAWUQwfB3iVoG9xeMCm32QV5hZ/9lFaQZJVaXfz9aFa0IZExWzCpm7OWvp9zq9gVip/nLMg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection
@section('content')

    <div class="page-header mt-30 mb-50">
        <div class="container">
            <div class="archive-header" style="background-image: url('/uploads/about/slider_shop.png') !important; padding: 200px 80px !important">
                <div class="">
                    <div class="col-xl-3">
                        <h2 class="mb-15" id="shopTitle">IITU Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:search>
@endsection
