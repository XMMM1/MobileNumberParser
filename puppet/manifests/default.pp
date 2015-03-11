Exec { path => [ "/bin/", "/sbin/" , "/usr/bin/", "/usr/sbin/" ] }

exec { "apt-get update":
  command => "/usr/bin/apt-get update",
}


# Apache
class { 'apache':                # use the "apache" module
  default_vhost => false,        # don't use the default vhost
  default_mods => false,         # don't load default mods
  mpm_module => 'prefork',        # use the "prefork" mpm_module
}
include apache::mod::php        # include mod php

apache::vhost { '3fs':  # create a vhost called "example.com"
  port    => '80',               # use port 80
  docroot => '/vagrant',     # set the docroot to the /var/www/html
}