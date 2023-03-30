@extends('scheme.base')
@section('title', 'Persons index')

@section('content')
    @if (session('status') === 'error')
        <div id="alert-error" data-dismissible="alert_error" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Error!
            </div>
            <button data-dismissible-target="alert_error" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    @endif
    @if (session('status') === 'success')
        <div id="alert-success" data-dismissible="alert_success" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                Success!
            </div>
            <button data-dismissible-target="alert_success" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    @endif
    <div class="mt-5 flex justify-left">
        <a href="{{ route('persons.create') }}" class="w-25 rounded-lg p-3 bg-cyan-500 hover:bg-cyan-600">
            Create person
        </a>
    </div>
    <div class="flex justify-center">
        <table class="border-separate text-center border-spacing-2 border border-slate-500 m-5 bg-stone-300">
            <thead>
                <tr>
                    <th class="border-2 border-slate-600 p-3">Id</th>
                    <th class="border-2 border-slate-600 p-3">Surname</th>
                    <th class="border-2 border-slate-600 p-3">Name</th>
                    <th class="border-2 border-slate-600 p-3">Patronymic</th>
                    <th class="border-2 border-slate-600 p-3">Phone</th>
                    <th class="border-2 border-slate-600 p-3">Date of birth</th>
                    <th class="border-2 border-slate-600 p-3">Email</th>
                    <th class="border-2 border-slate-600 p-3">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($persons as $person)
                <tr>
                    <td class="border border-slate-700 p-3">{{ $person->id }}</td>
                    <td class="border border-slate-700 p-3">{{ ucfirst($person->surname) }}</td>
                    <td class="border border-slate-700 p-3">{{ ucfirst($person->name) }}</td>
                    <td class="border border-slate-700 p-3">{{ ucfirst($person->patronymic) }}</td>
                    <td class="border border-slate-700 p-3">{{ $person->phone }}</td>
                    <td class="border border-slate-700 p-3">{{ $person->date_of_birth }}</td>
                    <td class="border border-slate-700 p-3">{{ $person->email }}</td>
                    <td class="border border-slate-700 p-3">
                        <div class="flex m-5">
                            <a href="{{ route('persons.edit', ['person' => $person]) }}" class="border-dashed border-2 border-black bg-amber-300 hover:bg-amber-500 rounded-lg p-3 mr-5">
                                Edit
                            </a>
                           <form action="{{ route('persons.destroy', ['person' => $person]) }}" method="post">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="border-dashed border-2 border-black bg-red-400 hover:bg-red-900 rounded-lg p-3">
                                   Delete
                               </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="m-10">
        {{ $persons->links() }}
    </div>
@endsection

