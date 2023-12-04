<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Send Sms by Twilio -->
                    <form action="{{ route('send_sms_by_twilio') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <input type="phone" class="form-control" name="receipent_phone_no" placeholder="Enter Receipent Phone Number">

                            <button type="submit" class="btn btn-primary">Send SMS</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
