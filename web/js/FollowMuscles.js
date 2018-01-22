$(document).ready(function(){
  
    $('#large-muscle-photo').on('change', function() {
        var file = this.files[0];
        var mo = Math.pow(1024,2);
        if (file.size > mo * 10) {
            alert('Size of the chosen photo : ' + Math.round(file.size/mo) + "Mo. \nMax upload size is 10. ");
            return false;
        }
        
    });
});