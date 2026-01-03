<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>body { padding-bottom: 40px; }</style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Task Management</a>
      </div>
    </nav>

    <main class="py-4">
      <div class="container">
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @yield('content')
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
