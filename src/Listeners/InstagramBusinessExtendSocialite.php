<?php

namespace JanykSteenbeek\SocialiteInstagramBusiness\Listeners;

use SocialiteProviders\Manager\SocialiteWasCalled;
use JanykSteenbeek\SocialiteInstagramBusiness\Two\InstagramBusinessProvider;

class InstagramBusinessExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled): void
    {
        $socialiteWasCalled->extendSocialite('instagram-business', InstagramBusinessProvider::class);
    }
}
