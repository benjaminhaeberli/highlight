<?php

declare(strict_types=1);

namespace Tempest\Highlight\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tempest\Highlight\Tokens\RenderTokens;
use Tempest\Highlight\Tokens\Token;
use Tempest\Highlight\Tokens\TokenType;

class RenderTokensTest extends TestCase
{
    #[Test]
    public function test_nested_tokens(): void
    {
        $content = '/** @var \Tempest\View\GenericView $this */';

        $tokens = [
            new Token(
                offset: 0,
                value: '/** @var \Tempest\View\GenericView $this */',
                type: TokenType::COMMENT,
            ),
            new Token(
                offset: 23,
                value: 'GenericView',
                type: TokenType::TYPE,
            ),
        ];

        $parsed = (new RenderTokens())($content, $tokens);

        $this->assertSame(
            '<span class="hl-comment">/** @var \Tempest\View\<span class="hl-type">GenericView</span> $this */</span>',
            $parsed,
        );
    }

    #[Test]
    public function test_nested_tokens_b()
    {
        $tokens = [
            new Token(
                offset: 0,
                value: "#[Get(hi: '/')]",
                type: TokenType::ATTRIBUTE,
            ),
            new Token(
                offset: 2,
                value: 'get',
                type: TokenType::TYPE,
            ),
            new Token(
                offset: 6,
                value: 'hi',
                type: TokenType::PROPERTY,
            ),
        ];

        $output = (new RenderTokens())("#[Get(hi: '/')]", $tokens);

        $this->assertSame(
            "<span class=\"hl-attribute\">#[<span class=\"hl-type\">get</span>(<span class=\"hl-property\">hi</span>: '/')]</span>",
            $output,
        );
    }

    #[Test]
    public function test_nested_tokens_c()
    {
        $content = "    #[Get(hi: '/')]
    public";

        $tokens = [
            new Token(
                offset: 4,
                value: "#[Get(hi: '/')]",
                type: TokenType::ATTRIBUTE,
            ),
            new Token(
                offset: 6,
                value: 'get',
                type: TokenType::TYPE,
            ),
            new Token(
                offset: 10,
                value: 'hi',
                type: TokenType::PROPERTY,
            ),
            new Token(
                offset: 24,
                value: 'public',
                type: TokenType::KEYWORD,
            ),
        ];

        $output = (new RenderTokens())($content, $tokens);

        $this->assertSame(
            "    <span class=\"hl-attribute\">#[<span class=\"hl-type\">get</span>(<span class=\"hl-property\">hi</span>: '/')]</span>
    <span class=\"hl-keyword\">public</span>",
            $output,
        );
    }
}
