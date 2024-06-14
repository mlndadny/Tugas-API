<?php $__env->startSection('title', 'Form Add Movies'); ?>
<?php $__env->startSection('artikel'); ?>
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Genre</label>
                    <select name="genre" class="form-control">
                        <option value="0">--Pilih Genre--</option>
                        <option value="Action">Action</option>
                        <option value="Horror">Horror</option>
                        <option value="Thriller">Thriller</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Crime">Crime</option>
                        <option value="Romance">Romance</option>
                        <option value="Anime">Anime</option>
                        <option value="Drakor">Drakor</option>
                    </select>

                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input type="number" min="1900" max="2100" name="year" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Poster</label>
                    <input type="file" accept="image/*" name="poster" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelbaru\movieapp\resources\views/formadd.blade.php ENDPATH**/ ?>