<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXiApsIe\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXiApsIe/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXiApsIe.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXiApsIe\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXiApsIe\App_KernelDevDebugContainer([
    'container.build_hash' => 'XiApsIe',
    'container.build_id' => '86ade976',
    'container.build_time' => 1616083387,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXiApsIe');
