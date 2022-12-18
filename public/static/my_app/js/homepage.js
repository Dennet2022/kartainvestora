// This script relies on being called after the page has loaded, i.e. it should
// be included at the end of the body tag.

const EMAIL_SUBSCRIBE_ENDPOINT = '/email-subscribe/';

const emailSubscribeInput = document.getElementById('email-subscribe-input');
const emailSubscribeSubmit = document.getElementById('email-subscribe-submit');
emailSubscribeSubmit.addEventListener('click', handleEmailSubscribeSubmit);
const verifyMessage = document.getElementById('verify-msg');

function handleEmailSubscribeSubmit() {
  const email = emailSubscribeInput.value;
  if (!email) return;
  if (emailSubscribeInput.classList[0] === 'invalid-mail') {
    onSubscribeFailed(
      'The email you entered is not in the correct format. Please check.'
    );
    return;
  }
  fetch(EMAIL_SUBSCRIBE_ENDPOINT, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ email }),
  })
    .then(res => {
      if (res.ok) {
        onSubscribeSuccess('Thanks for subscribing!');
      } else {
        onSubscribeFailed(
          res.statusText === 'MEMBER_EXISTS_WITH_EMAIL_ADDRESS'
            ? 'You are already subscribed!'
            : 'Subscribe Failed!'
        );
      }
    })
    .catch(() => {
      onSubscribeFailed('Subscribe Failed!');
    });
}

function onSubscribeSuccess(message) {
  verifyMessage.style.display = 'block';
  verifyMessage.classList.remove('invalid-msg');
  verifyMessage.classList.add('valid-msg');
  verifyMessage.innerHTML = message;
  emailSubscribeInput.value = '';
}

function onSubscribeFailed(message) {
  verifyMessage.style.display = 'block';
  verifyMessage.classList.add('invalid-msg');
  verifyMessage.classList.remove('valid-msg');
  verifyMessage.innerHTML = message;
}
