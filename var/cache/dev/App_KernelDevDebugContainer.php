<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKeVz00O\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKeVz00O/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKeVz00O.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKeVz00O\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKeVz00O\App_KernelDevDebugContainer([
    'container.build_hash' => 'KeVz00O',
    'container.build_id' => '05250955',
    'container.build_time' => 1656277209,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKeVz00O');
