
<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

<h1>Edit Course</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/courses/{{ $course->id }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Course Name</label>
    <input type="text" id="name" name="name"
           value="{{ old('name', $course->name) }}">
    <br><br>

    <label for="description">Description</label>
    <textarea id="description" name="description">{{ old('description', $course->description) }}</textarea>
    <br><br>

    <label for="duration">Duration (Weeks)</label>
    <input type="number" id="duration" name="duration"
           value="{{ old('duration', $course->duration) }}">
    <br><br>

    <label for="fee">Course Fee</label>
    <input type="number" step="0.01" id="fee" name="fee"
           value="{{ old('fee', $course->fee) }}">
    <br><br>

    <label for="difficulty">Difficulty</label>
    <select id="difficulty" name="difficulty">
        <option value="Easy"
            {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>
            Easy
        </option>

        <option value="Medium"
            {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>
            Medium
        </option>

        <option value="Hard"
            {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>
            Hard
        </option>
    </select>

    <br><br>

    <label for="is_active">Active</label>
    <input type="checkbox" id="is_active"
           name="is_active" value="1"
           {{ old('is_active', $course->is_active) ? 'checked' : '' }}>

    <br><br>

    <button type="submit">Update Course</button>
</form>

<br>

<a href="/courses">Back to Courses</a>

</body>
</html>
