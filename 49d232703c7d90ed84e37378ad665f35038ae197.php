<?php $__env->startSection('title', "Movies"); ?>
<?php $__env->startSection('artikel'); ?>
    <div class="card">
        <div class="card-header">
            <a href="/rental/form-add" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i> rental</a>
        </div>
        <div class="card-body">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis_ps</th>
                        <th>Tanggal_sewa</th>
                        <th>KTP</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $mv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($idx + 1); ?></td>
                        <td><?php echo e($m->nama); ?></td>
                        <td><?php echo e($m->jenis_ps); ?></td>
                        <td><?php echo e($m->tanggal_sewa); ?></td>
                        <td>
                            <img src="<?php echo e(asset('/storage/'.$m->poster)); ?>" alt="<?php echo e($m->poster); ?>" height="80" width="80">
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Z_MEME\resources\views/movies.blade.php ENDPATH**/ ?>