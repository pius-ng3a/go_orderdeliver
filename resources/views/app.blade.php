@yield('header')


    @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>

    @endif

@yield('content')





<script>
    $('div.alert').not('.alert-important').display(3000).slideUp(300);
</script>
@yield('footer')
