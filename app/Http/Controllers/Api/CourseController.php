<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    // List all courses
    public function index()
    {
        $courses = Course::all();

        return response()->json([
            'success' => true,
            'data' => $courses,
        ], 200);
    }

    public function enrollUser(Request $request, $courseId)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        // Find the course and user
        $course = Course::findOrFail($courseId);
        $user = User::findOrFail($request->user_id);

        // Attach the user to the course
        $course->users()->attach($user->id);

        return response()->json([
            'success' => true,
            'message' => 'User enrolled in course successfully!',
            'course' => $course,
        ], 200);
    }

    public function addComment(Request $request, $courseId)
    {

        if (!$request->user()) {
            return response()->json([
                'success' => false,
                'message' => 'unauthorized user',
            ], 401);
        }


        // Find the course and user
        $user = Auth::id();

        $request->validate([
            'content' => 'required|string',
        ]);

        $comment = Comment::create([
            'user_id' =>  $user,
            'course_id' => $courseId,
            'content' => $request->content,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Comment added successfully!',
            'comment' => $comment,
        ], 201);
    }
    public function likeCourse($courseId)
    {
        $course = Course::findOrFail($courseId);
        $user = auth()->user();

        if ($course->likedBy()->where('user_id', $user->id)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'You have already liked this course.',
            ], 400);
        }

        $course->likedBy()->attach($user->id);

        return response()->json([
            'success' => true,
            'message' => 'Course liked successfully!',
        ], 200);
    }
    public function unlikeCourse($courseId)
    {
        $course = Course::findOrFail($courseId);
        $user = auth()->user();

        if (!$course->likedBy()->where('user_id', $user->id)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'You have not liked this course yet.',
            ], 400);
        }

        $course->likedBy()->detach($user->id);

        return response()->json([
            'success' => true,
            'message' => 'Course unliked successfully!',
        ], 200);
    }

    public function search(Request $request)
    {
        // Obtener los filtros desde los parámetros de la solicitud
        $query = Course::query();

        // Filtro por nombre del curso
        if ($request->has('title') && !empty($request->title)) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        // Filtro por categoría
        if ($request->has('category') && !empty($request->category)) {
            $query->whereHas('category', function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->category . '%');
            });
        }

        // Filtro por Rango de edad
         if ($request->has('age_group_id') && !empty($request->age_group_id)) {
            $query->where('age_group_id', $request->age_group_id);
        }

        // Ejecutar la consulta y devolver los cursos encontrados
        $courses = $query->with('age_group')->get();

        // Retornar los cursos como respuesta JSON
        return response()->json($courses);
    }
}
