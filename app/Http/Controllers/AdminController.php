<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Schedule;

class AdminController extends Controller
{
    // Konstruktor: Menambahkan cek admin untuk semua metode
    public function __construct()
    {
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized Access');
        }
    }

    // Dashboard admin
    public function dashboard()
    {
        $totalUsers = User::count();
        $totalEvents = Event::count();
        $totalDonations = 0; // Placeholder

        $users = User::paginate(10);

        return view('admin.dashboard', compact('totalUsers', 'totalEvents', 'totalDonations', 'users'));
    }

    // Kelola pengguna
    public function users()
    {
        $users = User::paginate(10);
        return view('admin.users', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    }

    // Kelola event
    public function events()
    {
        $events = Event::paginate(9); // Paginate 9 events per page
        return view('admin.events', compact('events'));
    }

    public function create()
    {
        return view('admin.create-event');
    }

    public function storeEvent(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        // Upload file gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');

            // Simpan data event
            Event::create([
                'image' => $imagePath,
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
            ]);

            return redirect()->route('admin.events')->with('success', 'Event added successfully!');
        }

        return back()->withErrors(['image' => 'Image upload failed. Please try again.']);
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.edit-event', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $event->image = $imagePath;
        }

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;

        $event->save();

        return redirect()->route('admin.events')->with('success', 'Event updated successfully!');
    }

    // Kelola jadwal
    public function schedules()
    {
        $schedules = Schedule::paginate(10);
        return view('admin.schedules', compact('schedules'));
    }

    public function createSchedule()
    {
        return view('admin.create-schedule');
    }

    public function storeSchedule(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required|string|max:255',
        ]);

        Schedule::create($request->all());

        return redirect()->route('admin.schedules')->with('success', 'Schedule created successfully!');
    }

    public function editSchedule($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('admin.edit-schedule', compact('schedule'));
    }

    public function updateSchedule(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required|string|max:255',
        ]);

        $schedule->update($request->all());

        return redirect()->route('admin.schedules')->with('success', 'Schedule updated successfully!');
    }

    public function destroySchedule($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect()->route('admin.schedules')->with('success', 'Schedule deleted successfully!');
    }
}