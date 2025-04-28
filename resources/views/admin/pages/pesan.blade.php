@extends('admin.layouts.base')

@section('content')
<div class="shadow p-3 mb-3 bg-white rounded">
    <h5><b>Halaman Pesan</b></h5>
</div>

<div class="card shadow bg-white">
    <div class="card-body">
        <table class="table table-bordered table-hover tabel-striped" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Isi Pesan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center" width="200">
                    <a href="index.php?halaman=hapus_pesan&id=" 
                        class="btn btn-sm btn-danger">Hapus Pesan</a>

                    </td>
                </tr>
            
            </tbody>
        </table>
    </div>
</div>
@endsection