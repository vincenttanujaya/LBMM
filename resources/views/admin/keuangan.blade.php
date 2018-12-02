@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
    <section class="card">
        <div class="card-block">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Keuangan LBMM</h2>
                        </div>
                    </div>
                </div>
            </header>
            <button class="btn btn-inline btn-primary"
      data-toggle="modal"
      data-target=".bd-example-modal-lg">Tambah Laporan Keuangan</button>

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
        <h4 class="modal-title" id="myModalLabel">Tambah Keuangan</h4>
       </div>
       <div class="modal-body">
            <form>
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
                    <th>ID Keuangan</th>
                    <th>Tanggal</th>
                    <th>Jumlah Uang</th>
                    <th>Pemasukkan</th>
                    <th>Pengeluaran</th>
                    <th>Debit</th>
                    <th>Kredit</th>
                    <th>Keterangan</th>
                    
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>L0001</td>
                            <td>27/11/2018</td>
                            <td>200.000</td>
                            <td>1.000.000</td>
                            <td>500.000</td>
                            <td>0</td>
                            <td>0</td>
                            <td></td>
                          
                        </tr>
                       
                        
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm">Unduh Laporan</button>
        </div>
        
    </section>
</div><!--.container-fluid-->
@endsection
