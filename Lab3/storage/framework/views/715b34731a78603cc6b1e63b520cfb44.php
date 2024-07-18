<?php $__env->startSection('title', 'Trang Thêm Mới'); ?>

<?php $__env->startSection('content'); ?>
<h1>Cập Nhật Sách</h1>
    <form action="<?php echo e(route('book.update', $book->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input type="hidden" name="id" value="<?php echo e($book->id); ?>">
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="" value="<?php echo e($book->title); ?>">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">URL thumbnail</label>
            <input type="text" name="thumbnail" class="form-control" id="" value="<?php echo e($book->thumbnail); ?>">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" id="" value="<?php echo e($book->author); ?>">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">publisher</label>
            <input type="text" name="publisher" class="form-control" id="" value="<?php echo e($book->publisher); ?>">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Publication</label>
            <input type="date" name="Publication" class="form-control" id="" value="<?php echo e($book->Publication); ?>">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" step="0.1" name="price" class="form-control" id="" value="<?php echo e($book->price); ?>">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="" value="<?php echo e($book->Quantity); ?>">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <select name="category_id" id="" class="form-control">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cate->id); ?>"
                            <?php if($cate->id === $book->Category_id): ?>
                                selected
                            <?php endif; ?>>
                            <?php echo e($cate->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="mb-3">
                <button type="submit" class="btn btn-success">Add New</button>
                <a href="<?php echo e(route('book.index')); ?>" class="btn btn-warning">List</a>
          </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('books.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php3_exam\php3_lab\resources\views/books/edit.blade.php ENDPATH**/ ?>