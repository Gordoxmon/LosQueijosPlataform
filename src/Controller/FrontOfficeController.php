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
    public function creditos()
    {

    }

    public function lore1()
    {

    }
    public function lore2()
    {

    }
    public function lore3()
    {

    }
    public function game()
    {
        $topics = TableRegistry::getTableLocator()->get('Topics');

        $topics = $topics->find()->contain(['Questions' => ['Options']])->toArray();



        $this->set(compact('topics'));
    }
    public function scoreboard()
    {

    }

    public function defeat()
    {

    }

    public function credit()
    {

    }

    public function victory()
    {

    }
}
