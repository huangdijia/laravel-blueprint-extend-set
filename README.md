# laravel-blueprint-extend-set

## Installation

~~~bash
composer require huangdijia/laravel-blueprint-extend-set
~~~

## Usage

~~~php
Schema::create('table', function (Blueprint $table) {
    // ...
    $table->set('set1', ['', 'a', 'b']);
    // or
    $table->addColumn('set', 'set2',  ['allowed'=>['', 'a', 'b']]);
    // ...
});
~~~