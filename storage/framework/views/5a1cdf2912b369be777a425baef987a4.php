<!--[if BLOCK]><![endif]--><?php if(filament()->hasUnsavedChangesAlerts()): ?>
        <?php
        $__scriptKey = '1795074074-0';
        ob_start();
    ?>
        <script>
            setUpUnsavedActionChangesAlert({
                resolveLivewireComponentUsing: () => window.Livewire.find('<?php echo e($_instance->getId()); ?>'),
                $wire,
            })
        </script>
        <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH D:\DATA\REZA\01_APPL\Laravel\infra-app\vendor\filament\filament\resources\views/components/unsaved-action-changes-alert.blade.php ENDPATH**/ ?>