# Utiliser l'image de base PHP avec Apache
FROM php:apache

# installer l'extension MySQLi
RUN docker-php-ext-install mysqli

# Mettre à jour les paquets et installer Git
RUN apt-get update && apt-get install -y 

# Définir le répertoire de travail
WORKDIR /var/www/html

# Exposer le port 80
EXPOSE 80

# Définir le point d'entrée pour Apache
CMD ["apache2-foreground"]
