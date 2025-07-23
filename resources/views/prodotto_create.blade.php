<!-- resources/views/prodotto_create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Nuovo Prodotto</title>
</head>
<body>
    <h1>Inserisci un nuovo prodotto</h1>
    <form action="{{ route('prodotti.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required value="{{ old('nome') }}">
            @error('nome')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="descrizione">Descrizione:</label>
            <textarea id="descrizione" name="descrizione" required>{{ old('descrizione') }}</textarea>
            @error('descrizione')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="prezzo">Prezzo:</label>
            <input type="number" id="prezzo" name="prezzo" step="0.01" required value="{{ old('prezzo') }}">
            @error('prezzo')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Salva Prodotto</button>
    </form>
</body>
</html> 