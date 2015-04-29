set :branch, "master"
set :application, "trombinoscope"
set :deploy_to, "/var/www/html/trombinoscope"
# Le nom d’utilisateur du serveur distant

set :domain, "root@k2"

server 'k2', :app, :web, :primary => true

role :web, domain
role :app, domain, :primary => true





