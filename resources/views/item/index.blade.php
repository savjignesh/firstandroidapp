@extends('layouts.blank')

@push('stylesheets')
   <!-- Datatable CSS -->
   <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
   <style type="text/css">

   </style>
@endpush

@section('main_container')
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
                    <h2>Table design <small>Custom design</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content" style="display:block;">
				<table class="table table-bordered" id="items-table" style="width:100%;">
			        <thead>
			            <tr>
			                <th>Name</th>
			                <th>Description</th>
			                <th>Created At</th>
			             
			            </tr>
			        </thead>
			    </table>
			    </div>

			</div>    
		</div>    
    </div>
   
@endsection

@push('scripts')
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
jQuery(function($) {
    $('#items-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'dt/list',
        columns: [
           
            { data: 'name', name: 'name' },
            { data: 'description', name: 'description' },
            { data: 'created_at', name: 'created_at' }
        ]
    });
});
</script>
@endpush

