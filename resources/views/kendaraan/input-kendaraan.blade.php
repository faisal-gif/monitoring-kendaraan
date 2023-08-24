@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('INput Kendaraan') }}</div>

                <div class="card-body">
                    <form action="{{route('kendaraan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kendaraan</label>
                            <input type="text" name="jenis_kendaraan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nomor Seri</label>
                            <input type="text" name="nomor_seri" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nomor Plat</label>
                            <input type="text" name="nomor_plat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Konsumsi BBM</label>
                            <input type="text" name="konsumsi_bbm" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jadwal Service</label>
                            <input type="text" name="jadwal_service" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Riwayat Pemakaian</label>
                            <input type="text" name="riwayat_pemakaian" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection