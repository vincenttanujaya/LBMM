@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
    <section class="card">
        <div class="card-block">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Nota Transaksi</h2>
                        </div>
                    </div>
                </div>
            </header>
           
       <div class="modal-body">
            <div class="box-typical box-typical-padding">
            <form>
                    <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Tanggal</label>
                                   <div class="col-sm-10">
                                       <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Tahun Motor"></p>
                                   </div>
                        </div>
                    <div class="form-group row">
                     <label class="col-sm-2 form-control-label">Nama Pelanggan</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Nama"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Tipe Motor</label>
                               <div class="col-sm-10">
                                   <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Tipe Motor"></p>
                               </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-sm-2 form-control-label">Jenis Servis</label>
                                   <div class="col-sm-10">
                                       <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Jenis"></p>
                                   </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Sparepart</label>
                                       <div class="col-sm-10">
                                           <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Sparepart"></p>
                                       </div>
                            </div>
                            <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Total Biaya</label>
                                           <div class="col-sm-10">
                                               <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Biaya"></p>
                                           </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-sm-2 form-control-label">Nama Mekanik</label>
                                               <div class="col-sm-10">
                                                   <p class="form-control-static"><input type="number" class="form-control" id="inputPassword" placeholder="Nama"></p>
                                               </div>
                                    </div>
                                  
                                        
            </form>
            </div>
       </div>
       <button type="button" class="btn btn-primary btn-lg">Cetak Nota</button>
       
            
    </section>
</div><!--.container-fluid-->
@endsection
