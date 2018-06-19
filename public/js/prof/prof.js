(function ($) {
    $(document).ready(function () {
        $(".btn-danger").on("click", function () {
            event.preventDefault();
            var $a = $(this);
            $('.btn-danger').confirm({
                theme: 'dark',
                animation: 'right',
                closeAnimation: 'left',
                icon:'fa fa-trash-o',
                title: 'La suppression',
                content: 'Voulez vous vraiment supprimer',
                buttons: {
                    Oui: function () {
                        var url = $a.attr('href');
                        $.ajax(url, {
                            success: function () {
                                $a.parents('tr').fadeOut();
                            },
                            error: function () {
                                alert('error de suprission');
                            }
                        })
                    },
                    Annuler: function () {
                    }
                }
            });
        });
    });
}(jQuery));