@extends('layouts.admin')

@section('content')
<!-- <div class="page-header">
    <div class="page-header-image" data-parallax="true" style="background-image: url('SystemImages/header.jpg') ;"></div>
</div> --> 
<div class="container">

	<div class="space-100"></div>
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="typhography-line" style="text-align: center">
				<h1>Employees</h1>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="row">
			<div class="col-lg-12">
				<button class="btn btn-success btn-round float-right add" type="button">ADD &nbsp; <i class="now-ui-icons ui-1_simple-add"></i></button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">

				<table class="table table-striped">
					<thead>
						<tr>
							<th width="50%">Name</th>
							<th width="30%">Position</th>
							<th width="20%">Actions</th>
						</tr>
					</thead>
					<tbody>
					@if(count($emp) > 0)
						@foreach($emp as $emp)
						<tr>
							<td>{{$emp->fname.' '.$emp->lname}}</td>
							<td>{{$emp->position}}</td>
							<td>
								<button class="btn btn-info edit" value="{{$emp->emp_id}}"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-danger delete" value="{{$emp->emp_id}}"><i class="fa fa-trash"></i></button>
							</td>
						</tr>
						@endforeach
					@else
						<tr>
							<td colspan="3" class="text-center">No Data Available</td>
						</tr>
					@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <h4 class="title title-up">Add Employee</h4>
            </div>
            <div class="modal-body">
                <form method="post">
                	{{csrf_field()}}
                	<input type="hidden" name="id">
                	<div class="form-group">
                		<label>First Name: </label>
                		<input type="text" name="fname" class="form-control" maxlength="50" required>
                	</div>
                	<div class="form-group">
                		<label>Last Name: </label>
                		<input type="text" name="lname" class="form-control" maxlength="50" required>
                	</div>
                	<div class="form-group">
                		<label>Postion: </label>
                		<input type="text" name="position" class="form-control" maxlength="50" required>
                	</div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-mini modal-danger" id="delModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </div>
            </div>
            <div class="modal-body">
            	<form method="post" action="/deleteemp">
            		{{csrf_field()}}
            		<input type="hidden" name="id">
                <p>Are you sure you want to delete this employee data?</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-neutral">Yes</button>
                <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
            	</form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){
	$('.add').click(function() {
		$('#myModal form').trigger('reset').attr('action','/addEmployee');
		$('#myModal h4.title').text('Add Employee');
		$('#myModal').modal();
	});
	$('.edit').click(function() {
		$('#myModal form').trigger('reset').attr('action','/editEmployee');
		$('#myModal h4.title').text('Edit Employee');
		$.ajax({
			url : '/getEmployee',
			type : 'get',
			data : {
				id : $(this).val()
			},
			success:function(response){
				$('#myModal input[name=id]').val(response.emp_id);
				$('#myModal input[name=fname]').val(response.fname);
				$('#myModal input[name=lname]').val(response.lname);
				$('#myModal input[name=position]').val(response.position);
			},
			complete:function(){
				$('#myModal').modal();
			}
		});
	});
	$('.delete').click(function() { 
        $('#delModal form input[name=id]').val($(this).val());
        $('#delModal').modal();
	}); 
});
</script>
@endsection