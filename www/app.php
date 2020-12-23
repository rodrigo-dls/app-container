console.log('estamos conectados');

<!-- Evento disparador para verificacion del numero telefonico del Modal ABM -->
$telefono = '';
function getInputValue(){
            // Selecting the input element and get its value 
            var $inputVal_1 = document.getElementById("phoneNumberPrefix").value;
            var $inputVal_2 = document.getElementById("phoneNumber").value;
            
            // Displaying the value
            <!-- alert($inputVal); -->
            $prefijo     = $inputVal_1;
            $telefono    = $inputVal_2;
}
$( '#ABM-form__accept-phone-number' ).click(function() {
    <!-- console.log('çonectaste la funcion'); -->
    <?php include("includes/ABM/1-check-number-format.php") ?>;
    <?php include("includes/ABM/2-check-code-two-min.php") ?>;
    <?php include("includes/ABM/3-check-code-three-times.php") ?>;
    <?php include("includes/ABM/4-check-ip.php") ?>;
    <?php include("includes/ABM/5-code-generate.php") ?>;
    <?php include("includes/ABM/6-code-send.php") ?>;
    <?php include("includes/ABM/7-save-code-code-table.php") ?>;
    <?php include("includes/ABM/8-enable-field_access-code.php") ?>;

});

<!-- Evento para verificacion del numero telefonico con el codigo enviado -->
$( '#ABM-form__check-code').click(function() {
    <!-- console.log('çonectaste la funcion'); -->
    <?php include("includes/ABM/codes-validation/1-check-length.php") ?>;
    <?php include("includes/ABM/codes-validation/2-check-code.php") ?>;
    <?php include("includes/ABM/codes-validation/3-enable-field_next-action.php") ?>;
});

<!-- Evento para redireccionar pagina ABM -->
$( '#create-item').click(function() {
    <!-- console.log('çonectaste la funcion'); -->
    window.location.href = 'create-item.php?telefono=' + $telefono + '&prefijo=' + $prefijo;
});

$( '#edit-item').click(function() {
    <!-- console.log('çonectaste la funcion'); -->
    window.location.href = 'edit-item.php?telefono=' + $telefono + '&prefijo=' + $prefijo;
    <!-- alert($telefono); -->
});

$( '#update-in-db').click(function() {
    console.log('çonectaste la funcion update');
});
