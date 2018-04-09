/**
 * @author waar0003
 */
$(document).ready(function() {
   /* Get all rows from your 'table' but not the first one 
     * that includes headers. */
    var rows = $('.selectiontable tr');

    /* Create 'click' event handler for rows */
    rows.on('click', function(e) {

        /* Get current row */
        var row = $(this);

        /* Check if 'Ctrl', 'cmd' or 'Shift' keyboard key was pressed
         * 'Ctrl' => is represented by 'e.ctrlKey' or 'e.metaKey'
         * 'Shift' => is represented by 'e.shiftKey' */
        if ((e.ctrlKey || e.metaKey) || e.shiftKey) {
            /* If pressed highlight the other row that was clicked */
            row.addClass('highlight');
        } else {
            /* Otherwise just highlight one row and clean others */
            rows.removeClass('highlight');
            row.addClass('highlight');
        }

    });


});
