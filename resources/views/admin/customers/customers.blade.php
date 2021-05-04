@extends('admin.layouts.template-admin')
@section('name', 'Customers')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Nomor Telepon</th>
        <th scope="col">Alamat</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($dataCustomers as $key => $item)
        <tr>
            <th scope="row">{{ $key + $dataCustomers->firstItem() }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->no_hp }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->email }}</td>
            <td style="display: flex">
                <a href="{{url('admin/product/edit-product/'.$item->id)}}" class="btn btn-primary btn-sm mr-1">Edit</a>
                <a href="{{url('admin/product/edit-product/'.$item->id)}}" class="btn btn-danger btn-sm mr-1">Delete</a>
            </td>
            @empty
            <td colspan="5" class="text-center">
                <strong>Tidak ada Orders yang masuk</strong>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection