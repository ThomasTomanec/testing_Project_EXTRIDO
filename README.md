# testing_Project_EXTRIDO
Tento projekt slouží k příjmacímu řízení do firmy Extrido

## Obsah
- [Úvod] (#úvod)
- [Funkce] (#Funkce)
- [Instalace] (#Instalace)

## Úvod
Jedná se o aplikaci, která uchovává, zobrazuje a mění informace o produktech pro správce webové stránky nabízející produkty s kryty pod motor.

## Funkce
- Hlavní funkcí aplikace je přídávat, odebírat a editovat produkty.
- Produkty lze také filtrovat, seřazovat a také stáhnout jejich seznam v podobě csv závislé na jejich filtraci a seřazení. 

## Instalace
git clone https://github.com/thomastomanec/testing_Project_EXTRIDO.git

cd testing_Project_EXTRIDO

npm install

php artisan migrate

php artisan db:seed

php artisan migrate:fresh --seed

php artisan serve

