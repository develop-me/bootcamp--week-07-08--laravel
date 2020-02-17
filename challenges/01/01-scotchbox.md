# Creating a Scotch Box

1. `cd` to a suitable place, e.g. `cd develop-me/week07/`

1. Get setup with a Vagrant box built from the Scotch Box template

    ```bash
    git clone https://github.com/develop-me/scotch-box.git

    cd scotch-box

    vagrant up
    ```

1. In your browser load the `index.php` page:

    [http://scotchbox/index.php](http://scotchbox/index.php)

    Or (on Windows):

    [http://192.168.33.10/index.php](http://192.168.33.10/index.php)

## Advanced

1. Edit the `index.php` PHP script and verify that the page loaded in the browser changes.

1. Change the `config.vm.hostname` entry in `Vagrantfile` and run `vagrant reload`. Check if the box loads under the new domain name.
