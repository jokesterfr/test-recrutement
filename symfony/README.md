Arena Game Symfony Edition
==========================


## Setup

Install composer

```
composer install
php app/console server:start
```

## Tasks

* Declare ``Arena\Arena`` class as a service, and use it into start a game in a new action of `DefaultController`
  for instance => `localhost:8000/game/1` launches the fight with `$fightMode` equals to 1.
* Discuss how ``Arena\Arena`` could be improved to better manage the game's output
