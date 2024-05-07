<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class EventController extends Controller
{
    // index page render function
    public function index()
    {
        $events = Event::all();
        return view('admin.Event.index', compact('events'));
    }

    // create page render function
    public function create()
    {
        return view('admin.Event.create');
    }

    // event store function
    public function store(Request $request)
    {
        $request->validate(
            [
                'event_name' => ['required'],
                'event_description' => ['required'],
                'date' => ['required'],
                'event_image' => ['required'],

            ]
        );

        DB::beginTransaction();
        try {
            $image = $request->file('event_image');
            $imageName = time() . $image->getClientOriginalName();
            $image->move('public/image/eventimage/', $imageName);
            $store_event = new Event();
            $store_event->event_name = $request->event_name;
            $store_event->event_description = $request->event_description;
            $store_event->date = $request->date;
            $store_event->event_image = 'public/image/eventimage/' . $imageName;
            $store_event->save();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Adding Event');
            return back();
        }
        DB::commit();
        toastr()->success('Event Added Successfully');
        return redirect()->route('admin.event.index');
    }


    // edit page render function
    public function edit($id)
    {
        $event = Event::findorfail($id);
        return view('admin.Event.edit', compact('event'));
    }

    // update event page function
    public function update(Request $request,  $id)
    {
        $request->validate(
            [
                'event_name' => ['required'],
                'event_description' => ['required'],
                'date' => ['required']
            ]
        );
        DB::beginTransaction();
        try {
            $edit_event = Event::findorfail($id);
            if ($image = $request->file('event_image')) {
                $imageName = time() . $image->getClientOriginalName();
                $image->move('public/image/eventimage/', $imageName);
                $edit_event->event_image = 'public/image/eventimage/' . $imageName;
            } else {
                $imageName = $edit_event->event_image;
            }
            $edit_event->event_name = $request->event_name;
            $edit_event->date = $request->date;
            $edit_event->event_description = $request->event_description;
            $edit_event->update();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating Event');
            return back();
        }
        DB::commit();
        toastr()->success('Event Updated Successfully');
        return redirect()->route('admin.event.index');
    }

    // delete function
    public function delete($id)
    {
        try {
            $delete_event = Event::findorfail($id);
            $delete_event->delete();
        } catch (Exception $exception) {
            toastr()->error('Error While Deleting Event');
            return back();
        }
        toastr()->success('Event Deleted Successfully');
        return redirect()->back();
    }
    function view($id)
    {
        $event = Event::findorfail($id);
        return view('admin.Event.show', compact('event'));
    }
}