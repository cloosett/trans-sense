<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CallRequest;
use App\Models\QuoteRequest;
use App\Models\ContactMessage;

class AdminController extends Controller
{
    /**
     * Головна сторінка адмін-панелі
     */
    public function index()
    {
        $stats = [
            'call_requests' => CallRequest::count(),
            'quote_requests' => QuoteRequest::count(),
            'contact_messages' => ContactMessage::count(),
            'total_submissions' => CallRequest::count() + QuoteRequest::count() + ContactMessage::count()
        ];

        $recent_submissions = [
            'call_requests' => CallRequest::latest()->take(5)->get(),
            'quote_requests' => QuoteRequest::latest()->take(5)->get(),
            'contact_messages' => ContactMessage::latest()->take(5)->get()
        ];

        return view('admin.dashboard', compact('stats', 'recent_submissions'));
    }

    /**
     * Заявки на дзвінок
     */
    public function callRequests()
    {
        $callRequests = CallRequest::latest()->paginate(20);
        return view('admin.call-requests', compact('callRequests'));
    }

    /**
     * Запити пропозицій
     */
    public function quoteRequests()
    {
        $quoteRequests = QuoteRequest::latest()->paginate(20);
        return view('admin.quote-requests', compact('quoteRequests'));
    }

    /**
     * Контактні повідомлення
     */
    public function contactMessages()
    {
        $contactMessages = ContactMessage::latest()->paginate(20);
        return view('admin.contact-messages', compact('contactMessages'));
    }

    /**
     * Оновлення статусу заявки на дзвінок
     */
    public function updateCallRequestStatus(Request $request, CallRequest $callRequest)
    {
        $request->validate([
            'status' => 'required|string|in:new,processing,completed,cancelled'
        ]);

        $callRequest->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Статус оновлено успішно');
    }

    /**
     * Оновлення статусу запиту пропозиції
     */
    public function updateQuoteRequestStatus(Request $request, QuoteRequest $quoteRequest)
    {
        $request->validate([
            'status' => 'required|string|in:new,processing,completed,cancelled'
        ]);

        $quoteRequest->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Статус оновлено успішно');
    }

    /**
     * Оновлення статусу контактного повідомлення
     */
    public function updateContactMessageStatus(Request $request, ContactMessage $contactMessage)
    {
        $request->validate([
            'status' => 'required|string|in:new,processing,completed,cancelled'
        ]);

        $contactMessage->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Статус оновлено успішно');
    }
}
