<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
//use App\Models\Joke;
//use App\Models\Category;
use Illuminate\Support\Number;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    //
    public function index(): View
    {
        $userCount = User::count();
        $userSuspendedCount = User::where('suspended', 1)->count();
        $roleCount = Role::count();
        $categoryCount = 12;
        $jokeCount = 5683;
//        $categoryCount = Category::count();
//        $jokeCount = Joke::count();

        ds("User Count: ".$userCount, "Suspended Count: ".$userSuspendedCount);

        return view('admin.index')
            ->with('jokeCount', Number::format($jokeCount))
            ->with('categoryCount', Number::format($categoryCount))
            ->with('roleCount', Number::format($roleCount))
            ->with('userCount', Number::format($userCount))
            ->with('userSuspendedCount', Number::format($userSuspendedCount));
    }

    //
    public function users(): View
    {
        $users = User::paginate(10);

        return view('admin.users.index')
            ->with('users', $users);
    }
}
