<div class="notification-wrapper header-links">
    <a href="javascript:void(0);" class="notification-info">
        <span class="header-icon">
            <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m450.201 407.453c-1.505-.977-12.832-8.912-24.174-32.917-20.829-44.082-25.201-106.18-25.201-150.511 0-.193-.004-.384-.011-.576-.227-58.589-35.31-109.095-85.514-131.756v-34.657c0-31.45-25.544-57.036-56.942-57.036h-4.719c-31.398 0-56.942 25.586-56.942 57.036v34.655c-50.372 22.734-85.525 73.498-85.525 132.334 0 44.331-4.372 106.428-25.201 150.511-11.341 24.004-22.668 31.939-24.174 32.917-6.342 2.935-9.469 9.715-8.01 16.586 1.473 6.939 7.959 11.723 15.042 11.723h109.947c.614 42.141 35.008 76.238 77.223 76.238s76.609-34.097 77.223-76.238h109.947c7.082 0 13.569-4.784 15.042-11.723 1.457-6.871-1.669-13.652-8.011-16.586zm-223.502-350.417c0-14.881 12.086-26.987 26.942-26.987h4.719c14.856 0 26.942 12.106 26.942 26.987v24.917c-9.468-1.957-19.269-2.987-29.306-2.987-10.034 0-19.832 1.029-29.296 2.984v-24.914zm29.301 424.915c-25.673 0-46.614-20.617-47.223-46.188h94.445c-.608 25.57-21.549 46.188-47.222 46.188zm60.4-76.239c-.003 0-213.385 0-213.385 0 2.595-4.044 5.236-8.623 7.861-13.798 20.104-39.643 30.298-96.129 30.298-167.889 0-63.417 51.509-115.01 114.821-115.01s114.821 51.593 114.821 115.06c0 .185.003.369.01.553.057 71.472 10.25 127.755 30.298 167.286 2.625 5.176 5.267 9.754 7.861 13.798z" />
            </svg>
        </span>
        <span class="count-notification"></span>
    </a>
    <div class="recent-notification">
        <div class="drop-down-header">
            <h4>All Messages</h4>
            <p>You have {{$notifications->count()}} new Messages</p>
        </div>
        <ul>
            @foreach($notifications as $notification)
            <li>
                <a href="javascript:void(0);">
                    <h5><i class="fas fa-exclamation-circle mr-2"></i>{{$notification->name}}</h5>
                    <p>{{Str::limit($notification->message,20)}}</p>
                </a>
            </li>
            @endforeach
        </ul>
        <div class="drop-down-footer">
            <a href="{{ route('admin.messages') }}" class="btn sm-btn">
                View All Messages
            </a>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        Livewire.on('playNotificationSound', data => {
            eval(data.script);
        });
    </script>
@endpush
