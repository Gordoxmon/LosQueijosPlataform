<?php

declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\ORM\TableRegistry;

/**
 * Options seed.
 */
class OptionsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $options = TableRegistry::getTableLocator()->get('options');
        $count = $options->find()->count();
        if ($count > 0) {
            return;
        }



        $data = [];

        $data[] = [
            'question_id' => 1,
            'name' => 'Para ser fácil de lembrar.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 1,
            'name' => 'Para proteger as nossas contas online.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 1,
            'name' => 'Para partilhar com os amigos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 1,
            'name' => 'Para usar em todos os sites.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 2,
            'name' => 'Usar a mesma palavra passe para tudo.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 2,
            'name' => 'Escolher uma palavra passe curta e simples.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 2,
            'name' => 'Misturar letras, números e símbolos.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 2,
            'name' => 'Partilhar a palavra passe com colegas de escola.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 3,
            'name' => 'Dar a palavra passe sem perguntar porquê.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 3,
            'name' => 'Recusar e não partilhar a palavra passe com ninguém.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 3,
            'name' => 'Pedir a um adulto se devemos partilhar.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 3,
            'name' => 'Trocar a palavra passe e dar a nova.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 4,
            'name' => 'Num caderno visível na sala de aula.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 4,
            'name' => 'Na secretária, debaixo do teclado do computador.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 4,
            'name' => 'Na nossa mente, sem escrever em lado nenhum.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 4,
            'name' => 'Num papel deixado na biblioteca da escola.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 5,
            'name' => 'Porque essas informações não são importantes.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 5,
            'name' => 'Porque podemos esquecer as nossas próprias informações.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 5,
            'name' => 'Porque outras pessoas podem adivinhar a nossa palavra passe.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 5,
            'name' => 'Porque os amigos podem gostar de saber.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 6,
            'name' => 'Rir e contar à turma.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 6,
            'name' => 'Pedir-lhe para tentar outra vez.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 6,
            'name' => 'Avisar um adulto e mudar a palavra passe.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 6,
            'name' => 'Não fazer nada, é só uma brincadeira.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 7,
            'name' => 'Usando apenas uma letra.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 7,
            'name' => 'Escolhendo palavras fáceis de soletrar.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 7,
            'name' => 'Combinando letras, números e símbolos.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 7,
            'name' => 'Escolhendo a data de nascimento como palavra passe.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 8,
            'name' => 'Quando não nos lembramos da antiga.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 8,
            'name' => 'A cada hora, para ser diferente.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 8,
            'name' => 'Quando um adulto nos diz para o fazer.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 8,
            'name' => 'A cada alguns meses, mesmo se nos lembrarmos.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 9,
            'name' => 'Ignorar e deixar lá.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 9,
            'name' => 'Apanhar e partilhar com os amigos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 9,
            'name' => 'Rasgar e deitar ao lixo.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 9,
            'name' => 'Guardar para mostrar a um adulto depois.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 10,
            'name' => 'Para mostrar que temos algo importante.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 10,
            'name' => 'Para que os outros nos peçam para contar.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 10,
            'name' => 'Para proteger as nossas contas e informações.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 10,
            'name' => 'Para ter mais trabalho sempre que quisermos entrar numa conta.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 11,
            'name' => 'Partilhar todas as informações pessoais na internet.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 11,
            'name' => 'Manter as suas informações pessoais em segredo na internet.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 11,
            'name' => 'Deixar que todos saibam o que está a fazer a toda a hora.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 11,
            'name' => 'Ignorar quem tenta falar consigo online.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 12,
            'name' => 'Fotos com amigos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 12,
            'name' => 'O que comemos ao pequeno-almoço.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 12,
            'name' => 'A nossa morada e número de telefone.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 12,
            'name' => 'A nossa cor favorita.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 13,
            'name' => 'O nosso nome.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 13,
            'name' => 'O nome do nosso animal de estimação.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 13,
            'name' => 'O nome da nossa escola.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 13,
            'name' => 'O nosso desporto favorito.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 14,
            'name' => 'Porque as fotos podem desaparecer da internet.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 14,
            'name' => 'Porque as fotos podem revelar demasiadas informações pessoais.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 14,
            'name' => 'Porque não queremos partilhar momentos felizes.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 14,
            'name' => 'Porque os amigos podem ficar chateados.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 15,
            'name' => 'Que o que publicamos pode ser visto por todos.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 15,
            'name' => 'Que podemos partilhar tudo sem preocupações.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 15,
            'name' => 'Que só os amigos podem ver o que publicamos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'question_id' => 15,
            'name' => 'Que não importa o que partilhamos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'question_id' => 16,
            'name' => 'Por que razão devemos ter cuidado com mensagens de pessoas desconhecidas?',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 16,
            'name' => 'Porque essas mensagens podem conter vírus.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 16,
            'name' => 'Porque podem ser pessoas a tentar fazer mal.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 16,
            'name' => 'Porque é educado responder sempre.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 17,
            'name' => 'Ir imediatamente encontrar-se com eles.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 17,
            'name' => 'Ignorar o pedido e não responder.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 17,
            'name' => 'Dizer-lhes onde vivemos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 17,
            'name' => 'Pedir a um adulto de confiança ajuda.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 18,
            'name' => 'Por que razão é importante pensar antes de publicar algo online?',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 18,
            'name' => 'Porque ninguém vai ver o que publicamos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 18,
            'name' => 'Porque as publicações online nunca podem ser apagadas.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 18,
            'name' => 'Porque os amigos vão ficar chateados.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 19,
            'name' => 'Fazer amigos online.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 19,
            'name' => 'Estudar através da internet.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 19,
            'name' => 'Mandar mensagens amigáveis.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 19,
            'name' => 'Intimidar, magoar ou humilhar alguém online.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 20,
            'name' => 'Fazer elogios a um amigo online.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 20,
            'name' => 'Partilhar piadas engraçadas com os colegas.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 20,
            'name' => 'Enviar mensagens crueis ou ameaçadoras.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 20,
            'name' => 'Escrever palavras de encorajamento aos outros online.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 21,
            'name' => 'Retaliar com mais mensagens negativas.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 21,
            'name' => 'Ignorar e não responder às mensagens ofensivas.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 21,
            'name' => 'Contar apenas aos amigos mais próximos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 21,
            'name' => 'Sentir-se triste e não fazer nada.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 22,
            'name' => 'Rir e continuar a ver.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 22,
            'name' => 'Denunciar a situação a um adulto de confiança.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 22,
            'name' => 'Partilhar as mensagens ofensivas com mais pessoas.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 22,
            'name' => 'Ajudar a espalhar os rumores.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 23,
            'name' => 'Porque é divertido falar sobre situações negativas.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 23,
            'name' => 'Porque ajuda a sensibilizar e prevenir o problema.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 23,
            'name' => 'Porque não é importante discutir sobre isso.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 23,
            'name' => 'Porque é melhor ignorar o que acontece na internet.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 24,
            'name' => 'Ignorar os sentimentos dos outros.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 24,
            'name' => 'Falar mal dos colegas.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 24,
            'name' => 'Ser gentil e cuidadoso com as palavras.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 24,
            'name' => 'Partilhar informações pessoais de outros sem permissão.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 25,
            'name' => 'Retaliar com mais mensagens negativas.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 25,
            'name' => 'Ignorar e falar com um adulto de confiança.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 25,
            'name' => 'Partilhar as mensagens com todos os amigos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 25,
            'name' => 'Deixar de usar a internet completamente.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 26,
            'name' => 'Responder e pedir mais detalhes.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 26,
            'name' => 'Ignorar a mensagem e esquecer.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 26,
            'name' => 'Contar a um adulto de confiança sobre o que aconteceu.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 26,
            'name' => 'Partilhar a mensagem com mais pessoas para obter conselhos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 27,
            'name' => 'Clicar em todos os links que encontrar.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 27,
            'name' => 'Partilhar todas as informações pessoais online.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 27,
            'name' => 'Usar programas antivírus e firewalls.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 27,
            'name' => 'Aceitar todos os pedidos de amizade sem questionar.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 28,
            'name' => 'Porque todos os links de e-mail são seguros.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 28,
            'name' => 'Porque podem conter vírus ou malware prejudicial.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 28,
            'name' => 'Porque são sempre interessantes e divertidos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 28,
            'name' => 'Porque nunca sabemos o que vai acontecer.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 29,
            'name' => 'Clicar no link para ver o que acontece.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 29,
            'name' => 'Ignorar e apagar a mensagem sem abrir.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 29,
            'name' => 'Abrir e responder imediatamente.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 29,
            'name' => 'Partilhar com todos os amigos para avisá-los.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 30,
            'name' => 'Para diminuir a velocidade do computador.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 30,
            'name' => 'Para garantir que as atualizações de segurança estão instaladas.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 30,
            'name' => 'Para tornar os jogos online mais divertidos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 30,
            'name' => 'Para partilhar mais facilmente informações pessoais.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 31,
            'name' => 'Para tornar mais fácil para os amigos adivinharem.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 31,
            'name' => 'Para proteger as suas informações pessoais e contas contra hackers.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 31,
            'name' => 'Para que seja mais fácil de lembrar.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 31,
            'name' => 'Para partilhar com qualquer pessoa que pedir.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 32,
            'name' => 'Porque todos os links de e-mail são seguros.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 32,
            'name' => 'Porque podem conter vírus ou malware prejudicial.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 32,
            'name' => 'Porque são sempre interessantes e divertidos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 32,
            'name' => 'Porque nunca sabemos o que vai acontecer.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 33,
            'name' => 'Para garantir que as informações não sejam roubadas por hackers.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 33,
            'name' => 'Para tornar a navegação na internet mais lenta.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 33,
            'name' => 'Para partilhar mais informações pessoais.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 33,
            'name' => 'Para partilhar a senha com todos os amigos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'question_id' => 34,
            'name' => 'Porque são sempre seguras e protegidas.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 34,
            'name' => 'Porque outras pessoas podem conseguir ver o que estamos a fazer.',
            'isCorrect' => 1,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 34,
            'name' => 'Porque torna a navegação na internet mais rápida.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];
        $data[] = [
            'question_id' => 34,
            'name' => 'Porque podemos partilhar a nossa senha Wi-Fi com todos.',
            'isCorrect' => 0,
            'created' => date('Y-m-d H:i:s'),
        ];


        $table = $this->table('options');
        $table->insert($data)->save();
    }
}
