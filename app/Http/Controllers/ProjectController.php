<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function show()
    {
        $project = Project::get();
        return view("page.project.show", compact("project"));
    }
    public function store(Request $request)
    {
        $attr = $request->validate([
            "nama" => "required",
            "link" => "required",
            "desc" => "required",
            "picture" => "required|mimes:png,jpg,webp",
            "teknologi" => "required"
        ]);
        $file_name = time() . "_" .   $request->file("picture")->getClientOriginalName();
        $photo =   Image::make($request->file("picture"))
            ->resize(1270, null, function (
                $constraint
            ) {
                $constraint->aspectRatio();
            })
            ->encode('png', 80);
        Storage::disk('public')->put('project/' . $file_name, $photo);
        $attr["picture"] = "project/" . $file_name;
        // $attr["picture"] = $request->file("picture")->store("/project/picture");
        $attr["slug"] = Str::slug($attr["nama"], '-');;

        try {
            Project::create($attr);
            return back()->with("success", "Berhasil Menambahkan");
        } catch (\Throwable $th) {
            return back()->with("error", "Gagal Menambahkan");
        }
    }
    public function destroy(Request $request, Project $project)
    {

        if (Storage::exists($project->picture)) {
            Storage::delete($project->picture);
        }

        try {
            $project->delete();
            return back()->with("success", "Berhasil Menghapus");
        } catch (\Throwable $th) {
            return back()->with("error", "Gagal Menghapus");
        }
    }
}
