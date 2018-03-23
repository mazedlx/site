<?php

namespace App\Services\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Policy;

class CustomPolicies extends Policy
{
    /** @var App's origin */
    protected $origin;

    /**
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    public function configure()
    {
        $this->setDefaultPolicies();
        $this->addGoogleFontPolicies();
        $this->addGravatarPolicies();
    }

    /**
     * @return Policy
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    private function setDefaultPolicies()
    {
        return $this->addDirective(Directive::BASE, 'self')
            ->addDirective(Directive::CONNECT, 'self')
            ->addDirective(Directive::DEFAULT, 'self')
            ->addDirective(Directive::FORM_ACTION, 'self')
            ->addDirective(Directive::IMG, 'self')
            ->addDirective(Directive::MEDIA, 'self')
            ->addDirective(Directive::OBJECT, 'self')
            ->addDirective(Directive::SCRIPT, 'self')
            ->addDirective(Directive::SCRIPT, 'unsafe-eval')
            ->addDirective(Directive::FONT, 'self')
            ->addDirective(Directive::STYLE, 'self');

    }

    /**
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    private function addGoogleFontPolicies()
    {
        $this->addDirective(Directive::FONT, [
            'fonts.gstatic.com',
            'fonts.googleapis.com',
            'data:',
        ])
            ->addDirective(Directive::STYLE, 'fonts.googleapis.com')
            ->addDirective(Directive::STYLE, 'unsafe-inline');
    }

    /**
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    private function addGravatarPolicies()
    {
        $this->addDirective(Directive::IMG, '*.gravatar.com');
    }
}