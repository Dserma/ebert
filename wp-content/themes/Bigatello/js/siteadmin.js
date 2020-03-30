jQuery(document).ready(function($){
    $('body').on('focus', '.validate-as-tel input', function(){
        $(this).mask("(99) 9999-9999?9");
    });
});
