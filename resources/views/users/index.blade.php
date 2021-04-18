@extends('layouts.app')
@section('title', 'User List :-')

@push('css')
<link rel="stylesheet" href="{{ asset('dataTable/css/bootstrap.min.css') }}" />
<link href="{{ asset('dataTable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('dataTable/css/responsive.bootstrap.min.css') }}" />
@endpush

@section('content')
<table id="userDataTable" class="table table-striped table-bordered dt-responsive">
	<thead>
		<th>#</th>
		<th>Name</th>
		<th>Email</th>
		<th>Created At</th>
		<th>Action</th>
	</thead>
	<tbody>
	</tbody>
</table>
@endsection

@push('js')
<script src="{{ asset('dataTable/js/jquery.js') }}"></script>  
<script src="{{ asset('dataTable/js/jquery.dataTables.min.js') }}"></script>  
<script src="{{ asset('dataTable/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
$(document).ready( function(){
    $('#userDataTable').DataTable({
    	responsive: true,
    	processing: true,
    	serverSide: true,
    	ajax:"{{ route('users.index') }}",
    	columns:[
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
});
</script>
@endpush