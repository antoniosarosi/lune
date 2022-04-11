<?php

namespace App\Providers;

use Lune\Validation\Rule;

class RuleServiceProvider {
    /**
     * Load default validation rules
     *
     * @return void
     */
    public function registerServices() {
        Rule::loadDefaultRules();
    }
}
