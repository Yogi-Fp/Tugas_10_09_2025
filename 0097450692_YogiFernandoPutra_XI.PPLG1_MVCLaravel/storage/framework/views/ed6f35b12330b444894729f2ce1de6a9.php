<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-body">
                <h1 class="text-center mb-4 text-primary">
                    <i class="bi bi-box-seam"></i> Daftar Produk
                </h1>

                <div class="d-flex justify-content-end mb-3">
                    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Tambah Produk
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle table-striped">
                        <thead class="table-primary">
                            <tr class="text-center">
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="fw-semibold"><?php echo e($product->name); ?></td>
                                    <td><?php echo e('Rp ' . number_format($product->price, 0, ',', '.')); ?></td>
                                    <td><?php echo e($product->description); ?></td>
                                    <td>
                                        <?php if($product->stock > 10): ?>
                                            <span class="badge bg-success"><?php echo e($product->stock); ?></span>
                                        <?php elseif($product->stock > 0): ?>
                                            <span class="badge bg-warning text-dark"><?php echo e($product->stock); ?></span>
                                        <?php else: ?>
                                            <span class="badge bg-danger">Habis</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-warning btn-sm me-1">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH /home/yogi/modul5/resources/views/products/index.blade.php ENDPATH**/ ?>