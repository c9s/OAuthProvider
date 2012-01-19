<?php
namespace OAuthProvider\OAuth_1a;

class OAuthYahoo extends AbstractProvider
{
    const version = '1.0a';
    const host = 'api.login.yahoo.com';
    const name = 'Yahoo';

    public function getRequestTokenUrl() { return 'https://' . self::host . '/oauth/v2/get_request_token'; }

    public function getRequestTokenMethod() { return 'POST'; }

    public function getAccessTokenUrl() { return 'https://' . self::host . '/oauth/v2/get_token'; }

    public function getAccessTokenMethod() { return 'POST'; }

    public function getAuthorizeUrl() { return 'https://' . self::host . '/oauth/v2/request_auth'; }

}





