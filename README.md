# laravel-blueprint-extend-set

# Usage

~~~php
$table->set('test_set2', ['', 'a', 'b'])->default('')->comment('test set 2');
~~~

or

~~~php
$table->addColumn('set', 'test_set1',  ['allowed'=>['', 'a', 'b']])->default('')->comment('test set 1');
~~~