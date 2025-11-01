# 💰  Banco.php

Sistema bancário desenvolvido em PHP com integração a um banco de dados relacional.
O objetivo é demonstrar o funcionamento básico de um sistema bancário: cadastro de clientes, criação de contas, depósitos, saques e consultas de saldo.

🧩 Visão Geral

O projeto Banco.php foi criado com o intuito de praticar conceitos de programação web com PHP e manipulação de dados em banco de dados (MySQL ou MariaDB).

Principais funcionalidades:
✅ Cadastro de clientes
✅ Criação e gerenciamento de contas
✅ Depósitos e saques
✅ Consulta de saldo
✅ Edição e exclusão de dados

🛠️ Tecnologias Utilizadas
Tecnologia	Descrição
🐘 PHP	Linguagem principal do projeto
🗄️ MySQL/MariaDB	Banco de dados relacional
🎨 HTML/CSS	Interface básica do sistema
🔗 PDO / MySQLi	Conexão segura com o banco de dados
📂 Estrutura de Pastas (Exemplo)
Banco.php/
│
├── conecta.php
├── clientes.php
├── conta.php
├── deposito.php
├── saque.php
├── saldo.php
├── editar.php
├── excluir.php
├── index.html
├── css/
│   └── style.css
└── img/

🚀 Como Executar o Projeto
⚙️ Pré-requisitos

Antes de iniciar, você precisará ter instalado:

XAMPP
 ou WampServer

PHP (versão 7.4 ou superior)

MySQL ou MariaDB

Git (opcional, para clonar o projeto)

🧭 Passo a Passo

1️⃣ Clone o repositório:

git clone https://github.com/devsrenata/Banco.php.git


2️⃣ Copie o projeto para o diretório do servidor local:
Exemplo no XAMPP:

C:\xampp\htdocs\Banco.php


3️⃣ Crie o banco de dados:
Abra o phpMyAdmin ou o terminal do MySQL e execute:

CREATE DATABASE banco_php;


4️⃣ Configure a conexão com o banco de dados:
Abra o arquivo conecta.php e ajuste as credenciais:

$host = 'localhost';
$db   = 'banco_php';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';


5️⃣ Crie as tabelas necessárias:
Se existir um arquivo .sql, importe-o pelo phpMyAdmin.
Caso contrário, crie as tabelas manualmente (ex: clientes, contas, transações).

6️⃣ Execute o projeto:
Abra o navegador e acesse:

http://localhost/Banco.php/index.html

⚡ Funcionalidades

💡 Cadastro de Clientes: inserir novos clientes no sistema.
💡 Contas: criar e gerenciar contas associadas a clientes.
💡 Depósitos e Saques: registrar movimentações financeiras.
💡 Consulta de Saldo: visualizar saldo atual de cada conta.
💡 Edição e Exclusão: atualizar ou remover registros.


👩‍💻 Renata (devsrenata)
🔗 GitHub: github.com/devsrenata

<img width="1883" height="927" alt="siteBanco" src="https://github.com/user-attachments/assets/1c22edb5-46e8-4863-a32b-0425d21e323c" />
