
# Sistema de Matrícula

## Descrição
O Sistema de Matrículas Integrado é uma aplicação web mobile-first desenvolvida pensando no lado do usuário, ou seja, não possui painel administrativo.

## Funcionalidades

- **Ver catálogo de cursos:** Utilize os botões disponibilizados acima do catálogo de cursos para filtrar entre modalidade de estudo, grau de diploma e nível de graduação.

- **Processo de matrícula:** Coleta as informações básicas do usuário para realizar sua inscrição no curso.

- **Acesso às matrículas realizadas:** As inscrições são salvas no banco e disponibilizadas para o usuário ter acesso à informações.

## Tecnologias Utilizadas

O projeto é desenvolvido utilizando as seguintes tecnologias:

- **PHP:** Linguagem de programação do lado do servidor.
- **HTML:** Linguagem de marcação para a estruturação da página web.
- **Bootstrap 5:** Framework front-end para um design responsivo e amigável.
- **Composer:** Gerenciador de pacotes do PHP.
- **mySQL:** Banco de dados do sistema.

## Uso

- A página inicial carrega uma barra de navegação, que pode levar o usuário para as principais páginas do sistema, a logo da instituição e o botão que o leva para o catálogo de cursos disponíveis.
- Na página de catálogo, interaja com os botões de filtro presentes na tela e clique no botão "Ver mais" para ter acesso a mais informações do curso.
- Clique no botão "Fazer matrícula" para seguir com o processo básico de matrícula na instituição;
- Passe pelas três etapas do processo de matrícula. Chegando na etapa final (de envio de documento) vá no menu de navegação e clique sobre a página de Matrículas. Lá é onde ficariam armazenadas as matrículas realizadas pelo aluno.

## Como Testar

### Requisitos

Certifique-se de ter os seguintes requisitos instalados em sua máquina:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [XAMPP](https://www.apachefriends.org/index.html) (inclui MySQL)

### Como Testar
1.  ### Clonar o Repositório:

        git clone https://github.com/o-laureano/sistema-matricula-seletiva.git

2.  ### Instalar Dependências com o Composer:

        cd "seu-repositorio"
        composer install

3.  ### Iniciar o Servidor Web Local:

    - Inicie o Apache e o MySQL usando o XAMPP.

5.  ### Acessar o Aplicativo:

    - Navegue para: `http://localhost/seu-repositorio`
___

> ### **Observação:** ###
> Não consegui finalizar todas as funções que me propus a fazer porque nessa uma semana de prazo acabei reaprendendo o PHP, aprendendo mais ainda o mySQL e, por ter sido meu primeiro desafio para processo seletivo, encontrei diversos desafios e notei erros no meu autogerenciamento de tarefas e de tempo. Não ficou perfeito, mas creio que as principais habilidades exigidas pela vaga eu consegui demonstrar que sou capaz de fazer.
> 
> **O que consegui implementar:**
> - Componentização de elementos nas páginas por meio de arquivos PHP. Eles estão presentes na pasta 'components' e, assim que alterado o conteúdo desse arquivo, automaticamente todas as páginas que o carregarem receberão a mesma alteração. É possível ver isso nos botões durante todo o sistema.
> - Integração do banco de dados mySQL com as páginas através de funções. Presente nas páginas de formulário (principalmente a formulario-1.php), que é onde consegui fazer a implantação do mecanismo de inserção de dados do formulário para o banco de dados (assim que clicado no botão "Enviar dados") e validação para conferir se o usuário preencheu todos os campos (além de poder puxar o id_aluno do cadastrado e levar junto na URL para os próximos formulários).
> - Utilização de alguns pacotes oferecidos pelo Composer, principalmente o PDO (PHP Data Objects) que facilitou minha conexão com o banco de dados. 
> - A página curso-tech.php e todos os cards de curso (que estão presentes na página de catálogo) mostra dinamicidade de conteúdos da página com o PHP e mySQL. Alguns campos estão atrelados à valores da tabela curso no banco de dados.

## Contato

- Figma Community, LinkedIn e WhatsApp https://linktr.ee/laureanods

