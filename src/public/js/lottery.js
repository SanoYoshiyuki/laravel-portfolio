function index () {
    //
}

function lottery (character, fee) {
    let f = document.createElement('form');
    f.method = 'post';
    f.action = '/lottery';
    f.innerHTML = '<input type="text" name="character" value=' + character + '>' +
                  '<input type="number" name="fee" value=' + fee + '>';
    document.body.append(f);
    f.submit();
}
