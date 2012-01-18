<?php

class OAuthProviderTest extends PHPUnit_Framework_TestCase
{
    function test()
    {
        $provider = OAuthProvider\OAuthProvider::create('twitter', array(
            'consumer_key' => 'aaa',
            'consumer_secret' => 'aaa',
        ));
        ok( $provider );
        is( 'aaa' , $provider->getConsumerKey() );
    }
}

