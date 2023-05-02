@extends('admin.layout.master')
@section('content')
 <!-- Page-Title -->
 <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                    <li class="breadcrumb-item active">Editor</li>
                </ol>
            </div>
            <h4 class="page-title">Form Editor</h4>
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
                <form method="post" action="{{ route('ean.update',$ean->id) }}" >
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Art.</label>
                                <input class="form-control" type="text" name="art" value="{{ $ean->art }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Title:</label>
                                <input class="form-control" type="text" name="title" value="{{ $ean->title }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    <option value="">-</option>
                                    @foreach ($categories as $category )
                                    <option value="{{ $category->id }}" @if($category->id==$ean->category_id) selected @endif>
                                    @if($category->parent_id!==null)
                                    {{  $category->parent}} / 
                                    @endif
                                    {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>VPE:</label>
                                <input class="form-control" type="text" name="VPE" value="{{ $ean->VPE }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>EAN Code Product:</label>
                                <input class="form-control" type="text" name="code_product" value="{{ $ean->code_product }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>EAN Code VPE:</label>
                                <input class="form-control" type="text" name="code_VPE" value="{{ $ean->code_VPE }}">
                            </div>
                        </div>
                    </div>
                   
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
