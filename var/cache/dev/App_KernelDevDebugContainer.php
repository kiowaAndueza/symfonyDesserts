<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMEJnBUG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMEJnBUG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMEJnBUG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMEJnBUG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMEJnBUG\App_KernelDevDebugContainer([
    'container.build_hash' => 'MEJnBUG',
    'container.build_id' => '1a24ad7a',
    'container.build_time' => 1671028731,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMEJnBUG');
