## Pré-requisitos

Antes de começar, certifique-se de ter o Docker e o Docker Compose instalados na sua máquina.

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Instruções de Instalação

1. Clone o repositório para a sua máquina local:

   ```sh
   git clone https://github.com/pablokonrath/projeto-login.git
   ```

2. Navegue até o diretório do projeto:

   ```sh
   cd nome_da_pasta_criada_para_projeto
   ```

3. Certifique-se de que os arquivos `Dockerfile` e `docker-compose.yml` estão no diretório raiz do projeto.

4. Construa e inicie os contêineres usando o Docker Compose:

   ```sh
   docker-compose up --build
   ```

5. A aplicação web PHP estará disponível no navegador em `http://localhost:8080`.

## Estrutura do Projeto

- `src/`: Diretório contendo os arquivos de código-fonte do projeto.
- `Dockerfile`: Arquivo de configuração para construir a imagem Docker do aplicativo web PHP.
- `docker-compose.yml`: Arquivo de configuração para orquestrar os serviços Docker (aplicação web e banco de dados).

## Pull_request_template.md

Para mais informações clique [modelo de pull request](./PULL_REQUEST_TEMPLATE.md).
