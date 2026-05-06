<!DOCTYPE html>
<html>
<head><title>Tambah Produk</title></head>
<body>
    <h2>Form Tambah Produk</h2>
    <form action="/produk/simpan" method="POST">
        @csrf <p>
            <label>Nama Produk:</label><br>
            <input type="text" name="name" required>
        </p>
        <p>
            <label>Harga:</label><br>
            <input type="number" name="price" required>
        </p>
        <button type="submit">Simpan Produk</button>
    </form>
</body>
</html>