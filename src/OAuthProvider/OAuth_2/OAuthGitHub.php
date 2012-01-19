<?php
namespace OAuthProvider\OAuth_2;

class OAuthGitHub extends AbstractProvider
{
    const name = 'GitHub';
    const host = 'github.com';

    public function getAuthorizeUrl() {
        return 'https://' . self::host . '/login/oauth/authorize';
    }

    public function getAccessTokenUrl() {
        return 'https://' . self::host . '/login/oauth/access_token';
    }

    public function getValidScopes() {
        return explode(',','user,public_repo,repo,gist');
    }

    public function getResponseType() { 
        return 'token';
    }

}
