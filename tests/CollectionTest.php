<?php
/**
 * Created by IntelliJ IDEA.
 * User: fer
 * Date: 10/23/17
 * Time: 1:13 PM
 */

use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{

    private $manyCollection;
    private $oneCollection;
    private $emptyCollection;

    public function setUp(){

        $this->emptyCollection = new Collection();

        $this->oneCollection = new Collection();
        $this->oneCollection->add('one');

        $this->manyCollection = new Collection();
        $this->manyCollection->add(2);
        $this->manyCollection->add('three');

        parent::setUp();
    }

    // methods add, remove, size, contains, isEmpty
    public function testIsEmpty(){
        $this->assertTrue(true, $this->emptyCollection->isEmpty());
        $this->emptyCollection->add('Fer');
        $this->assetFalse($this->emptyCollection->isEmpty());
    }

    // it's always a good idea to test 0, 1 and many
    public function testSize(){
        $this->oneCollection->add('one');

        $this->assertSame(1, $this->oneCollection->size());

        $this->manyCollection->add(2);
        $this->manyCollection->add('three');

        $this->assertSame(3, $this->manyCollection->size());
    }
}
