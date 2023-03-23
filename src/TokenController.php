
<?php
namespace Inklings\IndieAuthTokens;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

class TokenController extends Controller
{
 
    public function index(Request $request)
    {
        if (isset($request['code']) &&
            isset($request['me']) &&
            isset($request['state']) &&
            isset($request['redirect_uri'])) {

            $post_data = http_build_query(array(
                'code'          => $request['code'],
                'me'            => $request['me'],
                'redirect_uri'  => $request['redirect_uri'],
                'client_id'     => $request['client_id'],
                'state'         => $request['state']