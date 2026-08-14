# ppi---login
aula de php

Nós aprendemos a fazer uma página de login com usuários já cadastrados no banco de dados feito no shell do xampp.

Sobre a conexao.php:
faz a conexao do banco de dados do MySQL, o nome do banco é login, usuario root, sem senha.

Sobre o index.php:
inclui a conexao.php para acessar o banco, se o formulario foi enviado(preenchido), valida se os campos estao ou nao vazios.
Monta uma query SQL buscando os campos (email e senha).
Se encontrar 1 resultado, salva id e nome na sessão e redireciona ao painel.php.
Se nao encontrar: "falha ao logar".
No final, mostra o formulario html de login.

Sobre o protect.php:
Ele verifica se existe um "id"(usuario  logado), se não estiver ele mata a execução, impedindo acesso a quem não fesz login.

Sobre o painel.php:
É a pagina acessível após o login. Inclui o protect.php para checar se o usúario está logado, se estiver mostra uma mensagem de boas vindas com o nome do usuário.

sobre o logout.php:
Encerra a sessão do usuário, inicia a sessão e detroi ela, e redireciona de volta pro index.php (login).
