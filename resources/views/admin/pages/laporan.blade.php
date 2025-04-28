@extends('admin.layouts.base')

@section('content')
<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Laporan</b></h5>
</div>


<div class="alert alert-info shadow">
    <h4>
        <b>Laporan Penyewaan dari
        sampai </b>
</h4>
</div>

<div class="card shadow bg-white">
    <div class="card-body">
         <form method="POST">
            @csrf
            <div class="row">

            <div class="col-md-4">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Sewa </label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal_penyewaan" value="">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
            <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Selesai Sewa </label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="selesai_penyewaan" value="">
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <select name="metode_pembayaran" class="form-control">
                            <option>Pilih Metode Pembayaran</option>
                            <option value="Q-rish">Q-rish</option>
                            <option value="COD">Cash on Delivery</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-1">
                <button name="cari" class="btn btn-primary">
                <i class="fas fa-search"></i>
                </button>
            </div>


            </div>
         </form>
    </div>
</div>

<div class="card shadow bg-white">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped text-center" id="tables">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Metode Pembayaran</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="5">Data Kosong</td>
                    </tr>
                </tbody>

                <tfoot class="font-weight-bold">
                    <tr>
                        <td colspan="4" class="text-right">Total Harga</td>
                        <td>-</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection