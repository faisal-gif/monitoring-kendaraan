@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{route('kendaraan.update',$data->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{$data->nama}}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kendaraan</label>
                            <input type="text" name="jenis_kendaraan" class="form-control" value="{{$data->jenis_kendaraan}}">
                        </div>
                        <div class="form-group">
                            <label>Nomor Seri</label>
                            <input type="text" name="nomor_seri" class="form-control" value="{{$data->nomor_seri}}">
                        </div>
                        <div class="form-group">
                            <label>Nomor Plat</label>
                            <input type="text" name="nomor_plat" class="form-control" value="{{$data->nomor_plat}}">
                        </div>
                        <div class="form-group">
                            <label>Konsumsi BBM</label>
                            <input type="text" name="konsumsi_bbm" class="form-control" value="{{$data->konsumsi_bbm}}">
                        </div>
                        <div class="form-group">
                            <label>Jadwal Service</label>
                            <input type="text" name="jadwal_service" class="form-control" value="{{$data->jadwal_service}}">
                        </div>
                        <div class="form-group">
                            <label>Riwayat Pemakaian</label>
                            <input type="text" name="riwayat_pemakaian" class="form-control" value="{{$data->riwayat_pemakaian}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection