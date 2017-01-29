function getHeaderAngle() {
    return Math.atan2(-15, document.documentElement.clientWidth) * 180 / Math.PI;
}

function setHeaderBrandRotation() {
    var transform = "rotate(" + getHeaderAngle() + "deg)";
    document.getElementById('header__brand').style.transform = transform;
}

setHeaderBrandRotation();
window.addEventListener("resize", setHeaderBrandRotation);
