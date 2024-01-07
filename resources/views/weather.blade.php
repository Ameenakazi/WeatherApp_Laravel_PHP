<!DOCTYPE html>
<html>
<head>
    <title>Weather Forecast App</title>
</head>
<body>
    <h1>Weather Forecast</h1>
    <form method="post" action="/weather">
        @csrf
        <input type="text" name="city" placeholder="Enter city">
        <button type="submit">Get Weather</button>
    </form>

    @if(isset($weatherData))
        <h2>Weather in {{ $weatherData['name'] }}</h2>
        <p>Temperature: {{ $weatherData['main']['temp'] }}°C</p>
        <p>Weather: {{ $weatherData['weather'][0]['description'] }}</p>
    @endif
</body>
</html>
