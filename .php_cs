<?php

use Symfony\CS\Config\Config;
use Symfony\CS\Finder\DefaultFinder;
use Symfony\CS\FixerInterface;

$fixers = [
    '-psr0',
    'braces',
    'concat_with_spaces',
    'double_arrow_multiline_whitespaces',
    'duplicate_semicolon',
    'elseif',
    'empty_return',
    'encoding',
    'eof_ending',
    'extra_empty_lines',
    'function_call_space',
    'function_declaration',
    'include',
    'indentation',
    'linefeed',
    'join_function',
    'line_after_namespace',
    'list_commas',
    'logical_not_operators_without_successor_space',
    'lowercase_constants',
    'lowercase_keywords',
    'method_argument_space',
    'multiline_array_trailing_comma',
    'multiline_spaces_before_semicolon',
    'multiple_use',
    'namespace_no_leading_whitespace',
    'new_with_braces',
    'no_blank_lines_after_class_opening',
    'no_empty_lines_after_phpdocs',
    'no_blank_lines_before_namespace',
    'object_operator',
    'operators_spaces',
    'parenthesis',
    'phpdoc_indent',
    'phpdoc_inline_tag',
    'phpdoc_no_access',
    'phpdoc_scalar',
    'phpdoc_to_comment',
    'phpdoc_trim',
    'phpdoc_type_to_var',
    'phpdoc_var_without_name',
    'php_closing_tag',
    'remove_leading_slash_use',
    'remove_lines_between_uses',
    'return',
    'self_accessor',
    'short_array_syntax',
    'short_echo_tag',
    'short_tag',
    'single_array_no_trailing_comma',
    'single_line_after_imports',
    'single_quote',
    'spaces_before_semicolon',
    'spaces_cast',
    'standardize_not_equal',
    'ternary_spaces',
    'trailing_spaces',
    'trim_array_spaces',
    'unalign_equals',
    'unary_operators_spaces',
    'unused_use',
    'visibility',
    'whitespacy_lines',
];

$finder = DefaultFinder::create()
    ->exclude([
        'vendor',
        'storage',
    ])
    ->in(__DIR__);

return Config::create()->level(FixerInterface::PSR2_LEVEL)
    ->fixers($fixers)
    ->finder($finder);