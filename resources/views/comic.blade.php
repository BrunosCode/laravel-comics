@extends("layouts.base")

@section("title", "Page Title")

@section("main")
<main class="c-main">
    @include("partials.Hero")
    <section>
        <img class="c-comicPage__img" src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
    </section>

    <section>
        <h1 class="c-comicPage__title">{{ $comic["title"] }}</h1>
        <p class="c-comicPage__description">{{ $comic["description"] }}</p>
    </section>

    <section class="l-row">
        <div class="l-col l-col--half">
            <h3>Talent</h3>
            <div class="l-row">
                <div class="l-col l-col--1third">
                    <h5>Art by:</h5>
                </div>
                <div class="l-col l-col--2third">
                    <p>
                        @foreach ($comic["artists"] as $artist)
                            <span>{{ $artist }}</span>
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="l-row">
                <div class="l-col l-col--1third">
                    <h5>Written by:</h5>
                </div>
                <div class="l-col l-col--2third">
                    <p>
                        @foreach ($comic["writers"] as $writer)
                            <span>{{ $writer }}</span>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
        <div class="l-col l-col--half">
            <h3>TSpecs</h3>
            <div class="l-row">
                <div class="l-col l-col--1third">
                    <h5>Series:</h5>
                </div>
                <div class="l-col l-col--2third">
                    <p>{{ $comic["series"] }}</p>
                </div>
            </div>
            <div class="l-row">
                <div class="l-col l-col--1third">
                    <h5>U.S. Price:</h5>
                </div>
                <div class="l-col l-col--2third">
                    <p>{{ $comic["price"] }}</p>
                </div>
            </div>
            <div class="l-row">
                <div class="l-col l-col--1third">
                    <h5>On Sale Date:</h5>
                </div>
                <div class="l-col l-col--2third">
                    <p>{{ $comic["sale_date"] }}</p>
                </div>
            </div>   
        </div>

    </section>

    @dump($comic)
</main>
@endsection
        