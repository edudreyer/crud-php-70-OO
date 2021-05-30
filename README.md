# crud-php-70-OO
Crud em PHP 7 Orientado a Objeto


<h1>Programação</h1>
•	Javascript ECS6 / JQuery / Ajax <br>
•	CSS<br>
•	Bootstrap 4<br>
•	PHP 7 / OO<br>
<h1>Database</h1>

•	Mysql<br>
•	Verifique a Modelagem <a target="_blank" href="https://ibb.co/yRJ5xtZ">clicando aqui.</a><br>

<h1>Desafio</h1>
•	Garantir que a manutenção e criação dos aplicativos estejam em perfeitas condições de uso, bem como dentro de prazos, qualidade e custos.<br>
•	Codificar os programas de acordo com a tecnologia definida utilizando para isso os conceitos de lógica de programação.<br>
  
<h1>Funcionalidades</h1>
As principais funcionalidades da aplicação são:<br>
•	Gerenciar usuários.<br>
o	Incluir usuários<br>
o	Editar usuários<br>
o	Excluir usuários<br>
•	Gerenciamento de endereços.<br>
o	Incluir endereço<br>
o	Editar endereço<br>
o	Excluir endereço<br>
•	Gerenciamento de tipos de endereços.<br>
o	Incluir tipos de endereços<br>
o	Editar tipos de endereços<br>
o	Excluir tipos de endereços<br>

<h1>Regras Aplicadas</h1>
•	Desenvolver um CRUD para cadastro de usuários/endereços <br>
•	Endereço completo do usuário conforme correios + o tipo de endereço <br>
•	Criar entidades no banco – usuário / endereço <br>
•	Após o cadastro do endereço mostrar um mapa (API Google Maps) com o endereço cadastrado mostrando o ponto no map<br>

  
<h1>Siga estes passos para executar o Projeto</h1>
Alguns requisitos são necessários para executar o projeto:<br>
•	Instalação do XAMP<br>
•	Configuração host<br>
Exemplo:<br>
127.0.0.1       crud-com<br>
•	Configurar Virtualhost  <br>
Exemplo:<br>
<VirtualHost *:80><br>
    DocumentRoot "C:\xampp\htdocs\crud"<br>
    ServerName crud-com<br>
    DirectoryIndex index.php    <br>
    <Directory "C:\xampp\htdocs\crud"><br>
            Options All<br>
            AllowOverride All<br>
            Order Allow,Deny<br>
            Allow from all<br>
    </Directory><br>
</VirtualHost><br>
