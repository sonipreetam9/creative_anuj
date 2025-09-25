@extends('admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Portfolio Post</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Portfolio Post</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Add Portfolio Post</h4>
                        </div>

                        <form action="{{ route('admin.portfolio.post') }}" method="POST" enctype="multipart/form-data">
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

                                        {{-- Email --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="file" class="form-control" id="image" name="image"
                                                    required>

                                                <label for="email">Image</label>
                                                {{-- <small class="form-text text-muted">Enter branch email (will be used for
                                                    login).</small> --}}
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>


                                        
                                        {{-- Email --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="file" class="form-control" id="image" name="image"
                                                    required>

                                                <label for="email">Image</label>
                                                {{-- <small class="form-text text-muted">Enter branch email (will be used for
                                                    login).</small> --}}
                                                @error('email')
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
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
