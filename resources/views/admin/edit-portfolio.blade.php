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

                        <form action="{{ route('admin.portfolio.edit.post', $EditPortfolio->id) }}" method="POST"
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

                                        {{-- Choose Portfolio Heading --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <select class="form-control" id="portfolio_id" name="portfolio_id"
                                                    placeholder="Enter title" disabled>
                                                    <option value="">Select</option>
                                                    @foreach ($portfolioHeading as $heading)
                                                        <option value="{{ $heading->id }}"
                                                            @if ($heading->id == $EditPortfolio->portfolio_id) {{ 'selected' }} @endif >
                                                            {{ $heading->title }} </option>
                                                    @endforeach
                                                </select>
                                                <label for="title">Portfolio Heading</label>
                                            </div>
                                        </div>

                                         {{-- Title --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="title" name="title" value="{{ $EditPortfolio->title}}">

                                                <label for="email">title</label>
                                                {{-- <small class="form-text text-muted">Enter branch email (will be used for
                                                    login).</small> --}}
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                               
                                            </div>
                                        </div>

                                         {{-- Url --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="url" name="url" value="{{ $EditPortfolio->url}}">

                                                <label for="email">URL</label>
                                                {{-- <small class="form-text text-muted">Enter branch email (will be used for
                                                    login).</small> --}}
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                               
                                            </div>
                                        </div>


                                        {{-- Image --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="file" class="form-control" id="image" name="image">

                                                <label for="email">Image</label>
                                                {{-- <small class="form-text text-muted">Enter branch email (will be used for
                                                    login).</small> --}}
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <img src="{{ asset('uploads/' . $EditPortfolio->image) }}" alt="image"
                                                    height="100">
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
