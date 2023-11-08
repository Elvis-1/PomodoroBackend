<?php
namespace App\Http\Controllers;
use App\Models\WorkEntry;
use Illuminate\Http\Request;


class WorkEntryController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            'startTimestamp' => 'required|date',
            'stopTimestamp' => 'required|date',
        ]);

        WorkEntry::create($data);

        return response()->json(['message' => 'Work entry created'], 201);
    }

    public function index()
    {
        $workEntries = WorkEntry::all();

        return response()->json($workEntries);
    }
}

