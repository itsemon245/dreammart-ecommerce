@if(Session::has('success'))
    @php
        $success = session("success");
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
                icon: "success",
                title: "{{$success}}",
            })
        })
    </script>
    @endpush
@endif


@if(Session::has('error'))
    @php
        $error = session("error");
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
                icon: "error",
                title: "{{$error}}",
            })
        })
    </script>
    @endpush
@endif

