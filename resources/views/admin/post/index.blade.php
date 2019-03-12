@extends('layouts.backend.app')

@push('css')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">add</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Posts</h4>
                    <div class="toolbar">
                        <button style="float: right" onclick="window.location.href='{{ route('admin.post.create') }}'" type="button" class="btn btn-primary btn-round btn-just-icon">
                            <i class="material-icons">add</i>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Created At</th>
                                {{--<th>Updated At</th>--}}
                                <th class="text-right ">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $key=>$post)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ str_limit($post->name,'10') }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>
                                        @if($post->status == 'PUBLISHED')
                                            <span class="badge bg-blue">Published</span>
                                        @else
                                            <span class="badge bg-pink">Pending</span>
                                        @endif
                                    </td>
                                    <td>{{ $post->created_at }}</td>
                                    {{--<td>{{ $post->updated_at }}</td>--}}
                                    <td class="text-right">
                                        <a href="{{ route('admin.post.show',$post->id) }}" class="btn btn-info waves-effect">
                                            <i class="material-icons">visibility</i>
                                        </a>
                                        <a href="{{ route('admin.post.edit',$post->id) }}" class="btn btn-info waves-effect">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button class="btn btn-danger waves-effect" type="button" onclick='deletePost({{ $post->id }})'>
                                            <i class="material-icons">delete</i>
                                        </button>
                                        <form id="delete-form-{{ $post->id }}" action="{{ route('admin.post.destroy',$post->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')n.
                                        </form>
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

@push('js')
    <script type="text/javascript">
        function deletePost(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                } else {
                    document.getElementById('delete-form-'+id).submit();
                }
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                }

            });


            var table = $('#datatables').DataTable();

            // Edit record
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');

                var data = table.row($tr).data();
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            });

            // Delete a record
            table.on('click', '.remove', function(e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });

            //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });

            $('.card .material-datatables label').addClass('form-group');
        });
    </script>
@endpush
