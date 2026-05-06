<!DOCTYPE html>
<html>
<head><title>Edit Produk</title></head>
<body>
    <h2>Form Edit Produk</h2>
    <form action="/produk/update/{{ $product->id }}" method="POST">
        @csrf
        <p>
            <label>Nama Produk:</label><br>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </p>
        <p>
            <label>Harga:</label><br>
            <input type="number" name="price" value="{{ $product->price }}" required>
        </p>
        <button type="submit">Update Produk</button>
    </form>
</body>
</html>