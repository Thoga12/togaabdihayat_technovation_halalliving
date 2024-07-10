@extends('partials.main')

@section('title', 'Langganan Page')
@section('body')
    <section class="title-daftar-kursus">
        <h1>Langganan</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ratione minus similique!</p>
    </section>

    <section class="container-langganan">
        <div class="card-langganan">
            @foreach ($subscriptions as $paket)
                {{-- @php
                    $subscription = collect($subscriptions)->firstWhere('id', $transaction->subscription_id);
                @endphp --}}
                <div class="card-harga-langganan">
                    <h3>{{ $paket['name'] }} ({{ $paket['duration'] }})</h3>
                    {{-- <h5>Rp. {{ $paket['price'] }}</h5> --}}
                    <h5>Harga: Rp {{ number_format($paket['price'], 0, ',', '.') }}</h5>
                    <aside>
                        <a href="{{ route('transactions.create', $paket['id']) }}">Pilih Paket</a>
                    </aside>
                </div>
            @endforeach
            {{-- <div class="card-harga-langganan">
                <h3>Langganan 3 Bulan (90 hari)</h3>
                <h5>Rp. 1000.000</h5>
                <aside>
                    <a href="">Pilih Paket</a>
                </aside>
            </div> --}}
        </div>
    </section>
</section>
@endsection
