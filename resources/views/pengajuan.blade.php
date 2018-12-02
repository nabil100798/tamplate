@extends('layouts/layout')
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
                  <input type="button" value="Tambah" class="btn btn-success box-shadow-none" data-toggle="modal" data-target="#exampleModalCenter">
                  <div class="panel-heading"><h3>Data Tables</h3></div>
                  <div class="panel">
                    <div class="panel-body">
                      <div class="responsive-table">

                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>jabatan Awal</th>
                            <th>jabatan Tujuan</th>
                            <th>berkas</th>
                            <th>pak</th>


                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>asal</td>
                            <td>tujuan</td>
                            <td></td>
                            <td><input type="button" value="PAK" class="btn btn-danger box-shadow-none"></td>

                          </tr>
                          <tr>
                            <td>asisten ahli</td>
                            <td>lektor</td>
                            <td></td>
                            <td><input type="button" value="PAK" class="btn btn-danger box-shadow-none"></td>
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
                  <h5 class="modal-title" id="exampleModalCenterTitle">isi data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group"><label class="col-sm-3 control-label text-right">Jabatan Asal</label>
                    <select class="form-control">
                        <option>Asisten Ahli</option>
                        <option>Lektor</option>
                        <option>Lektor Kepala</option>
                        <option>Guru Besar</option>
                        <option>Pranata Komputer</option>
                        <option>Arsiparasi</option>
                        <option>Analisis Kepegawaian</option>
                        <option>Pranata Humas</option>
                        <option>Pranata Laboratorium</option>
                        <option>Pustakawan</option>
                      </select>
                  </div>
                  <div class="form-group"><label class="col-sm-3 control-label text-right">Jabatan Tujuan</label>
                    <select class="form-control">
                      <option>Asisten Ahli</option>
                      <option>Lektor</option>
                      <option>Lektor Kepala</option>
                      <option>Guru Besar</option>
                      <option>Pranata Komputer</option>
                      <option>Arsiparasi</option>
                      <option>Analisis Kepegawaian</option>
                      <option>Pranata Humas</option>
                      <option>Pranata Laboratorium</option>
                      <option>Pustakawan</option>
                      </select>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

