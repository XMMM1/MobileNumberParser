Exec { path => [ "/bin/", "/sbin/" , "/usr/bin/", "/usr/sbin/" ] }

exec
{
  'apt-get update':
    command => '/usr/bin/apt-get update',
    require => Exec['add php55 apt-repo']
}

class { "apache": }

include php55
include php

#file { '/var/www/3fs':
#  ensure => 'link',
#  target => '/vagrat',
#}