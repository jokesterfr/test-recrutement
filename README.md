Arena Game Symfony Edition
==========================


## Setup

Install composer

```
composer install
php app/console server:start
```

## Tasks

* Update ``Arena\Arena`` class to inject a logger and turn every `echo` instruction into a log notice.
* Declare ``Arena\Arena`` class as a service, and use it into start a game in a new action of `DefaultController`
  for instance => `localhost:8000/game?mode=1` launches the fight with `$fightMode` equals to 1.
* Update ``Arena\Arena`` class to inject the event and remove the logger: 
  the objective is to use the logger inside an event listener ``AppBundle\EventListener\ArenaListener``
  to do the same stuff as before.
* Write unit tests for the ``Àrena\Arena`` class in ``Arena\Tests``: tests should pass.
