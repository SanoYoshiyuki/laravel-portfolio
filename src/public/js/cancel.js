function cancel (transaction) {
    console.log(transaction.value);
    let f = document.createElement('form');
    f.method = 'post';
    f.action = '/cancel';
    f.innerHTML = '<input type="number" name="transaction_id" value=' + transaction.value + '>';
    document.body.append(f);
    f.submit();
}
