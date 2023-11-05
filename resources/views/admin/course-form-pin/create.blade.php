<form method="POST" action="{{ route('admin.course-form-pin.generate') }}">
    @csrf
    <label for="num_to_generate">Number of Pins to Generate:</label>
    <input type="number" name="num_to_generate" id="num_to_generate">
    <button type="submit">Generate</button>
</form>

@if(isset($pins))
    <h3>Generated Pins:</h3>
    <ul>
        @foreach($pins as $pin)
            <li>{{ $pin }}</li>
        @endforeach
    </ul>
@endif

<script>
    function generatePins() {
        const numToGenerate = document.getElementById('num_to_generate').value;
        const generatedPinsList = document.getElementById('generated-pins-list');

        while (generatedPinsList.firstChild) {
            generatedPinsList.removeChild(generatedPinsList.firstChild);
        }

        for (let i = 0; i < numToGenerate; i++) {
            // Use your method to generate alphanumeric pins here
            const pin = generateAlphanumeric(29); // Implement this function
            const listItem = document.createElement('li');
            listItem.textContent = pin;
            generatedPinsList.appendChild(listItem);
        }
    }
</script>
