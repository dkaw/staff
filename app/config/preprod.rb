set :application, "trombinoscope"
set :domain, "user@preprod.com" # Le SSH de destination
set :deploy_to, "/var/www/html/trombinoscope" #
set :app_path, "app" #
set :user, "dizda" #

set :repository, "git@github.com:dkaw/staff.git" #
set :branch, "preprod" #
set :scm, :git # SVN ?
set :deploy_via, :copy #

set :model_manager, "doctrine" # ORM

role :web, domain
role :app, domain, :primary =&gt; true
