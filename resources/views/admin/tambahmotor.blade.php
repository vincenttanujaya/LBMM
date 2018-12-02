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
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Plat Nomor</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">No. STNK</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Nama Pemilik</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Merk Motor</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Tipe Motor</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <button type="button" class="btn btn-sm btn-inline btn-primary">Simpan</button>
                    <button type="button" class="btn btn-sm btn-inline btn-danger">Batal</button>
                </div>
                    
                
            </form>
        </div>
    </section>
</div><!--.container-fluid-->
@endsection
