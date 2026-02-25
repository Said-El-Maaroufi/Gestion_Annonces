<!DOCTYPE html>
<html>
<head>
    <title>Ma ToDo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

    @session('task_title')
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
    <strong class="font-bold">Bravo !</strong>
    <span class="block sm:inline">
        {{ session('task_title') }}
    </span>
</div>
@endsession
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Ma Liste</h1>

        <form action="{{ route('tasks.store') }}" method="POST" class="flex mb-4">
            @csrf
            
            <input type="text"  name="title" value="@session('task_title') {{ session('task_title') }} @endsession" class="flex-1 border rounded-l p-2" placeholder="Nouvelle tâche...">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r">Ajouter</button>
        </form>

        <ul>
            @foreach($tasks as $task)
                <li class="flex justify-between items-center border-b py-2">
                    <span>{{ $task->title }}</span>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="text-red-500">Supprimer</button>

                    </form>
                        <form action="{{ route('tasks.edit', $task) }}" method="POST">
                        @csrf @method('PUT')
                        <button  class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-yellow-600">Edit</button>
                            

                        
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>