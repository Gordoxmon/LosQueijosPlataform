<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LeaderboardsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LeaderboardsTable Test Case
 */
class LeaderboardsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LeaderboardsTable
     */
    protected $Leaderboards;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Leaderboards',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Leaderboards') ? [] : ['className' => LeaderboardsTable::class];
        $this->Leaderboards = $this->getTableLocator()->get('Leaderboards', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Leaderboards);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LeaderboardsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
