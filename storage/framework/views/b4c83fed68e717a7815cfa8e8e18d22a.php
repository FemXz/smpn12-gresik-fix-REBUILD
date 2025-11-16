<?php $__env->startSection("title", "Kelola Guru & Staff - Admin SMPN 12 Gresik"); ?>

<?php $__env->startSection("content"); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3">Kelola Guru & Staff</h1>
                <a href="<?php echo e(route("admin.teachers.create")); ?>" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i> Tambah Guru/Staff
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php if(session("success")): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session("success")); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if($teachers->isEmpty()): ?>
                        <div class="alert alert-info text-center" role="alert">
                            <i class="fas fa-info-circle me-2"></i> Belum ada data guru atau staff yang ditambahkan.
                            <br>
                            <a href="<?php echo e(route("admin.teachers.create")); ?>" class="btn btn-sm btn-info mt-3">
                                <i class="fas fa-plus me-2"></i> Tambah Guru/Staff Pertama
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle" id="teachersTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Jabatan</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Pendidikan</th>
                                        <th>Level Karier</th>
                                        <th>Pengalaman</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Urutan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($index + 1); ?></td>
                                            <td>
                                                <?php if($teacher->photo): ?>
                                                    <img src="<?php echo e(asset('storage/' . $teacher->photo)); ?>" alt="<?php echo e($teacher->name); ?>" class="img-thumbnail rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                                <?php else: ?>
                                                    <i class="fas fa-user-circle fa-3x text-muted"></i>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($teacher->name); ?></td>
                                            <td><?php echo e($teacher->nip ?? '-'); ?></td>
                                            <td><?php echo e($teacher->position); ?></td>
                                            <td><?php echo e($teacher->subject ?? '-'); ?></td>
                                            <td><?php echo e($teacher->education ?? '-'); ?></td>
                                            <td><?php echo e($teacher->career_level ?? '-'); ?></td>
                                            <td><?php echo e($teacher->experience ?? '-'); ?></td>
                                            <td><?php echo e($teacher->email ?? '-'); ?></td>
                                            <td>
                                                <?php if($teacher->status === 'active'): ?>
                                                    <span class="badge bg-success">Aktif</span>
                                                <?php else: ?>
                                                    <span class="badge bg-secondary">Nonaktif</span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($teacher->order ?? '-'); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.teachers.edit', $teacher)); ?>" class="btn btn-sm btn-warning me-2" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="<?php echo e(route('admin.teachers.destroy', $teacher)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data guru ini?');">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush("scripts"); ?>
<script>
    $(document).ready(function() {
        // Uncomment ini kalau mau pakai DataTables:
        // $("#teachersTable").DataTable();
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make("admin.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\laragon\www\smpn12-gresik-website\resources\views/admin/teachers/index.blade.php ENDPATH**/ ?>