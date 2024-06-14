<?php $__env->startSection('title', "Movies"); ?>
<?php $__env->startSection('artikel'); ?>
    <div class="card">
        <div class="card-header">
            <a href="/movies/form-add" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i> Movies</a>
        </div>
        <div class="card-body"><table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Poster</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
            <tr>
                <td><?php echo e($idx + 1); ?></td>
                <td><?php echo e($m-> title); ?></td>
                <td><?php echo e($m -> genre); ?></td>
                <td><?php echo e($m -> year); ?></td>
                <td><?php echo e($m -> poster); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        
    </table></div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelbaru\movieapp\resources\views/movies.blade.php ENDPATH**/ ?>