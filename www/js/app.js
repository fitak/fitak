//Foundation.DropdownMenu.defaults.disableHover = true;
$(document).ready(function() {
    $(document).foundation();

    //Main menu creation
    var options = {disableHover: true, clickOpen: true, closeOnClick: true};
    var menu = new Foundation.DropdownMenu($('#dropdown-menu'), options);

    //initial hide
    $('.comments').hide();
    $('.replies').hide();
    $('.hide-replies').hide();
    $('.hide-comments').hide();
    $('.answer').hide();
    $('.hide-answers').hide();

    //Equalize height of main container and sidebar
    $('#main-container').attr('data-equalizer-watch', '');
    $('#sidebar').attr('data-equalizer-watch', '');
    var options = {equalizeOn: 'xlarge'};
    //var equalizer = new Foundation.Equalizer($('#page-wrapper'), options);

    //hiding replies
    $('.show-replies, .hide-replies').on('click', function () {
        $(this).siblings('.replies').slideToggle(300);
        $(this).siblings('.show-replies, .hide-replies').toggle();
        $(this).hide();

    });

    //hiding comments
    $('.show-comments, .hide-comments').on('click', function () {
        var parent = $(this).parent();
        parent.siblings('.comments').slideToggle(300);
        $(this).siblings('.show-comments, .hide-comments').toggle();
        $(this).hide();

    });

    //hiding answers
    $('.show-answers, .hide-answers').on('click', function () {
        var parent = $(this).parent();
        parent.siblings('.answer').slideToggle(300);
        $(this).siblings('.show-answers, .hide-answers').toggle();
        $(this).hide();
    });

});
