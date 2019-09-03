<?php
require_once dirname(__DIR__) . '/DbSelect.php';

use PHPUnit\Framework\TestCase;
class DbSelectTest extends TestCase
{
    protected $_select;

    protected function setUp()   // 用setUp方法來做初始化
    {
        $this -> _select = new DbSelect();
    }
    public function testForm()
    {
        // $select  =  new DbSelect();
        // $select -> from('test');
        // $this -> assertEquals('SELECT * FROM test', $select -> __toString());
        $this -> _select -> from('test');
        $this -> assertEquals('SELECT * FROM test', $this -> _select  -> __toString());
    }

    public function testCols()
    {
        // $select = new DbSelect();
        // $select -> from('test') -> cols(array(
        //     'col_a',
        //     'col_b',
        // ));
        // $this -> assertEquals('SELECT col_a, col_b FROM test',
        //                                             $select -> __toString());
        $this -> _select -> from('test') -> cols(array(
            'col_a',
            'col_b',
        ));
        $this -> assertEquals('SELECT col_a, col_b FROM test',
                                                    $this -> _select -> __toString());
    }

    protected function tearDown()   // 每次測試完用tearDown還原
    {
        $this -> _select = null;
    }



    // $select  =  new DbSelect();
    // $select -> from('table') -> where(' id = 1 ');
}