function nextStep(step) {
    document.querySelector('.form-step.active').classList.remove('active');
    document.getElementById('step-' + step).classList.add('active');
    document.querySelector('.step.active').classList.remove('active');
    document.querySelectorAll('.step')[step - 1].classList.add('active');
}

function prevStep(step) {
    document.querySelector('.form-step.active').classList.remove('active');
    document.getElementById('step-' + step).classList.add('active');
    document.querySelector('.step.active').classList.remove('active');
    document.querySelectorAll('.step')[step - 1].classList.add('active');
}
