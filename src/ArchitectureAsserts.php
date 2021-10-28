<?php

declare(strict_types=1);

namespace PHPUnit\Architecture;

use PHPUnit\Architecture\Asserts\Dependencies\DependenciesAsserts;
use PHPUnit\Architecture\Builders\BuildFromTest;

/**
 * Asserts for testing architecture
 */
trait ArchitectureAsserts
{
    use BuildFromTest;
    use DependenciesAsserts;
}
