@extends('layouts.app')

@section('content')
    @include('partials.header')
    @include('partials.nav')
    <!-- Main -->








    <div id="main">

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">All Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Followers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Following</a>
            </li>
        </ul>
        <section class="posts">
            <article>


@include('partials.user_profile_card')

            </article>

            <article>


                @include('partials.user_profile_card')

            </article>

            <article>
                <header>
                    <span class="date">April 22, 2017</span>
                    <h2><a href="#">Primis eget<br />
                            imperdiet lorem</a></h2>
                </header>
                <a href="#" class="image fit"><img src="{{asset('images/pic03.jpg')}}" alt="" /></a>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </article>
            <article>
                <header>
                    <span class="date">April 18, 2017</span>
                    <h2><a href="#">Ante mattis<br />
                            interdum dolor</a></h2>
                </header>
                <a href="#" class="image fit"><img src="{{asset('images/pic04.jpg')}}" alt="" /></a>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </article>
            <article>
                <header>
                    <span class="date">April 14, 2017</span>
                    <h2><a href="#">Tempus sed<br />
                            nulla imperdiet</a></h2>
                </header>
                <a href="#" class="image fit"><img src="{{asset('images/pic05.jpg')}}" alt="" /></a>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </article>
            <article>
                <header>
                    <span class="date">April 11, 2017</span>
                    <h2><a href="#">Odio magna<br />
                            sed consectetur</a></h2>
                </header>
                <a href="#" class="image fit"><img src="{{asset('images/pic06.jpg')}}" alt="" /></a>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </article>
            <article>
                <header>
                    <span class="date">April 7, 2017</span>
                    <h2><a href="#">Augue lorem<br />
                            primis vestibulum</a></h2>
                </header>
                <a href="#" class="image fit"><img src="{{asset('images/pic07.jpg')}}" alt="" /></a>
                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                <ul class="actions special">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </article>
        </section>

        <!-- Footer -->
        <footer>
            <div class="pagination">
                <!--<a href="#" class="previous">Prev</a>-->
                <a href="#" class="page active">1</a>
                <a href="#" class="page">2</a>
                <a href="#" class="page">3</a>
                <span class="extra">&hellip;</span>
                <a href="#" class="page">8</a>
                <a href="#" class="page">9</a>
                <a href="#" class="page">10</a>
                <a href="#" class="next">Next</a>
            </div>
        </footer>

    </div>
@endsection