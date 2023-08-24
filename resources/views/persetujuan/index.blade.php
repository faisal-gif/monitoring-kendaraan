@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Pemesan</th>
                                    <th scope="col">Nama Kendaraan</th>
                                    <th scope="col">Nomor Plat</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($persetujuan as $p)
                                <tr>
                                    <td scope="row">{{$p->pemesanan->pemesan}}</td>
                                    <td>{{$p->pemesanan->kendaraan->nama}}</td>
                                    <td>{{$p->pemesanan->kendaraan->nomor_plat}}</td>
                                    <td>
                                        @if($p->status === 'diajukan')
                                        <a href="{{route('persetujuan.proses',[
                                        'id' => $p->id,
                                        'status' => 'disetujui'])}}" class="btn btn-success">setuju</a>
                                        <a href="{{route('persetujuan.proses',[
                                        'id' => $p->id,
                                        'status' => 'ditolak'])}}" class="btn btn-danger">tolak</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection