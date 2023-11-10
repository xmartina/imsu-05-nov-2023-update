<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course Form Pins</title>
</head>
<body>
<h1>Create Course Form Pins</h1>

<form action="{{ route('pins.store') }}" method="POST">
    @csrf
    <label for="pin_count">Number of Pins to Generate:</label>
    <input type="number" name="pin_count" id="pin_count" min="1" max="25" required>
    <button type="submit">Generate Pins</button>
</form>
</body>
</html>
