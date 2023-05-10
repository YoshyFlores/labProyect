
<form action="{{ url('/paciente') }}" method="POST">
    @csrf
    @include('paciente.form')
</form>