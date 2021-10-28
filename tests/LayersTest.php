<?php

declare(strict_types=1);

namespace tests;

final class LayersTest extends TestCase
{
    public function test_make_layers_and_assert_depends()
    {
        $layers = $this->layersFromNamespaceRegex('/^(?\'layer\'.*\\\\Architecture\\\\Builders\\\\[^\\\\]+)/m');

        $this->assertDoesNotDependOn($layers, $layers);
    }
}
