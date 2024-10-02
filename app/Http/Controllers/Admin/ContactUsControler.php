<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsControler extends Controller
{
    public function saveContactUs(Request $request)
    {
        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        if ($contact->save())
            return redirect('/');
    }

    // :==================== :: ** function ** :: ====================
    public function index()
    {
        $messages = ContactUs::get();
        return view('admin/messages/index')->with('messages', $messages);
    }

    // :==================== :: ** function ** :: ====================
    public function destroy($id)
    {
        // البحث عن العنصر المطلوب
        $data = ContactUs::findOrFail($id);

        $data->delete();

        // إعادة توجيه أو إرجاع استجابة
        return redirect()->back()->with(['success' => 'deleted successfully']);
    }

    // :==================== :: ** function ** :: ====================
    public function create()
    {
        return view('client.contact');
    }
}
