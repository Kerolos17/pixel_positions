<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method='POST' action='/jobs'>
        <x-forms.input name="title" label="Title" placeholder="FrontEnd" />
        <x-forms.input name="salary" label="Salary" placeholder="$70,000 USD" />
        <x-forms.input name="location" label="Location" placeholder="Remote" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="https://example.com" />

        <x-forms.checkbox name="featured" label="Feature(Cost Extra)" />
        <x-forms.divider />
        <x-forms.input name="tags" label="Tags" placeholder="Frontend , Backend , video" />
        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>
