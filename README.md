# Airport Challenge
This is a command line app that allows planes to take off and land at an airport providing that weather condiditions are okay.

## Using the app
1. Clone this repo `git clone https://github.com/Caitlin-cooling/airportChallengePHP.git`
2. `cd airportChallengePHP`
3. Run `php composer.phar install` to install dependancies
4. Require files: `php -a -d auto_prepend_file=src/airport.php`

## Testing
Tests have been written using PHPunit, to run all tests use command ` ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests`

## User Stories
```
As an air traffic controller
So I can get passengers to a destination
I want to instruct a plane to land at an airport

As an air traffic controller
So I can get passengers on the way to their destination
I want to instruct a plane to take off from an airport and confirm that it is no longer in the airport

As an air traffic controller
To ensure safety
I want to prevent takeoff when weather is stormy

As an air traffic controller
To ensure safety
I want to prevent landing when weather is stormy

As an air traffic controller
To ensure safety
I want to prevent landing when the airport is full

As the system designer
So that the software can be used for many different airports
I would like a default airport capacity that can be overridden as appropriate
```
## Known Issues
I am aware that the weather test passes intermittently due to the random nature of array_rand method, and have been looking in to ways to stub the method and just check the return values of the method are correct.
