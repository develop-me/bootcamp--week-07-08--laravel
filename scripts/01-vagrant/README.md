# Day 1: Morning

## Half-way reminder

- code neatness
- indentation
- naming
- debugging process

## Server-side and Backend

- PHP is server-side language (*any* language can be a server-side language)
- web server runs the PHP
- what is role of server, why use it. Centralised architecture
- LAMP/LEMP
- NGINX increasingly popular as it's built for modern web apps


# Vagrant

- Uses a base "box": basic setup - OS, packages (e.g. PHP, NGINX)
- Creates a VM from the box
- One per project (usually)

## Demo

- Win XP

- LAMP server for today

```ruby
Vagrant.configure("2") do |config|
    config.vm.box = "laravel/homestead"
    config.vm.synced_folder ".", "/home/vagrant/code"
end
```

- Can't access index.php directly (demo)
- config `nginx`:
```
server {
    listen [::]:80;
    listen 80;

    root  /home/vagrant/code;

    location ~ \.php$ {
        try_files $uri =404;

        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```
- Hosts and IP addresses
    ```bash
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "oli.test"
    ```
- `vagrant reload`

- Vagrantfile tour
    - change IP for each VM
    - change hostname
