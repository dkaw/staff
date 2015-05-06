set :branch, "master"
set :application, "trombinoscope"
set :deploy_to, "/var/www/html/trombinoscope"
# Le nom d’utilisateur du serveur distant

set :domain, "root@192.168.2.15"

server '192.168.2.15', :app, :web, :primary => true

