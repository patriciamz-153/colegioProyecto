<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Models\Usuario;

class CrearInstitucionTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions;

    protected $user;

    public function setUp()
    {
        parent::setUp();
        $this->user = Usuario::find(1);
    }

    /**
     * Test cuando no se ingresan campos
     *
     * @return void
     */
    public function testCrearInstitucionConCamposVacios()
    {
        $this->be($this->user);
        $this->call(
            'POST',
            route('instituciones.store'), [
                '_token' => csrf_token()
            ]
        );

        $this->assertSessionHasErrors();
    }

    /**
     * Test cuando solo se ingresa el nombre
     * @return void
     */
    public function testCrearInstitucionConSoloNombre()
    {
        $this->be($this->user);

        $institucion = factory(App\Models\Institucion::class)->make();

        $this->call(
            'POST',
            route('instituciones.store'), [
                '_token' => csrf_token(),
                'nombre' => $institucion->nombre,
            ]
        );

        $this->assertSessionHasErrors();
    }

    /**
     * Test cuando solo se ingresan las siglas
     * @return void
     */
    public function testCrearInstitucionConSoloSiglas()
    {
        $this->be($this->user);

        $institucion = factory(App\Models\Institucion::class)->make();

        $this->call(
            'POST',
            route('instituciones.store'), [
                '_token' => csrf_token(),
                'siglas' => $institucion->siglas,
            ]
        );

        $this->assertSessionHasErrors();
    }

    /**
     * Test cuando el nombre y las siglas son de una palabra
     * @return type
     */
    public function testCrearInstitucionConCampos()
    {
        $this->be($this->user);

        $institucion = factory(App\Models\Institucion::class)->make();

        $response = $this->call(
            'POST',
            route('instituciones.store'), [
                '_token' => csrf_token(),
                'nombre' => $institucion->nombre,
                'siglas' => $institucion->siglas,
            ]
        );

        $this->assertSessionMissing('errors');
    }
}
