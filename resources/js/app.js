// data属性を通じて、フォームの項目に値をいれる
$('#myModal').on('show.bs.modal', function (event) {
    console.log("モーダルが開きました");
    var button = jQuery('#modalbutton')
    var heading = button.data('heading')
    var content = button.data('content') // Extract info from data-* attributes
    var modal = jQuery(this)
    modal.find('#heading').val(heading);
    modal.find('#content').text(content);
});

// エラーがあった場合は、モーダルは再度開く
$(document).ready(function() {
    if($('.alert').length) {
        $('#myModal').modal('show');
    }
});
