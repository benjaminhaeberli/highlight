<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Html;

use Tempest\Highlight\Languages\Css\Injections\CssAttributeInjection;
use Tempest\Highlight\Languages\Css\Injections\CssInjection;
use Tempest\Highlight\Languages\Global\BaseLanguage;
use Tempest\Highlight\Languages\Html\Patterns\CloseTagPattern;
use Tempest\Highlight\Languages\Html\Patterns\HtmlCommentPattern;
use Tempest\Highlight\Languages\Html\Patterns\OpenTagPattern;
use Tempest\Highlight\Languages\Html\Patterns\TagAttributePattern;
use Tempest\Highlight\Languages\Php\Injections\PhpInjection;
use Tempest\Highlight\Languages\Php\Injections\PhpShortEchoInjection;

class HtmlLanguage extends BaseLanguage
{
    public function getInjections(): array
    {
        return [
            ...parent::getInjections(),
            new PhpInjection(),
            new PhpShortEchoInjection(),
            new CssInjection(),
            new CssAttributeInjection(),
        ];
    }

    public function getPatterns(): array
    {
        return [
            ...parent::getPatterns(),
            new OpenTagPattern(),
            new CloseTagPattern(),
            new TagAttributePattern(),
            new HtmlCommentPattern(),
        ];
    }
}
