@extends('layouts.backend.app')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <a href="{{ route('admin.post.index') }}" class="btn btn-danger waves-effect">BACK</a>
        <br>
        <br>
        <div class="row ">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header card-header-text" data-background-color="red">
                        <h4 class="card-title">
                            {{ $post->title }}
                            Post de <strong> <a href="">{{ $post->user->name }}</a></strong> el {{ $post->created_at->toFormattedDateString() }}
                        </h4>
                    </div>
                    <div class="card-content">
                        {!! $post->body !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-header card-header-text" data-background-color="blue">
                        <h4 class="card-title">
                            Categorias
                        </h4>
                    </div>
                    <div class="card-content">
                            <h2 class="card-title ">{{ $post->category->name }}</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-text" data-background-color="purple">
                        <h4 class="card-title">
                            Imagen Principal
                        </h4>
                    </div>
                    <div class="card-content">
                        <img class="img-responsive thumbnail" src="{{ asset('post/'.$post->file) }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
