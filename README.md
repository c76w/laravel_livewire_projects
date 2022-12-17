<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Livewire Projects

<h3>A number of projects created using Laravel & Livewire</h3>
<hr>
<h4>How to use</h4>
<ul>
    <li>Clone the repository with git clone</li>
    <li>In the console run copy ".env.example .env" to create the .env file</li>
    <li>In the .env file change DB_CONNECTION=mysql to DB_CONNECTION=sqlite</li>
    <li>Still in the .env file - comment out or remove the following</li>
        <ul>
            <li># DB_HOST=127.0.0.1</li>
            <li># DB_PORT=3306</li>
            <li># DB_DATABASE=livewire_projects</li>
            <li># DB_USERNAME=root</li>
            <li># DB_PASSWORD=</li>
        </ul>
    <li>In the console create the sqlite database by running "touch database/database.sqlite"</li>
    <li>Run composer install</li>
    <li>Run php artisan key:generate</li>
    <li>Run php artisan migrate --seed</li>
    <li>Run npm install</li>
    <li>Run npm run dev</li>
    <li>Lastly run php artisan serve</li>
</ul>
<p>That's it - Register your account and sign in</p>
<hr>
<h4>License</h4>
Use and re-use however you want.
<hr>
