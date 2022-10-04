<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
    <title>Create New Tasks</title>
</head>
<body>
    <form action="/tasks" method="post" class="w-10/12 md:w-3/12 mx-auto bg-[#2c3e50] mt-10 flex items-center flex-col rounded-xl">
        @csrf
        <h1 class="text-center text-white p-4 text-2xl">Create New Tasks</h1>
        <div class="w-10/12 mx-auto p-3">
            <label for="list" class="text-white">List</label>
            <input type="text" placeholder="Type here" id="list" name="list" class="input w-full" />
        </div>
        <button type="submit" class="btn glass m-5">Submit</button>
    </form>
    
</body>
</html>