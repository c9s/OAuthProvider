<?php
namespace OAuthProvider\OAuth1;

class OAuthYahoo extends AbstractProvider
{
    const VERSION = '1.0a';
    const HOST = 'api.login.yahoo.com';
    const NAME = 'Yahoo';

    public function getRequestTokenUrl() { return 'https://' . self::HOST . '/oauth/v2/get_request_token'; }

    public function getRequestTokenMethod() { return 'POST'; }

    public function getAccessTokenUrl() { return 'https://' . self::HOST . '/oauth/v2/get_token'; }

    public function getAccessTokenMethod() { return 'POST'; }

    public function getAuthorizeUrl() { return 'https://' . self::HOST . '/oauth/v2/request_auth'; }

}





