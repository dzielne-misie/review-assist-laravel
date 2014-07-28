<?php
namespace DzielneMisie\ReviewAssistLaravel\Tests;

use PHPUnit_Framework_TestCase;
/**
 * Just a fake test class  used for travis configuration
 *
 * @author Maciej Iwanowski <kasztelix@gmail.com>
 */
class FakeTest extends PHPUnit_Framework_TestCase
{
    public function testPass()
    {
        $this->assertSame(1.1, 1.1);
    }
    
    public function testFail()
    {
        $this->assertSame(1.0, 1);
    }
    
    public function testThatIsSeriouslyWrong()
    {
        $this->assertSame([], new \stdClass());
    }
}
