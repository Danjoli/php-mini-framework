# Arquitetura

## Ciclo de uma requisição

```text
Servidor web → public/index.php → ServerRequest PSR-7
→ MiddlewareDispatcher PSR-15 → Router → Container PSR-11
→ Controller → Repository / PDO → Response PSR-7 → ResponseEmitter
```

O front controller cria uma única entrada HTTP. O bootstrap carrega ambiente e configuração, registra serviços no container e importa as rotas. O pipeline aplica tratamento de erros, request ID, CORS e parsing JSON antes de entregar a requisição ao roteador.

## Núcleo

- `Container`: resolve serviços explicitamente ou por reflexão e chama controllers com injeção de parâmetros.
- `Http`: implementa os contratos PSR-7 e PSR-15 sem acoplamento ao servidor web.
- `Routing`: compila parâmetros de URI, diferencia rota ausente de método inválido e despacha handlers.
- `Validation`: aplica regras declarativas e produz detalhes de erro consistentes.
- `Database`: centraliza PDO, transações, queries parametrizadas e migrations.

## Decisões de projeto

O framework mantém dependências externas apenas para contratos PSR e ferramentas de desenvolvimento. SQL usa placeholders; nomes de tabelas e colunas passam por validação estrita. Update e delete sem cláusula `where` são recusados.

Objetos HTTP seguem imutabilidade: métodos `with*` retornam clones. Exceções HTTP carregam status e cabeçalhos, enquanto o middleware de erros impede vazamento de detalhes internos fora do modo de depuração.
