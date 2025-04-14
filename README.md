# Sistema de Autenticação Simples em PHP POO

Nome: Vinicius de Camargo Fantin
Turma: Ciência da Computação 2023

## Descrição do Projeto

Este projeto é um sistema de autenticação desenvolvido em PHP puro utilizando Programação Orientada a Objetos (POO). Ele permite:

- **Cadastro de Usuários:** Registre nome, e-mail e senha (armazenada com segurança utilizando hash).
- **Login:** Validação de credenciais com início de sessão e opção de salvar o e-mail em cookie.
- **Dashboard:** Área restrita que exibe uma mensagem personalizada e os dados do usuário.
- **Logout:** Encerramento da sessão do usuário com redirecionamento à tela de login.

O sistema foi criado com foco em boas práticas de programação e organização de código, servindo como base para aplicações que necessitam de autenticação simples.

## Estrutura do Projeto
- **/Classes:** Contém os arquivos das classes responsáveis pela lógica da autenticação, manipulação de sessão e representação dos usuários.
- **cadastro.php:** Tela para cadastro de novos usuários.
- **processa_cadastro.php:** Processa os dados do formulário de cadastro.
- **login.php:** Tela para realização de login.
- **processa_login.php:** Realiza a validação dos dados de login, armazenando o usuário na sessão e configurando cookies.
- **dashboard.php:** Área restrita que exibe uma mensagem de boas-vindas e os dados do usuário logado.
- **logout.php:** Encerra a sessão do usuário e redireciona para a tela de login.
- **index.php:** Pode ser configurado para redirecionar automaticamente para a tela de login.

## Requisitos

- **PHP 7.2+** ou superior.
- Um servidor web configurado para rodar PHP (por exemplo, Apache ou Nginx).
- Navegador web moderno.

## Instruções para Executar Localmente

1. **Clone ou Baixe o Projeto:**
- Git Bash
- GitHub Desktop
