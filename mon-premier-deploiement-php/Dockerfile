FROM php:8.2-cli

# Copier les fichiers de l'application
COPY . /app

# Définir le répertoire de travail
WORKDIR /app

# Exposer le port (Render utilise la variable $PORT)
EXPOSE $PORT

# Démarrer le serveur PHP avec le port dynamique
CMD php -S 0.0.0.0:${PORT:-8080} index.php
