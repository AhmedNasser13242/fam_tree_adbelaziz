<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('app.name', 'Laravel')); ?>

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="<?php echo e(route('users.search')); ?>"><?php echo e(__('app.search_your_family')); ?></a></li>
                <li><a href="<?php echo e(route('birthdays.index')); ?>"><?php echo e(__('birthday.birthday')); ?></a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php $mark = preg_match('/\?/', url()->current()) ? '&' : '?'; ?>
                <li><a href="<?php echo e(url(url()->current() . $mark . 'lang=en')); ?>">en</a></li>
                <li><a href="<?php echo e(url(url()->current() . $mark . 'lang=id')); ?>">id</a></li>
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                    <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <?php if(is_system_admin(auth()->user())): ?>
                                <li><a href="<?php echo e(route('backups.index')); ?>"><?php echo e(__('backup.list')); ?></a></li>
                            <?php endif; ?>
                            <li><a href="<?php echo e(route('profile')); ?>"><?php echo e(__('app.my_profile')); ?></a></li>
                            <li><a href="<?php echo e(route('password_change')); ?>"><?php echo e(__('auth.change_password')); ?></a></li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/layouts/partials/nav.blade.php ENDPATH**/ ?>