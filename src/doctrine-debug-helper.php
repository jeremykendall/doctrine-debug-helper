<?php

/**
 * Doctrine Debug Helper: Convenience wrapper around \Doctrine\Common\Util\Debug::dump() with custom defaults
 *
 * @copyright 2014 Jeremy Kendall
 * @license https://github.com/jeremykendall/doctrine-debug-helper/blob/master/LICENSE MIT
 * @link https://github.com/jeremykendall/doctrine-debug-helper
 */

namespace {
    if (!function_exists('dc') || !function_exists('dcd')) {
        /**
         * Prints a dump of the public, protected and private properties of $var.
         *
         * Uses custom defaults: $maxDepth defaults to 3 and $stripTags
         * defaults to false.
         *
         * @link http://xdebug.org/
         *
         * @param mixed   $var       The variable to dump.
         * @param integer $maxDepth  The maximum nesting level for object properties.
         * @param boolean $stripTags Whether output should strip HTML tags.
         */
        function dc($var, $maxDepth = 3, $stripTags = false)
        {
            \Doctrine\Common\Util\Debug::dump($var, $maxDepth, $stripTags);
        }

        /**
         * Prints a dump of the public, protected and private properties of $var and dies
         *
         * Uses custom defaults: $maxDepth defaults to 3 and $stripTags
         * defaults to false.
         *
         * @link http://xdebug.org/
         *
         * @param mixed   $var       The variable to dump.
         * @param integer $maxDepth  The maximum nesting level for object properties.
         * @param boolean $stripTags Whether output should strip HTML tags.
         */
        function dcd($var, $maxDepth = 3, $stripTags = false)
        {
            dc($var, $maxDepth, $stripTags);
            die();
        }
    } else {
        trigger_error(
            'dc() or dcd() already exist as functions. doctrine-debug-helper cannot be used.',
            E_USER_ERROR
        );
    }
}
