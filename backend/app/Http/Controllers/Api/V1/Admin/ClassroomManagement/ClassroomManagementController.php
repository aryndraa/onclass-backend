<?php

namespace App\Http\Controllers\Api\V1\Admin\ClassroomManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Admin\ClassroomManagement\UpSerRequest;
use App\Http\Resources\Api\V1\Admin\ClassroomManagement\IndexResource;
use App\Http\Resources\Api\V1\Admin\ClassroomManagement\ShowResource;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomManagementController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::query()
            ->with(['teacher.profile'])
            ->get();

        return IndexResource::collection($classrooms);
    }

    public function store(UpSerRequest $request)
    {
        $classroom = Classroom::query()->make($request->validated());
        $classroom->teacher()->associate($request['teacher_id']);
        $classroom->major()->associate($request['major_id']);
        $classroom->save();

        return response()->json([
            "message" => "classroom added"
        ]);
    }

    public function show(Classroom $classroom) {
        $classroom->load(['teacher.profile']);

        return ShowResource::make($classroom);
    }
}
