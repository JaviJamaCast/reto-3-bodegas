#!/bin/bash
php artisan config:clear
# Espera a que la base de datos esté lista (opcional)
while ! nc -z javierjamaica.synology.me 3307; do
    sleep 5
done


    echo "Ejecutando migraciones de la base de datos..."
    artisan migrate:fresh --seed --force
    echo "Migraciones completadas."

# Continuar con la ejecución normal del contenedor
apache2-foreground
