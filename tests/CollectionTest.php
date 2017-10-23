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

    public function setUp(){
        parent::setUp();
    }

    // methods add, remove, size, contains, isEmpty
    public function testIsEmpty(){
        $collection = new Collection();
        $this->assertTrue(true, $collection->isEmpty());
        $collection->add('Fer');
        $this->assetFalse($collection->isEmpty());
    }

    // it's always a good idea to test 0, 1 and many
    public function testSize(){
        $collection = new Collection();
        $collection->add('one');

        $this->assertSame(1, $collection->size());

        $collection->add(2);
        $collection->add('three');

        $this->assertSame(3, $collection->size());
    }
}
