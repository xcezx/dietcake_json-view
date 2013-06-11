<?php
class JsonViewTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->controller = $this->getMockBuilder('Controller')
            ->disableOriginalConstructor()
            ->getMock();
        $this->view = new JsonView($this->controller);
    }

    /**
     * @runInSeparateProcess
     */
    public function testRender()
    {
        $parameters = array(
            'name' => 'John Doe',
        );
        $this->view->vars = $parameters;
        $this->view->render();
        $this->assertJsonStringEqualsJsonString(json_encode($parameters), $this->view->controller->output);
    }
}
