<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'ERROR',
            text: '{{ session('error') }}',
            showCancelButton: true,
            confirmButtonText: "Intentarlo De Nuevo.",
            cancelButtonText: "Cancelar",
        }).then(resultado => {
        if (resultado.value) {
            
            setTimeout(function(){
                location.hash = "#contact" ;
            }, 500);
        } else{
            console.log("Cierra Dialogo !");
        }
    });
    </script>
    @endif
    @if (session('success'))
    <script>
    Swal.fire({
        icon: 'success',
        title: 'INFORMACIÓN',
        text: '{{ session('success') }}',
        confirmButtonText: "Gracias Por Su Mensaje.",
    })
    </script>
    @endif