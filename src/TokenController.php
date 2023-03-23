
<?php
namespace Inklings\IndieAuthTokens;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

class TokenController extends Controller
{
 
    public function index(Request $request)