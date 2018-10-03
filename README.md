# dsv-Controle-de-Materiais


BANCO DE DADOS

172.16.120.76
user: root
senha: gti-315

name bd: emprestimo_nti

Cores Projeto: CINZA: #585657 || LARANJA: #FE6B00




Desenvolvimento de uma aplicação web para o controle de materias.

Desenvolvedores: JonasKuhn, LRoden, Matheus-7k e klunk66;

Esse projeto tem como objetivo principal gerenciar os equipamento disponíveis 
no NTI(Núcleo de tecnologia da Informação);

Temos como base para o desenvolvimento:
->Utilizar o template XXXXXXXX;
->Utilizaremos o php como linguagem principal para o gerenciamento dos emprésti-
mos;
->Utilizaremos o pacote de ícones XXXX;

Base do projeto:
->Iniciará com um Login(Esse será para os colaboradores que trabalham no NTI);
->Página principal (Painel de Controle) onde a mesma conterá dados principais da aplicação:
    -> Botão para adicionar um novo emprestimo;
    -> Número de equipamentos que não estão sendo utilizados (Em forma de lista ou
       em tabela);
    -> Emprestimos que estão sendo realizados no momento (Em forma de lista ou
       em tabela, com opção para encerrar e editar a mesma);

->Menu lateral:
    ->Painel de Controle;
    ->Emprestimo;
        ->Botão para adicionar um novo emprestimo;
        ->Lista com todos os emprestimos realizados;
            ->Conterá o codigo do emprestimo;
            ->Nome da pessoa que fez o emprestimo;
            ->Data do emprestimo;
            ->Ícones (Editar/Apagar/Concluír);
        *** CRUD COMPLETO ***
    ->Equipamentos:
        ->Botão para adicionar um novo equipamento;
        ->Lista de todos os equipamentos cadastrados:
            ->Codigo do equipamento;
            ->Nome do equipamento;
            ->Quantidade do equipamento;
            ->Ícones (Editar/Apagar);
        *** CRUD COMPLETO ***
    ->Admin:
        ->Pedirá para inserir a senha de administrador para entrar nesse menu;
        ->Poderá adicionar novos logins e alterar dados do mesmo;
