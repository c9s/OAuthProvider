<?php
namespace OAuthProvider\OAuth1;

class OAuthTwitter extends AbstractProvider
{
    const version = '1.0a';
    const host = 'api.twitter.com';
    const name = 'Twitter';

    public function getRequestTokenUrl() { return 'https://' . self::host . '/oauth/request_token'; }

    public function getRequestTokenMethod() { return 'POST'; }

    public function getAccessTokenUrl() { return 'https://' . self::host . '/oauth/access_token'; }

    public function getAccessTokenMethod() { return 'POST'; }

    public function getAuthorizeUrl() { return 'https://' . self::host . '/oauth/authorize'; }

}



