FROM mysql:8


ENV MYSQL_DATABASE=ujiansna
ENV MYSQL_USER=sera
ENV MYSQL_PASSWORD=halohalo

ENV MYSQL_ROOT_PASSWORD=abcdefgh
ENV MYSQL_HOST=127.0.0.1
ENV MYSQL_PORT=3306


COPY ./redlock-db.sql /docker-entrypoint-initdb.d/

EXPOSE 3306