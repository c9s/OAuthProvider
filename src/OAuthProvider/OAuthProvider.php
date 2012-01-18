<?php
namespace OAuthProvider;
use ReflectionClass;

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
    static function create($providerName, $args = array())
    {
        $class = self::$providers[ $providerName ];
        $rc = new ReflectionClass( $class );
        return $rc->newInstanceArgs( $args );
    }

}
