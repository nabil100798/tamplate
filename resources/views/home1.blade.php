@extends('layouts/layout1')
@section('content')
<div class="col-md-8">
            <div class="col-md-12 padding-0"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel">
            <div class="panel-body">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-12 padding-0">
            <div>
            <div class="carousel slide" data-ride="carousel" id="quote-carouse">
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#quote-carousel" data-slide-to="0" class=""></li>
            <li data-target="#quote-carousel" data-slide-to="1" class=""></li>
            <li data-target="#quote-carousel" data-slide-to="2" class="active"></li>
            </ol>
            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">
            <!-- Quote 1 -->
            <div class="item">
            <blockquote>
            <div class="col-md-12">
            <div class="col-sm-3 text-center">
            <img class="img-circle" src="asset/img/avatar.jpg" style="width: 100px;height:100px;">
            </div>
            <div class="col-sm-9">
            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
            <small>Someone famous</small>
            </div>
            <div>
            </blockquote>
            </div>
            <!-- Quote 2 -->               
            <div class="item">
            <blockquote>
            <div class="col-md-12">
            <div class="col-sm-3 text-center">  
            <img class="img-circle" src="asset/img/avatar.jpg" style="width: 100px;height:100px;">
            </div>
            <div class="col-sm-9">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
            <small>Someone famous</small>
            </div>
            </div>
            </blockquote>
            </div>
            <!-- Quote 3 -->
            <div class="item active">
            <blockquote>
            <div class="row">
            <div class="col-sm-3 text-center">
            <img class="img-circle" src="asset/img/avatar.jpg" style="width: 100px;height:100px;">
            </div>
            <div class="col-sm-9">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
            <small>Someone famous</small>
            </div>
            </div>
            </blockquote>
            </div>
            </div>
            <!-- Carousel Buttons Next/Prev -->
            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>

	    <div class="col-md-4">
            <div class="col-md-12 padding-0">
            <div class="panel box-v2">
            <div class="panel-heading padding-0">
            <img src="http://127.0.0.1:8000/asset/img/avatar.jpg" class="box-v2-cover img-responsive">

            </div>
            <div class="panel-body bg-blue">
            <div class="col-md-12 padding-0 text-center">
            <div class="col-md-6 col-sm-6 col-xs-6 padding-0" style="width:100%;">
            <h3>Fulan bin Fulan</h3>
            <br>
            <kbd>Kaprodi SI</kbd>
            </div>

            </div>
            </div>
            </div>
            </div>

            <div class="col-md-12 padding-0">
            <div class="panel box-v3">
            <div class="panel-heading bg-white border-none">
            <h4>Report</h4>
            </div>
            <div class="panel-body">

            <div class="media">
            <div class="media-left">
            <span class="icon-folder icons" style="font-size:2em;"></span>
            </div>
            <div class="media-body">
            <h5 class="media-heading">Document Handling</h5>
            <div class="progress progress-mini">
            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
            <span class="sr-only">60% Complete</span>
            </div>
            </div>
            </div>
            </div>

            <div class="media">
            <div class="media-left">
            <span class="icon-pie-chart icons" style="font-size:2em;"></span>
            </div>
            <div class="media-body">
            <h5 class="media-heading">UI/UX Development</h5>
            <div class="progress progress-mini">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%;">
            <span class="sr-only">60% Complete</span>
            </div>
            </div>
            </div>
            </div>

            <div class="media">
            <div class="media-left">
            <span class="icon-energy icons" style="font-size:2em;"></span>
            </div>
            <div class="media-body">
            <h5 class="media-heading">Server Optimation</h5>
            <div class="progress progress-mini">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
            <span class="sr-only">60% Complete</span>
            </div>
            </div>
            </div>
            </div>

            <div class="media">
            <div class="media-left">
            <span class="icon-user icons" style="font-size:2em;"></span>
            </div>
            <div class="media-body">
            <h5 class="media-heading">User Status</h5>
            <div class="progress progress-mini">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%;">
            <span class="sr-only">60% Complete</span>
            </div>
            </div>
            </div>
            </div>

            <div class="media">
            <div class="media-left">
            <span class="icon-fire icons" style="font-size:2em;"></span>
            </div>
            <div class="media-body">
            <h5 class="media-heading">Firewall Status</h5>
            <div class="progress progress-mini">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
            <span class="sr-only">60% Complete</span>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="panel-footer bg-white border-none">
            <center>
            <input type="button" value="download as pdf" class="btn btn-danger box-shadow-none">
            </center>
            </div>
            </div>
            </div>

            <div class="col-md-12 padding-0">
            <div class="panel bg-light-blue">
            <div class="panel-body text-white">
            <p class="animated fadeInUp quote">Lorem ipsum dolor sit amet, consectetuer adipiscing elit Ut wisi..."</p>
            <div class="col-md-12 padding-0">
            <div class="text-left col-md-7 col-xs-12 col-sm-7 padding-0">
            <span class="fa fa-twitter fa-2x"></span>
            <span>22 May, 2015 via mobile</span>
            </div>
            <div style="padding-top:8px;" class="text-right col-md-5 col-xs-12 col-sm-5 padding-0">
            <span class="fa fa-retweet"></span> 2000
            <span class="fa fa-star"></span> 3000
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
@endsection