<?php
namespace OAuthProvider\OAuth_2;

class OAuthFacebook extends AbstractProvider
{


    /*
	version          => 2,
	authorize_url    => 'https://www.facebook.com/dialog/oauth',
	access_token_url => 'https://graph.facebook.com/oauth/access_token',
	scope            => 'email',
    */
    const host = 'www.facebook.com';
    const name = 'Facebook';

    public function getAuthorizeUrl() {
        return 'https://www.facebook.com/dialog/oauth';
    }

    public function getAccessTokenUrl() {
        return 'https://graph.facebook.com/oauth/access_token';
    }

    public function getValidScopes() {
        return explode(',','email,user_birthday,user_about_me,user_status,user_photos,friends_photos,read_stream');
    }

}
