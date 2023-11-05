<div class="cart-wrapper header-links">
    <a href="javascript:void(0);" class="cart-info">
        <span class="header-icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 512 512" xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M402.351,381.058h-203.32l-11.806-47.224h266.587L512,101.085H129.038L108.882,20.46H0v33.4h82.804l82.208,328.827
                            c-24.053,5.971-41.938,27.737-41.938,53.611c0,30.461,24.781,55.242,55.241,55.242c30.459,0,55.241-24.781,55.241-55.242
                            c0-7.755-1.613-15.138-4.511-21.841h122.577c-2.897,6.703-4.511,14.086-4.511,21.841c0,30.461,24.781,55.242,55.241,55.242
                            c30.459,0,55.241-24.781,55.241-55.242C457.592,405.84,432.811,381.058,402.351,381.058z M287.029,300.434h-37.08l-8.284-66.275
                            h45.365V300.434z M411.912,134.484h57.31l-16.568,66.275h-49.026L411.912,134.484z M399.453,234.16h44.85l-16.568,66.275h-36.566
                            L399.453,234.16z M320.428,134.484h57.824l-8.284,66.275h-49.539V134.484z M320.428,234.159h45.365l-8.284,66.275h-37.08V234.159z
                             M287.029,134.484v66.275h-49.539l-8.284-66.275H287.029z M137.388,134.484h58.158l8.284,66.275h-49.873L137.388,134.484z
                             M162.307,234.159h45.699l8.284,66.275h-37.414L162.307,234.159z M178.315,458.141c-12.043,0-21.841-9.798-21.841-21.842
                            c0-12.043,9.798-21.841,21.841-21.841s21.841,9.798,21.841,21.841C200.156,448.343,190.358,458.141,178.315,458.141z
                             M402.351,458.141c-12.043,0-21.841-9.798-21.841-21.842c0-12.043,9.798-21.841,21.841-21.841
                            c12.043,0,21.841,9.798,21.841,21.841C424.192,448.343,414.394,458.141,402.351,458.141z" />
                    </g>
                </g>
            </svg>
        </span>
        <span class="item-count">{{ $notifications->count() }}</span>
    </a>
    <div class="of-notification-comment">
        <div class="of-nt-text">
            <h5>New Orders</h5>
            <h6>You have {{ $notifications->count() }} No's of orders</h6>
        </div>
        <div class="of-nt-scroll">
            @foreach ($notifications as $notification)
                <div class="of-nt-flex">
                    <div class="of-nt-cmnt">
                        <p>New Order</p>
                        <div class="int-table-quantity">
                            <div class="quantity-wrapper">
                                <div class="quantity-qty">
                                    <h5>{{ $notification->total }}</h5>
                                </div>
                                <button class="btn btn-warning" wire:click="markAsRead({{ $notification->id }})">Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="int-sop-cart-btn">
            <a href="{{ route('admin.orders') }}" class="ad-btn">View Orders</a>
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