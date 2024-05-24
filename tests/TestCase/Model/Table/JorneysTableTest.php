<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JorneysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JorneysTable Test Case
 */
class JorneysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JorneysTable
     */
    protected $Jorneys;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Jorneys',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Jorneys') ? [] : ['className' => JorneysTable::class];
        $this->Jorneys = $this->getTableLocator()->get('Jorneys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Jorneys);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\JorneysTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
