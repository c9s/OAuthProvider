<?php
namespace OAuthProvider\OAuth1;

class OAuthPlurk extends AbstractProvider
{
    const VERSION = '1.0a';
    const HOST = 'www.plurk.com';
    const NAME = 'Plurk';

    public function getRequestTokenUrl() { return 'http://' . self::HOST . '/OAuth/request_token'; }

    public function getRequestTokenMethod() { return 'POST'; }

    public function getAccessTokenUrl() { return 'http://' . self::HOST . '/OAuth/access_token'; }

    public function getAccessTokenMethod() { return 'POST'; }

    public function getAuthorizeUrl() { return 'http://' . self::HOST . '/OAuth/authorize'; }
}
