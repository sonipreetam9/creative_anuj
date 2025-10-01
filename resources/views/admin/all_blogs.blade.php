@extends('admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">All Blogs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">All Blogs</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                @if (Session::has('success'))
                    <div style="padding: 10px 15px 0px 15px;">
                        <p class="alert alert-success">{{ Session::get('success') }}!</p>
                    </div>
                @endif
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary">
                            <h5 class="card-title mb-0 text-white">All Blogs List</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable"
                                    class="table table-bordered table-hover table-striped align-middle w-100">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($blogs as $data)
                                            @php
                                                $i++;
                                            @endphp
                                            <tr>
                                                <td>{{ $i }}</td>

                                                <td>
                                                    @if ($data->image)
                                                        <img src="{{ asset('uploads/' . $data->image) }}" alt="image"
                                                            width="80">
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $data->title }}</td>
                                                <td>

                                                    <a class="btn btn-warning btn-sm"
                                                        href="{{ route('admin.blog.edit.page', $data->id) }}">Edit</a>
                                                    <a href="{{ route('admin.blog.delete', $data->id) }}"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this blog?')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end table -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
