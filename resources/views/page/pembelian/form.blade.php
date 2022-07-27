@extends('layouts.master')
@section('content')

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form tambah data pembelian
        </div>
        <div class="card-body">
            <form method="POST" action="/pembelian/store" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nofak</label>
                  <input type="text" name="nofak" value="" class="form-control  ">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">tanggal</label>
                  <input type="date" name="tanggal" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">menu</label>
                  <select name="menu" class="form-control">
                    <option value="">-pilih menu-</option>
                    @foreach ($menu as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">jumlah</label>
                  <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">tambah data</button>
                <a href="/mahasiswa" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      @endsection