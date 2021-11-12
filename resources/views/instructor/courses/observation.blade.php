<x-instructor-layout :course="$course">

    <h1 class="text-2xl font-bold">OBERVACIONES DEL CURSO</h1>
    <hr class="mt-2 mb-6">

    <div class="text-grat-500">
        {!!$course->observation->body!!}
    </div>

</x-instructor-layout>