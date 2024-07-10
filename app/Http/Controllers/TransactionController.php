<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::id())->get();
        $subscriptions = $this->subscriptions;

        return view('kursus.langganan', compact('transactions', 'subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($subscriptionId)
    {
        // return view('kursus.checkout');
        $subscription = collect($this->subscriptions)->firstWhere('id', $subscriptionId);

        if (!$subscription) {
            abort(404);
        }

        return view('kursus.checkout', compact('subscription'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $subscriptionId)
    {
        $subscription = collect($this->subscriptions)->firstWhere('id', $subscriptionId);

        if (!$subscription) {
            abort(404);
        }

        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->subscription_id = $subscriptionId;
        $transaction->amount = $subscription['price'];
        $transaction->status = 'completed';
        $transaction->save();

        return redirect()->route('langganan')->with('success', 'Transaction simulated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
