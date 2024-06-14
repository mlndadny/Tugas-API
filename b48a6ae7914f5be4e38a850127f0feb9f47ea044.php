<?php $__env->startSection('title', 'Form Edit Movies'); ?>
<?php $__env->startSection('artikel'); ?>
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/update/<?php echo e($mv->id); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo e($mv->nama); ?>" required>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option value="0">--Pilih Gender--</option>
                        <option value="Jantan" <?php echo e(($mv->gender == "Jantan") ? "selected":""); ?>>Jantan</option>
                        <option value="Betina" <?php echo e(($mv->gender == "Betina") ? "selected":""); ?>>Betina</option>
                    </select>

                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input type="number" min="1900" max="2100" name="year" value="<?php echo e($mv->year); ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>photo</label>
                    <input type="file" accept="image/*" name="photo" class="form-control-file">
                </div>

                <div class="form-group">
                    <img src="<?php echo e(asset('/storage/'.$mv->photo)); ?>" alt="<?php echo e($mv->photo); ?>" height="80" witdh="80">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\movieapp\resources\views/formedit.blade.php ENDPATH**/ ?>