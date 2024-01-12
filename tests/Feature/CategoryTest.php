<?php

// namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Tests\TestCase;

// class CategoryTest extends TestCase
// {
//     /**
//      * A basic feature test example.
//      */
//     public function test_example(): void
//     {
//         $response = $this->get('/');

//         $response->assertStatus(200);
//     }
    
// }

// todo('it can show a Category List');
it('can show a Category List', function(){
    // arrange &act
    $response = $this->get('/myboard/mycategories');

    // assertion
    $response->assertOk('/myboard/mycategories/index');

    // red -> refactor -> green

});

// todo('it can show a Category entry form');
it('can show a Category entry form', function(){
    // $this->withoutExceptionHandling();

    // arrange & act
    $response = $this->get('/myboard/mycategories/create');

    // assertion
    $response->assertOk();
});

// todo('it gives validation error when blank form of Category of Post is submitted');
it('gives validation error when blank form of Category of Post is submitted', function(){
    // arrange
    $payload = [
        'name' => '',
    ];

    // act
    $response = $this->post('/myboard/mycategories', $payload);

    // assertion
    $response->assertSessionHasErrors([
        'name' => 'Please fill it up!',
    ]);

});

// todo('it can add a Category of Post to existing list');
it('can add a Category to existing list', function(){
     // arrange
     $payload = [
        'name' => 'Category 06',
    ];

    $this->assertDatabaseCount('categories', 0);

    // act
    $response = $this->post('/myboard/mycategories', $payload);

    // assertion
    $response->assertRedirect('/myboard/mycategories');

    // $this->assertDatabaseHas('categories', $payload);

    $this->assertDatabaseCount('categories', 1);
});

todo('it ensure Category of Post Name is unique');
// it('ensure Category of Post Name is unique', function(){
//     // 
// });

todo('it can load the Category of Post page');

todo('it can show a not found message when Category of Post list empty');

todo('it can update Category of Post');

todo('it can delete Category of Post Form');

// group, dataset, hook
