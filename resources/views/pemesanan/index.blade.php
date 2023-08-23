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
                                    <th scope="col">ID</th>
                                    <th scope="col">Kendaraan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $k)
                                <tr>
                                    <th scope="row">{{$k->id}}</th>
                                    <td>{{$k->nama}}</td>
                                    <td>{{$k->jenis_kendaraan}}</td>
                                    <td>
                                        <form action="{{ route('kendaraan.destroy',$k->id) }}" method="post">
                                            <a class="btn btn-primary" href="{{ route('kendaraan.edit',$k->id) }}">Edit</a>
                                            @csrf
                                           
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
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