<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('project_skills')->get();
        if (count($projects) > 0) {
            foreach ($projects as $key => $value) {
                $projects[$key]['description'] = \App::isLocale('ja') ? $projects[$key]['description_ja'] : $projects[$key]['description_en'];
            }
        }

        return $projects;
    }
}
