@extends('layouts/layout2')
@section('content')
<div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Tables</h3>
                        <p class="animated fadeInDown">
                          SIKP <span class="fa-angle-right fa"></span> Data Tables
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Tables</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama dosen</th>
                          <th>Jabatan</th>
                          <th>Link Upload</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Fulan bin Fulan</td>
                          <td>Dosen Ahli</td>
                          <td><li><a href="https://drive.google.com/open?id=1i4gZDdm2rSzrWng47wq0FilvSsaPSCv0" target="_blank">LINK</a></li></td>
                          <td>Divalidasi</td>
                          <td>
                            <input type="button" value="EDIT" class="btn btn-success box-shadow-none" data-toggle="modal" data-target="#exampleModalCenter">
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Fulani bin Fulan</td>
                          <td>Dosen Ahli</td>
                          <td><li><a href="https://drive.google.com/open?id=1i4gZDdm2rSzrWng47wq0FilvSsaPSCv0" target="_blank">LINK</a></li></td>
                          <td> Belum Divalidasi</td>
                          <td>
                            <input type="button" value="EDIT" class="btn btn-success box-shadow-none" data-toggle="modal" data-target="#exampleModalCenter">
                          </td>
                        </tr>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
@endsection
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Edit Status</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <div class="form-group" style="padding-bottom:5px;">
                    <label class="col-sm-2 control-label text-right">Nama</label>
                      <div class="col-sm-10"><input type="text" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="panel-body" style="padding-top:5px; padding-bottom:5px;"></div>
                    <div class="form-group" style="padding-bottom:10px;">
                    <label class="col-sm-2 control-label text-right">Jabatan</label>
                      <div class="col-sm-10"><input type="text" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="panel-body" style="padding-top:5px; padding-bottom:5px;"></div>
                    <div class="form-group" style="padding-bottom:10px;">
                    <label class="col-sm-2 control-label text-right">Link</label>
                      <div class="col-sm-10"><input type="text" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="panel-body" style="padding-top:5px; padding-bottom:5px;"></div>
                    <div class="form-group"><label class="col-sm-2 control-label text-right">Status</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="option"> Divalidasi
                                </div>
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="option"> Belum Validasi
                                </div>
                              </div>
                            </div>
                    <div class="panel-body" style="padding-top:5px; padding-bottom:5px;"></div>
                    <div class="form-group"><label class="col-sm-2 control-label text-right">Catatan</label>
                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>