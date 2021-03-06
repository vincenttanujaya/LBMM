@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
    <section class="card">
        <div class="card-block">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Data Motor</h2>
                        </div>
                    </div>
                </div>
            </header>
            <button class="btn btn-inline btn-primary"
      data-toggle="modal"
      data-target=".bd-example-modal-lg">Tambah Data Motor</button>

    <div class="modal fade bd-example-modal-lg"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
     <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
         <i class="font-icon-close-2"></i>
        </button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Motor</h4>
       </div>
       <div class="modal-body">
            <form>
                <div class="box-typical box-typical-padding">
                    <div class="form-group row">
                     <label class="col-sm-2 form-control-label">Tipe Motor</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Tipe Motor"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Merk Motor</label>
                               <div class="col-sm-10">
                                   <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Merk Motor"></p>
                               </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Tahun Motor</label>
                                   <div class="col-sm-10">
                                       <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Tahun Motor"></p>
                                   </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 form-control-label">No. Polisi</label>
                                       <div class="col-sm-10">
                                           <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="No. Polisi"></p>
                                       </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">KM</label>
                                           <div class="col-sm-10">
                                               <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="KM"></p>
                                           </div>
                                </div>
                </div>
                            </form>
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-rounded btn-primary">Save changes</button>
       </div>
      </div>
     </div>
    </div><!--.modal-->
            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID Motor</th>
                    <th>Tipe Motor</th>
                    <th>Merk Motor</th>
                    <th>Tahun Motor</th>
                    <th>No.Polisi</th>
                    <th>KM</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>M0001</td>
                            <td>Ride Apart</td>
                            <td>Honda</td>
                            <td>2016</td>
                            <td>B 2441 SOA</td>
                            <td>400</td>
                            <td>
                                    <button type="button" class="btn btn-sm btn-inline btn-primary">Edit</button>
                                    <button type="button" class="btn btn-sm btn-inline btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                                <td>M0002</td>
                                <td>Ride Apart</td>
                                <td>Suzuki</td>
                                <td>2014</td>
                                <td>L 1345 QYZ</td>
                                <td>600</td>
                            <td>
                                    <button type="button" class="btn btn-sm btn-inline btn-primary">Edit</button>
                                    <button type="button" class="btn btn-sm btn-inline btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                                <td>M0003</td>
                                <td>Sport Touring</td>
                                <td>Yamaha</td>
                                <td>2017</td>
                                <td>W 2365 YTP</td>
                                <td>700</td>
                            <td>
                                    <button type="button" class="btn btn-sm btn-inline btn-primary">Edit</button>
                                    <button type="button" class="btn btn-sm btn-inline btn-danger">Hapus</button>
                            </td>
                        </tr>
                        
                </tbody>
            </table>
        </div>
    </section>
</div><!--.container-fluid-->
@endsection
