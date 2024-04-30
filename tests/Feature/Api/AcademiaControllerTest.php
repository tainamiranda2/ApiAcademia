<?php

namespace Tests\Feature\Api;

use App\Models\Academia;
use GuzzleHttp\ClientTrait;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;

class AcademiaControllerTest extends TestCase
{
   // use RefreshDatabase;
    /**
     * A basic feature test example.
     */

    public function test_academia_endpoint_get()
    {
   //    $academia=Academia::factory(3)->Create();
     $response = $this->getJson('/api/academia');
     $response->assertStatus( 200);
     /* $response->assertStatus( 200)
                 ->assertSee("Authorized");
  */ 
     
// $response->assertJsonCount(10);


  $response->assertJson(function(AssertableJson $json){
    //ver se tem string ou  numero
    $json->whereType('0.id','integer');
    $json->whereType('0.user_id','integer');
    $json->whereType('0.dono','integer');
    $json->whereType('0.investimento','string');
    $json->whereType('0.nome','string');
    $json->whereType('0.endereco','string');
    $json->whereType('0.data_cadastro','string'); 
  });
    }

    public function test_academia_endpoint_post()
    {
    $academia=Academia::factory(1)->makeOne()->toArray();
     $response = $this->postJson('/api/academia' , $academia);
     $response->assertStatus( 201);
  


    $response->assertJson(function(AssertableJson $json) use($academia){
      //ver se tem string ou  numero
      $json->whereAll([
        'user_id'=>$academia['user_id'] ,
        'dono'=>$academia[ 'dono'],
        'investimento'=>$academia['investimento'] , 
        'nome'=>$academia['nome'], 
        'endereco'=>$academia['endereco'
      ], 
        'data_cadastro'=>$academia['data_cadastro'], 
        
        ])->etc();
    });
  }
  public function test_academia_endpoint_put()
  {
  Academia::factory(1)->CreateOne();
  $academia = [
    'user_id' => 12,
    'dono' => false, // ou true, dependendo do valor desejado
    'investimento' => 10000000.02,
    'nome' => 'nome atualizado',
    'endereco' => 'endereço atualizado',
    'data_cadastro' => '2024-04-30 22:23:37' // ou a data correta desejada
];


  $response = $this->putJson('/api/academia/1' , $academia);

   $response->assertStatus( 200);
  $response->assertJson(function(AssertableJson $json) use($academia){
    //ver se tem string ou  numero
    $json->whereAll([
      'user_id'=>$academia['user_id'] ,
      'dono'=>$academia[ 'dono'],
      'investimento'=>$academia['investimento'] , 
      'nome'=>$academia['nome'], 
      'endereco'=>$academia['endereco'], 
      'data_cadastro'=>$academia['data_cadastro'], 
      
      ])->etc();
  });
}

public function test_delete_academia_endpoit(){
  Academia::factory(1)->Create();

  $response=$this->deleteJson('/api/academia/3' );
 
  $response->assertStatus(204);
}

}
