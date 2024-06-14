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
                        <label>gender</label>
                        <select name="gender" class="form-control">
                            <option value="0">--Pilih gender--</option>
                            <option value="Jantan">Jantan</option>
                            <option value="Betina">Betina</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label>Year</label>
                        <input type="number" min="1900" max="2100" name="year" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label>photo</label>
                        <input type="file" accept="image/*" name="photo" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\movieapp\resources\views/formadd.blade.php ENDPATH**/ ?>