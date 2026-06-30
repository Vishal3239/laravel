<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
</div>
