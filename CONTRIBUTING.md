# Guia de Contribuição e Testes

Para garantir a qualidade, consistência e estabilidade do código em nosso monorepo, é **obrigatório** que todas as verificações e testes descritos abaixo sejam executados localmente antes de realizar um `commit` e abrir um Pull Request.

Isso evita que a pipeline de Integração Contínua (CI) falhe por problemas que poderiam ser detectados e corrigidos facilmente no ambiente de desenvolvimento.

---

## 1. Backend (PHP)

**Diretório de execução:** Todos os comandos a seguir devem ser executados a partir da raiz da pasta `/Backend`.

### 1.1. Instalar/Atualizar Dependências
Antes de rodar os testes, garanta que suas dependências estão atualizadas com o `composer.lock`.
```bash
composer install
```

### 1.2. Linter (PHP-CS-Fixer)
Este comando verifica e corrige automaticamente o código para que ele siga os padrões de estilo definidos para o projeto.

```bash
# Para verificar e aplicar as correções
composer run lint
composer run fix
```

### 1.3. Análise Estática (PHPStan)
Detecta potenciais erros e inconsistências no código sem a necessidade de executá-lo.

```bash
composer run phpstan
```

### 1.4. Verificação de Vulnerabilidades (Composer Audit)
Analisa as dependências do projeto em busca de vulnerabilidades de segurança conhecidas.

```bash
composer run audit
```

### 1.5. Testes Unitários e de Integração (PHPUnit)
Executa toda a suíte de testes automatizados do backend.

```bash
composer run test
```

---

## 2. Frontend (Angular)

**Diretório de execução:** Todos os comandos a seguir devem ser executados a partir da raiz da pasta `/Frontend`.

### 2.1. Instalar/Atualizar Dependências
Antes de rodar os testes, garanta que suas dependências estão atualizadas com o `package-lock.json`.

```bash
npm install
```

### 2.2. Testes Unitários (Karma & Jasmine)
Executa a suíte de testes unitários do frontend. O comando abaixo irá rodar os testes e finalizar o processo, de forma similar ao ambiente de CI.

```bash
npm run test:ci
```

---

## 3. Validação do Build Docker (Opcional)

Este passo é recomendado para verificar se a `Dockerfile` na raiz do projeto está funcional e se a aplicação pode ser "containerizada" sem erros.

**Diretório de execução:** Execute este comando a partir da pasta `/Infra/Containers` do monorepo.

```bash
docker build -f ...