#!/bin/bash

# Limpiar la configuración de la aplicación Laravel
php artisan config:clear

# Esperar hasta que la base de datos esté lista (opcional)
DB_HOST="javierjamaica.synology.me"
DB_PORT="3307"
echo "Esperando que la base de datos esté disponible en $DB_HOST:$DB_PORT ..."
while ! nc -z $DB_HOST $DB_PORT; do
    sleep 5
done
echo "La base de datos está lista."

# Verificar si las migraciones ya se han ejecutado
if [ ! -f /var/www/html/migrations_completed ]; then
    # Ejecutar migraciones de la base de datos
    echo "Ejecutando migraciones de la base de datos..."
    php artisan migrate:fresh --seed --force
    if [ $? -eq 0 ]; then
        echo "Migraciones completadas exitosamente."
        # Crear marca de migraciones completadas
        touch /var/www/html/migrations_completed
    else
        echo "Error al ejecutar las migraciones. Verifique los registros para obtener más detalles."
        exit 1
    fi
else
    echo "Las migraciones ya se han ejecutado previamente. Saltando este paso."
fi

# Continuar con la ejecución normal del contenedor
apache2-foreground
