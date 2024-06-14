<?php $__env->startSection('title', 'Form Add Movies'); ?>
<?php $__env->startSection('artikel'); ?>
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>nama</label>
                    <input type="text" name="nama" class="form-control" required></div>
                    <div class="form-group">
                        <label>jenis_ps</label>
                        <select name="jenis_ps" class="form-control">
                            <option value="0">--Pilih jenis_ps--</option>
                            <option value="PS_4">PS_4</option>
                            <option value="PS_5">PS_5</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label>tanggal_sewa</label>
                        <input type="number" min="0" max="31" name="tanggal_sewa" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label>KTP</label>
                        <input type="file" accept="image/*" name="poster" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\Z_MEME\resources\views/formadd.blade.php ENDPATH**/ ?>