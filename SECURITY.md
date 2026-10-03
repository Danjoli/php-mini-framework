# Política de segurança

A série 1.x recebe correções de segurança. Não publique vulnerabilidades em issues; use **Report a vulnerability** na aba Security do repositório. Inclua impacto, cenário de reprodução e sugestão de correção quando possível.

O projeto nunca deve versionar `.env`, bancos locais, tokens, senhas ou chaves. Execute `composer audit` antes de releases.
