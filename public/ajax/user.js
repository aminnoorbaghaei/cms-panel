$(function () {




    function loadSelect(items,lang)
    {

        $('#result-role').empty()
            .append($('<select autocomplete="off" name="role" class="form-control"/>'));


        $.each( items, function( key, value ) {


            $('#result-role').find('select').append('<option value="'+value.id+'">'+value.label+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-role').find('select').append('<option value="'+item.id+'">-'+item.label+'</option>');

            });


        });

    }



    $('#request-role').change(function () {



        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/role/list/1",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response.role);
                        loadSelect(response.role,"fa");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;
            case '2':

                $.ajax({
                    type: "GET",
                    url: "/admin/role/list/2",
                    dataType: 'json',
                    success: function (response) {
                        console.log(response.role);
                        loadSelect(response.role,"en");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;

            default:
                $('#result-role')
                    .empty();
                break;




        }



    });






    function loadSelectRole(items,lang)
    {

        $('#result-role-url').empty()
            .append($('<select autocomplete="off" name="parentRole" class="form-control"/>'));

        if(lang==="fa")
        {
            $('#result-role-url').find('select').append('<option value="0"> بدون والد</option>');
        }
        else if(lang==="en")
        {
            $('#result-role-url').find('select').append('<option value="0"> no parent</option>');
        }

        $.each( items, function( key, value ) {


            $('#result-role-url').find('select').append('<option value="'+value.id+'">'+value.label+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-role-url').find('select').append('<option value="'+item.id+'">-'+item.label+'</option>');

            });


        });



    }

    $('#request-role-url').change(function () {


        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/role/list/1",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response.role);

                        loadSelectRole(response.role,"fa");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;
            case '2':

                $.ajax({
                    type: "GET",
                    url: "/admin/role/list/2",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response.role);
                        loadSelectRole(response.role,"en");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;

            default:
                $('#result-role-url')
                    .empty();
                break;




        }



    });



    function loadSelectPermission(items,lang)
    {

        $('#result-permission-url').empty()
            .append($('<select autocomplete="off" name="parentSpe" class="form-control"/>'));

        if(lang==="fa")
        {
            $('#result-permission-url').find('select').append('<option value="0"> بدون والد</option>');
        }
        else if(lang==="en")
        {
            $('#result-permission-url').find('select').append('<option value="0"> no parent</option>');
        }

        $.each( items, function( key, value ) {


            $('#result-permission-url').find('select').append('<option value="'+value.id+'">'+value.label+'</option>');

            listchild=value.childlist;

            $.each( listchild, function( index, item ) {

                $('#result-permission-url').find('select').append('<option value="'+item.id+'">-'+item.label+'</option>');

            });


        });



    }

    $('#request-permission-url').change(function () {


        switch($(this).val())
        {



            case '1':

                $.ajax({
                    type: "GET",
                    url: "/admin/permission/list/1",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response.permission);

                        loadSelectPermission(response.permission,"fa");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;
            case '2':

                $.ajax({
                    type: "GET",
                    url: "/admin/permission/list/2",
                    dataType: 'json',
                    success: function (response) {

                        console.log(response.permission);
                        loadSelectPermission(response.permission,"en");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError);
                    }
                });
                break;

            default:
                $('#result-permission-url')
                    .empty();
                break;




        }



    });







    function columnUser() {
        return columns = {
            data: ['counter', 'img', 'full_name','role' , 'created_at', 'statusBar', 'action'],
            order: {
                'counter': 0
            }
        }
    }


    columnUser();





});