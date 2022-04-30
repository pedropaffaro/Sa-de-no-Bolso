// https://developers.google.com/identity/gsi/web/guides/overview
// https://console.cloud.google.com/apis/credentials?hl=pt-br&project=steady-cat-348216&supportedpurview=project

function handleCredentialResponse(response) {
    const data = jwt_decode(response.credential);
    console.log(data);
}
window.onload = function () {
    google.accounts.id.initialize({
        client_id: "873894745442-tmbff7e8mlm2vjq3i3bree46e4smhs60.apps.googleusercontent.com",
        callback: handleCredentialResponse
    });
    google.accounts.id.renderButton(
        document.getElementById("buttonDiv"),
        { 
            type: "icon",
            shape: "circle",
            theme: "outline",
            text: "$ {button.text}",
            size: "large"
        }  // customization attributes
    );
    google.accounts.id.prompt(); // also display the One Tap dialog
}