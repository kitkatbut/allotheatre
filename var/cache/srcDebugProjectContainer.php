<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAjLn8xf\srcDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAjLn8xf/srcDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerAjLn8xf.legacy');

    return;
}

if (!\class_exists(srcDebugProjectContainer::class, false)) {
    \class_alias(\ContainerAjLn8xf\srcDebugProjectContainer::class, srcDebugProjectContainer::class, false);
}

return new \ContainerAjLn8xf\srcDebugProjectContainer(array(
    'container.build_hash' => 'AjLn8xf',
    'container.build_id' => '0e00e5ec',
    'container.build_time' => 1516875226,
));
