<?php $__env->startSection('title'); ?>
Produk
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="home"></i></div>
                                Produk
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-header-actions mb-4">
                        <div class="card-header">
                            List Produk
                            <a class="btn btn-sm btn-primary" href="<?php echo e(route('department.create')); ?>" data-bs-toggle="modal"
                                data-bs-target="#createModal">
                                Tambah Data
                            </a>
                        </div>
                        <div class="card-body">
                            
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>
                            
                            <div class="table-responsive">

                            <table class="table table-striped table-hover table-sm" id="crudTable">
                                <thead>
                                    <tr class="align-middle">
                                        <th width="10">No.</th>
                                        <th>Nama Produk</th>
                                        <th>Kode Dokumen</th>
                                        <th>Kode Produk Bahan</th>
                                        <th>Kode Produk Jadi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <div class="modal fade" id="createModal" role="dialog" aria-labelledby="createModal" aria-hidden="true"
        style="overflow:hidden;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModal">Tambah Data Departemen</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(route('department.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="post_id">Nama Produk</label>
                                <input type="text" name="name" id="produk" class="form-control"
                                    placeholder="Masukan Nama Produk.." required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="post_id">Kode Dokumen</label>
                                <input type="text" name="kode_dokumen" class="form-control" placeholder="Masukan Kode"
                                    required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="post_id">Kode Produk Bahan</label>
                                <input type="text" name="kode_bahan" class="form-control" placeholder="Masukan Kode"
                                    required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="post_id">Kode Produk Jadi</label>
                                <input type="text" name="kode_jadi" class="form-control" placeholder="Masukan Kode"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $id = $item->id;
            $name = $item->name;
            $kode_dokumen = $item->kode_dokumen;
            $kode_bahan = $item->kode_bahan;
            $kode_jadi = $item->kode_jadi;
        ?>
        <div class="modal fade" id="updateModal<?php echo e($id); ?>" role="dialog" aria-labelledby="createModal"
            aria-hidden="true" style="overflow:hidden;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModal<?php echo e($id); ?>">Ubah Data</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?php echo e(route('department.update', $item->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <label for="post_id">Nama Produk</label>
                                    <input type="text" name="name" value="<?php echo e($name); ?>"
                                        class="form-control" placeholder="Masukan Nama Produk.." required>
                                </div>
                                <div class="col-md-12">
                                    <label for="post_id">Kode Dokumen</label>
                                    <input type="text" name="kode_dokumen" value="<?php echo e($kode_dokumen); ?>"
                                        class="form-control" placeholder="kode" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="post_id">Kode Bahan</label>
                                    <input type="text" name="kode_bahan" value="<?php echo e($kode_bahan); ?>"
                                        class="form-control" placeholder="kode" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="post_id">Kode Jadi</label>
                                    <input type="text" name="kode_jadi" value="<?php echo e($kode_jadi); ?>"
                                        class="form-control" placeholder="kode" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-primary" type="submit">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('addon-script'); ?>
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '<?php echo url()->current(); ?>',
            },
            columns: [{
                    "data": 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'kode_dokumen',
                    name: 'kode_dokumen'
                },
                {
                    data: 'kode_bahan',
                    name: 'kode_bahan'
                },
                {
                    data: 'kode_jadi',
                    name: 'kode_jadi'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        });
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('#crudTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "<?php echo e(route('department.index')); ?>",
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'name', name: 'name' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });

        function deleteConfirmation(url) {
            if (confirm("Apakah Anda yakin akan menghapus item ini dari situs Anda?")) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                    },
                    success: function(data) {
                        alert(data.success);
                        $('#department-table').DataTable().ajax.reload();
                    },
                    error: function() {
                        alert('Terjadi kesalahan. Silakan coba lagi.');
                    }
                });
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Documents\surat-app\resources\views/pages/admin/department/index.blade.php ENDPATH**/ ?>