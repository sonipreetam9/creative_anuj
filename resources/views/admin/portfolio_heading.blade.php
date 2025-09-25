@extends('admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Portfolio Heading</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Portfolio</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Add Portfolio Heading</h4>
                        </div>

                        <form action="{{ route('admin.portfolio.heading.create') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            @if (Session::has('success'))
                                <div style="padding: 10px 15px 0px 15px;">
                                    <p class="alert alert-success">{{ Session::get('success') }}!</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        {{-- Title --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="title" name="title"
                                                    placeholder="Enter title" value="{{ old('title') }}" required>
                                                <label for="title">Title</label>
                                                <small class="form-text text-muted">Enter the Title</small>
                                                @error('title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Submit Button --}}
                                        <div class="col-md-12 mt-3 text-center">
                                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">List</h4>
                        </div><!-- end card header -->


                        <div class="card-body p-4">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                    <thead class="table-light text-center text-muted">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                            <style>
                                                th {
                                                    font-weight: 900;
                                                    color: black !important;
                                                }

                                                .price-tag {
                                                    font-size: 14px;
                                                }
                                            </style>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle text-center">
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($portfolio as $data)
                                            @php
                                                $i++;
                                            @endphp
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->title }}</td>

                                                <td>
                                                    <a class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#varyingcontentModal{{ $data->id }}" data-bs-whatever="@mdo"
                                                        href="{{ route('admin.portfolio.heading.update', $data->id) }}">Edit</a>
                                                    <a href="{{ route('admin.portfolio.heading.delete', $data->id) }}"
                                                        class="btn btn-danger btn-sm delete-btn"
                                                        onclick="return confirm('Are you sure you want to Delete')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="varyingcontentModal{{ $data->id }}" tabindex="-1"
                                                aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="varyingcontentModalLabel">Update
                                                                Portfolio Heading</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form method="post"
                                                            action="{{ route('admin.portfolio.heading.update', $data->id) }}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Title:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name" name="title"
                                                                        value="{{ $data->title }}">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="submit">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table><!-- end table -->
                            </div>
                        </div>

                    </div> <!-- .card-->
                </div> <!-- .col-->
            </div>
        </div>
    </div>
    <!-- Varying Modal Content -->

    <!-- Varying modal content -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
