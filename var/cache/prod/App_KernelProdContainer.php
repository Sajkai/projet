<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR2AkFPA\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR2AkFPA/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerR2AkFPA.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerR2AkFPA\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerR2AkFPA\App_KernelProdContainer([
    'container.build_hash' => 'R2AkFPA',
    'container.build_id' => '3a0ed4b7',
    'container.build_time' => 1656277183,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerR2AkFPA');
