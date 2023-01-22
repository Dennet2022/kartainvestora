// This is the javascript for the base.html files


//**********************EMAIL validation input color
function validation() {
    var form = document.getElementById("form");
    var input = document.getElementById("email-subscribe-input");
    var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{1,4})+$/;
    if (pattern.test(input.value)) {
        input.classList.add("valid-mail")
        input.classList.remove("invalid-mail")

    } else {
        input.classList.remove("valid-mail")
        input.classList.add("invalid-mail")
    }
}

function validationModal() {
    var form = document.getElementById("form-modal");
    var input = document.getElementById("email-subscribe-input-modal");
    var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{1,4})+$/;
    if (pattern.test(input.value)) {
        input.classList.add("valid-mail")
        input.classList.remove("invalid-mail")

    } else {
        input.classList.remove("valid-mail")
        input.classList.add("invalid-mail")
    }
}

//this is for the modal
if (Cookies.get('modalAppear') === "disabled") {
    Cookies.set('modalAppear', 'enabled')
}
;


if (Cookies.get('modalAppear') === "enabled" && /iPad|iPhone|iPod/.test(navigator.userAgent)) {
    setTimeout(function () {
        $('#myModal').modal();
    }, 6000);
}


$('#closemodal').click(function () {
    $('#myModal').modal('hide');
})

$('#myModal').on('hidden.bs.modal', function () {
    Cookies.set('modalAppear', 'disabled', {expires: 6})
})


//Validation messages for modal
//modaaaaaaaaal


const EMAIL_SUBSCRIBE_ENDPOINT_MODAL = '/email-subscribe/';

document.getElementById('email-subscribe-submit-modal').addEventListener('click', function (e) {
    e.preventDefault();
    return true;
});


const emailSubscribeInputModal = document.getElementById('email-subscribe-input-modal');
const emailSubscribeSubmitModal = document.getElementById('email-subscribe-submit-modal');

emailSubscribeSubmitModal.addEventListener('click', handleEmailSubscribeSubmitModal);
const verifyMessageModal = document.getElementById('verify-msg-modal');

function handleEmailSubscribeSubmitModal() {
    document.getElementById("email-subscribe-submit-modal").style.bottom = "80px"
    const email = emailSubscribeInputModal.value;
    if (!email) return;
    if (emailSubscribeInputModal.classList[0] === 'invalid-mail') {
        onSubscribeFailedModal(
            'The email you entered is not in the correct format. Please check.'
        );
        return;
    }
    fetch(EMAIL_SUBSCRIBE_ENDPOINT_MODAL, {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({email}),
    })
        .then(res => {
            if (res.ok) {
                onSubscribeSuccessModal('Thanks for subscribing!');
                Cookies.set('modalAppear', 'disabled', {expires: 90})
                setTimeout(function () {
                    $('#myModal').modal('hide')
                }, 1500)
            } else {
                onSubscribeFailedModal(
                    res.statusText === 'MEMBER_EXISTS_WITH_EMAIL_ADDRESS'
                        ? 'You are already subscribed!'
                        : 'Subscribe Failed!'
                );
            }
        })
        .catch(() => {
            onSubscribeFailedModal('Subscribe Failed!');
        });
}

function onSubscribeSuccessModal(message) {

    verifyMessageModal.style.display = 'block';
    verifyMessageModal.classList.remove('invalid-msg');
    verifyMessageModal.classList.add('valid-msg');
    verifyMessageModal.innerHTML = message;
    emailSubscribeInputModal.value = '';

}

function onSubscribeFailedModal(message) {

    verifyMessageModal.style.display = 'block';
    verifyMessageModal.classList.add('invalid-msg');
    verifyMessageModal.classList.remove('valid-msg');
    verifyMessageModal.innerHTML = message;
}
