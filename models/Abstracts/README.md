# Classes Abstraites

Les classes abstraites sont des classes qui ne peuvent pas être instanciées directement. Elles sont conçues pour être héritées par des classes filles qui elles peuvent être instanciées.

Elles servent de modèle ou de structure pour d'autres classes dérivées, appelées classes concrètes. Une classe abstraite peut contenir des méthodes abstraites et des méthodes concrètes, ainsi que des propriétés.

```php
abstract class Animal {
    // la classe enfant en héritera
    protected $name;

    // la classe enfant en héritera
    public function __construct($name) {
        $this->name = $name;
    }
    // la classe enfant devra implémenter cette méthode
    abstract public function makeSound();

    // la classe enfant en héritera
    public function getName() {
        return $this->name;
    }
}
```
