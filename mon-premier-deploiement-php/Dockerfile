# Utilise l'image PHP officielle avec Apache
FROM php:8.2-apache

# Copie les fichiers de l'application
COPY . /var/www/html/

# Active le module Apache mod_rewrite si nécessaire
RUN a2enmod rewrite

# Définit le répertoire de travail
WORKDIR /var/www/html

# Expose le port 80
EXPOSE 80

# Commande par défaut
CMD ["apache2-foreground"]
