@extends('layouts.app')

@section('title', $service->titre . ' - Ser-Rapide')

@section('content')

<div class="site-section-cover overlay inner-page bg-light border"
    style="background-image: url({{ $service->image ? asset('storage/'. $service->image ) : 'images/cargo_sea_big.jpg' }}); height: 350px;"
    data-aos="fade">

    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-10">
                <div class="box-shadow-content">
                    <div class="block-heading-1">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">{{ $service->titre }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="mt-4">
    <div class="container ">
        <div class="row ">
            <div class="col-12">
                <p>Categories:  <a href="#">{{ $service->category->name }}</a></p>
            </div>

            <div class="col-md-8 blog-content">

                {!! $service->description !!}

                <div class="pt-5">
                    <h3 class="mb-5">{{ $comments->count() }} Comments</h3>
                    <ul class="comment-list">
                        @foreach ($comments as $comment)
                            <li class="comment">
                                <div class="comment-body">
                                    <h3>{{ $comment->name }}</h3>
                                    <div class="meta">{{ $comment->created_at->toString() }}</div>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                    {{-- <p><a href="#" class="reply">Reply</a></p> --}}
                                </div>
                            </li>
                            <li class="comment">

                                <!-- Pagination links -->
                                <div class="pagination">
                                    {{ $comments->links() }}
                                </div>

                                <style>
                                    svg {
                                        width: 20px;
                                        height: 20px;
                                    }
                                    .inline-flex. {
                                        display: flex;
                                        /* flex-direction: row-reverse; */
                                    }
                                </style>
                                <!-- END comment-list -->
                            </li>
                        @endforeach
                    </ul>


                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Ajouter un commentaire</h3>

                        <form action="{{ route('comment.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <input type="hidden" value="{{ $service->id }}" name="service" id="website">

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" maxlength="200" style="position: relative;" cols="30" rows="10" class="form-control"></textarea>
                                <small class="text-info" style="position: relative; bottom: 30px; left: 10px">200 caractères maximum</small>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Soumettre" class="btn btn-primary btn-md text-white">
                            </div>

                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-4 sidebar">
                <div class="sidebar-box">
                    <div class="categories">
                        <h3>Autres Services</h3>
                        @foreach ($services as $otherService)
                            <li><a href="{{ route('services.show', $otherService->id) }}">{{ $otherService->titre }}</a></li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
