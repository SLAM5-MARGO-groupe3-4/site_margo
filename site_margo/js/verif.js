window.onload = function() {
    document.getElementById("btnVerif").onclick = function() {
        var ok = 1;
        if (document.getElementById("txtLogin").value === "") {
            ok = 0;
            alert("Le login doit être complété");
            formloginMdp.getElementById("txtLogin").Focus();
            return false;
        }
        if (document.getElementById("pwdMdp").value === "") {
            ok = 0;
            alert("Le mot de passe doit être complété");
            formloginMdp.getElementById("pwdMdp").Focus();
            return false;
        }
        if (ok === 1) {
            alert("dedans");
            formloginMdp.submit();
        }
        formloginMdp.submit();
    }
}