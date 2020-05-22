# Aplicações Ricas para internet - HTML5
## Sistemas para internet
### Site de um Museu de obras textuais.
#### Usuários podem se cadastrar e criar suas obras.


## Passos para instalação local do Museu textual

### 1 - Xampp
Instalação normal do xampp, conforme a documentação do site: https://www.apachefriends.org/

### 2 - Mysql
O mySQL já é instalado junto com o Xampp. 
Mudar para porta 3307 (https://iqubex.com/softwares/change-xampp-server-ports-mysql-apache/)

### 3 – Fontes do git
#### A-	Baixar fontes do repositório: https://github.com/emerson-cs-santos/HTML5_Museu
#### B-	Colocar em uma pasta dentro de: C:\xampp\htdocs 
##### a.	Se for Linux ou Mac ver qual é a pasta correta.

### 4 – Rodar Script inicial
Arquivo (scripts\migration.sql). 
Esse script vai crias as tabelas e um usuário padrão:
Usuário: Admin
Senha: 123456

### 5 – Acessar local
Para acessar o site é preciso o apache e o mySQL estarem ligados. 
Acesse localhost/ e depois entre na pasta onde colocou os fontes do git.
Com isso o site já deve estar sendo executado.
