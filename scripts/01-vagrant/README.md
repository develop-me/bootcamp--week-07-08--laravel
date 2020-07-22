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

```ruby
Vagrant.configure("2") do |config|
    config.vm.box = "laravel/homestead"
    config.vm.synced_folder ".", "/home/vagrant/code"
end
```

- Can't access index.php directly (demo)
- Hosts and IP addresses
- Vagrantfile tour
    - change IP for each VM
    - change hostname
