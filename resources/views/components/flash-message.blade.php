@if(session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
         class="alert alert-success alert-dismissible fade show fixed-top mx-auto text-center" 
         style="max-width: 500px; top: 0; left: 50%; transform: translateX(-50%); position: absolute;"
         role="alert">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif


