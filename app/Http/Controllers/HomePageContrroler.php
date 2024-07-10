<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class HomePageContrroler extends Controller
{
    public function daftarKursus()
    {
        return view('kursus.daftarKursus',[
            'kursus' => Kursus::all()
        ]);
    }
    public function detailKursus(Kursus $kursu)
    {



        // dd($kursu);
        return view('kursus.detailKursua',[
            'kursus' => $kursu
        ]);
    }

    protected $subscriptions = [
        [
            'id' => 1,
            'name' => 'Paket Basic',
            'price' => 100000,
            'duration' => '1 bulan',
            'features' => [
                'Akses konten dasar',
                'Support email',
            ],
        ],
        [
            'id' => 2,
            'name' => 'Paket Premium',
            'price' => 200000,
            'duration' => '3 bulan',
            'features' => [
                'Akses semua konten',
                'Support prioritas',
                'Akses webinar eksklusif',
            ],
        ],
        [
            'id' => 3,
            'name' => 'Paket Ultimate',
            'price' => 300000,
            'duration' => '6 bulan',
            'features' => [
                'Akses semua konten',
                'Support prioritas',
                'Akses webinar eksklusif',
                'Akses kursus tambahan',
            ],
        ],
    ];
    public function langganan()
    {

        $subscriptions = $this->subscriptions;
        return view('kursus.langganan', compact('subscriptions'));
    }
    public function checkout($id)
    {
        $subscription = collect($this->subscriptions)->firstWhere('id', $id);

        if (!$subscription) {
            abort(404);
        }

        return view('kursus.checkout', compact('subscription'));
    }
}
