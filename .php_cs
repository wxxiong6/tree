<?php
$header = <<<'EOF'

EOF;

return PhpCsFixer\Config::create()
->setRiskyAllowed(true)
->setRules([
    '@Symfony' => true,
    '@PSR2' => true,
    '@Symfony:risky' => true,
    'array_syntax' => ['syntax' => 'short'],
    'combine_consecutive_unsets' => true,
    'general_phpdoc_annotation_remove' => [
        'expectedException',
        'expectedExceptionMessage',
        'expectedExceptionMessageRegExp',
    ],
    'heredoc_to_nowdoc' => true,
    'no_extra_consecutive_blank_lines' => [
        'break',
        'continue',
        'extra',
        'return',
        'throw',
        'use',
        'parenthesis_brace_block',
        'square_brace_block',
        'curly_brace_block',
    ],
    'no_unreachable_default_argument_value' => false,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'ordered_class_elements' => true,
    'ordered_imports' => true,
    'phpdoc_add_missing_param_annotation' => true,
    'phpdoc_order' => true,
    'psr4' => true,
    'ternary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
])
->setFinder(
    PhpCsFixer\Finder::create()
        ->exclude('tests/Fixtures')
        ->in(__DIR__)
);
