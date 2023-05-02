@extends('admin.layout.master')
@section('content')
 <!-- Page-Title -->
 <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('recipe.index') }}">Recipe</a></li>
                    <li class="breadcrumb-item active">create</li>
                </ol>
            </div>
            <h4 class="page-title">Create {{ $title }}</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('recipe.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="text" name="date">
                            </div>
                        </div>
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="elm1" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <!--end form-group-->
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-gradient-danger waves-effect m-l-5">
                            Cancel
                        </button>
                    </div>
                    <!--end form-group-->
                </form>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('script')
 <!--Wysiwig js-->
 <script src="{{ asset('backend/assets/plugins/tinymce/tinymce.min.js')}}"></script>
 <script src="{{ asset('backend/assets/pages/jquery.form-editor.init.js')}}"></script>
@endsection
