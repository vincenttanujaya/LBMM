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
                     <label class="col-sm-2 form-control-label">Tanggal</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Tanggal"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Jumlah Uang</label>
                               <div class="col-sm-10">
                                   <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Jumlah Uang"></p>
                               </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Pemasukkan</label>
                                   <div class="col-sm-10">
                                       <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Pemasukkan"></p>
                                   </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Pengeluaran</label>
                                       <div class="col-sm-10">
                                           <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Pengeluaran"></p>
                                       </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Debit</label>
                                           <div class="col-sm-10">
                                               <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Debit"></p>
                                           </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Kredit</label>
                                           <div class="col-sm-10">
                                               <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Kredit"></p>
                                           </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Keterangan</label>
                                           <div class="col-sm-10">
                                               <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Keterangan"></p>
                                           </div>
                                </div>
            </form>
       </div>
       <br>
       <br>
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
            <br>
            <button type="button" class="btn btn-primary btn-sm">Unduh Laporan</button>
        </div>
        
    </section>
</div><!--.container-fluid-->
@endsection
