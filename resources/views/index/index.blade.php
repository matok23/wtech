@if(session('order_success'))
    <div class="alert alert-success text-center" style="font-size: 1.5rem; padding: 2rem;">
        ✅ {{ session('order_success') }}
    </div>
@endif