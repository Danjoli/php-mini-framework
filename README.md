# Mini Framework PHP

[![CI](https://github.com/Danjoli/php-mini-framework/actions/workflows/ci.yml/badge.svg)](https://github.com/Danjoli/php-mini-framework/actions/workflows/ci.yml)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php)](https://www.php.net/)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)

Framework MVC educacional construído do zero com **PHP puro**, **Composer**, padrões **PSR** e **PDO**. O projeto expõe os mecanismos internos que frameworks completos normalmente abstraem: front controller, mensagens HTTP imutáveis, roteamento, controllers, middlewares, injeção de dependências, validação, exceções e persistência.

## Recursos

- container PSR-11 com bindings, singletons, autowiring e detecção de ciclos;
- request, response, URI e stream compatíveis com PSR-7;
- pipeline de middlewares PSR-15;
- roteamento por método, parâmetros tipados e controllers;
- respostas JSON, tratamento de erros, CORS e request ID;
- validação declarativa com erros HTTP 422;
- PDO, query builder parametrizado, transações e migrations;
- API REST de tarefas como aplicação de referência;
- PHPUnit, PHPStan nível 8, PHP-CS-Fixer e CI multi-versão.

## Requisitos

- PHP 8.2 ou superior com `pdo_sqlite`, `json` e `mbstring`;
- Composer 2.

## Instalação

```bash
git clone https://github.com/Danjoli/php-mini-framework.git
cd php-mini-framework
composer install
cp .env.example .env
php bin/console migrate
composer serve
```

A aplicação estará disponível em `http://localhost:8080`. No Windows PowerShell, copie o ambiente com `Copy-Item .env.example .env`.

## API de exemplo

| Método | Endpoint | Ação |
|---|---|---|
| `GET` | `/` | Estado do framework |
| `GET` | `/api/tasks` | Listar tarefas |
| `POST` | `/api/tasks` | Criar tarefa |
| `GET` | `/api/tasks/{id}` | Consultar tarefa |
| `PUT/PATCH` | `/api/tasks/{id}` | Atualizar tarefa |
| `DELETE` | `/api/tasks/{id}` | Excluir tarefa |

```bash
curl -X POST http://localhost:8080/api/tasks \
  -H "Content-Type: application/json" \
  -d '{"title":"Estudar PSR-15","description":"Criar um middleware"}'
```

## Criando uma rota

```php
$router->get('/hello/{name}', [HelloController::class, 'show'], 'hello.show');
```

As dependências do controller são resolvidas automaticamente pelo container.

## Qualidade

```bash
composer test
composer analyse
composer style
composer check
```

## Estrutura

```text
app/                 aplicação de exemplo
bootstrap/           composição da aplicação
config/              configurações por ambiente
database/migrations/ migrations PDO
public/               front controller
routes/               definição de rotas
src/                  núcleo do framework
tests/                testes unitários e de integração
```

Consulte [Arquitetura](docs/ARCHITECTURE.md), [Contribuição](CONTRIBUTING.md), [Segurança](SECURITY.md) e [Changelog](CHANGELOG.md).

## Licença

MIT. Consulte [LICENSE](LICENSE).
