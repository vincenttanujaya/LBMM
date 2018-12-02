@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
    <section class="card">
        <div class="card-block">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Data Pelanggan</h2>
                        </div>
                    </div>
                </div>
            </header>
            <button class="btn btn-inline btn-primary"data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data Baru</button>

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
        <h4 class="modal-title" id="myModalLabel">Tambah Data Baru</h4>
       </div>
       <div class="modal-body">
            <div class="box-typical box-typical-padding">
            <form>
                    <div class="form-group row">
                     <label class="col-sm-2 form-control-label">Nama Pelanggan</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Tipe Motor"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Alamat</label>
                               <div class="col-sm-10">
                                   <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Merk Motor"></p>
                               </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 form-control-label">No. Telepon</label>
                                   <div class="col-sm-10">
                                       <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Tahun Motor"></p>
                                   </div>
                        </div>
            </form>
            </div>
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
                    <th>ID Pelanggan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>P0001</td>
                            <td>Denise Sonia Rahmadina</td>
                            <td>Jl. Wisma Permai II No. 1</td>
                            <td>087853185814</td>
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
