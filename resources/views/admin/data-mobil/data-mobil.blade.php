@extends('admin.layouts.template-admin')
@section('name', 'Data Mobil')
@section('content')
@if (session()->has('success'))
<div class="py-2">
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ session()->get('success') }}</strong>
    </div>
</div>
@endif
@if (session()->has('delete'))
<div class="py-2">
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ session()->get('delete') }}</strong>
    </div>
</div>
@endif
<a href="{{ route('admin.data-mobil-insert') }}" class="btn btn-dark btn-sm mb-3">Insert Data Mobil</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Mobil</th>
        <th scope="col">Harga Mobil</th>
        <th scope="col">Stock</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($dataMobil as $key => $item)
        <tr>
            <th scope="row">{{ $key + $dataMobil->firstItem() }}</th>
            <td>{{ $item->nama }}</td>
            <td>Rp {{ number_format($item->harga) }}</td>
            <td>{{ $item->stock }}</td>
            <td style="display: flex">
                <a href="{{url('admin/data-mobil/edit-data-mobil/'.$item->id)}}" class="btn btn-primary btn-sm mr-1">Edit</a>
                <a href="{{url('admin/data-mobil/delete/'.$item->id)}}" class="btn btn-danger btn-sm mr-1">Delete</a>
            </td>
            @empty
            <td colspan="5" class="text-center">
                <strong>Tidak ada Mobil yang tersedia</strong>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection