@extends('app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Bus</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

					 <form class="form-horizontal" role="form" method="POST" action="{{ url('/buses/store') }}">
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
							
					
						<div class="form-group">
							<label for="bus_reg_no" class="col-md-4 control-label">Bus Reg. No</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="bus_reg_no" id="bus_reg_no" value="{{ old('bus_reg_no') }}">
							</div>
						</div>

						<div class="form-group">
							<label for="bus_type" class="col-md-4 control-label">Bus Type</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="bus_type" id="bus_type" value="{{ old('bus_type') }}">
							</div>
						</div>

						<div class="form-group">
							<label for="bus_max_seat" class="col-md-4 control-label">No. of Seat</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="bus_max_seat" id="bus_max_seat" value="{{ old('bus_max_seat') }}">
							</div>
						</div>
						
						 <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Add
								</button>
							</div>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection