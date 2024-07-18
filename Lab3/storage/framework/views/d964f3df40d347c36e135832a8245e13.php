
    

    <?php $__env->startSection('title', 'Trang hiển thị'); ?>
    
    <?php $__env->startSection('content'); ?>
    <div class="card"> 
        <div class="wrapper row"> 
         <div class="preview col-md-6"> 
          <div class="preview-pic tab-content"> 
           <div class="tab-pane active" id="pic-1"><img src="<?php echo e($books->thumbnail); ?>" alt="">
           </div>  
          </div> 
         </div> 
         <div class="details col-md-6"> 
          <h3 class="product-title"><?php echo e($books->title); ?></h3> 
          <div class="rating"> 
           <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> 
           </div> <span class="review-no"><strong>Tác giả :</strong> <?php echo e($books->author); ?></span> <br>
           <span class="review-no"><strong>Nhà xuất bản :</strong> <?php echo e($books->publisher); ?></span> <br>
           <span class="review-no"><strong>Giá bán :</strong> <?php echo e($books->price); ?> $</span><br>
           <span class="review-no"><strong>Số Lượng :</strong> <?php echo e($books->Quantity); ?></span> <br>
           <span class="review-no"><strong>Danh Mục :</strong> <?php echo e($books->Category_id); ?></span>     
          </div> 
          
          </div> 
         </div> 
        </div>  
  
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php3_exam\php3_lab\resources\views/show.blade.php ENDPATH**/ ?>