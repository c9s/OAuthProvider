<?php
namespace OAuthProvider\OAuth2;

class OAuthFacebook extends AbstractProvider
{
    const HOST = 'www.facebook.com';
    const NAME = 'Facebook';

    public function getAuthorizeUrl() {
        return 'https://www.facebook.com/dialog/oauth';
    }

    public function getAccessTokenUrl() {
        return 'https://graph.facebook.com/oauth/access_token';
    }

    /**
     * Return Valid Scopes
     *
     * https://developers.facebook.com/docs/facebook-login/permissions
     *
     * @return array valid Scopesopes
     */
    public function getValidScopes() {
        return array(
            'basic_info',
            'email',
            'friends_photos',
            'publish_actions',
            'read_stream',
            'user_about_me',
            'user_activities',
            'user_birthday',
            'user_checkins',
            'user_events',
            'user_groups',
            'user_hometown',
            'user_interests',
            'user_likes',
            'user_location',
            'user_notes',
            'user_photos',
            'user_questions',
            'user_relationships',
            'user_status',
            'user_subscriptions',
            'user_videos',
            'user_website',
        );
    }

}
