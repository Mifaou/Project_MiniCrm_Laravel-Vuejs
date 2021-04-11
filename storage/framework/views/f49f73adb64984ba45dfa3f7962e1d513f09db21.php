<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('content'); ?>

    <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-12">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <h2 class="mb-2">Sign In</h2>
                        <p>To Keep connected with us please login with your personal info.</p>
            <form class="login-form" action="<?php echo e(route('login')); ?>" method="POST" role="form">
               <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" id="email" name="email" placeholder="Email address" autofocus value="<?php echo e(old('email')); ?>" required>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">

                        <input class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" id="password" name="password" placeholder="Password" required>
                        

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

                <div class="form-group btn-container">
                <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                        <img src="../assets/images/login/01.png" class="img-fluid w-80" alt="">
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom_script'); ?>
<script>
    $(document).ready(function(){
        $('.login-form').parsley();
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MSI\Desktop\Project_MiniCrm_Laravel-Vuejs\resources\views/auth/login.blade.php ENDPATH**/ ?>