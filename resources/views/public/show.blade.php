@extends('layouts.app')

@section('title', $service->titre . ' - portfolio')

@section('content')

    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg" style="height: 90px"
        data-setbg="{{ asset('assets/img/blog/details/details-hero.jpg') }}">

    </section>
    <!-- Blog Details Hero Section End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="col-12">
                        <img src="{{ asset('storage/' . $service->image) }}" alt="">
                    </div>
                    <div class="blog-details-text">
                        <div class="blog-details-desc">
                            <p>
                                {!! $service->description !!}
                            </p>
                        </div>

                        <div class="comment-option">
                            <h5 class="co-title">Commentaires <span>({{ $comments->count() }})</span></h5>

                            @foreach ($comments as $comment)
                                <div class="blog-details-quote">
                                    <div class="quote-icon">
                                        <img src="{{ asset('assets/img/blog/details/quote-left.png') }}" alt="">
                                    </div>
                                    <h5>{!! $comment->comment !!}</h5>
                                    <div class="meta">{{ $comment->created_at->toString() }}</div>
                                    <span>{{ $comment->name }}</span>
                                </div>
                            @endforeach

                            <div class="pagination">
                                {{ $comments->links() }}
                            </div>

                            @if ($comments->count() === 0)
                                <div class="blog-details-quote">
                                    <h5>Aucun commentaire</h5>
                                </div>
                            @endif

                        </div>

                        {{-- <div class="py-3">
                            <!-- <h5 class="co-title">Commentaires</h5  > -->
                        </div>
                        <div class="blog-details-author">
                            <div class="ba-pic">
                                <img src="{{ asset('assets/img/blog/details/blog-profile.jpg') }}" alt="">
                            </div>
                            <div class="ba-text">
                                <h5>Auteur</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation.</p>
                                <div class="bp-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="leave-comment">
                                    <h5>Laissez un commentaire</h5>
                                    <form action="{{ route('comment.store') }}" method="post">
                                        @csrf
                                        <input type="text" placeholder="Nom" name="name">
                                        <input type="text" placeholder="Email" name="email">
                                        <input type="hidden" value="{{ $service->id }}" name="service" id="website">
                                        <textarea placeholder="Comment" name="message" ></textarea>
                                        <button type="submit">Soumettre</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

@endsection
