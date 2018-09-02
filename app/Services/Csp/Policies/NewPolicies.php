<?php

namespace App\Services\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Policy;

class NewPolicies extends Policy
{
    /** @var App's origin */
    protected $origin;

    /**
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    public function configure()
    {
        $this->setDefaultPolicies();
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
            ->addDirective(Directive::IMG, 'data:')
            ->addDirective(Directive::MEDIA, 'self')
            ->addDirective(Directive::OBJECT, 'self')
            ->addDirective(Directive::SCRIPT, 'self')
            ->addDirective(Directive::FONT, 'self')
            ->addDirective(Directive::STYLE, 'self');
    }
}
