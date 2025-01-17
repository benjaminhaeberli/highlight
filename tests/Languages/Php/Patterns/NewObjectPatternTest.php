<?php

declare(strict_types=1);

namespace Tempest\Highlight\Tests\Languages\Php\Patterns;

use PHPUnit\Framework\TestCase;
use Tempest\Highlight\Languages\Php\Patterns\NewObjectPattern;
use Tempest\Highlight\Tests\TestsPatterns;

class NewObjectPatternTest extends TestCase
{
    use TestsPatterns;

    public function test_pattern()
    {
        $this->assertMatches(
            pattern: new NewObjectPattern(),
            content: 'new Foo()',
            expected: 'Foo',
        );

        $this->assertMatches(
            pattern: new NewObjectPattern(),
            content: '(new Foo)',
            expected: 'Foo',
        );
    }
}
