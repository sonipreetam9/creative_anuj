@extends('admin.layouts.header')
@section('super')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add About us</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">About us</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Add About us</h4>
                        </div>

                        <form action="{{ route('admin.about.post') }}" method="POST" enctype="multipart/form-data">
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

                                        {{-- Image 1 --}}
                                        <div class="col-md-6">
                                            <div class="form-control">
                                                <input type="file" class="form-control" id="image" name="image"
                                                    required>
                                                <label for="title">Image 1</label>
                                                @error('image')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Image 2 --}}
                                        <div class="col-md-6">
                                            <div class="form-control">
                                                <input type="file" class="form-control" id="image" name="image2"
                                                    required>
                                                <label for="title">Image 2</label>
                                                @error('image')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Short Description --}}
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="short_description" name="short_description" placeholder="Enter short description"
                                                    required>{{ old('short_description') }}</textarea>
                                                <label for="short_description">Short Description</label>
                                                {{-- <small class="form-text text-muted">Brief description of the branch.</small> --}}
                                                @error('short_description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Long Description --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="long_description" class="form-label">Long Description</label>
                                                <textarea class="form-control summernote" id="long_description" name="long_description" required>{{ old('long_description') }}</textarea>

                                                @error('long_description')
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
                                            <th>Image 1</th>
                                            <th>Image 2</th>
                                            <th>Title</th>
                                            <th>Short Description</th>
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
                                        @foreach ($about as $data)
                                            @php
                                                $i++;
                                            @endphp
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>
                                                    @if ($data->image)
                                                        <img src="{{ asset('uploads/' . $data->image) }}" alt="Profile"
                                                            width="60" height="60">
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($data->image)
                                                        <img src="{{ asset('uploads/' . $data->image2) }}" alt="Profile"
                                                            width="60" height="60">
                                                    @else
                                                        <span class="text-muted">No Image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $data->title }}</td>
                                                <td>{{ $data->short_description }}</td>

                                                <td>
                                                    <a class="btn btn-warning btn-sm"
                                                        href="{{ route('admin.about.edit', $data->id) }}">Edit</a>
                                                    <a href="{{ route('admin.about.delete', $data->id) }}"
                                                        class="btn btn-danger btn-sm delete-btn"
                                                        onclick="return confirm('Are you sure you want to Delete')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Allow only numbers for application fees
            $('#application_fee_gen, #application_fee_oth').on('input', function() {
                this.value = this.value.replace(/\D/g, '');
            });

            // PDF file only validation
            $('#file').on('change', function() {
                var file = this.files[0];
                if (file && file.type !== 'application/pdf') {
                    alert("Only PDF files are allowed.");
                    $(this).val('');
                }
            });

            // Validate post date is before last date
            $('#post_date, #last_date').on('change', function() {
                let postDate = new Date($('#post_date').val());
                let lastDate = new Date($('#last_date').val());

                if (postDate >= lastDate) {
                    alert("Post Date cannot be later than or equal to Last Date.");
                    $('#last_date').val('');
                }
            });

            // Phone number: exactly 10 digits
            $('#phone').on('input', function() {
                this.value = this.value.replace(/\D/g, '').substring(0, 10);
            });

            // City: only letters and spaces
            $('#city').on('input', function() {
                this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
            });

            // Password: only alphanumeric (letters + numbers), no special characters
            $('#password, #password_confirmation').on('input', function() {
                this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
            });

            // Password match validation on submit
            $('form').on('submit', function(e) {
                let pass = $('#password').val();
                let confirmPass = $('#password_confirmation').val();

                if (pass !== confirmPass) {
                    alert("Password and Confirm Password do not match.");
                    e.preventDefault();
                }
            });
        });
    </script>
@endsection
