@extends('layouts.header')
@section('content')

<br>

  <div class="jumbotron" style="text-align:justify;opacity: 0.935;padding: 50px;">
  <h2>Add builder</h2>
  <div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
  </div>
</div>
  <form action="{{url('/projectreg1Validate')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <label><h3>personal details:</h3></label>
  <div class="form-group col-sm-12">
      <input type="text" class="form-control" id="text" placeholder="Organisation type" name="orgtype">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Registration no/CIN no" name="regno">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Organisation name" name="orgname">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Email id" name="mailid">
    </div>
    <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" placeholder="ROC" name="rocfile" value="upload ROC">
    <small id="emailHelp" class="form-text text-muted">Upload ROC here.</small>
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="PAN number" name="pan">
    </div>
  <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" name="panfile" value="upload pan number">
    <small id="emailHelp" class="form-text text-muted">Upload pan card here.</small>
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="GST no" name="gst">
    </div>
    <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" name="gstnofile" value="upload GST certificate">
    <small id="emailHelp" class="form-text text-muted">Upload GST certificate.</small>
    </div>
    
  
  <br><br>

  <label><h3>Company Address For communication:</h3></label>
  <br>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Address Line1" name="add1">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Address Line2" name="add2">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Mandal" name="mandal">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Local Area/village" name="area">
    </div>
  <div class="form-group col-sm-6">
    <input type="text" class="form-control" id="text" placeholder="District" name="district">
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="State" name="state">
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="PIN CODE" name="pincode">
    </div>
  <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" name="addproof" value="upload address proof">
    <small id="emailHelp" class="form-text text-muted">Upload Address Proof here.</small>
    </div>
   
   <label><h3>Authorized Signatory Details:</h3></label>
  <br>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Name" name="authname">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Address Line1" name="authadd1">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Address Line2" name="authadd2">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Mandal" name="authmandal">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Local Area/village" name="autharea">
    </div>
  <div class="form-group col-sm-6">
    <input type="text" class="form-control" id="text" placeholder="District" name="authdistrict">
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="State" name="authstate">
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="PIN CODE" name="authpincode">
    </div>
    <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" name="authaddproof" value="upload address proof">
    <small id="emailHelp" class="form-text text-muted">Upload Photo    here.</small>
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Email ID" name="authmail">
    </div>
    <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" name="authadd" value="upload address proof">
    <small id="emailHelp" class="form-text text-muted">Upload Address Proof here.</small>
    </div>
  <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="text" placeholder="Mobile no." name="authmob">
    </div>
  <div class="form-group col-sm-6">
      <input type="file" class="form-control" id="text" name="resolution" value="upload address proof">
    <small id="emailHelp" class="form-text text-muted">Board Resolution for Authorized Signatory </small>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <p style="text-align:center"><b>Have Past Years:</b>
      <input type="radio" name="type" value="New"> New
      <input type="radio" name="type" value="Existing"> Existing<br>
    <div class="container" align="center">
  <input type="submit"  >    
</div>
  </p>
  </form>
</div>

@stop