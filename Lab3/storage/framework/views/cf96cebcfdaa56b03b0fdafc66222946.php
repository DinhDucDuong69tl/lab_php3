

<?php $__env->startSection('title', 'Trang hiển thị sách'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Danh sách 8 sản phấm có giá cao nhất</h2>
    <hr>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Mã sách</th>
            <th scope="col">Tiêu đề sách</th>
            <th scope="col">ảnh mô tả</th>
            <th scope="col">Tác giả</th>
            <th scope="col">Nhà xuất bản</th>
            <th scope="col">Ngày xuất bản</th>
            <th scope="col">Giá bán</th>
            <th scope="col">Số lượng</th>
            <th scope="col">loại</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $topBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="">
                <tr>
                    <th scope="row"><?php echo e($key + 1); ?></th>
                    <td><?php echo e($book->title); ?></td>
                    <td><img src="<?php echo e($book->thumbnail); ?>" alt="" width="60px" height="60px"></td>
                    <td><?php echo e($book->author); ?></td>
                    <td><?php echo e($book->publisher); ?></td>
                    <td><?php echo e($book->Publication); ?></td>
                    <td><?php echo e($book->price); ?>$</td>
                    <td><?php echo e($book->Quantity); ?></td>
                    <td><?php echo e($book->name); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </tbody>
      </table>

      <h2>Danh sách 8 sản phấm có giá Thấp Nhất</h2>
      <hr>
  
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Mã sách</th>
              <th scope="col">Tiêu đề sách</th>
              <th scope="col">ảnh mô tả</th>
              <th scope="col">Tác giả</th>
              <th scope="col">Nhà xuất bản</th>
              <th scope="col">Ngày xuất bản</th>
              <th scope="col">Giá bán</th>
              <th scope="col">Số lượng</th>
              <th scope="col">loại</th>
            </tr>
          </thead>
          <tbody>
              <?php $__currentLoopData = $lowBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $book1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="">
                  <tr>
                      <th scope="row"><?php echo e($key + 1); ?></th>
                      <td><?php echo e($book1->title); ?></td>
                      <td><img src="<?php echo e($book1->thumbnail); ?>" alt="" width="60px" height="60px"></td>
                      <td><?php echo e($book1->author); ?></td>
                      <td><?php echo e($book1->publisher); ?></td>
                      <td><?php echo e($book1->Publication); ?></td>
                      <td><?php echo e($book1->price); ?>$</td>
                      <td><?php echo e($book1->Quantity); ?></td>
                      <td><?php echo e($book1->name); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </tbody>
        </table>

</div>
        
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php3_exam\php3_lab\resources\views/booksPrice.blade.php ENDPATH**/ ?>