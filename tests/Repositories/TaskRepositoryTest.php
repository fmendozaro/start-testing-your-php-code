<?php
/**
 * Created by IntelliJ IDEA.
 * User: fer
 * Date: 10/23/17
 * Time: 2:09 PM
 */

use PHPUnit\Framework\TestCase;
use StartTestingPHP\Repositories\TaskRepository;

class TaskRepositoryTest extends TestCase
{

    private $dbConnection;
    private $subject;

    public function setUp()
    {
        $this->dbConnection = Mockery::mock(mysqli::class);
        $this->subject = new TaskRepository($this->dbConnection);
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testAllEmptyArrayWhenQueryFails(){

        $this->dbConnection->shouldReceive('query')
            ->with('SELECT note FROM tasks ORDER BY created DESC')
            ->andReturn(false);
        $this->assertSame([], $this->subject->all());

    }

    public function testAllWhenNoResultsReturnsEmpty()
    {
        $result = new stdClass();
        $result->num_rows = 0;

        $this->dbConnection->shouldReceive('query')
            ->with('SELECT note FROM tasks ORDER BY created DESC')
            ->andReturn($result);
        $this->assertSame([], $this->subject->all());
    }
}
