<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70a2d298353009ae16c5d7c1fc7fa23b
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '50b81ffc01da30f98e463592787d7917' => __DIR__ . '/..' . '/jeremykendall/php-domain-parser/src/pdp-parse-url.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        'ee05f3eb6cd106ac99bfaf4d0d9829d8' => __DIR__ . '/..' . '/league/uri/src/functions_include.php',
        '068a39c9ec05e457aaedd6920c31c3db' => __DIR__ . '/..' . '/weew/php-helpers-array/src/array.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'PdfFormsLoader\\' => 15,
            'PDFfiller\\Validation\\' => 21,
            'PDFfiller\\OAuth2\\Client\\Provider\\' => 33,
        ),
        'L' => 
        array (
            'League\\Uri\\' => 11,
            'League\\OAuth2\\Client\\' => 21,
        ),
        'I' => 
        array (
            'Illuminate\\Validation\\' => 22,
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PdfFormsLoader\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
        'PDFfiller\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/pdffiller/public-rest-api-validation-rules/Validation',
        ),
        'PDFfiller\\OAuth2\\Client\\Provider\\' => 
        array (
            0 => __DIR__ . '/..' . '/pdffiller/pdffiller-php-api-client/src',
        ),
        'League\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/uri/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        'Illuminate\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/validation',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SecurityLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/security-lib/lib',
            ),
        ),
        'R' => 
        array (
            'RandomLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/random-lib/lib',
            ),
        ),
        'P' => 
        array (
            'Pdp\\' => 
            array (
                0 => __DIR__ . '/..' . '/jeremykendall/php-domain-parser/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70a2d298353009ae16c5d7c1fc7fa23b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70a2d298353009ae16c5d7c1fc7fa23b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit70a2d298353009ae16c5d7c1fc7fa23b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
