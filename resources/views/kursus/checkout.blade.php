<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="nav-checkout">
        <div class="back">
            <a href="{{ route('langganan') }}">Kembali</a>
        </div>
    </header>
    <main>
        <section class="checkout">
            <h1>Pembayaran Untuk Paket Langganan</h1>
            <form action="{{ route('transactions.store',  $subscription['id']) }}" method="POST">
                @csrf
                <div class="detail-checkout">
                    <h5>Harga Langganan</h5>
                    <aside>
                        <p>{{ $subscription['name'] }} ({{ $subscription['duration'] }})</p>
                        <p>Rp. {{ number_format($subscription['price'], 0, ',', '.') }}</p>
                        <input type="hidden" value="">
                    </aside>
                    <div class="metode-pembayaran">
                        <select name="pembayaran" id="pembayaran">
                            <option value="BRI">BRI</option>
                            <option value="BCA">BCA</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="DANA">DANA</option>
                            <option value="Bank Syariah">Bank Syariah</option>
                        </select>
                    </div>
                    <div class="footer-checkout">
                        <h5>Jumlah Harga</h5>
                        <aside>
                            <p>Rp. {{ number_format($subscription['price'], 0, ',', '.') }}</p>
                            <button type="submit">Bayar</button>
                        </aside>
                    </div>
                </div>

            </form>
        </section>
    </main>
</body>
</html>
