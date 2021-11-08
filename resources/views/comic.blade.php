@extends("layouts.base")

@section("title", "Page Title")

@section("main")
<main class="c-main">
    @include("partials.Hero")
    @dump($comic);
</main>
@endsection
        