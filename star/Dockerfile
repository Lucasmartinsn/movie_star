# Use a imagem oficial do PHP com Apache como base
FROM php:8.0-apache

# Atualizando o System e instalando dependências
RUN apt-get update && apt upgrade -y && apt-get install -y \
    libpq-dev \
    curl \
    lynx \
    unzip \
    vim \
    libicu-dev \
    libpq-dev \
    libcurl4-openssl-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    libmemcached-dev \
    libxslt1-dev \
    libzip-dev \
    libmagickwand-dev --no-install-recommends \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) pdo_mysql pdo_pgsql  intl mbstring mysqli curl gd xml zip xsl \
    && pecl install imagick redis memcached php-redis \
    && docker-php-ext-enable imagick redis memcached \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Definindo o ServerName do apache2
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Definindo que o apache vai seguir as regras definino no arquivo public/.htaccess
RUN a2enmod rewrite

# Criando o diretorio padrao de trabalho
RUN mkdir -p /var/www/html/star/

# Defina o diretório de trabalho para onde está o seu composer.json
WORKDIR /var/www/html/star/

# Copia tudo para dentro da pasta 
COPY ./star/ /var/www/html/star/

# Expose a porta 80 para acessar o Apache
EXPOSE 80