
$(function() {
    $(".stack").draggable();

    $('#trash').droppable({
        drop: function(event, ui) {
            $(ui.draggable).remove();
        }
    });
});