<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-lg border-0 rounded-3">
          <div class="card-header bg-warning text-dark text-center py-3">
            <h3 class="mb-0"><i class="bi bi-pencil-square"></i> Edit Produk</h3>
          </div>
          <div class="card-body p-4">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label class="form-label fw-semibold">Nama Produk</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Harga</label>
                <div class="input-group">
                  <span class="input-group-text">Rp</span>
                  <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Deskripsi</label>
                <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Stok</label>
                <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
              </div>
              <div class="d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                  <i class="bi bi-arrow-left"></i> Batal
                </a>
                <button type="submit" class="btn btn-warning text-dark">
                  <i class="bi bi-save"></i> Update
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
