<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form action="/jobs" method="POST">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$90,000" />
        <x-forms.input label="Location" name="location" placeholder="Remote" />


        <x-forms.select label="Schedule" name="schedule">
        <option>Part Time</option>
        <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="Url" name="url" placeholder="http://rodriguez.com/recusandae-incidunt-et-quod.html" />

        <x-forms.checkbox label="Featured (Cost Extra)" name="featured" />

        <x-forms.divider />
        <x-forms.input label="Tag (comma seprated)" name="tags" placeholder="Laracasts, Video Education" />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>

</x-layout>