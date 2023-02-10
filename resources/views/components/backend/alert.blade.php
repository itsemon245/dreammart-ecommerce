@isset(session('_flash')['old'][0])
    @php
        $type = session('_flash')['old'][0];
        $message = session($type);
    @endphp
    @push('customJs') 
    <script>
        $(document).ready(function(){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: "{{$type}}",
                title: "{{$message}}",
            })
        })
    </script>
    @endpush
@endisset
