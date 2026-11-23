
<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>

<h1>Create Course</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/courses" method="POST">
    @csrf

    <label for="name">Course Name</label>
    <input type="text" id="name" name="name"
           value="{{ old('name') }}">
    <br><br>

    <label for="description">Description</label>
    <textarea id="description" name="description">{{ old('description') }}</textarea>
    <br><br>

    <label for="duration">Duration (Weeks)</label>
    <input type="number" id="duration" name="duration"
           value="{{ old('duration') }}">
    <br><br>

    <label for="fee">Course Fee</label>
    <input type="number" step="0.01" id="fee" name="fee"
           value="{{ old('fee') }}">
    <br><br>

    <label for="difficulty">Difficulty</label>
    <select id="difficulty" name="difficulty">
        <option value="">Select Difficulty</option>
        <option value="Easy">Easy</option>
        <option value="Medium">Medium</option>
        <option value="Hard">Hard</option>
    </select>
    <br><br>

    <label for="is_active">Active</label>
    <input type="checkbox" id="is_active"
           name="is_active" value="1"
           {{ old('is_active', '1') ? 'checked' : '' }}>
    <br><br>

    <button type="submit">Create Course</button>
</form>

<br>

<a href="/courses">Back to Courses</a>

</body>
</html>
