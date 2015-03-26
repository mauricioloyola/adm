set :application,   "Web admin lograrme.com"
set :domain,        "69.195.198.111"
set :deploy_to,     "/var/www/vhosts/admin.lograrme.com/symfony_projects/"
set :app_path,      "app"

set :user,          "usradmin"  
set :use_sudo,      false
ssh_options[:port] = 22123

set :repository,    "https://github.com/mauricioloyola/adm.git"
set :scm,           :git
set :branch,        "master"

set :model_manager, "doctrine"

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain
role :db,         domain, :primary => true       # This may be the same as your `Web` server

set :use_composer, true
#set :update_vendors, true

set  :keep_releases,  3

set :shared_files,        ["app/config/parameters.yml"]
set :shared_children,     [app_path + "/logs", web_path + "/uploads", "vendor"]