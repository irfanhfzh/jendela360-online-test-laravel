@component('mail::message')
# Information from Dealer Mobil 360

Your Order Success

@component('mail::button', ['url' => route('admin.manual-orders')])
    View Your Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
