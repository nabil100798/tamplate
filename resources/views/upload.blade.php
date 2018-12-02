@extends('layouts/layout')
@section('content')
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Upload Berkas</h3>
                        <p class="animated fadeInDown">
                          SIKIP <span class="fa-angle-right fa"></span> Upload Berkas
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-12">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Upload Berkas</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-8">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Nama</label>
                              <div class="col-sm-10"><input type="password" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Link</label>
                              <div class="col-sm-10"><input type="text" class="form-control" disabled></div>
                            </div>
                            <div class="col-md-6" style="padding:30px;">
                              <div class="btn-group" style="margin-left:110px;" role="group" aria-label="...">
                              <button type="button" class="btn btn-default">
                              <a href="https://drive.google.com/open?id=1i4gZDdm2rSzrWng47wq0FilvSsaPSCv0" target="_blank">Upload</a>
                              </button>
                              <input type="submit" style="margin-Left: 10px;" class="btn btn-success" value="save">
                              </div>
                            </div>
                          </div>
                        </div></div>
                    </div>
                    <div class="col-md-12">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                          <div class="panel-heading">
                           <h4>Cara Upload</h4>
                          
                      </div>
                  </div>
                  </div>
              </div>
            
@endsection