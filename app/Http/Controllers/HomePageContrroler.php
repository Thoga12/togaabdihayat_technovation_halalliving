<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\ModulKursus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // $course = $kursu->load(['modules', 'quizzes']);
        $kursus = $kursu->load(['modules', 'quizzes']);
        return view('kursus.detailKursua', compact('kursus'));
        // return view('kursus.detailKursua',[
        //     'kursus' => $kursu,
        //     'course' => $kursu->load(['modules'])
        // ]);
    }
    public function modul(Kursus $kursu, ModulKursus $modul_kursu)
    {
        $user = Auth::user();
        // dd($user);

        // dd($kursu, $modul_kursu);
        if (!$user->hasActiveSubscription()) {
            // Jika pengguna tidak memiliki langganan aktif, arahkan mereka ke halaman lain atau tampilkan pesan
            return redirect()->route('langganan')->with('error', 'Anda harus memiliki langganan aktif untuk mengakses modul ini.');
        }
        return view('kursus.modul',[
            'modul' => $modul_kursu,
            'moduls' => ModulKursus::all(),
            'course' => $kursu
        ]);
    }
    public function checkSubscription($userId)
    {
        $user = User::find($userId);

        if ($user->hasActiveSubscription()) {
            return response()->json(['status' => 'active']);
        } else {
            return response()->json(['status' => 'inactive']);
        }
    }
    // public function modul(Kursus $kursu, ModulKursus $modul_kursu)
    // {
    //     $course = $kursu->load(['modules', 'quizzes']);
    //     return view('kursus.modul', compact('course'));
    // }


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
