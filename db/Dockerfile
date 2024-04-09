# Use a imagem base oficial do MySQL
FROM mysql:5.7

# Defina as variáveis de ambiente para o MySQL
ENV MYSQL_ROOT_PASSWORD=123
ENV MYSQL_DATABASE=moveis_star
ENV MYSQL_USER=admin
ENV MYSQL_PASSWORD=123

# Opcional: Copie um arquivo SQL para inicializar o banco de dados (se necessário)
COPY db/conf/db.sql /docker-entrypoint-initdb.d/db.sql

EXPOSE 3306
