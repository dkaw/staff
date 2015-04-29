

set :stages, %w(preprod prod)
set :default_stage, "preprod"
set :stage_dir, "app/config"

require 'capistrano/ext/multistage'



set :application, "trombinoscope"
set :deploy_to,   "/var/www/html/trombinoscope"
set :app_path,    "app"

set :repository,  "git@github.com:dkaw/staff.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`
set :deploy_via, :copy

set :model_manager, "doctrine"
# Or: `propel`

set :writable_dirs, ["app/cache", "app/logs"]
set :webserver_user, "apache"
set :shared_files, ["app/config/parameters.yml"]
set :permission_method, :chown
set :use_set_permissions, true

set :use_sudo, false
set :user, "root"
set :use_composer, true


set  :keep_releases,  3

# Be more verbose by uncommenting the following line
logger.level = Logger::MAX_LEVEL