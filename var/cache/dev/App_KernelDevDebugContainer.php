<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHII6QSA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHII6QSA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHII6QSA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHII6QSA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHII6QSA\App_KernelDevDebugContainer([
    'container.build_hash' => 'HII6QSA',
    'container.build_id' => '1124af22',
    'container.build_time' => 1649644346,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHII6QSA');
