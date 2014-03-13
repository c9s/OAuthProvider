<?php
namespace OAuthProvider\OAuth2;

class OAuthRunKeeper extends AbstractProvider
{
    const host = 'runkeeper.com';
    const name = 'RunKeeper';

    public function getAuthorizeUrl() {
        return 'https://runkeeper.com/apps/authorize';
    }

    public function getAccessTokenUrl() {
        return 'https://runkeeper.com/apps/token';
    }

    public function getValidScopes() {
        return '';
    }

}
