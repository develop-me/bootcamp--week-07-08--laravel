# Challenges

## Creating a VM

1. Create a new directory called `mysql`
1. Get setup with a Vagrant box with the following `Vagrantfile`:

```ruby
Vagrant.configure("2") do |config|
    config.vm.box = "laravel/homestead"
    config.vm.synced_folder ".", "/home/vagrant/code"
end
```

## Using the VM

1. Create a file (use your imagination) in your `mysql` directory
1. Use `vagrant ssh` to access the VM
1. Navigate to `/home/vagrant/code`
1. Check that the directory contains the right files
