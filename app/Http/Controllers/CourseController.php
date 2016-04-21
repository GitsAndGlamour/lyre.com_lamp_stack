<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Course;
use App\Repositories\CourseRepository;

class CourseController extends Controller
{
    /**
     * The course repository instance.
     *
     * @var CourseRepository
     */
    protected $courses;

    /**
     * Create a new controller instance.
     *
     * @param  CourseRepository  $courses
     * @return void
     */
    public function __construct(CourseRepository $courses)
    {
        $this->middleware('auth');

        $this->courses = $courses;
    }

    /**
     * Display a list of all of the user's course.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('courses.index', [
            'courses' => $this->courses->forUser($request->user()),
        ]);
    }

    /**
     * Create a new course.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->courses()->create([
            'name' => $request->name,
        ]);

        return redirect('/courses');
    }

    /**
     * Destroy the given course.
     *
     * @param  Request  $request
     * @param  Course  $course
     * @return Response
     */
    public function destroy(Request $request, Course $course)
    {
        $this->authorize('destroy', $course);

        $course->delete();

        return redirect('/courses');
    }
}
