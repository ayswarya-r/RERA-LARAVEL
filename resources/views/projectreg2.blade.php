@extends('layouts.header')
@section('content')

<br>
<div class="container">
  <div class="jumbotron" style="text-align:justify;opacity: 0.935;">
  <form action={{url('/projectreg2Validate')}} method="post" enctype="multipart/form-data">
      <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  	<h2>Project Details</h2>
  <div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
  </div>
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:30%">
    </div>
    
</div>

  
    <div class="form-group col-sm-10">
     <b>Project Name:</b> <input type="text" class="form-control" id="text" placeholder="Enter text" name="text">
    </div>
   <p>
	<div class="form-group col-sm-8">
	<b>Plan Approval Certificate:</b>
      <input type="file" class="form-control" id="text" placeholder="Address Proof" name="text" value="upload address proof">
	  <small id="emailHelp" class="form-text text-muted">Upload Plan Approval Certificate here.</small>
    </div>
	<p>
	<div class="form-group col-sm-8">
	<b>Commencement Certificate:</b>
      <input type="file" class="form-control" id="text" placeholder="Address Proof" name="text" value="upload address proof">
	  <small id="emailHelp" class="form-text text-muted">Upload Commencement Certificate here.</small>
    </div>
	<p>
	<div class="form-group col-sm-8">
	<p><b>Completion Certificate:</b>
      <input type="file" class="form-control" id="text" placeholder="Address Proof" name="text" value="upload address proof">
	  <small id="emailHelp" class="form-text text-muted">Upload Completion Certificate here.</small>
    </div>
	<div class="form-group col-sm-8">
      <input type="submit" name="submit">
  </div>	
  </form>
</div>
</div>
@stop