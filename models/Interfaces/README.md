# Les Interfaces

Les interfaces sont des classes abstraites qui ne contiennent que des méthodes abstraites. Elles servent de contrat pour les classes qui les implémentent. Elles permettent de définir un ensemble de méthodes que les classes qui les implémentent doivent obligatoirement posséder.

A noter qu'on peut implémenter plusieurs interfaces dans une même classe, ce qui n'est pas possible avec l'héritage classique.

```php 
interface Animal {
    public function makeSound();
}
```
Une autre interface
```php 
interface Humain {
    public function makeCri();
}
```
Une classe qui implémente une interface

```php
class Chat implements Animal {
    // la classe enfant protected 
    public function makeSound() {
        echo "Miaou !";
    }
}
```

Une classe qui implémente 2 interfaces

```php  
class Homme implements Animal, Humain { 
    // la classe enfant protected 
    public function makeSound() {
        echo "Miaou !";
    }
    public function makeCri() {
        echo "Aie !";
    }
}
```
