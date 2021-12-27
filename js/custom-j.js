
//按下會員icon飄出登入註冊&換大標
let display = false;
$('div.member').click(function (event) {
    if (display == false) {
        $('div.member-sheet').addClass('tranXin');
        $('.memberText').addClass('tranXin');
        $('.hero-section-title').addClass('displayNone');
        display = true;
    } else {
        $('div.member-sheet').removeClass('tranXin');
        $('.memberText').removeClass('tranXin');
        $('.hero-section-title').removeClass('displayNone');
        display = false;
    }

    // event.stopPropagation();
    // if ($('div.member-sheet').hasClass('tranXin')) {
    //     alert('hass');
    //     $('div.member-sheet').removeClass('tranXin');
    //     $('.memberText').removeClass('tranXin');
    //     $('.hero-section-title').removeClass('displayNone');
    //     return false;
    // } 
    // else {
    //     alert('no');
    //     $('div.member-sheet').addClass('tranXin');
    //     $('.memberText').addClass('tranXin');
    //     $('.hero-section-title').addClass('displayNone');
    //     return false;
    // }
    // $('div.member-sheet').toggle(display){

    // }
});

//手機list sheet
let displayPhone = false;
$('div.threeLine').click(function (event) {
    // alert ('hi');
    $('div.threeLine').addClass('tranXin');
    // $('div.member-sheet').removeClass('tranXin');
    // $('.memberText').removeClass('tranXin');
    // $('.hero-section-title').removeClass('displayNone');
    // display = false;
    // if (displayPhone==false) {
    //     $('div.threeLine').addClass('tranXin');
    //     displayPhone = true;
    // } else {
    //     $('div.threeLine').removeClass('tranXin');
    //     displayPhone= false;
    // }
});


// 按下註冊顯示輸入資料
$('button.dtdregist').click(function (event) {
    event.preventDefault();
    if ($(this).hasClass("addbutLine")) {
        return false;
    } else {
        $(this).addClass('addbutLine');
        $('button.dtdlogin').removeClass('addbutLine');
        $('div.switchRegisSheet').removeClass('displayNone');
        $('div.switchLoginSheet').addClass('displayNone');
    }
});

// 按下登入顯示輸入資料
$('button.dtdlogin').click(function (event) {
    event.preventDefault();
    if ($(this).hasClass("addbutLine")) {
        return false;
    } else {
        $(this).addClass('addbutLine');
        $('button.dtdregist').removeClass('addbutLine');
        $('div.switchLoginSheet').removeClass('displayNone');
        $('div.switchRegisSheet').addClass('displayNone');
    }
});
//註冊取消扭
$('button.regcancel').click(function (event) {
    $('div.member-sheet').removeClass('tranXin');
    $('.memberText').removeClass('tranXin');
    $('.hero-section-title').removeClass('displayNone');
});


//註冊
$('button.regconfirm').click(function (event) {
    //避免元素的預設事件觸發
    event.preventDefault();

    //各自將 input 帶到變數中
    let input_email = $('input.regenteremail');
    let input_pwd = $('input.regenterpwd');
    let input_name = $('input.regentername');
    let input_repwd = $('input.regreenterpwd');


    //檢查 姓名 是否輸入
    if (input_name.val() == '') {
        alert(`請輸入姓名`);
        return false;
    }

    //判斷 email 是否符合自訂格式
    let re = /\S+@\S+(\.\S+)+/;
    if (!re.test(input_email.val())) {
        input_email
            .addClass("border border-danger border-2")
            .tooltip({
                title: "請填寫完整的 E-mail",
                placement: "top"
            })
            .tooltip('show');

        return false;
    } else {
        input_email
            .removeClass("border border-danger border-2")
            .tooltip()
            .tooltip('dispose');
    }

    //檢查 密碼 是否輸入
    if (input_pwd.val() == '') {
        alert(`請輸入密碼`);
        return false;
    }

    //檢查 重新輸入密碼 是否輸入
    if (input_repwd.val() == '') {
        alert(`請再次輸入密碼`);
        return false;
    }
    if (input_pwd.val() != input_repwd.val()) {
        alert(`請確再次輸入認密碼是否正確`);
        return false;
    }

    //送出 POST 請求，註冊帳號
    let objUser = {
        email: input_email.val(),
        pwd: input_pwd.val(),
        name: input_name.val(),
        repwd: input_repwd.val()
    };
    $.post("tephp/insertUser.php", objUser, function (obj) {
        if (obj['success']) {
            //關閉 modal
            $('div.member-sheet').hide();

            //成功訊息
            alert(`${obj['info']}`);

            //當成功訊息執行時，等1秒後，執行自訂程式
            setTimeout(function () {
                location.reload();
            }, 1000);
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');
});

//登入
$('button.loginbtn').click(function (event) {
    event.preventDefault();

    //各自將 input 帶入變數中
    let input_email = $('input.enteremail');
    let input_pwd = $('input.enterpsw');

    //檢查 email 是否輸入
    if (input_email.val() == '') {
        alert(`請輸入 E-mail`);
        return false;
    }

    //檢查 密碼 是否輸入
    if (input_pwd.val() == '') {
        alert(`請輸入 密碼`);
        return false;
    }

    //送出 post 請求
    let objUser = {
        email: input_email.val(),
        pwd: input_pwd.val()
    };

    $.post("tephp/login.php", objUser, function (obj) {
        if (obj['success']) {

            //成功訊息
            alert(`${obj['info']}`);
            $('div.member-sheet').removeClass('tranXin');
            $('.memberText').removeClass('tranXin');
            $('.hero-section-title').removeClass('displayNone');
            // 當成功訊息執行時，等數秒，執行自訂程式
            setTimeout(function () {
                location.reload();
            }, 0);
        } else {
            alert(`${obj['info']}`);
        }
        console.log(obj);
    }, 'json');
});

//登出
$('a#jlogout').click(function (event) {
    event.preventDefault();

    $.get('tephp/logout.php', function (obj) {
        if (obj['success']) {
            alert(`${obj['info']}`);

            setTimeout(function () {
                location.href = 'index.php';
            }, 1000);
        }
        console.log(obj);
    }, 'json');
});



$('div.view-more-j').click(function (event) {
    if ($('div.brand-text-info-2').hasClass("displayNone")) {
        $('div.brand-text-info-2').removeClass('displayNone');
    } else {
        $('div.brand-text-info-2').addClass('displayNone');
    }
});
