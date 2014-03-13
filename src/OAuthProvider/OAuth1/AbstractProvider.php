<?php
namespace OAuthProvider\OAuth1;
/**
 *
 * $providerTwitter = new OAuthProvider\Twitter;
 *
 */
abstract class AbstractProvider
{
    const version = '1.0a';
    const host = '';
    const name = '';

    public $version = '1.0a';
    public $consumerKey;
    public $consumerSecret;

    function __construct($options = array()) 
    {
        if( isset($options['consumer_key']) )
            $this->consumerKey = $options['consumer_key'];

        if( isset($options['consumer_secret']) )
            $this->consumerSecret = $options['consumer_secret'];
    }

    public function getName()
    {
        if( static::name )
            return static::name;
        return get_class($this);
    }

    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    public function setConsumerKey($key)
    {
        $this->consumerKey = $key;
    }

    public function setConsumerSecret($secret)
    {
        $this->consumerSecret = $secret;
    }

    abstract public function getRequestTokenUrl();
    abstract public function getRequestTokenMethod();

    abstract public function getAccessTokenUrl();
    abstract public function getAccessTokenMethod();

    abstract public function getAuthorizeUrl();
}
