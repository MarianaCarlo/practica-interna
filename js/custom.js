
function checkCodigo(){
    if($("#codigo").val()==""){
        $("#codigo").addClass('is-invalid');
        return false;
    } else{
        var regMail =  /^([0-9])*$/;    
        if(regMail.test($("#codigo").val()) == false){
            $("#codigo").addClass('is-invalid');
            return false;
        }else{
            $("#codigo").removeClass('is-invalid');
        }
        if(this.value.length > this.maxLength) {
            this.value = this.value.slice(0, this.maxLength);
        }

    }
}



