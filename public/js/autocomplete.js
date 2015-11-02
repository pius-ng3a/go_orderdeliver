/**
 * Created by munde on 9/29/15.
 */
$(function()
{
    $( "#q" ).autocomplete({
        source: "search/autocomplete",
        minLength: 1,
        select: function(event, ui) {
            $('#q').val(ui.item.value);
        }
    });
});