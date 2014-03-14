<?php
namespace OAuthProvider\OAuth2;

/**
 * http://strava.github.io/api/v3/oauth/#post-token
 */
class OAuthStrava extends AbstractProvider
{
    const HOST = 'www.strava.com';
    const NAME = 'Strava';

    public function getAuthorizeUrl() {
        return 'https://www.strava.com/oauth/authorize';
    }

    public function getAccessTokenUrl() {
        return 'https://www.strava.com/oauth/token';
    }

    public function getValidScopes() {
        return array('public','write','view_private,write');
    }
}
