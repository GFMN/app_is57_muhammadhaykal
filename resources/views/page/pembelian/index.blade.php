@extends('layouts.master')
@section('content')

<div class="container  mt-3 p-4" >
  @can('create',App\menu::class) 
    <a href="/pembelian/form" style="float: right" class="btn btn-primary btn-sm ">tambah data</a>
    @endcan
<br>
<br>
    <div class="card">
        <div class="card-header">
            data pembelian
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">nofak</th>
                    <th scope="col">tanggal</th>
                    <th scope="col">menu</th>
                    <th scope="col">jumlah</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($pembelian as $item)
                    <tr>
                        <th scope="row">{{$nomor++}}</th>
                        <td>{{$item->nofak}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->menus->nama}}</td>
                        <td>{{$item->jumlah}}</td>
                        @can('create',App\menu::class)
                        <td>

                            <a href="/pembelian/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#a{{$item->id}}">
                                hapus
                              </button>
                              <!-- Modal -->
<div class="modal fade" id="a{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">peringatan</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          apakah data dengan nofak {{$item->nofak}} ingin dihapus ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
          <form method="POST" action="/pembelian/{{$item->id}}">
            @csrf
            @method('DELETE')
          <button type="submit" class="btn btn-primary">ok</button>
        </form>
        </div>
      </div>
    </div>
  </div>
                        </td>
                        @endcan
                      </tr>
                    @empty
                        <tr>
                            <td colspan="4">tidak ada data</td>
                        </tr>
                    @endforelse
                  
                </tbody>
              </table>
        </div>
      </div>
</div>


      @endsection