<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Projeto de Seleção Soft Design</h1>
    <br>
</p>


DESCRIÇÃO
------------

Como solicitado no desafio, foi criada uma aplicação web em PHP com acesso restrito, que exibe uma listagem de livros com as opções de ver os detalhes, editar, deletar e criar um livro, e também exiba o clima atual da sua região.

CONTEÚDO 
------------

1. Tela de Login / Cadastro de Usuários (BD)

2. CRUD de Livros

3. Tela de Clima da região

REQUISITOS
------------

Docker;

INTALAÇÃO
------------

### Instalação com Docker

1. Dentro da pasta do projeto, baixada do Git, rodar o comando 

~~~
docker compose up -d
~~~

2. Dentro da mesma pasta executar o seguinte comando

~~~
docker exec -it yii_jessica2 bash
~~~

3. Com o comando acima executado, abrirá um bash dentro do container, e dentro do projeto rodando no container damos o seguinte comando

~~~
composer install
~~~

4. Utilizei uma imagem com o Adminer para ter acesso ao MySQL e para acessa-lo, entre no endereço abaixo pelo navegador

~~~
http://localhost:8080/
~~~

5. Para logar no MySQL utilize os dados abaixo

~~~
Sistema: MySQL
Servidor: db
Usuário: root
Senha: testsoft
~~~

6. Assim que acessar o MySQL, criar o banco de dados "testsoftdesign" pelo próprio sistema Adminer

7. Novamente no bash do container executar o comando abaixo para a criação das tabelas no banco de dados 

~~~
yii migrate"
~~~

8. Agora basta acessar o enderço no navegador para fazer os teste necessários

~~~
http://localhost:8000/
~~~


### Sistema no ar para testes e apreciação.