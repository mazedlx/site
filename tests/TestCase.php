<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function signIn($user = null)
    {
        $user = $user ?: create('App\User');
        $this->actingAs($user);
        return $this;
    }

    protected function signInAsAdministrator($user = null)
    {
        $user = $user ?: create('App\User');

        $user->roles()->sync(create('App\Role', ['role' => 'administrator', 'label' => 'Administrator'])->id);

        $this->addSettings($user);

        $this->actingAs($user);

        return $this;
    }

    protected function signInAsCreator($user = null)
    {
        $user = $user ?: create('App\User');

        $user->roles()->sync(create('App\Role', ['role' => 'create_orders', 'label' => 'kann Bestellungen anlegen'])->id);

        $this->addSettings($user);

        $this->actingAs($user);

        return $this;
    }

    protected function signInAsReadOnly($user = null)
    {
        $user = $user ?: create('App\User');

        $user->roles()->sync(create('App\Role', ['role' => 'read_only', 'label' => 'Nur lesender Zugriff'])->id);

        $this->addSettings($user);

        $this->actingAs($user);

        return $this;
    }

    protected function addSettings($user)
    {
        $setting = create('App\Setting', ['label' => 'EintrÃ¤ge pro Seite', 'setting' => 'itemsPerPage', 'type' => 'integer']);
        $user->settings()->attach([$setting->id => ['value' => 15]]);

        $setting = create('App\Setting', ['label' => 'Anzahl letzte Bewegungen bei Artikel-Detailansicht', 'setting' => 'lastRotationItems', 'type' => 'integer']);
        $user->settings()->attach([$setting->id => ['value' => 10]]);

        $setting = create('App\Setting', ['label' => 'GelÃ¶schte Artikel anzeigen', 'setting' => 'showDeletedArticles', 'type' => 'boolean']);
        $user->settings()->attach([$setting->id => ['value' => true]]);
    }
}
