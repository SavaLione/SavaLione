<?php

// PHP configure file for 'PHP Coding Standards Fixer' language server
//
// Made by Saveliy Pototskiy (savalione) (savalione.com)
// 
// Updated: 2022-12-07
// Date of creation: 2022-12-06
// 
// https://cs.symfony.com/doc/rules/

$copyright_in_the_header = <<<EOF
SPDX-License-Identifier: GPL-2.0-only

Copyright (C) 2022 Saveliy Pototskiy (savalione.com)
EOF;

return (new PhpCsFixer\Config())

    // Rules
    ->setRules([
        /* Basic */
        
        // PHP code MUST use only UTF-8 without BOM
        'encoding' => true,

        // The body of each structure MUST be enclosed by braces.
        // Braces should be properly placed. Body of braces should be properly indented.
        'braces' =>
        [
            'position_after_functions_and_oop_constructs' => 'next',
            'position_after_control_structures' => 'next',
            'position_after_anonymous_constructs' => 'next',
        ],

        // Curly braces must be placed as configured.
        'curly_braces_position' =>
        [
            // The position of the opening brace of control structures body.
            'control_structures_opening_brace' => 'next_line_unless_newline_at_signature_end',

            // The position of the opening brace of functions body.
            'functions_opening_brace' => 'next_line_unless_newline_at_signature_end',

            // The position of the opening brace of anonymous functions body.
            'anonymous_functions_opening_brace' => 'next_line_unless_newline_at_signature_end',

            // The position of the opening brace of classes body.
            'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',

            // The position of the opening brace of anonymous classes body.
            'anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end',

            // Allow anonymous classes to have opening and closing braces on the same line.
            'allow_single_line_empty_anonymous_classes' => true,

            // Allow anonymous functions to have opening and closing braces on the same line.
            'allow_single_line_anonymous_functions' => true,
        ],
        
        // There must not be more than one statement per line.
        'no_multiple_statements_per_line' => true,

        /* Casting */

        // When referencing an internal class it must be written using the correct casing. (CHECK)
        'class_reference_name_casing' => true,

        // The PHP constants true, false, and null MUST be written using the correct casing.
        'constant_case' => ['case' => 'lower'],

        // Integer literals must be in correct case.
        'integer_literal_case' => true,

        // PHP keywords MUST be in lower case.
        'lowercase_keywords' => true,

        // Class static references self, static and parent MUST be in lower case.
        'lowercase_static_reference' => true,

        // Magic constants should be referred to using the correct casing.
        // __dir__ to __DIR__
        'magic_constant_casing' => true,

        // Magic method definitions and calls must be using the correct casing.
        'magic_method_casing' => true,

        // Function defined by PHP should be called using the correct casing.
        'native_function_casing' => true,

        // Native type hints for functions should use the correct case.
        'native_function_type_declaration_casing' => true,

        /* Cast Notation */

        // A single space or none should be between cast and variable.
        'cast_spaces' => ['space' => 'single'],

        // Cast should be written in lower case.
        'lowercase_cast' => true,

        // Short cast bool using double exclamation mark should not be used.
        'no_short_bool_cast' => true,

        // Variables must be set null instead of using (unset) casting.
        'no_unset_cast' => true,

        // Cast (boolean) and (integer) should be written as (bool) and (int), (double) and (real) as (float), (binary) as (string).
        'short_scalar_cast' => true,

        /* Class Notation */

        // Class, trait and interface elements must be separated with one or none blank line.
        'class_attributes_separation' =>
        [
            'elements' =>
            [
                'const' => 'one',
                'method' => 'one',
                'property' => 'one',
                'trait_import' => 'none',
                'case' => 'none'
            ]
        ],

        // Whitespace around the keywords of a class, trait, enum or interfaces definition should be one space.
        'class_definition' =>
        [
            // Whether definitions should be multiline.
            'multi_line_extends_each_single_line' => false,

            // Whether definitions should be single line when including a single item.
            'single_item_single_line' => true,

            // Whether definitions should be single line.
            'single_line' => true,

            // Whether there should be a single space after the parenthesis of anonymous class (PSR12) or not.
            'space_before_parenthesis' => false,

            // Whether constructor argument list in anonymous classes should be single line.
            'inline_constructor_arguments' => true,

        ],

        // There should be no empty lines after class opening brace.
        'no_blank_lines_after_class_opening' => true,

        // Properties MUST not be explicitly initialized with null except when they have a type declaration (PHP 7.4).
        'no_null_property_initialization' => true,

        // Orders the elements of classes/interfaces/traits/enums.
        'ordered_class_elements' => ['sort_algorithm' => 'none'],

        // Converts protected variables and methods to private where possible.
        // 'protected_to_private' => true,

        // Inside a final class or anonymous class self should be preferred to static.
        // 'self_static_accessor' => true,

        // There MUST NOT be more than one property or constant declared per statement.
        'single_class_element_per_statement' => true,

        // Each trait use must be done as single statement.
        'single_trait_insert_per_statement' => true,

        // Visibility MUST be declared on all properties and methods; abstract and final MUST be declared before the visibility; static MUST be declared after the visibility.
        // 'visibility_required' =>
        // [
        //     'elements' => ['property', 'method', 'const']
        // ],

        /* Comment */

        // Add, replace or remove header comment.
        // It may delete first comment string from the file
        'header_comment' =>
        [
            // Proper header content.
            'header' => $copyright_in_the_header,

            // Comment syntax type.
            'comment_type' => 'comment',

            // The location of the inserted header.
            'location' => 'after_declare_strict',

            // Whether the header should be separated from the file content with a new line.
            'separate' => 'both'
        ],

        // DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash. Both must end with a single asterisk before the closing slash.
        'multiline_comment_opening_closing' => true,

        // There should not be any empty comments.
        'no_empty_comment' => true,

        // There MUST be no trailing spaces inside comment or PHPDoc.
        'no_trailing_whitespace_in_comment' => true,

        // Single-line comments must have proper spacing.
        'single_line_comment_spacing' => true,

        // Single-line comments and multi-line comments with only one line of actual content should use the // syntax.
        // 'single_line_comment_style' => ['comment_types' => ['asterisk', 'hash']],

        /* Control Structure */

        // The body of each control structure MUST be enclosed within braces.
        'control_structure_braces' => true,

        // Control structure continuation keyword must be on the configured line.
        'control_structure_continuation_position' => ['position' => 'next_line'],

        // The keyword elseif should be used instead of else if so that all control keywords look like single words.
        'elseif' => false,

        // Empty loop-body must be in configured style.
        'empty_loop_body' => ['style' => 'braces'],

        // Empty loop-condition must be in configured style.
        'empty_loop_condition' => ['style' => 'while'],

        // Include/Require and file path should be divided with a single space. File path should not be placed under brackets.
        'include' => true,

        // Replace control structure alternative syntax to use braces.
        'no_alternative_syntax' => true,

        // There must be a comment when fall-through is intentional in a non-empty case body.
        // Adds a “no break” comment before fall-through cases, and removes it if there is no fall-through.
        // 'no_break_comment' => ['comment_text' => 'no break'],

        // Replaces superfluous elseif with if.
        'no_superfluous_elseif' => false,

        // Removes unneeded parentheses around control statements.
        'no_unneeded_control_parentheses' => ['statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield']],

        // Removes unneeded curly braces that are superfluous and aren’t part of a control structure’s body.
        // 'no_unneeded_curly_braces' => ['namespaces' => false],

        // There should not be useless else cases.
        'no_useless_else' => false,

        // Simplify if control structures that return the boolean result of their condition.
        'simplified_if_return' => false,

        // A case should be followed by a colon and not a semicolon.
        'switch_case_semicolon_to_colon' => true,

        // Removes extra spaces between colon and case value.
        'switch_case_space' => true,

        // Switch case must not be ended with continue but with break.
        'switch_continue_to_break' => false,

        // Multi-line arrays, arguments list, parameters list and match expressions must have a trailing comma.
        'trailing_comma_in_multiline' =>
        [
            // Whether a trailing comma should also be placed after heredoc end.
            'after_heredoc' => false,

            // Where to fix multiline trailing comma (PHP >= 8.0 for parameters and match).
            'elements' => ['arrays']
        ],

        // Write conditions in Yoda style (true), non-Yoda style (['equal' => false, 'identical' => false, 'less_and_greater' => false]) or ignore those conditions (null) based on configuration.
        // yoda_style

        /* Doctrine Annotation */

        // Doctrine annotations must use configured operator for assignment in arrays.
        // doctrine_annotation_array_assignment

        // Doctrine annotations without arguments must use the configured syntax.
        // doctrine_annotation_braces

        // Doctrine annotations must be indented with four spaces.
        // doctrine_annotation_indentation

        // Doctrine annotations must be indented with four spaces.
        // doctrine_annotation_indentation

        // Fixes spaces in Doctrine annotations.
        // There must not be any space around parentheses; commas must be preceded by no space and followed by one space; there must be no space around named arguments assignment operator; there must be one space around array assignment operator.
        'doctrine_annotation_spaces' => 
        [
            // List of tags that must not be treated as Doctrine Annotations.
            // 'ignored_tags' => [],

            // Whether to fix spaces around parentheses.
            'around_parentheses' => true,

            // Whether to fix spaces around commas.
            'around_commas' => true,

            // Whether to add, remove or ignore spaces before argument assignment operator.
            'before_argument_assignments' => true,

            // Whether to add, remove or ignore spaces after argument assignment operator.
            'after_argument_assignments' => true,

            // Whether to add, remove or ignore spaces before array = assignment operator.
            'before_array_assignments_equals' => true,

            // Whether to add, remove or ignore spaces after array assignment = operator.
            'after_array_assignments_equals' => true,

            // Whether to add, remove or ignore spaces before array : assignment operator.
            'before_array_assignments_colon' => true,

            // Whether to add, remove or ignore spaces after array assignment : operator.
            'after_array_assignments_colon' => true
        ],

        /* Function Notation */

        // Spaces should be properly placed in a function declaration.
        'function_declaration' =>
        [
            // Spacing to use before open parenthesis for closures.
            'closure_function_spacing' => 'none',

            // Spacing to use before open parenthesis for short arrow functions.
            'closure_fn_spacing' => 'none',

            // Whether trailing commas are allowed in single line signatures.
            'trailing_comma_single_line' => false
        ],

        // Ensure single space between function’s argument and its typehint.
        'function_typehint_space' => true,

        // Lambda must not import variables it doesn’t use.
        // lambda_not_used_import

        // In method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma.
        // Argument lists MAY be split across multiple lines, where each subsequent line is indented once.
        // When doing so, the first item in the list MUST be on the next line, and there MUST be only one argument per line.
        'method_argument_space' =>
        [
            // Whether keep multiple spaces after comma.
            'keep_multiple_spaces_after_comma' => false,

            // Defines how to handle function arguments lists that contain newlines.
            'on_multiline' => 'ensure_single_line',
            
            // Whether the whitespace between heredoc end and comma should be removed.
            'after_heredoc' => true
        ],

        // When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis.
        'no_spaces_after_function_name' => true,

        // Adds or removes ? before type declarations for parameters with a default null value.
        // nullable_type_declaration_for_default_null_value

        // Adjust spacing around colon in return type declarations and backed enum types.
        'return_type_declaration' => ['space_before' => 'one'],

        // Throwing exception must be done in single line.
        'single_line_throw' => true,

        /* Import */

        // Transforms imported FQCN parameters and return types in function arguments to short version.
        'fully_qualified_strict_types' => false,

        // Imports or fully qualifies global classes/functions/constants.
        'global_namespace_import' =>
        [
            // Whether to import, not import or ignore global constants.
            'import_constants' => false,

            // Whether to import, not import or ignore global functions.
            'import_functions' => false,

            // Whether to import, not import or ignore global classes.
            'import_classes' => false
        ],

        // There MUST be group use for the same namespaces.
        'group_import' => false,

        // Remove leading slashes in use clauses.
        'no_leading_import_slash' => true,

        // Imports should not be aliased as the same name.
        'no_unneeded_import_alias' => false,

        // Unused use statements must be removed.
        'no_unused_imports' => true,

        // Ordering use statements.
        'ordered_imports' =>
        [
            // Whether the statements should be sorted alphabetically or by length, or not sorted
            // Allowed values: 'alpha', 'length', 'none'
            'sort_algorithm' => 'none',

            // Defines the order of import types.
            'imports_order' => ['const', 'class', 'function']
        ],

        // There MUST be one use keyword per declaration.
        'single_import_per_statement' =>
        [
            // Whether to change group imports into single imports.
            'group_to_single_imports' => true
        ],

        // Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
        'single_line_after_imports' => true,

        /* Language Construct */

        // Using isset($var) && multiple times should be done in one call.
        'combine_consecutive_issets' => false,

        // Calling unset on multiple items should be done in one call.
        'combine_consecutive_unsets' => false,

        // Equal sign in declare statement should be surrounded by spaces or not following configuration.
        'declare_equal_normalize' => ['space' => 'single'],

        // There must not be spaces around declare statement parentheses.
        'declare_parentheses' => true,

        // Add curly braces to indirect variables to make them clear to understand. Requires PHP >= 7.0.
        'explicit_indirect_variable' => false,

        // Ensures a single space after language constructs.
        'single_space_after_construct' =>
        [
            'constructs' => ['abstract', 'as', 'attribute', 'break', 'case', 'catch', 'class', 'clone', 'comment', 'const', 'const_import', 'continue', 'do', 'echo', 'else', 'elseif', 'enum', 'extends', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new', 'open_tag_with_echo', 'php_doc', 'php_open', 'print', 'private', 'protected', 'public', 'readonly', 'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'type_colon', 'use', 'use_lambda', 'use_trait', 'var', 'while', 'yield', 'yield_from']
        ],

        /* List Notation */

        // List (array destructuring) assignment should be declared using the configured syntax. Requires PHP >= 7.1.
        'list_syntax' => ['syntax' => 'long'],

        /* Namespace Notation */

        // There MUST be one blank line after the namespace declaration.
        'blank_line_after_namespace' => true,

        // Namespace must not contain spacing, comments or PHPDoc.
        'clean_namespace' => true,

        // There should be no blank lines before a namespace declaration.
        'no_blank_lines_before_namespace' => true,

        // The namespace declaration line shouldn’t contain leading whitespace.
        'no_leading_namespace_whitespace' => true,

        // There should be exactly one blank line before a namespace declaration.
        // 'single_blank_line_before_namespace' => true,

        /* Operator */

        // Use the null coalescing assignment operator ??= where possible
        'assign_null_coalescing_to_coalesce_equal' => true,

        // Binary operators should be surrounded by space as configured.
        'binary_operator_spaces' =>
        [
            // Default fix strategy.
            'default' => 'single_space'
        ],

        // Concatenation should be spaced according configuration.
        'concat_space' => ['spacing' => 'one'],

        // Pre- or post-increment and decrement operators should be used if possible.
        // increment_style

        // All instances created with new keyword must (not) be followed by braces.
        // new_with_braces

        // There must be no space around double colons (also called Scope Resolution Operator or Paamayim Nekudotayim).
        'no_space_around_double_colon' => true,

        // There should not be useless concat operations.
        'no_useless_concat_operator' => false,

        // There should not be useless null-safe-operators ?-> used.
        'no_useless_nullsafe_operator' => false,

        // Logical NOT operators (!) should have leading and trailing whitespaces.
        'not_operator_with_space' => false,

        // Logical NOT operators (!) should have one trailing whitespace.
        'not_operator_with_successor_space' => false,

        // There should not be space before or after object operators -> and ?->.
        'object_operator_without_whitespace' => true,

        // Operators - when multiline - must always be at the beginning or at the end of the line.
        'operator_linebreak' =>
        [
            // Whether to limit operators to only boolean ones
            'only_booleans' => false,

            // Whether to place operators at the beginning or at the end of the line
            'position' => 'end'
        ],

        // Increment and decrement operators should be used if possible.
        'standardize_increment' => false,

        // Replace all <> with !=.
        'standardize_not_equals' => true,

        // Standardize spaces around ternary operator.
        'ternary_operator_spaces' => true,

        // Use null coalescing operator ?? where possible. Requires PHP >= 7.0.
        'ternary_to_null_coalescing' => false,

        // Unary operators should be placed adjacent to their operands.
        'unary_operator_spaces' => true,

        /* PHP Tag */

        // Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
        'blank_line_after_opening_tag' => true,

        // Replaces short-echo <?= with long format <?php echo/<?php print syntax, or vice-versa.
        'echo_tag_syntax' => 
        [
            // The desired language construct.
            'format' => 'long',

            // The function to be used to expand the short echo tags
            'long_function' => 'echo',

            // Render short-echo tags only in case of simple code
            'shorten_simple_statements_only' => true
        ],

        // PHP code must use the long <?php tags or short-echo <?= tags and not other tag variations.
        'full_opening_tag' => true,

        // Ensure there is no code on the same line as the PHP open tag.
        'linebreak_after_opening_tag' => true,

        // The closing PHP tag MUST be omitted from files containing only PHP.
        'no_closing_tag' => true,

        /* PHPUnit */

        // PHPUnit annotations should be a FQCNs including a root namespace.
        'php_unit_fqcn_annotation' => true,

        // All PHPUnit test classes should be marked as internal.
        'php_unit_internal_class' =>
        [
            // What types of classes to mark as internal
            'types' => ['normal', 'final', 'abstract']
        ],

        // Enforce camel (or snake) case for PHPUnit test methods, following configuration.
        'php_unit_method_casing' =>
        [
            // Apply camel or snake case to test methods
            'case' => 'snake_case'
        ],

        // All PHPUnit test cases should have @small, @medium or @large annotation to enable run time limits.
        // The special groups [small, medium, large] provides a way to identify tests that are taking long to be executed.
        'php_unit_size_class' =>
        [
            // Define a specific group to be used in case no group is already in use
            'group' => 'small'
        ],

        // Adds a default @coversNothing annotation to PHPUnit test classes that have no @covers* annotation.
        'php_unit_test_class_requires_covers' => true,

        /* PHPDoc */

        // Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one.
        'align_multiline_comment' =>
        [
            // Whether to fix PHPDoc comments only (phpdocs_only), any multi-line comment whose lines all start with an asterisk (phpdocs_like) or any multi-line comment (all_multiline).
            'comment_type' => 'phpdocs_like'
        ],

        // Configured annotations should be omitted from PHPDoc.
        'general_phpdoc_annotation_remove' =>
        [
            // List of annotations to remove, e.g. ["author"].
            // Something that language server should remove from PHPDoc
            'annotations' => ['nothing'],

            // Should annotations be case sensitive.
            'case_sensitive' => true
        ],

        // Renames PHPDoc tags.
        'general_phpdoc_tag_rename' =>
        [
            // Whether annotation tags should be fixed.
            'fix_annotation' => true,

            // Whether inline tags should be fixed.
            'fix_inline' => true,

            // A map of tags to replace.
            'replacements' => ['TODO' => 'todo'],

            // Whether tags should be replaced only if they have exact same casing.
            'case_sensitive' => true
        ],

        // There should not be blank lines between docblock and the documented element.
        'no_blank_lines_after_phpdoc' => true,

        // There should not be empty PHPDoc blocks.
        'no_empty_phpdoc' => true,

        // Removes @param, @return and @var tags that don’t provide any useful information.
        'no_superfluous_phpdoc_tags' =>
        [
            // Whether type mixed without description is allowed (true) or considered superfluous (false)
            'allow_mixed' => false,

            // Remove @inheritDoc tags
            'remove_inheritdoc' => false,
            
            // Whether param annotation without actual signature is allowed (true) or considered superfluous (false)
            'allow_unused_params' => false
        ],

        // PHPDoc should contain @param for all params.
        'phpdoc_add_missing_param_annotation' =>
        [
            // Whether to add missing @param annotations for untyped parameters only.
            'only_untyped' => false
        ],

        // All items of the given phpdoc tags must be either left-aligned or (by default) aligned vertically.
        'phpdoc_align' =>
        [
            // The tags that should be aligned.
            'tags' =>  ['method', 'param', 'property', 'property-read', 'property-write', 'return', 'throws', 'type', 'var'],

            // Align comments
            'align' => 'left'
        ],

        // PHPDoc annotation descriptions should not be a sentence.
        'phpdoc_annotation_without_dot' => true,

        // Docblocks should have the same indentation as the documented subject.
        'phpdoc_indent' => true,

        // Fixes PHPDoc inline tags.
        'phpdoc_inline_tag_normalizer' =>
        [
            // The list of tags to normalize
            'tags' => ['example', 'id', 'internal', 'inheritdoc', 'inheritdocs', 'link', 'source', 'toc', 'tutorial']
        ],

        // Changes doc blocks from single to multi line, or reversed. Works for class constants, properties and methods only.
        'phpdoc_line_span' =>
        [
            // Whether const blocks should be single or multi line
            'const' => 'multi',

            // Whether property doc blocks should be single or multi line
            'property' => 'multi',

            // Whether method doc blocks should be single or multi line
            'method' => 'multi'
        ],

        // @access annotations should be omitted from PHPDoc.
        'phpdoc_no_access' => false,

        // No alias PHPDoc tags should be used.
        'phpdoc_no_alias_tag' =>
        [
            // Mapping between replaced annotations with new ones.
            'replacements' => ['property-read' => 'property', 'property-write' => 'property']
        ],

        // @return void and @return null annotations should be omitted from PHPDoc.
        'phpdoc_no_empty_return' => true,

        // @package and @subpackage annotations should be omitted from PHPDoc.
        'phpdoc_no_package' => false,

        // Classy that does not inherit must not have @inheritdoc tags.
        'phpdoc_no_useless_inheritdoc' => true,

        // Order phpdoc tags by value.
        // 'phpdoc_order_by_value' =>
        // [
        //     // List of annotations to order, e.g. ["covers"].
        //     // Allowed values: a subset of ['author', 'covers', 'coversNothing', 'dataProvider', 'depends', 'group', 'internal', 'method', 'mixin', 'property', 'property-read', 'property-write', 'requires', 'throws', 'uses']
        //     // 'annotations' => ['covers']
        // ],

        // Annotations in PHPDoc should be ordered in defined sequence.
        'phpdoc_order' =>
        [
            // Sequence in which annotations in PHPDoc should be ordered.
            'order' => ['param', 'throws', 'return']
        ],

        // The type of @return annotations of methods returning a reference to itself must the configured one.
        'phpdoc_return_self_reference' =>
        [
            // Mapping between replaced return types with new ones.
            'replacements' => ['this' => '$this', '@this' => '$this', '$self' => 'self', '@self' => 'self', '$static' => 'static', '@static' => 'static']
        ],

        // Scalar types should always be written in the same form. int not integer, bool not boolean, float not real or double.
        'phpdoc_scalar' =>
        [
            // A list of types to fix.
            'types' => ['boolean', 'callback', 'double', 'integer', 'real', 'str']
        ],

        // Annotations in PHPDoc should be grouped together so that annotations of the same type immediately follow each other.
        // Annotations of a different type are separated by a single blank line.
        'phpdoc_separation' =>
        [
            // Sets of annotation types to be grouped together.
            'groups' =>
            [
                ['deprecated', 'link', 'see', 'since'],
                ['author', 'copyright', 'license'],
                ['category', 'package', 'subpackage'],
                ['property', 'property-read', 'property-write']
            ]
        ],

        // Single line @var PHPDoc should have proper spacing.
        'phpdoc_single_line_var_spacing' => true,

        // PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
        'phpdoc_summary' => false,

        // Fixes casing of PHPDoc tags.
        'phpdoc_tag_casing' =>
        [
            // List of tags to fix with their expected casing.
            'tags' => ['inheritdoc']
        ],

        // Forces PHPDoc tags to be either regular annotations or inline.
        'phpdoc_tag_type' =>
        [
            // The list of tags to fix
            // annotation or inline
            'tags' => ['inheritdoc' => 'annotation']
        ],

        // Docblocks should only be used on structural elements.
        'phpdoc_to_comment' =>
        [
            // List of ignored tags (matched case insensitively)
            'ignored_tags' => ['todo']
        ],

        // Removes extra blank lines after summary and after description in PHPDoc.
        'phpdoc_trim_consecutive_blank_line_separation' => true,

        // PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
        'phpdoc_trim' => true,

        // The correct case must be used for standard PHP types in PHPDoc.
        'phpdoc_types' =>
        [
            // Type groups to fix.
            'groups' => ['simple', 'alias', 'meta']
        ],

        // Sorts PHPDoc types.
        'phpdoc_types_order' =>
        [
            // The sorting algorithm to apply.
            'sort_algorithm' => 'none',

            // Forces the position of null (overrides sort_algorithm).
            'null_adjustment' => 'none'
        ],

        // @var and @type annotations must have type and name in the correct order.
        'phpdoc_var_annotation_correct_order' => true,

        // @var and @type annotations of classy properties should not contain the name.
        'phpdoc_var_without_name' => false,

        /* Return Notation */

        // There should not be an empty return statement at the end of a function.
        'no_useless_return' => false,

        // Local, dynamic and directly referenced variables should not be assigned and directly returned by a function or method.
        'return_assignment' => false,

        // A return statement wishing to return void should not return null.
        'simplified_null_return' => false,

        /* Semicolon */

        // Forbid multi-line whitespace before the closing semicolon or move the semicolon to the new line for chained calls.
        'multiline_whitespace_before_semicolons' =>
        [
            // Forbid multi-line whitespace or move the semicolon to the new line for chained calls.
            'strategy' => 'no_multi_line'
        ],

        // Remove useless (semicolon) statements.
        'no_empty_statement' => true,

        // Single-line whitespace before closing semicolon are prohibited.
        'no_singleline_whitespace_before_semicolons' => true,

        // Instructions must be terminated with a semicolon.
        'semicolon_after_instruction' => true,

        // Fix whitespace after a semicolon.
        'space_after_semicolon' =>
        [
            // Whether spaces should be removed for empty for expressions.
            'remove_in_empty_for_expressions' => true
        ],

        /* String Notation */

        // Escape implicit backslashes in strings and heredocs to ease the understanding of which are special chars interpreted by PHP and which not.
        // 
        // In PHP double-quoted strings and heredocs some chars like n, $ or u have special meanings if preceded by a backslash (and some are special
        // only if followed by other special chars), while a backslash preceding other chars are interpreted like a plain backslash. The precise list
        // of those special chars is hard to remember and to identify quickly: this fixer escapes backslashes that do not start a special
        // interpretation with the char after them. It is possible to fix also single-quoted strings: in this case there is no special chars apart
        // from single-quote and backslash itself, so the fixer simply ensure that all backslashes are escaped. Both single and double backslashes
        // are allowed in single-quoted strings, so the purpose in this context is mainly to have a uniformed way to have them written all over the
        // codebase.
        'escape_implicit_backslashes' =>
        [
            // Whether to fix single-quoted strings.
            'single_quoted' => false,

            // Whether to fix double-quoted strings.
            'double_quoted' => false,

            // Whether to fix heredoc syntax.
            'heredoc_syntax' => false
        ],

        // Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax.
        //
        // The reasoning behind this rule is the following:
        //      - When there are two valid ways of doing the same thing, using both is confusing, there should be a coding standard to follow
        //      - PHP manual marks "$var" syntax as implicit and "${var}" syntax as explicit: explicit code should always be preferred
        //      - Explicit syntax allows word concatenation inside strings, e.g. "${var}IsAVar", implicit doesn’t
        //      - Explicit syntax is easier to detect for IDE/editors and therefore has colors/highlight with higher contrast, which is easier
        //        to read Backtick operator is skipped because it is harder to handle; you can use backtick_to_shell_exec fixer to normalize
        //        backticks to strings
        'explicit_string_variable' => false,

        // Convert heredoc to nowdoc where possible.
        'heredoc_to_nowdoc' => false,

        // There should not be a binary flag before strings.
        'no_binary_string' => false,

        // Converts explicit variables in double-quoted strings and heredoc syntax from simple to complex format (${ to {$).
        // Doesn’t touch implicit variables. Works together nicely with explicit_string_variable.
        'simple_to_complex_string_variable' => false,

        // Convert double quotes to single quotes for simple strings.
        'single_quote' => false,

        /* Whitespace */

        // Each element of an array must be indented exactly once.
        'array_indentation' => true,

        // An empty line feed must precede any configured statement.
        'blank_line_before_statement' =>
        [
            // List of statements which must be preceded by an empty line.
            // Allowed values: a subset of ['break', 'case', 'continue', 'declare', 'default', 'do', 'exit', 'for', 'foreach', 'goto', 'if', 'include', 'include_once', 'phpdoc', 'require', 'require_once', 'return', 'switch', 'throw', 'try', 'while', 'yield', 'yield_from']
            'statements' => ['if', 'do', 'for', 'goto', 'include', 'include_once', 'switch', 'try', 'while']
        ],

        // Putting blank lines between use statement groups.
        'blank_line_between_import_groups' => false,

        // Remove extra spaces in a nullable typehint.
        // Rule is applied only in a PHP 7.1+ environment.
        'compact_nullable_typehint' => false,

        // Heredoc/nowdoc content must be properly indented. Requires PHP >= 7.3.
        'heredoc_indentation' =>
        [
            // Whether the indentation should be the same as in the start token line or one level more.
            'indentation' => 'start_plus_one'
        ],

        // Code MUST use configured indentation type.
        'indentation_type' => true,

        // All PHP files must use same line ending.
        'line_ending' => true,

        // Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported.
        'method_chaining_indentation' => true,

        // Removes extra blank lines and/or blank lines following configuration.
        'no_extra_blank_lines' =>
        [
            // List of tokens to fix.
            'tokens' => ['attribute', 'break', 'case', 'continue', 'curly_brace_block', 'default', 'extra', 'parenthesis_brace_block', 'return', 'square_brace_block', 'switch', 'throw', 'use', 'use_trait']
        ],

        // There MUST NOT be spaces around offset braces.
        'no_spaces_around_offset' => true,
        
        // There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis.
        'no_spaces_inside_parenthesis' => true,

        // Remove trailing whitespace at the end of non-blank lines.
        'no_trailing_whitespace' => true,

        // Remove trailing whitespace at the end of blank lines.
        'no_whitespace_in_blank_line' => true,

        // A PHP file without end tag must always end with a single empty line feed.
        'single_blank_line_at_eof' => true,

        // Each statement must be indented.
        'statement_indentation' => true,

        // A single space or none should be around union type and intersection type operators.
        'types_spaces' =>
        [
            // spacing to apply around union type and intersection type operators.
            'space' => 'none',

            // spacing to apply around type operator when catching exceptions of multiple types, use null to follow the value configured for space.
            'space_multiple_catch' => null
        ]

    ])
;
