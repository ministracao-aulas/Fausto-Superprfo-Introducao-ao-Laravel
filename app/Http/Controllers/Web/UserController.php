<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * function index
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $perPage = $perPage > 0 && $perPage <= 150 ? $perPage : 10;

        $search = $request->input('search');

        $query = User::query();

        if (is_string($search) && trim($search)) {
            $query = $query->where(
                DB::raw('LOWER(name)'),
                'like',
                '%' . strtolower(trim($search)) . '%'
            );

            $request['page'] = 1;
        }

        return view('users.index', [
            'users' => $query->paginate($perPage)->withQueryString(),
        ]);
    }
}
