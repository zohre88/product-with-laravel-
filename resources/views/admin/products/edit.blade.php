@extends('admin.layout.master')
@section('content')
 <!-- Page-Title -->
 <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">products</a></li>
                    <li class="breadcrumb-item active">create</li>
                </ol>
            </div>
            <h4 class="page-title">{{ $banner }}</h4>
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
                <form method="post" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="title" value="{{ $product->title }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if($category->id==$product->category_id) selected @endif>
                                        @if($category->parent_id!==null)
                                        {{  $category->parent}} =>
                                        @endif
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="elm1" name="description">{{ $product->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="images[]" multiple>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <!--end form-group-->
                    <div class="row">  
                        @foreach ($product->galleries as $image)
                        <div class="col-lg-4">
                                <a href="">  
                                    <img src="{{ asset($image->path) }}" alt="" class="img-fluid">
                                </a> 
                                <div>
                                    <div class="radio radio-primary">

                                        <a href="{{ route('product.deleteImage',$image->id) }}">
                                            <span class="badge badge-soft-danger p-2 font-12 mb-2"><i class="far fa-trash-alt"></i></span>
                                        </a>&nbsp;
                                        <input type="radio" name="main" id="main{{ $image->id }}" value="{{ $image->path }}" @if ($image->main==1)
                                            checked
                                            
                                        @endif>
                                        <label for="main{{ $image->id }}">
                                            Master
                                        </label>
                                    </div>
                                   
                                </div>
                        </div><!--end col-->
                        @endforeach                   
                    </div><!--end row-->
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
