@extends('layouts.backend.app')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="orange">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="card-content">
                    <p class="category">Posts Totales</p>
                    <h3 class="card-title">{{$posts->count()}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="red">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="card-content">
                    <p class="category">Vistas Totales</p>
                    <h3 class="card-title">{{$all_views}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="blue">
                    <i class="material-icons">apps</i>
                </div>
                <div class="card-content">
                    <p class="category">Total de Categorias</p>
                    <h3 class="card-title">{{$category_count}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="card card-stats">
                <div class="card-header" data-background-color="purple">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="card-content">
                    <p class="category">Admins Registrados</p>
                    <h3 class="card-title">{{Auth::user()->count()}}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="green">
                    <i class="material-icons">notifications</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Posts Populares</h4>
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Views</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($popular_posts as $key=>$post)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ str_limit($post->name,'20') }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ $post->view_count }}</td>
                                    <td>
                                        @if($post->status == 'PUBLISHED')
                                            Published
                                        @else
                                            Pending
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary waves-effect" target="_blank" href="#">View</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection