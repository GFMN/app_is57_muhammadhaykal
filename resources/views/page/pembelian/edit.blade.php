@extends('layouts.master')
@section('content')

<div class="container  mt-3 p-4" >
    
  <div class="card">
    <div class="card-header">
       form edit data pembelian
    </div>
    <div class="card-body">
        <form method="post" action="/pembelian/{{$pembelian->id}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">nofak</label>
              <input readonly type="text" name="nofak" value="{{$pembelian->nofak}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">tanggal</label>
              <input type="date" name="tanggal" value="{{$pembelian->tanggal}}" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="input-group mb-3">
              <select name="menu"  class="form-control" id="">
                <option value="">-Pilih menu-</option>
                @foreach ($menu as $item)
                <option value="{{$item->id}}" {{$pembelian->id_menu==$item->id ? 'selected' : ''}}>{{$item->nama}}</option>
              @endforeach
              </select>
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">jumlah</label>
              <input type="number" name="jumlah" value="{{$pembelian->jumlah}}" class="form-control" id="exampleInputPassword1">
            </div>
           
            
            
            <button type="submit" class="btn btn-primary">edit data</button>
            <a href="/pembelian" class="btn btn-warning">batal</a>
          </form>
    </div>
  </div>
</div>

      @endsection