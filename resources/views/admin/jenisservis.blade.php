@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
    <section class="card">
        <div class="card-block">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Data Jenis Servis</h2>
                        </div>
                    </div>
                </div>
            </header>
            <button action="/tambahdatamotor" class="btn btn-sm btn-inline btn-primary">Tambahkan Data Baru</button>
            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID Servis</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>S0001</td>
                            <td>Servis Rutin 6 Bulan</td>
                            <td>Servis yang termasuk penggantian oli dan pengecekkan mesin.</td>
                            
                           
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
