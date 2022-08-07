<?php

namespace frontend\tests\functional;


use frontend\tests\FunctionalTester;


class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage(\Yii::$app->homeUrl);
        // $I->see(Yii::t('frontend', 'Online news'));
        // $I->see('Новини онлайн');
        $I->see('Online news');
        // $I->seeLink('About');
        // $I->click('About');
        // $I->see('This is the About page.');
    }
}