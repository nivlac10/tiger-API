<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'inlinePrefix' => false,
    'inlineSuffix' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'inlinePrefix' => false,
    'inlineSuffix' => false,
]); ?>
<?php foreach (array_filter(([
    'inlinePrefix' => false,
    'inlineSuffix' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<select
    <?php echo e($attributes->class([
            'fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6',
            'ps-0' => $inlinePrefix,
            'ps-3' => ! $inlinePrefix,
        ])); ?>

>
    <?php echo e($slot); ?>

</select>
<?php /**PATH /Users/arthur/Documents/cassino_crackeado/vendor/filament/support/src/../resources/views/components/input/select.blade.php ENDPATH**/ ?>