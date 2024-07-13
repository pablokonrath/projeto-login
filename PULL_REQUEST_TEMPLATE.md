# Descrição do Projeto

## Página de Login em PHP

Este projeto consiste em uma página de login desenvolvida em PHP, criada como parte de um curso de desenvolvimento web. A página permite que usuários autenticados acessem um sistema web protegido por senha, proporcionando uma experiência segura e intuitiva para os usuários finais.

### Funcionalidades Principais

- **Autenticação de Usuários:** Permite que os usuários ingressem suas credenciais (nome de usuário e senha) para acessar o sistema.
- **Validação de Entradas:** Realiza validação de dados para garantir que apenas usuários autorizados possam fazer login.
- **Interface Responsiva:** Adaptável a diferentes dispositivos, garantindo uma experiência de usuário consistente em desktops, tablets e smartphones.
- **Segurança:** Implementa práticas recomendadas de segurança, como hash de senhas para proteger informações confidenciais dos usuários.

### Tecnologias Utilizadas

- **PHP:** Linguagem de programação server-side utilizada para desenvolver a lógica de autenticação e validação.
- **HTML/CSS:** Utilizados para criar a estrutura e o estilo visual da página de login.
- **MySQL:** Banco de dados utilizado para armazenar informações de usuários e suas credenciais de acesso.

### Objetivo do Projeto

O principal objetivo deste projeto foi proporcionar uma experiência prática e educativa no uso do Docker, uma ferramenta essencial para a containerização de aplicações. Ao desenvolver uma página de login em PHP e configurar o ambiente utilizando Docker.
Ao concluir este projeto, o grupo adquiriu uma compreensão sólida dos benefícios e desafios da utilização de Docker no desenvolvimento de aplicações web, bem como a capacidade de aplicar esses conhecimentos em projetos futuros.

## Alterações Realizadas

- [x] Criado Dockerfile para construir a imagem Docker.
- [x] Construída imagem Docker para o aplicativo web.
- [x] Configurado docker-compose.yml para hospedar aplicativo web e banco de dados.
- [x] Criado modelo PULL_REQUEST_TEMPLATE.md.
- [x] Incluídas prints dos códigos do Dockerfile e docker-compose.yml.
- [x] Descrição da imagem Docker criada.

## Prints dos Códigos

### Dockerfile

**Descrição:** Esta print mostra o conteúdo do Dockerfile usado para construir a imagem Docker do aplicativo web PHP.

```dockerfile

FROM php:7.4-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY ./config /usr/local/etc/php/conf.d/

EXPOSE 80
```

### docker-compose.yml

**Descrição:** Esta print exibe o conteúdo do arquivo `docker-compose.yml`, responsável por definir e executar os serviços do contêiner Docker, incluindo a configuração do MySQL e do PHP.

```
version: '3.8'

services:
  web:
    build: .
    ports:
      - '8080:80'
    volumes:
      - ./src:/var/www/html
    restart: always

  db:
    image: mysql:5.7
    container_name: mysql
    restart: unless-stopped
    environment:
      MYSQL_ROOT_PASSWORD: 123456
      MYSQL_DATABASE: meudb
      MYSQL_USER: pabloak
      MYSQL_PASSWORD: 123456
    ports:
      - '3307:3306'
    volumes:
      - db_data:/var/lib/mysql

volumes:
  db_data:

```

## Descrição da Imagem Docker

A imagem Docker criada para este projeto inclui um serviço MySQL 5.7 configurado com um banco de dados `meudb`, acessível pelo usuário `pabloak`. A aplicação web PHP está configurada para rodar na porta `8080`.

## Contribuidores

- John
- Ricardo
- Felipe
- Leonardo
