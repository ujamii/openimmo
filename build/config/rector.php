<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\SetList;
use Rector\DeadCode\Rector\ClassConst\RemoveUnusedPrivateClassConstantRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(SetList::DEAD_CODE);

    // this is removed as all the DTO object constants are not used inside the library itself
    // get parameters
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SKIP, [RemoveUnusedPrivateClassConstantRector::class]);
};
