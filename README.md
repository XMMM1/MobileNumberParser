Test project with vagrant, puppet,jsonRPC,composer

Vagrant:
ubuntu/trusty32
for more detail see Vagrant file

Test task:
1. Create a package (namespace) with following requirements:

needs to take MSISDN as an input
returns MNO identifier, country dialling code, subscriber number and country identifier as defined with ISO 3166-1-alpha-2
choose 2 MNOs per continent, or the entire world, up to you
do not care about number portability
For example, MSISDN + 38640123456 returns si.mobil, 386, 40123456, SI.

2. Write all needed tests.

3. Code needs to pass following checks (please include the script as well):
php -l
phpcs --standard=PSR2
phpmd codesize,design,naming,unusedcode,controversial --strict
phpcpd --min-lines 3 --min-tokens 50

