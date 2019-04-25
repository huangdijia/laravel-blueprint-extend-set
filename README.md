# laravel-blueprint-extend-set

[![Latest Stable Version](https://poser.pugx.org/huangdijia/laravel-blueprint-extend-set/version.png)](https://packagist.org/packages/huangdijia/laravel-blueprint-extend-set)
[![Total Downloads](https://poser.pugx.org/huangdijia/laravel-blueprint-extend-set/d/total.png)](https://packagist.org/packages/huangdijia/laravel-blueprint-extend-set)

## ⚠️⚠️⚠️

> Official support in 5.8.12

https://laravel-news.com/laravel-5-8-12
https://github.com/laravel/framework/pull/28171

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