<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\SetList;
use Rector\DeadCode\Rector\ClassConst\RemoveUnusedClassConstantRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();

    // Define what rule sets will be applied
    $parameters->set(Option::SETS, [
        SetList::DEAD_CODE,
    ]);

    // this is removed as all the DTO object constants are not used inside the library itself
    $parameters->set(Option::SKIP, [RemoveUnusedClassConstantRector::class]);
};
