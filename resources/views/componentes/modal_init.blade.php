<style>
    .modal {
        transition: opacity 0.25s ease;
    }
    .modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
    }
    .guardar-activo {
        cursor: pointer;
        opacity: 1;
    }

    .guardar-inactivo {
        cursor: not-allowed;
        opacity: 0.3;
    }
</style>
<script>
    // Modal de cambio de ejecutivo
    // var modalActivo = "";
    // var datosModales = [];
    // const modalCambiarEjecutivo = document.querySelector('.modal_cambiar_ejecutivo');
    // modalCambiarEjecutivo.addEventListener('click', function(event){
    //     event.preventDefault()
    //     if (modalActivo === "") {
    //         var modal = event.currentTarget.getAttribute("modal-target").substring(0, event.currentTarget.getAttribute("modal-target").indexOf("_"))
    //         var eval = event.currentTarget.getAttribute("modal-target").substring(event.currentTarget.getAttribute("modal-target").indexOf("_")+1)
    //         rellenarModalCambiarEjecutivo(eval);
    //         abrirModal(modal);
    //         modalActivo = modal;
    //     } else {
    //         cerrarModal();
    //         modalActivo = "";
    //     }
    // })



    // // Cerrar por click en el fondo
    // const overlay = document.querySelector('.cambiar_ejecutivo_overlay')
    // var id = overlay.parentElement.parentElement.getAttribute("modal-target")
    // overlay.addEventListener('click', cerrarModal)
    //
    // // Cerrar por click en la cruz
    // var closemodal = document.querySelectorAll('.modal-close')
    // for (var i = 0; i < closemodal.length; i++) {
    //     closemodal[i].addEventListener('click', cerrarModal)
    // }
    //
    // // Cerrar por ESC
    // document.onkeydown = function(evt) {
    //     evt = evt || window.event
    //     var isEscape = false
    //     if ("key" in evt) {
    //         isEscape = (evt.key === "Escape" || evt.key === "Esc")
    //     } else {
    //         isEscape = (evt.keyCode === 27)
    //     }
    //     if (isEscape && document.body.classList.contains('modal-active')) {
    //         cerrarModal()
    //     }
    // };
    //
    //
    // function rellenarModalCambiarEjecutivo(evalId) {
    //     var modal = document.querySelector('#cambiar-ejecutivo');
    //     var nombre = modal.querySelector('#cambiar_ejecutivo_nombre');
    //     var rut = modal.querySelector('#cambiar_ejecutivo_rut');
    //     nombre.setAttribute('value', 'Nombrecillo');
    //     rut.setAttribute('value', '1');
    // }

</script>

