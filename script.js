function showForm(formId) {
    document.querySelectorAll('.login-box').forEach(form => form.classList.remove('active'));
    document.getElementById(formId).classList.add('active');
}
