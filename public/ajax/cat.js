
$(function () {




    function loadSelect(items,lang)
    {

        $('#result-category-url').empty()
            .append($('<select autocomplete="off" name="parent" class="form-control"/>'));

        if(lang==="fa")
        {
            $('#result-category-url').find('select').append('<option value="0"> بدون والد</option>');
        }
        else if(lang==="en")
        {
            $('#result-category-url').find('select').append('<option value="0"> no parent</option>');
        }

        $.each( items, function( key, value ) {


                   $('#result-category-url').find('select').append('<option value="'+value.id+'">'+value.name+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-category-url').find('select').append('<option value="'+item.id+'">-'+item.name+'</option>');

            });


        });



    }


    $('#request-category-url').change(function () {


        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/cat/list/1",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response);

                        loadSelect(response,"fa");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;
            case '2':

                $.ajax({
                    type: "GET",
                    url: "/admin/cat/list/2",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response);
                        loadSelect(response,"en");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;

            default:
                $('#result-category-url')
                    .empty();
                break;




        }



    });


});