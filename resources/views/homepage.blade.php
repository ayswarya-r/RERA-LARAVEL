@extends('layouts.header')


@section('content')

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{URL::asset('/image/c1.png')}}" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="{{URL::asset('/image/c2.jpg')}}" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="{{URL::asset('/image/c3.jpg')}}" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



<div class="jumbotron " style="text-align:justify;background-color:white;opacity: 0.90;padding:50px;">
<div class="row">
<div class="col-sm-6">
<h2 style="color:#f96702;">Our philosophy</h2>
<p>DxRERA's philosophy is to have holistic approach towards promoting the interests of the consumers as well as builders and boost investments into real estate in an environment of trust and confidence. </p>

<div class="row">
<div class="col-sm-6">
<p><h4><span class="glyphicon glyphicon-asterisk" style="color:#4df902;"></span>Trust</h4> DxRERA helps developers in building credibility and go a long way in establishing a relationship of trust with the customers. </p><br><br>
<p><h4><span class="glyphicon glyphicon-asterisk" style="color:#4df902;"></span>Control</h4>DxRERA provisions would ensure stricter control on management of funds and timely delivery of projects by the developers / promoters. </p>
</div>
<div class="col-sm-6">
<p><h4><span class="glyphicon glyphicon-asterisk" style="color:#4df902;"></span>Transparency</h4>DxRERA creates a more equitable & fair transaction between the consumer and developer / promoter thus ensuring a positive environment in the real estate sector. </p><br>
<p><h4><span class="glyphicon glyphicon-asterisk" style="color:#4df902;"></span>Credibility</h4>DxRERA will facilitate the consumer while boosting the credibility of developers.</p>
</div>
</div>
</div>
<div class="col-sm-6">
<h2 style="color:#f96702;">MAGNIFYING towards</h2>
<p >
<a href="#"><span class="glyphicon glyphicon-asterisk"></span></a>Ensuring accountability towards allottees and protect their interest.<br>
<a href="#"><span class="glyphicon glyphicon-asterisk"></span></a>Establishing symmetry of information between the promoter and allottee.<br>
<a href="#"><span class="glyphicon glyphicon-asterisk"></span></a>Imposing certain responsibilities on both promoter and allottees.<br>
<a href="#"><span class="glyphicon glyphicon-asterisk"></span></a>Establishing regulatory oversight mechanism to enforce contracts.<br>
<a href="#"><span class="glyphicon glyphicon-asterisk"></span></a>Establishing fast-track dispute resolution mechanism.<br>
<a href="#"><span class="glyphicon glyphicon-asterisk"></span></a>Promoting good governance, which in turn would create investor confidence.<br>
</p>
</div>
</div>
<br><br>
<div class="row">
<div class="col-sm-6">
<h2  style="color:#f96702;">Reach us</h2>
<div style="text-align:center;">
<p><h4>DELHI <br>REAL ESTATE REGULATORY AUTHORITY</h4>
  <p style="font-size: 16px;color:grey;">1st Floor, PN Bus Station,<br> RTC House, xxx - 520013<br> Help Desk 8367770574 (10 AM - 6 PM) <br>
  General Queries  9985533388 (Director Planning)</p> Write to  <a href=""> helpdesk-rera.x.in</a></p> <br>
</div>
</div>
<div class="col-sm-6">
<h2 style="color:#f96702;">Feedback/Suggestion</h2>
<form action="/action_page.php">
    <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
      <input type="text" class="form-control" placeholder="Name*" name="name">
    </div></div>
    <div class="col-sm-6">
  <div class="form-group">
      <input type="text" class="form-control" placeholder="Mobile*" name="mobile">
    </div></div>
  </div>
    <div class="row">
  <div class="col-sm-3">
  <div class="form-group">
      <input type="text" class="form-control" placeholder="Gender*" name="gender">
    </div></div>
    <div class="col-sm-6 col-sm-offset-3">
  <div class="form-group">
      <input type="email" class="form-control" placeholder="Email*" name="email">
    </div></div>
  </div>
    
  <div class="form-group">
  <textarea class="form-control" rows="5"  placeholder="Feedback* (Maximum of 1000 characters)"></textarea>
</div> 
  <button type="submit" class="btn btn-primary col-sm-offset-10">Submit</button>
  </form>
</div>
</div>
</div>
@stop

