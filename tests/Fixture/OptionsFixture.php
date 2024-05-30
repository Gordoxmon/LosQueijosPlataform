<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OptionsFixture
 */
class OptionsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'question_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'isCorrect' => 1,
                'created' => '2024-05-24 23:33:50',
                'modified' => '2024-05-24 23:33:50',
            ],
        ];
        parent::init();
    }
}
