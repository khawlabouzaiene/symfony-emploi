<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTljfkZH\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTljfkZH/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTljfkZH.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTljfkZH\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerTljfkZH\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'TljfkZH',
    'container.build_id' => '99bb6854',
    'container.build_time' => 1637935907,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTljfkZH');
