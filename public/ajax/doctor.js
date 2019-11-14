$(function () {


    function loadSelect(items,healths,lang)
    {

        $('#result-specialty').empty()
            .append($('<select autocomplete="off" name="specialty" class="form-control"/>'));


        $.each( items, function( key, value ) {


            $('#result-specialty').find('select').append('<option value="'+value.id+'">'+value.name+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-specialty').find('select').append('<option value="'+item.id+'">-'+item.name+'</option>');

            });


        });


        $('#result-health').empty()
            .append($('<select autocomplete="off" name="health" class="form-control"/>'));


        $.each( healths, function( key, value ) {


            $('#result-health').find('select').append('<option value="'+value.id+'">'+value.name+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-health').find('select').append('<option value="'+item.id+'">-'+item.name+'</option>');

            });


        });

    }

    $('#request-specialty').change(function () {



        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/specialty/list/1",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response.specialty);
                        loadSelect(response.specialty,response.health,"fa");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;
            case '2':

                $.ajax({
                    type: "GET",
                    url: "/admin/specialty/list/2",
                    dataType: 'json',
                    success: function (response) {
                        console.log(response.specialty);
                        loadSelect(response.specialty,response.health,"en");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;

            default:
                $('#result-category')
                    .empty();
                break;




        }



    });







    function loadSelectSpe(items,lang)
    {

        $('#result-specialty-url').empty()
            .append($('<select autocomplete="off" name="parentSpe" class="form-control"/>'));

        if(lang==="fa")
        {
            $('#result-specialty-url').find('select').append('<option value="0"> بدون والد</option>');
        }
        else if(lang==="en")
        {
            $('#result-specialty-url').find('select').append('<option value="0"> no parent</option>');
        }
        
        $.each( items, function( key, value ) {


            $('#result-specialty-url').find('select').append('<option value="'+value.id+'">'+value.name+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-specialty-url').find('select').append('<option value="'+item.id+'">-'+item.name+'</option>');

            });


        });



    }

    $('#request-specialty-url').change(function () {


        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/specialty/list/1",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response.specialty);

                        loadSelectSpe(response.specialty,"fa");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;
            case '2':

                $.ajax({
                    type: "GET",
                    url: "/admin/specialty/list/2",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response.specialty);
                        loadSelectSpe(response.specialty,"en");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;

            default:
                $('#result-specialty-url')
                    .empty();
                break;




        }



    });








    function loadSelectHealth(items,lang)
    {

        $('#result-health-url').empty()
            .append($('<select autocomplete="off" name="parentHeal" class="form-control"/>'));

        if(lang==="fa")
        {
            $('#result-health-url').find('select').append('<option value="0"> بدون والد</option>');
        }
        else if(lang==="en")
        {
            $('#result-health-url').find('select').append('<option value="0"> no parent</option>');
        }

        $.each( items, function( key, value ) {


            $('#result-health-url').find('select').append('<option value="'+value.id+'">'+value.name+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-health-url').find('select').append('<option value="'+item.id+'">-'+item.name+'</option>');

            });


        });



    }

    $('#request-health-url').change(function () {


        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/health/list/1",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response);

                        loadSelectHealth(response,"fa");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;
            case '2':

                $.ajax({
                    type: "GET",
                    url: "/admin/health/list/2",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response);
                        loadSelectHealth(response,"en");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;

            default:
                $('#result-health-url')
                    .empty();
                break;




        }



    });










    function columnDoctor() {
        return columns = {
            data: ['counter', 'img', 'full_name' ,'specialties', 'health','created_at', 'statusBar', 'action'],
            order: {
                'counter': 0
            }
        }
    }


    columnDoctor();





});