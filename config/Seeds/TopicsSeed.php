<?php

declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\ORM\TableRegistry; // Import the TableRegistry class

/**
 * Topics seed.
 */
class TopicsSeed extends AbstractSeed
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
        $data = [];

        $table = $this->table('topics');
        $topics = TableRegistry::getTableLocator()->get('topics'); // Get the 'topics' table
        $count = $topics->find()->count();
        if ($count > 0) {
            return;
        }
        $data[] = [
            'id' => 1,
            'name' => 'Segurança de Senhas',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'id' => 2,
            'name' => 'Privacidade Online',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'id' => 3,
            'name' => 'Cyberbullying',
            'created' => date('Y-m-d H:i:s'),

        ];
        $data[] = [
            'id' => 4,
            'name' => 'Segurança na Internet',
            'created' => date('Y-m-d H:i:s'),

        ];


        //check if the data already exists


        $table->insert($data)->save();
    }
}
