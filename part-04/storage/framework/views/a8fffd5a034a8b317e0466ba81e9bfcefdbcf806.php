<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div>
        <nav class="bg-blue-900 shadow mb-8 py-6">
            <div class="container mx-auto px-2 md:px-0">
                <div class="flex items-center justify-center">
                    <div class="mr-6">
                        <a href="<?php echo e(url('/')); ?>" class="text-lg font-semibold text-gray-100 no-underline">
                            <?php echo e(config('app.name', 'Laravel')); ?>

                        </a>
                    </div>
                    <div class="flex-1 text-right">
                        <?php if(auth()->guard()->guest()): ?>
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            <?php if(Route::has('register')): ?>
                                <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            <?php endif; ?>
                        <?php else: ?>
                            <span class="text-gray-300 text-sm pr-4"><?php echo e(Auth::user()->name); ?></span>

                            <a href="<?php echo e(route('logout')); ?>"
                               class="no-underline hover:underline text-gray-300 text-sm p-3"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
        <div id="app">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH /Users/rocketwire/dev/blog/part-04/resources/views/layouts/app.blade.php ENDPATH**/ ?>