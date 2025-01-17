<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Php;

use Tempest\Highlight\Languages\Global\BaseLanguage;
use Tempest\Highlight\Languages\Php\Patterns\AttributePattern;
use Tempest\Highlight\Languages\Php\Patterns\AttributeTypePattern;
use Tempest\Highlight\Languages\Php\Patterns\ClassNamePattern;
use Tempest\Highlight\Languages\Php\Patterns\ClassPropertyPattern;
use Tempest\Highlight\Languages\Php\Patterns\ConstantNamePattern;
use Tempest\Highlight\Languages\Php\Patterns\ConstantPropertyPattern;
use Tempest\Highlight\Languages\Php\Patterns\ExtendsPattern;
use Tempest\Highlight\Languages\Php\Patterns\FunctionCallPattern;
use Tempest\Highlight\Languages\Php\Patterns\FunctionNamePattern;
use Tempest\Highlight\Languages\Php\Patterns\ImplementsPattern;
use Tempest\Highlight\Languages\Php\Patterns\KeywordPattern;
use Tempest\Highlight\Languages\Php\Patterns\MultilineDoubleDocCommentPattern;
use Tempest\Highlight\Languages\Php\Patterns\MultilineSingleDocCommentPattern;
use Tempest\Highlight\Languages\Php\Patterns\NamedArgumentPattern;
use Tempest\Highlight\Languages\Php\Patterns\NamespacePattern;
use Tempest\Highlight\Languages\Php\Patterns\NestedFunctionCallPattern;
use Tempest\Highlight\Languages\Php\Patterns\NewObjectPattern;
use Tempest\Highlight\Languages\Php\Patterns\ParameterTypePattern;
use Tempest\Highlight\Languages\Php\Patterns\PropertyAccessPattern;
use Tempest\Highlight\Languages\Php\Patterns\PropertyTypesPattern;
use Tempest\Highlight\Languages\Php\Patterns\ReturnTypePattern;
use Tempest\Highlight\Languages\Php\Patterns\SinglelineDocCommentPattern;
use Tempest\Highlight\Languages\Php\Patterns\StaticClassCallPattern;
use Tempest\Highlight\Languages\Php\Patterns\UsePattern;

class PhpLanguage extends BaseLanguage
{
    public function getInjections(): array
    {
        return [
            ...parent::getInjections(),
        ];
    }

    public function getPatterns(): array
    {
        return [
            ...parent::getPatterns(),

            // KEYWORDS
            new KeywordPattern('__halt_compiler'),
            new KeywordPattern('abstract'),
            new KeywordPattern('and'),
            new KeywordPattern('array'),
            new KeywordPattern('as'),
            new KeywordPattern('break'),
            new KeywordPattern('callable'),
            new KeywordPattern('case'),
            new KeywordPattern('catch'),
            new KeywordPattern('class'),
            new KeywordPattern('clone'),
            new KeywordPattern('const'),
            new KeywordPattern('continue'),
            new KeywordPattern('declare'),
            new KeywordPattern('default'),
            new KeywordPattern('die'),
            new KeywordPattern('do'),
            new KeywordPattern('echo'),
            new KeywordPattern('else'),
            new KeywordPattern('elseif'),
            new KeywordPattern('empty'),
            new KeywordPattern('enddeclare'),
            new KeywordPattern('endfor'),
            new KeywordPattern('endforeach'),
            new KeywordPattern('endif'),
            new KeywordPattern('endswitch'),
            new KeywordPattern('endwhile'),
            new KeywordPattern('eval'),
            new KeywordPattern('exit'),
            new KeywordPattern('extends'),
            new KeywordPattern('final'),
            new KeywordPattern('finally'),
            new KeywordPattern('fn'),
            new KeywordPattern('for'),
            new KeywordPattern('foreach'),
            new KeywordPattern('function'),
            new KeywordPattern('global'),
            new KeywordPattern('goto'),
            new KeywordPattern('if'),
            new KeywordPattern('implements'),
            new KeywordPattern('include'),
            new KeywordPattern('include_once'),
            new KeywordPattern('instanceof'),
            new KeywordPattern('insteadof'),
            new KeywordPattern('interface'),
            new KeywordPattern('isset'),
            new KeywordPattern('list'),
            new KeywordPattern('match'),
            new KeywordPattern('namespace'),
            new KeywordPattern('new'),
            new KeywordPattern('or'),
            new KeywordPattern('print'),
            new KeywordPattern('private'),
            new KeywordPattern('protected'),
            new KeywordPattern('public'),
            new KeywordPattern('readonly'),
            new KeywordPattern('require'),
            new KeywordPattern('require_once'),
            new KeywordPattern('return'),
            new KeywordPattern('static'),
            new KeywordPattern('switch'),
            new KeywordPattern('throw'),
            new KeywordPattern('trait'),
            new KeywordPattern('try'),
            new KeywordPattern('unset'),
            new KeywordPattern('use'),
            new KeywordPattern('while'),
            new KeywordPattern('xor'),
            new KeywordPattern('yield'),
            new KeywordPattern('yield from'),

            // ATTRIBUTES
            new AttributePattern(),

            // COMMENTS
            new MultilineDoubleDocCommentPattern(),
            new MultilineSingleDocCommentPattern(),
            new SinglelineDocCommentPattern(),

            // TYPES
            new AttributeTypePattern(),
            new ImplementsPattern(),
            new ExtendsPattern(),
            new UsePattern(),
            new NamespacePattern(),
            new PropertyTypesPattern(),
            new ClassNamePattern(),
            new ReturnTypePattern(),
            new StaticClassCallPattern(),
            new ParameterTypePattern(),
            new NewObjectPattern(),

            // PROPERTIES
            new ClassPropertyPattern(),
            new NamedArgumentPattern(),
            new PropertyAccessPattern(),
            new FunctionNamePattern(),
            new NestedFunctionCallPattern(),
            new FunctionCallPattern(),
            new ConstantPropertyPattern(),
            new ConstantNamePattern(),
        ];
    }
}
