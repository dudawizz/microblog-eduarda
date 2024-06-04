<?php

/* Sessões no PHP
Recurso usado para o controle de acesso à determinadas páginas e/ou recursos do site.

Exemplos: área administrativa, painel de controle, perfil de cliente/aluno.

Nestas áreas o acesso só é possível mediante alguma forma de autenticação. Exemplos: login/senha, digital, facial etc. */

// Verificando se não há/existe uma sessão já em funcionamento
if( !isset($_SESSION) ){
    // então, inicie uma sessão
    session_start();
}

function verificaAcesso(){
    /* Se não EXISTIR uma variável de sessão chamada "id" (baseada nos ids usuários do banco), então significa que o usuário NÃO ESTÁ logado. */
    if(!isset($_SESSION['id'])){
        // Portanto, destruímos a sessão
        session_destroy();
        // Fazemos o usuário voltar para a página login
        header("location:../login.php");
        // Para qualquer outra execução/processamento
        exit; // ou die()
    }
}