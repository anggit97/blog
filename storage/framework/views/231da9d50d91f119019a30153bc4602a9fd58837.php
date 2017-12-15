<?php $__env->startSection('title'); ?>
    AnggitPrayogo.com | Sekedar sharing aja...
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="fluid-container">
    <div class="contentbg">
      <div class="container between">
        <div class="row">
          <center>
            <h1>Selamat Datang di Anggit Prayogo.com</h1>
            <h5>Quality is more important than quantity. One home run is much better than two doubles  - Steve Jobs</h5>
          </center>
        </div>
        <div class="row">

          
          <div class="col-sm-10 col-sm-offset-1 content">
            
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="sigle-post">
                    <div class="row">
                        <section class="img-post col-sm-4">
                            <?php if(Storage::disk('local')->has($post->title.'.jpg')): ?>
                                <center><img src="<?php echo e(route('get.image',['filename'=>$post->title.'.jpg'])); ?>" alt="" class="img-responsive"></center>
                            <?php else: ?>
                                <center><img src="<?php echo e(asset('images/no_image.png')); ?>" alt="" class="img-responsive"> </center>    
                            <?php endif; ?>
                        </section>
                        <section class="content-post col-sm-7">
                            <div class="title">
                                <h1><a href="<?php echo e(route('detail.post',['slug'=>$post->slug_title])); ?>"> <?php echo e($post->title); ?></a></h1>
                                <span class="posted-by"><b>Ditulis Oleh</b> <a href=""><?php echo e($post->user->name); ?></a></span> > <span class="posted-by"><b>Kategori</b> <a href=""><?php echo e($post->category->category_name); ?></a></span>
                            </div>
                            <div class="body-post">
                                <p><?php echo str_limit($post->body, $limit = 200, $end = ''); ?> <a href="<?php echo e(route('detail.post',['slug'=>$post->slug_title])); ?>">Baca Selengkapnya..</a></p>
                              
                            </div>

                            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <span class="label label-default"><?php echo e($tag->nama_tag); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="info-post">
                                <span class="posted-on"><b>Ditulis Pada</b> <?php echo e(\Carbon\Carbon::parse($post->created_at)->format('d, M Y')); ?></span>
                            </div>
                            

                        </section>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php echo e($posts->links()); ?>

            
          </div>

        </div>
       </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>