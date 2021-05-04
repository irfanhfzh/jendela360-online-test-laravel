@extends('layouts.template-index')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Mobil</th>
        <th scope="col">Harga Mobil</th>
        <th scope="col">Stock</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($dataMobil as $key => $item)
        <tr>
            <th scope="row">{{ $key + $dataMobil->firstItem() }}</th>
            <td>{{ $item->nama }}</td>
            <td>Rp {{ number_format($item->harga) }}</td>
            <td>{{ $item->stock }}</td>
            @empty
            <td colspan="5" class="text-center">
                <strong>Tidak ada Mobil yang tersedia</strong>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection