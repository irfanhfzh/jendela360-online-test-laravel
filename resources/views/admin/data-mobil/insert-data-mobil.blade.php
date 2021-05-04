@extends('admin.layouts.template-admin')
@section('name', 'Insert Data Mobil')
@section('content')
<form id="quickForm" action="{{route('admin.data-mobil-insert')}}" method="POST">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
              <label for="nama">Nama Mobil</label> @error('nama')<span class="text-danger">{{$message}}</span>@enderror 
              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Mobil" value="{{old('nama')}}">
            </div>     
        </div>
        <div class="col-sm-4">
            <div class="form-group">
              <label for="harga">Harga Mobil</label> @error('harga')<span class="text-danger">{{$message}}</span>@enderror 
              <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Harga Mobil" value="{{old('harga')}}">
            </div>     
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="stock">Stock Mobil</label> @error('stock')<span class="text-danger">{{$message}}</span>@enderror 
                <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror" id="stock" placeholder="Stock Mobil" value="{{old('stock')}}">
            </div>
        </div>
    </div>
    </div>
    <button type="submit" class="btn btn-dark">Insert</button>
</form>
@endsection