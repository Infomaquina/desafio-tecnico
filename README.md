## Requisitos:
- [ ] Composer
- [ ] Node
- [ ] PHP 8.x
- [ ] Servidor Apache

## Dependencias PHP
- "league/plates": "^3.5"

## Dependencias NODE
- "bootstrap"
- "browser-sync"
- "gulp"
- "gulp-connect-php"
- "gulp-sass"
- "jquery"
- "npm"
- "popper.js"
- "sass"

## Dicas:
- A instalação do Xampp [https://www.apachefriends.org/pt_br/index.html] mais recente trará os requisitos PHP 8x e Apache;
- Execute o arquivo projeto.cmd para abrir automaticamente o workspace do VsCode e PhpMyAdmin + Localhost:3005 no seu browser padrão;
- Utilize o arquivo custom.scss localizado em /public/scss para editar as cores padrões do bootstrap;
- Para testes de PWA o projeto utiliza HTTPS. Gere seu server.crt e server.key da sua maquina local, instale e salve numa pasta na raiz com o nome /ssl;
- O recurso PWA armazena a aplicação em cache e dá prioridade para o carregamento local;
- FontAwesome está na versão free [https://fontawesome.com/icons?d=gallery];
- A função cache em /app/helpers/constants.php adiciona a data do arquivo para forçar atualização em caso de alterações;
- A pasta vendor do composer não está no gitgnore (fora do padrão) para facilitar a manutenção da hospedagem aproveitando o deploy automatico por webhook do git. 


***
