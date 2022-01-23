

//Swall Alert 2



const flashData = $('.flash-data').data('flashData');
if (flashData) {
    swal.fire({ 
        title : "Ingreso de Usuario",
        text: swal + flashData,
        icon: success
    })
}