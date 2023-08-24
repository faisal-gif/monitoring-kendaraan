@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Buat Pemesanan') }}</div>

                <div class="card-body">
                    <form action="{{route('pemesanan.store')}}" class="col-8" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Pemesan</label>
                            <input type="text" class="form-control" name="pemesan">
                        </div>
                        <div class="form-group">
                            <label>Kendaraan</label>
                            <select name="kendaraan" id="" class="form-control">
                                @foreach($kendaraan as $k)
                                <option value="{{$k->id}}">{{$k->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label>Pihak yang Menyetujui</label>
                        </div>
                        <div class="form-group">
                            <label>Pihak 1</label>
                            <select name="pihak1" id="" class="form-control">
                                @foreach($user as $u)
                                <option value="{{$u->id}}">{{$u->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pihak 2</label>
                            <select name="pihak2" id="" class="form-control">
                                @foreach($user as $u)
                                <option value="{{$u->id}}">{{$u->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection