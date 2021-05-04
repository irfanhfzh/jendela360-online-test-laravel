@extends('admin.layouts.template-admin')
@section('name', 'Manual Orders')
@section('content')
<a class="btn btn-dark btn-sm mb-2" href="{{ route('admin.manual-orders-insert') }}">Insert Manual Orders</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Status Pembayaran</th>
        <th scope="col">Nama Pembeli</th>
        <th scope="col">Email Pembeli</th>
        <th scope="col">Nomor Telepon Pembeli</th>
        <th scope="col">Alamat Pembeli</th>
        <th scope="col">Mobil yang dibeli</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($manualOrders as $key => $item)
        <tr>
            <th scope="row">{{ $key + $manualOrders->firstItem() }}</th>
            <td>{{ $item->status->status }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->no_hp }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->dataMobil->nama }}</td>
            <td style="display: flex">
                <a href="{{url('admin/manual-orders/edit-manual-orders/'.$item->id)}}" class="btn btn-primary btn-sm mr-1">Edit</a>
                <a href="{{url('admin/manual-orders/delete/'.$item->id)}}" class="btn btn-danger btn-sm mr-1">Delete</a>
            </td>
            @empty
            <td colspan="7" class="text-center">
                <strong>Tidak ada Order yang masuk</strong>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection