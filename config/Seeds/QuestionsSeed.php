<?php

declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\ORM\TableRegistry;

/**
 * Questions seed.
 */
class QuestionsSeed extends AbstractSeed
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
        $questions = TableRegistry::getTableLocator()->get('questions');
        $count = $questions->find()->count();
        if ($count > 0) {
            return;
        }


        $data = [];


        $table = $this->table('questions');

        $data[] = [
            'topic_id' => 1,
            'name' => 'Qual é a principal razão para usar uma palavra passe forte?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 1,
            'name' => 'O que é uma boa prática ao criar uma palavra passe?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 1,
            'name' => 'O que devemos fazer se alguém pedir para partilharmos a nossa palavra passe?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 1,
            'name' => 'Qual é o lugar mais seguro para guardar uma palavra passe?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 1,
            'name' => 'Por que razão é importante não usar informações pessoais na palavra passe?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 1,
            'name' => 'O que devemos fazer se alguém tentar adivinhar a nossa palavra passe?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 1,
            'name' => 'Como podemos tornar as nossas palavras passe mais seguras?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 1,
            'name' => 'Qual é o melhor momento para mudar a nossa palavra passe?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 1,
            'name' => 'O que devemos fazer se encontrarmos uma palavra passe escrita num papel?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 1,
            'name' => 'Por que razão devemos manter as nossas palavras passe em segredo?',
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'topic_id' => 2,
            'name' => 'O que é privacidade online?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 2,
            'name' => 'O que devemos evitar partilhar nas redes sociais?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 2,
            'name' => 'O que é um exemplo de informação pessoal que não devemos partilhar online?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 2,
            'name' => 'Por que razão devemos ter cuidado ao partilhar fotos online?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 2,
            'name' => 'O que é importante lembrar ao partilhar nas redes sociais?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 2,
            'name' => 'Por que razão devemos ter cuidado com mensagens de pessoas desconhecidas?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 2,
            'name' => 'O que devemos fazer se alguém online nos pedir para encontrá-los pessoalmente?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 2,
            'name' => 'Por que razão é importante pensar antes de publicar algo online?',
            'created' => date('Y-m-d H:i:s'),

        ];


        $data[] = [
            'topic_id' => 3,
            'name' => 'O que é cyberbullying?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 3,
            'name' => 'O que pode ser considerado cyberbullying?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 3,
            'name' => 'Qual é a melhor forma de lidar com o cyberbullying?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 3,
            'name' => 'O que devemos fazer se presenciamos cyberbullying online?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 3,
            'name' => 'Por que razão é importante falar sobre o cyberbullying?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 3,
            'name' => 'O que é um comportamento adequado online?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 3,
            'name' => 'Qual é o primeiro passo se estiveres a ser alvo de cyberbullying?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 3,
            'name' => 'O que devemos fazer se recebermos uma mensagem online que nos faz sentir desconfortáveis?',
            'created' => date('Y-m-d H:i:s'),

        ];

        $data[] = [
            'topic_id' => 4,
            'name' => 'Qual é uma medida importante para proteger-se na internet?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 4,
            'name' => 'Por que razão devemos ter cuidado ao clicar em links de e-mails desconhecidos?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 4,
            'name' => 'O que devemos fazer se recebermos uma mensagem ou e-mail suspeito?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 4,
            'name' => 'Qual é a importância de manter o software do computador atualizado?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 4,
            'name' => 'Por que é importante criar palavras passe fortes para as suas contas online?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 4,
            'name' => 'O que se deve fazer se desconfiar que a sua conta online foi comprometida?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 4,
            'name' => 'Qual é a importância de verificar se um site é seguro antes de inserir informações pessoais?',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'topic_id' => 4,
            'name' => 'Por que razão devemos ter cuidado ao usar redes Wi-Fi públicas?',
            'created' => date('Y-m-d H:i:s'),

        ];


        $table->insert($data)->save();
    }
}
