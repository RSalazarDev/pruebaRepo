<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD5w5KGi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD5w5KGi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerD5w5KGi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerD5w5KGi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerD5w5KGi\App_KernelDevDebugContainer([
    'container.build_hash' => 'D5w5KGi',
    'container.build_id' => 'a74922de',
    'container.build_time' => 1621860981,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerD5w5KGi');