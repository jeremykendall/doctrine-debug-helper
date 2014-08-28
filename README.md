# Doctrine Debug Helper

The Doctrine Debug Helper is a set of convenience functions that wrap
`\Doctrine\Common\Util\Debug::dump()`. Because lazy.

## Installation

Use [Composer][3] to install Doctrine Debug Helper.

```
{
    "require": {
        "jeremykendall/doctrine-debug-helper": "*"
    }
}
```

## d() and dd()

`d()` and `dd()` provide the default behavior of
`\Doctrine\Common\Util\Debug::dump()` with less typing.

`void d($var, $maxDepth = 2, $stripTags = true)`

Prints a dump of the public, protected and private properties of $var.

`void dd($var, $maxDepth = 2, $stripTags = true)`

Prints a dump of the public, protected and private properties of $var and dies.

## dc() and dcd()

`dc()` and `dcd()` wrap `\Doctrine\Common\Util\Debug::dump()`, but use custom
defaults. I much prefer a higher `$maxDepth` than 2 and I don't want the dump run
through `html_entity_decode`. Since the point of these function is less typing,
these functions provide the defaults that I prefer.

`void dc($var, $maxDepth = 3, $stripTags = false)`

Prints a dump of the public, protected and private properties of $var.

Uses custom defaults: $maxDepth defaults to 3 and $stripTags defaults to false.

`void dcd($var, $maxDepth = 3, $stripTags = false)`

Prints a dump of the public, protected and private properties of $var and dies.

Uses custom defaults: $maxDepth defaults to 3 and $stripTags defaults to false.

## Recommendation

![Do you even Xdebug?][meme]

In my opinion, `\Doctrine\Common\Util\Debug::dump()` is best when [Xdebug][1]
is installed. You should be using Xdebug in development anyhow, so go 
[install it][2] now. NOW.

[1]: http://xdebug.org/
[2]: http://xdebug.org/docs/install
[3]: http://getcomposer.org
[meme]: http://i.imgur.com/i7bPKxG.png

