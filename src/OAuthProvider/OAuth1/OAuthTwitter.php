<?php
namespace OAuthProvider\OAuth1;

class OAuthTwitter extends AbstractProvider
{
    const VERSION = '1.0a';
    const HOST = 'api.twitter.com';
    const NAME = 'Twitter';

    public function getRequestTokenUrl() { return 'https://' . self::HOST . '/oauth/request_token'; }

    public function getRequestTokenMethod() { return 'POST'; }

    public function getAccessTokenUrl() { return 'https://' . self::HOST . '/oauth/access_token'; }

    public function getAccessTokenMethod() { return 'POST'; }

    public function getAuthorizeUrl() { return 'https://' . self::HOST . '/oauth/authorize'; }

}



