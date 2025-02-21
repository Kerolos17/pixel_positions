<x-layout>
    <x-page-heading>Log In</x-page-heading>
    <x-forms.form method='POST' action='/login'>
        <x-forms.input name="email" label="Email" />
        <x-forms.input name="password" label="Password" type="password" />
        <x-forms.divider />
        <x-forms.button>Login</x-forms.button>
    </x-forms.form>
</x-layout>
