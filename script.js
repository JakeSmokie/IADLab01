async function submitForm(form) {
    if (!validateForm(form)) {
        return;
    }

    const args = $("#form").serialize();
    const response = await $.get('generate_results.php?' + args);

    $("#results").html(response);
}

function validateForm(form) {
    const valid = checkForm(form);

    if (!valid) {
        $("#results").html('Введены некорректные значения');
    }

    return valid;
}

function checkForm(form) {
    let invalid = false;

    invalid |= validateX();
    invalid |= validateY(form.y.value);
    invalid |= validateR(form.r.value);

    return !invalid;
}

function validateX() {
    return $("input:checkbox:checked").length !== 1;
}

function validateR(value) {
    return value === '';
}

function validateY(input) {
    const y = Number(input);
    return isNaN(y) || y <= -3.0 || y >= 3.0;
}