# TDD Kata Workshow

This repo help you understand how use Test Driven Development in practice. To work you need [vagrant](https://www.vagrantup.com/downloads.html
) and [Virtual Box](https://www.virtualbox.org/wiki/Downloads). Please prepare your laptop before workshop.

# Prepare environment

Please clone this repository, install vagrant image box and install composer dependencies. You can copy and past this code:
```bash
git clone https://github.com/prekowski/tdd-kata.git
cd tdd-kata
vagrant up
```  

If you have composer on your local machine, you can run `composer install` directly. If not, please got to vagrant box by
`vagrant ssh` and then run commands

```bash
cd /vagrant
composer install
```

To be sure if everything working well, please run phpunit

```bash
./vendor/bin/phpunit
```

# Setup PhpStorm

Open new project in PhpStorm by open *tdd-kata* catalog. You can also run this via command line use: `pstorm .`.

For test method you can add Live Template. Go to *Settings -> Editor -> Live Templates*, click on **PHP** group and click "+" on right panel.
Then add new template with abbreviation `test` and description `PHP Unit test`. Template can look like this:

```php
public function testShould$NAME$()
{
    // Given
    $END$
    
    // When
    
    
    // Then
    
}
```
Last step is choose context for PHP.

When you save Live Template, you can use it in test classes to create new test by write only `test` and click `TAB`.
This help you write test faster and remember about Given/When/Then concept.

## Configuration Remote PHPUnit

Now you can setup PhpStorm to allow you run tests from IDE. First mark correctly catalog `src` and `tests`. Click right on catalog and choose from menu
**Mark Directory as** and choose `Source Root` for src dir and `Test Source Root` for tests dir.
Now you can click on *tests* catalog and choose `Run`. Before first run, you need setup your IDE:

1. Click PHP Unit setting icon which is on right side, after *Alternative configuration file*. 
2. Click "+" button and choose `PHPUnit by Remote Interpreter`.
3. Click "..." and add "CLI Interpreters" by click "+" and choose first option `From Docker, Vagrant, VM, Remote`. 
4. In configuration popup choose `Vagrant` and click "OK"
5. Accept your choose by click "OK" in parent popup.
6. From Interpreter list choose `Remote PHP 7.1` and click "OK"
7. Set *Path to script* value as `/vagrant/vendor/autoload.php` and click reload icon. You should see **PHPUnit version: 7.0.1** below.
8. Click "OK"
9. Finally you can run test by click on "RUN" button!
10. Welcome in TDD Kata Dojo :)

You should see one test passed and now you ready for workshop!

# More training

There is only one way for you to become master of TDD Kata - practice. You can find a lot of training examples here [http://codingdojo.org/](http://codingdojo.org/KataCatalogue/).
Use your free time to learn and practice and we all be greater then now!

Good Luck! 