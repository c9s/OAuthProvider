<?php
namespace OAuthProvider\OAuth2;

class OAuthRunKeeper extends AbstractProvider
{
    const HOST = 'runkeeper.com';
    const NAME = 'RunKeeper';

    public function getAuthorizeUrl() {
        return 'https://runkeeper.com/apps/authorize';
    }

    public function getDeauthorizeUrl() {
        return 'https://runkeeper.com/apps/de-authorize';
    }

    public function getAccessTokenUrl() {
        return 'https://runkeeper.com/apps/token';
    }

    public function getValidScopes() {
        return array();
    }

}
