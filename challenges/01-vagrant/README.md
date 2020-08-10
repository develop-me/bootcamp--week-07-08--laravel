# Challenges

## Creating a VM

1. Create a new directory called `mysql`
1. Get setup with a Vagrant box by adding the following into a `Vagrantfile` inside your new directory:

```ruby
Vagrant.configure("2") do |config|
    config.vm.box = "laravel/homestead"
    config.vm.synced_folder ".", "/home/vagrant/code"
end
```
1. Finally turn on/create your Vagrant machine with `vagrant up`

## Using the VM

1. Create a file (use your imagination) in your `mysql` directory
1. Use `vagrant ssh` to access the VM (on Windows you may need to use password `vagrant` at the prompt)
1. Navigate to `/home/vagrant/code` (with `cd`)
1. Check that the directory contains the right files with `ls`
