<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Produk</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-lg border-0 rounded-3">
          <div class="card-header bg-primary text-white text-center py-3">
            <h3 class="mb-0"><i class="bi bi-plus-circle"></i> Tambah Produk</h3>
          </div>
          <div class="card-body p-4">
            <form action="<?php echo e(route('products.store')); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <div class="mb-3">
                <label class="form-label fw-semibold">Nama Produk</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama produk" required>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Harga</label>
                <div class="input-group">
                  <span class="input-group-text">Rp</span>
                  <input type="number" name="price" class="form-control" placeholder="Masukkan harga" required>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Deskripsi</label>
                <textarea name="description" class="form-control" rows="3" placeholder="Masukkan deskripsi produk"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Stok</label>
                <input type="number" name="stock" class="form-control" placeholder="Masukkan jumlah stok" required>
              </div>
              <div class="d-flex justify-content-between">
                <a href="<?php echo e(route('products.index')); ?>" class="btn btn-secondary">
                  <i class="bi bi-arrow-left"></i> Batal
                </a>
                <button type="submit" class="btn btn-success">
                  <i class="bi bi-save"></i> Simpan
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
<?php /**PATH /home/yogi/modul5/resources/views/products/create.blade.php ENDPATH**/ ?>