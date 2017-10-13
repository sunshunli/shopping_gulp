!function(window, document, $, undefined) {
    /*程序的唯一入口*/
    var init = function() {
        initEvent();
    };
    /*绑定事件*/
    var initEvent = function() {
        $('#newBtn').on('click', onNewBtnClick);
        $('#saveBtn').on('click', onSaveBtnClick);
    };

    var onSaveBtnClick = function() {
        var url = '../../api/goods_add.php'
        var data = {
            title: $('#title').val(),
            price: $('#price').val(),
            details: $('#detail').val(),
            amount: $('#amount').val(),
            classify: $('#classify').val(),
            status: $('input[name=status]:checked').val(),
        };

        // TODO 表单验证
        if (data.title == '') {
            alert('商品名称不能为空');
            return false;
        }

        $.get(url, data, function(e) {
            alert(99);
        });



    };
    var onNewBtnClick = function() {
        $('#goodsDlg').modal();
    };


    $(document).ready(init);
}(window, document, jQuery);