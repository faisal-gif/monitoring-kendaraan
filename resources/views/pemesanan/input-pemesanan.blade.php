@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{route('kendaraan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Pemesan</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kendaraan</label>
                            <select name="" id="" class="form-control">
                                @foreach($kendaraan as $k)
                                <option value="{{$k->id}}">{{$k->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pihak yang Menyetujui</label>
                            <label>Pihak 1</label>
                            <select name="" id="" class="form-control">
                                @foreach($user as $u)
                                <option value=""></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pihak 2</label>
                            <select name="" id="" class="form-control">
                                @foreach($user as $u)
                                <option value=""></option>
                                @endforeach
                            </select>
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