<x-layout>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <x-page-heading>Register</x-page-heading>
        </div>
        <x-forms.form action="/register" method="POST">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <x-forms.input label="First Name" type="text" name="first_name" placeholder="First Name" />
                <x-forms.input label="Last Name" type="text" name="last_name" placeholder="Last Name" />
                <x-forms.input label="Email" type="email" name="email" placeholder="Enter your Email address" />
                <x-forms.input label="Password" type="password" name="password" placeholder="Enter you password" />
            </div>
            <x-forms.button>Register</x-forms.button>
        </x-forms.form>
    </div>

</x-layout>
