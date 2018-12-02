@extends('layouts/layouts1')
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

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Fulan bin Fulan</td>
                          <td>Dosen Ahli</td>
                          <td><li><a href="#" target="_blank">https://drive.google.com/drive/folders/1zHRd6Pa6oQF8JwOOSiYwaPpl5eHgvIHk</a></li></td>
                          <td>Divalidasi</td>

                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Fulani bin Fulan</td>
                          <td>Dosen Ahli</td>
                          <td><li><a href="#" target="_blank">https://drive.google.com/drive/folders/1qCJKFAAdNjjwRac2eKcnk0DC3DwfHyUB</a></li></td>
                          <td> Belum Divalidasi</td>

                        </tr>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
@endsection