<?php
namespace OAuthProvider;
use ReflectionClass;

/**
 * @VERSION 1.1.0
 */

class OAuthProvider 
{

    static $providers = array(
        'twitter' => 'OAuthProvider\OAuth1\OAuthTwitter',
        'plurk'   => 'OAuthProvider\OAuth1\OAuthPlurk',
        'facebook'   => 'OAuthProvider\OAuth2\OAuthFacebook',
        'github'     => 'OAuthProvider\OAuth2\OAuthGitHub',
        'google'     => 'OAuthProvider\OAuth2\OAuthGoogle',
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
