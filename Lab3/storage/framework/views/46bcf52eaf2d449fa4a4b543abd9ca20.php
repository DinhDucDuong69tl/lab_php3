<?php $__env->startSection('title', 'Trang hiển thị sách'); ?>

<?php $__env->startSection('content'); ?>
<h1>Danh Sách</h1>
    <div class="d-flex justify-content-end">
        <a href="<?php echo e(route('book.create')); ?>" class="btn btn-success">Create NEW</a>
    </div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">title</th>
        <th scope="col">thumbnail</th>
        <th scope="col">author</th>
        <th  scope="col">publisher</th>
        <th  scope="col">publication</th>
        <th  scope="col">price</th>
        <th  scope="col">quantity</th>
        <th  scope="col">category_id</th>
        <th>Thao Tác</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($book->id); ?></th>
            <td><?php echo e($book->title); ?></td>
            <td>
                <img src="<?php echo e($book->thumbnail); ?>" alt="" width="70px" height="70px">
            </td>
            <td><?php echo e($book->author); ?></td>
            <td><?php echo e($book->publisher); ?></td>
            <td><?php echo e($book->Publication); ?></td>
            <td><?php echo e($book->price); ?></td>
            <td><?php echo e($book->Quantity); ?></td>
            <td><?php echo e($book->Category_id); ?></td>
            <td>
                <a href="<?php echo e(route('book.edit', $book->id)); ?>" class="btn btn-warning">Edit</a> | 
                <form action="<?php echo e(route('book.destroy', $book->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Delete</button>
                </form>
             
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
      
    </tbody>
  </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('books.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php3_exam\php3_lab\resources\views/books/index.blade.php ENDPATH**/ ?>