@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4">Histori Donasi</h1>

    <!-- Tabs untuk Donasi Tunai dan Donasi Makanan -->
    <ul class="nav nav-tabs" id="donasiTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tunai-tab" data-bs-toggle="tab" data-bs-target="#tunai" type="button" role="tab" aria-controls="tunai" aria-selected="true">Donasi Tunai</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="makanan-tab" data-bs-toggle="tab" data-bs-target="#makanan" type="button" role="tab" aria-controls="makanan" aria-selected="false">Donasi Makanan</button>
        </li>
    </ul>

    <!-- Content Tabs -->
    <div class="tab-content mt-4" id="donasiTabsContent">
        <!-- Donasi Tunai -->
        <div class="tab-pane fade show active" id="tunai" role="tabpanel" aria-labelledby="tunai-tab">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-success">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Pesan</th>
                            <th>Jumlah Donasi</th>
                            <th>Opsi Pembayaran</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($donasiTunai as $donasi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $donasi->nama }}</td>
                            <td>{{ $donasi->pesan }}</td>
                            <td>Rp {{ number_format($donasi->jumlah_donasi, 0, ',', '.') }}</td>
                            <td>{{ $donasi->opsi_pembayaran }}</td>
                            <td>{{ $donasi->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada donasi tunai.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Donasi Makanan -->
        <div class="tab-pane fade" id="makanan" role="tabpanel" aria-labelledby="makanan-tab">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nama Makanan</th>
                            <th>Jenis Makanan</th>
                            <th>Opsi Pengiriman</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($donasiMakanan as $donasi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $donasi->nama }}</td>
                            <td>{{ $donasi->alamat }}</td>
                            <td>{{ $donasi->nama_makanan }}</td>
                            <td>{{ $donasi->jenis_makanan }}</td>
                            <td>{{ $donasi->opsi_pengiriman }}</td>
                            <td>{{ $donasi->pesan }}</td>
                            <td>{{ $donasi->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">Belum ada donasi makanan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
