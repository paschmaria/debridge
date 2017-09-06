role :app, %w{root@138.197.122.105}
server '138.197.122.105', user: 'root', roles: %w{app}

set :ssh_options, {
    forward_agent: false,
    auth_methods: %w(password),
    password: 'switch555@@',
    user: 'root',
}

namespace :deploy do

    desc "Build"
    after :updated, :build do
        on roles(:app) do
            within release_path  do
            	execute "cp #{release_path}/.env.example #{release_path}/.env"
                execute :composer, "install --no-dev" # install dependencies
                execute :composer, "dump-autoload -o" # reload autoload file dependencies
                execute "php #{release_path}/artisan key:generate"
                execute "chmod -R 777 #{release_path}/storage"
                execute "chmod -R 777 #{release_path}/bootstrap/cache"
                execute "chmod -R 777 #{release_path}/vendor"
                execute "chmod -R 777 #{release_path}/public"
                execute "php #{release_path}/artisan migrate"
                execute "php #{release_path}/artisan cache:clear"
                # execute "php #{release_path}/artisan cache:clear"
            end
        end
    end
end