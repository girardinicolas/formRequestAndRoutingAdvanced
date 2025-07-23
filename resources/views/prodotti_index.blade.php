<!-- resources/views/prodotti_index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Elenco Prodotti</title>
</head>
<body>
    <h1>Elenco Prodotti</h1>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Prezzo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($prodotti as $prodotto)
                <tr>
                    <td>{{ $prodotto->nome }}</td>
                    <td>{{ $prodotto->descrizione }}</td>
                    <td>{{ number_format($prodotto->prezzo, 2, ',', '.') }} €</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nessun prodotto inserito.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html> 