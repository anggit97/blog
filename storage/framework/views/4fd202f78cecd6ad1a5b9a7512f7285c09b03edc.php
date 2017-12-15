<div class="sidebar">
    <div class="row">
        <div class="col-sm-4">
            <?php if(Storage::disk('local')->has(Auth::user()->name.'.jpg')): ?>
                <img src="<?php echo e(route('get.image',['filename'=>Auth::user()->name.'.jpg'])); ?>"  class="img-responsive">
            <?php else: ?>
                <img src="<?php echo e(asset('images/no_image.png')); ?>" class="img-responsive">       
            <?php endif; ?>
        </div>
        <div class="col-sm-8">
            <a href="<?php echo e(route('account',['username'=>Auth::user()->username])); ?>"><?php echo e(Auth::user()->name); ?></a>
        </div>
       
       
    </div>

     <a href="<?php echo e(route('welcome')); ?>" class="col-sm-12 btn btn-warning" style="margin-top: 10px;">lihat blog</a>
    <div class="row"></div>
    <hr>
    <div class="menu">
        <ul>
            <li class="<?php echo e(Route::currentRouteNamed('dashboard') ? 'actived' : ''); ?>" ><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
            <hr>
            <li><h4>Post</h4></li>
            <li class="<?php echo e(Route::currentRouteNamed('post') ? 'actived' : ''); ?>"><a href="<?php echo e(route('post')); ?>" data-toggle="collapse" data-target="#post">Post</a></li>
            <li class="<?php echo e(Route::currentRouteNamed('create.post') ? 'actived' : ''); ?>"><a href="<?php echo e(route('create.post')); ?>" data-toggle="collapse" data-target="#post">Tambah Post</a></li>
            <hr>
            <li><h4>Ketegori</h4></li>
            <li class="<?php echo e(Route::currentRouteNamed('dashboard.category') ? 'actived' : ''); ?>"><a href="<?php echo e(route('dashboard.category')); ?>">Ketegori Post</a></li>
            <li><a href="<?php echo e(route('create.category')); ?>">Tambah Kategori</a></li>
            <li><a href="">Lainnya</a></li>
        </ul>
    </div>
</div>