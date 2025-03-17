document.getElementById('registrationForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const name = document.getElementById('name').value.trim();
    const surname = document.getElementById('surname').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();
    const terms = document.getElementById('terms').checked;

    let valid = true;
    let messages = [];

    if (!name) {
        valid = false;
        messages.push("El nombre es obligatorio.");
    }

    if (!surname) {
        valid = false;
        messages.push("El apellido es obligatorio.");
    }

    if (!email) {
        valid = false;
        messages.push("El correo es obligatorio.");
    } else {
        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!email.match(emailPattern)) {
            valid = false;
            messages.push("El correo no es válido.");
        }
    }

    if (!phone) {
        valid = false;
        messages.push("El número de teléfono es obligatorio.");
    } else if (!/^\d{10}$/.test(phone)) {
        valid = false;
        messages.push("El número de teléfono debe tener 10 dígitos.");
    }

    if (!password) {
        valid = false;
        messages.push("La contraseña es obligatoria.");
    } else if (password.length < 6) {
        valid = false;
        messages.push("La contraseña debe tener al menos 6 caracteres.");
    }

    if (password !== confirmPassword) {
        valid = false;
        messages.push("Las contraseñas no coinciden.");
    }

    if (!terms) {
        valid = false;
        messages.push("Debes aceptar los términos y condiciones.");
    }

    if (!valid) {
        alert(messages.join('\n'));
    } else {
        alert("Registro exitoso!");
        window.location.href = 'login.html';
    }
});