<?php
namespace OAuthProvider\OAuth1;

class OAuthPlurk extends AbstractProvider
{
    const version = '1.0a';
    const host = 'www.plurk.com';
    const name = 'Plurk';

    public function getRequestTokenUrl() { return 'http://' . self::host . '/OAuth/request_token'; }

    public function getRequestTokenMethod() { return 'POST'; }

    public function getAccessTokenUrl() { return 'http://' . self::host . '/OAuth/access_token'; }

    public function getAccessTokenMethod() { return 'POST'; }

    public function getAuthorizeUrl() { return 'http://' . self::host . '/OAuth/authorize'; }
}
