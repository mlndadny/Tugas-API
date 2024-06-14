<?php $__env->startSection('title', "Movies"); ?>
<?php $__env->startSection('artikel'); ?>
    <div class="card">
        <div class="card-header">
            <a href="/pet/form-add" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i> PET</a>
        </div>
        <div class="card-body">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Year</th>
                        <th>Photo</th>
                        <th>Actions</th> <!-- Tambahkan kolom untuk Actions -->
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $mv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($idx + 1); ?></td>
                        <td><?php echo e($m->nama); ?></td>
                        <td><?php echo e($m->gender); ?></td>
                        <td><?php echo e($m->year); ?></td>
                        <td>
                            <img src="<?php echo e(asset('/storage/'.$m->photo)); ?>" alt="<?php echo e($m->photo); ?>" height="80" width="80">
                        </td>
                        <td>
                            <a href="/form-edit/<?php echo e($m->id); ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete/<?php echo e($m->id); ?>" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\movieapp\resources\views/movies.blade.php ENDPATH**/ ?>