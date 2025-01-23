<?php

namespace App\Livewire;

use App\Models\DetilTransaksi;
use App\Models\Transaksi;

use Livewire\Component;

class Laporan extends Component

{

    public $pilihanMenu = 'tutup';

    public function pilihMenu(){
        if($this->pilihanMenu == 'lihat'){
            $this->pilihanMenu = 'tutup';
        }else{
            $this->pilihanMenu ='lihat';
        }
    }
    public function render()
    {


        // $semuaTransaksi = Transaksi::where('status', 'selesai')->with('produk')->get();
        // return view('livewire.laporan')->with([
        //     'semuaTransaksi' => $semuaTransaksi
        // ]);
        $semuaTransaksi = Transaksi::with('detilTransaksi')->where('status', 'selesai')->get();
        return view('livewire.Laporan')->with([
            'semuaTransaksi' => $semuaTransaksi
        ]);

    }


}