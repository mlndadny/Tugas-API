<?php $__env->startSection('title', "Form Ubah Password"); ?>
<?php $__env->startSection('artikel'); ?>
    <form action="/updateuser" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Password Lama</label>
            <input type="password" name="password_lama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password Baru</label>
            <input type="password" name="password_baru" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Konfirmasi Password Baru</label>
            <input type="password" name="password_baru_confirmation" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\Z_MEME\resources\views/edituser.blade.php ENDPATH**/ ?>