<x-layout>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <x-page-heading>Login</x-page-heading>
        </div>
        <x-forms.form action="/login" method="POST">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <x-forms.input label="Email" type="email" name="email" placeholder="Enter your Email address" />
                <x-forms.input label="Password" type="password" name="password" placeholder="Enter you password" />
            </div>
            <x-forms.button>Login</x-forms.button>
        </x-forms.form>
    </div>

</x-layout>
