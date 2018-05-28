<!DOCTYPE html>
<html>
<head>
    <title>Caregiver {{ $caregiver->id }}</title>
</head>
<body>
<h1>Caregiver {{ $caregiver->id }}</h1>
<ul>
    <li>Make: {{ $caregiver->make }}</li>
    <li>Model: {{ $caregiver->model }}</li>
    <li>Produced on: {{ $caregiver->produced_on }}</li>
</ul>
</body>
</html>
