<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXJ8bJ6M\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXJ8bJ6M/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXJ8bJ6M.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXJ8bJ6M\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXJ8bJ6M\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XJ8bJ6M',
    'container.build_id' => 'f2ccd393',
    'container.build_time' => 1552090843,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXJ8bJ6M');
