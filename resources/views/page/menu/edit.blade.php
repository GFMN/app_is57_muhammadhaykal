@extends('layouts.master')
@section('content')

<div class="container  mt-3 p-4" >
    
    <div class="card">
        <div class="card-header">
           form edit data menu
        </div>
        <div class="card-body">
            <form method="post" action="/menu/{{$menu->id}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nama menu</label>
                  <input type="text" name="nama" value="{{$menu->nama}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="input-group mb-3">
                  <select name="jenis"  class="form-control" id="">
                    <option value="">-Pilih jenis menu-</option>
                        <option value="makanan" {{$menu->jenis=='makanan' ? 'selected' : ''}}>makanan</option>
                        <option value="minuman" {{$menu->jenis=='minuman' ? 'selected' : ''}}>minuman</option>
                  </select>
                  <div class="input-group-append">
                    <div class="input-group-text">
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">harga</label>
                  <input type="number" name="harga" value="{{$menu->harga}}" class="form-control" id="exampleInputPassword1">
                </div>
               
                
                
                <button type="submit" class="btn btn-primary">edit data</button>
                <a href="/menu" class="btn btn-warning">batal</a>
              </form>
        </div>
      </div>
</div>

      @endsection