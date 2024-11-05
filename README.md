## Passo a Passo para Subir o Projeto

### Pré-requisitos

Antes de começar, certifique-se de que você tenha o Docker e o Docker Compose instalados na sua máquina. Você pode verificar se estão instalados usando os seguintes comandos:

```bash
docker --version
docker-compose --version
```

### 1. Clonar o Repositório

Primeiro, clone o repositório do projeto para o seu ambiente local:

```bash
git clone <URL_DO_REPOSITORIO>
cd <NOME_DA_PASTA_DO_REPOSITORIO>
```

### 2. Configurar Variáveis de Ambiente

Crie um arquivo `.env` na raiz do seu projeto e defina as variáveis de ambiente necessárias:

```bash
MYSQL_ROOT_PASSWORD=seu_senha_root
MYSQL_DATABASE=nome_do_seu_banco
```

### 3. Construir e Subir os Contêineres

Use o Docker Compose para construir e iniciar os contêineres. Execute o seguinte comando no diretório raiz do projeto:

```bash
docker-compose up --build -d
```

Esse comando irá:

- Construir as imagens dos serviços definidos no `docker-compose.yml`.
- Iniciar os serviços `nginx`, `php-fpm`, e `db`.

### 4. Acessar o Projeto

Após os contêineres estarem em execução, você pode acessar o projeto no seu navegador através do seguinte endereço:

```
http://localhost:8080
```

### 5. Verificar Logs (Opcional)

Se você precisar verificar os logs de qualquer serviço, utilize o comando:

```bash
docker-compose logs <nome_do_serviço>
```

Por exemplo, para ver os logs do Nginx, use:

```bash
docker-compose logs nginx
```

### 6. Parar os Contêineres

Para parar todos os contêineres em execução, use:

```bash
docker-compose down
```

---