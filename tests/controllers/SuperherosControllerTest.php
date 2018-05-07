<?php

/**
 * Se prueban las funciones CRUD de Superheroes.
 */
class SuperherosControllerTest extends TestCase {

	public function tearDown()
	{
		Mockery::close();
	}

	public function mock($class)
	{
		$mock = Mockery::mock($class);

		$this->app->instance($class, $mock);

		return $mock;
	}

	public function testIndexWithOnePage()
	{
		$maxByPage = 5;
		$mock = $this->mock('App\Superhero');
		$mock->shouldReceive('paginate')
		     ->once()
		     ->andReturn(array('1','2','3','4','5'));
		$this->call('GET', 'superheros');

		$this->assertViewHas('superheros');

		$content = $this->response->original->getData()['superheros'];

		$this->assertTrue(
			count($content) <= $maxByPage,
			'ERROR - El controller esta devolviendo mas de '
			. $maxByPage . ' elementos'
		);

	}

	public function testIndexEmpty()
	{
		$mock = $this->mock('App\Superhero');
		$mock->shouldReceive('paginate')
		     ->once()
		     ->andReturn(array());

		$this->call('GET', 'superheros');

		$this->assertViewHas('superheros');

		$content = $this->response->original->getData()['superheros'];

		$this->assertTrue(
			count($content) == 0 ,
			'ERROR - El controller no esta devolviendo un array vacio '
		);
	}

}
