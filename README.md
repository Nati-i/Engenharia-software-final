UNOESC- Universidade do Oeste de Santa Catarina
Campus de São Miguel do Oeste - SC
Ciências da Computação 
Engenharia de Software II 
Prof.  Roberson Junior Fernandes Alves




Modelagem de Reserva de salas e espaços





Cauana Rosin Ghizzi e Natani Gayardo

INTRODUÇÃO
	
Neste trabalho final foi aplicado os conceitos aprendidos na disciplina de Engenharia de Software II na modelagem, validação e aprimoramento de um sistema real, integrando as atividades com o desenvolvimento realizado na disciplina de Programação III.


Justificativa das Decisões Tomadas
Durante o desenvolvimento do sistema de reservas de salas e espaços escolares, diversas decisões foram tomadas com base em critérios técnicos, pedagógicos e funcionais. Abaixo estão as principais justificativas:

Escolha da Arquitetura
Optou-se pela arquitetura MVC (Model-View-Controller), pois ela permite:
-> Separar a lógica de negócio (Model) da interface do usuário (View)
-> Manter o código mais organizado e reutilizável
-> Facilitar a manutenção e testes, como os testes unitários e funcionais implementados

 Linguagem e Framework
A linguagem escolhida foi o PHP, por sua ampla utilização em sistemas web e facilidade de integração com bancos de dados.
O framework utilizado foi o CodeIgniter, por ser leve, de fácil aprendizado, e oferecer suporte nativo a MVC, sessões, roteamento e validação de formulários.

 Banco de Dados Relacional
Foi utilizado um modelo Entidade-Relacionamento (MER) como base da estrutura do banco, para garantir integridade dos dados e facilitar a execução de operações CRUD. As entidades e relacionamentos representados foram diretamente refletidos no banco MySQL.

 Testes Automatizados
Foram implementados:
-> Testes unitários para validação de métodos isolados
-> Testes de funcionalidade simulando ações reais do usuário
-> Testes de carga simulados, para estimar o comportamento do sistema sob pressão
-> Esses testes ajudam a garantir que as regras de negócio funcionam como o esperado, mesmo com alterações futuras.

 Interface do Usuário
A interface foi pensada para ser simples e objetiva, com foco em:
-> Facilidade de uso para usuários sem conhecimentos técnicos
-> Preenchimento intuitivo de formulários de reserva
-> Feedbacks visuais claros (ex: mensagens de sucesso ou conflito)

 Integração Entre a Modelagem e o Sistema Desenvolvido
A modelagem feita nas etapas iniciais do projeto foi efetivamente integrada ao desenvolvimento do sistema, conforme descrito abaixo:

 Casos de Uso → Funcionalidades
Os casos de uso identificados (como "Realizar Reserva", "Editar Reserva", "Cancelar Reserva") foram implementados diretamente nas rotas e controladores do sistema, respeitando o fluxo definido nos diagramas.

 Diagrama de Classes → Código PHP
O diagrama de classes orientou a criação das classes ReservaModel, UsuarioModel, EspacoModel, com seus respectivos métodos (criarReserva(), verificarConflito(), listarReservas() etc.).
A correspondência entre a modelagem e o código foi direta, reforçando a aderência ao projeto original.

 MER → Banco de Dados
O Modelo Entidade-Relacionamento (MER) serviu como base para a criação do banco relacional. Tabelas como reservas, salas, usuarios e seus relacionamentos (foreign keys) foram construídas de acordo com o diagrama.

 Diagrama de Sequência → Fluxo do Código
O diagrama de sequência, feito para ilustrar fluxos como o cadastro de reservas, serviu de guia para implementar o fluxo entre as camadas do sistema:

-> O usuário interage com a view
-> O controller recebe os dados
-> O model executa regras e acessa o banco
-> A resposta volta ao usuário com feedback

 Conclusão
As decisões tomadas ao longo do desenvolvimento foram pautadas na clareza, organização do código e facilidade de manutenção.
A integração efetiva entre a modelagem e o sistema real garantiu uma implementação coerente com os requisitos levantados, e a realização de testes (mesmo simulados) reforçou a confiabilidade do sistema.
