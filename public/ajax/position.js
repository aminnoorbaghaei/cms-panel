
$(function () {



    function loadSelectPos(items,lang)
    {

        $('#insert-result-position').empty()
            .append($('<select autocomplete="off" name="parent" class="form-control"/>'));



        $.each( items, function( key, value ) {


            $('#insert-result-position').find('select').append('<option value="'+value.id+'">'+value.name+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#insert-result-position').find('select').append('<option value="'+item.id+'">-'+item.name+'</option>');

            });


        });



    }


    $('#insert-request-position-url').change(function () {


        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/position/list/1",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response);

                        loadSelectPos(response,"fa");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;
            case '2':

                $.ajax({
                    type: "GET",
                    url: "/admin/position/list/2",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response);
                        loadSelectPos(response,"en");
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






    function loadSelect(items,lang)
    {

        $('#result-position').empty()
            .append($('<select autocomplete="off" name="parentPos" class="form-control"/>'));

        if(lang==="fa")
        {
            $('#result-position').find('select').append('<option value="0"> بدون والد</option>');
        }
        else if(lang==="en")
        {
            $('#result-position').find('select').append('<option value="0"> no parent</option>');
        }

        $.each( items, function( key, value ) {


            $('#result-position').find('select').append('<option value="'+value.id+'">'+value.name+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-position').find('select').append('<option value="'+item.id+'">-'+item.name+'</option>');

            });


        });



    }


    $('#request-position-url').change(function () {


        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/position/list/1",
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
                    url: "/admin/position/list/2",
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