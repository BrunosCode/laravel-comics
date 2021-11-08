@extends("layouts.index")

@section("title", "Page Title")

@section("main")
<main class="c-main">
    @include('partials.Hero')
    @include('partials.Collection')
    @include('partials.ShopBanner')
</main>
@endsection
        