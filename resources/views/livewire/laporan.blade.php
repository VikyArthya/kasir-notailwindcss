<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border-primary">
                    <div class="card-body">
                        <h4 class="card-title">Laporan Transaksi</h4>
                        <a href="{{ url('/cetak') }}" target="_blank">Cetak</a>
                        <table class="table table border">
                            <thead>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>No Invoice</th>
                                <th>Total</th>
                                <th>Aksi</th>

                            </thead>
                            <tbody>
                                @foreach ($semuaTransaksi as $transaksi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $transaksi->created_at }}</td>
                                        <td>{{ $transaksi->kode }}</td>
                                        <td>Rp. {{ number_format($transaksi->total, 2, '.', ',') }}</td>
                                        <td><button wire:click="pilihMenu('lihat')">Show</button></td>
                                    </tr>
                                @endforeach

                                @if ($pilihanMenu == 'lihat')
                                    <div class="card border-primary">
                                        <div class="card-header">
                                            Semua transaksi
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>No Invoce</th>
                                                    <th>Total</th>
                                                    <th>Jumlah</th>
                                                    <th>Nama</th>

                                                </thead>
                                                <tbody>
                                                    @foreach ($semuaTransaksi as $transaksi)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $transaksi->created_at }}</td>
                                                            <td>{{ $transaksi->kode }}</td>
                                                            <td>{{ $transaksi->total }}</td>
                                                            <td>{{ $transaksi->detilTransaksi[0]->jumlah }}</td>
                                                            <td>{{ $transaksi->detilTransaksi[0]->produk->nama }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
