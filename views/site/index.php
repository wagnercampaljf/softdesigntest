<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Teste Soft Design!</h1>

        <p class="lead">Teste de seleção da Soft Design.</p>

        <p><a class="btn btn-lg btn-success" href="https://github.com/wagnercampaljf/softdesigntest">Git do Projeto</a></p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6 mb-3">
                <h2>Verificar Clima</h2>

                <p>Tela de consulta do clima de determinada região, podendo passar uma cidade por exempli "Campinas, SP", então será retornado o 
                    tempo atual na região pesquisada. Para tal foi utilizada a API da HG Weather.</p>

                <p><a class="btn btn-outline-secondary" href="/weather">Verificar Clima &raquo;</a></p>
            </div>
            <div class="col-lg-6 mb-3">
                <h2>Cadastro de Livros</h2>

                <p>CRUD criado para o cadastro de Livros, com todas as funções solicitadas, Criação, Edição, Excclusão, Visualização e Filtro.</p>

                <p><a class="btn btn-outline-secondary" href="/book">Cadastro de Livros &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
