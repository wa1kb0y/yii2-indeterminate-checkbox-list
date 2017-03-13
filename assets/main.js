$(function() {

    $('input[type="checkbox"].cbx-indeterminate').change(function(e)
    {
        var check = $(this).prop('checked'),
            container = $(this).parent();

        container.find('input:checkbox').prop({
            indeterminate: false,
            checked: check
        });

        function checkSiblings(el) {
            var all = true,
                parent = el.parent().closest('li');
            el.siblings().each(function(){
                return all = ($(this).children('input:checkbox').prop('checked') === check);
            });
            if(all){
                parent.children('input:checkbox').prop({
                    indeterminate: false,
                    checked: check
                });
                checkSiblings(parent);
            }else{
                el.parents('li').children('input:checkbox').prop({
                    indeterminate: true,
                    checked: false
                });
            }
        }
        checkSiblings(container);
    });


    setTimeout(function(){
        //$('input[type="checkbox"].cbx-indeterminate').trigger('change');
    }, 100);

});
