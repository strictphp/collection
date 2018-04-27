# StrictPHP/Collection
Collection templates and type-specified class generator.

# Installation
`composer install strictphp/collection`

# Generate Vector Class
`vendor/bin/collection vector $new_class_namespace $target_full_qualified_class_name`

# Example
```php
<?php
namespace MyNamespace;
class MyClass { }
```

Run `vendor/bin/collection vector MyNamespace MyNamespace\\MyClass` and you will find new files `BaseVector_MyClass.php`, `Vector_MyClass.php` and `VectorIterator_MyClass.php` are created in the project root directory.

Move those files to proper directory and use `Vector_MyClass` for your project.

# Vectors this repository contains.
- `Strict\Collection\Vector\Scalar\Vector_int`
- `Strict\Collection\Vector\Scalar\Vector_bool`
- `Strict\Collection\Vector\Scalar\Vector_float`
- `Strict\Collection\Vector\Scalar\Vector_string`
- `Strict\Collection\Vector\Scalar\Vector_callable`
- `Strict\Collection\Vector\Scalar\Vector_iterable`
- `Strict\Collection\Vector\Templates\Vector_stdClass`