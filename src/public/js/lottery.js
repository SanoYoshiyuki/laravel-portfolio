function index () {
    //
}

function lottery (character, fee) {
    alert(window.Lottery.user)

    let f = document.createElement('form');
    f.method = 'post';
    f.action = '/lottery';
    f.innerHTML = '<input type="text" name="character" value=' + character + '>' +
                  '<input type="number" name="fee" value=' + fee + '>';
    document.body.append(f);
    f.submit();
}
