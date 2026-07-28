<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Neue Zahlung</title>
</head>
<body>

<h2>Neue Zahlung erhalten</h2>

<p><strong>Kunde :</strong>
    {{ $order->first_name }} {{ $order->last_name }}
</p>

<p><strong>Produkt :</strong>
    {{ optional($order->items->first()?->product)->name }}
</p>

<p><strong>Menge :</strong>
    {{ $order->items->sum('quantity') }}
</p>

<p><strong>Betrag :</strong>
    {{ number_format($order->total, 2, ',', '.') }} €
</p>

<p>
    Der Zahlungsnachweis befindet sich im Anhang dieser E-Mail.
</p>

</body>
</html>