<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Forum;
use App\Repositories\ForumRepository;

class ForumController extends Controller
{
    /**
     * The forum repository instance.
     *
     * @var ForumRepository
     */
    protected $forums;

    /**
     * Create a new controller instance.
     *
     * @param  ForumRepository  $forums
     * @return void
     */
    public function __construct(ForumRepository $forums)
    {
        $this->middleware('auth');

        $this->forums = $forums;
    }

    /**
     * Display a list of all of the user's forum.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('forums.index', [
            'forums' => $this->forums->forUser($request->user()),
        ]);
    }
    /**
     * Display a list of all of the user's forum.
     *
     * @param  Request  $request
     * @return Response
     */
    public function explore(Request $request)
    {
        return view('forums.explore', [
            'forums' => $this->forums->forUser($request->user()),
        ]);
    }    /**
         * Display a list of all of the user's forum.
         *
         * @param  Request  $request
         * @return Response
         */
        public function recent(Request $request)
        {
            return view('forums.recent', [
                'forums' => $this->forums->forUser($request->user()),
            ]);
        }    /**
             * Display a list of all of the user's forum.
             *
             * @param  Request  $request
             * @return Response
             */
            public function open(Request $request)
            {
                return view('forums.open', [
                    'forums' => $this->forums->forUser($request->user()),
                ]);
            }
            /**
             * Display a list of all of the user's forum.
             *
             * @param  Request  $request
             * @return Response
             */
            public function trending(Request $request)
            {
                return view('forums.trending', [
                    'forums' => $this->forums->forUser($request->user()),
                ]);
            }
            /**
             * Display a list of all of the user's forum.
             *
             * @param  Request  $request
             * @return Response
             */
            public function post(Request $request)
            {
                return view('forums.post', [
                    'forums' => $this->forums->forUser($request->user()),
                ]);
            }
    /**
     * Create a new forum.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->forums()->create([
            'name' => $request->name,
        ]);

        return redirect('/forums');
    }

    /**
     * Destroy the given forum.
     *
     * @param  Request  $request
     * @param  Forum  $forum
     * @return Response
     */
    public function destroy(Request $request, Forum $forum)
    {
        $this->authorize('destroy', $forum);

        $forum->delete();

        return redirect('/forums');
    }
}
