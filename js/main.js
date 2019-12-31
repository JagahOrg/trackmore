$(document).ready(() => {
    $('.sidenav').sidenav();
});

let instance = M.Sidenav.getInstance('#mobile-links');
instance.open();
