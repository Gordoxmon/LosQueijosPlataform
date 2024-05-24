<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LeaderboardsFixture
 */
class LeaderboardsFixture extends TestFixture
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
                'name' => 'Lorem ip',
                'score' => 1,
                'created' => '2024-05-24 23:34:25',
                'modified' => '2024-05-24 23:34:25',
            ],
        ];
        parent::init();
    }
}
