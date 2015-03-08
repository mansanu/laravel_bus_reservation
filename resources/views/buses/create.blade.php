@extends('app')
@section('content')

<script type="text/javascript">
      CKEDITOR.config.customConfig = 'vendor/ckeditor/public/config.js';
      CKEDITOR.replace(Story);
</script>

<div class="page-header" style="border: 1px solid #0077b3;">
<h1>Add New Bus </h1>
</div>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach


    <form method="post">
	<div class="form-group">
        <label>Bus Reg. No</label><input name="bus_reg_no" class="form-control">
	</div>
	<div class="form-group">
        <label>Bus Type</label><input name="bus_type" class="form-control">
	</div>
	<div class="form-group">
		<label>No. of Seat</label><input name="bus_max_seat" class="form-control ckeditor">
	</div>
	<div class="form-group">
        <input type="submit">
	</div>
    </form>

@endsection