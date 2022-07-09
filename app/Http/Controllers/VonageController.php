<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SuccessfulRegistration;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class VonageController extends Controller
{
    public function onDemand() {
        Notification::route('vonage', config('app.admin_sms_number'))
            ->notify(new InvoicePaid('INV-84052'));
        
        return 'Send SMS via Vonage On Demand success!';
    }

    public function byUserModel() {
        $user = User::findOrFail(1);

        $user->notify(new SuccessfulRegistration($user->name));

        return 'Send SMS via Vonage success!';
    }
}
