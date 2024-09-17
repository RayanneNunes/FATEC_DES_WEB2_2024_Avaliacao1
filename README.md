# FATEC_DES_WEB2_2024_Avaliacao1

## Desafio Técnico

Os técnicos de laboratório de informática desempenham um papel essencial para garantir o funcionamento eficiente do ambiente e apoiar tanto alunos quanto professores em suas atividades. Eles são responsáveis por uma série de tarefas técnicas e administrativas que tornam possível a utilização plena dos recursos de tecnologia.

Crie um cadastro em PHP para as solicitações laboratoriais. Os coordenadores dos cursos ( DSM e Gestão Empresarial ) poderão fazer uso para formalizar as demandas docentes. Os campos que devem estar cadastrados são: 

 - Registro da solicitação, um campo texto com o que precisa ser feito.
 - Laboratório a ser feito
 - Prazo a ser atendido
 - Curso Atendido ( DSM ou GE )

Os técnicos poderão acessar o seu sistema para checar as demandas que serão atendidas. 

## Considerações finais
O sitema tem dois usuários cadastrados (coordenacao e tecnicos) que desempenham papéis diferentes.

O usuário 'coordenacao' tem acesso total ao sistema, podendo registrar solicitações, verificar solicitação por curso e verificar todas as solicitações. Enquanto o usuário 'tecnicos' pode apenas verificar todas as solicitações ou verificar solicisolicitações por curso.

O sistema ainda permite que usuários não cadastrados verifiquem todas as solicitações mas não as demais funcionalidades até que efetuem o login.

## Técnicas utilizadas

- Session: Para armazenar informações dos usuários 
- if... else: Para fazer o controle das funcionalidades de cada usuário e os demais controle que o sistema precisava
- Método POST: Para enviar dados de um formulário e armazená-los em um arquivo txt
- file_get_contents: Para transformar os dados do arquivo texto em uma pagina php
- HTML e Bootstrap: Para estruturar as páginas






Um sistema de login/logout em PHP, que permite o acesso 
