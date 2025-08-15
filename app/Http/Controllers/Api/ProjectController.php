<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index()
    {
        try {
            $projects = Project::with('category')->get();
            return response()->json([
                'success' => true,
                'data' => $projects,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch projects: ' . $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        $project = Project::with('category')->find($id);

        if (!$project) {
            return response()->json([
                'success' => false,
                'message' => 'Project not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $project,
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
            'name_projects' => 'required|string|max:255',
            'location_projects' => 'required|string',
            'description_projects' => 'required|string',
            'category_projects' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'isMain' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/projects', $imageName);
            $data['image'] = 'projects/' . $imageName;
        }

        $project = Project::create($data);

        return response()->json([
            'success' => true,
            'data' => $project,
            'message' => 'Project created successfully'
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json([
                'success' => false,
                'message' => 'Project not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name_projects' => 'string|max:255',
            'location_projects' => 'string',
            'description_projects' => 'string',
            'category_projects' => 'exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'isMain' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                Storage::delete('public/' . $project->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/projects', $imageName);
            $data['image'] = 'projects/' . $imageName;
        }

        $project->update($data);

        return response()->json([
            'success' => true,
            'data' => $project,
            'message' => 'Project updated successfully'
        ]);
    }

    public function destroy($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json([
                'success' => false,
                'message' => 'Project not found'
            ], 404);
        }

        // Delete image if exists
        if ($project->image) {
            Storage::delete('public/' . $project->image);
        }

        $project->delete();

        return response()->json([
            'success' => true,
            'message' => 'Project deleted successfully'
        ]);
    }
}
