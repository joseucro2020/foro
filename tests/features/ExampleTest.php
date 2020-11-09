<?php

class ExampleTest extends FeatureTestCase
{
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Jose Rojas',
            'email' => 'joseucro1@gmail.com',
        ]);

        $this->actingAs($user,'api')
            ->visit('api/user')
            ->see('Jose Rojas')
            ->see('joseucro1@gmail.com');
    }
}
