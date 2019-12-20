document.addEventListener('DOMContentLoaded', function () {

  let step = 'step1';

  const step1 = document.getElementById('step1');
  const step2 = document.getElementById('step2');
  const step3 = document.getElementById('step3');

  document.getElementById('gform_next_button_2_15').onclick = function () {
    next()
  };

  function next() {
    if (step === 'step1') {
      step = 'step2';
      step1.classList.remove('is-active');
      step1.classList.add('is-complete');
      step2.classList.add('is-active');

    } else if (step === 'step2') {
      step = 'step3';
      step2.classList.remove('is-active');
      step2.classList.add('is-complete');
      step3.classList.add('is-active');

    } else if (step === 'step3') {
      step = 'step4d';
      step3.classList.remove('is-active');
      step3.classList.add('is-complete');

    } else if (step === 'complete') {
      step = 'step1';
      step3.classList.remove('is-complete');
      step2.classList.remove('is-complete');
      step1.classList.remove('is-complete');
      step1.classList.add('is-active');
    }
  }
});