
    @if ($success == true)
        <x-alerts.success-alert messsage={{ $message }}></x-alerts.success-alert>
    @elseif($success == false)
            <x-alerts.error-alert messsage={{ $message }}></x-alerts.error-alert>
    @endif
