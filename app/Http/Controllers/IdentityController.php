<?php
namespace App\Http\Controllers;

use App\Exceptions\AccessDeniedException;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\IIdentityRepository as InterfaceIdentityRepository;

use Illuminate\Http\Request;
class IdentityController extends Controller
{
    private $identityRepository ;

    public function __construct(InterfaceIdentityRepository $identityRepository)
    {
        $this->identityRepository = $identityRepository;
    }

    /**
     * @OA\Post(
     *     path="/auth/signin",
     *     operationId="Signin",
     *     tags={"Oauth"},
     *     @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              @OA\Property(property="username", description="Usuario", type="string", example="wordpress"),
     *              @OA\Property(property="password", description="Contraseña", type="string", example="wordpress"),
     *          )
     *      ),
     *     @OA\Response(response="200", description="Retorna Usuario Autenticado"),
     *     @OA\Response(response="400", description="Error: Error de Login.")
     * )
     */
    public function signin(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required',
            ]);

            if($validator->fails())
                return response()->json($validator->errors(),400);

            $response = null;
            $response = $this->identityRepository->signin($request->username, $request->password);

            if ($response == null)
                throw new AccessDeniedException('Acceso denegado');

            return response()->json($response,200);

        }catch (AccessDeniedException $ex){
            return response($ex->getMessage(),406);
        }
    }

}
