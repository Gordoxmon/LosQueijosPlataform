<?php
declare(strict_types=1);



namespace App\View;

use Cake\View\View;

class AppView extends View
{
    private \Cake\View\Helper|null|\DebugKit\View\Helper\HelperHelper|Helper\HelperHelper|\Cake\View\Helper\HelperHelper|\HelperHelper $Helper;


    public function initialize(): void
    {
    }
}
