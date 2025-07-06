<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CallRequest;
use App\Models\QuoteRequest;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    /**
     * Обробка форми заявки на дзвінок
     */
    public function submitCallRequest(Request $request)
    {
        Log::info('Call request form submitted', $request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'cargo_type' => 'required|string|max:100',
            'loading_type' => 'required|string|max:100',
            'message' => 'nullable|string'
        ], [
            'name.required' => 'Поле "Ім\'я" є обов\'язковим',
            'phone.required' => 'Поле "Телефон" є обов\'язковим',
            'cargo_type.required' => 'Оберіть тип вантажу',
            'loading_type.required' => 'Оберіть тип навантаження'
        ]);

        try {
            CallRequest::create($validated);
            
            return response()->json([
                'success' => true,
                'message' => 'Ваша заявка успішно відправлена! Очікуйте дзвінка від нашого менеджера найближчим часом.'
            ]);
        } catch (\Exception $e) {
            Log::error('Error saving call request: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Помилка при відправці заявки. Спробуйте ще раз.'
            ], 500);
        }
    }

    /**
     * Обробка форми запиту пропозиції
     */
    public function submitQuoteRequest(Request $request)
    {
        Log::info('Quote request form submitted', $request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'distance_min' => 'required|integer|min:0',
            'distance_max' => 'required|integer|min:0',
            'cargo_type' => 'required|string|max:100',
            'loading_type' => 'required|string|max:100'
        ], [
            'name.required' => 'Поле "Ім\'я" є обов\'язковим',
            'email.required' => 'Поле "Email" є обов\'язковим',
            'email.email' => 'Введіть коректний email',
            'phone.required' => 'Поле "Телефон" є обов\'язковим',
            'date.required' => 'Оберіть дату',
            'cargo_type.required' => 'Оберіть тип вантажу',
            'loading_type.required' => 'Оберіть тип навантаження'
        ]);

        // Перейменовуємо поле date в request_date для збереження в БД
        $validated['request_date'] = $validated['date'];
        unset($validated['date']);

        try {
            QuoteRequest::create($validated);
            
            return response()->json([
                'success' => true,
                'message' => 'Ваш запит на пропозицію успішно відправлений! Очікуйте дзвінка від нашого менеджера та комерційну пропозицію найближчим часом.'
            ]);
        } catch (\Exception $e) {
            Log::error('Error saving quote request: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Помилка при відправці запиту. Спробуйте ще раз.'
            ], 500);
        }
    }

    /**
     * Обробка контактної форми
     */
    public function submitContactMessage(Request $request)
    {
        Log::info('Contact form submitted', $request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:100',
            'message' => 'nullable|string'
        ], [
            'name.required' => 'Поле "Ім\'я" є обов\'язковим',
            'email.required' => 'Поле "Email" є обов\'язковим',
            'email.email' => 'Введіть коректний email',
            'phone.required' => 'Поле "Телефон" є обов\'язковим',
            'subject.required' => 'Оберіть тему повідомлення'
        ]);

        try {
            ContactMessage::create($validated);
            
            return response()->json([
                'success' => true,
                'message' => 'Ваше повідомлення успішно відправлено! Ми зв\'яжемося з вами найближчим часом.'
            ]);
        } catch (\Exception $e) {
            Log::error('Error saving contact message: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Помилка при відправці повідомлення. Спробуйте ще раз.'
            ], 500);
        }
    }
}
