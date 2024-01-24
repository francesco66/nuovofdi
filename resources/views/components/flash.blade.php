@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show"
        class="fixed top-20 left-20 bg-blue-500 text-white text-sm py-2 px-4">
        <p>{{ session('success') }}</p>
    </div>
@endif
