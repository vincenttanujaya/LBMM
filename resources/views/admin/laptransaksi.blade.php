@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
    <section class="card">
        <div class="card-block">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Transaksi LBMM</h2>
                        </div>
                    </div>
                </div>
            </header>
            
            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Tipe Motor</th>
                    <th>Jenis Servis</th>
                    <th>Sparepart</th>
                    <th>Total Biaya</th>
                    <th>Nama Mekanik</th>
                    
                </tr>
                </thead>
                <tbody>
                        <tr>
                                <th>28/11/2018</th>
                                <th>Denise Sonia Rahmadina</th>
                                <th>Ride Apart</th>
                                <th>Rutin 6 Bulan</th>
                                <th>-</th>
                                <th>150.000</th>
                                <th>Achmad Hanif Pradipta</th>
                          
                        </tr>
                       
                        
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm">Unduh Laporan</button>
        </div>
        
    </section>
</div><!--.container-fluid-->
@endsection
