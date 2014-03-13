<?php
namespace OAuthProvider\OAuth1;
use PHPUnit_Framework_TestCase;
use Exception;

class OAuthTwitterTest extends PHPUnit_Framework_TestCase
{
    function testFunc()
    {
        $twitterProvider = new OAuthTwitter(array( 
            'consumer_key' => 'key',
            'consumer_secret' => 'secret',
        ));
        ok( $twitterProvider );

        is( '1.0a' , $twitterProvider::version );
        is( 'api.twitter.com' , $twitterProvider::host );
    }
} 
