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
            <button action="/tambahdatamotor" class="btn btn-sm btn-inline btn-primary">Tambahkan Data Baru</button>
            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Plat Nomor Kendaraan</th>
                    <th>Nomor STNK</th>
                    <th>Pemilik</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>K 2858 ABC</td>
                            <td>03216554112345</td>
                            <td>Vincent Marcello Dwi Tanujaya</td>
                            <td>
                                    <button type="button" class="btn btn-sm btn-inline btn-primary">Edit</button>
                                    <button type="button" class="btn btn-sm btn-inline btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>S 6541 NM</td>
                            <td>6153254654525</td>
                            <td>Ismail Syarief</td>
                            <td>
                                    <button type="button" class="btn btn-sm btn-inline btn-primary">Edit</button>
                                    <button type="button" class="btn btn-sm btn-inline btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>B 4678 JJ</td>
                            <td>0356543216554</td>
                            <td>Muhammad Alam Cahya</td>
                            <td>
                                    <button type="button" class="btn btn-sm btn-inline btn-primary">Edit</button>
                                    <button type="button" class="btn btn-sm btn-inline btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>W 1234 AA</td>
                            <td>0354235465432</td>
                            <td>Ibrahim Tamtama Adi</td>
                            <td>
                                    <button type="button" class="btn btn-sm btn-inline btn-primary">Edit</button>
                                    <button type="button" class="btn btn-sm btn-inline btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>H 2652 AC</td>
                            <td>0654321565434</td>
                            <td>Daniel Kurniawan</td>
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
