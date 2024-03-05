<li class="nav-item">
    <a href="{{ route('<?php echo $config->prefixes->getRoutePrefixWith('.'); ?><?php echo $config->modelNames->camelPlural; ?>.index') }}" class="nav-link {{ Request::is('<?php echo $config->prefixes->getRoutePrefixWith('.'); ?><?php echo $config->modelNames->camelPlural; ?>*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
<?php if($config->options->localized): ?>
        <p>@lang('models/<?php echo e($config->modelNames->camelPlural); ?>.plural')</p>
<?php else: ?>
        <p><?php echo e($config->modelNames->humanPlural); ?></p>
<?php endif; ?>
    </a>
</li>
<?php /**PATH C:\labs-web\lab-scaffolding\app\resources\views/vendor/adminlte-templates/templates/layouts/menu_template.blade.php ENDPATH**/ ?>