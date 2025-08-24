<?php

use Illuminate\Http\Request;
use App\Services\CICDService;

class CICDController extends Controller
{
    protected $cicdService;

    public function __construct(CICDService $cicdService)
    {
        $this->cicdService = $cicdService;
    }

    public function deploy(Request $request)
    {
        $payload = $request->all();
        $result = $this->cicdService->handleDeploy($payload);

        return response()->json($result);
    }
}