function submitForm(form) {
    if (!validateForm(form)) {
        return;
    }

    const args = $("#form").serialize();

    let request = new XMLHttpRequest();
    request.open('GET', 'generate_results.php?' + args, true);
    request.onreadystatechange = () => {
        if (request.status !== 200) {
            return;
        }

        $("#results").html(request.responseText);
    };

    request.send();
}

function validateForm(form) {
    const valid = checkForm(form);

    if (!valid) {
        document
            .getElementById('results')
            .textContent =
            'Введены некорректные значения';
    }

    return valid;
}

function checkForm(form) {
    let non_valid = false;

    non_valid |= validateX();
    non_valid |= validateY(form.y.value);
    non_valid |= validateR(form.r.value);

    return !non_valid;
}

function validateX() {
    const count = Array.from(document.getElementsByName("x"))
        .filter(x => x.type && (x.type === "checkbox"))
        .map(x => x.checked)
        .reduce((a, x) => a + x);

    return count !== 1;
}

function validateR(value) {
    return value === '';
}

function validateY(input) {
    const y = Number(input);
    return isNaN(y) || y <= -3.0 || y >= 3.0;
}