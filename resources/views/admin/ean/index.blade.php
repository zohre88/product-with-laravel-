@extends('admin.layout.master')

@section('css')
 <!-- DataTables -->
 <link href="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
 <!-- Responsive datatable examples -->
 <link href="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

 <!-- Page-Title -->
 <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <a href="{{ route('ean.create') }}"><button class="btn  btn-primary mb-3" id="submit_data">New</button></a>
            </div>
            <h4 class="page-title">Datatable</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div>
@if($msg= Session::get('success'))

<div class="alert-text">
    <strong>Well done!</strong> {{ $msg }} 
</div>

@endif
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Art.</th>
                            <th>Title</th>
                            <th>VPE</th>
                            <th>EAN code product/VPE</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eans as $ean)
                        <tr>
                            <td>{{ $ean->art }}</td>
                            <td>{{ $ean->title }}</td>
                            <td>{{ $ean->VPE }}</td>
                            <td>{{ $ean->code_product .'/'.$ean->code_VPE }}</td>
                            <td>{{ $ean->category_id }}</td>
                            <td>    
                                <form action="{{ route('ean.destroy',$ean->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('ean.edit',$ean->id) }}">
                                        <button type="button" class="btn btn-sm btn-soft-success btn-circle mr-2"><i class="dripicons-document-edit"></i></button>
                                    </a>
                                        <button type="submit" class="btn btn-sm btn-soft-danger btn-circle"><i class="dripicons-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('script')
<!-- Required datatable js -->
<script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{ asset('backend/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{ asset('backend/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backend/assets/pages/jquery.datatable.init.js')}}"></script>
@endsection