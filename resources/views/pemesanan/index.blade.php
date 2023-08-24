@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('pemesanan.create')}}" class="btn btn-primary">Tambah</a>
                <a href="{{route('pemesanan.excel')}}" class="btn btn-success">Export</a>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Pemesanan') }}</div>
                <div class="card-body">
                    <form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Pemesan</th>
                                    <th scope="col">Kendaraan</th>
                                    <th scope="col">Jenis Kendaraan</th>
                                    <th scope="col">Nomor Plat</th>
                                    <th scope="col">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pemesanan as $p)
                                <tr>
                                    <td>{{$p->pemesan}}</td>
                                    <td>{{$p->kendaraan->nama}}</td>
                                    <td>{{$p->kendaraan->jenis_kendaraan}}</td>
                                    <td>{{$p->kendaraan->nomor_plat}}</td>
                                    <td>{{$p->status}}</td>
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