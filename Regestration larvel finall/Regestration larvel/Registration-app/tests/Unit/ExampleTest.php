<?php

namespace Tests\Unit;
use PHPUnit\TextUI\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\userForm;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * Test the registration page loads successfully.
     *
     * @return void
     */
    public function testRegistrationPageLoads(){
        $response = $this->get('/');
        $response->assertStatus(200); // Invalid assertion status code
    }

    /**
     * Test registration with valid data.
     *
     * @return void
     */
    public function testRegistrationFormSubmission()
    {
        $formData = [
            'full_name' => 'John Doe',
            'user_name' => 'johndoe',
            'birthdate' => '1990-01-01',
            'phone' => '123456789',
            'address' => '123 Street',
            'password' => 'Johnn44#',
            'confirm_password' => 'Johnn44#',
            'email' => 'john@example.com',
        ];
    
        $response = $this->post('/', $formData);
    
        // Add assertions to verify the registration process, e.g., redirection, etc.
        $response->assertStatus(200);
    
    
    }


    public function testApiRoute()
    {
        $response = $this->get('/api');
        $response->assertStatus(200);
        // Add more assertions as needed
    }

    /**
     * Test email route.
     *
     * @return void
     */
   

    /**
     * Test registration with invalid data.
     *
     * @return void
     */

  


}
