@extends('admin.layouts.template-admin')
@section('name', 'Insert Manual Orders')
@section('content')
<form id="quickForm" action="{{route('admin.manual-orders-insert')}}" method="POST">
    @csrf
    <input type="hidden" name="status_id" value="2">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
              <label for="name">Nama Pembeli</label> @error('name')<span class="text-danger">{{$message}}</span>@enderror 
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Pembeli" value="{{old('name')}}">
            </div>     
        </div>
        <div class="col-sm-3">
            <div class="form-group">
              <label for="email">Email Pembeli</label> @error('email')<span class="text-danger">{{$message}}</span>@enderror 
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email Pembeli" value="{{old('email')}}">
            </div>     
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="no_hp">Nomor Telepon Pembeli</label> @error('no_hp')<span class="text-danger">{{$message}}</span>@enderror 
                <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Nomor Telepon Pembeli" value="{{old('no_hp')}}">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="data_mobil_id">Mobil yang dibeli</label> @error('data_mobil_id')<span class="text-danger">{{$message}}</span>@enderror 
                <select id="data_mobil_id" class="form-control select2bs4 @error('data_mobil_id') is-invalid @enderror" name="data_mobil_id">
                    <option holder>Pilih Mobil</option>                  
                    @foreach ($dataMobil as $item)
                      <option value="{{ $item->id }}">
                        {{ $item->nama }}
                      </option>
                    @endforeach
                  </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="address">Alamat Pembeli</label> @error('address')<span class="text-danger">{{$message}}</span>@enderror
        <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="2" placeholder="Alamat Pembeli..." value="{{old('address')}}"></textarea>
    </div>
    </div>
    <button type="submit" class="btn btn-dark">Insert</button>
</form>
@endsection