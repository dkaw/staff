set :application, "trombinoscope"
set :deploy_to, "/var/www/html/trombinoscope"
set :app_path, "app"
set :user, "root"

set :repository, "git@github.com:dkaw/staff.git"
set :branch, "preprod"
set :scm, :git
set :deploy_via, :copy



