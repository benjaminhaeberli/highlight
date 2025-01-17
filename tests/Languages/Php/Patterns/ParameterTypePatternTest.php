<?php

declare(strict_types=1);

namespace Tempest\Highlight\Tests\Languages\Php\Patterns;

use PHPUnit\Framework\TestCase;
use Tempest\Highlight\Languages\Php\Patterns\ParameterTypePattern;
use Tempest\Highlight\Tests\TestsPatterns;

class ParameterTypePatternTest extends TestCase
{
    use TestsPatterns;

    public function test_pattern()
    {
        $this->assertMatches(
            pattern: new ParameterTypePattern(),
            content: 'function foo(Bar $bar, Baz $baz)',
            expected: ['Bar', 'Baz'],
        );
    }
}
