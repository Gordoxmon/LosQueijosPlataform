<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class FrontOfficeController extends AppController
{

    public function initialize(): void
    {
    }
    public function index()
    {
    }
    public function page()
    {
        $topics = TableRegistry::getTableLocator()->get('Topics');

        $topics = $topics->find()->contain(['Questions' => ['Options']])->toArray();



        $this->set(compact('topics'));
    }

    public function credits()
    {
    }
}
