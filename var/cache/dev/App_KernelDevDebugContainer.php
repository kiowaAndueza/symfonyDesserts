<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIEluRLb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIEluRLb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIEluRLb.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIEluRLb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIEluRLb\App_KernelDevDebugContainer([
    'container.build_hash' => 'IEluRLb',
    'container.build_id' => '26e9ea65',
    'container.build_time' => 1668697597,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIEluRLb');
