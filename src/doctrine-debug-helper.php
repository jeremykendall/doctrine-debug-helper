<?php

/**
 * Doctrine Debug Helper: Convenience wrapper around \Doctrine\Common\Util\Debug::dump()
 *
 * @copyright 2014 Jeremy Kendall
 * @license https://github.com/jeremykendall/doctrine-debug-helper/blob/master/LICENSE MIT
 * @link https://github.com/jeremykendall/doctrine-debug-helper
 */

namespace {
    if (!function_exists('d')) {

        /**
         * Prints a dump of the public, protected and private properties of $var.
         *
         * @link http://xdebug.org/
         *
         * @param mixed   $var       The variable to dump.
         * @param integer $maxDepth  The maximum nesting level for object properties.
         * @param boolean $stripTags Whether output should strip HTML tags.
         */
        function d($var, $maxDepth = 2, $stripTags = true)
        {
            \Doctrine\Common\Util\Debug::dump($var, $maxDepth, $stripTags);
        }

        /**
         * Prints a dump of the public, protected and private properties of $var and dies
         *
         * @link http://xdebug.org/
         *
         * @param mixed   $var       The variable to dump.
         * @param integer $maxDepth  The maximum nesting level for object properties.
         * @param boolean $stripTags Whether output should strip HTML tags.
         */
        function dd($var, $maxDepth = 2, $stripTags = true) {
            d($var, $maxDepth, $stripTags);
            die();
        }

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
            d($var, $maxDepth, $stripTags);
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
        function dcd($var, $maxDepth = 3, $stripTags = false) {
            d($var, $maxDepth, $stripTags);
            die();
        }
    }
}
