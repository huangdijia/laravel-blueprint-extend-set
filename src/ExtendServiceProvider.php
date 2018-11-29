<?php

namespace Huangdijia\Database;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Grammars\MySqlGrammar;
use Illuminate\Support\ServiceProvider;

class ExtendServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->registerDatabaseMacros();
    }

    public function registerDatabaseMacros()
    {
        if (!MySqlGrammar::hasMacro('typeSet')) {
            MySqlGrammar::macro('typeSet', function ($column) {
                return sprintf('set(%s)', $this->quoteString($column->allowed));
            });
        }

        if (!Blueprint::hasMacro('set')) {
            Blueprint::macro('set', function ($column, array $allowed) {
                return $this->addColumn('set', $column, compact('allowed'));
            });
        }
    }
}
