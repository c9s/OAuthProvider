<?php
namespace OAuthProvider;
use ReflectionClass;

/**
 * @VERSION 1.0.1
 */

class OAuthProvider 
{

    static $providers = array(
        'twitter' => 'OAuthProvider\OAuth_1a\OAuthTwitter',
        'plurk'   => 'OAuthProvider\OAuth_1a\OAuthPlurk',
        'facebook'   => 'OAuthProvider\OAuth_2\OAuthFacebook',
        'github'     => 'OAuthProvider\OAuth_2\OAuthGitHub',
        'google'     => 'OAuthProvider\OAuth_2\OAuthGoogle',
    );

    static function getClass($providerName)
    {
        return self::$providers[ $providerName ];
    }


    /**
     * static method for creating provider object
     *
     * OAuthProvider::create('twitter', array( 
     *    'consumer_key' => ...,
     *    'consumer_secret' => ...,
     * ));
     *
     */
    static function create($providerName)
    {
        $class = self::$providers[ $providerName ];
        $args = func_get_args();
        array_shift($args);
        $rc = new ReflectionClass( $class );
        return $rc->newInstanceArgs( $args );
    }

}
